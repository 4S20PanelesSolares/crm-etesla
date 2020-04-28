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

class AfterInstall
{
    protected $container;

    public function run($container, $params = [])
    {
        $this->container = $container;

        $isUpgrade = false;
        if (!empty($params['isUpgrade'])) $isUpgrade = true;

        $entityManager = $this->container->get('entityManager');

        $pdo = $entityManager->getPDO();

        $metadata = $this->container->get('metadata');

        $template = $entityManager->getEntity('Template', '001');
        if (!$isUpgrade && !$template) {
            $template = $entityManager->getEntity('Template');
            $template->set([
                'id' => '001',
                'entityType' => 'Quote',
                'name' => 'Quote (example)',
                'header' => $metadata->get(['entityDefs', 'Template', 'defaultTemplates', 'Quote', 'header']),
                'body' => $metadata->get(['entityDefs', 'Template', 'defaultTemplates', 'Quote', 'body']),
                'footer' => $metadata->get(['entityDefs', 'Template', 'defaultTemplates', 'Quote', 'footer']),
                'createdById' => 'system'
            ]);
            try {
                $entityManager->saveEntity($template, ['skipCreatedBy' => true]);
            } catch (\Exception $e) {}

            $template = $entityManager->getEntity('Template');
            $template->set([
                'id' => '011',
                'entityType' => 'SalesOrder',
                'name' => 'Sales Order (example)',
                'header' => $metadata->get(['entityDefs', 'Template', 'defaultTemplates', 'SalesOrder', 'header']),
                'body' => $metadata->get(['entityDefs', 'Template', 'defaultTemplates', 'SalesOrder', 'body']),
                'footer' => $metadata->get(['entityDefs', 'Template', 'defaultTemplates', 'SalesOrder', 'footer']),
                'createdById' => 'system'
            ]);
            try {
                $entityManager->saveEntity($template, ['skipCreatedBy' => true]);
            } catch (\Exception $e) {}

            $template = $entityManager->getEntity('Template');
            $template->set([
                'id' => '021',
                'entityType' => 'Invoice',
                'name' => 'Invoice (example)',
                'header' => $metadata->get(['entityDefs', 'Template', 'defaultTemplates', 'Invoice', 'header']),
                'body' => $metadata->get(['entityDefs', 'Template', 'defaultTemplates', 'Invoice', 'body']),
                'footer' => $metadata->get(['entityDefs', 'Template', 'defaultTemplates', 'Invoice', 'footer']),
                'createdById' => 'system'
            ]);
            try {
                $entityManager->saveEntity($template, ['skipCreatedBy' => true]);
            } catch (\Exception $e) {}
        }

        $config = $this->container->get('config');
        $tabList = $config->get('tabList');

        if (!$isUpgrade) {
            if (!in_array('Quote', $tabList)) {
                $tabList[] = 'Quote';
                $config->set('tabList', $tabList);
            }
            if (!in_array('SalesOrder', $tabList)) {
                $tabList[] = 'SalesOrder';
                $config->set('tabList', $tabList);
            }
            if (!in_array('Invoice', $tabList)) {
                $tabList[] = 'Invoice';
                $config->set('tabList', $tabList);
            }
            if (!in_array('Product', $tabList)) {
                $tabList[] = 'Product';
                $config->set('tabList', $tabList);
            }
        }

        $iframeUrl = $this->addLinkParam($config->get('adminPanelIframeUrl'), 'sales-pack', '48b45b7d11e497058130ec49a7811186');
        $config->set('adminPanelIframeUrl', $iframeUrl);

        $config->save();

        $this->clearCache();
    }

    protected function clearCache()
    {
        try {
            $this->container->get('dataManager')->clearCache();
        } catch (\Exception $e) {}
    }

    protected function addLinkParam($link, $paramName, $paramValue)
    {
        if (empty($link)) {
            $link = 'https://s.espocrm.com/';
        }

        $param = $paramName . '=' . $paramValue;

        if (preg_match('/\?.*'. $paramName .'=/i', $link)) {
            return preg_replace('/'.$paramName.'=[^&]+/i', $param, $link);
        }

        if (parse_url($link, PHP_URL_QUERY)) {
            return $link . '&' . $param;
        }

        if (preg_match('/(\/$|\/\/.*\/.*\..*$)/', $link)) {
            return $link . '?' . $param;
        }

        return $link . '/?' . $param;
    }
}
