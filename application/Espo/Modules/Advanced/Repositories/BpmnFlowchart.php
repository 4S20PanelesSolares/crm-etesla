<?php
/*********************************************************************************
 * The contents of this file are subject to the EspoCRM Advanced Pack
 * Agreement ("License") which can be viewed at
 * https://www.espocrm.com/advanced-pack-agreement.
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * sublicense, resell, rent, lease, distribute, or otherwise  transfer rights
 * or usage to the software.
 * 
 * Copyright (C) 2015-2019 Letrium Ltd.
 * 
 * License ID: b05a39a2254aff91765cddbd4982f2af
 ***********************************************************************************/

namespace Espo\Modules\Advanced\Repositories;

use \Espo\ORM\Entity;

class BpmnFlowchart extends \Espo\Core\ORM\Repositories\RDB
{
    protected function getItemById($data, $id)
    {
        foreach ($data->list as $item) {
            if ($item->id === $id) {
                return $item;
            }
        }
    }

    protected function beforeSave(Entity $entity, array $options = array())
    {
        parent::beforeSave($entity, $options);

        $handleFlowchartData = false;

        if ($entity->isNew() || json_encode($entity->get('data')) !== json_encode($entity->getFetched('data'))) {
            $handleFlowchartData = true;
        }

        $eventStartIdList = [];

        if ($handleFlowchartData) {
            $elementsDataHash = (object) [];
            $data = $entity->get('data');
            if (isset($data->list) && is_array($data->list)) {
                foreach ($data->list as $item) {
                    if (!is_object($item)) continue;
                    if ($item->type === 'flow') continue;
                    $nextElementIdList = [];
                    $previousElementIdList = [];
                    foreach ($data->list as $itemAnother) {
                        if ($itemAnother->type !== 'flow') continue;
                        if (!isset($itemAnother->startId) || !isset($itemAnother->endId)) continue;
                        if ($itemAnother->startId === $item->id) {
                            $nextElementIdList[] = $itemAnother->endId;
                        } else if ($itemAnother->endId === $item->id) {
                            $previousElementIdList[] = $itemAnother->startId;
                        }
                    }
                    usort($nextElementIdList, function ($id1, $id2) use ($data) {
                        $item1 = $this->getItemById($data, $id1);
                        $item2 = $this->getItemById($data, $id2);
                        if (isset($item1->center) && isset($item2->center)) {
                            if ($item1->center->y > $item2->center->y) {
                                return true;
                            } else if ($item1->center->y == $item2->center->y) {
                                if ($item1->center->x > $item2->center->x) {
                                    return true;
                                }
                            }
                        }
                    });
                    $id = $item->id;
                    $o = clone $item;
                    $o->nextElementIdList = $nextElementIdList;
                    $o->previousElementIdList = $previousElementIdList;

                    if (isset($item->flowList)) {
                        $o->flowList = [];
                        foreach ($item->flowList as $nextFlowData) {
                            $nextFlowDataCloned = clone $nextFlowData;
                            foreach ($data->list as $itemAnother) {
                                if ($itemAnother->id !== $nextFlowData->id) continue;
                                $nextFlowDataCloned->elementId = $itemAnother->endId;
                                break;
                            }
                            $o->flowList[] = $nextFlowDataCloned;
                        }
                    }
                    if (!empty($item->defaultFlowId)) {
                        foreach ($data->list as $itemAnother) {
                            if ($itemAnother->id !== $item->defaultFlowId) continue;
                            $o->defaultNextElementId = $itemAnother->endId;
                            break;
                        }
                    }
                    if ($item->type === 'eventStart') {
                        $eventStartIdList[] = $id;
                    }
                    $elementsDataHash->$id = $o;
                }
            }
            $entity->set('elementsDataHash', $elementsDataHash);
            $entity->set('hasNoneStartEvent', count($eventStartIdList) > 0);
            $entity->set('eventStartIdList', $eventStartIdList);
        }
    }

