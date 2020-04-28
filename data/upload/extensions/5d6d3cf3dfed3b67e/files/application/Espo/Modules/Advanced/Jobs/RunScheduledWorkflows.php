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

class RunScheduledWorkflows extends \Espo\Core\Jobs\Base
{
    protected $serviceMethodName = 'runScheduledWorkflow';

    public function run()
    {
        $entityManager = $this->getEntityManager();

        $collection = $entityManager->getRepository('Workflow')->where([
            'type' => 'scheduled',
            'isActive' => true
        ])->find();

        foreach ($collection as $entity) {
            $cronExpression = \Cron\CronExpression::factory($entity->get('scheduling'));

            try {
                $executionTime = $cronExpression->getNextRunDate()->format('Y-m-d H:i:s');
            } catch (\Exception $e) {
                $GLOBALS['log']->error('RunScheduledWorkflows: Workflow ['.$entity->get('id').']: Impossible scheduling expression ['.$entity->get('scheduling').'].');
                continue;
            }

            if ($entity->get('lastRun') == $executionTime) {
                continue;
            }

            $jobData = [
                'workflowId' => $entity->id
            ];

            if (!$this->isJobExisting($executionTime, $entity->id)) {
                if ($this->createJob($jobData, $executionTime, $entity->id)) {
                    $entity->set('lastRun', $executionTime);
                    $entityManager->saveEntity($entity);
                }
            }
        }
    }

    protected function createJob(array $jobData, $executionTime, $workflowId)
    {
        $job = $this->getEntityManager()->getEntity('Job');
        $job->set([
            'serviceName' => 'Workflow',
            'method' => $this->serviceMethodName,
            'methodName' => $this->serviceMethodName,
            'data' => $jobData,
            'executeTime' => $executionTime,
            'targetId' => $workflowId,
            'targetType' => 'Workflow',
            'queue' => 'q1'
        ]);

        if ($this->getEntityManager()->saveEntity($job)) {
            return true;
        }

        return false;
    }

    protected function isJobExisting($time, $workflowId)
    {
        $dateObj = new \DateTime($time);
        $timeWithoutSeconds = $dateObj->format('Y-m-d H:i:');

        $pdo = $this->getEntityManager()->getPDO();

        $query = "SELECT * FROM job WHERE
                    service_name = 'Workflow'
                    AND method_name = '".$this->serviceMethodName."'
                    AND execute_time LIKE '".$timeWithoutSeconds."%'
                    AND target_id = ".$pdo->quote($workflowId)."
                    AND target_type = 'Workflow'
                    AND deleted = 0
                    LIMIT 1";

        $sth = $pdo->prepare($query);
        $sth->execute();

        $scheduledJob = $sth->fetchAll(\PDO::FETCH_ASSOC);

        return empty($scheduledJob) ? false : true;
    }
}
