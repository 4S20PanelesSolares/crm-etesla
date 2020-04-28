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

class AfterInstall
{
    protected $container;

    public function run($container)
    {
        $this->container = $container;

        $entityManager = $this->container->get('entityManager');

        $pdo = $entityManager->getPDO();

        if (!$entityManager->getRepository('ScheduledJob')->where(array('job' => 'SynchronizeEventsWithGoogleCalendar'))->findOne()) {
            $job = $entityManager->getEntity('ScheduledJob');
            $job->set(array(
               'name' => 'Google Calendar Sync',
               'job' => 'SynchronizeEventsWithGoogleCalendar',
               'status' => 'Active',
               'scheduling' => '*/10 * * * *',
            ));
            $entityManager->saveEntity($job);
        }

        $config = $this->container->get('config');

        $iframeUrl = $this->addLinkParam($config->get('adminPanelIframeUrl'), 'google-integration', 'd7328b509a0c6565cdb459461877aa93');
        $config->set('adminPanelIframeUrl', $iframeUrl);

        $config->save();

        $this->clearCache();
    }

    protected function clearCache()
    {
        try {
            $this->container->get('dataManager')->clearCache();
        } catch (\Exception $e) {}
    }

    protected function addLinkParam($link, $paramName, $paramValue)
    {
        if (empty($link)) {
            $link = 'https://s.espocrm.com/';
        }

        $param = $paramName . '=' . $paramValue;

        if (preg_match('/\?.*'. $paramName .'=/i', $link)) {
            return preg_replace('/'.$paramName.'=[^&]+/i', $param, $link);
        }

        if (parse_url($link, PHP_URL_QUERY)) {
            return $link . '&' . $param;
        }

        if (preg_match('/(\/$|\/\/.*\/.*\..*$)/', $link)) {
            return $link . '?' . $param;
        }

        return $link . '/?' . $param;
    }
}
