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

namespace Espo\Modules\Advanced\Core\Workflow\Actions;

use Espo\ORM\Entity;
use Espo\Core\Exceptions\Error;

class ApplyAssignmentRule extends BaseEntity
{
    protected function run(Entity $entity, $actionData)
    {
        $entityManager = $this->getEntityManager();

        $target = null;
        if (!empty($actionData->target)) {
            $target = $actionData->target;
        }

        if ($target === 'process') {
            $entity = $this->bpmnProcess;
        } else if (strpos($target, 'created:') === 0) {
            $entity = $this->getCreatedEntity($target);
        }

        if (!$entity) {
            return false;
        }

        if (!$entity->hasAttribute('assignedUserId') || !$entity->hasRelation('assignedUser')) return;

        $reloadedEntity = $entityManager->getEntity($entity->getEntityType(), $entity->id);

        if (empty($actionData->targetTeamId) || empty($actionData->assignmentRule)) {
            $GLOBALS['log']->error('AssignmentRule: Not enough parameters.');
            throw new Error();
        }

        $targetTeamId = $actionData->targetTeamId;
        $assignmentRule = $actionData->assignmentRule;

        $targetUserPosition = null;
        if (!empty($actionData->targetUserPosition)) {
            $targetUserPosition = $actionData->targetUserPosition;
        }

        $listReportId = null;
        if (!empty($actionData->listReportId)) {
            $listReportId = $actionData->listReportId;
        }

        if (!in_array($assignmentRule, $this->getMetadata()->get('entityDefs.Workflow.assignmentRuleList', []))) {
            $GLOBALS['log']->error('AssignmentRule: ' . $assignmentRule . ' is not supported.');
            throw new Error();
        }

        $className = '\\Espo\\Custom\\Business\\Workflow\\AssignmentRules\\' . str_replace('-', '', $assignmentRule);
        if (!class_exists($className)) {
            $className = '\\Espo\\Modules\\Advanced\\Business\\Workflow\\AssignmentRules\\' . str_replace('-', '', $assignmentRule);
            if (!class_exists($className)) {
                $GLOBALS['log']->error('AssignmentRule: Class ' . $className . ' not found.');
                throw new Error();
            }
        }

        $selectManager = $this->getContainer()->get('selectManagerFactory')->create($entity->getEntityType());
        $reportService = $this->getContainer()->get('serviceFactory')->create('Report');

        $rule = new $className($entityManager, $selectManager, $reportService, $entity->getEntityType());

        $attributes = $rule->getAssignmentAttributes($entity, $targetTeamId, $targetUserPosition, $listReportId);

        $entity->set($attributes);
        $reloadedEntity->set($attributes);

        return $entityManager->saveEntity($reloadedEntity, [
            'skipWorkflow' => true,
            'noStream' => true,
            'noNotifications' => true,
            'skipModifiedBy' => true,
            'skipCreatedBy' => true
        ]);
    }
}