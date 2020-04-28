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

use Espo\Core\Exceptions\Error;
use Espo\Modules\Advanced\Core\Workflow\Utils;

use Espo\ORM\Entity;

class StartBpmnProcess extends Base
{
    protected function run(Entity $entity, $actionData)
    {
        if (empty($actionData->flowchartId) || empty($actionData->elementId)) {
            throw new Error('StartBpmnProcess: Empty action data.');
        }

        $bpmnManager = new \Espo\Modules\Advanced\Core\Bpmn\BpmnManager($this->getContainer());

        $flowchart = $this->getEntityManager()->getEntity('BpmnFlowchart', $actionData->flowchartId);
        if (!$flowchart) {
            throw new Error('StartBpmnProcess: Could not find flowchart ' . $actionData->flowchartId . '.');
        }

        $bpmnManager->startProcess($entity, $flowchart, $actionData->elementId);

        return true;
    }
}