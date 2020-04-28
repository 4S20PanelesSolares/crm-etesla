<?php
/*********************************************************************************
 * The contents of this file are subject to the EspoCRM Sales Pack
 * Agreement ("License") which can be viewed at
 * https://www.espocrm.com/sales-pack-agreement.
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * sublicense, resell, rent, lease, distribute, or otherwise  transfer rights
 * or usage to the software.
 * 
 * Copyright (C) 2015-2019 Letrium Ltd.
 * 
 * License ID: 48b45b7d11e497058130ec49a7811186
 ***********************************************************************************/

namespace Espo\Modules\Sales\Services;

use \Espo\ORM\Entity;

class Opportunity extends \Espo\Modules\Crm\Services\Opportunity
{
    protected $itemEntityType = 'OpportunityItem';

    protected $itemParentIdAttribute = 'opportunityId';

    public function loadAdditionalFields(Entity $entity)
    {
        parent::loadAdditionalFields($entity);

        $itemList = $this->getEntityManager()->getRepository($this->itemEntityType)->where(array(
            $this->itemParentIdAttribute => $entity->id
        ))->order('order')->find();

		$itemDataList = $itemList->toArray();
        foreach ($itemDataList as $i => $v) {
            $itemDataList[$i] = (object) $v;
        }
        $entity->set('itemList', $itemDataList);
    }
}

