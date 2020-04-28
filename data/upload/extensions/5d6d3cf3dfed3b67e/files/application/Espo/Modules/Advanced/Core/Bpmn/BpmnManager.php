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

namespace Espo\Modules\Advanced\Core\Bpmn;

use \Espo\Core\Exceptions\Error;
use \Espo\Modules\Advanced\Entities\BpmnFlowchart;
use \Espo\Modules\Advanced\Entities\BpmnProcess;
use \Espo\Modules\Advanced\Entities\BpmnFlowNode;

use \Espo\ORM\Entity;

class BpmnManager
{
    protected $container;

    const PROCEED_PENDING_MAX_SIZE = 1000;

    protected function getEntityManager()
    {
        return $this->container->get('entityManager');
    }

    protected function getConfig()
    {
        return $this->container->get('config');
    }

    public function __construct(\Espo\Core\Container $container)
    {
        $this->container = $container;
    }

    public function startCreatedProcess(BpmnProcess $process)
    {
        if ($process->get('status') !== 'Created') {
            throw new Error("Bpmn Manager: Could not start process with status " . $process->get('status') . ".");
        }
        $flowchartId = $process->get('flowchartId');
        if (!$flowchartId) {
            throw new Error("Bpmn Manager: Could not start process w/o flowchartId specified.");
        }
        $startElementId = $process->get('startElementId');

        $targetId = $process->get('targetId');
        $targetType = $process->get('targetType');
        if (!$targetId || !$targetType) {
            throw new Error("Bpmn Manager: Could not start process w/o targetId or targetType.");
        }

        $flowchart = $this->getEntityManager()->getEntity('BpmnFlowchart', $flowchartId);
        $target = $this->getEntityManager()->getEntity($targetType, $targetId);

        if (!$flowchart) {
            throw new Error("Bpmn Manager: Could not find flowchart.");
        }
        if (!$target) {
            throw new Error("Bpmn Manager: Could not find flowchart.");
        }
        $this->startProcess($target, $flowchart, $startElementId, $process);
    }

    public function startProcess(Entity $target, BpmnFlowchart $flowchart, $startElementId = null, $process = null)
    {
        $GLOBALS['log']->debug("BPM: startProcess, flowchart {$flowchart->id}, target {$target->id}");

        $elementsDataHash = $flowchart->get('elementsDataHash');

        if ($startElementId) {
            $this->checkFlowchartItemPropriety($elementsDataHash, $startElementId);
            $startItem = $elementsDataHash->$startElementId;
            if (!in_array($startItem->type, ['eventStartConditional', 'eventStartTimer', 'eventStart'])) throw new Error();
        }

        $whereClause = [
            'targetId' => $target->id,
            'targetType' => $flowchart->get('targetType'),
            'status' => ['Started', 'Paused'],
            'flowchartId' => $flowchart->id
        ];

        $existingProcess = $this->getEntityManager()->getRepository('BpmnProcess')->where($whereClause)->findOne();
        if ($existingProcess) {
            throw new Error("Process for flowchart " . $flowchart->id . " can't be run because process is already running.");
            return;
        }

        if (!$process) {
            $process = $this->getEntityManager()->getEntity('BpmnProcess');
            $process->set([
                'name' => $flowchart->get('name'),
                'assignedUserId' => $flowchart->get('assignedUserId'),
                'teamsIds' => $flowchart->getLinkMultipleIdList('teams'),
                'createdById' => 'system',
            ]);
        }

        $process->set([
            'name' => $flowchart->get('name'),
            'flowchartId' => $flowchart->id,
            'targetId' => $target->id,
            'targetType' => $flowchart->get('targetType'),
            'flowchartData' => $flowchart->get('data'),
            'flowchartElementsDataHash' => $elementsDataHash,
            'assignedUserId' => $flowchart->get('assignedUserId'),
            'teamsIds' => $flowchart->getLinkMultipleIdList('teams'),
            'status' => 'Started',
            'createdEntitiesData' => (object) [],
            'variables' => (object) [],
            'startElementId' => $startElementId
        ]);
        $this->getEntityManager()->saveEntity($process, ['skipCreatedBy' => true, 'skipModifiedBy' => true, 'skipStartProcessFlow' => true]);

        if ($startElementId) {
            $this->processFlow($target, $process, $startElementId);
        } else {
            $startElementIdList = $this->getProcessElementWithoutIncomingFlowIdList($process);
            $flowNodeList = [];
            foreach ($startElementIdList as $elementId) {
                $flowNode = $this->prepareFlow($target, $process, $elementId);
                $flowNodeList[] = $flowNode;
            }
            if (!count($flowNodeList)) {
                $this->endProcess($process);
            }
            foreach ($flowNodeList as $flowNode) {
                $this->processPreparedFlowNode($target, $flowNode, $process);
            }
        }
    }

