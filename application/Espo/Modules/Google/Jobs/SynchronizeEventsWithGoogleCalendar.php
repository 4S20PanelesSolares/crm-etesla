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

namespace Espo\Modules\Google\Jobs;

use \Espo\Core\Exceptions;

class SynchronizeEventsWithGoogleCalendar extends \Espo\Core\Jobs\Base
{

    public function run()
    {
        $integrationEntity = $this->getEntityManager()->getEntity('Integration', 'Google');

        if ($integrationEntity && $integrationEntity->get('enabled')) {

            $service = $this->getServiceFactory()->create('GoogleCalendar');
            $collection = $this->getEntityManager()->getRepository('GoogleCalendarUser')->where(array('active' => true))->find(array('orderBy' => 'lastLooked'));

            foreach ($collection as $calendar) {
                try {
                    $service->syncCalendar($calendar);
                } catch (\Exception $e) {
                    $GLOBALS['log']->error('GoogleCalendarERROR: Run Sync Error: ' . $e->getMessage());
                }
            }
        }

        return true;
    }
}
