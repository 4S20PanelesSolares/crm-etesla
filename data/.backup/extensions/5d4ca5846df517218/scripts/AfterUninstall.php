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

class AfterUninstall
{
    protected $container;

    public function run($container)
    {
        $this->container = $container;

        $entityManager = $this->container->get('entityManager');

        if ($job = $entityManager->getRepository('ScheduledJob')->where(array('job' => 'SynchronizeEventsWithGoogleCalendar'))->findOne()) {
            $entityManager->removeEntity($job);
        }

        $config = $this->container->get('config');
        $iframeUrl = preg_replace('/.google-integration=[^&]+/i', '', $config->get('adminPanelIframeUrl'));
        $config->set('adminPanelIframeUrl', $iframeUrl);
        $config->save();
    }
}
