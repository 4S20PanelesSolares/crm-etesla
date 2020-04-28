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

namespace Espo\Modules\Sales\Acl;

use \Espo\Entities\User;
use \Espo\ORM\Entity;

class InvoiceItem extends \Espo\Core\Acl\Base
{
    public function checkIsOwner(User $user, Entity $entity)
    {
        if ($entity->has('invoiceId')) {
            $invoiceId = $entity->get('invoiceId');
            if (!$invoiceId) return;

            $invoice = $this->getEntityManager()->getEntity('Invoice', $invoiceId);
            if ($invoice && $this->getAclManager()->getImplementation('Invoice')->checkIsOwner($user, $invoice)) {
                return true;
            }
        } else {
            return parent::checkIsOwner($user, $entity);
        }
    }

    public function checkInTeam(User $user, Entity $entity)
    {
        if ($entity->has('invoiceId')) {
            $invoiceId = $entity->get('invoiceId');
            if (!$invoiceId) return;

            $invoice = $this->getEntityManager()->getEntity('Invoice', $invoiceId);
            if ($invoice && $this->getAclManager()->getImplementation('Invoice')->checkInTeam($user, $invoice)) {
                return true;
            }
        } else {
            return parent::checkInTeam($user, $entity);
        }
    }
}
