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

class Calendar extends Google
{
    protected $baseUrl = 'https://www.googleapis.com/calendar/v3/';

    protected function getPingUrl()
    {
        return $this->buildUrl('users/me/calendarList');
    }

    public function getCalendarList($params = array())
    {
        $method = 'GET';

        $url = $this->buildUrl('users/me/calendarList');

        $defaultParams = array(
            'maxResults' => 50,
            'minAccessRole' => 'owner'
        );

        $params = array_merge($defaultParams, $params);

        return $this->request($url, $params, $method);
    }

    public function getCalendarInfo($calendarId)
    {
        $method = 'GET';
        $url = $this->buildUrl('calendars/' . $calendarId);

        try {
            return $this->request($url, null, $method);
        } catch (\Exception $e) {
            $GLOBALS['log']->error('GoogleCalendarERROR: ' . $e->getMessage());
            return false;
        }
    }

    public function getEventList($calendarId, $params = array())
    {
        $method = 'GET';

        $url = $this->buildUrl('calendars/' . $calendarId . '/events');

        $defaultParams = array(
            'maxResults' => 10,
            'alwaysIncludeEmail' => 'true',
        );

        $params = array_merge($defaultParams, $params);

        try {
            return $this->request($url, $params, $method);

        } catch (\Exception $e) {
            $result = array('success' => false);

            if ($e->getCode() == 400 || $e->getCode() == 410) {
                $result['action'] = 'resetToken';
            }

            $GLOBALS['log']->error('GoogleCalendarERROR: ' . $e->getMessage());
            $paramsStr = print_r($params, true);
            $GLOBALS['log']->debug('GoogleCalendarERROR: Params: ' . $paramsStr);

            return $result;
        }
    }

    public function getEventInstances($calendarId, $eventId, $params = array())
    {
        $method = 'GET';

        $url = $this->buildUrl('calendars/' . $calendarId . '/events/' . $eventId .'/instances');

        $defaultParams = array(
            'maxResults' => 10,
            'alwaysIncludeEmail' => 'true',
        );

        $params = array_merge($defaultParams, $params);

        try {
            return $this->request($url, $params, $method);

        } catch (\Exception $e) {
            $result = array('success' => false);

            if ($e->getCode() == 400 || $e->getCode() == 410) {
                $result['action'] = 'resetToken';
            } else if ($e->getCode() == 403 || $e->getCode() == 404) {
                $result['action'] = 'deleteEvent';
            }

            $GLOBALS['log']->error('GoogleCalendarERROR: ' . $e->getMessage());
            $paramsStr = print_r($params, true);
            $GLOBALS['log']->debug('GoogleCalendarERROR: Params: ' . $paramsStr);

            return $result;
        }
    }

    public function deleteEvent($calendarId, $eventId)
    {
        $method = 'DELETE';
        $url = $this->buildUrl('calendars/' . $calendarId . '/events/' . $eventId);
        try {
            $this->request($url, null, $method);
        } catch (\Exception $e) {
            $GLOBALS['log']->error("GoogleCalendarERROR:" . $e->getMessage());
            return false;
        }
        return true;
    }

    public function retrieveEvent($calendarId, $eventId)
    {
        $method = 'GET';
        $url = $this->buildUrl('calendars/' . $calendarId . '/events/' . $eventId);

        try {
            return $this->request($url, array(), $method);
        } catch (\Exception $e) {
            $GLOBALS['log']->error("GoogleCalendarERROR:" . $e->getMessage());
            return false;
        }
    }

    public function insertEvent($calendarId, $event)
    {

        $method = 'POST';

        $url = $this->buildUrl('calendars/' . $calendarId . '/events');

        try {
            return $this->request($url, json_encode($event), $method, 'application/json');
        } catch (\Exception $e) {

            $GLOBALS['log']->error('GoogleCalendarERROR: ' . $e->getMessage());
            $paramsStr = print_r($event, true);
            $GLOBALS['log']->debug('GoogleCalendarERROR: Params: ' . $paramsStr);
            return false;
        }

    }

    public function updateEvent($calendarId, $eventId, $modification)
    {
        $method = 'PUT';
        $url = $this->buildUrl('calendars/' . $calendarId . '/events/' . $eventId);

        try {
            return $this->request($url, json_encode($modification), $method, 'application/json');
        } catch (\Exception $e) {

            $GLOBALS['log']->error('GoogleCalendarERROR: ' . $e->getMessage());
            $paramsStr = print_r($modification, true);
            $GLOBALS['log']->debug('GoogleCalendarERROR: Params: ' . $paramsStr);
            return false;
        }

    }

}
