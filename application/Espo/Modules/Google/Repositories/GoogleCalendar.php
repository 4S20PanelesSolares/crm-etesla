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

namespace Espo\Modules\Google\Repositories;

use Espo\ORM\Entity;

use Espo\Core\Utils\Util;

class GoogleCalendar extends \Espo\Core\ORM\Repositories\RDB
{
    private $allowedEventTypes = null;

    private $coreEventTypes = ['Meeting', 'Call'];

    private $usersJoinTables = [
        'Meeting' => 'meeting_user',
        'Call' => 'call_user',
    ];

    private $usersJoinForeignKeys = [
        'Meeting' => 'meeting_id',
        'Call' => 'call_id',
    ];

    private function validateEventTypes($types)
    {
        if (!is_array($this->allowedEventTypes)) {
            $this->loadAllowedEventTypes();
        }
        $selectedEventTypes = [];
        $eventTypes = (is_array($types)) ? $types : [$types];

        foreach($eventTypes as $eventType) {
            if (in_array($eventType, $this->allowedEventTypes) &&
                !in_array($eventType, $selectedEventTypes)) {
                $selectedEventTypes[] = $eventType;
            }
        }
        return $selectedEventTypes;
    }

    private function loadAllowedEventTypes()
    {
        $scopes = $this->getMetadata()->get('scopes');
        $allowedTypes = [];
        foreach ($scopes as $scope => $defs) {
            if (!empty($defs['activity']) &&
                !empty($defs['entity']) &&
                !empty($defs['object']) &&
                empty($defs['disabled']) &&
                $scope !== 'Email'
                ) {

                $allowedTypes[] = $scope;
            }
        }
        $this->allowedEventTypes = $allowedTypes;
    }

    public function storedUsersCalendars($userId)
    {
        $pdo = $this->getEntityManager()->getPDO();

        $sql = "
            SELECT gcuser.*, gc.calendar_id, gc.name
            FROM google_calendar_user gcuser
                JOIN google_calendar gc ON gcuser.google_calendar_id = gc.id
            WHERE gcuser.user_id = " . $pdo->quote($userId);
        $sth = $pdo->prepare($sql);
        $sth->execute();

        $res = $sth->fetchAll(\PDO::FETCH_ASSOC);

        $result = ['monitored' => [], 'main' => []];

        foreach($res as $row) {
            $result[$row['type']][$row['google_calendar_id']] = $row;
        }

        return $result;
    }

    public function getCalendarByGCId($googleCalendarId)
    {
        return $this->getEntityManager()->getRepository('GoogleCalendar')
                ->where(['calendarId' => $googleCalendarId])
                ->findOne();
    }

    public function getEventAttendees($eventType, $eventId)
    {
        $eventType = $this->getEntityManager()->getQuery()->sanitize($eventType);
        if (!in_array($eventType, $this->allowedEventTypes) || !in_array($eventType, $this->coreEventTypes)) {
            return null;
        }

        $pdo = $this->getPDO();

        $eventTable = strtolower($eventType);

        $relTables = ['user', 'contact', 'lead'];

        $result = [];

        foreach ($relTables as $relTable) {

            $relArray = [$relTable, $eventTable];
            sort($relArray);
            $relation = implode('_', $relArray);
            $scope = ucfirst($relTable);
            $idField = $eventTable . "_id";

            $sql = "
                SELECT " . $pdo->quote($scope) . " AS scope, {$relTable}_id AS id, status AS status
                FROM `$relation`
                WHERE deleted=0 AND {$idField}=" . $pdo->quote($eventId);
            ;
            try {
                $sth = $pdo->prepare($sql);
                $sth->execute();
                $rows = $sth->fetchAll(\PDO::FETCH_ASSOC);

                foreach ($rows as $row) {
                    $emailData = [];
                    $relatedEntity = $this->getEntityManager()->getEntity($scope, $row['id']);

                    if (!empty($relatedEntity)) {
                        $emailData = $this->getEntityManager()->getRepository('EmailAddress')->getEmailAddressData($relatedEntity);
                    }
                    $result[] = $row + ['emailData' => $emailData, 'entityType' => $scope];
                }

            } catch (\Exception $e) {
                $GLOBALS['log']->error("GoogleCalendarERROR: Failed query " . $sql . " ; " . $e->getMessage());
            }
        }
        return $result;
    }

