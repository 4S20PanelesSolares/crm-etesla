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

namespace Espo\Modules\Advanced\Core\Bpmn\Elements;

use \Espo\Core\Exceptions\Error;

class GatewayParallel extends Gateway
{
    protected function processDivergent()
    {
        $flowNode = $this->getFlowNode();

        $item = $flowNode->get('elementData');
        $nextElementIdList = $item->nextElementIdList;

        $flowNode->set('status', 'In Process');
        $this->getEntityManager()->saveEntity($flowNode);
        foreach ($nextElementIdList as $nextElementId) {
            $this->processNextElement($nextElementId, $flowNode->id, true);
        }
        $this->setProcessed();
        $this->getManager()->tryToEndProcess($this->getProcess());
    }

    protected function processConvergent()
    {
        $flowNode = $this->getFlowNode();

        $item = $flowNode->get('elementData');
        $previousElementIdList = $item->previousElementIdList;
        $convergingFlowCount = count($previousElementIdList);

        $nextDivergentFlowNodeId = null;
        $divergentFlowNode = null;

        $divergedFlowCount = 1;
        if ($flowNode->get('divergentFlowNodeId')) {
            $divergentFlowNode = $this->getEntityManager()->getEntity('BpmnFlowNode', $flowNode->get('divergentFlowNodeId'));
            if ($divergentFlowNode) {
                $divergentElementData = $divergentFlowNode->get('elementData');
                $divergedFlowCount = count($divergentElementData->nextElementIdList);
            }
        }

        $concurentFlowNodeList = $this->getEntityManager()->getRepository('BpmnFlowNode')->where([
            'elementId' => $flowNode->get('elementId'),
            'processId' => $flowNode->get('processId'),
            'divergentFlowNodeId' => $flowNode->get('divergentFlowNodeId')
        ])->find();
        $concurrentCount = count($concurentFlowNodeList);

        if ($concurrentCount < $convergingFlowCount) {
            $this->setRejected();
            return;
        }

        $isBalansingDivergent = true;
        if ($divergentFlowNode) {
            $divergentElementData = $divergentFlowNode->get('elementData');
            if (isset($divergentElementData->nextElementIdList)) {
                foreach ($divergentElementData->nextElementIdList as $forkId) {
                    if (
                        !$this->checkElementsBelongSingleFlow(
                            $divergentFlowNode->get('elementId'),
                            $forkId,
                            $flowNode->get('elementId')
                        )
                    ) {
                        $isBalansingDivergent = false;
                        break;
                    }
                }
            }
        }

        if ($isBalansingDivergent) {
            if ($divergentFlowNode) {
                $nextDivergentFlowNodeId = $divergentFlowNode->get('divergentFlowNodeId');
            }
            $this->processNextElement(null, $nextDivergentFlowNodeId);
        } else {
            $this->processNextElement(null, false);
        }
    }
}
