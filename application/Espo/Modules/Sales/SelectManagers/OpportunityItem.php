<?php
/*********************************************************************************
 * The contents of this file are subject to the EspoCRM Sales Pack
 * Agreement ("License") which can be viewed at
 * https://www.espocrm.com/sales-pack-agreement.
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * sublicense, resell, rent, lease, distribute, or otherwise  transfer rights
 * or usage to the software.
 * 
 * Copyright (C) 2015-2019 Letrium Ltd.
 * 
 * License ID: 48b45b7d11e497058130ec49a7811186
 ***********************************************************************************/

namespace Espo\Modules\Sales\SelectManagers;

class OpportunityItem extends \Espo\Core\SelectManagers\Base
{
    protected $parentTable = 'opportunity';

    protected $parentEntityType = 'Opportunity';

    protected $parentIdAttribute = 'opportunityId';

    protected function acessOnlyOwn(&$result)
    {
        $result['whereClause'][] = array(
            $this->parentTable . '.assignedUserId' => $this->getUser()->id
        );
    }

    protected function accessOnlyTeam(&$result)
    {
        $teamIdList = $this->user->getLinkMultipleIdList('teams');
        if (empty($teamIdList)) {
            if (empty($result['customWhere'])) $result['customWhere'] = '';
            $result['customWhere'] .= " AND ".$this->parentTable.".assigned_user_id = ".$this->getEntityManager()->getPDO()->quote($this->getUser()->id);
            return;
        }
        $arr = [];
        if (is_array($teamIdList)) {
            foreach ($teamIdList as $teamId) {
                $arr[] = $this->getEntityManager()->getPDO()->quote($teamId);
            }
        }

        if (empty($result['customWhere'])) $result['customWhere'] = '';
        if (empty($result['customJoin'])) $result['customJoin'] = '';
        $result['customJoin'] .= " LEFT JOIN entity_team AS teamsMiddle ON teamsMiddle.entity_type = '".$this->parentEntityType."' AND teamsMiddle.entity_id = ".$this->parentTable.".id AND teamsMiddle.deleted = 0";
        $result['customWhere'] .= "
            AND (
                teamsMiddle.team_id IN (" . implode(', ', $arr) . ")
                 OR
                ".$this->parentTable.".assigned_user_id = ".$this->getEntityManager()->getPDO()->quote($this->getUser()->id)."
            )
        ";
        $result['whereClause'][] = array(
            $this->parentIdAttribute . '!=' => null
        );
    }

    protected function accessPortalOnlyOwn(&$result)
    {
        $result['whereClause'][] = array(
            'id' => null
        );
    }

    protected function accessPortalOnlyContact(&$result)
    {
        $result['whereClause'][] = array(
            'id' => null
        );
    }

    protected function accessPortalOnlyAccount(&$result)
    {
        $result['whereClause'][] = array(
            'id' => null
        );
    }
}