    public function getUsersMainCalendar($userId)
    {
        return $this->getEntityManager()->getRepository('GoogleCalendarUser')
                ->where([
                    'active' => true,
                    'userId' => $userId,
                    'type' => 'main'])
                ->findOne();
    }

    public function addRecurrentEventToQueue($calendarId, $eventId)
    {
        $pdo = $this->getEntityManager()->getPDO();

        $this->removeRecurrentEventFromQueueByEventId($eventId);

        $query = "
            INSERT google_calendar_recurrent_event
                (id, google_calendar_user_id, event_id)
                VALUES
                (
                    ".$pdo->quote(Util::generateId()).",
                    ".$pdo->quote($calendarId).",
                    ".$pdo->quote($eventId)."
                )
        ";
        try {
            $sth = $pdo->prepare($query);
            $sth->execute();
        } catch (\Exception $e) {
            $GLOBALS['log']->error("GoogleCalendarERROR: Failed query " . $query . " ; " . $e->getMessage());
        }
    }

    public function removeRecurrentEventFromQueue($id)
    {
        $pdo = $this->getEntityManager()->getPDO();
        $query = "
            DELETE FROM google_calendar_recurrent_event
            WHERE id= " . $pdo->quote($id);
        try {
            $sth = $pdo->prepare($query);
            $sth->execute();
        } catch (\Exception $e) {
            $GLOBALS['log']->error("GoogleCalendarERROR: Failed query " . $query . " ; " . $e->getMessage());
        }
    }

    public function removeRecurrentEventFromQueueByEventId($eventId)
    {
        $pdo = $this->getEntityManager()->getPDO();
        $query = "
            DELETE FROM google_calendar_recurrent_event
            WHERE event_id= " . $pdo->quote($eventId);
        try {
            $sth = $pdo->prepare($query);
            $sth->execute();
        } catch (\Exception $e) {
            $GLOBALS['log']->error("GoogleCalendarERROR: Failed query " . $query . " ; " . $e->getMessage());
        }
    }

    public function getRecurrentEventFromQueue($calendarId)
    {
        $maxRange = new \DateTime();
        $maxRange->modify('+6 months');

        $pdo = $this->getEntityManager()->getPDO();
        $query = "
            SELECT
                id AS id,
                event_id as eventId,
                page_token as pageToken,
                last_loaded_event_time as lastEventTime
            FROM `google_calendar_recurrent_event`
            WHERE deleted=0 AND google_calendar_user_id=" . $pdo->quote($calendarId) . "  AND (last_loaded_event_time IS NULL OR last_loaded_event_time < " . $pdo->quote($maxRange->format('Y-m-d H:i:s')) . ")
            ORDER BY lastEventTime ASC";
        try {
            $sth = $pdo->prepare($query);
            $sth->execute();
            $res = $sth->fetch(\PDO::FETCH_ASSOC);
            return $res;
        } catch (\Exception $e) {
            $GLOBALS['log']->error("GoogleCalendarERROR: Failed query " . $query . " ; " . $e->getMessage());
            return false;
        }
    }

    public function updateRecurrentEvent($id, $pageToken = '', $lastEventTime = null)
    {
        $pdo = $this->getEntityManager()->getPDO();
        $query = "
            UPDATE google_calendar_recurrent_event
            SET
                page_token=" . $pdo->quote($pageToken) . ",
                last_loaded_event_time=". ((empty($lastEventTime)) ? 'NULL' : $pdo->quote($lastEventTime)) . "
            WHERE id=" . $pdo->quote($id) ;
        try {
            $sth = $pdo->prepare($query);
            $sth->execute();
        } catch (\Exception $e) {
            $GLOBALS['log']->error("GoogleCalendarERROR: Failed query " . $query . " ; " . $e->getMessage());
        }
    }

