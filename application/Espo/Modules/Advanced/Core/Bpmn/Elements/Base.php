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

use Espo\Modules\Advanced\Core\Bpmn\BpmnManager;

use \Espo\Modules\Advanced\Entities\BpmnProcess;
use \Espo\Modules\Advanced\Entities\BpmnFlowNode;
use \Espo\ORM\Entity;

use \Espo\Core\Exceptions\Error;

abstract class Base
{
    protected $container;
    protected $process;
    protected $flowNode;
    protected $target;
    protected $manager;

    protected function getContainer()
    {
        return $this->container;
    }

    protected function getEntityManager()
    {
        return $this->container->get('entityManager');
    }

    protected function getMetadata()
    {
        return $this->container->get('metadata');
    }

    protected function getProcess()
    {
        return $this->process;
    }

    protected function getFlowNode()
    {
        return $this->flowNode;
    }

    protected function getTarget()
    {
        return $this->target;
    }

    protected function getManager()
    {
        return $this->manager;
    }

    public function __construct(\Espo\Core\Container $container, BpmnManager $manager, Entity $target, BpmnFlowNode $flowNode, BpmnProcess $process)
    {
        $this->container = $container;
        $this->manager = $manager;
        $this->target = $target;
        $this->flowNode = $flowNode;
        $this->process = $process;
    }

    abstract public function process();

    public function proceedPending()
    {
        throw new Error("Bpmn Flow: Can't proceed element ". $flowNode->get('elementType') . " " . $flowNode->get('elementId') . " in flowchart " . $flowNode->get('flowchartId') . ".");
    }

    protected function getElementId()
    {
        $flowNode = $this->getFlowNode();
        $elementId = $flowNode->get('elementId');
        if (!$elementId) throw new Error("Bpmn Flow: No id for element " . $flowNode->get('elementType') . " in flowchart " . $flowNode->get('flowchartId') . ".");
        return $elementId;
    }

    protected function hasNextElementId()
    {
        $flowNode = $this->getFlowNode();

        $item = $flowNode->get('elementData');
        $nextElementIdList = $item->nextElementIdList;
        if (!count($nextElementIdList)) {
            return false;
        }
        return true;
    }

    protected function getNextElementId()
    {
        $flowNode = $this->getFlowNode();
        if (!$this->hasNextElementId()) {
            return null;
        }
        $item = $flowNode->get('elementData');
        $nextElementIdList = $item->nextElementIdList;
        return $nextElementIdList[0];
    }

    protected function getAttributeValue($name)
    {
        $item = $this->getFlowNode()->get('elementData');
        if (!property_exists($item, $name)) {
            return null;
        }
        return $item->$name;
    }

    protected function getVariables()
    {
        return $this->getProcess()->get('variables');
    }

    protected function setProcessed()
    {
        $flowNode = $this->getFlowNode();
        $flowNode->set([
            'status' => 'Processed',
            'processedAt' => date('Y-m-d H:i:s')
        ]);
        $this->getEntityManager()->saveEntity($flowNode);
    }

    public function fail()
    {
        $this->setFailed();
    }

    public function complete()
    {
        throw new Error("Can't complete " . $this->getFlowNode()->get('elementType') . ".");
    }

    protected function setFailed()
    {
        $flowNode = $this->getFlowNode();
        $flowNode->set([
            'status' => 'Failed',
            'processedAt' => date('Y-m-d H:i:s')
        ]);
        $this->getEntityManager()->saveEntity($flowNode);
        $this->endProcessFlow();
    }

    protected function setRejected()
    {
        $flowNode = $this->getFlowNode();
        $flowNode->set([
            'status' => 'Rejected'
        ]);
        $this->getEntityManager()->saveEntity($flowNode);
        $this->endProcessFlow();
    }

    protected function prepareNextFlowNode($nextElementId = null, $divergentFlowNodeId = false)
    {
        $flowNode = $this->getFlowNode();
        if (!$nextElementId) {
            if (!$this->hasNextElementId()) {
                $this->endProcessFlow();
                return;
            }
            $nextElementId = $this->getNextElementId();
        }
        if ($divergentFlowNodeId === false) {
            $divergentFlowNodeId = $flowNode->get('divergentFlowNodeId');
        }
        return $this->getManager()->prepareFlow($this->getTarget(), $this->getProcess(), $nextElementId, $flowNode->id, $flowNode->get('elementType'), $divergentFlowNodeId);
    }

    protected function processNextElement($nextElementId = null, $divergentFlowNodeId = false, $dontSetProcessed = false)
    {
        $nextFlowNode = $this->prepareNextFlowNode($nextElementId, $divergentFlowNodeId);
        if (!$dontSetProcessed) {
            $this->setProcessed();
        }
        if ($nextFlowNode) {
            $this->getManager()->processPreparedFlowNode($this->getTarget(), $nextFlowNode, $this->getProcess());
        }
        return $nextFlowNode;
    }

    protected function endProcessFlow()
    {
        $this->getManager()->endProcessFlow($this->getFlowNode(), $this->getProcess());
    }

    protected function getCreatedEntitiesData()
    {
        $createdEntitiesData = $this->getProcess()->get('createdEntitiesData');
        if (!$createdEntitiesData) {
            $createdEntitiesData = (object) [];
        }
        return $createdEntitiesData;
    }
}
