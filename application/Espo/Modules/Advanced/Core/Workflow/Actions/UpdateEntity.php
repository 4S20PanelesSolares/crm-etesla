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

class UpdateEntity extends BaseEntity
{
    protected function run(Entity $entity, $actionData)
    {
        $entityManager = $this->getEntityManager();

        $reloadedEntity = $entityManager->getEntity($entity->getEntityType(), $entity->id);

        $data = $this->getDataToFill($reloadedEntity, $actionData->fields);

        $reloadedEntity->set($data);
        $entity->set($data);

        if (!empty($actionData->formula)) {
            $this->getFormulaManager()->run($actionData->formula, $reloadedEntity, $this->getFormulaVariables());
            $this->getFormulaManager()->run($actionData->formula, $entity, $this->getFormulaVariables());
        }

        return $entityManager->saveEntity($reloadedEntity, ['skipWorkflow' => true, 'skipModifiedBy' => true]);
    }
}