    public function isCalendarActive($email)
    {
        $calendar = $this->where(['calendarId' => $email])->findOne();
        return !empty($calendar);
    }

    public function getEntitiesByGCId($userId, $eventId, $eventTypes)
    {

        $pdo = $this->getEntityManager()->getPDO();
        $results = [];

        $eventTypes = $this->validateEventTypes($eventTypes);

        foreach ($eventTypes as $eventType) {

            if (in_array($eventType, $this->coreEventTypes)) {
                $events = $this->getEntityManager()->getRepository($eventType)->where([
                        //'assignedUserId' => $userId,
                        'googleCalendarEventId' => $eventId
                    ])->order('modifiedAt', true)->find([
                        'withDeleted' => true,
                    ]);
                foreach ($events as $event) {
                    $results[] = $event;
                }
            } else {
                $table = $this->getEntityManager()->getQuery()->sanitize(strtolower($eventType));
                $sql = "
                    SELECT `google_calendar_event`.entity_id AS entityId
                    FROM `google_calendar_event`
                    INNER JOIN `{$table}` entity_table ON
                        entity_table.id=`google_calendar_event`.entity_id AND
                        entity_table.deleted = 0
                    WHERE
                        entity_table.assigned_user_id = " . $pdo->quote($userId) . " AND
                        `google_calendar_event`.google_calendar_event_id=" . $pdo->quote($eventId) . "
                    ORDER BY entity_table.modified_at DESC
                ";

                try {
                    $sth = $pdo->prepare($sql);
                    $sth->execute();
                    $res = $sth->fetchAll(\PDO::FETCH_ASSOC);
                    foreach ($res as $row) {
                        $event = $this->getEntityManager()->getEntity($eventType, $row['entityId']);
                        if (!empty($event)) {
                            $results[] = $event;
                        }
                    }
                } catch (\Exception $e) {
                    $GLOBALS['log']->error("GoogleCalendarERROR: Failed query " . $sql . " ; " . $e->getMessage());
                    return false;
                }
            }
        }
        return $results;
    }