    protected function getProcessElementWithoutIncomingFlowIdList(BpmnProcess $process)
    {
        $elementsDataHash = $process->get('flowchartElementsDataHash');
        $elementIdList = array_keys(get_object_vars($elementsDataHash));
        usort($elementIdList, function ($id1, $id2) use ($elementsDataHash) {
            $item1 = $elementsDataHash->$id1;
            $item2 = $elementsDataHash->$id2;
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

        $resultElementIdList = [];
        foreach ($elementIdList as $id) {
            $item = $elementsDataHash->$id;
            if (empty($item->type)) continue;
            if (in_array($item->type, ['flow', 'eventIntermediateLinkCatch']) || strpos($item->type, 'eventStart') === 0) continue;
            if (!empty($item->previousElementIdList)) continue;
            if (!empty($item->isForCompensation)) continue;
            $resultElementIdList[] = $id;
        }
        return $resultElementIdList;
    }

    protected function checkFlowchartItemPropriety(\StdClass $elementsDataHash, $elementId)
    {
        if (!$elementId) throw new Error('No start event element.');
        if (!is_object($elementsDataHash)) throw new Error();
        if (!isset($elementsDataHash->$elementId) || !is_object($elementsDataHash->$elementId)) throw new Error('Not existing start event element id.');
        $item = $elementsDataHash->$elementId;
        if (!isset($item->type)) throw new Error('Bad start event element.');
    }

    public function prepareFlow(Entity $target, BpmnProcess $process, $elementId, $previousFlowNodeId = null, $previousFlowNodeElementType = null, $divergentFlowNodeId = null)
    {
        $GLOBALS['log']->debug("BPM: prepareFlow, process {$process->id}, element {$elementId}");

        if ($process->get('status') !== 'Started') {
            throw new Error('Process ' . $process->id . " is not started hence can't be processed.");
        }

        $elementsDataHash = $process->get('flowchartElementsDataHash');
        $this->checkFlowchartItemPropriety($elementsDataHash, $elementId);

        if ($target->getEntityType() !== $process->get('targetType') || $target->id !== $process->get('targetId')) {
            throw new Error();
        }

        $item = $elementsDataHash->$elementId;
        $elementType = $item->type;

        $flowNode = $this->getEntityManager()->getEntity('BpmnFlowNode');
        $flowNode->set([
            'status' => 'Created',
            'elementId' => $elementId,
            'elementType' => $elementType,
            'elementData' => $item,
            'flowchartId' => $process->get('flowchartId'),
            'processId' => $process->id,
            'previousFlowNodeElementType' => $previousFlowNodeElementType,
            'previousFlowNodeId' => $previousFlowNodeId,
            'divergentFlowNodeId' => $divergentFlowNodeId,
            'targetType' => $target->getEntityType(),
            'targetId' => $target->id
        ]);
        $this->getEntityManager()->saveEntity($flowNode);

        return $flowNode;
    }

    public function processPreparedFlowNode(Entity $target, BpmnFlowNode $flowNode, BpmnProcess $process)
    {
        $this->getFlowNodeImplementation($target, $flowNode, $process)->process();
    }

    public function processFlow(Entity $target, BpmnProcess $process, $elementId, $previousFlowNodeId = null, $previousFlowNodeElementType = null, $divergentFlowNodeId = null)
    {
        $flowNode = $this->prepareFlow($target, $process, $elementId, $previousFlowNodeId, $previousFlowNodeElementType, $divergentFlowNodeId);
        $this->processPreparedFlowNode($target, $flowNode, $process);
        return $flowNode;
    }

    public function processPendingFlows()
    {
        $limit = $this->getConfig()->get('bpmnProceedPendingMaxSize', self::PROCEED_PENDING_MAX_SIZE);

        $GLOBALS['log']->debug("BPM: processPendingFlows");

        $flowNodeList = $this->getEntityManager()->getRepository('BpmnFlowNode')->where([
            'OR' => [
                [
                    'status' => 'Pending',
                    'elementType' => 'eventIntermediateTimerCatch',
                    'proceedAt<=' => date('Y-m-d H:i:s')
                ],
                [
                    'status' => 'Pending',
                    'elementType' => 'eventIntermediateConditionalCatch'
                ],
                [
                    'status' => 'Pending',
                    'elementType' => 'taskSendMessage'
                ]
            ],
            'isLocked' => false
        ])->order('number', false)->limit(0, $limit)->find();

        foreach ($flowNodeList as $flowNode) {
            try {
                $this->proceedPendingFlow($flowNode);
            } catch (\Exception $e) {
                $GLOBALS['log']->error($e->getMessage());
            }
        }
    }

    public function setFlowNodeFailed(BpmnFlowNode $flowNode)
    {
        $flowNode->set([
            'status' => 'Failed',
            'processedAt' => date('Y-m-d H:i:s')
        ]);
        $this->getEntityManager()->saveEntity($flowNode);
    }

    protected function checkFlowIsActual($target, $flowNode, $process)
    {
        if (!$process) {
            $this->setFlowNodeFailed($flowNode);
            throw new Error("Could not find process " . $flowNode->get('processId') . ".");
        }
        if (!$target) {
            $this->setFlowNodeFailed($flowNode);
            throw new Error("Could not find target for process " . $process->id . ".");
        }
        if ($process->get('status') === 'Paused') {
            $this->unlockFlowNode($flowNode);
            throw new Error();
        }
        if ($process->get('status') !== 'Started') {
            $this->setFlowNodeFailed($flowNode);
            throw new Error("Attempted to continue flow of not active process " . $process->id . ".");
        }
    }

    protected function lockTable()
    {
        $this->getEntityManager()->getPdo()->query('LOCK TABLES `bpmn_flow_node` WRITE');
    }

    protected function unlockTable()
    {
        $this->getEntityManager()->getPdo()->query('UNLOCK TABLES');
    }

    protected function getAndLockFlowNodeById($id)
    {
        $this->lockTable();
        $flowNode = $this->getEntityManager()->getEntity('BpmnFlowNode', $id);

        if (!$flowNode) {
            $this->unlockTable();
            throw new Error("Can't find Flow Node " . $id . ".");
        }
        if ($flowNode->get('isLocked')) {
            $this->unlockTable();
            throw new Error("Can't get locked Flow Node " . $id . ".");
        }
        $this->lockFlowNode($flowNode);
        $this->unlockTable();

        return $flowNode;
    }

    protected function lockFlowNode(BpmnFlowNode $flowNode)
    {
        $flowNode->set('isLocked', true);
        $this->getEntityManager()->saveEntity($flowNode);
    }

    protected function unlockFlowNode(BpmnFlowNode $flowNode)
    {
        $flowNode->set('isLocked', false);
        $this->getEntityManager()->saveEntity($flowNode);
    }

    public function proceedPendingFlow(BpmnFlowNode $flowNode)
    {
        $GLOBALS['log']->debug("BPM: proceedPendingFlow, node {$flowNode->id}");

        $flowNode = $this->getAndLockFlowNodeById($flowNode->id);
        $process = $this->getEntityManager()->getEntity('BpmnProcess', $flowNode->get('processId'));
        $target = $this->getEntityManager()->getEntity($flowNode->get('targetType'), $flowNode->get('targetId'));

        if ($flowNode->get('status') !== 'Pending') {
            $this->unlockFlowNode($flowNode);
            throw new Error("Can not proceed not pending flow node in process " . $process->id . ".");
        }

        $this->checkFlowIsActual($target, $flowNode, $process);
        $this->getFlowNodeImplementation($target, $flowNode, $process)->proceedPending();
        $this->unlockFlowNode($flowNode);
    }

    public function completeFlow(BpmnFlowNode $flowNode)
    {
        $GLOBALS['log']->debug("BPM: completeFlow, node {$flowNode->id}");

        $flowNode = $this->getAndLockFlowNodeById($flowNode->id);
        $target = $this->getEntityManager()->getEntity($flowNode->get('targetType'), $flowNode->get('targetId'));
        $process = $this->getEntityManager()->getEntity('BpmnProcess', $flowNode->get('processId'));

        if ($flowNode->get('status') !== 'In Process') {
            throw new Error("Can not complete not 'In Process' flow node in process " . $process->id . ".");
        }
        $this->checkFlowIsActual($target, $flowNode, $process);
        $this->getFlowNodeImplementation($target, $flowNode, $process)->complete();
        $this->unlockFlowNode($flowNode);
    }

    public function failFlow(BpmnFlowNode $flowNode)
    {
        $GLOBALS['log']->debug("BPM: failFlow, node {$flowNode->id}");

        $flowNode = $this->getAndLockFlowNodeById($flowNode->id);
        $process = $this->getEntityManager()->getEntity('BpmnProcess', $flowNode->get('processId'));
        $target = $this->getEntityManager()->getEntity($flowNode->get('targetType'), $flowNode->get('targetId'));

        if (!$this->isFlowNodeIsActual($flowNode)) {
            throw new Error("Can not proceed not In Process flow node in process " . $process->id . ".");
        }
        $this->checkFlowIsActual($target, $flowNode, $process);
        $this->getFlowNodeImplementation($target, $flowNode, $process)->fail();
        $this->unlockFlowNode($flowNode);
    }

    protected function isFlowNodeIsActual(BpmnFlowNode $flowNode)
    {
        return !in_array($flowNode->get('status'), ['Failed', 'Rejected', 'Processed']);
    }

    protected function failProcessFlow(Entity $target, BpmnFlowNode $flowNode, BpmnProcess $process)
    {
        $this->getFlowNodeImplementation($target, $flowNode, $process)->fail();
    }

    public function getFlowNodeImplementation(Entity $target, BpmnFlowNode $flowNode, BpmnProcess $process)
    {
        $elementType = $flowNode->get('elementType');
        $className = '\\Espo\\Modules\\Advanced\\Core\\Bpmn\\Elements\\' . ucfirst($elementType);
        $flowNodeImpementation = new $className($this->container, $this, $target, $flowNode, $process);
        return $flowNodeImpementation;
    }

    protected function getActiveFlowCount(BpmnProcess $process)
    {
        return $this->getEntityManager()->getRepository('BpmnFlowNode')->where([
            'status!=' => ['Processed', 'Rejected', 'Failed'],
            'processId' => $process->id
        ])->count();
    }

    public function endProcessFlow(BpmnFlowNode $flowNode, BpmnProcess $process)
    {
        $GLOBALS['log']->debug("BPM: endProcessFlow, node {$flowNode->id}");

        if ($this->isFlowNodeIsActual($flowNode)) {
            $flowNode->set('status', 'Rejected');
            $this->getEntityManager()->saveEntity($flowNode);
        }
        $this->tryToEndProcess($process);
    }

    public function tryToEndProcess(BpmnProcess $process)
    {
        if (!$this->getActiveFlowCount($process) && in_array($process->get('status'), ['Started', 'Paused'])) {
            $this->endProcess($process);
        }
    }

    public function endProcess(BpmnProcess $process)
    {
        $GLOBALS['log']->debug("BPM: endProcess, process {$process->id}");

        $this->rejectActiveFlows($process);

        if (!in_array($process->get('status'), ['Started', 'Paused'])) {
            throw new Error('Process ' . $process->id . " can't be ended because it's not active.");
        }

        $process->set([
            'status' => 'Ended',
            'endedAt' => date('Y-m-d H:i:s'),
            'modifiedById' => 'system'
        ]);
        $this->getEntityManager()->saveEntity($process, ['skipModifiedBy' => true]);
    }

    public function stopProcess(BpmnProcess $process)
    {
        $GLOBALS['log']->debug("BPM: stopProcess, process {$process->id}");

        $this->rejectActiveFlows($process);

        $process->set([
            'endedAt' => date('Y-m-d H:i:s')
        ]);
        if ($process->get('status') !== 'Stopped') {
            $process->set([
                'status' => 'Stopped',
                'modifiedById' => 'system'
            ]);
        }
        $this->getEntityManager()->saveEntity($process, ['skipModifiedBy' => true, 'skipStopProcess' => true]);
    }

    protected function rejectActiveFlows(BpmnProcess $process)
    {
        $flowNodeList = $this->getEntityManager()->getRepository('BpmnFlowNode')->where([
            'status!=' => ['Processed', 'Rejected', 'Failed'],
            'processId' => $process->id
        ])->find();

        foreach ($flowNodeList as $flowNode) {
            $flowNode->set('status', 'Rejected');
            $this->getEntityManager()->saveEntity($flowNode);
        }
    }
}
