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

class BeforeInstall
{
    public function run($container)
    {
        $entityManager = $container->get('entityManager');

        $extension = $entityManager->getRepository('Extension')->where(array('name' => 'Advanced Pack'))->findOne();
        if ($extension && version_compare($extension->get('version'), '2.0.0', '<')) {
            throw new \Espo\Core\Exceptions\Error('You need to unistall the old version of Advanced Pack first.');
        }
    }
}
