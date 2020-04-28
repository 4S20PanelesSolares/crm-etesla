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

class Google extends \Espo\Core\ExternalAccount\Clients\OAuth2Abstract
{
    protected $baseUrl;

    protected $calendar;

    protected $contacts;

    private $gmailClient;

    protected function buildUrl($url)
    {
        return $this->baseUrl . trim($url, '\/');
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
        $reason = '';
        if (isset($r['result']['error']['message'])) {
            $reason = ' Reason: ' . $r['result']['error']['message'];
        }
        throw new Error("Error after requesting {$httpMethod} {$url}." . $reason, $code);
    }
    // end copy

    protected function getPingUrl()
    {
    }

    private function getParams()
    {
        $params = array();
        foreach($this->paramList as $name) {
            $params[$name] = $this->$name;
        }
        return $params;
    }

    public function getGmailClient()
    {
        if (empty($this->gmailClient)) {
            $this->gmailClient = new Gmail($this->client, $this->getParams(), $this->manager);
        }
        return $this->gmailClient;
    }

    public function getCalendarClient()
    {
        if (empty($this->calendar)) {
            $this->calendar = new Calendar($this->client, $this->getParams(), $this->manager);
        }
        return $this->calendar;
    }

    public function getContactsClient()
    {
        if (empty($this->contacts)) {
            $this->contacts = new Contacts($this->client, $this->getParams(), $this->manager);
        }
        return $this->contacts;
    }

    public function ping()
    {
        if (empty($this->accessToken) || empty($this->clientId) || empty($this->clientSecret)) {
            return false;
        }

        $calendarPingResult = $this->productPing($this->getCalendarClient()->getPingUrl());
        $contactsPingResult = $this->getContactsClient()->productPing();

        return $contactsPingResult || $calendarPingResult;
    }

    protected function productPing($url = null)
    {
        if (!$url) {
            $url = $this->getPingUrl();
        }

        try {
            $this->request($url);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
