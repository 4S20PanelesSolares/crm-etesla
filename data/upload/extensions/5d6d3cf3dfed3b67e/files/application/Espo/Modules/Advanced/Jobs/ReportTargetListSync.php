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

namespace Espo\Modules\Advanced\Jobs;

use \Espo\Core\Exceptions;

class ReportTargetListSync extends \Espo\Core\Jobs\Base
{

    public function run()
    {
        $reportService = $this->getServiceFactory()->create('Report');

        $targetListList = $this->getEntityManager()->getRepository('TargetList')->where(array(
            'syncWithReportsEnabled' => true
        ))->find();

        foreach ($targetListList as $targetList) {
            try {
                $reportService->syncTargetListWithReports($targetList);
            } catch (\Exceptions $e) {
                $GLOBALS['log']->error('ReportTargetListSync: [' . $e->getCode() . '] ' .$e->getMessage());
            }
        }

        return true;
    }
}
