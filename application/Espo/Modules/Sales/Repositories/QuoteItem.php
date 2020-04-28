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

namespace Espo\Modules\Sales\Repositories;

use Espo\ORM\Entity;

class QuoteItem extends \Espo\Core\ORM\Repositories\RDB
{
    protected function beforeSave(Entity $entity, array $options = [])
    {
        if ($entity->get('unitWeight') === null) {
            if ($entity->has('unitWeight')) {
                $entity->set('weight', null);
            }
        } else {
            $entity->set('weight', $entity->get('unitWeight') * $entity->get('quantity'));
        }

        parent::beforeSave($entity, $options);
    }
}
