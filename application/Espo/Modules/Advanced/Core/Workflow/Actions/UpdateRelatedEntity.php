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

namespace Espo\Modules\Advanced\Core\Workflow\Actions;

use Espo\ORM\Entity;
use Espo\ORM\EntityCollection;

class UpdateRelatedEntity extends BaseEntity
{
    protected function run(Entity $entity, $actionData)
    {
        $link = $actionData->link;
        $relationDefs = $entity->getRelations();

        $relatedEntities = $this->getRelatedEntities($entity, $link);

        foreach ($relatedEntities as $relatedEntity) {
            if (!($relatedEntity instanceof \Espo\ORM\Entity)) {
                continue;
            }

            $update = true;

            if (isset($relationDefs[$link]) && $relationDefs[$link]['type'] == 'belongsToParent' && !empty($actionData->parentEntityType)) {
                if ($actionData->parentEntityType != $relatedEntity->getEntityType()) {
                    $update = false;
                }
            }

            if ($update) {
                $data = $this->getDataToFill($relatedEntity, $actionData->fields);
                $relatedEntity->set($data);

                if (!empty($actionData->formula)) {
                    $this->getFormulaManager()->run($actionData->formula, $relatedEntity, $this->getFormulaVariables());
                }

                if (!$relatedEntity->has('modifiedById')) {
                    $relatedEntity->set('modifiedById', 'system');
                    $relatedEntity->set('modifiedByName', 'System');
                }
                $this->getEntityManager()->saveEntity($relatedEntity, array('skipModifiedBy' => true));
            }
        }

        return true;
    }

    /**
     * Get Related Entity
     *
     * @param  \Espo\ORM\Entity $entity
     * @param  string $link
     *
     * @return \Espo\ORM\EntityCollection
     */
    protected function getRelatedEntities(Entity $entity, $link)
    {
        if (empty($link) || !$entity->hasRelation($link)) {
            return;
        }

        $relationDefs = $entity->getRelations();
        $linkDefs = $relationDefs[$link];

        $relatedEntities = null;

        switch ($linkDefs['type']) {
            case 'belongsToParent':
                $parentType = $entity->get($link . 'Type');
                $parentId = $entity->get($link . 'Id');
                if (!empty($parentType) && !empty($parentId)) {
                    try {
                        $relatedEntity = $this->getEntityManager()->getEntity($parentType, $parentId);
                    } catch (\Exception $e) {
                        $GLOBALS['log']->info('Workflow[UpdateRelatedEntity]: Cannot getRelatedEntities(), error: '. $e->getMessage());
                    }

                    $relatedEntities = $this->getEntityManager()->createCollection($entity->getEntityType(), array($relatedEntity));
                }
                break;

            case 'hasMany':
            case 'hasChildren':
                $relatedEntities = $this->getEntityManager()->getRepository($entity->getEntityType())->findRelated($entity, $link);
                break;

            default:
                try {
                    $relatedEntities = $entity->get($link);
                } catch (\Exception $e) {
                    $GLOBALS['log']->info('Workflow[UpdateRelatedEntity]: Cannot getRelatedEntities(), error: '. $e->getMessage());
                }
                break;
        }

        if (!($relatedEntities instanceof EntityCollection)) {
            $relatedEntities = $this->getEntityManager()->createCollection($entity->getEntityType(), array($relatedEntities));
        }

        return $relatedEntities;
    }
}