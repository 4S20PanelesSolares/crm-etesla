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

namespace Espo\Modules\Advanced\Repositories;

use \Espo\ORM\Entity;

class Report extends \Espo\Core\ORM\Repositories\RDB
{
    protected function beforeSave(Entity $entity, array $options = [])
    {
        if (
            $entity->isAttributeChanged('emailSendingInterval')
            ||
            $entity->isAttributeChanged('emailSendingTime')
            ||
            $entity->isAttributeChanged('emailSendingSettingWeekdays')
            ||
            $entity->isAttributeChanged('emailSendingSettingDay')
        ) {
            $entity->set('emailSendingLastDateSent', null);
        }

        parent::beforeSave($entity, $options);
    }
}
