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

namespace Espo\Modules\Advanced\SelectManagers;

class BpmnFlowchart extends \Espo\Core\SelectManagers\Base
{
    protected function filterIsManuallyStartable(&$result)
    {
        $result['whereClause'][] = array(
            'isActive' => true
        );
    }

    protected function filterActive(&$result)
    {
        $result['whereClause'][] = array(
            'isActive' => true
        );
    }

    protected function filterActiveHasNoneStartEvent(&$result)
    {
        $result['whereClause'][] = array(
            'hasNoneStartEvent' => true,
            'isActive' => true
        );
    }
 }
