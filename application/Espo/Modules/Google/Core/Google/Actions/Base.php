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

namespace Espo\Modules\Google\Core\Google\Actions;

use \Espo\Core\Exceptions\Error;
use \Espo\Core\Exceptions\Forbidden;
use \Espo\Core\Exceptions\NotFound;

abstract class Base
{
    protected $baseUrl = 'https://www.googleapis.com/calendar/v3/';
    protected $userId;
    protected $client;

    protected $configPath = 'data/google/config.json';

    protected $entityManager;
    protected $clientManager;
    protected $acl;
    protected $container;
    protected $metadata;

    protected $clientMap = array();

    public function __construct($container, $entityManager, $metadata, $config)
    {
        $this->entityManager = $entityManager;
        $this->metadata = $metadata;
        $this->config = $config;
        $this->container = $container;
    }

    protected function getMetadata()
    {
        return $this->metadata;
    }

    protected function getAcl()
    {
        return $this->acl;
    }

    protected function setAcl()
    {
        $user = $this->getEntityManager()->getEntity('User', $this->getUserId());
        if (!$user) {
            throw new Error("No User with id: " . $this->getUserId());
        }

        $aclManagerClassName = '\\Espo\\Core\\AclManager';
        if (class_exists($aclManagerClassName)) {
            $aclManager = new $aclManagerClassName($this->getContainer());
            $this->acl = new \Espo\Core\Acl($aclManager, $user);
        } else {
            $this->acl = new \Espo\Core\Acl($user, $this->getConfig(), null, $this->getMetadata());
        }
    }

    protected function getEntityManager()
    {
        return $this->entityManager;
    }

    protected function getConfig()
    {
        return $this->config;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
        $this->client = null;
        $this->setAcl();
    }

    public function getUserId()
    {
        return $this->userId;
    }

    protected function getContainer()
    {
        return $this->container;
    }

    protected function getClientManager()
    {
        if (!$this->clientManager) {
            $this->clientManager = new \Espo\Core\ExternalAccount\ClientManager($this->getEntityManager(), $this->getMetadata(), $this->getConfig());
        }
        return $this->clientManager;
    }

    protected function getClient()
    {
        if (!$this->client) {
            $this->client = $this->getClientManager()->create('Google', $this->getUserId());
        }
        return $this->client;
    }

}