    protected function afterSave(Entity $entity, array $options = array())
    {
        parent::afterSave($entity, $options);

        $workflowList = $this->getEntityManager()->getRepository('Workflow')->where([
            'flowchartId' => $entity->id,
            'isInternal' => true
        ])->find();

        $workflowsToRecreate = false;

        if (!$entity->isNew() && json_encode($entity->get('data')) !== json_encode($entity->getFetched('data'))) {
            $workflowsToRecreate = true;
        }

        if ($entity->isNew() || $workflowsToRecreate) {
            $this->removeWorkflows($entity);

            $data = $entity->get('data');
            if (isset($data->list) && is_array($data->list)) {
                foreach ($data->list as $item) {
                    if (!is_object($item)) continue;
                    if ($item->type === 'eventStartConditional' && in_array($item->triggerType, ['afterRecordCreated', 'afterRecordSaved'])) {
                        $workflow = $this->getEntityManager()->getEntity('Workflow');
                        $conditionsAll = [];
                        if (isset($item->conditionsAll)) {
                            $conditionsAll = $item->conditionsAll;
                        }
                        $conditionsAny = [];
                        if (isset($item->conditionsAny)) {
                            $conditionsAny = $item->conditionsAny;
                        }
                        $conditionsFormula = null;
                        if (isset($item->conditionsFormula)) {
                            $conditionsFormula = $item->conditionsFormula;
                        }
                        $workflow->set([
                            'type' => $item->triggerType,
                            'entityType' => $entity->get('targetType'),
                            'isInternal' => true,
                            'flowchartId' => $entity->id,
                            'isActive' => $entity->get('isActive'),
                            'conditionsAll' => $conditionsAll,
                            'conditionsAny' => $conditionsAny,
                            'conditionsFormula' => $conditionsFormula,
                            'actions' => [
                                (object) [
                                    'type' => 'startBpmnProcess',
                                    'flowchartId' => $entity->id,
                                    'elementId' => $item->id,
                                    'cid' => 0
                                ]
                            ]
                        ]);
                        $this->getEntityManager()->saveEntity($workflow);
                    }
                    if ($item->type === 'eventStartTimer' && !empty($item->targetReportId) && !empty($item->scheduling)) {
                        $workflow = $this->getEntityManager()->getEntity('Workflow');
                        $workflow->set([
                            'type' => 'scheduled',
                            'entityType' => $entity->get('targetType'),
                            'isInternal' => true,
                            'flowchartId' => $entity->id,
                            'isActive' => $entity->get('isActive'),
                            'scheduling' => $item->scheduling,
                            'targetReportId' => $item->targetReportId,
                            'targetReportName' => $item->targetReportId,
                            'actions' => [
                                (object) [
                                    'type' => 'startBpmnProcess',
                                    'flowchartId' => $entity->id,
                                    'elementId' => $item->id,
                                    'cid' => 0
                                ]
                            ]
                        ]);
                        $this->getEntityManager()->saveEntity($workflow);
                    }
                }
            }
        }

        if ($entity->isAttributeChanged('isActive') && !$entity->isNew() && !$workflowsToRecreate) {
            foreach ($workflowList as $workflow) {
                if ($workflow->get('isActive') !== $entity->get('isActive')) {
                    $workflow->set('isActive', $entity->get('isActive'));
                    $this->getEntityManager()->saveEntity($workflow);
                }
            }
        }
    }

    protected function removeWorkflows(Entity $entity)
    {
        $workflowList = $this->getEntityManager()->getRepository('Workflow')->where([
            'flowchartId' => $entity->id,
            'isInternal' => true
        ])->find();
        foreach ($workflowList as $workflow) {
            $this->getEntityManager()->removeEntity($workflow);
            $this->getEntityManager()->getRepository('Workflow')->deleteFromDb($workflow->id);
        }
    }

    protected function afterRemove(Entity $entity, array $options = array())
    {
        parent::afterRemove($entity, $options);
        $this->removeWorkflows($entity);
    }
}