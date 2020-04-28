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

namespace Espo\Modules\Advanced\Core\Workflow\Conditions;

use Espo\Modules\Advanced\Core\Workflow\Utils;

class WasEqual extends Base
{
    protected function compare($fieldValue)
    {
        $entity = $this->getEntity();
        $fieldName = $this->getFieldName();

        $previousFieldValue = $entity->getFetched($fieldName);
        if (isset($previousFieldValue)) {
            $previousFieldValue = $previousFieldValue;
        }

        $subjectValue = $this->getSubjectValue();

        return ($subjectValue == $previousFieldValue);
    }

}