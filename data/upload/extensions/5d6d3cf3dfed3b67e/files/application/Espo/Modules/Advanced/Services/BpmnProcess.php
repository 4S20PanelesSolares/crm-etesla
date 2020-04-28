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

namespace Espo\Modules\Advanced\Services;

use \Espo\Core\Exceptions\NotFound;
use \Espo\Core\Exceptions\Forbidden;
use \Espo\Core\Exceptions\Error;

use \Espo\ORM\Entity;

class BpmnProcess extends \Espo\Services\Record
{
    protected $readOnlyAttributeList = [
        'flowchartData',
        'createdEntitiesData',
        'flowchartElementsDataHash',
        'status',
        'variables',
        'endedAt'
    ];

    protected $forceSelectAllAttributes = true;

    public function beforeUpdateEntity(Entity $entity, $data)
    {
        $entity->clear('flowchartId');
        $entity->clear('targetId');
        $entity->clear('targetType');
        $entity->clear('startElementId');
    }

    public function stopProcess($id)
    {
        $entity = $this->getEntity($id);
        if (!$this->getAcl()->checK($entity, 'edit')) {
            throw new Forbidden();
        }
        if (!in_array($entity->get('status'), ['Started', 'Paused'])) {
            throw new Error();
        }
        $entity->set('status', 'Stopped');
        $this->getEntityManager()->saveEntity($entity);
    }
}
