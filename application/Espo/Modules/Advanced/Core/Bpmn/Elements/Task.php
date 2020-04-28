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
use Espo\Core\Utils\Json;

class Task extends Activity
{
    public function process()
    {
        try {
            $actionList = $this->getAttributeValue('actionList');
            if (!is_array($actionList)) throw new Error('Bad action list in tasl');

            foreach ($actionList as $item) {
                if (empty($item->type)) continue;
                $actionImpl = $this->getActionImplementation($item->type);
                $item = clone $item;
                $item->elementId = $this->getFlowNode()->get('elementId');
                $actionData = $item;
                $originalVariables = $this->getVariables();
                $actionImpl->process($this->getTarget(), $actionData, $this->getCreatedEntitiesData(), $originalVariables, $this->getProcess());

                $variables = $actionImpl->getVariables();

                if ($actionImpl->isCreatedEntitiesDataChanged() || $variables != $originalVariables) {
                    $this->getProcess()->set('createdEntitiesData', $actionImpl->getCreatedEntitiesData());
                    $this->getProcess()->set('variables', $variables);
                    $this->getEntityManager()->saveEntity($this->getProcess(), ['silent' => true]);
                }
            }
        } catch (\Exception $e) {
            $GLOBALS['log']->error('Process ' . $this->getProcess()->id . ' element '.$this->getFlowNode()->get('elementId'). ': ' . $e->getMessage());
            $this->setFailed();
            return;
        }

        $this->processNextElement();
    }

    protected function getActionImplementation($name)
    {
        $name = ucfirst($name);
        $name = str_replace("\\", "", $name);
        $className = '\\Espo\\Custom\\Modules\\Advanced\\Core\\Workflow\\Actions\\' . $name;
        if (!class_exists($className)) {
            $className .= 'Type';
            if (!class_exists($className)) {
                $className = '\\Espo\\Modules\\Advanced\\Core\\Workflow\\Actions\\' . $name;
                if (!class_exists($className)) {
                    $className .= 'Type';
                    if (!class_exists($className)) {
                        throw new Error('Action class ' . $className . ' does not exist.');
                    }
                }
            }
        }
        $impl = new $className($this->getContainer());
        return $impl;
    }
}