    public function getEvents($userId, $eventTypes, $since, $to, $lastEventId, $googleCalendarId, $limit = 20)
    {
        $pdo = $this->getPDO();
        $sql = '';

        $googleCalendar = $this->getCalendarByGCId($googleCalendarId);

        if (empty($googleCalendar)) {
            return [];
        }
        $lowerLimitDateQuery = " event_table.modified_at > ".$pdo->quote($since) ;
        if (!empty($lastEventId)) {
            $lowerLimitDateQuery = " (" . $lowerLimitDateQuery .
                " OR event_table.modified_at = " . $pdo->quote($since) . " AND STRCMP(event_table.id," . $pdo->quote($lastEventId) . ")=1 )";
        }
        $eventTypes = $this->validateEventTypes($eventTypes);

        foreach ($eventTypes as $eventType) {

            $eventType = $this->getEntityManager()->getQuery()->sanitize($eventType);
            $table = strtolower($eventType);

            if (!empty($sql)) {
                $sql .= " UNION ";
            }

            $datePart = "
                '' AS dateStartDate,
                '' AS dateEndDate,
            ";
            if ($this->getMetadata()->get(['entityDefs', $eventType, 'fields', 'isAllDay'])) {
                $datePart = "
                    date_start_date AS dateStartDate,
                    date_end_date AS dateEndDate,
                ";
            }

            if (in_array($eventType, $this->coreEventTypes)) {

                $joinTable = $this->usersJoinTables[$eventType];
                $foreignKey = $this->usersJoinForeignKeys[$eventType];

                $sql .= "
                SELECT DISTINCT
                    '{$eventType}' as scope,
                    event_table.id AS id,
                    event_table.name AS name,
                    event_table.date_start AS dateStart,
                    event_table.date_end AS dateEnd,
                    {$datePart}
                    event_table.google_calendar_event_id AS googleCalendarEventId,
                    event_table.modified_at AS modifiedAt,
                    event_table.description AS description,
                    event_table.deleted AS deleted,
                    event_table.status AS status

                FROM `{$table}` AS event_table

                LEFT JOIN `{$joinTable}` ON {$joinTable}.{$foreignKey} = event_table.id AND {$joinTable}.deleted = 0

                WHERE
                    {$joinTable}.user_id = " . $pdo->quote($userId) . " AND
                    {$lowerLimitDateQuery} AND
                    google_calendar_event_id <> '' AND
                    google_calendar_event_id <> 'FAIL' AND
                    google_calendar_event_id IS NOT NULL AND
                    event_table.modified_at < " . $pdo->quote($to) . " AND
                    google_calendar_id =" . $pdo->quote($googleCalendar->id) ." AND
                    (modified_at <> created_at OR event_table.deleted=1)
                ";

            } else {

                $datePart = "
                    '' AS dateStartDate,
                    '' AS dateEndDate,
                ";
                if ($this->getMetadata()->get(['entityDefs', $eventType, 'fields', 'isAllDay'])) {
                    $datePart = "
                        event_table.date_start_date AS dateStartDate,
                        event_table.date_end_date AS dateEndDate,
                    ";
                }
                $sql .= "
                    SELECT
                        '{$eventType}' as scope,
                        event_table.id AS id,
                        event_table.name AS name,
                        event_table.date_start AS dateStart,
                        event_table.date_end AS dateEnd,
                        {$datePart}
                        google_calendar_event.google_calendar_event_id AS googleCalendarEventId,
                        event_table.modified_at AS modifiedAt,
                        event_table.description AS description,
                        event_table.deleted AS deleted,
                        event_table.status AS status

                    FROM `{$table}` AS event_table

                    LEFT JOIN google_calendar_event ON
                        event_table.id=google_calendar_event.entity_id AND
                        google_calendar_event.entity_type = " . $pdo->quote($eventType) . "

                    WHERE
                        {$lowerLimitDateQuery} AND
                        event_table.assigned_user_id =".$pdo->quote($userId) . " AND
                        google_calendar_event.google_calendar_event_id <> '' AND
                        google_calendar_event.google_calendar_event_id <> 'FAIL' AND
                        google_calendar_event.google_calendar_event_id IS NOT NULL AND
                        event_table.modified_at < " . $pdo->quote($to) . " AND
                        google_calendar_event.google_calendar_id =" . $pdo->quote($googleCalendar->id) ." AND
                        (event_table.modified_at <> event_table.created_at OR event_table.deleted=1)
                ";
             }
        }

        $result = [];
        if (!empty($sql)) {
            $sql .= " ORDER BY modifiedAt ASC, id ASC LIMIT " . (int) $limit;
            try {
                $sth = $pdo->prepare($sql);
                $sth->execute();
                $rows = $sth->fetchAll(\PDO::FETCH_ASSOC);

                foreach ($rows as $row) {
                    $attendees = (!$row['deleted']) ? $this->getEventAttendees($row['scope'], $row['id']) : [];
                    $result[] = array_merge($row, ['attendees' => $attendees]);
                }
            } catch (\Exception $e) {
                $GLOBALS['log']->error("GoogleCalendarERROR: Failed query " . $sql . " ; " . $e->getMessage());
            }
        }

        return $result;
    }

