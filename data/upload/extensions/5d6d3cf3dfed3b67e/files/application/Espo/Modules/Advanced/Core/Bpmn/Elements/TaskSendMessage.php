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
use \Espo\Core\Utils\Json;

class TaskSendMessage extends Activity
{
    public function process()
    {
        $flowNode = $this->getFlowNode();
        $flowNode->set([
            'status' => 'Pending'
        ]);
        $this->getEntityManager()->saveEntity($flowNode);
    }

    public function proceedPending()
    {
        try {
            $this->getImplementation()->process($this->getTarget(), $this->getFlowNode(), $this->getProcess(), $this->getCreatedEntitiesData(), $this->getVariables());

        } catch (Error $e) {
            $GLOBALS['log']->error('Process ' . $this->getProcess()->id . ' element '.$this->getFlowNode()->get('elementId').' send message error: ' . $e->getMessage());
            $this->setFailed();
            return;
        }

        $this->processNextElement();
    }

    private function getImplementation()
    {
        $messageType = $this->getAttributeValue('messageType');
        if (!$messageType) throw new Error();
        $messageType = str_replace('\\', '', $messageType);

        $className = '\\Espo\\Custom\\Core\\Bpmn\\Utils\\MessageSenders\\' . $messageType . 'Type';
        if (!class_exists($className)) {
            $className = '\\Espo\\Modules\\Advanced\\Core\\Bpmn\\Utils\\MessageSenders\\' . $messageType . 'Type';
        }
        if (!class_exists($className)) {
            throw new Error('Process ' . $this->getProcess()->id . ' element '.$this->getFlowNode()->get('elementId'). ' send message not found implementation class.');
        }

        $impl = new $className($this->getContainer());

        return $impl;
    }
}
