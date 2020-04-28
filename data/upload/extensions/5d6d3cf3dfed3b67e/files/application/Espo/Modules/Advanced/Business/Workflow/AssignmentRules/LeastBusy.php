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

class LeastBusy
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
            $GLOBALS['log']->error('LeastBusy: No team with id ' . $targetTeamId);
            throw new Error();
        }

        $userSelectParams = [
            'select' => ['id'],
            'orderBy' => 'userName',
        ];
        if (!empty($targetUserPosition)) {
            $userSelectParams['additionalColumnsConditions'] = [
                'role' => $targetUserPosition
            ];
        }

        $userList = $this->getEntityManager()->getRepository('Team')->findRelated($team, 'users', $userSelectParams);

        if (count($userList) == 0) {
            $GLOBALS['log']->error('LeastBusy: No users found in team ' . $targetTeamId);
            throw new Error();
        }

        $userIdList = [];
        foreach ($userList as $user) {
            $userIdList[] = $user->id;
        }

        $counts = [];
        foreach ($userIdList as $id) {
            $counts[$id] = 0;
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
        $selectParams['groupBy'] = ['assignedUserId'];
        $selectParams['select'] = ['assignedUserId', 'COUNT:id'];
        $selectParams['orderBy'] = [[1, false]];

        $this->getSelectManager()->addJoin(['assignedUser', 'assignedUserAssignedRule'], $selectParams);
        $selectParams['whereClause'][] = ['assignedUserAssignedRule.isActive' => true];

        $sql = $this->getEntityManager()->getQuery()->createSelectQuery($this->getEntityType(), $selectParams);

        $pdo = $this->getEntityManager()->getPDO();
        $sth = $pdo->prepare($sql);
        $sth->execute();
        $rowList = $sth->fetchAll(\PDO::FETCH_ASSOC);

        $userId = null;

        foreach ($rowList as $row) {
            $id = $row['assignedUserId'];
            if (!$id) continue;
            $counts[$id] = $row['COUNT:id'];
        }

        $minCount = null;

        $minCountIdList = [];

        foreach ($counts as $id => $count) {
            if (is_null($minCount) || $count <= $minCount) {
                $minCount = $count;
                $minCountIdList[] = $id;
            }
        }

        $attributes = [];

        if (count($minCountIdList)) {
            $attributes['assignedUserId'] = $minCountIdList[array_rand($minCountIdList)];

            if ($attributes['assignedUserId']) {
                $user = $this->getEntityManager()->getEntity('User', $attributes['assignedUserId']);
                if ($user) {
                    $attributes['assignedUserName'] = $user->get('name');
                }
            }
        }

        return $attributes;
    }
}
