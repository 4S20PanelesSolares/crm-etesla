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

namespace Espo\Modules\Advanced\Core\Workflow;

class ActionManager extends BaseManager
{
    protected $dirName = 'Actions';

    protected $requiredOptions = array(
        'type',
    );

    public function runActions($actions)
    {
        if (!isset($actions)) {
            return true;
        }

        $GLOBALS['log']->debug('Workflow\ActionManager: Start workflow rule ID ['.$this->getWorkflowId().'].');

        $processId = $this->getProcessId();

        foreach ($actions as $action) {
            $this->runAction($action, $processId);
        }

        $GLOBALS['log']->debug('Workflow\ActionManager: End workflow rule ID ['.$this->getWorkflowId().'].');

        return true;
    }

    protected function runAction($action, $processId)
    {
        $entity = $this->getEntity($processId);
        $entityName = $entity->getEntityName();

        if (!$this->validate($action)) {
            $GLOBALS['log']->warning('Workflow['.$this->getWorkflowId($processId).']: Action data is broken for the Entity ['.$entityName.'].');
            return false;
        }

        $actionClass = $this->getClass($action->type, $processId);
        if (isset($actionClass)) {

            try {
                return $actionClass->process($entity, $action);
            } catch (\Exception $e) {
                $GLOBALS['log']->error('Workflow['.$this->getWorkflowId($processId).']: Action failed [' . $action->type . '] with cid [' . $action->cid . '], details: ' . $e->getMessage() . '.');
            }

        }

        return false;
    }
}