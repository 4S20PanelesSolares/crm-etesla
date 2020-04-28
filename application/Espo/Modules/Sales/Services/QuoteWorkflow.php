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

namespace Espo\Modules\Sales\Services;

use \Espo\Core\Exceptions\Error;
use \Espo\Core\Exceptions\NotFound;

use \Espo\ORM\Entity;

class QuoteWorkflow extends \Espo\Core\Services\Base
{
    protected function init()
    {
        parent::init();

        $this->addDependency('entityManager');
        $this->addDependency('serviceFactory');
        $this->addDependency('user');
        $this->addDependency('metadata');
        $this->addDependency('config');
        $this->addDependency('language');
        $this->addDependency('mailSender');
    }

    public function addItemList($workflowId, $entity, $data)
    {
        if (is_array($data)) {
            $data = (object) $data;
        }

        if (!isset($data->itemList) || !is_array($data->itemList)) {
            throw new Error('Bad itemList provided in addQuoteItemList.');
        }

        if (empty($data->itemList)) return;

        $newItemList = $data->itemList;

        if (!$entity->has('itemList')) {
            $quoteService = $this->getInjection('serviceFactory')->create('Quote');
            $quoteService->loadItemListField($entity);
        }

        $itemList = $entity->get('itemList');

        foreach ($newItemList as $item) {
            $itemList[] = (object) $item;
        }

        $entity->set('itemList', $itemList);

        if (!$entity->has('modifiedById')) {
            $entity->set('modifiedById', 'system');
            $entity->set('modifiedByName', 'System');
        }

        $this->getEntityManager()->saveEntity($entity, ['skipWorkflow' => true, 'skipModifiedBy' => true]);
    }
}
