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

namespace Espo\Modules\Advanced\Business\Workflow\AssignmentRules;

use \Espo\ORM\Entity;
use \Espo\Core\Exceptions\Error;

class RoundRobin
{
    private $entityManager;

    private $selectManager;

    private $entityType;

    private $reportService;

    public function __construct($entityManager, $selectManager, $reportService, $entityType)
    {
        $this->entityManager = $entityManager;
        $this->selectManager = $selectManager;
        $this->reportService = $reportService;
        $this->entityType = $entityType;
    }

    protected function getEntityManager()
    {
        return $this->entityManager;
    }

    protected function getSelectManager()
    {
        return $this->selectManager;
    }

    protected function getEntityType()
    {
        return $this->entityType;
    }

    protected function getReportService()
    {
        return $this->reportService;
    }

    public function getAssignmentAttributes(Entity $entity, $targetTeamId, $targetUserPosition, $listReportId = null, $selectParams = null)
    {
        $team = $this->getEntityManager()->getEntity('Team', $targetTeamId);

        if (!$team) {
            $GLOBALS['log']->error('RoundRobin: No team with id ' . $targetTeamId);
            throw new Error();
        }

        $params = [
            'select' => ['id']
        ];
        if (!empty($targetUserPosition)) {
            $params['additionalColumnsConditions'] = [
                'role' => $targetUserPosition,
            ];
        }

        $userList = $team->get('users', $params);

        $this->getEntityManager()->getRepository('Team')->findRelated($team, 'users', $params);

        if (count($userList) == 0) {
            $GLOBALS['log']->error('RoundRobin: No users found in team ' . $targetTeamId);
            throw new Error();
        }

        $userIdList = [];

        foreach ($userList as $user) {
            $userIdList[] = $user->id;
        }

        if ($listReportId) {
            $report = $this->getEntityManager()->getEntity('Report', $listReportId);
            if (!$report) {
                throw new Error();
            }
            $this->getReportService()->checkReportIsPosibleToRun($report);
            $selectParams = $this->getReportService()->fetchSelectParamsFromListReport($report);
        } else {
            if (!$selectParams) {
                $selectParams = $this->getSelectManager()->getEmptySelectParams();
            } else {
                $selectParamsNew = $this->getSelectManager()->getEmptySelectParams();
                foreach ($selectParams as $k => $v) {
                    $selectParamsNew[$k] = $v;
                }
                $selectParams = $selectParamsNew;
            }
        }

        $selectParams['whereClause'][] = [
            'assignedUserId' => $userIdList,
            'id!=' => $entity->id,
        ];

        $selectParams['select'] = ['assignedUserId'];

        $this->getSelectManager()->addJoin(['assignedUser', 'assignedUserAssignedRule'], $selectParams);
        $selectParams['whereClause'][] = ['assignedUserAssignedRule.isActive' => true];

        $this->getSelectManager()->applyOrder('createdAt', true, $selectParams);

        $foundEntity = $this->getEntityManager()->getRepository($this->getEntityType())->findOne($selectParams);

        if (empty($foundEntity)) {
            $num = 0;
        } else {
            $num = array_search($foundEntity->get('assignedUserId'), $userIdList);
            if ($num === false || $num == count($userIdList) - 1) {
                $num = 0;
            } else {
                $num++;
            }
        }

        if (!isset($userIdList[$num])) {
            throw new Error();
        }

        $userId = $userIdList[$num];

        $attributes = [];
        $attributes['assignedUserId'] = $userId;

        if ($attributes['assignedUserId']) {
            $user = $this->getEntityManager()->getEntity('User', $attributes['assignedUserId']);
            if ($user) {
                $attributes['assignedUserName'] = $user->get('name');
            }
        }

        return $attributes;
    }
}