    protected function getUserWithPushIntegrationIdList()
    {
        if (isset($this->userWithIntegrationIdList)) {
            return $this->userWithIntegrationIdList;
        }

        $userList = $this->getEntityManager()->getRepository('User')->select(['id'])->where([
            'type' => ['admin', 'regular'],
            'isActive' => true,
        ])->find();

        $userWithIntegrationIdList = [];

        foreach ($userList as $user) {
            $ea = $this->getEntityManager()->getRepository('ExternalAccount')->get('Google__' . $user->id);
            if ($ea->get('googleCalendarEnabled') && $ea->get('calendarDirection') !== 'GCToEspo') {
                $userWithIntegrationIdList[] = $user->id;
            }
        }

        $this->userWithIntegrationIdList = $userWithIntegrationIdList;

        return $userWithIntegrationIdList;
    }

    public function getNewEvents($userId, $eventTypes, $since, $limit = 20)
    {
        $pdo = $this->getPDO();
        $sql = '';
        $result = [];

        $eventTypes = $this->validateEventTypes($eventTypes);

        $userWithIntegrationIdList = $this->getUserWithPushIntegrationIdList();

        $userWithIntegrationIdQuotedList = [];
        foreach ($userWithIntegrationIdList as $id) {
            $userWithIntegrationIdQuotedList[] = $pdo->quote($id);
        }

        foreach ($eventTypes as $eventType) {
            if (!empty($sql)) {
                $sql .= " UNION ";
            }
            $eventType = $this->getEntityManager()->getQuery()->sanitize($eventType);
            $table = strtolower($eventType);
            if (in_array($eventType, $this->coreEventTypes)) {

                $joinTable = $this->usersJoinTables[$eventType];
                $foreignKey = $this->usersJoinForeignKeys[$eventType];

                $datePart = "
                    '' AS dateStartDate,
                    '' AS dateEndDate,
                ";
                if ($this->getMetadata()->get(['entityDefs', $eventType, 'fields', 'isAllDay'])) {
                    $datePart = "
                        date_start_date AS dateStartDate,
                        date_end_date AS dateEndDate,
                    ";
                }

                $sql .= "
                SELECT DISTINCT
                    '{$eventType}' as scope,
                    {$table}.id AS id,
                    {$table}.name AS name,
                    {$table}.date_start AS dateStart,
                    {$table}.date_end AS dateEnd,
                    {$datePart}
                    {$table}.modified_at AS modifiedAt,
                    {$table}.description AS description,
                    {$table}.status AS status

                FROM `{$table}`

                LEFT JOIN `{$joinTable}` ON {$joinTable}.{$foreignKey} = {$table}.id AND {$joinTable}.deleted = 0

                WHERE
                    date_start >= " . $pdo->quote($since) . " AND
                    {$joinTable}.user_id = " . $pdo->quote($userId) . " AND
                    (
                        assigned_user_id = " . $pdo->quote($userId) . "
                        OR
                        assigned_user_id = NULL
                        OR
                        assigned_user_id NOT IN (" . implode(', ', $userWithIntegrationIdQuotedList) . ")
                    ) AND
                    (google_calendar_event_id = '' OR google_calendar_event_id IS NULL) AND
                    {$table}.status != 'Not Held' AND
                    {$table}.deleted = 0
            ";
            } else {
                $datePart = "
                    '' AS dateStartDate,
                    '' AS dateEndDate,
                ";
                if ($this->getMetadata()->get(['entityDefs', $eventType, 'fields', 'isAllDay'])) {
                    $datePart = "
                        `{$table}`.date_start_date AS dateStartDate,
                        `{$table}`.date_end_date AS dateEndDate,
                    ";
                }

                $sql .= "
                SELECT
                    '{$eventType}' as scope,
                    `{$table}`.id AS id,
                    `{$table}`.name AS name,
                    `{$table}`.date_start AS dateStart,
                    `{$table}`.date_end AS dateEnd,
                    {$datePart}
                    `{$table}`.modified_at AS modifiedAt,
                    `{$table}`.description AS description,
                    `{$table}`.status AS status

                FROM `{$table}`
                LEFT JOIN google_calendar_event gcevent ON
                    `{$table}`.id=gcevent.entity_id AND
                    gcevent.entity_type=".$pdo->quote($eventType) . "

                WHERE
                    `{$table}`.date_start >= ".$pdo->quote($since) . " AND
                    `{$table}`.assigned_user_id =".$pdo->quote($userId) . " AND
                    (gcevent.google_calendar_event_id ='' OR gcevent.google_calendar_event_id IS NULL) AND
                    `{$table}`.status != 'Not Held' AND
                    `{$table}`.deleted=0
            ";
            }
        }

        if (!empty($sql)) {
            $sql .= " ORDER BY dateStart DESC LIMIT " . (int) $limit;

            try {
                $sth = $pdo->prepare($sql);
                $sth->execute();
                $rows = $sth->fetchAll(\PDO::FETCH_ASSOC);

                foreach ($rows as $row) {
                    $attendees = $this->getEventAttendees($row['scope'], $row['id']);
                    $result[] = array_merge($row, ['attendees' => $attendees]);
                }

            } catch (\Exception $e) {
                $GLOBALS['log']->error("GoogleCalendarERROR: Failed query " . $sql . " ; " . $e->getMessage());
            }
        }


        return $result;
    }

