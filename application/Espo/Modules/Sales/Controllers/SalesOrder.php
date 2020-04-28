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

namespace Espo\Modules\Sales\Controllers;

use \Espo\Core\Exceptions\BadRequest;
use \Espo\Core\Exceptions\Error;

class SalesOrder extends \Espo\Core\Controllers\Record
{
    public function actionGetAttributesFromOpportunity($params, $data, $request)
    {
        $opportunityId = $request->get('opportunityId');
        if (empty($opportunityId)) {
            throw new BadRequest();
        }

        return $this->getRecordService()->getAttributesFromOpportunity($opportunityId);
    }

    public function actionGetAttributesFromQuote($params, $data, $request)
    {
        $quoteId = $request->get('quoteId');
        if (empty($quoteId)) {
            throw new BadRequest();
        }

        return $this->getRecordService()->getAttributesFromQuote($quoteId);
    }

    public function postActionGetAttributesForEmail($params, $data)
    {
        if (is_array($data)) $data = (object) $data;

        if (empty($data->id) || empty($data->templateId)) {
            throw new BadRequest();
        }

        return $this->getRecordService()->getAttributesForEmail($data->id, $data->templateId);
    }
}
