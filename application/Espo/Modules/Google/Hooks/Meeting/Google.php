<?php
/*********************************************************************************
 * The contents of this file are subject to the EspoCRM Google Integration
 * Agreement ("License") which can be viewed at
 * https://www.espocrm.com/google-integration-agreement.
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * sublicense, resell, rent, lease, distribute, or otherwise  transfer rights
 * or usage to the software.
 * 
 * Copyright (C) 2015-2019 Letrium Ltd.
 * 
 * License ID: d7328b509a0c6565cdb459461877aa93
 ***********************************************************************************/

namespace Espo\Modules\Google\Hooks\Meeting;

use Espo\ORM\Entity;

class Google extends \Espo\Core\Hooks\Base
{
    public static $order = 9;

    public function beforeSave(Entity $entity)
    {
        /*if (!$entity->isNew() && $entity->isAttributeChanged('assignedUserId') && $entity->get('googleCalendarEventId') != '') {

            $newEntity = $this->getEntityManager()->getEntity($entity->getEntityType());

            $copyFields = array(
                "name",
                "assignedUserId",
                "googleCalendarId",
                "googleCalendarEventId",
                "dateStart",
                "dateEnd"
            );
            foreach ($copyFields as $field) {
                $newEntity->set($field, $entity->getFetched($field));
            }

            $this->getEntityManager()->saveEntity($newEntity);
            $this->getEntityManager()->removeEntity($newEntity);

            $entity->set('googleCalendarEventId', '');
            $entity->set('googleCalendarId', '');
        }*/

        if (!$entity->isNew() && $entity->getFetched('googleCalendarEventId') == 'FAIL') {
            $entity->set('googleCalendarEventId', '');
        }
    }
}