    public function deleteRecurrentInstancesFromEspo($calendarId, $googleCalendarEventId, $eventTypes)
    {
        $pdo = $this->getEntityManager()->getPDO();
        $eventTypes = $this->validateEventTypes($eventTypes);
        foreach ($eventTypes as $eventType) {
            $eventType = $this->getEntityManager()->getQuery()->sanitize($eventType);
            $table = strtolower($eventType);
            if (in_array($eventType, $this->coreEventTypes)) {
                $query = "
                    UPDATE `{$table}`
                    SET
                        deleted=1, google_calendar_id=NULL, google_calendar_event_id=NULL
                    WHERE google_calendar_id=" . $pdo->quote($calendarId) ." AND
                        google_calendar_event_id LIKE ". $pdo->quote($googleCalendarEventId . '_%');
                try {
                    $sth = $pdo->prepare($query);
                    $sth->execute();
                } catch (\Exception $e) {
                    $GLOBALS['log']->error("GoogleCalendarERROR: Failed query " . $query . " ; " . $e->getMessage());
                }
            } else {
                $selectQuery = "
                    SELECT id
                    FROM google_calendar_event
                    WHERE
                        entity_type=" . $pdo->quote($eventType) ." AND
                        google_calendar_id=" . $pdo->quote($calendarId) . " AND
                        google_calendar_event_id LIKE ". $pdo->quote($googleCalendarEventId . '_%');
                $sthSelect = $pdo->prepare($selectQuery);
                $sthSelect->execute();
                $ids = $sthSelect->fetchAll(\PDO::FETCH_COLUMN, 0);

                if ($ids) {
                    $selectQuery = "
                        SELECT entity_id
                        FROM google_calendar_event
                        WHERE
                            entity_type=" . $pdo->quote($eventType) ." AND
                            google_calendar_id=" . $pdo->quote($calendarId) . " AND
                            google_calendar_event_id LIKE " . $pdo->quote($googleCalendarEventId . '_%');
                    $sthSelect = $pdo->prepare($selectQuery);
                    $sthSelect->execute();
                    $entityIds = $sthSelect->fetchAll(\PDO::FETCH_COLUMN, 0);

                    $entityIdsSafe = [];
                    foreach ($entityIds as $id) {
                        $entityIdsSafe[] = $pdo->quote($id);
                    }

                    $updateQuery = "UPDATE `{$table}` SET deleted=1 WHERE id IN (" . implode(", ", $entityIdsSafe) . ")";
                    $sthUpdate = $pdo->prepare($updateQuery);
                    $sthUpdate->execute();

                    $idsSafe = [];
                    foreach ($ids as $id) {
                        $idsSafe[] = $pdo->quote($id);
                    }
                    $deleteQuery = "DELETE FROM `google_calendar_event` WHERE id IN (" . implode(", ", $idsSafe) . ")";
                    $sthDelete = $pdo->prepare($deleteQuery);
                    $sthDelete->execute();
                }
            }
        }
        $this->removeRecurrentEventFromQueueByEventId($googleCalendarEventId);
    }

