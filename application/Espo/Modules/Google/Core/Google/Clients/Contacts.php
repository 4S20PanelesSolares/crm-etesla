<?php
/*********************************************************************************
 * The contents of this file are subject to the EspoCRM Google Integration
 * Agreement ("License") which can be viewed at
 * https://www.espocrm.com/google-integration-agreement.
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * sublicense, resell, rent, lease, distribute, or otherwise  transfer rights
 * or usage to the software.
 * 
 * Copyright (C) 2015-2019 Letrium Ltd.
 * 
 * License ID: d7328b509a0c6565cdb459461877aa93
 ***********************************************************************************/

namespace Espo\Modules\Google\Core\Google\Clients;

use \Espo\Core\Exceptions\Error;
use \Espo\Core\Exceptions\Forbidden;
use \Espo\Core\Exceptions\NotFound;
use \Espo\Core\Exceptions\BadRequest;

use \Espo\Core\ExternalAccount\OAuth2\Client;

class Contacts extends Google
{

    const CONTENT_TYPE_APPLICATION_XML = 'application/atom+xml';

    protected $baseUrl = 'https://www.google.com/m8/feeds/';

    protected function getClient()
    {
        return parent::getClient()->getContactsClient();
    }

    protected function getPingUrl()
    {
        return $this->buildUrl('groups/default/full');
    }

    protected function afterTokenRefreshed($data)
    {
        parent::afterTokenRefreshed($data);
    }

    protected function productPing($url = null)
    {
        $url = $this->getPingUrl();
        $params = ['v' => '3.0', 'max-results' => '1'];
        try {
            $this->request($url, $params);
            return true;
        } catch (\Exception $e) {
            $GLOBALS['log']->debug($e->getMessage());
            return false;
        }
    }

    //copied from parent class
    public function request($url, $params = null, $httpMethod = Client::HTTP_METHOD_GET, $contentType = null, $allowRenew = true)
    {
        $httpHeaders = array();
        if (!empty($contentType)) {
            $httpHeaders['Content-Type'] = $contentType;
            switch ($contentType) {
                case Client::CONTENT_TYPE_MULTIPART_FORM_DATA:
                    $httpHeaders['Content-Length'] = strlen($params);
                    break;
                case Client::CONTENT_TYPE_APPLICATION_JSON:
                    $httpHeaders['Content-Length'] = strlen($params);
                    break;
            }
        }

        if ($httpMethod == Client::HTTP_METHOD_POST) {
          //  $httpHeaders['If-Match'] = '*';
        }

        $r = $this->client->request($url, $params, $httpMethod, $httpHeaders);
        $code = null;
        if (!empty($r['code'])) {
            $code = $r['code'];
        }
        // added successful statuses
        if ($code >= 200 && $code < 300) {
            return $r['result'];
        } else {
            $handledData = $this->handleErrorResponse($r);
            if ($allowRenew && is_array($handledData)) {
                if ($handledData['action'] == 'refreshToken') {
                    if ($this->refreshToken()) {
                        return $this->request($url, $params, $httpMethod, $contentType, false);
                    }
                } else if ($handledData['action'] == 'renew') {
                    return $this->request($url, $params, $httpMethod, $contentType, false);
                }
            }
        }
        $resultXml = @simplexml_load_string($r['result']);
        $reason = '';
        if ($resultXml) {
            $reason = ' Reason: ' . $resultXml->error->internalReason;
        }
        throw new Error("Google Contacts:Error after requesting {$httpMethod} {$url}." . $reason, $code);
    }
    // end copy

    protected function handleErrorResponse($r)
    {
        if ($r['code'] == 401 && !empty($r['result'])) {
            $result = $r['result'];
            if (strpos($r['header'], 'Invalid token') !== false) {
                return array(
                    'action' => 'refreshToken'
                );
            } else {
                return array(
                    'action' => 'renew'
                );
            }
        } else if ($r['code'] == 400 && !empty($r['result'])) {
            if ($r['result']['error'] == 'Invalid token') {
                return array(
                    'action' => 'refreshToken'
                );
            }
        }
    }

    public function getUserData()
    {
        $url = $this->buildUrl('groups/default/full');
        $params = ['v' => '3.0', 'max-results' => '1'];
        return $this->request($url, $params);
    }

    public function getGroupList($params = array())
    {
        $url = $this->buildUrl('groups/default/full');
        $defaultParams = ['v' => '3.0', 'max-results' => '25'];
        $params = array_merge($params, $defaultParams);
        return $this->request($url, $params);
    }

    public function getContacts($params = array())
    {
        $url = $this->buildUrl('contacts/default/full');
        $defaultParams = ['v' => '3.0', 'max-results' => '25'];
        $params = array_merge($params, $defaultParams);
        try {
            return $this->request($url, $params, $method);
        } catch (\Exception $e) {
            $GLOBALS['log']->error('Google Contacts: ' . $e->getMessage());
            return false;
        }
    }

    public function retrieveContact($contactId)
    {
        $method = 'GET';
        $url = $this->buildUrl('contacts/default/full/' . $contactId);
        try {
            return $this->request($url, null, $method);
        } catch (\Exception $e) {
            $GLOBALS['log']->error($e->getMessage());
            return false;
        }
    }

    public function createContact($entry)
    {
        $method = 'POST';
        $url = $this->buildUrl('contacts/default/full');
        try {
            return $this->request($url, $entry, $method, self::CONTENT_TYPE_APPLICATION_XML);
        } catch (\Exception $e) {
            $GLOBALS['log']->error('Google Contacts: ' . $e->getMessage());
            return false;
        }
    }

    public function updateContact($url, $entry)
    {
        $method = 'PUT';
        try {
            return $this->request($url, $entry, $method, self::CONTENT_TYPE_APPLICATION_XML);
        } catch (\Exception $e) {
            $GLOBALS['log']->error($e->getMessage());
            return false;
        }
    }

    public function batch($batchFeed)
    {
        $method = 'POST';
        $url = $this->buildUrl('contacts/default/full/batch');
        try {
            return $this->request($url, $batchFeed, $method, self::CONTENT_TYPE_APPLICATION_XML);
        } catch (\Exception $e) {
            $GLOBALS['log']->error($e->getMessage());
            return false;
        }
    }
}
