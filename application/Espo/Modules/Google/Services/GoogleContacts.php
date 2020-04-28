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

namespace Espo\Modules\Google\Services;

use \Espo\ORM\Entity;

use \Espo\Core\Exceptions\Error;
use \Espo\Core\Exceptions\NotFound;
use \Espo\Core\Exceptions\Forbidden;
use \Espo\Core\Exceptions\BadRequest;

class GoogleContacts extends \Espo\Core\Services\Base
{
    const PUSH_PORTION = 100; // 100 is max allowed by API

    protected $forceSelectAllAttributes = true;

    protected function init()
    {
        parent::init();
        $this->addDependency('entityManager');
        $this->addDependency('container');
        $this->addDependency('selectManagerFactory');
        $this->addDependency('metadata');
    }

    protected function getMetadata()
    {
        return $this->getInjection('metadata');
    }

    protected function getSelectManagerFactory()
    {
        return $this->getInjection('selectManagerFactory');
    }

    protected function getEntityManager()
    {
        return $this->getInjection('entityManager');
    }

    protected function getContainer()
    {
        return $this->getInjection('container');
    }

    public function usersContactsGroups(array $params = null)
    {
        $contactsGroup = new \Espo\Modules\Google\Core\Google\Actions\ContactsGroup($this->getContainer(), $this->getEntityManager(), $this->getMetadata(), $this->getConfig());

        $contactsGroup->setUserId($this->getUser()->id);

        return $contactsGroup->getGroupList();
    }

    public function push($entityType, array $params)
    {
        $integrationEntity = $this->getEntityManager()->getEntity('Integration', 'Google');
        if (!$integrationEntity ||
            !$integrationEntity->get('enabled')) {
            throw new Forbidden();
        }

        $userId = $this->getUser()->id;
        $externalAccount = $this->getEntityManager()->getEntity('ExternalAccount', 'Google__' . $userId);
        if (!$externalAccount->get('enabled') || !$externalAccount->get('googleContactsEnabled')) {
            throw new Forbidden();
        }

        $p = [];
        $result = 0;

        if (array_key_exists('ids', $params)) {
            $ids = $params['ids'];
            $where = [
                [
                    'type' => 'in',
                    'field' => 'id',
                    'value' => $ids
                ]
            ];
        } else if (array_key_exists('where', $params)) {
            $where = $params['where'];
        } else {
            throw new BadRequest();
        }

        $selectManger = $this->getSelectManagerFactory()->create($entityType);

        $p['where'] = $where;
        $selectParams = $selectManger->getSelectParams($p, true, true);

        $total = $this->getEntityManager()->getRepository($entityType)->count($selectParams);
        if ($total && self::PUSH_PORTION) {
            $runNow = true;
            $offset = 0;
            $p['maxSize'] = self::PUSH_PORTION;
            $now = new \DateTime('NOW', new \DateTimeZone('UTC'));
            while ($offset <= $total) {
                $p['offset'] = $offset;

                $selectParams = $selectManger->getSelectParams($p, true, true);
                $collection = $this->getEntityManager()->getRepository($entityType)->find($selectParams);
                if ($runNow) {
                    $contactsAction = new \Espo\Modules\Google\Core\Google\Actions\Contacts($this->getContainer(), $this->getEntityManager(), $this->getMetadata(), $this->getConfig());
                    $contactsAction->setUserId($userId);
                    $result += $contactsAction->pushEspoContactsToGoogleContacts($collection, $externalAccount->get('contactsGroupsIds'));
                    $runNow = false;
                } else {
                    $ids = [];
                    foreach ($collection as $entity) {
                        $ids[] = $entity->id;
                    }
                    $data = [
                        'ids' => $ids,
                        'userId' => $userId,
                        'entityType' => $entityType,
                    ];

                    $now->modify("+1 minute");

                    $job = $this->getEntityManager()->getEntity('Job');
                    $job->set([
                            'method' => 'pushPortionToGoogleContacts',
                            'methodName' => 'pushPortionToGoogleContacts',
                            'serviceName' => 'GoogleContacts',
                            'executeTime' => $now->format("Y-m-d H:i" . ":00"),
                            'data' => json_encode($data),
                        ]
                    );
                    $this->getEntityManager()->saveEntity($job);
                }
                $offset += self::PUSH_PORTION;
            }
        }
        return $result;
    }

    public function pushPortionToGoogleContacts($data)
    {
        if (is_array($data)) {
            $data = (object) $data;
        }

        $integrationEntity = $this->getEntityManager()->getEntity('Integration', 'Google');

        if (!$integrationEntity ||
            !$integrationEntity->get('enabled')) {

            $GLOBALS['log']->error('Google Contacts Pushing : Integration Disabled');
            throw new Forbidden();
        }

        $userId = $data->userId;
        $entityType = $data->entityType;
        $ids = $data->ids;

        $externalAccount = $this->getEntityManager()->getEntity('ExternalAccount', 'Google__' . $userId);
        if (!$externalAccount->get('enabled') || !$externalAccount->get('googleContactsEnabled')) {
            $GLOBALS['log']->error('Google Contacts Pushing : Integration Disabled for User ' . $userId);
            throw new Forbidden();
        }

        $where = [
            [
                'type' => 'in',
                'field' => 'id',
                'value' => $ids
            ]
        ];

        $selectManger = $this->getSelectManagerFactory()->create($entityType);

        $selectParams = $selectManger->getSelectParams(['where' => $where], true, true);

        $collection = $this->getEntityManager()->getRepository($entityType)->find($selectParams);

        $contactsAction = new \Espo\Modules\Google\Core\Google\Actions\Contacts($this->getContainer(), $this->getEntityManager(), $this->getMetadata(), $this->getConfig());
        $contactsAction->setUserId($userId);
        $successfulPushedCnt = $contactsAction->pushEspoContactsToGoogleContacts($collection, $externalAccount->get('contactsGroupsIds'));

        return $successfulPushedCnt;
    }
}