    public function storeEventRelation($entityType, $entityId, $googleCalendarId, $googleCalendarEventId = null)
    {
        $pdo = $this->getEntityManager()->getPDO();
        $entityType = $this->getEntityManager()->getQuery()->sanitize($entityType);
        if (in_array($entityType, $this->coreEventTypes)) {
            $table = strtolower($entityType);
            $query = "UPDATE `{$table}` SET google_calendar_id=" . $pdo->quote($googleCalendarId);
            if ($googleCalendarEventId !== null) {
                $query .= ", google_calendar_event_id=" . $pdo->quote($googleCalendarEventId);
            }
            $query .= "WHERE id=" . $pdo->quote($entityId);
        } else {
            $data = $this->getEventEntityGoogleData($entityType, $entityId);
            if ($data && isset($data['id'])) {
                $query = "UPDATE google_calendar_event SET google_calendar_id=" . $pdo->quote($googleCalendarId);
                if ($googleCalendarEventId !== null) {
                    $query .= ", google_calendar_event_id=" . $pdo->quote($googleCalendarEventId);
                }
                $query .= "WHERE id=" . $pdo->quote($data['id']);
            } else {
                $query = "
                    INSERT INTO google_calendar_event
                    (`entity_type`,`entity_id`,`google_calendar_id`,`google_calendar_event_id`)
                    VALUES (" .
                        $pdo->quote($entityType) . ", " .
                        $pdo->quote($entityId) . ", " .
                        $pdo->quote($googleCalendarId) . ", " .
                        $pdo->quote($googleCalendarEventId) . ")";
            }
        }

        try {
            $sth = $pdo->prepare($query);
            $sth->execute();
            return true;
        } catch (\Exception $e) {
            $GLOBALS['log']->error("GoogleCalendarERROR: Failed query " . $query . " ; " . $e->getMessage());
        }
        return false;
    }

    public function resetEventRelation($entityType, $entityId)
    {
        $pdo = $this->getEntityManager()->getPDO();
        $entityType = $this->getEntityManager()->getQuery()->sanitize($entityType);
        if (in_array($entityType, $this->coreEventTypes)) {
            $table = strtolower($entityType);
            $query = "UPDATE `{$table}`
                SET google_calendar_id=NULL, google_calendar_event_id=NULL
                WHERE id=" . $pdo->quote($entityId);
        } else {
            $query = "DELETE FROM google_calendar_event
                WHERE entity_id=" . $pdo->quote($entityId) . " AND entity_type=" . $pdo->quote($entityType);
        }

        try {
            $sth = $pdo->prepare($query);
            $sth->execute();
            return true;
        } catch (\Exception $e) {
            $GLOBALS['log']->error("GoogleCalendarERROR: Failed query " . $query . " ; " . $e->getMessage());
        }
        return false;
    }

    public function getEventEntityGoogleData($entityType, $entityId)
    {
        $pdo = $this->getEntityManager()->getPDO();
        $query = "
            SELECT
                id AS id,
                google_calendar_id as googleCalendarId,
                google_calendar_event_id as googleCalendarEventId
            FROM google_calendar_event
            WHERE entity_id=" . $pdo->quote($entityId) . " AND
                entity_type=" . $pdo->quote($entityType);
        $sth = $pdo->prepare($query);
        $sth->execute();
        $res = $sth->fetch(\PDO::FETCH_ASSOC);
        return $res;
    }

}
