<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'number' => 
      array (
        'type' => 'int',
        'autoincrement' => true,
        'unique' => true,
        'index' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'action' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'ipAddress' => 
      array (
        'type' => 'varchar',
        'len' => '39',
        'fieldType' => 'varchar',
      ),
      'targetId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'target',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'targetType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'target',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'targetName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'target',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
      'userId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'userName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'user',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'authTokenId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'authTokenName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'authToken',
        'foreign' => 'id',
      ),
      'authLogRecordId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'authLogRecordName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'authLogRecord',
        'foreign' => 'id',
      ),
    ),
    'relations' => 
    array (
      'authLogRecord' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'AuthLogRecord',
        'key' => 'authLogRecordId',
        'foreignKey' => 'id',
        'foreign' => 'actionHistoryRecords',
      ),
      'authToken' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'AuthToken',
        'key' => 'authTokenId',
        'foreignKey' => 'id',
        'foreign' => 'actionHistoryRecords',
      ),
      'target' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'targetId',
      ),
      'user' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'number',
      'order' => 'DESC',
    ),
  ),
  'ArrayValue' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'value' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'attribute' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'entityId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'entity',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'entityType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'entity',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'entityName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'entity',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
    ),
    'relations' => 
    array (
    ),
    'indexes' => 
    array (
      'entityTypeValue' => 
      array (
        'columns' => 
        array (
          0 => 'entityType',
          1 => 'value',
        ),
        'key' => 'IDX_ENTITY_TYPE_VALUE',
      ),
      'entityValue' => 
      array (
        'columns' => 
        array (
          0 => 'entityType',
          1 => 'entityId',
          2 => 'value',
        ),
        'key' => 'IDX_ENTITY_VALUE',
      ),
    ),
  ),
  'Attachment' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'size' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'sourceId' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'index' => true,
        'fieldType' => 'varchar',
      ),
      'field' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'contents' => 
      array (
        'type' => 'text',
        'notStorable' => true,
        'fieldType' => 'text',
      ),
      'role' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'fieldType' => 'varchar',
      ),
      'storage' => 
      array (
        'type' => 'varchar',
        'len' => 24,
        'fieldType' => 'varchar',
      ),
      'storageFilePath' => 
      array (
        'type' => 'varchar',
        'len' => 260,
        'fieldType' => 'varchar',
      ),
      'global' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'parentId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'parent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'parent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
      'relatedId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'related',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'relatedType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'related',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'relatedName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'related',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'related' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'relatedId',
      ),
      'parent' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'parentId',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'parent' => 
      array (
        'columns' => 
        array (
          0 => 'parentType',
          1 => 'parentId',
        ),
        'key' => 'IDX_PARENT',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'AuthLogRecord' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'username' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'ipAddress' => 
      array (
        'type' => 'varchar',
        'len' => '45',
        'fieldType' => 'varchar',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'isDenied' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'denialReason' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'requestTime' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'requestUrl' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'requestMethod' => 
      array (
        'type' => 'varchar',
        'len' => '15',
        'fieldType' => 'varchar',
      ),
      'authTokenIsActive' => 
      array (
        'type' => 'foreign',
        'relation' => 'authToken',
        'foreign' => 'isActive',
        'fieldType' => 'foreign',
      ),
      'authenticationMethod' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'portalId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'portalName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'portal',
        'foreign' => 'name',
      ),
      'userId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'userName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'user',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'authTokenId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'authTokenName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'authToken',
        'foreign' => 'id',
      ),
      'actionHistoryRecordsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'actionHistoryRecordsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'actionHistoryRecords' => 
      array (
        'type' => 'hasMany',
        'entity' => 'ActionHistoryRecord',
        'foreignKey' => 'authLogRecordId',
        'foreign' => 'authLogRecord',
      ),
      'authToken' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'AuthToken',
        'key' => 'authTokenId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'portal' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Portal',
        'key' => 'portalId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'user' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true,
      ),
    ),
    'indexes' => 
    array (
      'ipAddress' => 
      array (
        'columns' => 
        array (
          0 => 'ipAddress',
        ),
        'key' => 'IDX_IP_ADDRESS',
      ),
      'ipAddressRequestTime' => 
      array (
        'columns' => 
        array (
          0 => 'ipAddress',
          1 => 'requestTime',
        ),
        'key' => 'IDX_IP_ADDRESS_REQUEST_TIME',
      ),
      'requestTime' => 
      array (
        'columns' => 
        array (
          0 => 'requestTime',
        ),
        'key' => 'IDX_REQUEST_TIME',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'requestTime',
      'order' => 'DESC',
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'token' => 
      array (
        'type' => 'varchar',
        'len' => '36',
        'index' => true,
        'fieldType' => 'varchar',
      ),
      'hash' => 
      array (
        'type' => 'varchar',
        'len' => 150,
        'index' => true,
        'fieldType' => 'varchar',
      ),
      'secret' => 
      array (
        'type' => 'varchar',
        'len' => '36',
        'fieldType' => 'varchar',
      ),
      'userId' => 
      array (
        'dbType' => 'varchar',
        'len' => '36',
        'type' => 'foreignId',
        'fieldType' => 'link',
        'index' => true,
        'attributeRole' => 'id',
        'notNull' => false,
      ),
      'ipAddress' => 
      array (
        'type' => 'varchar',
        'len' => '45',
        'fieldType' => 'varchar',
      ),
      'isActive' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'lastAccess' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'userName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'user',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'portalId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'portalName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'portal',
        'foreign' => 'name',
      ),
      'actionHistoryRecordsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'actionHistoryRecordsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'actionHistoryRecords' => 
      array (
        'type' => 'hasMany',
        'entity' => 'ActionHistoryRecord',
        'foreignKey' => 'authTokenId',
        'foreign' => 'authToken',
      ),
      'portal' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Portal',
        'key' => 'portalId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'user' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'token' => 
      array (
        'columns' => 
        array (
          0 => 'token',
          1 => 'deleted',
        ),
        'key' => 'IDX_TOKEN',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'lastAccess',
      'order' => 'DESC',
    ),
  ),
  'Currency' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'rate' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
    ),
    'relations' => 
    array (
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'subject' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'fromName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'fromAddress' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'fromString' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'replyToString' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'replyToName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'replyToAddress' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'addressNameMap' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'from' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'to' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'cc' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'bcc' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'replyTo' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'personStringData' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'isRead' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'isNotRead' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'isReplied' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'isNotReplied' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'isImportant' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'inTrash' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'folderId' => 
      array (
        'dbType' => 'varchar',
        'len' => 255,
        'type' => 'foreignId',
        'notStorable' => true,
        'default' => '',
        'fieldType' => 'link',
        'index' => 'folder',
        'attributeRole' => 'id',
        'notNull' => false,
      ),
      'isUsers' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'nameHash' => 
      array (
        'type' => 'text',
        'notStorable' => true,
        'fieldType' => 'text',
      ),
      'typeHash' => 
      array (
        'type' => 'text',
        'notStorable' => true,
        'fieldType' => 'text',
      ),
      'idHash' => 
      array (
        'type' => 'text',
        'notStorable' => true,
        'fieldType' => 'text',
      ),
      'messageId' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'index' => true,
        'fieldType' => 'varchar',
      ),
      'messageIdInternal' => 
      array (
        'type' => 'varchar',
        'len' => 300,
        'fieldType' => 'varchar',
      ),
      'emailAddress' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'base',
      ),
      'bodyPlain' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'body' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'isHtml' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Archived',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'hasAttachment' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'dateSent' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'deliveryDate' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'isSystem' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'isJustSent' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'isBeingImported' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'folderName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
      ),
      'fromEmailAddressId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'fromEmailAddressName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'fromEmailAddress',
        'foreign' => 'name',
      ),
      'toEmailAddressesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'toEmailAddresses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'toEmailAddressesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'ccEmailAddressesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'ccEmailAddresses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'ccEmailAddressesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'replyToEmailAddressesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'replyToEmailAddresses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'replyToEmailAddressesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'attachmentsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'orderBy' => 
        array (
          0 => 
          array (
            0 => 'createdAt',
            1 => 'ASC',
          ),
          1 => 
          array (
            0 => 'name',
            1 => 'ASC',
          ),
        ),
        'isLinkMultipleIdList' => true,
        'relation' => 'attachments',
        'isLinkStub' => false,
      ),
      'attachmentsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'isLinkStub' => false,
      ),
      'parentId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'parent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'parent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'sentById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'sentByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'sentBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'repliedId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'repliedName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'replied',
        'foreign' => 'name',
      ),
      'repliesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'replies',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'dateSent',
        'isLinkStub' => false,
      ),
      'repliesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'usersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'users',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'usersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'usersColumns' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => 
        array (
          'inTrash' => 'inTrash',
          'folderId' => 'folderId',
        ),
        'attributeRole' => 'columnsMap',
      ),
      'assignedUsersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'assignedUsers',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'assignedUsersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'inboundEmailsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'inboundEmails',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'inboundEmailsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'emailAccountsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'emailAccounts',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'emailAccountsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'accountId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'aCCsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'aCCs',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'aCCsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'bccEmailAddressesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'bccEmailAddressesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'attachmentsTypes' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'aCCs' => 
      array (
        'type' => 'manyMany',
        'entity' => 'ACC',
        'relationName' => 'aCCEmail',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'emailId',
          1 => 'aCCId',
        ),
        'foreign' => 'emails',
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'emailAccounts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAccount',
        'relationName' => 'emailEmailAccount',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'emailId',
          1 => 'emailAccountId',
        ),
        'foreign' => 'emails',
      ),
      'inboundEmails' => 
      array (
        'type' => 'manyMany',
        'entity' => 'InboundEmail',
        'relationName' => 'emailInboundEmail',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'emailId',
          1 => 'inboundEmailId',
        ),
        'foreign' => 'emails',
      ),
      'replyToEmailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'midKeys' => 
        array (
          0 => 'emailId',
          1 => 'emailAddressId',
        ),
        'relationName' => 'emailEmailAddress',
        'conditions' => 
        array (
          'addressType' => 'rto',
        ),
        'additionalColumns' => 
        array (
          'addressType' => 
          array (
            'type' => 'varchar',
            'len' => '4',
          ),
        ),
      ),
      'bccEmailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'midKeys' => 
        array (
          0 => 'emailId',
          1 => 'emailAddressId',
        ),
        'relationName' => 'emailEmailAddress',
        'conditions' => 
        array (
          'addressType' => 'bcc',
        ),
        'additionalColumns' => 
        array (
          'addressType' => 
          array (
            'type' => 'varchar',
            'len' => '4',
          ),
        ),
      ),
      'ccEmailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'midKeys' => 
        array (
          0 => 'emailId',
          1 => 'emailAddressId',
        ),
        'relationName' => 'emailEmailAddress',
        'conditions' => 
        array (
          'addressType' => 'cc',
        ),
        'additionalColumns' => 
        array (
          'addressType' => 
          array (
            'type' => 'varchar',
            'len' => '4',
          ),
        ),
      ),
      'toEmailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'midKeys' => 
        array (
          0 => 'emailId',
          1 => 'emailAddressId',
        ),
        'relationName' => 'emailEmailAddress',
        'conditions' => 
        array (
          'addressType' => 'to',
        ),
        'additionalColumns' => 
        array (
          'addressType' => 
          array (
            'type' => 'varchar',
            'len' => '4',
          ),
        ),
      ),
      'fromEmailAddress' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'EmailAddress',
        'key' => 'fromEmailAddressId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'replies' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Email',
        'foreignKey' => 'repliedId',
        'foreign' => 'replied',
      ),
      'replied' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Email',
        'key' => 'repliedId',
        'foreignKey' => 'id',
        'foreign' => 'replies',
      ),
      'parent' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'parentId',
      ),
      'sentBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'sentById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'users' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'emailUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'emailId',
          1 => 'userId',
        ),
        'foreign' => 'emails',
        'additionalColumns' => 
        array (
          'isRead' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
          'isImportant' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
          'inTrash' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
          'folderId' => 
          array (
            'type' => 'varchar',
            'default' => NULL,
            'maxLength' => 24,
          ),
        ),
      ),
      'assignedUsers' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'entityUser',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'userId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Email',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Email',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'attachments' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
        'conditions' => 
        array (
          'OR' => 
          array (
            0 => 
            array (
              'field' => NULL,
            ),
            1 => 
            array (
              'field' => 'attachments',
            ),
          ),
        ),
        'relationName' => 'attachments',
      ),
    ),
    'indexes' => 
    array (
      'createdById' => 
      array (
        'columns' => 
        array (
          0 => 'createdById',
        ),
        'key' => 'IDX_CREATED_BY_ID',
      ),
      'dateSent' => 
      array (
        'columns' => 
        array (
          0 => 'dateSent',
          1 => 'deleted',
        ),
        'key' => 'IDX_DATE_SENT',
      ),
      'dateSentStatus' => 
      array (
        'columns' => 
        array (
          0 => 'dateSent',
          1 => 'status',
          2 => 'deleted',
        ),
        'key' => 'IDX_DATE_SENT_STATUS',
      ),
      'system_fullTextSearch' => 
      array (
        'columns' => 
        array (
          0 => 'name',
          1 => 'bodyPlain',
          2 => 'body',
        ),
        'flags' => 
        array (
          0 => 'fulltext',
        ),
        'key' => 'IDX_SYSTEM_FULL_TEXT_SEARCH',
      ),
    ),
    'fullTextSearchColumnList' => 
    array (
      0 => 'name',
      1 => 'bodyPlain',
      2 => 'body',
    ),
    'collection' => 
    array (
      'orderBy' => 'dateSent',
      'order' => 'DESC',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'emailAddress' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Active',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'host' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'port' => 
      array (
        'type' => 'varchar',
        'default' => '143',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ssl' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'username' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'password' => 
      array (
        'type' => 'password',
        'fieldType' => 'password',
      ),
      'monitoredFolders' => 
      array (
        'type' => 'varchar',
        'default' => 'INBOX',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'sentFolder' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'storeSentEmails' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'keepFetchedEmailsUnread' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'fetchSince' => 
      array (
        'type' => 'date',
        'fieldType' => 'date',
      ),
      'fetchData' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'useImap' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'useSmtp' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'smtpHost' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'smtpPort' => 
      array (
        'type' => 'int',
        'default' => '25',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'smtpAuth' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'smtpSecurity' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'smtpUsername' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'smtpPassword' => 
      array (
        'type' => 'password',
        'fieldType' => 'password',
      ),
      'emailFolderId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'emailFolderName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'emailFolder',
        'foreign' => 'name',
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'emailsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'emailsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'filtersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'filtersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'emailFolder' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'EmailFolder',
        'key' => 'emailFolderId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'emails' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Email',
        'relationName' => 'emailEmailAccount',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'emailAccountId',
          1 => 'emailId',
        ),
        'foreign' => 'emailAccounts',
      ),
      'filters' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'EmailFilter',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'name',
      'order' => 'ASC',
    ),
  ),
  'EmailAddress' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'lower' => 
      array (
        'type' => 'varchar',
        'index' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'invalid' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'optOut' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
    ),
    'relations' => 
    array (
    ),
    'collection' => 
    array (
      'orderBy' => 'name',
      'order' => 'ASC',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'from' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'to' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'subject' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'bodyContains' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'isGlobal' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'action' => 
      array (
        'type' => 'varchar',
        'default' => 'Skip',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'parentId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'parent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'parent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
      'emailFolderId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'emailFolderName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'emailFolder',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'emailFolder' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'EmailFolder',
        'key' => 'emailFolderId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'parent' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'parentId',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 64,
        'fieldType' => 'varchar',
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'order' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'skipNotifications' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'order',
      'order' => 'ASC',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'subject' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'body' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'isHtml' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'oneOff' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'attachmentsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'orderBy' => 
        array (
          0 => 
          array (
            0 => 'createdAt',
            1 => 'ASC',
          ),
          1 => 
          array (
            0 => 'name',
            1 => 'ASC',
          ),
        ),
        'isLinkMultipleIdList' => true,
        'relation' => 'attachments',
        'isLinkStub' => false,
      ),
      'attachmentsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'isLinkStub' => false,
      ),
      'categoryId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'categoryName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'category',
        'foreign' => 'name',
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'attachmentsTypes' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'EmailTemplate',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'category' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'EmailTemplateCategory',
        'key' => 'categoryId',
        'foreignKey' => 'id',
        'foreign' => 'emailTemplates',
      ),
      'attachments' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
        'conditions' => 
        array (
          'OR' => 
          array (
            0 => 
            array (
              'field' => NULL,
            ),
            1 => 
            array (
              'field' => 'attachments',
            ),
          ),
        ),
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'EmailTemplateCategory' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'order' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'childList' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'parentId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'parentName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'parent',
        'foreign' => 'name',
      ),
      'emailTemplatesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'emailTemplatesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'childrenIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'childrenNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'emailTemplates' => 
      array (
        'type' => 'hasMany',
        'entity' => 'EmailTemplate',
        'foreignKey' => 'categoryId',
        'foreign' => 'category',
      ),
      'children' => 
      array (
        'type' => 'hasMany',
        'entity' => 'EmailTemplateCategory',
        'foreignKey' => 'parentId',
        'foreign' => 'parent',
      ),
      'parent' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'EmailTemplateCategory',
        'key' => 'parentId',
        'foreignKey' => 'id',
        'foreign' => 'children',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'EmailTemplateCategory',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'additionalTables' => 
    array (
      'EmailTemplateCategoryPath' => 
      array (
        'fields' => 
        array (
          'id' => 
          array (
            'type' => 'id',
            'dbType' => 'int',
            'len' => '11',
            'autoincrement' => true,
          ),
          'ascendorId' => 
          array (
            'type' => 'varchar',
            'len' => '100',
            'index' => true,
          ),
          'descendorId' => 
          array (
            'type' => 'varchar',
            'len' => '24',
            'index' => true,
          ),
        ),
      ),
    ),
    'collection' => 
    array (
      'order' => 'ASC',
    ),
  ),
  'Extension' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'version' => 
      array (
        'type' => 'varchar',
        'len' => 50,
        'fieldType' => 'varchar',
      ),
      'fileList' => 
      array (
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray',
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'isInstalled' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'checkVersionUrl' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'ExternalAccount' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 64,
        'type' => 'id',
        'fieldType' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'enabled' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
    ),
    'relations' => 
    array (
    ),
  ),
  'Import' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'entityType' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'importedCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'duplicateCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'updatedCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'fileId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => false,
        'notNull' => false,
      ),
      'fileName' => 
      array (
        'type' => 'foreign',
        'relation' => 'file',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'file' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'fileId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'emailAddress' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Active',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'host' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'port' => 
      array (
        'type' => 'varchar',
        'default' => '143',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ssl' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'username' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'password' => 
      array (
        'type' => 'password',
        'fieldType' => 'password',
      ),
      'monitoredFolders' => 
      array (
        'type' => 'varchar',
        'default' => 'INBOX',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'fetchSince' => 
      array (
        'type' => 'date',
        'fieldType' => 'date',
      ),
      'fetchData' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'addAllTeamUsers' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'sentFolder' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'storeSentEmails' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'keepFetchedEmailsUnread' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'useImap' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'useSmtp' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'smtpIsShared' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'smtpIsForMassEmail' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'smtpHost' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'smtpPort' => 
      array (
        'type' => 'int',
        'default' => '25',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'smtpAuth' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'smtpSecurity' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'smtpUsername' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'smtpPassword' => 
      array (
        'type' => 'password',
        'fieldType' => 'password',
      ),
      'createCase' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'caseDistribution' => 
      array (
        'type' => 'varchar',
        'default' => 'Direct-Assignment',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'targetUserPosition' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'reply' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'replyFromAddress' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'replyToAddress' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'replyFromName' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'fromName' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'assignToUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignToUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignToUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'teamName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'team',
        'foreign' => 'name',
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'replyEmailTemplateId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'replyEmailTemplateName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'replyEmailTemplate',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'emailsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'emailsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'filtersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'filtersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'emails' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Email',
        'relationName' => 'emailInboundEmail',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'inboundEmailId',
          1 => 'emailId',
        ),
        'foreign' => 'inboundEmails',
      ),
      'filters' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'EmailFilter',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'replyEmailTemplate' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'EmailTemplate',
        'key' => 'replyEmailTemplateId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'team' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Team',
        'key' => 'teamId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'assignToUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignToUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'inboundEmailTeam',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'inboundEmailId',
          1 => 'teamId',
        ),
        'foreign' => 'inboundEmails',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'name',
      'order' => 'ASC',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'enabled' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
    ),
    'relations' => 
    array (
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Pending',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'executeTime' => 
      array (
        'type' => 'datetime',
        'fieldType' => 'datetime',
      ),
      'number' => 
      array (
        'type' => 'int',
        'dbType' => 'bigint',
        'autoincrement' => true,
        'unique' => true,
        'index' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'serviceName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'methodName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'job' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'scheduledJobJob' => 
      array (
        'type' => 'foreign',
        'relation' => 'scheduledJob',
        'foreign' => 'job',
        'fieldType' => 'foreign',
      ),
      'queue' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'fieldType' => 'varchar',
      ),
      'startedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'executedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'pid' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'attempts' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'targetId' => 
      array (
        'type' => 'varchar',
        'len' => 48,
        'fieldType' => 'varchar',
      ),
      'targetType' => 
      array (
        'type' => 'varchar',
        'len' => 64,
        'fieldType' => 'varchar',
      ),
      'failedAttempts' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'scheduledJobId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'scheduledJobName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'scheduledJob',
        'foreign' => 'name',
      ),
    ),
    'relations' => 
    array (
      'scheduledJob' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'ScheduledJob',
        'key' => 'scheduledJobId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'executeTime' => 
      array (
        'columns' => 
        array (
          0 => 'status',
          1 => 'executeTime',
        ),
        'key' => 'IDX_EXECUTE_TIME',
      ),
      'status' => 
      array (
        'columns' => 
        array (
          0 => 'status',
          1 => 'deleted',
        ),
        'key' => 'IDX_STATUS',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'number',
      'order' => 'DESC',
    ),
  ),
  'LeadCapture' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'isActive' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'subscribeToTargetList' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'subscribeContactToTargetList' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'fieldList' => 
      array (
        'type' => 'jsonArray',
        'default' => '["firstName","lastName","emailAddress"]',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'duplicateCheck' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'optInConfirmation' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'optInConfirmationLifetime' => 
      array (
        'type' => 'int',
        'default' => '48',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'optInConfirmationSuccessMessage' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createLeadBeforeOptInConfirmation' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'skipOptInConfirmationIfSubscribed' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'leadSource' => 
      array (
        'type' => 'varchar',
        'default' => 'Web Site',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'apiKey' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'fieldType' => 'varchar',
      ),
      'exampleRequestUrl' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'exampleRequestMethod' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'exampleRequestPayload' => 
      array (
        'type' => 'text',
        'notStorable' => true,
        'fieldType' => 'text',
      ),
      'smtpAccount' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'base',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'campaignId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'campaignName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'campaign',
        'foreign' => 'name',
      ),
      'targetListId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'targetListName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'targetList',
        'foreign' => 'name',
      ),
      'optInConfirmationEmailTemplateId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'optInConfirmationEmailTemplateName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'optInConfirmationEmailTemplate',
        'foreign' => 'name',
      ),
      'targetTeamId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'targetTeamName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'targetTeam',
        'foreign' => 'name',
      ),
      'inboundEmailId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'inboundEmailName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'inboundEmail',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'logRecordsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'logRecordsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'logRecords' => 
      array (
        'type' => 'hasMany',
        'entity' => 'LeadCaptureLogRecord',
        'foreignKey' => 'leadCaptureId',
        'foreign' => 'leadCapture',
      ),
      'optInConfirmationEmailTemplate' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'EmailTemplate',
        'key' => 'optInConfirmationEmailTemplateId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'inboundEmail' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'InboundEmail',
        'key' => 'inboundEmailId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'targetTeam' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Team',
        'key' => 'targetTeamId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'campaign' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'targetList' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'TargetList',
        'key' => 'targetListId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'name',
      'order' => 'ASC',
    ),
  ),
  'LeadCaptureLogRecord' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'number' => 
      array (
        'type' => 'int',
        'autoincrement' => true,
        'unique' => true,
        'index' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'isCreated' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'leadCaptureId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'leadCaptureName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'leadCapture',
        'foreign' => 'name',
      ),
      'targetId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'target',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'targetType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'target',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'targetName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'target',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
    ),
    'relations' => 
    array (
      'target' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'targetId',
      ),
      'leadCapture' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'LeadCapture',
        'key' => 'leadCaptureId',
        'foreignKey' => 'id',
        'foreign' => 'logRecords',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'number',
      'order' => 'DESC',
    ),
  ),
  'NextNumber' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'entityType' => 
      array (
        'type' => 'varchar',
        'index' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'fieldName' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'value' => 
      array (
        'type' => 'int',
        'default' => '1',
        'fieldType' => 'int',
        'len' => 11,
      ),
    ),
    'relations' => 
    array (
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'post' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'targetType' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'number' => 
      array (
        'type' => 'int',
        'autoincrement' => true,
        'unique' => true,
        'index' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'isGlobal' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'createdByGender' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdBy',
        'foreign' => 'gender',
        'fieldType' => 'foreign',
      ),
      'notifiedUserIdList' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray',
      ),
      'isInternal' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'parentId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'parent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'parent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
      'relatedId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'related',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'relatedType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'related',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'relatedName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'related',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
      'attachmentsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'orderBy' => 
        array (
          0 => 
          array (
            0 => 'createdAt',
            1 => 'ASC',
          ),
          1 => 
          array (
            0 => 'name',
            1 => 'ASC',
          ),
        ),
        'isLinkMultipleIdList' => true,
        'relation' => 'attachments',
        'isLinkStub' => false,
      ),
      'attachmentsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'isLinkStub' => false,
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'portalsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'portals',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'portalsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'usersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'users',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'usersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'superParentId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'superParent',
        'notNull' => false,
      ),
      'superParentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'superParent',
        'len' => 100,
        'dbType' => 'varchar',
      ),
      'superParentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'attachmentsTypes' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'users' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'noteUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'noteId',
          1 => 'userId',
        ),
        'foreign' => 'notes',
      ),
      'portals' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Portal',
        'relationName' => 'notePortal',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'noteId',
          1 => 'portalId',
        ),
        'foreign' => 'notes',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'noteTeam',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'noteId',
          1 => 'teamId',
        ),
        'foreign' => 'notes',
      ),
      'related' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'relatedId',
      ),
      'superParent' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'superParentId',
      ),
      'parent' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'parentId',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'attachments' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
        'conditions' => 
        array (
          'OR' => 
          array (
            0 => 
            array (
              'field' => NULL,
            ),
            1 => 
            array (
              'field' => 'attachments',
            ),
          ),
        ),
        'relationName' => 'attachments',
      ),
    ),
    'indexes' => 
    array (
      'createdAt' => 
      array (
        'type' => 'index',
        'columns' => 
        array (
          0 => 'createdAt',
        ),
        'key' => 'IDX_CREATED_AT',
      ),
      'parent' => 
      array (
        'type' => 'index',
        'columns' => 
        array (
          0 => 'parentId',
          1 => 'parentType',
        ),
        'key' => 'IDX_PARENT',
      ),
      'parentAndSuperParent' => 
      array (
        'type' => 'index',
        'columns' => 
        array (
          0 => 'parentId',
          1 => 'parentType',
          2 => 'superParentId',
          3 => 'superParentType',
        ),
        'key' => 'IDX_PARENT_AND_SUPER_PARENT',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'number',
      'order' => 'DESC',
    ),
  ),
  'Notification' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'number' => 
      array (
        'type' => 'int',
        'autoincrement' => true,
        'unique' => true,
        'index' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'noteData' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'fieldType' => 'jsonObject',
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'read' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'emailIsProcessed' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'message' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'userId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'userName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'user',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'relatedId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'related',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'relatedType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'related',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'relatedName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'related',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
      'relatedParentId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'relatedParent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'relatedParentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'relatedParent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'relatedParentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'relatedParent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
    ),
    'relations' => 
    array (
      'relatedParent' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'relatedParentId',
      ),
      'related' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'relatedId',
      ),
      'user' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'createdAt' => 
      array (
        'type' => 'index',
        'columns' => 
        array (
          0 => 'createdAt',
        ),
        'key' => 'IDX_CREATED_AT',
      ),
      'user' => 
      array (
        'type' => 'index',
        'columns' => 
        array (
          0 => 'userId',
          1 => 'createdAt',
        ),
        'key' => 'IDX_USER',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'number',
      'order' => 'DESC',
    ),
  ),
  'PasswordChangeRequest' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'requestId' => 
      array (
        'type' => 'varchar',
        'len' => 24,
        'index' => true,
        'fieldType' => 'varchar',
      ),
      'url' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'userId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'userName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'user',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'user' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
  ),
  'PhoneNumber' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'index' => true,
        'fieldType' => 'varchar',
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'numeric' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'index' => true,
        'fieldType' => 'varchar',
      ),
      'invalid' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'optOut' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
    ),
    'relations' => 
    array (
    ),
    'collection' => 
    array (
      'orderBy' => 'name',
      'order' => 'ASC',
    ),
  ),
  'Portal' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'url' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'customId' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'index' => true,
        'fieldType' => 'varchar',
      ),
      'isActive' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'isDefault' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'tabList' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'quickCreateList' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'theme' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'language' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'timeZone' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'dateFormat' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'timeFormat' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'weekStart' => 
      array (
        'type' => 'int',
        'default' => '-1',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'defaultCurrency' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'dashboardLayout' => 
      array (
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray',
      ),
      'dashletsOptions' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'customUrl' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'logoId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => false,
        'notNull' => false,
      ),
      'logoName' => 
      array (
        'type' => 'foreign',
        'relation' => 'logo',
        'foreign' => 'name',
      ),
      'portalRolesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'portalRoles',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'portalRolesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'companyLogoId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => false,
        'notNull' => false,
      ),
      'companyLogoName' => 
      array (
        'type' => 'foreign',
        'relation' => 'companyLogo',
        'foreign' => 'name',
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'reportsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'reportsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'articlesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'articlesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'notesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'notesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'usersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'usersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'logo' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'logoId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'companyLogo' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'companyLogoId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'reports' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Report',
        'relationName' => 'portalReport',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'portalId',
          1 => 'reportId',
        ),
        'foreign' => 'portals',
      ),
      'articles' => 
      array (
        'type' => 'manyMany',
        'entity' => 'KnowledgeBaseArticle',
        'relationName' => 'knowledgeBaseArticlePortal',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'portalId',
          1 => 'knowledgeBaseArticleId',
        ),
        'foreign' => 'portals',
      ),
      'notes' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Note',
        'relationName' => 'notePortal',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'portalId',
          1 => 'noteId',
        ),
        'foreign' => 'portals',
      ),
      'portalRoles' => 
      array (
        'type' => 'manyMany',
        'entity' => 'PortalRole',
        'relationName' => 'portalPortalRole',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'portalId',
          1 => 'portalRoleId',
        ),
        'foreign' => 'portals',
      ),
      'users' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'portalUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'portalId',
          1 => 'userId',
        ),
        'foreign' => 'portals',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'name',
      'order' => 'ASC',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 150,
        'fieldType' => 'varchar',
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'fieldData' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'exportPermission' => 
      array (
        'type' => 'varchar',
        'default' => 'not-set',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'massUpdatePermission' => 
      array (
        'type' => 'varchar',
        'default' => 'not-set',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'portalsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'portalsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'usersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'usersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'portals' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Portal',
        'relationName' => 'portalPortalRole',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'portalRoleId',
          1 => 'portalId',
        ),
        'foreign' => 'portalRoles',
      ),
      'users' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'portalRoleUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'portalRoleId',
          1 => 'userId',
        ),
        'foreign' => 'portalRoles',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'name',
      'order' => 'ASC',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'timeZone' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'dateFormat' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'timeFormat' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'weekStart' => 
      array (
        'type' => 'int',
        'default' => '-1',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'defaultCurrency' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'thousandSeparator' => 
      array (
        'type' => 'varchar',
        'len' => 1,
        'default' => ',',
        'fieldType' => 'varchar',
      ),
      'decimalMark' => 
      array (
        'type' => 'varchar',
        'len' => 1,
        'default' => '.',
        'fieldType' => 'varchar',
      ),
      'dashboardLayout' => 
      array (
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray',
      ),
      'dashletsOptions' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'sharedCalendarUserList' => 
      array (
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray',
      ),
      'calendarViewDataList' => 
      array (
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray',
      ),
      'presetFilters' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'smtpEmailAddress' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'smtpServer' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'smtpPort' => 
      array (
        'type' => 'int',
        'default' => '25',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'smtpAuth' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'smtpSecurity' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'smtpUsername' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'smtpPassword' => 
      array (
        'type' => 'password',
        'fieldType' => 'password',
      ),
      'language' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'exportDelimiter' => 
      array (
        'type' => 'varchar',
        'len' => 1,
        'default' => ',',
        'fieldType' => 'varchar',
      ),
      'receiveAssignmentEmailNotifications' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'receiveMentionEmailNotifications' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'receiveStreamEmailNotifications' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'autoFollowEntityTypeList' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'signature' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'defaultReminders' => 
      array (
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray',
      ),
      'theme' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'useCustomTabList' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'tabList' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'emailReplyToAllByDefault' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'emailReplyForceHtml' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'isPortalUser' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'doNotFillAssignedUserIfNotRequired' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'followEntityOnStreamPost' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'followCreatedEntities' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'followCreatedEntityTypeList' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'emailUseExternalClient' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'scopeColorsDisabled' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'tabColorsDisabled' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
    ),
    'relations' => 
    array (
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 150,
        'fieldType' => 'varchar',
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'assignmentPermission' => 
      array (
        'type' => 'varchar',
        'default' => 'not-set',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'userPermission' => 
      array (
        'type' => 'varchar',
        'default' => 'not-set',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'portalPermission' => 
      array (
        'type' => 'varchar',
        'default' => 'not-set',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'groupEmailAccountPermission' => 
      array (
        'type' => 'varchar',
        'default' => 'not-set',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'exportPermission' => 
      array (
        'type' => 'varchar',
        'default' => 'not-set',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'massUpdatePermission' => 
      array (
        'type' => 'varchar',
        'default' => 'not-set',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'dataPrivacyPermission' => 
      array (
        'type' => 'varchar',
        'default' => 'not-set',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'fieldData' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'usersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'usersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'roleTeam',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'roleId',
          1 => 'teamId',
        ),
        'foreign' => 'roles',
      ),
      'users' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'roleUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'roleId',
          1 => 'userId',
        ),
        'foreign' => 'roles',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'name',
      'order' => 'ASC',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'job' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'scheduling' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'lastRun' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'isInternal' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'logIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'logNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'log' => 
      array (
        'type' => 'hasMany',
        'entity' => 'ScheduledJobLogRecord',
        'foreignKey' => 'scheduledJobId',
        'foreign' => 'scheduledJob',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'name',
      'order' => 'ASC',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'executionTime' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'scheduledJobId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'scheduledJobName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'scheduledJob',
        'foreign' => 'name',
      ),
      'targetId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'target',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'targetType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'target',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'targetName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'target',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
    ),
    'relations' => 
    array (
      'scheduledJob' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'ScheduledJob',
        'key' => 'scheduledJobId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'executionTime',
      'order' => 'DESC',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'useCache' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'recordsPerPage' => 
      array (
        'type' => 'int',
        'default' => '20',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'recordsPerPageSmall' => 
      array (
        'type' => 'int',
        'default' => '10',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'timeZone' => 
      array (
        'type' => 'varchar',
        'default' => 'UTC',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'dateFormat' => 
      array (
        'type' => 'varchar',
        'default' => 'MM/DD/YYYY',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'timeFormat' => 
      array (
        'type' => 'varchar',
        'default' => 'HH:mm',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'weekStart' => 
      array (
        'type' => 'int',
        'default' => '0',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'fiscalYearShift' => 
      array (
        'type' => 'int',
        'default' => '0',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'thousandSeparator' => 
      array (
        'type' => 'varchar',
        'len' => 1,
        'default' => ',',
        'fieldType' => 'varchar',
      ),
      'decimalMark' => 
      array (
        'type' => 'varchar',
        'len' => 1,
        'default' => '.',
        'fieldType' => 'varchar',
      ),
      'currencyList' => 
      array (
        'type' => 'jsonArray',
        'default' => '["USD","EUR"]',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'defaultCurrency' => 
      array (
        'type' => 'varchar',
        'default' => 'USD',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'baseCurrency' => 
      array (
        'type' => 'varchar',
        'default' => 'USD',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'currencyRates' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'base',
      ),
      'outboundEmailIsShared' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'outboundEmailFromName' => 
      array (
        'type' => 'varchar',
        'default' => 'EspoCRM',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'outboundEmailFromAddress' => 
      array (
        'type' => 'varchar',
        'default' => 'crm@example.com',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'smtpServer' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'smtpPort' => 
      array (
        'type' => 'int',
        'default' => '25',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'smtpAuth' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'smtpSecurity' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'smtpUsername' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'smtpPassword' => 
      array (
        'type' => 'password',
        'fieldType' => 'password',
      ),
      'tabList' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'quickCreateList' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'language' => 
      array (
        'type' => 'varchar',
        'default' => 'en_US',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'globalSearchEntityList' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'exportDelimiter' => 
      array (
        'type' => 'varchar',
        'len' => 1,
        'default' => ',',
        'fieldType' => 'varchar',
      ),
      'authenticationMethod' => 
      array (
        'type' => 'varchar',
        'default' => 'Espo',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ldapHost' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ldapPort' => 
      array (
        'type' => 'varchar',
        'default' => '389',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ldapSecurity' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ldapAuth' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'ldapUsername' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ldapPassword' => 
      array (
        'type' => 'password',
        'fieldType' => 'password',
      ),
      'ldapBindRequiresDn' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'ldapUserLoginFilter' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ldapBaseDn' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ldapAccountCanonicalForm' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ldapAccountDomainName' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ldapAccountDomainNameShort' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ldapAccountFilterFormat' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ldapTryUsernameSplit' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'ldapOptReferrals' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'ldapPortalUserLdapAuth' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'ldapCreateEspoUser' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'ldapUserNameAttribute' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ldapUserObjectClass' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ldapUserFirstNameAttribute' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ldapUserLastNameAttribute' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ldapUserTitleAttribute' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ldapUserEmailAddressAttribute' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ldapUserPhoneNumberAttribute' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'exportDisabled' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'emailNotificationsDelay' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'assignmentEmailNotifications' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'assignmentEmailNotificationsEntityList' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'assignmentNotificationsEntityList' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'postEmailNotifications' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'updateEmailNotifications' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'mentionEmailNotifications' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'streamEmailNotifications' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'portalStreamEmailNotifications' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'streamEmailNotificationsEntityList' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'streamEmailNotificationsTypeList' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'b2cMode' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'avatarsDisabled' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'followCreatedEntities' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'adminPanelIframeUrl' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'displayListViewRecordCount' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'userThemesDisabled' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'theme' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'emailMessageMaxSize' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'inboundEmailMaxPortionSize' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'personalEmailMaxPortionSize' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'maxEmailAccountCount' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'massEmailMaxPerHourCount' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'authTokenLifetime' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'default' => '0',
        'fieldType' => 'float',
      ),
      'authTokenMaxIdleTime' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'default' => '0',
        'fieldType' => 'float',
      ),
      'authTokenPreventConcurrent' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'dashboardLayout' => 
      array (
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray',
      ),
      'dashletsOptions' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'siteUrl' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'applicationName' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'readableDateFormatDisabled' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'addressFormat' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'currencyFormat' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'currencyDecimalPlaces' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'notificationSoundsDisabled' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'calendarEntityList' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'activitiesEntityList' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'historyEntityList' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'googleMapsApiKey' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'massEmailDisableMandatoryOptOutLink' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'massEmailOpenTracking' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'aclStrictMode' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'aclAllowDeleteCreated' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'lastViewedCount' => 
      array (
        'type' => 'int',
        'default' => '20',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'adminNotifications' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'adminNotificationsNewVersion' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'adminNotificationsNewExtensionVersion' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'textFilterUseContainsForVarchar' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'scopeColorsDisabled' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'tabColorsDisabled' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'tabIconsDisabled' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'emailAddressIsOptedOutByDefault' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'outboundEmailBccAddress' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'cleanupDeletedRecords' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'addressCountryList' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'addressCityList' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'addressStateList' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'jobRunInParallel' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'jobMaxPortion' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'jobPoolConcurrencyNumber' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'daemonInterval' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'daemonMaxProcessNumber' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'daemonProcessTimeout' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'cronDisabled' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'maintenanceMode' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'useWebSocket' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'addressPreviewStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'notStorable' => true,
        'fieldType' => 'text',
      ),
      'addressPreviewCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'notStorable' => true,
        'fieldType' => 'varchar',
      ),
      'addressPreviewState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'notStorable' => true,
        'fieldType' => 'varchar',
      ),
      'addressPreviewCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'notStorable' => true,
        'fieldType' => 'varchar',
      ),
      'addressPreviewPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 40,
        'notStorable' => true,
        'fieldType' => 'varchar',
      ),
      'addressPreviewMap' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map',
      ),
      'companyLogoId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => false,
        'notNull' => false,
      ),
      'companyLogoName' => 
      array (
        'type' => 'foreign',
        'relation' => 'companyLogo',
        'foreign' => 'name',
      ),
      'ldapUserDefaultTeamId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'ldapUserDefaultTeam',
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'ldapUserDefaultTeamName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
      ),
      'ldapUserTeamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'ldapUserTeams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'ldapUserTeamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'ldapPortalUserPortalsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'ldapPortalUserPortals',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'ldapPortalUserPortalsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'ldapPortalUserRolesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'ldapPortalUserRoles',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'ldapPortalUserRolesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
    ),
    'relations' => 
    array (
      'companyLogo' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'companyLogoId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'positionList' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'userRole' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'rolesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'roles',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'rolesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'inboundEmailsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'inboundEmailsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'notesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'notesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'usersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'usersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'inboundEmails' => 
      array (
        'type' => 'manyMany',
        'entity' => 'InboundEmail',
        'relationName' => 'inboundEmailTeam',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'teamId',
          1 => 'inboundEmailId',
        ),
        'foreign' => 'teams',
      ),
      'notes' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Note',
        'relationName' => 'noteTeam',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'teamId',
          1 => 'noteId',
        ),
        'foreign' => 'teams',
      ),
      'roles' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Role',
        'relationName' => 'roleTeam',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'teamId',
          1 => 'roleId',
        ),
        'foreign' => 'teams',
      ),
      'users' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'teamUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'teamId',
          1 => 'userId',
        ),
        'foreign' => 'teams',
        'additionalColumns' => 
        array (
          'role' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'name',
      'order' => 'ASC',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'body' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'header' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'footer' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'entityType' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'leftMargin' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'default' => '10',
        'fieldType' => 'float',
      ),
      'rightMargin' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'default' => '10',
        'fieldType' => 'float',
      ),
      'topMargin' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'default' => '10',
        'fieldType' => 'float',
      ),
      'bottomMargin' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'default' => '25',
        'fieldType' => 'float',
      ),
      'printFooter' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'footerPosition' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'default' => '15',
        'fieldType' => 'float',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'variables' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'base',
      ),
      'pageOrientation' => 
      array (
        'type' => 'varchar',
        'default' => 'Portrait',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'pageFormat' => 
      array (
        'type' => 'varchar',
        'default' => 'A4',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'pageWidth' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'pageHeight' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'fontFace' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Template',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'name',
      'order' => 'ASC',
    ),
  ),
  'UniqueId' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'index' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'terminateAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'targetId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'target',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'targetType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'target',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'targetName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'target',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
    ),
    'relations' => 
    array (
      'target' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'targetId',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'select' => 'TRIM(CONCAT(IFNULL(user.first_name, \'\'), \' \', IFNULL(user.last_name, \'\')))',
        'where' => 
        array (
          'LIKE' => '(user.first_name LIKE {value} OR user.last_name LIKE {value} OR CONCAT(user.first_name, \' \', user.last_name) LIKE {value} OR CONCAT(user.last_name, \' \', user.first_name) LIKE {value})',
          '=' => '(user.first_name = {value} OR user.last_name = {value} OR CONCAT(user.first_name, \' \', user.last_name) = {value} OR CONCAT(user.last_name, \' \', user.first_name) = {value})',
        ),
        'orderBy' => 'user.first_name {direction}, user.last_name',
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'isAdmin' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'userName' => 
      array (
        'type' => 'varchar',
        'len' => 50,
        'fieldType' => 'varchar',
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'len' => 24,
        'index' => true,
        'default' => 'regular',
        'fieldType' => 'varchar',
      ),
      'password' => 
      array (
        'type' => 'password',
        'len' => 150,
        'fieldType' => 'password',
      ),
      'passwordConfirm' => 
      array (
        'type' => 'password',
        'len' => 150,
        'notStorable' => true,
        'fieldType' => 'password',
      ),
      'authMethod' => 
      array (
        'type' => 'varchar',
        'len' => 24,
        'fieldType' => 'varchar',
      ),
      'apiKey' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'secretKey' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'notStorable' => true,
        'fieldType' => 'varchar',
      ),
      'salutationName' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'firstName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
        'fieldType' => 'varchar',
      ),
      'lastName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
        'fieldType' => 'varchar',
      ),
      'isActive' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'isPortalUser' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'isSuperAdmin' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'position' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'notStorable' => true,
        'where' => 
        array (
          'LIKE' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'teams',
                1 => 'teamsPosition',
              ),
            ),
            'sql' => 'teamsPositionMiddle.role LIKE {value}',
            'distinct' => true,
          ),
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'teams',
                1 => 'teamsPosition',
              ),
            ),
            'sql' => 'teamsPositionMiddle.role = {value}',
            'distinct' => true,
          ),
          '<>' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'teams',
                1 => 'teamsPosition',
              ),
            ),
            'sql' => 'teamsPositionMiddle.role <> {value}',
            'distinct' => true,
          ),
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'teams',
                1 => 'teamsPosition',
              ),
            ),
            'sql' => 'teamsPositionMiddle.role IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'teams',
                1 => 'teamsPosition',
              ),
            ),
            'sql' => 'teamsPositionMiddle.role IS NOT NULL',
            'distinct' => true,
          ),
        ),
        'fieldType' => 'varchar',
      ),
      'emailAddress' => 
      array (
        'type' => 'email',
        'notStorable' => true,
        'fieldType' => 'email',
        'select' => 
        array (
          'sql' => 'emailAddresses.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => 'emailAddressUserForeign.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'EntityEmailAddress',
              1 => 'emailAddressUserForeignMiddle',
              2 => 
              array (
                'emailAddressUserForeignMiddle.entityId:' => '{alias}.id',
                'emailAddressUserForeignMiddle.primary' => 1,
              ),
            ),
            1 => 
            array (
              0 => 'EmailAddress',
              1 => 'emailAddressUserForeign',
              2 => 
              array (
                'emailAddressUserForeign.id:' => 'emailAddressUserForeignMiddle.emailAddressId',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          'LIKE' => 'user.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'User\' AND
                                    email_address.deleted = 0 AND email_address.lower LIKE {value}
                            )',
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower = {value}',
            'distinct' => true,
          ),
          '<>' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower <> {value}',
            'distinct' => true,
          ),
          'IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower IN {value}',
            'distinct' => true,
          ),
          'NOT IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower NOT IN {value}',
            'distinct' => true,
          ),
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower IS NOT NULL',
            'distinct' => true,
          ),
        ),
        'orderBy' => 
        array (
          'sql' => 'emailAddresses.lower {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
      ),
      'phoneNumber' => 
      array (
        'type' => 'phone',
        'notStorable' => true,
        'fieldType' => 'phone',
        'select' => 
        array (
          'sql' => 'phoneNumbers.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => 'phoneNumberUserForeign.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'EntityPhoneNumber',
              1 => 'phoneNumberUserForeignMiddle',
              2 => 
              array (
                'phoneNumberUserForeignMiddle.entityId:' => '{alias}.id',
                'phoneNumberUserForeignMiddle.primary' => 1,
              ),
            ),
            1 => 
            array (
              0 => 'PhoneNumber',
              1 => 'phoneNumberUserForeign',
              2 => 
              array (
                'phoneNumberUserForeign.id:' => 'phoneNumberUserForeignMiddle.phoneNumberId',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          'LIKE' => 'user.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'User\' AND
                                    phone_number.deleted = 0 AND phone_number.name LIKE {value}
                            )',
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name = {value}',
            'distinct' => true,
          ),
          '<>' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name <> {value}',
            'distinct' => true,
          ),
          'IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name IN {value}',
            'distinct' => true,
          ),
          'NOT IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name NOT IN {value}',
            'distinct' => true,
          ),
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name IS NOT NULL',
            'distinct' => true,
          ),
        ),
        'orderBy' => 
        array (
          'sql' => 'phoneNumbers.name {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
      ),
      'token' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'authTokenId' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'authLogRecordId' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'ipAddress' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'acceptanceStatus' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'acceptanceStatusMeetings' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'relation' => 'meetings',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'acceptanceStatusCalls' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'relation' => 'calls',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'teamRole' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'sendAccessInfo' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'gender' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'lastAccess' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'notStorable' => true,
        'fieldType' => 'datetime',
      ),
      'emailAddressIsOptedOut' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => 'emailAddresses.opt_out',
        'where' => 
        array (
          '= TRUE' => 
          array (
            'sql' => 'emailAddresses.opt_out = true AND emailAddresses.opt_out IS NOT NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
          '= FALSE' => 
          array (
            'sql' => 'emailAddresses.opt_out = false OR emailAddresses.opt_out IS NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
        ),
        'orderBy' => 'emailAddresses.opt_out {direction}',
        'default' => false,
      ),
      'phoneNumberIsOptedOut' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => 'phoneNumbers.opt_out',
        'where' => 
        array (
          '= TRUE' => 
          array (
            'sql' => 'phoneNumbers.opt_out = true AND phoneNumbers.opt_out IS NOT NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
          '= FALSE' => 
          array (
            'sql' => 'phoneNumbers.opt_out = false OR phoneNumbers.opt_out IS NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
        ),
        'orderBy' => 'phoneNumbers.opt_out {direction}',
        'default' => false,
      ),
      'emailAddressData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'phoneNumberData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'phoneNumberNumeric' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
        'where' => 
        array (
          'LIKE' => 'user.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'User\' AND
                                    phone_number.deleted = 0 AND phone_number.numeric LIKE {value}
                            )',
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric = {value}',
            'distinct' => true,
          ),
          '<>' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric <> {value}',
            'distinct' => true,
          ),
          'IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric IN {value}',
            'distinct' => true,
          ),
          'NOT IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric NOT IN {value}',
            'distinct' => true,
          ),
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric IS NOT NULL',
            'distinct' => true,
          ),
        ),
      ),
      'defaultTeamId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'defaultTeamName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'defaultTeam',
        'foreign' => 'name',
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'teamsColumns' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => 
        array (
          'role' => 'userRole',
        ),
        'attributeRole' => 'columnsMap',
      ),
      'rolesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'roles',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'rolesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'portalsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'portals',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'portalsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'portalRolesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'portalRoles',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'portalRolesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'contactId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'contactName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'contact',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'accountsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'accounts',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'accountsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'accountId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'account',
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notStorable' => true,
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
      ),
      'portalId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'portal',
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notStorable' => true,
        'notNull' => false,
      ),
      'portalName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
      ),
      'avatarId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => false,
        'notNull' => false,
      ),
      'avatarName' => 
      array (
        'type' => 'foreign',
        'relation' => 'avatar',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'reportEmailSendingIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'reportEmailSendingNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'targetListsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'targetListsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'notesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'notesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'emailsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'emailsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'preferencesId' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'preferencesName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'emailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'emailAddressId',
        ),
        'conditions' => 
        array (
          'entityType' => 'User',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'phoneNumbers' => 
      array (
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'phoneNumberId',
        ),
        'conditions' => 
        array (
          'entityType' => 'User',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'avatar' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'avatarId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'reportEmailSending' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Report',
        'relationName' => 'reportUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'reportId',
        ),
        'foreign' => 'emailSendingUsers',
      ),
      'targetLists' => 
      array (
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'targetListUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'targetListId',
        ),
        'foreign' => 'users',
        'additionalColumns' => 
        array (
          'optedOut' => 
          array (
            'type' => 'bool',
          ),
        ),
      ),
      'tasks' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Task',
        'foreignKey' => 'assignedUserId',
        'foreign' => 'assignedUser',
      ),
      'accounts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Account',
        'relationName' => 'AccountPortalUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'accountId',
        ),
        'foreign' => 'portalUsers',
      ),
      'contact' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Contact',
        'key' => 'contactId',
        'foreignKey' => 'id',
        'foreign' => 'portalUser',
      ),
      'notes' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Note',
        'relationName' => 'noteUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'noteId',
        ),
        'foreign' => 'users',
      ),
      'emails' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Email',
        'relationName' => 'emailUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'emailId',
        ),
        'foreign' => 'users',
        'additionalColumns' => 
        array (
          'isRead' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
          'isImportant' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
          'inTrash' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
          'folderId' => 
          array (
            'type' => 'varchar',
            'default' => NULL,
            'maxLength' => 24,
          ),
        ),
      ),
      'calls' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Call',
        'relationName' => 'callUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'callId',
        ),
        'foreign' => 'users',
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'meetings' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Meeting',
        'relationName' => 'meetingUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'meetingId',
        ),
        'foreign' => 'users',
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'preferences' => 
      array (
        'type' => 'hasOne',
        'entity' => 'Preferences',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'portalRoles' => 
      array (
        'type' => 'manyMany',
        'entity' => 'PortalRole',
        'relationName' => 'portalRoleUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'portalRoleId',
        ),
        'foreign' => 'users',
      ),
      'portals' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Portal',
        'relationName' => 'portalUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'portalId',
        ),
        'foreign' => 'users',
      ),
      'roles' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Role',
        'relationName' => 'roleUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'roleId',
        ),
        'foreign' => 'users',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'teamUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'teamId',
        ),
        'foreign' => 'users',
        'additionalColumns' => 
        array (
          'role' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'defaultTeam' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Team',
        'key' => 'defaultTeamId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'userName',
      'order' => 'ASC',
    ),
  ),
  'UserData' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'imapHandlers' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'smtpHandlers' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'userId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'notNull' => false,
      ),
      'userName' => 
      array (
        'type' => 'foreign',
        'relation' => 'user',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
        'notStorable' => false,
      ),
    ),
    'relations' => 
    array (
      'user' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 249,
        'fieldType' => 'varchar',
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'website' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'emailAddress' => 
      array (
        'type' => 'email',
        'notStorable' => true,
        'fieldType' => 'email',
        'select' => 
        array (
          'sql' => 'emailAddresses.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => 'emailAddressAccountForeign.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'EntityEmailAddress',
              1 => 'emailAddressAccountForeignMiddle',
              2 => 
              array (
                'emailAddressAccountForeignMiddle.entityId:' => '{alias}.id',
                'emailAddressAccountForeignMiddle.primary' => 1,
              ),
            ),
            1 => 
            array (
              0 => 'EmailAddress',
              1 => 'emailAddressAccountForeign',
              2 => 
              array (
                'emailAddressAccountForeign.id:' => 'emailAddressAccountForeignMiddle.emailAddressId',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          'LIKE' => 'account.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Account\' AND
                                    email_address.deleted = 0 AND email_address.lower LIKE {value}
                            )',
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower = {value}',
            'distinct' => true,
          ),
          '<>' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower <> {value}',
            'distinct' => true,
          ),
          'IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower IN {value}',
            'distinct' => true,
          ),
          'NOT IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower NOT IN {value}',
            'distinct' => true,
          ),
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower IS NOT NULL',
            'distinct' => true,
          ),
        ),
        'orderBy' => 
        array (
          'sql' => 'emailAddresses.lower {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
      ),
      'phoneNumber' => 
      array (
        'type' => 'phone',
        'notStorable' => true,
        'fieldType' => 'phone',
        'select' => 
        array (
          'sql' => 'phoneNumbers.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => 'phoneNumberAccountForeign.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'EntityPhoneNumber',
              1 => 'phoneNumberAccountForeignMiddle',
              2 => 
              array (
                'phoneNumberAccountForeignMiddle.entityId:' => '{alias}.id',
                'phoneNumberAccountForeignMiddle.primary' => 1,
              ),
            ),
            1 => 
            array (
              0 => 'PhoneNumber',
              1 => 'phoneNumberAccountForeign',
              2 => 
              array (
                'phoneNumberAccountForeign.id:' => 'phoneNumberAccountForeignMiddle.phoneNumberId',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          'LIKE' => 'account.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Account\' AND
                                    phone_number.deleted = 0 AND phone_number.name LIKE {value}
                            )',
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name = {value}',
            'distinct' => true,
          ),
          '<>' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name <> {value}',
            'distinct' => true,
          ),
          'IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name IN {value}',
            'distinct' => true,
          ),
          'NOT IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name NOT IN {value}',
            'distinct' => true,
          ),
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name IS NOT NULL',
            'distinct' => true,
          ),
        ),
        'orderBy' => 
        array (
          'sql' => 'phoneNumbers.name {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'industry' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'sicCode' => 
      array (
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar',
      ),
      'contactRole' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'notStorable' => true,
        'fieldType' => 'varchar',
      ),
      'contactIsInactive' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'billingAddressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'fieldType' => 'text',
      ),
      'billingAddressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'billingAddressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'billingAddressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'billingAddressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar',
      ),
      'shippingAddressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'fieldType' => 'text',
      ),
      'shippingAddressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'shippingAddressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'shippingAddressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'shippingAddressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar',
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'targetListIsOptedOut' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'emailAddressIsOptedOut' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => 'emailAddresses.opt_out',
        'where' => 
        array (
          '= TRUE' => 
          array (
            'sql' => 'emailAddresses.opt_out = true AND emailAddresses.opt_out IS NOT NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
          '= FALSE' => 
          array (
            'sql' => 'emailAddresses.opt_out = false OR emailAddresses.opt_out IS NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
        ),
        'orderBy' => 'emailAddresses.opt_out {direction}',
        'default' => false,
      ),
      'phoneNumberIsOptedOut' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => 'phoneNumbers.opt_out',
        'where' => 
        array (
          '= TRUE' => 
          array (
            'sql' => 'phoneNumbers.opt_out = true AND phoneNumbers.opt_out IS NOT NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
          '= FALSE' => 
          array (
            'sql' => 'phoneNumbers.opt_out = false OR phoneNumbers.opt_out IS NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
        ),
        'orderBy' => 'phoneNumbers.opt_out {direction}',
        'default' => false,
      ),
      'billingAddressMap' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map',
      ),
      'shippingAddressMap' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map',
      ),
      'emailAddressData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'phoneNumberData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'phoneNumberNumeric' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
        'where' => 
        array (
          'LIKE' => 'account.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Account\' AND
                                    phone_number.deleted = 0 AND phone_number.numeric LIKE {value}
                            )',
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric = {value}',
            'distinct' => true,
          ),
          '<>' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric <> {value}',
            'distinct' => true,
          ),
          'IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric IN {value}',
            'distinct' => true,
          ),
          'NOT IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric NOT IN {value}',
            'distinct' => true,
          ),
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric IS NOT NULL',
            'distinct' => true,
          ),
        ),
      ),
      'campaignId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'campaignName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'campaign',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'targetListsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'targetLists',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'targetListsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'targetListId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'targetList',
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notStorable' => true,
        'notNull' => false,
      ),
      'targetListName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
      ),
      'originalLeadId' => 
      array (
        'type' => 'varchar',
        'index' => 'originalLead',
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notStorable' => true,
      ),
      'originalLeadName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'invoiceItemsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'invoiceItemsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'invoicesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'invoicesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'salesOrderItemsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'salesOrderItemsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'salesOrdersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'salesOrdersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'quoteItemsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'quoteItemsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'quotesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'quotesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'portalUsersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'portalUsersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'campaignLogRecordsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'campaignLogRecordsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'emailsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'emailsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksPrimaryIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksPrimaryNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsPrimaryIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsPrimaryNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'emailsPrimaryIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'emailsPrimaryNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsPrimaryIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsPrimaryNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'documentsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'documentsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'casesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'casesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'opportunitiesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'opportunitiesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'contactsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'contactsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'emailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'emailAddressId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Account',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'phoneNumbers' => 
      array (
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'phoneNumberId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Account',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'invoiceItems' => 
      array (
        'type' => 'hasMany',
        'entity' => 'InvoiceItem',
        'foreignKey' => 'accountId',
        'foreign' => 'account',
      ),
      'invoices' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Invoice',
        'foreignKey' => 'accountId',
        'foreign' => 'account',
      ),
      'salesOrderItems' => 
      array (
        'type' => 'hasMany',
        'entity' => 'SalesOrderItem',
        'foreignKey' => 'accountId',
        'foreign' => 'account',
      ),
      'salesOrders' => 
      array (
        'type' => 'hasMany',
        'entity' => 'SalesOrder',
        'foreignKey' => 'accountId',
        'foreign' => 'account',
      ),
      'quoteItems' => 
      array (
        'type' => 'hasMany',
        'entity' => 'QuoteItem',
        'foreignKey' => 'accountId',
        'foreign' => 'account',
      ),
      'quotes' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Quote',
        'foreignKey' => 'accountId',
        'foreign' => 'account',
      ),
      'originalLead' => 
      array (
        'type' => 'hasOne',
        'entity' => 'Lead',
        'foreignKey' => 'createdAccountId',
        'foreign' => 'createdAccount',
        'noJoin' => true,
      ),
      'portalUsers' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'AccountPortalUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'accountId',
          1 => 'userId',
        ),
        'foreign' => 'accounts',
      ),
      'targetLists' => 
      array (
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'accountTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'accountId',
          1 => 'targetListId',
        ),
        'foreign' => 'accounts',
        'additionalColumns' => 
        array (
          'optedOut' => 
          array (
            'type' => 'bool',
          ),
        ),
      ),
      'campaignLogRecords' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'CampaignLogRecord',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'campaign' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'foreign' => 'accounts',
        'noJoin' => true,
      ),
      'emails' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Email',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'calls' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Call',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'meetings' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Meeting',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'tasksPrimary' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Task',
        'foreignKey' => 'accountId',
        'foreign' => 'account',
      ),
      'callsPrimary' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Call',
        'foreignKey' => 'accountId',
        'foreign' => 'account',
      ),
      'emailsPrimary' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Email',
        'foreignKey' => 'accountId',
        'foreign' => 'account',
      ),
      'meetingsPrimary' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Meeting',
        'foreignKey' => 'accountId',
        'foreign' => 'account',
      ),
      'documents' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Document',
        'relationName' => 'accountDocument',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'accountId',
          1 => 'documentId',
        ),
        'foreign' => 'accounts',
      ),
      'cases' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Case',
        'foreignKey' => 'accountId',
        'foreign' => 'account',
      ),
      'opportunities' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Opportunity',
        'foreignKey' => 'accountId',
        'foreign' => 'account',
      ),
      'contacts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'accountContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'accountId',
          1 => 'contactId',
        ),
        'foreign' => 'accounts',
        'additionalColumns' => 
        array (
          'role' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'isInactive' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Account',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'createdAt' => 
      array (
        'columns' => 
        array (
          0 => 'createdAt',
          1 => 'deleted',
        ),
        'key' => 'IDX_CREATED_AT',
      ),
      'name' => 
      array (
        'columns' => 
        array (
          0 => 'name',
          1 => 'deleted',
        ),
        'key' => 'IDX_NAME',
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
        'key' => 'IDX_ASSIGNED_USER',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Planned',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'dateStart' => 
      array (
        'type' => 'datetime',
        'fieldType' => 'datetime',
      ),
      'dateEnd' => 
      array (
        'type' => 'datetime',
        'fieldType' => 'datetime',
      ),
      'duration' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'default' => '300',
        'select' => 'TIMESTAMPDIFF(SECOND, call.date_start, call.date_end)',
        'orderBy' => 'duration {direction}',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'reminders' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray',
      ),
      'direction' => 
      array (
        'type' => 'varchar',
        'default' => 'Outbound',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'acceptanceStatus' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'where' => 
        array (
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 'users',
              1 => 'contacts',
              2 => 'leads',
            ),
            'sql' => 'contactsMiddle.status = {value} OR leadsMiddle.status = {value} OR usersMiddle.status = {value}',
            'distinct' => true,
          ),
          '<>' => 'call.id NOT IN (SELECT call_id FROM call_contact WHERE deleted = 0 AND status = {value}) AND call.id NOT IN (SELECT call_id FROM call_user WHERE deleted = 0 AND status = {value}) AND call.id NOT IN (SELECT call_id FROM call_lead WHERE deleted = 0 AND status = {value})',
          'IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 'users',
              1 => 'leads',
              2 => 'contacts',
            ),
            'sql' => 'contactsMiddle.status IN {value} OR leadsMiddle.status IN {value} OR usersMiddle.status IN {value}',
            'distinct' => true,
          ),
          'NOT IN' => 'call.id NOT IN (SELECT call_id FROM call_contact WHERE deleted = 0 AND status IN {value}) AND call.id NOT IN (SELECT call_id FROM call_user WHERE deleted = 0 AND status IN {value}) AND call.id NOT IN (SELECT call_id FROM call_lead WHERE deleted = 0 AND status IN {value})',
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 'users',
              1 => 'contacts',
              2 => 'leads',
            ),
            'sql' => 'contactsMiddle.status IS NULL AND leadsMiddle.status IS NULL AND usersMiddle.status IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 'call.id NOT IN (SELECT call_id FROM call_contact WHERE deleted = 0 AND status IS NULL) OR call.id NOT IN (SELECT call_id FROM call_user WHERE deleted = 0 AND status IS NULL) OR call.id NOT IN (SELECT call_id FROM call_lead WHERE deleted = 0 AND status IS NULL)',
        ),
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'phoneNumbersMap' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'fieldType' => 'jsonObject',
      ),
      'googleCalendarEventId' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'parentId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'parent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'parent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
      'accountId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'usersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'users',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'name',
        'isLinkStub' => false,
      ),
      'usersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'usersColumns' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => 
        array (
          'status' => 'acceptanceStatus',
        ),
        'attributeRole' => 'columnsMap',
      ),
      'contactsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'contacts',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'name',
        'isLinkStub' => false,
      ),
      'contactsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'contactsColumns' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => 
        array (
          'status' => 'acceptanceStatus',
        ),
        'attributeRole' => 'columnsMap',
      ),
      'leadsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'leads',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'name',
        'isLinkStub' => false,
      ),
      'leadsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'leadsColumns' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => 
        array (
          'status' => 'acceptanceStatus',
        ),
        'attributeRole' => 'columnsMap',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'googleCalendarId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'googleCalendarName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'googleCalendar',
        'foreign' => 'name',
      ),
    ),
    'relations' => 
    array (
      'googleCalendar' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'GoogleCalendar',
        'key' => 'googleCalendarId',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true,
      ),
      'parent' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'parentId',
      ),
      'leads' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Lead',
        'relationName' => 'callLead',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'callId',
          1 => 'leadId',
        ),
        'foreign' => 'calls',
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'contacts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'callContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'callId',
          1 => 'contactId',
        ),
        'foreign' => 'calls',
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'users' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'callUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'callId',
          1 => 'userId',
        ),
        'foreign' => 'calls',
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Call',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'dateStartStatus' => 
      array (
        'columns' => 
        array (
          0 => 'dateStart',
          1 => 'status',
        ),
        'key' => 'IDX_DATE_START_STATUS',
      ),
      'dateStart' => 
      array (
        'columns' => 
        array (
          0 => 'dateStart',
          1 => 'deleted',
        ),
        'key' => 'IDX_DATE_START',
      ),
      'status' => 
      array (
        'columns' => 
        array (
          0 => 'status',
          1 => 'deleted',
        ),
        'key' => 'IDX_STATUS',
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
        'key' => 'IDX_ASSIGNED_USER',
      ),
      'assignedUserStatus' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'status',
        ),
        'key' => 'IDX_ASSIGNED_USER_STATUS',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'dateStart',
      'order' => 'DESC',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Planning',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'default' => 'Email',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'startDate' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'endDate' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'sentCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'openedCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'clickedCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'optedInCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'optedOutCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'bouncedCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'hardBouncedCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'softBouncedCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'leadCreatedCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'openedPercentage' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'clickedPercentage' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'optedOutPercentage' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'bouncedPercentage' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'revenue' => 
      array (
        'type' => 'float',
        'notStorable' => true,
        'fieldType' => 'currency',
        'attributeRole' => 'value',
      ),
      'budget' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'campaign.budget * budgetCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'budgetCurrencyRate',
              2 => 
              array (
                'budgetCurrencyRate.id:' => 'budgetCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'mailMergeOnlyWithAddress' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'revenueCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'notStorable' => true,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'budgetCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'targetListsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'targetLists',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'targetListsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'excludingTargetListsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'excludingTargetLists',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'excludingTargetListsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'budgetConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'campaign.budget * budgetCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'budgetCurrencyRate',
              2 => 
              array (
                'budgetCurrencyRate.id:' => 'budgetCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.budget * budgetCurrencyRateCampaignForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'budgetCurrencyRateCampaignForeign',
              2 => 
              array (
                'budgetCurrencyRateCampaignForeign.id:' => '{alias}.budgetCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'campaign.budget * budgetCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'budgetCurrencyRate',
                2 => 
                array (
                  'budgetCurrencyRate.id:' => 'budgetCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'campaign.budget * budgetCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'budgetCurrencyRate',
                2 => 
                array (
                  'budgetCurrencyRate.id:' => 'budgetCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'campaign.budget * budgetCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'budgetCurrencyRate',
                2 => 
                array (
                  'budgetCurrencyRate.id:' => 'budgetCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'campaign.budget * budgetCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'budgetCurrencyRate',
                2 => 
                array (
                  'budgetCurrencyRate.id:' => 'budgetCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'campaign.budget * budgetCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'budgetCurrencyRate',
                2 => 
                array (
                  'budgetCurrencyRate.id:' => 'budgetCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'campaign.budget * budgetCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'budgetCurrencyRate',
                2 => 
                array (
                  'budgetCurrencyRate.id:' => 'budgetCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'campaign.budget IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'campaign.budget IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'budgetConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'budgetCurrencyRate',
              2 => 
              array (
                'budgetCurrencyRate.id:' => 'budgetCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'contactsTemplateId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'contactsTemplateName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'contactsTemplate',
        'foreign' => 'name',
      ),
      'leadsTemplateId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'leadsTemplateName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'leadsTemplate',
        'foreign' => 'name',
      ),
      'accountsTemplateId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'accountsTemplateName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'accountsTemplate',
        'foreign' => 'name',
      ),
      'usersTemplateId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'usersTemplateName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'usersTemplate',
        'foreign' => 'name',
      ),
      'massEmailsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'massEmailsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'trackingUrlsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'trackingUrlsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'campaignLogRecordsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'campaignLogRecordsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'opportunitiesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'opportunitiesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'leadsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'leadsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'contactsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'contactsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'accountsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'accountsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'usersTemplate' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Template',
        'key' => 'usersTemplateId',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true,
      ),
      'accountsTemplate' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Template',
        'key' => 'accountsTemplateId',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true,
      ),
      'leadsTemplate' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Template',
        'key' => 'leadsTemplateId',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true,
      ),
      'contactsTemplate' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Template',
        'key' => 'contactsTemplateId',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true,
      ),
      'massEmails' => 
      array (
        'type' => 'hasMany',
        'entity' => 'MassEmail',
        'foreignKey' => 'campaignId',
        'foreign' => 'campaign',
      ),
      'trackingUrls' => 
      array (
        'type' => 'hasMany',
        'entity' => 'CampaignTrackingUrl',
        'foreignKey' => 'campaignId',
        'foreign' => 'campaign',
      ),
      'campaignLogRecords' => 
      array (
        'type' => 'hasMany',
        'entity' => 'CampaignLogRecord',
        'foreignKey' => 'campaignId',
        'foreign' => 'campaign',
      ),
      'opportunities' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Opportunity',
        'foreignKey' => 'campaignId',
        'foreign' => 'campaign',
        'noJoin' => true,
      ),
      'leads' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Lead',
        'foreignKey' => 'campaignId',
        'foreign' => 'campaign',
        'noJoin' => true,
      ),
      'contacts' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Contact',
        'foreignKey' => 'campaignId',
        'foreign' => 'campaign',
        'noJoin' => true,
      ),
      'accounts' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Account',
        'foreignKey' => 'campaignId',
        'foreign' => 'campaign',
        'noJoin' => true,
      ),
      'excludingTargetLists' => 
      array (
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'campaignTargetListExcluding',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'campaignId',
          1 => 'targetListId',
        ),
        'foreign' => 'campaignsExcluding',
      ),
      'targetLists' => 
      array (
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'campaignTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'campaignId',
          1 => 'targetListId',
        ),
        'foreign' => 'campaigns',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Campaign',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'createdAt' => 
      array (
        'columns' => 
        array (
          0 => 'createdAt',
          1 => 'deleted',
        ),
        'key' => 'IDX_CREATED_AT',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'action' => 
      array (
        'type' => 'varchar',
        'len' => 50,
        'fieldType' => 'varchar',
      ),
      'actionDate' => 
      array (
        'type' => 'datetime',
        'fieldType' => 'datetime',
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'stringData' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'stringAdditionalData' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'application' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'default' => 'Espo',
        'fieldType' => 'varchar',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'isTest' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'campaignId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'campaignName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'campaign',
        'foreign' => 'name',
      ),
      'parentId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'parent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'parent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
      'objectId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'object',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'objectType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'object',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'objectName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'object',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
      'queueItemId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'queueItemName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'queueItem',
        'foreign' => 'name',
      ),
    ),
    'relations' => 
    array (
      'object' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'objectId',
      ),
      'parent' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'parentId',
      ),
      'queueItem' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'EmailQueueItem',
        'key' => 'queueItemId',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true,
      ),
      'campaign' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'foreign' => 'campaignLogRecords',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'actionDate' => 
      array (
        'columns' => 
        array (
          0 => 'actionDate',
          1 => 'deleted',
        ),
        'key' => 'IDX_ACTION_DATE',
      ),
      'action' => 
      array (
        'columns' => 
        array (
          0 => 'action',
          1 => 'deleted',
        ),
        'key' => 'IDX_ACTION',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'url' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'urlToUse' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'campaignId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'campaignName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'campaign',
        'foreign' => 'name',
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'campaign' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'foreign' => 'trackingUrls',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'name',
      'order' => 'ASC',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'number' => 
      array (
        'type' => 'int',
        'autoincrement' => true,
        'unique' => true,
        'index' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'New',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'priority' => 
      array (
        'type' => 'varchar',
        'default' => 'Normal',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'accountId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'leadId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'leadName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'lead',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'contactId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'contactName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'contact',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'contactsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'contacts',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'name',
        'isLinkStub' => false,
      ),
      'contactsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'inboundEmailId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'inboundEmailName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'inboundEmail',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'attachmentsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'orderBy' => 
        array (
          0 => 
          array (
            0 => 'createdAt',
            1 => 'ASC',
          ),
          1 => 
          array (
            0 => 'name',
            1 => 'ASC',
          ),
        ),
        'isLinkMultipleIdList' => true,
        'relation' => 'attachments',
        'isLinkStub' => false,
      ),
      'attachmentsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'isLinkStub' => false,
      ),
      'contacts1Ids' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'contacts1',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'contacts1Names' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'articlesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'articlesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'emailsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'emailsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'attachmentsTypes' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'contacts1' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Contact',
        'foreignKey' => 'caseId',
        'foreign' => 'case',
      ),
      'articles' => 
      array (
        'type' => 'manyMany',
        'entity' => 'KnowledgeBaseArticle',
        'relationName' => 'caseKnowledgeBaseArticle',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'caseId',
          1 => 'knowledgeBaseArticleId',
        ),
        'foreign' => 'cases',
      ),
      'emails' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Email',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'calls' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Call',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'meetings' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Meeting',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'contacts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'caseContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'caseId',
          1 => 'contactId',
        ),
        'foreign' => 'cases',
      ),
      'contact' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Contact',
        'key' => 'contactId',
        'foreignKey' => 'id',
        'foreign' => 'casesPrimary',
      ),
      'lead' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Lead',
        'key' => 'leadId',
        'foreignKey' => 'id',
        'foreign' => 'cases',
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => 'cases',
      ),
      'inboundEmail' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'InboundEmail',
        'key' => 'inboundEmailId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Case',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'attachments' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
        'conditions' => 
        array (
          'OR' => 
          array (
            0 => 
            array (
              'field' => NULL,
            ),
            1 => 
            array (
              'field' => 'attachments',
            ),
          ),
        ),
      ),
    ),
    'indexes' => 
    array (
      'status' => 
      array (
        'columns' => 
        array (
          0 => 'status',
          1 => 'deleted',
        ),
        'key' => 'IDX_STATUS',
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
        'key' => 'IDX_ASSIGNED_USER',
      ),
      'assignedUserStatus' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'status',
        ),
        'key' => 'IDX_ASSIGNED_USER_STATUS',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'number',
      'order' => 'DESC',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'select' => 'TRIM(CONCAT(IFNULL(contact.first_name, \'\'), \' \', IFNULL(contact.last_name, \'\')))',
        'where' => 
        array (
          'LIKE' => '(contact.first_name LIKE {value} OR contact.last_name LIKE {value} OR CONCAT(contact.first_name, \' \', contact.last_name) LIKE {value} OR CONCAT(contact.last_name, \' \', contact.first_name) LIKE {value})',
          '=' => '(contact.first_name = {value} OR contact.last_name = {value} OR CONCAT(contact.first_name, \' \', contact.last_name) = {value} OR CONCAT(contact.last_name, \' \', contact.first_name) = {value})',
        ),
        'orderBy' => 'contact.first_name {direction}, contact.last_name',
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'salutationName' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'firstName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
        'fieldType' => 'varchar',
      ),
      'lastName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
        'fieldType' => 'varchar',
      ),
      'accountId' => 
      array (
        'dbType' => 'varchar',
        'len' => 255,
        'type' => 'foreignId',
        'where' => 
        array (
          '=' => 'contact.id IN (SELECT contact_id FROM account_contact WHERE deleted = 0 AND account_id = {value})',
          '<>' => 'contact.id NOT IN (SELECT contact_id FROM account_contact WHERE deleted = 0 AND account_id = {value})',
          'IN' => 'contact.id IN (SELECT contact_id FROM account_contact WHERE deleted = 0 AND account_id IN {value})',
          'NOT IN' => 'contact.id NOT IN (SELECT contact_id FROM account_contact WHERE deleted = 0 AND account_id IN {value})',
          'IS NULL' => 'contact.account_id IS NULL',
          'IS NOT NULL' => 'contact.account_id IS NOT NULL',
        ),
        'fieldType' => 'link',
        'index' => true,
        'attributeRole' => 'id',
        'notNull' => false,
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'notStorable' => true,
        'select' => 
        array (
          'sql' => 'accountContact.role',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'AccountContact',
              1 => 'accountContact',
              2 => 
              array (
                'contact.id:' => 'accountContact.contactId',
                'contact.accountId:' => 'accountContact.accountId',
                'accountContact.deleted' => false,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'sql' => 'accountContact.role {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'AccountContact',
              1 => 'accountContact',
              2 => 
              array (
                'contact.id:' => 'accountContact.contactId',
                'contact.accountId:' => 'accountContact.accountId',
                'accountContact.deleted' => false,
              ),
            ),
          ),
        ),
        'where' => 
        array (
          'LIKE' => 
          array (
            'leftJoins' => 
            array (
              0 => 'accounts',
            ),
            'sql' => 'accountsMiddle.role LIKE {value}',
            'distinct' => true,
          ),
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 'accounts',
            ),
            'sql' => 'accountsMiddle.role = {value}',
            'distinct' => true,
          ),
          '<>' => 
          array (
            'leftJoins' => 
            array (
              0 => 'accounts',
            ),
            'sql' => 'accountsMiddle.role <> {value}',
            'distinct' => true,
          ),
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 'accounts',
            ),
            'sql' => 'accountsMiddle.role IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 'accounts',
            ),
            'sql' => 'accountsMiddle.role IS NOT NULL',
            'distinct' => true,
          ),
        ),
        'fieldType' => 'varchar',
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'emailAddress' => 
      array (
        'type' => 'email',
        'notStorable' => true,
        'fieldType' => 'email',
        'select' => 
        array (
          'sql' => 'emailAddresses.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => 'emailAddressContactForeign.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'EntityEmailAddress',
              1 => 'emailAddressContactForeignMiddle',
              2 => 
              array (
                'emailAddressContactForeignMiddle.entityId:' => '{alias}.id',
                'emailAddressContactForeignMiddle.primary' => 1,
              ),
            ),
            1 => 
            array (
              0 => 'EmailAddress',
              1 => 'emailAddressContactForeign',
              2 => 
              array (
                'emailAddressContactForeign.id:' => 'emailAddressContactForeignMiddle.emailAddressId',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          'LIKE' => 'contact.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Contact\' AND
                                    email_address.deleted = 0 AND email_address.lower LIKE {value}
                            )',
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower = {value}',
            'distinct' => true,
          ),
          '<>' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower <> {value}',
            'distinct' => true,
          ),
          'IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower IN {value}',
            'distinct' => true,
          ),
          'NOT IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower NOT IN {value}',
            'distinct' => true,
          ),
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower IS NOT NULL',
            'distinct' => true,
          ),
        ),
        'orderBy' => 
        array (
          'sql' => 'emailAddresses.lower {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
      ),
      'phoneNumber' => 
      array (
        'type' => 'phone',
        'notStorable' => true,
        'fieldType' => 'phone',
        'select' => 
        array (
          'sql' => 'phoneNumbers.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => 'phoneNumberContactForeign.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'EntityPhoneNumber',
              1 => 'phoneNumberContactForeignMiddle',
              2 => 
              array (
                'phoneNumberContactForeignMiddle.entityId:' => '{alias}.id',
                'phoneNumberContactForeignMiddle.primary' => 1,
              ),
            ),
            1 => 
            array (
              0 => 'PhoneNumber',
              1 => 'phoneNumberContactForeign',
              2 => 
              array (
                'phoneNumberContactForeign.id:' => 'phoneNumberContactForeignMiddle.phoneNumberId',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          'LIKE' => 'contact.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Contact\' AND
                                    phone_number.deleted = 0 AND phone_number.name LIKE {value}
                            )',
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name = {value}',
            'distinct' => true,
          ),
          '<>' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name <> {value}',
            'distinct' => true,
          ),
          'IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name IN {value}',
            'distinct' => true,
          ),
          'NOT IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name NOT IN {value}',
            'distinct' => true,
          ),
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name IS NOT NULL',
            'distinct' => true,
          ),
        ),
        'orderBy' => 
        array (
          'sql' => 'phoneNumbers.name {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
      ),
      'doNotCall' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'addressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'fieldType' => 'text',
      ),
      'addressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'addressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'addressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'addressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar',
      ),
      'accountRole' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'accountIsInactive' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'select' => 
        array (
          'sql' => 'accountContact.is_inactive',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'AccountContact',
              1 => 'accountContact',
              2 => 
              array (
                'contact.id:' => 'accountContact.contactId',
                'contact.accountId:' => 'accountContact.accountId',
                'accountContact.deleted' => false,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'sql' => 'accountContact.is_inactive {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'AccountContact',
              1 => 'accountContact',
              2 => 
              array (
                'contact.id:' => 'accountContact.contactId',
                'contact.accountId:' => 'accountContact.accountId',
                'accountContact.deleted' => false,
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '= TRUE' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'AccountContact',
                1 => 'accountContactFilterIsInactive',
                2 => 
                array (
                  'contact.accountId:' => 'accountContactFilterIsInactive.accountId',
                ),
              ),
            ),
            'sql' => 'accountContactFilterIsInactive.is_inactive = true',
          ),
          '= FALSE' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'AccountContact',
                1 => 'accountContactFilterIsInactive',
                2 => 
                array (
                  'contact.accountId:' => 'accountContactFilterIsInactive.accountId',
                ),
              ),
            ),
            'sql' => 'accountContactFilterIsInactive.is_inactive <> true OR accountContactFilterIsInactive.is_inactive IS NULL',
          ),
        ),
        'fieldType' => 'bool',
        'default' => false,
      ),
      'accountType' => 
      array (
        'type' => 'foreign',
        'relation' => 'account',
        'foreign' => 'type',
        'fieldType' => 'foreign',
      ),
      'opportunityRole' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'where' => 
        array (
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 'opportunities',
            ),
            'sql' => 'opportunitiesMiddle.role = {value}',
            'distinct' => true,
          ),
          '<>' => 'contact.id NOT IN (SELECT contact_id FROM contact_opportunity WHERE deleted = 0 AND role = {value})',
          'IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 'opportunities',
            ),
            'sql' => 'opportunitiesMiddle.role IN {value}',
            'distinct' => true,
          ),
          'NOT IN' => 'contact.id NOT IN (SELECT contact_id FROM contact_opportunity WHERE deleted = 0 AND role IN {value})',
          'LIKE' => 
          array (
            'leftJoins' => 
            array (
              0 => 'opportunities',
            ),
            'sql' => 'opportunitiesMiddle.role LIKE {value}',
            'distinct' => true,
          ),
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 'opportunities',
            ),
            'sql' => 'opportunitiesMiddle.role IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 'contact.id NOT IN (SELECT contact_id FROM contact_opportunity WHERE deleted = 0 AND role IS NULL)',
        ),
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'acceptanceStatus' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'acceptanceStatusMeetings' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'relation' => 'meetings',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'acceptanceStatusCalls' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'relation' => 'calls',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'targetListIsOptedOut' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'alias' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'giroProf' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'origen' => 
      array (
        'type' => 'varchar',
        'default' => 'Redes',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'tarifa' => 
      array (
        'type' => 'varchar',
        'default' => 'Domestico',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'emailAddressIsOptedOut' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => 'emailAddresses.opt_out',
        'where' => 
        array (
          '= TRUE' => 
          array (
            'sql' => 'emailAddresses.opt_out = true AND emailAddresses.opt_out IS NOT NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
          '= FALSE' => 
          array (
            'sql' => 'emailAddresses.opt_out = false OR emailAddresses.opt_out IS NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
        ),
        'orderBy' => 'emailAddresses.opt_out {direction}',
        'default' => false,
      ),
      'phoneNumberIsOptedOut' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => 'phoneNumbers.opt_out',
        'where' => 
        array (
          '= TRUE' => 
          array (
            'sql' => 'phoneNumbers.opt_out = true AND phoneNumbers.opt_out IS NOT NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
          '= FALSE' => 
          array (
            'sql' => 'phoneNumbers.opt_out = false OR phoneNumbers.opt_out IS NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
        ),
        'orderBy' => 'phoneNumbers.opt_out {direction}',
        'default' => false,
      ),
      'addressMap' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map',
      ),
      'emailAddressData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'phoneNumberData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'phoneNumberNumeric' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
        'where' => 
        array (
          'LIKE' => 'contact.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Contact\' AND
                                    phone_number.deleted = 0 AND phone_number.numeric LIKE {value}
                            )',
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric = {value}',
            'distinct' => true,
          ),
          '<>' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric <> {value}',
            'distinct' => true,
          ),
          'IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric IN {value}',
            'distinct' => true,
          ),
          'NOT IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric NOT IN {value}',
            'distinct' => true,
          ),
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric IS NOT NULL',
            'distinct' => true,
          ),
        ),
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'accountsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'accounts',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'name',
        'isLinkStub' => false,
      ),
      'accountsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'accountsColumns' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => 
        array (
          'role' => 'contactRole',
          'isInactive' => 'contactIsInactive',
        ),
        'attributeRole' => 'columnsMap',
      ),
      'campaignId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'campaignName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'campaign',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'targetListsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'targetLists',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'targetListsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'targetListId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'targetList',
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notStorable' => true,
        'notNull' => false,
      ),
      'targetListName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
      ),
      'portalUserId' => 
      array (
        'type' => 'varchar',
        'index' => 'portalUser',
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notStorable' => true,
      ),
      'portalUserName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
      ),
      'originalLeadId' => 
      array (
        'type' => 'varchar',
        'index' => 'originalLead',
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notStorable' => true,
      ),
      'originalLeadName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
      ),
      'caseId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'caseName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'case',
        'foreign' => 'name',
      ),
      'opportunities1Ids' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'opportunities1',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'opportunities1Names' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'opportunityId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'opportunityName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'opportunity',
        'foreign' => 'name',
      ),
      'instalacionsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'instalacions',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'instalacionsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'aisladosIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'aislados',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'aisladosNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'aisladoId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'aisladoName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'aislado',
        'foreign' => 'name',
      ),
      'aCCsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'aCCs',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'aCCsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'googleContactsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'googleContactsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'invoicesShippingIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'invoicesShippingNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'invoicesBillingIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'invoicesBillingNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'salesOrdersShippingIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'salesOrdersShippingNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'salesOrdersBillingIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'salesOrdersBillingNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'quotesShippingIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'quotesShippingNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'quotesBillingIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'quotesBillingNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksPrimaryIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksPrimaryNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'documentsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'documentsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'campaignLogRecordsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'campaignLogRecordsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'emailsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'emailsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'casesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'casesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'casesPrimaryIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'casesPrimaryNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'opportunitiesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'opportunitiesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'emailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'emailAddressId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Contact',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'phoneNumbers' => 
      array (
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'phoneNumberId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Contact',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'aCCs' => 
      array (
        'type' => 'manyMany',
        'entity' => 'ACC',
        'relationName' => 'aCCContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'aCCId',
        ),
        'foreign' => 'contacts',
      ),
      'aislado' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Aislado',
        'key' => 'aisladoId',
        'foreignKey' => 'id',
        'foreign' => 'contacts1',
      ),
      'aislados' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Aislado',
        'relationName' => 'aisladoContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'aisladoId',
        ),
        'foreign' => 'contacts',
      ),
      'instalacions' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Instalacion',
        'relationName' => 'instalacionContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'instalacionId',
        ),
        'foreign' => 'contacts',
      ),
      'opportunity' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Opportunity',
        'key' => 'opportunityId',
        'foreignKey' => 'id',
        'foreign' => 'contacts12',
      ),
      'opportunities1' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Opportunity',
        'relationName' => 'oppContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'opportunityId',
        ),
        'foreign' => 'contacts1',
      ),
      'case' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Case',
        'key' => 'caseId',
        'foreignKey' => 'id',
        'foreign' => 'contacts1',
      ),
      'googleContacts' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'GoogleContactsPair',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'invoicesShipping' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Invoice',
        'foreignKey' => 'shippingContactId',
        'foreign' => 'shippingContact',
      ),
      'invoicesBilling' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Invoice',
        'foreignKey' => 'billingContactId',
        'foreign' => 'billingContact',
      ),
      'salesOrdersShipping' => 
      array (
        'type' => 'hasMany',
        'entity' => 'SalesOrder',
        'foreignKey' => 'shippingContactId',
        'foreign' => 'shippingContact',
      ),
      'salesOrdersBilling' => 
      array (
        'type' => 'hasMany',
        'entity' => 'SalesOrder',
        'foreignKey' => 'billingContactId',
        'foreign' => 'billingContact',
      ),
      'quotesShipping' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Quote',
        'foreignKey' => 'shippingContactId',
        'foreign' => 'shippingContact',
      ),
      'quotesBilling' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Quote',
        'foreignKey' => 'billingContactId',
        'foreign' => 'billingContact',
      ),
      'tasksPrimary' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Task',
        'foreignKey' => 'contactId',
        'foreign' => 'contact',
      ),
      'documents' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Document',
        'relationName' => 'contactDocument',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'documentId',
        ),
        'foreign' => 'contacts',
      ),
      'originalLead' => 
      array (
        'type' => 'hasOne',
        'entity' => 'Lead',
        'foreignKey' => 'createdContactId',
        'foreign' => 'createdContact',
        'noJoin' => true,
      ),
      'portalUser' => 
      array (
        'type' => 'hasOne',
        'entity' => 'User',
        'foreignKey' => 'contactId',
        'foreign' => 'contact',
      ),
      'targetLists' => 
      array (
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'contactTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'targetListId',
        ),
        'foreign' => 'contacts',
        'additionalColumns' => 
        array (
          'optedOut' => 
          array (
            'type' => 'bool',
          ),
        ),
      ),
      'campaignLogRecords' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'CampaignLogRecord',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'campaign' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'foreign' => 'contacts',
        'noJoin' => true,
      ),
      'emails' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Email',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'calls' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Call',
        'relationName' => 'callContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'callId',
        ),
        'foreign' => 'contacts',
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'meetings' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Meeting',
        'relationName' => 'contactMeeting',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'meetingId',
        ),
        'foreign' => 'contacts',
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'cases' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Case',
        'relationName' => 'caseContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'caseId',
        ),
        'foreign' => 'contacts',
      ),
      'casesPrimary' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Case',
        'foreignKey' => 'contactId',
        'foreign' => 'contact',
      ),
      'opportunities' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Opportunity',
        'relationName' => 'contactOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'opportunityId',
        ),
        'foreign' => 'contacts',
        'additionalColumns' => 
        array (
          'role' => 
          array (
            'type' => 'varchar',
            'len' => 50,
          ),
        ),
      ),
      'accounts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Account',
        'relationName' => 'accountContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'accountId',
        ),
        'foreign' => 'contacts',
        'additionalColumns' => 
        array (
          'role' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'isInactive' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Contact',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'createdAt' => 
      array (
        'columns' => 
        array (
          0 => 'createdAt',
          1 => 'deleted',
        ),
        'key' => 'IDX_CREATED_AT',
      ),
      'firstName' => 
      array (
        'columns' => 
        array (
          0 => 'firstName',
          1 => 'deleted',
        ),
        'key' => 'IDX_FIRST_NAME',
      ),
      'name' => 
      array (
        'columns' => 
        array (
          0 => 'firstName',
          1 => 'lastName',
        ),
        'key' => 'IDX_NAME',
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
        'key' => 'IDX_ASSIGNED_USER',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'Document' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'publishDate' => 
      array (
        'type' => 'date',
        'fieldType' => 'date',
      ),
      'expirationDate' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'fileId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => false,
        'notNull' => false,
      ),
      'fileName' => 
      array (
        'type' => 'foreign',
        'relation' => 'file',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'accountsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'accounts',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'accountsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'folderId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'folderName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'folder',
        'foreign' => 'name',
      ),
      'contactsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'contactsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'leadsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'leadsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'opportunitiesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'opportunitiesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'file' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'fileId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'folder' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'DocumentFolder',
        'key' => 'folderId',
        'foreignKey' => 'id',
        'foreign' => 'documents',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Document',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'contacts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'contactDocument',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'documentId',
          1 => 'contactId',
        ),
        'foreign' => 'documents',
      ),
      'leads' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Lead',
        'relationName' => 'documentLead',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'documentId',
          1 => 'leadId',
        ),
        'foreign' => 'documents',
      ),
      'opportunities' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Opportunity',
        'relationName' => 'documentOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'documentId',
          1 => 'opportunityId',
        ),
        'foreign' => 'documents',
      ),
      'accounts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Account',
        'relationName' => 'accountDocument',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'documentId',
          1 => 'accountId',
        ),
        'foreign' => 'documents',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'DocumentFolder' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'childList' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'parentId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'parentName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'parent',
        'foreign' => 'name',
      ),
      'documentsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'documentsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'childrenIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'childrenNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'documents' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Document',
        'foreignKey' => 'folderId',
        'foreign' => 'folder',
      ),
      'children' => 
      array (
        'type' => 'hasMany',
        'entity' => 'DocumentFolder',
        'foreignKey' => 'parentId',
        'foreign' => 'parent',
      ),
      'parent' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'DocumentFolder',
        'key' => 'parentId',
        'foreignKey' => 'id',
        'foreign' => 'children',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'DocumentFolder',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'additionalTables' => 
    array (
      'DocumentFolderPath' => 
      array (
        'fields' => 
        array (
          'id' => 
          array (
            'type' => 'id',
            'dbType' => 'int',
            'len' => '11',
            'autoincrement' => true,
          ),
          'ascendorId' => 
          array (
            'type' => 'varchar',
            'len' => '100',
            'index' => true,
          ),
          'descendorId' => 
          array (
            'type' => 'varchar',
            'len' => '24',
            'index' => true,
          ),
        ),
      ),
    ),
    'collection' => 
    array (
      'order' => 'ASC',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'attemptCount' => 
      array (
        'type' => 'int',
        'default' => '0',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'sentAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'emailAddress' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'isTest' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'massEmailId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'massEmailName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'massEmail',
        'foreign' => 'name',
      ),
      'targetId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'target',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'targetType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'target',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'targetName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'target',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
    ),
    'relations' => 
    array (
      'target' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'targetId',
      ),
      'massEmail' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'MassEmail',
        'key' => 'massEmailId',
        'foreignKey' => 'id',
        'foreign' => 'queueItems',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Draft',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'language' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'publishDate' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'expirationDate' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'order' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'body' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'portalsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'portals',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'portalsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'categoriesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'categories',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'categoriesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'attachmentsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'orderBy' => 
        array (
          0 => 
          array (
            0 => 'createdAt',
            1 => 'ASC',
          ),
          1 => 
          array (
            0 => 'name',
            1 => 'ASC',
          ),
        ),
        'isLinkMultipleIdList' => true,
        'relation' => 'attachments',
        'isLinkStub' => false,
      ),
      'attachmentsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'isLinkStub' => false,
      ),
      'casesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'casesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'attachmentsTypes' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'categories' => 
      array (
        'type' => 'manyMany',
        'entity' => 'KnowledgeBaseCategory',
        'relationName' => 'knowledgeBaseArticleKnowledgeBaseCategory',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'knowledgeBaseArticleId',
          1 => 'knowledgeBaseCategoryId',
        ),
        'foreign' => 'articles',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'KnowledgeBaseArticle',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'portals' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Portal',
        'relationName' => 'knowledgeBaseArticlePortal',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'knowledgeBaseArticleId',
          1 => 'portalId',
        ),
        'foreign' => 'articles',
      ),
      'cases' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Case',
        'relationName' => 'caseKnowledgeBaseArticle',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'knowledgeBaseArticleId',
          1 => 'caseId',
        ),
        'foreign' => 'articles',
      ),
      'attachments' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
        'conditions' => 
        array (
          'OR' => 
          array (
            0 => 
            array (
              'field' => NULL,
            ),
            1 => 
            array (
              'field' => 'attachments',
            ),
          ),
        ),
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'order',
      'order' => 'ASC',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'order' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'childList' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'parentId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'parentName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'parent',
        'foreign' => 'name',
      ),
      'articlesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'articlesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'childrenIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'childrenNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'articles' => 
      array (
        'type' => 'manyMany',
        'entity' => 'KnowledgeBaseArticle',
        'relationName' => 'knowledgeBaseArticleKnowledgeBaseCategory',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'knowledgeBaseCategoryId',
          1 => 'knowledgeBaseArticleId',
        ),
        'foreign' => 'categories',
      ),
      'children' => 
      array (
        'type' => 'hasMany',
        'entity' => 'KnowledgeBaseCategory',
        'foreignKey' => 'parentId',
        'foreign' => 'parent',
      ),
      'parent' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'KnowledgeBaseCategory',
        'key' => 'parentId',
        'foreignKey' => 'id',
        'foreign' => 'children',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'KnowledgeBaseCategory',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'additionalTables' => 
    array (
      'KnowledgeBaseCategoryPath' => 
      array (
        'fields' => 
        array (
          'id' => 
          array (
            'type' => 'id',
            'dbType' => 'int',
            'len' => '11',
            'autoincrement' => true,
          ),
          'ascendorId' => 
          array (
            'type' => 'varchar',
            'len' => '100',
            'index' => true,
          ),
          'descendorId' => 
          array (
            'type' => 'varchar',
            'len' => '24',
            'index' => true,
          ),
        ),
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'parentId',
      'order' => 'ASC',
    ),
  ),
  'Lead' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'select' => 'TRIM(CONCAT(IFNULL(lead.first_name, \'\'), \' \', IFNULL(lead.last_name, \'\')))',
        'where' => 
        array (
          'LIKE' => '(lead.first_name LIKE {value} OR lead.last_name LIKE {value} OR CONCAT(lead.first_name, \' \', lead.last_name) LIKE {value} OR CONCAT(lead.last_name, \' \', lead.first_name) LIKE {value})',
          '=' => '(lead.first_name = {value} OR lead.last_name = {value} OR CONCAT(lead.first_name, \' \', lead.last_name) = {value} OR CONCAT(lead.last_name, \' \', lead.first_name) = {value})',
        ),
        'orderBy' => 'lead.first_name {direction}, lead.last_name',
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'salutationName' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'firstName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
        'fieldType' => 'varchar',
      ),
      'lastName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
        'fieldType' => 'varchar',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'New',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'source' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'industry' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'opportunityAmount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'lead.opportunity_amount * opportunityAmountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'opportunityAmountCurrencyRate',
              2 => 
              array (
                'opportunityAmountCurrencyRate.id:' => 'opportunityAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'website' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'addressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'fieldType' => 'text',
      ),
      'addressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'addressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'addressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'addressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar',
      ),
      'emailAddress' => 
      array (
        'type' => 'email',
        'notStorable' => true,
        'fieldType' => 'email',
        'select' => 
        array (
          'sql' => 'emailAddresses.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => 'emailAddressLeadForeign.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'EntityEmailAddress',
              1 => 'emailAddressLeadForeignMiddle',
              2 => 
              array (
                'emailAddressLeadForeignMiddle.entityId:' => '{alias}.id',
                'emailAddressLeadForeignMiddle.primary' => 1,
              ),
            ),
            1 => 
            array (
              0 => 'EmailAddress',
              1 => 'emailAddressLeadForeign',
              2 => 
              array (
                'emailAddressLeadForeign.id:' => 'emailAddressLeadForeignMiddle.emailAddressId',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          'LIKE' => 'lead.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Lead\' AND
                                    email_address.deleted = 0 AND email_address.lower LIKE {value}
                            )',
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower = {value}',
            'distinct' => true,
          ),
          '<>' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower <> {value}',
            'distinct' => true,
          ),
          'IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower IN {value}',
            'distinct' => true,
          ),
          'NOT IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower NOT IN {value}',
            'distinct' => true,
          ),
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower IS NOT NULL',
            'distinct' => true,
          ),
        ),
        'orderBy' => 
        array (
          'sql' => 'emailAddresses.lower {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
      ),
      'phoneNumber' => 
      array (
        'type' => 'phone',
        'notStorable' => true,
        'fieldType' => 'phone',
        'select' => 
        array (
          'sql' => 'phoneNumbers.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => 'phoneNumberLeadForeign.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'EntityPhoneNumber',
              1 => 'phoneNumberLeadForeignMiddle',
              2 => 
              array (
                'phoneNumberLeadForeignMiddle.entityId:' => '{alias}.id',
                'phoneNumberLeadForeignMiddle.primary' => 1,
              ),
            ),
            1 => 
            array (
              0 => 'PhoneNumber',
              1 => 'phoneNumberLeadForeign',
              2 => 
              array (
                'phoneNumberLeadForeign.id:' => 'phoneNumberLeadForeignMiddle.phoneNumberId',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          'LIKE' => 'lead.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Lead\' AND
                                    phone_number.deleted = 0 AND phone_number.name LIKE {value}
                            )',
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name = {value}',
            'distinct' => true,
          ),
          '<>' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name <> {value}',
            'distinct' => true,
          ),
          'IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name IN {value}',
            'distinct' => true,
          ),
          'NOT IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name NOT IN {value}',
            'distinct' => true,
          ),
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name IS NOT NULL',
            'distinct' => true,
          ),
        ),
        'orderBy' => 
        array (
          'sql' => 'phoneNumbers.name {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
      ),
      'doNotCall' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'convertedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'accountName' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'acceptanceStatus' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'acceptanceStatusMeetings' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'relation' => 'meetings',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'acceptanceStatusCalls' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'relation' => 'calls',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'targetListIsOptedOut' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'opportunityAmountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'addressMap' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map',
      ),
      'emailAddressIsOptedOut' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => 'emailAddresses.opt_out',
        'where' => 
        array (
          '= TRUE' => 
          array (
            'sql' => 'emailAddresses.opt_out = true AND emailAddresses.opt_out IS NOT NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
          '= FALSE' => 
          array (
            'sql' => 'emailAddresses.opt_out = false OR emailAddresses.opt_out IS NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
        ),
        'orderBy' => 'emailAddresses.opt_out {direction}',
        'default' => false,
      ),
      'phoneNumberIsOptedOut' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => 'phoneNumbers.opt_out',
        'where' => 
        array (
          '= TRUE' => 
          array (
            'sql' => 'phoneNumbers.opt_out = true AND phoneNumbers.opt_out IS NOT NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
          '= FALSE' => 
          array (
            'sql' => 'phoneNumbers.opt_out = false OR phoneNumbers.opt_out IS NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
        ),
        'orderBy' => 'phoneNumbers.opt_out {direction}',
        'default' => false,
      ),
      'opportunityAmountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'lead.opportunity_amount * opportunityAmountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'opportunityAmountCurrencyRate',
              2 => 
              array (
                'opportunityAmountCurrencyRate.id:' => 'opportunityAmountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.opportunity_amount * opportunityAmountCurrencyRateLeadForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'opportunityAmountCurrencyRateLeadForeign',
              2 => 
              array (
                'opportunityAmountCurrencyRateLeadForeign.id:' => '{alias}.opportunityAmountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'lead.opportunity_amount * opportunityAmountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'opportunityAmountCurrencyRate',
                2 => 
                array (
                  'opportunityAmountCurrencyRate.id:' => 'opportunityAmountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'lead.opportunity_amount * opportunityAmountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'opportunityAmountCurrencyRate',
                2 => 
                array (
                  'opportunityAmountCurrencyRate.id:' => 'opportunityAmountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'lead.opportunity_amount * opportunityAmountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'opportunityAmountCurrencyRate',
                2 => 
                array (
                  'opportunityAmountCurrencyRate.id:' => 'opportunityAmountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'lead.opportunity_amount * opportunityAmountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'opportunityAmountCurrencyRate',
                2 => 
                array (
                  'opportunityAmountCurrencyRate.id:' => 'opportunityAmountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'lead.opportunity_amount * opportunityAmountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'opportunityAmountCurrencyRate',
                2 => 
                array (
                  'opportunityAmountCurrencyRate.id:' => 'opportunityAmountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'lead.opportunity_amount * opportunityAmountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'opportunityAmountCurrencyRate',
                2 => 
                array (
                  'opportunityAmountCurrencyRate.id:' => 'opportunityAmountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'lead.opportunity_amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'lead.opportunity_amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'opportunityAmountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'opportunityAmountCurrencyRate',
              2 => 
              array (
                'opportunityAmountCurrencyRate.id:' => 'opportunityAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'emailAddressData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'phoneNumberData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'phoneNumberNumeric' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
        'where' => 
        array (
          'LIKE' => 'lead.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Lead\' AND
                                    phone_number.deleted = 0 AND phone_number.numeric LIKE {value}
                            )',
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric = {value}',
            'distinct' => true,
          ),
          '<>' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric <> {value}',
            'distinct' => true,
          ),
          'IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric IN {value}',
            'distinct' => true,
          ),
          'NOT IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric NOT IN {value}',
            'distinct' => true,
          ),
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric IS NOT NULL',
            'distinct' => true,
          ),
        ),
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'campaignId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'campaignName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'campaign',
        'foreign' => 'name',
      ),
      'createdAccountId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdAccountName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdAccount',
        'foreign' => 'name',
      ),
      'createdContactId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdContactName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdContact',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdOpportunityId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdOpportunityName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdOpportunity',
        'foreign' => 'name',
      ),
      'targetListsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'targetLists',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'targetListsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'targetListId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'targetList',
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notStorable' => true,
        'notNull' => false,
      ),
      'targetListName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'googleContactsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'googleContactsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'documentsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'documentsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'campaignLogRecordsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'campaignLogRecordsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'emailsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'emailsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'casesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'casesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'emailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'emailAddressId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Lead',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'phoneNumbers' => 
      array (
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'phoneNumberId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Lead',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'googleContacts' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'GoogleContactsPair',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'documents' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Document',
        'relationName' => 'documentLead',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'leadId',
          1 => 'documentId',
        ),
        'foreign' => 'leads',
      ),
      'targetLists' => 
      array (
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'leadTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'leadId',
          1 => 'targetListId',
        ),
        'foreign' => 'leads',
        'additionalColumns' => 
        array (
          'optedOut' => 
          array (
            'type' => 'bool',
          ),
        ),
      ),
      'campaignLogRecords' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'CampaignLogRecord',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'campaign' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'foreign' => 'leads',
        'noJoin' => true,
      ),
      'createdOpportunity' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Opportunity',
        'key' => 'createdOpportunityId',
        'foreignKey' => 'id',
        'foreign' => 'originalLead',
        'noJoin' => true,
      ),
      'createdContact' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Contact',
        'key' => 'createdContactId',
        'foreignKey' => 'id',
        'foreign' => 'originalLead',
        'noJoin' => true,
      ),
      'createdAccount' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'createdAccountId',
        'foreignKey' => 'id',
        'foreign' => 'originalLead',
        'noJoin' => true,
      ),
      'emails' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Email',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'cases' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Case',
        'foreignKey' => 'leadId',
        'foreign' => 'lead',
      ),
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'calls' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Call',
        'relationName' => 'callLead',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'leadId',
          1 => 'callId',
        ),
        'foreign' => 'leads',
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'meetings' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Meeting',
        'relationName' => 'leadMeeting',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'leadId',
          1 => 'meetingId',
        ),
        'foreign' => 'leads',
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Lead',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'firstName' => 
      array (
        'columns' => 
        array (
          0 => 'firstName',
          1 => 'deleted',
        ),
        'key' => 'IDX_FIRST_NAME',
      ),
      'name' => 
      array (
        'columns' => 
        array (
          0 => 'firstName',
          1 => 'lastName',
        ),
        'key' => 'IDX_NAME',
      ),
      'status' => 
      array (
        'columns' => 
        array (
          0 => 'status',
          1 => 'deleted',
        ),
        'key' => 'IDX_STATUS',
      ),
      'createdAt' => 
      array (
        'columns' => 
        array (
          0 => 'createdAt',
          1 => 'deleted',
        ),
        'key' => 'IDX_CREATED_AT',
      ),
      'createdAtStatus' => 
      array (
        'columns' => 
        array (
          0 => 'createdAt',
          1 => 'status',
        ),
        'key' => 'IDX_CREATED_AT_STATUS',
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
        'key' => 'IDX_ASSIGNED_USER',
      ),
      'assignedUserStatus' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'status',
        ),
        'key' => 'IDX_ASSIGNED_USER_STATUS',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Pending',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'storeSentEmails' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'optOutEntirely' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'fromAddress' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'fromName' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'replyToAddress' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'replyToName' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'startAt' => 
      array (
        'type' => 'datetime',
        'fieldType' => 'datetime',
      ),
      'smtpAccount' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'base',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'emailTemplateId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'emailTemplateName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'emailTemplate',
        'foreign' => 'name',
      ),
      'campaignId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'campaignName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'campaign',
        'foreign' => 'name',
      ),
      'targetListsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'targetLists',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'targetListsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'excludingTargetListsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'excludingTargetLists',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'excludingTargetListsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'inboundEmailId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'inboundEmailName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'inboundEmail',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'queueItemsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'queueItemsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'queueItems' => 
      array (
        'type' => 'hasMany',
        'entity' => 'EmailQueueItem',
        'foreignKey' => 'massEmailId',
        'foreign' => 'massEmail',
      ),
      'inboundEmail' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'InboundEmail',
        'key' => 'inboundEmailId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'excludingTargetLists' => 
      array (
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'massEmailTargetListExcluding',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'massEmailId',
          1 => 'targetListId',
        ),
        'foreign' => 'massEmailsExcluding',
      ),
      'targetLists' => 
      array (
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'massEmailTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'massEmailId',
          1 => 'targetListId',
        ),
        'foreign' => 'massEmails',
      ),
      'campaign' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'foreign' => 'massEmails',
      ),
      'emailTemplate' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'EmailTemplate',
        'key' => 'emailTemplateId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Planned',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'dateStart' => 
      array (
        'type' => 'datetime',
        'fieldType' => 'datetime',
      ),
      'dateEnd' => 
      array (
        'type' => 'datetime',
        'fieldType' => 'datetime',
      ),
      'isAllDay' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'duration' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'default' => '3600',
        'select' => 'TIMESTAMPDIFF(SECOND, meeting.date_start, meeting.date_end)',
        'orderBy' => 'duration {direction}',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'reminders' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray',
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'acceptanceStatus' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'where' => 
        array (
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 'users',
              1 => 'contacts',
              2 => 'leads',
            ),
            'sql' => 'contactsMiddle.status = {value} OR leadsMiddle.status = {value} OR usersMiddle.status = {value}',
            'distinct' => true,
          ),
          '<>' => 'meeting.id NOT IN (SELECT meeting_id FROM contact_meeting WHERE deleted = 0 AND status = {value}) AND meeting.id NOT IN (SELECT meeting_id FROM meeting_user WHERE deleted = 0 AND status = {value}) AND meeting.id NOT IN (SELECT meeting_id FROM lead_meeting WHERE deleted = 0 AND status = {value})',
          'IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 'users',
              1 => 'leads',
              2 => 'contacts',
            ),
            'sql' => 'contactsMiddle.status IN {value} OR leadsMiddle.status IN {value} OR usersMiddle.status IN {value}',
            'distinct' => true,
          ),
          'NOT IN' => 'meeting.id NOT IN (SELECT meeting_id FROM contact_meeting WHERE deleted = 0 AND status IN {value}) AND meeting.id NOT IN (SELECT meeting_id FROM meeting_user WHERE deleted = 0 AND status IN {value}) AND meeting.id NOT IN (SELECT meeting_id FROM lead_meeting WHERE deleted = 0 AND status IN {value})',
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 'users',
              1 => 'contacts',
              2 => 'leads',
            ),
            'sql' => 'contactsMiddle.status IS NULL AND leadsMiddle.status IS NULL AND usersMiddle.status IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 'meeting.id NOT IN (SELECT meeting_id FROM contact_meeting WHERE deleted = 0 AND status IS NULL) OR meeting.id NOT IN (SELECT meeting_id FROM meeting_user WHERE deleted = 0 AND status IS NULL) OR meeting.id NOT IN (SELECT meeting_id FROM lead_meeting WHERE deleted = 0 AND status IS NULL)',
        ),
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'googleCalendarEventId' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'dateStartDate' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'dateEndDate' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'parentId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'parent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'parent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
      'accountId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'usersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'users',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'name',
        'isLinkStub' => false,
      ),
      'usersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'usersColumns' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => 
        array (
          'status' => 'acceptanceStatus',
        ),
        'attributeRole' => 'columnsMap',
      ),
      'contactsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'contacts',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'name',
        'isLinkStub' => false,
      ),
      'contactsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'contactsColumns' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => 
        array (
          'status' => 'acceptanceStatus',
        ),
        'attributeRole' => 'columnsMap',
      ),
      'leadsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'leads',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'name',
        'isLinkStub' => false,
      ),
      'leadsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'leadsColumns' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => 
        array (
          'status' => 'acceptanceStatus',
        ),
        'attributeRole' => 'columnsMap',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'googleCalendarId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'googleCalendarName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'googleCalendar',
        'foreign' => 'name',
      ),
    ),
    'relations' => 
    array (
      'googleCalendar' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'GoogleCalendar',
        'key' => 'googleCalendarId',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true,
      ),
      'parent' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'parentId',
      ),
      'leads' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Lead',
        'relationName' => 'leadMeeting',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'meetingId',
          1 => 'leadId',
        ),
        'foreign' => 'meetings',
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'contacts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'contactMeeting',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'meetingId',
          1 => 'contactId',
        ),
        'foreign' => 'meetings',
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'users' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'meetingUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'meetingId',
          1 => 'userId',
        ),
        'foreign' => 'meetings',
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Meeting',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'dateStartStatus' => 
      array (
        'columns' => 
        array (
          0 => 'dateStart',
          1 => 'status',
        ),
        'key' => 'IDX_DATE_START_STATUS',
      ),
      'dateStart' => 
      array (
        'columns' => 
        array (
          0 => 'dateStart',
          1 => 'deleted',
        ),
        'key' => 'IDX_DATE_START',
      ),
      'status' => 
      array (
        'columns' => 
        array (
          0 => 'status',
          1 => 'deleted',
        ),
        'key' => 'IDX_STATUS',
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
        'key' => 'IDX_ASSIGNED_USER',
      ),
      'assignedUserStatus' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'status',
        ),
        'key' => 'IDX_ASSIGNED_USER_STATUS',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'dateStart',
      'order' => 'DESC',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'amount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'opportunity.amount * amountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'amountWeightedConverted' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'notStorable' => true,
        'select' => 
        array (
          'sql' => 'opportunity.amount * amountCurrencyRate.rate * opportunity.probability / 100',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'sql' => 'amountWeightedConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => '(opportunity.amount * amountCurrencyRate.rate * opportunity.probability / 100) = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => '(opportunity.amount * amountCurrencyRate.rate * opportunity.probability / 100) < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => '(opportunity.amount * amountCurrencyRate.rate * opportunity.probability / 100) > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => '(opportunity.amount * amountCurrencyRate.rate * opportunity.probability / 100) <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => '(opportunity.amount * amountCurrencyRate.rate * opportunity.probability / 100) >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => '(opportunity.amount * amountCurrencyRate.rate * opportunity.probability / 100) <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'opportunity.amount IS NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'opportunity.amount IS NOT NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
        ),
        'fieldType' => 'float',
      ),
      'stage' => 
      array (
        'type' => 'varchar',
        'default' => 'entrante',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'lastStage' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'probability' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'leadSource' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'closeDate' => 
      array (
        'type' => 'date',
        'fieldType' => 'date',
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'contactRole' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'where' => 
        array (
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 'contacts',
            ),
            'sql' => 'contactsMiddle.role = {value}',
            'distinct' => true,
          ),
          '<>' => 'opportunity.id NOT IN (SELECT opportunity_id FROM contact_opportunity WHERE deleted = 0 AND role = {value})',
          'IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 'contacts',
            ),
            'sql' => 'contactsMiddle.role IN {value}',
            'distinct' => true,
          ),
          'NOT IN' => 'opportunity.id NOT IN (SELECT opportunity_id FROM contact_opportunity WHERE deleted = 0 AND role IN {value})',
          'LIKE' => 
          array (
            'leftJoins' => 
            array (
              0 => 'contacts',
            ),
            'sql' => 'contactsMiddle.role LIKE {value}',
            'distinct' => true,
          ),
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 'contacts',
            ),
            'sql' => 'contactsMiddle.role IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 'opportunity.id NOT IN (SELECT opportunity_id FROM contact_opportunity WHERE deleted = 0 AND role IS NULL)',
        ),
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'itemList' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray',
      ),
      'kw' => 
      array (
        'type' => 'float',
        'fieldType' => 'float',
      ),
      'origen' => 
      array (
        'type' => 'varchar',
        'default' => 'Cambaceo',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'probabilidad' => 
      array (
        'type' => 'varchar',
        'default' => 'D1',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'documentos' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'tarifa' => 
      array (
        'type' => 'varchar',
        'default' => 'Domestico',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'tipoPago' => 
      array (
        'type' => 'varchar',
        'default' => 'Contado',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'financiamento' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'consumoPromedio' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'subidaDeArchivos' => 
      array (
        'type' => 'varchar',
        'default' => 'https://script.google.com/macros/s/AKfycbzOK6BkAo7a_QAiSIkI1tNoX1vqJUyO2oBqz_2dzA/exec',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'amountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'direccionStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'fieldType' => 'text',
      ),
      'direccionCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'direccionState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'direccionCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'direccionPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar',
      ),
      'direccionMap' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map',
      ),
      'amountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'opportunity.amount * amountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.amount * amountCurrencyRateOpportunityForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRateOpportunityForeign',
              2 => 
              array (
                'amountCurrencyRateOpportunityForeign.id:' => '{alias}.amountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'opportunity.amount * amountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'opportunity.amount * amountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'opportunity.amount * amountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'opportunity.amount * amountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'opportunity.amount * amountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'opportunity.amount * amountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'opportunity.amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'opportunity.amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'amountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'accountId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'contactsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'contacts',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'name',
        'isLinkStub' => false,
      ),
      'contactsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'contactsColumns' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => 
        array (
          'role' => 'opportunityRole',
        ),
        'attributeRole' => 'columnsMap',
      ),
      'campaignId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'campaignName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'campaign',
        'foreign' => 'name',
      ),
      'originalLeadId' => 
      array (
        'type' => 'varchar',
        'index' => 'originalLead',
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notStorable' => true,
      ),
      'originalLeadName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'contacts1Ids' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'contacts1',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'contacts1Names' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'contacts12Ids' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'contacts12',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'contacts12Names' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'aisladosIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'aislados',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'aisladosNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'instalacionsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'instalacions',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'instalacionsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'aCCsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'aCCs',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'aCCsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'reciboId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => false,
        'notNull' => false,
      ),
      'reciboName' => 
      array (
        'type' => 'foreign',
        'relation' => 'recibo',
        'foreign' => 'name',
      ),
      'cotizacionId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => false,
        'notNull' => false,
      ),
      'cotizacionName' => 
      array (
        'type' => 'foreign',
        'relation' => 'cotizacion',
        'foreign' => 'name',
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'invoicesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'invoicesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'salesOrdersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'salesOrdersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'quotesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'quotesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'itemsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'itemsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'documentsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'documentsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'emailsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'emailsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'recibo' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'reciboId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'cotizacion' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'cotizacionId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'aCCs' => 
      array (
        'type' => 'manyMany',
        'entity' => 'ACC',
        'relationName' => 'aCCOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'opportunityId',
          1 => 'aCCId',
        ),
        'foreign' => 'opportunities',
      ),
      'instalacions' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Instalacion',
        'relationName' => 'instalacionOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'opportunityId',
          1 => 'instalacionId',
        ),
        'foreign' => 'opportunities',
      ),
      'aislados' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Aislado',
        'relationName' => 'aisladoOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'opportunityId',
          1 => 'aisladoId',
        ),
        'foreign' => 'opportunities',
      ),
      'contacts12' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Contact',
        'foreignKey' => 'opportunityId',
        'foreign' => 'opportunity',
      ),
      'contacts1' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'oppContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'opportunityId',
          1 => 'contactId',
        ),
        'foreign' => 'opportunities1',
      ),
      'invoices' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Invoice',
        'foreignKey' => 'opportunityId',
        'foreign' => 'opportunity',
      ),
      'salesOrders' => 
      array (
        'type' => 'hasMany',
        'entity' => 'SalesOrder',
        'foreignKey' => 'opportunityId',
        'foreign' => 'opportunity',
      ),
      'quotes' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Quote',
        'foreignKey' => 'opportunityId',
        'foreign' => 'opportunity',
      ),
      'items' => 
      array (
        'type' => 'hasMany',
        'entity' => 'OpportunityItem',
        'foreignKey' => 'opportunityId',
        'foreign' => 'opportunity',
      ),
      'originalLead' => 
      array (
        'type' => 'hasOne',
        'entity' => 'Lead',
        'foreignKey' => 'createdOpportunityId',
        'foreign' => 'createdOpportunity',
        'noJoin' => true,
      ),
      'campaign' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'foreign' => 'opportunities',
        'noJoin' => true,
      ),
      'documents' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Document',
        'relationName' => 'documentOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'opportunityId',
          1 => 'documentId',
        ),
        'foreign' => 'opportunities',
      ),
      'emails' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Email',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'calls' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Call',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'meetings' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Meeting',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'contacts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'contactOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'opportunityId',
          1 => 'contactId',
        ),
        'foreign' => 'opportunities',
        'additionalColumns' => 
        array (
          'role' => 
          array (
            'type' => 'varchar',
            'len' => 50,
          ),
        ),
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => 'opportunities',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Opportunity',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'stage' => 
      array (
        'columns' => 
        array (
          0 => 'stage',
          1 => 'deleted',
        ),
        'key' => 'IDX_STAGE',
      ),
      'lastStage' => 
      array (
        'columns' => 
        array (
          0 => 'lastStage',
        ),
        'key' => 'IDX_LAST_STAGE',
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
        'key' => 'IDX_ASSIGNED_USER',
      ),
      'createdAt' => 
      array (
        'columns' => 
        array (
          0 => 'createdAt',
          1 => 'deleted',
        ),
        'key' => 'IDX_CREATED_AT',
      ),
      'createdAtStage' => 
      array (
        'columns' => 
        array (
          0 => 'createdAt',
          1 => 'stage',
        ),
        'key' => 'IDX_CREATED_AT_STAGE',
      ),
      'assignedUserStage' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'stage',
        ),
        'key' => 'IDX_ASSIGNED_USER_STAGE',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'probabilidad',
      'order' => 'DESC',
    ),
  ),
  'Reminder' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'remindAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'index' => true,
        'fieldType' => 'datetime',
      ),
      'startAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'index' => true,
        'fieldType' => 'datetime',
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'index' => true,
        'default' => 'Popup',
        'fieldType' => 'varchar',
      ),
      'seconds' => 
      array (
        'type' => 'int',
        'default' => '0',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'entityType' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'entityId' => 
      array (
        'type' => 'varchar',
        'len' => 50,
        'fieldType' => 'varchar',
      ),
      'userId' => 
      array (
        'type' => 'varchar',
        'len' => 50,
        'fieldType' => 'varchar',
      ),
      'isSubmitted' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
    ),
    'relations' => 
    array (
    ),
    'collection' => 
    array (
      'orderBy' => 'remindAt',
      'order' => 'DESC',
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'select' => 'TRIM(CONCAT(IFNULL(target.first_name, \'\'), \' \', IFNULL(target.last_name, \'\')))',
        'where' => 
        array (
          'LIKE' => '(target.first_name LIKE {value} OR target.last_name LIKE {value} OR CONCAT(target.first_name, \' \', target.last_name) LIKE {value} OR CONCAT(target.last_name, \' \', target.first_name) LIKE {value})',
          '=' => '(target.first_name = {value} OR target.last_name = {value} OR CONCAT(target.first_name, \' \', target.last_name) = {value} OR CONCAT(target.last_name, \' \', target.first_name) = {value})',
        ),
        'orderBy' => 'target.first_name {direction}, target.last_name',
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'salutationName' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'firstName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
        'fieldType' => 'varchar',
      ),
      'lastName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
        'fieldType' => 'varchar',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'accountName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar',
      ),
      'website' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'addressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'fieldType' => 'text',
      ),
      'addressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'addressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'addressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'addressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar',
      ),
      'emailAddress' => 
      array (
        'type' => 'email',
        'notStorable' => true,
        'fieldType' => 'email',
        'select' => 
        array (
          'sql' => 'emailAddresses.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => 'emailAddressTargetForeign.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'EntityEmailAddress',
              1 => 'emailAddressTargetForeignMiddle',
              2 => 
              array (
                'emailAddressTargetForeignMiddle.entityId:' => '{alias}.id',
                'emailAddressTargetForeignMiddle.primary' => 1,
              ),
            ),
            1 => 
            array (
              0 => 'EmailAddress',
              1 => 'emailAddressTargetForeign',
              2 => 
              array (
                'emailAddressTargetForeign.id:' => 'emailAddressTargetForeignMiddle.emailAddressId',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          'LIKE' => 'target.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Target\' AND
                                    email_address.deleted = 0 AND email_address.lower LIKE {value}
                            )',
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower = {value}',
            'distinct' => true,
          ),
          '<>' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower <> {value}',
            'distinct' => true,
          ),
          'IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower IN {value}',
            'distinct' => true,
          ),
          'NOT IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower NOT IN {value}',
            'distinct' => true,
          ),
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple',
              ),
            ),
            'sql' => 'emailAddressesMultiple.lower IS NOT NULL',
            'distinct' => true,
          ),
        ),
        'orderBy' => 
        array (
          'sql' => 'emailAddresses.lower {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
      ),
      'phoneNumber' => 
      array (
        'type' => 'phone',
        'notStorable' => true,
        'fieldType' => 'phone',
        'select' => 
        array (
          'sql' => 'phoneNumbers.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => 'phoneNumberTargetForeign.name',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'EntityPhoneNumber',
              1 => 'phoneNumberTargetForeignMiddle',
              2 => 
              array (
                'phoneNumberTargetForeignMiddle.entityId:' => '{alias}.id',
                'phoneNumberTargetForeignMiddle.primary' => 1,
              ),
            ),
            1 => 
            array (
              0 => 'PhoneNumber',
              1 => 'phoneNumberTargetForeign',
              2 => 
              array (
                'phoneNumberTargetForeign.id:' => 'phoneNumberTargetForeignMiddle.phoneNumberId',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          'LIKE' => 'target.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Target\' AND
                                    phone_number.deleted = 0 AND phone_number.name LIKE {value}
                            )',
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name = {value}',
            'distinct' => true,
          ),
          '<>' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name <> {value}',
            'distinct' => true,
          ),
          'IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name IN {value}',
            'distinct' => true,
          ),
          'NOT IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name NOT IN {value}',
            'distinct' => true,
          ),
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple',
              ),
            ),
            'sql' => 'phoneNumbersMultiple.name IS NOT NULL',
            'distinct' => true,
          ),
        ),
        'orderBy' => 
        array (
          'sql' => 'phoneNumbers.name {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => 
              array (
                'primary' => 1,
              ),
            ),
          ),
        ),
      ),
      'doNotCall' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'addressMap' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map',
      ),
      'emailAddressIsOptedOut' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => 'emailAddresses.opt_out',
        'where' => 
        array (
          '= TRUE' => 
          array (
            'sql' => 'emailAddresses.opt_out = true AND emailAddresses.opt_out IS NOT NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
          '= FALSE' => 
          array (
            'sql' => 'emailAddresses.opt_out = false OR emailAddresses.opt_out IS NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
        ),
        'orderBy' => 'emailAddresses.opt_out {direction}',
        'default' => false,
      ),
      'phoneNumberIsOptedOut' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => 'phoneNumbers.opt_out',
        'where' => 
        array (
          '= TRUE' => 
          array (
            'sql' => 'phoneNumbers.opt_out = true AND phoneNumbers.opt_out IS NOT NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
          '= FALSE' => 
          array (
            'sql' => 'phoneNumbers.opt_out = false OR phoneNumbers.opt_out IS NULL',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => 
                array (
                  'primary' => 1,
                ),
              ),
            ),
          ),
        ),
        'orderBy' => 'phoneNumbers.opt_out {direction}',
        'default' => false,
      ),
      'emailAddressData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'phoneNumberData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'phoneNumberNumeric' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
        'where' => 
        array (
          'LIKE' => 'target.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Target\' AND
                                    phone_number.deleted = 0 AND phone_number.numeric LIKE {value}
                            )',
          '=' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric = {value}',
            'distinct' => true,
          ),
          '<>' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric <> {value}',
            'distinct' => true,
          ),
          'IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric IN {value}',
            'distinct' => true,
          ),
          'NOT IN' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric NOT IN {value}',
            'distinct' => true,
          ),
          'IS NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric IS NULL',
            'distinct' => true,
          ),
          'IS NOT NULL' => 
          array (
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'phoneNumbers',
                1 => 'phoneNumbersNumericMultiple',
              ),
            ),
            'sql' => 'phoneNumbersNumericMultiple.numeric IS NOT NULL',
            'distinct' => true,
          ),
        ),
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
    ),
    'relations' => 
    array (
      'emailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'emailAddressId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Target',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'phoneNumbers' => 
      array (
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'phoneNumberId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Target',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Target',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'firstName' => 
      array (
        'columns' => 
        array (
          0 => 'firstName',
          1 => 'deleted',
        ),
        'key' => 'IDX_FIRST_NAME',
      ),
      'name' => 
      array (
        'columns' => 
        array (
          0 => 'firstName',
          1 => 'lastName',
        ),
        'key' => 'IDX_NAME',
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
        'key' => 'IDX_ASSIGNED_USER',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'entryCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'optedOutCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'includingActionList' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'excludingActionList' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'targetStatus' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'isOptedOut' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'syncWithReportsEnabled' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'syncWithReportsUnlink' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'campaignsId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'campaigns',
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'campaignsName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
      ),
      'syncWithReportsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'syncWithReports',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'syncWithReportsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'usersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'usersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'leadsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'leadsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'contactsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'contactsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'accountsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'accountsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'massEmailsExcludingIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'massEmailsExcludingNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'campaignsExcludingIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'campaignsExcludingNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'massEmailsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'massEmailsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'campaignsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => false,
      ),
      'campaignsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => false,
      ),
    ),
    'relations' => 
    array (
      'syncWithReports' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Report',
        'relationName' => 'reportTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'targetListId',
          1 => 'reportId',
        ),
        'foreign' => 'syncTargetLists',
      ),
      'users' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'targetListUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'targetListId',
          1 => 'userId',
        ),
        'foreign' => 'targetLists',
        'additionalColumns' => 
        array (
          'optedOut' => 
          array (
            'type' => 'bool',
          ),
        ),
      ),
      'leads' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Lead',
        'relationName' => 'leadTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'targetListId',
          1 => 'leadId',
        ),
        'foreign' => 'targetLists',
        'additionalColumns' => 
        array (
          'optedOut' => 
          array (
            'type' => 'bool',
          ),
        ),
      ),
      'contacts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'contactTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'targetListId',
          1 => 'contactId',
        ),
        'foreign' => 'targetLists',
        'additionalColumns' => 
        array (
          'optedOut' => 
          array (
            'type' => 'bool',
          ),
        ),
      ),
      'accounts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Account',
        'relationName' => 'accountTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'targetListId',
          1 => 'accountId',
        ),
        'foreign' => 'targetLists',
        'additionalColumns' => 
        array (
          'optedOut' => 
          array (
            'type' => 'bool',
          ),
        ),
      ),
      'massEmailsExcluding' => 
      array (
        'type' => 'manyMany',
        'entity' => 'MassEmail',
        'relationName' => 'massEmailTargetListExcluding',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'targetListId',
          1 => 'massEmailId',
        ),
        'foreign' => 'excludingTargetLists',
      ),
      'campaignsExcluding' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Campaign',
        'relationName' => 'campaignTargetListExcluding',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'targetListId',
          1 => 'campaignId',
        ),
        'foreign' => 'excludingTargetLists',
      ),
      'massEmails' => 
      array (
        'type' => 'manyMany',
        'entity' => 'MassEmail',
        'relationName' => 'massEmailTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'targetListId',
          1 => 'massEmailId',
        ),
        'foreign' => 'targetLists',
      ),
      'campaigns' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Campaign',
        'relationName' => 'campaignTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'targetListId',
          1 => 'campaignId',
        ),
        'foreign' => 'targetLists',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'TargetList',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'createdAt' => 
      array (
        'columns' => 
        array (
          0 => 'createdAt',
          1 => 'deleted',
        ),
        'key' => 'IDX_CREATED_AT',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Not Started',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'priority' => 
      array (
        'type' => 'varchar',
        'default' => 'Normal',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'dateStart' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'dateEnd' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'dateStartDate' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'dateEndDate' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'dateCompleted' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'isOverdue' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'reminders' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray',
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'parentId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'parent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'parent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
      'accountId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'contactId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'contactName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'contact',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'attachmentsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'orderBy' => 
        array (
          0 => 
          array (
            0 => 'createdAt',
            1 => 'ASC',
          ),
          1 => 
          array (
            0 => 'name',
            1 => 'ASC',
          ),
        ),
        'isLinkMultipleIdList' => true,
        'relation' => 'attachments',
        'isLinkStub' => false,
      ),
      'attachmentsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'isLinkStub' => false,
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'attachmentsTypes' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'contact' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Contact',
        'key' => 'contactId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'parent' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'parentId',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Task',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => 'tasks',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'attachments' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
        'conditions' => 
        array (
          'OR' => 
          array (
            0 => 
            array (
              'field' => NULL,
            ),
            1 => 
            array (
              'field' => 'attachments',
            ),
          ),
        ),
      ),
    ),
    'indexes' => 
    array (
      'dateStartStatus' => 
      array (
        'columns' => 
        array (
          0 => 'dateStart',
          1 => 'status',
        ),
        'key' => 'IDX_DATE_START_STATUS',
      ),
      'dateEndStatus' => 
      array (
        'columns' => 
        array (
          0 => 'dateEnd',
          1 => 'status',
        ),
        'key' => 'IDX_DATE_END_STATUS',
      ),
      'dateStart' => 
      array (
        'columns' => 
        array (
          0 => 'dateStart',
          1 => 'deleted',
        ),
        'key' => 'IDX_DATE_START',
      ),
      'status' => 
      array (
        'columns' => 
        array (
          0 => 'status',
          1 => 'deleted',
        ),
        'key' => 'IDX_STATUS',
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
        'key' => 'IDX_ASSIGNED_USER',
      ),
      'assignedUserStatus' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'status',
        ),
        'key' => 'IDX_ASSIGNED_USER_STATUS',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'Project' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Active',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'accountId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'projectTasksIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'projectTasksNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'projectTasks' => 
      array (
        'type' => 'hasMany',
        'entity' => 'ProjectTask',
        'foreignKey' => 'projectId',
        'foreign' => 'project',
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Project',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'ProjectTask' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Not Started',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'dateStart' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'dateEnd' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'estimatedEffort' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'actualDuration' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'projectId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'projectName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'project',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'notExportable' => true,
      ),
    ),
    'relations' => 
    array (
      'project' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Project',
        'key' => 'projectId',
        'foreignKey' => 'id',
        'foreign' => 'projectTasks',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'ProjectTask',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'Invoice' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'number' => 
      array (
        'type' => 'varchar',
        'len' => '100',
        'fieldType' => 'varchar',
      ),
      'numberA' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'notNull' => false,
        'unique' => false,
        'fieldType' => 'varchar',
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Draft',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'dateInvoiced' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'taxRate' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'shippingCost' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'invoice.shipping_cost * shippingCostCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'shippingCostCurrencyRate',
              2 => 
              array (
                'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'taxAmount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'invoice.tax_amount * taxAmountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'taxAmountCurrencyRate',
              2 => 
              array (
                'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'discountAmount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'invoice.discount_amount * discountAmountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'discountAmountCurrencyRate',
              2 => 
              array (
                'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'amount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'invoice.amount * amountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'preDiscountedAmount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'invoice.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'preDiscountedAmountCurrencyRate',
              2 => 
              array (
                'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'grandTotalAmount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'invoice.grand_total_amount * grandTotalAmountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'grandTotalAmountCurrencyRate',
              2 => 
              array (
                'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'weight' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'itemList' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'billingAddressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'fieldType' => 'text',
      ),
      'billingAddressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'billingAddressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'billingAddressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'billingAddressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar',
      ),
      'billingAddressMap' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map',
      ),
      'shippingAddressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'fieldType' => 'text',
      ),
      'shippingAddressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'shippingAddressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'shippingAddressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'shippingAddressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar',
      ),
      'shippingAddressMap' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map',
      ),
      'shippingCostCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'taxAmountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'discountAmountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'amountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'preDiscountedAmountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'grandTotalAmountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'accountId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'opportunityId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'opportunityName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'opportunity',
        'foreign' => 'name',
      ),
      'quoteId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'quoteName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'quote',
        'foreign' => 'name',
      ),
      'salesOrderId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'salesOrderName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'salesOrder',
        'foreign' => 'name',
      ),
      'billingContactId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'billingContactName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'billingContact',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'shippingContactId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'shippingContactName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'shippingContact',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'taxId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'taxName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'tax',
        'foreign' => 'name',
      ),
      'shippingProviderId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'shippingProviderName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'shippingProvider',
        'foreign' => 'name',
      ),
      'shippingCostConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'invoice.shipping_cost * shippingCostCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'shippingCostCurrencyRate',
              2 => 
              array (
                'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.shipping_cost * shippingCostCurrencyRateInvoiceForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'shippingCostCurrencyRateInvoiceForeign',
              2 => 
              array (
                'shippingCostCurrencyRateInvoiceForeign.id:' => '{alias}.shippingCostCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'invoice.shipping_cost * shippingCostCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'shippingCostCurrencyRate',
                2 => 
                array (
                  'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'invoice.shipping_cost * shippingCostCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'shippingCostCurrencyRate',
                2 => 
                array (
                  'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'invoice.shipping_cost * shippingCostCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'shippingCostCurrencyRate',
                2 => 
                array (
                  'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'invoice.shipping_cost * shippingCostCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'shippingCostCurrencyRate',
                2 => 
                array (
                  'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'invoice.shipping_cost * shippingCostCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'shippingCostCurrencyRate',
                2 => 
                array (
                  'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'invoice.shipping_cost * shippingCostCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'shippingCostCurrencyRate',
                2 => 
                array (
                  'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'invoice.shipping_cost IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'invoice.shipping_cost IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'shippingCostConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'shippingCostCurrencyRate',
              2 => 
              array (
                'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'taxAmountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'invoice.tax_amount * taxAmountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'taxAmountCurrencyRate',
              2 => 
              array (
                'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.tax_amount * taxAmountCurrencyRateInvoiceForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'taxAmountCurrencyRateInvoiceForeign',
              2 => 
              array (
                'taxAmountCurrencyRateInvoiceForeign.id:' => '{alias}.taxAmountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'invoice.tax_amount * taxAmountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'taxAmountCurrencyRate',
                2 => 
                array (
                  'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'invoice.tax_amount * taxAmountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'taxAmountCurrencyRate',
                2 => 
                array (
                  'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'invoice.tax_amount * taxAmountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'taxAmountCurrencyRate',
                2 => 
                array (
                  'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'invoice.tax_amount * taxAmountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'taxAmountCurrencyRate',
                2 => 
                array (
                  'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'invoice.tax_amount * taxAmountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'taxAmountCurrencyRate',
                2 => 
                array (
                  'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'invoice.tax_amount * taxAmountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'taxAmountCurrencyRate',
                2 => 
                array (
                  'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'invoice.tax_amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'invoice.tax_amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'taxAmountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'taxAmountCurrencyRate',
              2 => 
              array (
                'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'discountAmountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'invoice.discount_amount * discountAmountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'discountAmountCurrencyRate',
              2 => 
              array (
                'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.discount_amount * discountAmountCurrencyRateInvoiceForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'discountAmountCurrencyRateInvoiceForeign',
              2 => 
              array (
                'discountAmountCurrencyRateInvoiceForeign.id:' => '{alias}.discountAmountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'invoice.discount_amount * discountAmountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'discountAmountCurrencyRate',
                2 => 
                array (
                  'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'invoice.discount_amount * discountAmountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'discountAmountCurrencyRate',
                2 => 
                array (
                  'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'invoice.discount_amount * discountAmountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'discountAmountCurrencyRate',
                2 => 
                array (
                  'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'invoice.discount_amount * discountAmountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'discountAmountCurrencyRate',
                2 => 
                array (
                  'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'invoice.discount_amount * discountAmountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'discountAmountCurrencyRate',
                2 => 
                array (
                  'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'invoice.discount_amount * discountAmountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'discountAmountCurrencyRate',
                2 => 
                array (
                  'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'invoice.discount_amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'invoice.discount_amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'discountAmountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'discountAmountCurrencyRate',
              2 => 
              array (
                'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'amountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'invoice.amount * amountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.amount * amountCurrencyRateInvoiceForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRateInvoiceForeign',
              2 => 
              array (
                'amountCurrencyRateInvoiceForeign.id:' => '{alias}.amountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'invoice.amount * amountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'invoice.amount * amountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'invoice.amount * amountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'invoice.amount * amountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'invoice.amount * amountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'invoice.amount * amountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'invoice.amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'invoice.amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'amountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'preDiscountedAmountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'invoice.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'preDiscountedAmountCurrencyRate',
              2 => 
              array (
                'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.pre_discounted_amount * preDiscountedAmountCurrencyRateInvoiceForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'preDiscountedAmountCurrencyRateInvoiceForeign',
              2 => 
              array (
                'preDiscountedAmountCurrencyRateInvoiceForeign.id:' => '{alias}.preDiscountedAmountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'invoice.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'preDiscountedAmountCurrencyRate',
                2 => 
                array (
                  'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'invoice.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'preDiscountedAmountCurrencyRate',
                2 => 
                array (
                  'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'invoice.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'preDiscountedAmountCurrencyRate',
                2 => 
                array (
                  'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'invoice.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'preDiscountedAmountCurrencyRate',
                2 => 
                array (
                  'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'invoice.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'preDiscountedAmountCurrencyRate',
                2 => 
                array (
                  'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'invoice.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'preDiscountedAmountCurrencyRate',
                2 => 
                array (
                  'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'invoice.pre_discounted_amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'invoice.pre_discounted_amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'preDiscountedAmountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'preDiscountedAmountCurrencyRate',
              2 => 
              array (
                'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'grandTotalAmountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'invoice.grand_total_amount * grandTotalAmountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'grandTotalAmountCurrencyRate',
              2 => 
              array (
                'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.grand_total_amount * grandTotalAmountCurrencyRateInvoiceForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'grandTotalAmountCurrencyRateInvoiceForeign',
              2 => 
              array (
                'grandTotalAmountCurrencyRateInvoiceForeign.id:' => '{alias}.grandTotalAmountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'invoice.grand_total_amount * grandTotalAmountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'grandTotalAmountCurrencyRate',
                2 => 
                array (
                  'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'invoice.grand_total_amount * grandTotalAmountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'grandTotalAmountCurrencyRate',
                2 => 
                array (
                  'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'invoice.grand_total_amount * grandTotalAmountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'grandTotalAmountCurrencyRate',
                2 => 
                array (
                  'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'invoice.grand_total_amount * grandTotalAmountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'grandTotalAmountCurrencyRate',
                2 => 
                array (
                  'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'invoice.grand_total_amount * grandTotalAmountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'grandTotalAmountCurrencyRate',
                2 => 
                array (
                  'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'invoice.grand_total_amount * grandTotalAmountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'grandTotalAmountCurrencyRate',
                2 => 
                array (
                  'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'invoice.grand_total_amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'invoice.grand_total_amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'grandTotalAmountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'grandTotalAmountCurrencyRate',
              2 => 
              array (
                'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'itemsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'itemsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Invoice',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'items' => 
      array (
        'type' => 'hasMany',
        'entity' => 'InvoiceItem',
        'foreignKey' => 'invoiceId',
        'foreign' => 'invoice',
      ),
      'shippingContact' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Contact',
        'key' => 'shippingContactId',
        'foreignKey' => 'id',
        'foreign' => 'invoicesShipping',
      ),
      'billingContact' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Contact',
        'key' => 'billingContactId',
        'foreignKey' => 'id',
        'foreign' => 'invoicesBilling',
      ),
      'salesOrder' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'SalesOrder',
        'key' => 'salesOrderId',
        'foreignKey' => 'id',
        'foreign' => 'invoices',
      ),
      'quote' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Quote',
        'key' => 'quoteId',
        'foreignKey' => 'id',
        'foreign' => 'invoices',
      ),
      'opportunity' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Opportunity',
        'key' => 'opportunityId',
        'foreignKey' => 'id',
        'foreign' => 'invoices',
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => 'invoices',
      ),
      'shippingProvider' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'ShippingProvider',
        'key' => 'shippingProviderId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'tax' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Tax',
        'key' => 'taxId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'InvoiceItem' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'invoiceStatus' => 
      array (
        'type' => 'foreign',
        'relation' => 'invoice',
        'foreign' => 'status',
        'fieldType' => 'foreign',
      ),
      'quantity' => 
      array (
        'type' => 'float',
        'default' => '1',
        'fieldType' => 'float',
      ),
      'listPrice' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'invoice_item.list_price * listPriceCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'listPriceCurrencyRate',
              2 => 
              array (
                'listPriceCurrencyRate.id:' => 'listPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'unitPrice' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'invoice_item.unit_price * unitPriceCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRate',
              2 => 
              array (
                'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'discount' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'amount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'invoice_item.amount * amountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'unitWeight' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'weight' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'taxRate' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'default' => '0',
        'fieldType' => 'float',
      ),
      'order' => 
      array (
        'type' => 'int',
        'default' => '1',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'listPriceCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'unitPriceCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'amountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'invoiceId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'invoiceName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'invoice',
        'foreign' => 'name',
      ),
      'accountId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'productId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'productName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'product',
        'foreign' => 'name',
      ),
      'listPriceConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'invoice_item.list_price * listPriceCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'listPriceCurrencyRate',
              2 => 
              array (
                'listPriceCurrencyRate.id:' => 'listPriceCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.list_price * listPriceCurrencyRateInvoiceItemForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'listPriceCurrencyRateInvoiceItemForeign',
              2 => 
              array (
                'listPriceCurrencyRateInvoiceItemForeign.id:' => '{alias}.listPriceCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'invoice_item.list_price * listPriceCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'invoice_item.list_price * listPriceCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'invoice_item.list_price * listPriceCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'invoice_item.list_price * listPriceCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'invoice_item.list_price * listPriceCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'invoice_item.list_price * listPriceCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'invoice_item.list_price IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'invoice_item.list_price IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'listPriceConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'listPriceCurrencyRate',
              2 => 
              array (
                'listPriceCurrencyRate.id:' => 'listPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'unitPriceConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'invoice_item.unit_price * unitPriceCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRate',
              2 => 
              array (
                'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.unit_price * unitPriceCurrencyRateInvoiceItemForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRateInvoiceItemForeign',
              2 => 
              array (
                'unitPriceCurrencyRateInvoiceItemForeign.id:' => '{alias}.unitPriceCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'invoice_item.unit_price * unitPriceCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'invoice_item.unit_price * unitPriceCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'invoice_item.unit_price * unitPriceCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'invoice_item.unit_price * unitPriceCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'invoice_item.unit_price * unitPriceCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'invoice_item.unit_price * unitPriceCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'invoice_item.unit_price IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'invoice_item.unit_price IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'unitPriceConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRate',
              2 => 
              array (
                'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'amountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'invoice_item.amount * amountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.amount * amountCurrencyRateInvoiceItemForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRateInvoiceItemForeign',
              2 => 
              array (
                'amountCurrencyRateInvoiceItemForeign.id:' => '{alias}.amountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'invoice_item.amount * amountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'invoice_item.amount * amountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'invoice_item.amount * amountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'invoice_item.amount * amountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'invoice_item.amount * amountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'invoice_item.amount * amountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'invoice_item.amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'invoice_item.amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'amountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => 'invoiceItems',
      ),
      'invoice' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Invoice',
        'key' => 'invoiceId',
        'foreignKey' => 'id',
        'foreign' => 'items',
      ),
      'product' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Product',
        'key' => 'productId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'OpportunityItem' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'quantity' => 
      array (
        'type' => 'float',
        'default' => '1',
        'fieldType' => 'float',
      ),
      'unitPrice' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'opportunity_item.unit_price * unitPriceCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRate',
              2 => 
              array (
                'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'amount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'opportunity_item.amount * amountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'order' => 
      array (
        'type' => 'int',
        'default' => '1',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'opportunityStage' => 
      array (
        'type' => 'foreign',
        'relation' => 'opportunity',
        'foreign' => 'stage',
        'fieldType' => 'foreign',
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'unitPriceCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'amountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'opportunityId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'opportunityName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'opportunity',
        'foreign' => 'name',
      ),
      'productId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'productName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'product',
        'foreign' => 'name',
      ),
      'unitPriceConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'opportunity_item.unit_price * unitPriceCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRate',
              2 => 
              array (
                'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.unit_price * unitPriceCurrencyRateOpportunityItemForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRateOpportunityItemForeign',
              2 => 
              array (
                'unitPriceCurrencyRateOpportunityItemForeign.id:' => '{alias}.unitPriceCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'opportunity_item.unit_price * unitPriceCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'opportunity_item.unit_price * unitPriceCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'opportunity_item.unit_price * unitPriceCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'opportunity_item.unit_price * unitPriceCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'opportunity_item.unit_price * unitPriceCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'opportunity_item.unit_price * unitPriceCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'opportunity_item.unit_price IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'opportunity_item.unit_price IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'unitPriceConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRate',
              2 => 
              array (
                'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'amountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'opportunity_item.amount * amountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.amount * amountCurrencyRateOpportunityItemForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRateOpportunityItemForeign',
              2 => 
              array (
                'amountCurrencyRateOpportunityItemForeign.id:' => '{alias}.amountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'opportunity_item.amount * amountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'opportunity_item.amount * amountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'opportunity_item.amount * amountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'opportunity_item.amount * amountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'opportunity_item.amount * amountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'opportunity_item.amount * amountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'opportunity_item.amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'opportunity_item.amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'amountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'opportunity' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Opportunity',
        'key' => 'opportunityId',
        'foreignKey' => 'id',
        'foreign' => 'items',
      ),
      'product' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Product',
        'key' => 'productId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'Product' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Available',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'partNumber' => 
      array (
        'type' => 'varchar',
        'len' => 50,
        'fieldType' => 'varchar',
      ),
      'url' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'pricingType' => 
      array (
        'type' => 'varchar',
        'default' => 'Same as List',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'pricingFactor' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'default' => '0',
        'fieldType' => 'float',
      ),
      'costPrice' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'product.cost_price * costPriceCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'costPriceCurrencyRate',
              2 => 
              array (
                'costPriceCurrencyRate.id:' => 'costPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'listPrice' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'product.list_price * listPriceCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'listPriceCurrencyRate',
              2 => 
              array (
                'listPriceCurrencyRate.id:' => 'listPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'unitPrice' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'product.unit_price * unitPriceCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRate',
              2 => 
              array (
                'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'weight' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'isTaxFree' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'costPriceCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'listPriceCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'unitPriceCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'brandId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'brandName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'brand',
        'foreign' => 'name',
      ),
      'categoryId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'categoryName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'category',
        'foreign' => 'name',
      ),
      'costPriceConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'product.cost_price * costPriceCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'costPriceCurrencyRate',
              2 => 
              array (
                'costPriceCurrencyRate.id:' => 'costPriceCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.cost_price * costPriceCurrencyRateProductForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'costPriceCurrencyRateProductForeign',
              2 => 
              array (
                'costPriceCurrencyRateProductForeign.id:' => '{alias}.costPriceCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'product.cost_price * costPriceCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'costPriceCurrencyRate',
                2 => 
                array (
                  'costPriceCurrencyRate.id:' => 'costPriceCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'product.cost_price * costPriceCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'costPriceCurrencyRate',
                2 => 
                array (
                  'costPriceCurrencyRate.id:' => 'costPriceCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'product.cost_price * costPriceCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'costPriceCurrencyRate',
                2 => 
                array (
                  'costPriceCurrencyRate.id:' => 'costPriceCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'product.cost_price * costPriceCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'costPriceCurrencyRate',
                2 => 
                array (
                  'costPriceCurrencyRate.id:' => 'costPriceCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'product.cost_price * costPriceCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'costPriceCurrencyRate',
                2 => 
                array (
                  'costPriceCurrencyRate.id:' => 'costPriceCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'product.cost_price * costPriceCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'costPriceCurrencyRate',
                2 => 
                array (
                  'costPriceCurrencyRate.id:' => 'costPriceCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'product.cost_price IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'product.cost_price IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'costPriceConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'costPriceCurrencyRate',
              2 => 
              array (
                'costPriceCurrencyRate.id:' => 'costPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'listPriceConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'product.list_price * listPriceCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'listPriceCurrencyRate',
              2 => 
              array (
                'listPriceCurrencyRate.id:' => 'listPriceCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.list_price * listPriceCurrencyRateProductForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'listPriceCurrencyRateProductForeign',
              2 => 
              array (
                'listPriceCurrencyRateProductForeign.id:' => '{alias}.listPriceCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'product.list_price * listPriceCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'product.list_price * listPriceCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'product.list_price * listPriceCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'product.list_price * listPriceCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'product.list_price * listPriceCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'product.list_price * listPriceCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'product.list_price IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'product.list_price IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'listPriceConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'listPriceCurrencyRate',
              2 => 
              array (
                'listPriceCurrencyRate.id:' => 'listPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'unitPriceConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'product.unit_price * unitPriceCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRate',
              2 => 
              array (
                'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.unit_price * unitPriceCurrencyRateProductForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRateProductForeign',
              2 => 
              array (
                'unitPriceCurrencyRateProductForeign.id:' => '{alias}.unitPriceCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'product.unit_price * unitPriceCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'product.unit_price * unitPriceCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'product.unit_price * unitPriceCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'product.unit_price * unitPriceCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'product.unit_price * unitPriceCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'product.unit_price * unitPriceCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'product.unit_price IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'product.unit_price IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'unitPriceConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRate',
              2 => 
              array (
                'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'aCCsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'aCCs',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'aCCsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
    ),
    'relations' => 
    array (
      'aCCs' => 
      array (
        'type' => 'manyMany',
        'entity' => 'ACC',
        'relationName' => 'aCCProduct',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'productId',
          1 => 'aCCId',
        ),
        'foreign' => 'products',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Product',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'category' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'ProductCategory',
        'key' => 'categoryId',
        'foreignKey' => 'id',
        'foreign' => 'products',
      ),
      'brand' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'ProductBrand',
        'key' => 'brandId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'name',
      'order' => 'ASC',
    ),
  ),
  'ProductBrand' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'website' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'productsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'productsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'products' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Product',
        'foreignKey' => 'brandId',
        'foreign' => 'brand',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'ProductBrand',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'name',
      'order' => 'ASC',
    ),
  ),
  'ProductCategory' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'order' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'childList' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'parentId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'parentName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'parent',
        'foreign' => 'name',
      ),
      'productsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'productsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'childrenIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'childrenNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'products' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Product',
        'foreignKey' => 'categoryId',
        'foreign' => 'category',
      ),
      'children' => 
      array (
        'type' => 'hasMany',
        'entity' => 'ProductCategory',
        'foreignKey' => 'parentId',
        'foreign' => 'parent',
      ),
      'parent' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'ProductCategory',
        'key' => 'parentId',
        'foreignKey' => 'id',
        'foreign' => 'children',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'ProductCategory',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'additionalTables' => 
    array (
      'ProductCategoryPath' => 
      array (
        'fields' => 
        array (
          'id' => 
          array (
            'type' => 'id',
            'dbType' => 'int',
            'len' => '11',
            'autoincrement' => true,
            'unique' => true,
          ),
          'ascendorId' => 
          array (
            'type' => 'varchar',
            'len' => '100',
            'index' => true,
          ),
          'descendorId' => 
          array (
            'type' => 'varchar',
            'len' => '24',
            'index' => true,
          ),
        ),
      ),
    ),
    'collection' => 
    array (
      'order' => 'ASC',
    ),
  ),
  'Quote' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'number' => 
      array (
        'type' => 'varchar',
        'len' => '100',
        'fieldType' => 'varchar',
      ),
      'numberA' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'notNull' => false,
        'unique' => false,
        'fieldType' => 'varchar',
      ),
      'invoiceNumber' => 
      array (
        'type' => 'varchar',
        'len' => '100',
        'fieldType' => 'varchar',
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Draft',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'dateQuoted' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'dateOrdered' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'dateInvoiced' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'taxRate' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'shippingCost' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'quote.shipping_cost * shippingCostCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'shippingCostCurrencyRate',
              2 => 
              array (
                'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'taxAmount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'quote.tax_amount * taxAmountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'taxAmountCurrencyRate',
              2 => 
              array (
                'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'discountAmount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'quote.discount_amount * discountAmountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'discountAmountCurrencyRate',
              2 => 
              array (
                'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'amount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'quote.amount * amountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'preDiscountedAmount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'quote.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'preDiscountedAmountCurrencyRate',
              2 => 
              array (
                'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'grandTotalAmount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'quote.grand_total_amount * grandTotalAmountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'grandTotalAmountCurrencyRate',
              2 => 
              array (
                'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'weight' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'itemList' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'billingAddressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'fieldType' => 'text',
      ),
      'billingAddressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'billingAddressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'billingAddressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'billingAddressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar',
      ),
      'billingAddressMap' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map',
      ),
      'shippingAddressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'fieldType' => 'text',
      ),
      'shippingAddressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'shippingAddressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'shippingAddressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'shippingAddressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar',
      ),
      'shippingAddressMap' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map',
      ),
      'shippingCostCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'taxAmountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'discountAmountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'amountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'preDiscountedAmountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'grandTotalAmountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'accountId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'opportunityId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'opportunityName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'opportunity',
        'foreign' => 'name',
      ),
      'billingContactId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'billingContactName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'billingContact',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'shippingContactId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'shippingContactName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'shippingContact',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'taxId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'taxName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'tax',
        'foreign' => 'name',
      ),
      'shippingProviderId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'shippingProviderName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'shippingProvider',
        'foreign' => 'name',
      ),
      'shippingCostConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'quote.shipping_cost * shippingCostCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'shippingCostCurrencyRate',
              2 => 
              array (
                'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.shipping_cost * shippingCostCurrencyRateQuoteForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'shippingCostCurrencyRateQuoteForeign',
              2 => 
              array (
                'shippingCostCurrencyRateQuoteForeign.id:' => '{alias}.shippingCostCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'quote.shipping_cost * shippingCostCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'shippingCostCurrencyRate',
                2 => 
                array (
                  'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'quote.shipping_cost * shippingCostCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'shippingCostCurrencyRate',
                2 => 
                array (
                  'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'quote.shipping_cost * shippingCostCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'shippingCostCurrencyRate',
                2 => 
                array (
                  'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'quote.shipping_cost * shippingCostCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'shippingCostCurrencyRate',
                2 => 
                array (
                  'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'quote.shipping_cost * shippingCostCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'shippingCostCurrencyRate',
                2 => 
                array (
                  'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'quote.shipping_cost * shippingCostCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'shippingCostCurrencyRate',
                2 => 
                array (
                  'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'quote.shipping_cost IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'quote.shipping_cost IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'shippingCostConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'shippingCostCurrencyRate',
              2 => 
              array (
                'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'taxAmountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'quote.tax_amount * taxAmountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'taxAmountCurrencyRate',
              2 => 
              array (
                'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.tax_amount * taxAmountCurrencyRateQuoteForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'taxAmountCurrencyRateQuoteForeign',
              2 => 
              array (
                'taxAmountCurrencyRateQuoteForeign.id:' => '{alias}.taxAmountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'quote.tax_amount * taxAmountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'taxAmountCurrencyRate',
                2 => 
                array (
                  'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'quote.tax_amount * taxAmountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'taxAmountCurrencyRate',
                2 => 
                array (
                  'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'quote.tax_amount * taxAmountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'taxAmountCurrencyRate',
                2 => 
                array (
                  'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'quote.tax_amount * taxAmountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'taxAmountCurrencyRate',
                2 => 
                array (
                  'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'quote.tax_amount * taxAmountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'taxAmountCurrencyRate',
                2 => 
                array (
                  'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'quote.tax_amount * taxAmountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'taxAmountCurrencyRate',
                2 => 
                array (
                  'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'quote.tax_amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'quote.tax_amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'taxAmountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'taxAmountCurrencyRate',
              2 => 
              array (
                'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'discountAmountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'quote.discount_amount * discountAmountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'discountAmountCurrencyRate',
              2 => 
              array (
                'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.discount_amount * discountAmountCurrencyRateQuoteForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'discountAmountCurrencyRateQuoteForeign',
              2 => 
              array (
                'discountAmountCurrencyRateQuoteForeign.id:' => '{alias}.discountAmountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'quote.discount_amount * discountAmountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'discountAmountCurrencyRate',
                2 => 
                array (
                  'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'quote.discount_amount * discountAmountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'discountAmountCurrencyRate',
                2 => 
                array (
                  'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'quote.discount_amount * discountAmountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'discountAmountCurrencyRate',
                2 => 
                array (
                  'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'quote.discount_amount * discountAmountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'discountAmountCurrencyRate',
                2 => 
                array (
                  'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'quote.discount_amount * discountAmountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'discountAmountCurrencyRate',
                2 => 
                array (
                  'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'quote.discount_amount * discountAmountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'discountAmountCurrencyRate',
                2 => 
                array (
                  'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'quote.discount_amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'quote.discount_amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'discountAmountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'discountAmountCurrencyRate',
              2 => 
              array (
                'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'amountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'quote.amount * amountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.amount * amountCurrencyRateQuoteForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRateQuoteForeign',
              2 => 
              array (
                'amountCurrencyRateQuoteForeign.id:' => '{alias}.amountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'quote.amount * amountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'quote.amount * amountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'quote.amount * amountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'quote.amount * amountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'quote.amount * amountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'quote.amount * amountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'quote.amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'quote.amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'amountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'preDiscountedAmountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'quote.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'preDiscountedAmountCurrencyRate',
              2 => 
              array (
                'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.pre_discounted_amount * preDiscountedAmountCurrencyRateQuoteForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'preDiscountedAmountCurrencyRateQuoteForeign',
              2 => 
              array (
                'preDiscountedAmountCurrencyRateQuoteForeign.id:' => '{alias}.preDiscountedAmountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'quote.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'preDiscountedAmountCurrencyRate',
                2 => 
                array (
                  'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'quote.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'preDiscountedAmountCurrencyRate',
                2 => 
                array (
                  'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'quote.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'preDiscountedAmountCurrencyRate',
                2 => 
                array (
                  'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'quote.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'preDiscountedAmountCurrencyRate',
                2 => 
                array (
                  'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'quote.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'preDiscountedAmountCurrencyRate',
                2 => 
                array (
                  'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'quote.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'preDiscountedAmountCurrencyRate',
                2 => 
                array (
                  'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'quote.pre_discounted_amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'quote.pre_discounted_amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'preDiscountedAmountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'preDiscountedAmountCurrencyRate',
              2 => 
              array (
                'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'grandTotalAmountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'quote.grand_total_amount * grandTotalAmountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'grandTotalAmountCurrencyRate',
              2 => 
              array (
                'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.grand_total_amount * grandTotalAmountCurrencyRateQuoteForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'grandTotalAmountCurrencyRateQuoteForeign',
              2 => 
              array (
                'grandTotalAmountCurrencyRateQuoteForeign.id:' => '{alias}.grandTotalAmountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'quote.grand_total_amount * grandTotalAmountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'grandTotalAmountCurrencyRate',
                2 => 
                array (
                  'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'quote.grand_total_amount * grandTotalAmountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'grandTotalAmountCurrencyRate',
                2 => 
                array (
                  'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'quote.grand_total_amount * grandTotalAmountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'grandTotalAmountCurrencyRate',
                2 => 
                array (
                  'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'quote.grand_total_amount * grandTotalAmountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'grandTotalAmountCurrencyRate',
                2 => 
                array (
                  'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'quote.grand_total_amount * grandTotalAmountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'grandTotalAmountCurrencyRate',
                2 => 
                array (
                  'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'quote.grand_total_amount * grandTotalAmountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'grandTotalAmountCurrencyRate',
                2 => 
                array (
                  'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'quote.grand_total_amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'quote.grand_total_amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'grandTotalAmountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'grandTotalAmountCurrencyRate',
              2 => 
              array (
                'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'itemsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'itemsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'invoicesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'invoicesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'salesOrdersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'salesOrdersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Quote',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'items' => 
      array (
        'type' => 'hasMany',
        'entity' => 'QuoteItem',
        'foreignKey' => 'quoteId',
        'foreign' => 'quote',
      ),
      'shippingContact' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Contact',
        'key' => 'shippingContactId',
        'foreignKey' => 'id',
        'foreign' => 'quotesShipping',
      ),
      'billingContact' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Contact',
        'key' => 'billingContactId',
        'foreignKey' => 'id',
        'foreign' => 'quotesBilling',
      ),
      'invoices' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Invoice',
        'foreignKey' => 'quoteId',
        'foreign' => 'quote',
      ),
      'salesOrders' => 
      array (
        'type' => 'hasMany',
        'entity' => 'SalesOrder',
        'foreignKey' => 'quoteId',
        'foreign' => 'quote',
      ),
      'opportunity' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Opportunity',
        'key' => 'opportunityId',
        'foreignKey' => 'id',
        'foreign' => 'quotes',
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => 'quotes',
      ),
      'shippingProvider' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'ShippingProvider',
        'key' => 'shippingProviderId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'tax' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Tax',
        'key' => 'taxId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'QuoteItem' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'quoteStatus' => 
      array (
        'type' => 'foreign',
        'relation' => 'quote',
        'foreign' => 'status',
        'fieldType' => 'foreign',
      ),
      'quantity' => 
      array (
        'type' => 'float',
        'default' => '1',
        'fieldType' => 'float',
      ),
      'listPrice' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'quote_item.list_price * listPriceCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'listPriceCurrencyRate',
              2 => 
              array (
                'listPriceCurrencyRate.id:' => 'listPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'unitPrice' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'quote_item.unit_price * unitPriceCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRate',
              2 => 
              array (
                'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'discount' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'amount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'quote_item.amount * amountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'unitWeight' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'weight' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'taxRate' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'default' => '0',
        'fieldType' => 'float',
      ),
      'order' => 
      array (
        'type' => 'int',
        'default' => '1',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'listPriceCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'unitPriceCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'amountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'quoteId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'quoteName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'quote',
        'foreign' => 'name',
      ),
      'accountId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'productId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'productName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'product',
        'foreign' => 'name',
      ),
      'listPriceConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'quote_item.list_price * listPriceCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'listPriceCurrencyRate',
              2 => 
              array (
                'listPriceCurrencyRate.id:' => 'listPriceCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.list_price * listPriceCurrencyRateQuoteItemForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'listPriceCurrencyRateQuoteItemForeign',
              2 => 
              array (
                'listPriceCurrencyRateQuoteItemForeign.id:' => '{alias}.listPriceCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'quote_item.list_price * listPriceCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'quote_item.list_price * listPriceCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'quote_item.list_price * listPriceCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'quote_item.list_price * listPriceCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'quote_item.list_price * listPriceCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'quote_item.list_price * listPriceCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'quote_item.list_price IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'quote_item.list_price IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'listPriceConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'listPriceCurrencyRate',
              2 => 
              array (
                'listPriceCurrencyRate.id:' => 'listPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'unitPriceConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'quote_item.unit_price * unitPriceCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRate',
              2 => 
              array (
                'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.unit_price * unitPriceCurrencyRateQuoteItemForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRateQuoteItemForeign',
              2 => 
              array (
                'unitPriceCurrencyRateQuoteItemForeign.id:' => '{alias}.unitPriceCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'quote_item.unit_price * unitPriceCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'quote_item.unit_price * unitPriceCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'quote_item.unit_price * unitPriceCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'quote_item.unit_price * unitPriceCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'quote_item.unit_price * unitPriceCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'quote_item.unit_price * unitPriceCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'quote_item.unit_price IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'quote_item.unit_price IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'unitPriceConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRate',
              2 => 
              array (
                'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'amountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'quote_item.amount * amountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.amount * amountCurrencyRateQuoteItemForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRateQuoteItemForeign',
              2 => 
              array (
                'amountCurrencyRateQuoteItemForeign.id:' => '{alias}.amountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'quote_item.amount * amountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'quote_item.amount * amountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'quote_item.amount * amountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'quote_item.amount * amountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'quote_item.amount * amountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'quote_item.amount * amountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'quote_item.amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'quote_item.amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'amountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => 'quoteItems',
      ),
      'quote' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Quote',
        'key' => 'quoteId',
        'foreignKey' => 'id',
        'foreign' => 'items',
      ),
      'product' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Product',
        'key' => 'productId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'SalesOrder' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'number' => 
      array (
        'type' => 'varchar',
        'len' => '100',
        'fieldType' => 'varchar',
      ),
      'numberA' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'notNull' => false,
        'unique' => false,
        'fieldType' => 'varchar',
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Draft',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'dateOrdered' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'dateInvoiced' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'taxRate' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'shippingCost' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'sales_order.shipping_cost * shippingCostCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'shippingCostCurrencyRate',
              2 => 
              array (
                'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'taxAmount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'sales_order.tax_amount * taxAmountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'taxAmountCurrencyRate',
              2 => 
              array (
                'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'discountAmount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'sales_order.discount_amount * discountAmountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'discountAmountCurrencyRate',
              2 => 
              array (
                'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'amount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'sales_order.amount * amountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'preDiscountedAmount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'sales_order.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'preDiscountedAmountCurrencyRate',
              2 => 
              array (
                'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'grandTotalAmount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'sales_order.grand_total_amount * grandTotalAmountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'grandTotalAmountCurrencyRate',
              2 => 
              array (
                'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'weight' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'itemList' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'billingAddressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'fieldType' => 'text',
      ),
      'billingAddressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'billingAddressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'billingAddressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'billingAddressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar',
      ),
      'billingAddressMap' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map',
      ),
      'shippingAddressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'fieldType' => 'text',
      ),
      'shippingAddressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'shippingAddressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'shippingAddressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'shippingAddressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar',
      ),
      'shippingAddressMap' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map',
      ),
      'shippingCostCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'taxAmountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'discountAmountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'amountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'preDiscountedAmountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'grandTotalAmountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'accountId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'opportunityId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'opportunityName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'opportunity',
        'foreign' => 'name',
      ),
      'quoteId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'quoteName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'quote',
        'foreign' => 'name',
      ),
      'billingContactId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'billingContactName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'billingContact',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'shippingContactId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'shippingContactName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'shippingContact',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'taxId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'taxName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'tax',
        'foreign' => 'name',
      ),
      'shippingProviderId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'shippingProviderName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'shippingProvider',
        'foreign' => 'name',
      ),
      'shippingCostConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'sales_order.shipping_cost * shippingCostCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'shippingCostCurrencyRate',
              2 => 
              array (
                'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.shipping_cost * shippingCostCurrencyRateSalesOrderForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'shippingCostCurrencyRateSalesOrderForeign',
              2 => 
              array (
                'shippingCostCurrencyRateSalesOrderForeign.id:' => '{alias}.shippingCostCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'sales_order.shipping_cost * shippingCostCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'shippingCostCurrencyRate',
                2 => 
                array (
                  'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'sales_order.shipping_cost * shippingCostCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'shippingCostCurrencyRate',
                2 => 
                array (
                  'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'sales_order.shipping_cost * shippingCostCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'shippingCostCurrencyRate',
                2 => 
                array (
                  'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'sales_order.shipping_cost * shippingCostCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'shippingCostCurrencyRate',
                2 => 
                array (
                  'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'sales_order.shipping_cost * shippingCostCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'shippingCostCurrencyRate',
                2 => 
                array (
                  'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'sales_order.shipping_cost * shippingCostCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'shippingCostCurrencyRate',
                2 => 
                array (
                  'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'sales_order.shipping_cost IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'sales_order.shipping_cost IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'shippingCostConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'shippingCostCurrencyRate',
              2 => 
              array (
                'shippingCostCurrencyRate.id:' => 'shippingCostCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'taxAmountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'sales_order.tax_amount * taxAmountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'taxAmountCurrencyRate',
              2 => 
              array (
                'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.tax_amount * taxAmountCurrencyRateSalesOrderForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'taxAmountCurrencyRateSalesOrderForeign',
              2 => 
              array (
                'taxAmountCurrencyRateSalesOrderForeign.id:' => '{alias}.taxAmountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'sales_order.tax_amount * taxAmountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'taxAmountCurrencyRate',
                2 => 
                array (
                  'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'sales_order.tax_amount * taxAmountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'taxAmountCurrencyRate',
                2 => 
                array (
                  'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'sales_order.tax_amount * taxAmountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'taxAmountCurrencyRate',
                2 => 
                array (
                  'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'sales_order.tax_amount * taxAmountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'taxAmountCurrencyRate',
                2 => 
                array (
                  'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'sales_order.tax_amount * taxAmountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'taxAmountCurrencyRate',
                2 => 
                array (
                  'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'sales_order.tax_amount * taxAmountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'taxAmountCurrencyRate',
                2 => 
                array (
                  'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'sales_order.tax_amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'sales_order.tax_amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'taxAmountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'taxAmountCurrencyRate',
              2 => 
              array (
                'taxAmountCurrencyRate.id:' => 'taxAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'discountAmountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'sales_order.discount_amount * discountAmountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'discountAmountCurrencyRate',
              2 => 
              array (
                'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.discount_amount * discountAmountCurrencyRateSalesOrderForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'discountAmountCurrencyRateSalesOrderForeign',
              2 => 
              array (
                'discountAmountCurrencyRateSalesOrderForeign.id:' => '{alias}.discountAmountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'sales_order.discount_amount * discountAmountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'discountAmountCurrencyRate',
                2 => 
                array (
                  'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'sales_order.discount_amount * discountAmountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'discountAmountCurrencyRate',
                2 => 
                array (
                  'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'sales_order.discount_amount * discountAmountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'discountAmountCurrencyRate',
                2 => 
                array (
                  'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'sales_order.discount_amount * discountAmountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'discountAmountCurrencyRate',
                2 => 
                array (
                  'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'sales_order.discount_amount * discountAmountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'discountAmountCurrencyRate',
                2 => 
                array (
                  'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'sales_order.discount_amount * discountAmountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'discountAmountCurrencyRate',
                2 => 
                array (
                  'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'sales_order.discount_amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'sales_order.discount_amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'discountAmountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'discountAmountCurrencyRate',
              2 => 
              array (
                'discountAmountCurrencyRate.id:' => 'discountAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'amountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'sales_order.amount * amountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.amount * amountCurrencyRateSalesOrderForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRateSalesOrderForeign',
              2 => 
              array (
                'amountCurrencyRateSalesOrderForeign.id:' => '{alias}.amountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'sales_order.amount * amountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'sales_order.amount * amountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'sales_order.amount * amountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'sales_order.amount * amountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'sales_order.amount * amountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'sales_order.amount * amountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'sales_order.amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'sales_order.amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'amountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'preDiscountedAmountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'sales_order.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'preDiscountedAmountCurrencyRate',
              2 => 
              array (
                'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.pre_discounted_amount * preDiscountedAmountCurrencyRateSalesOrderForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'preDiscountedAmountCurrencyRateSalesOrderForeign',
              2 => 
              array (
                'preDiscountedAmountCurrencyRateSalesOrderForeign.id:' => '{alias}.preDiscountedAmountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'sales_order.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'preDiscountedAmountCurrencyRate',
                2 => 
                array (
                  'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'sales_order.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'preDiscountedAmountCurrencyRate',
                2 => 
                array (
                  'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'sales_order.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'preDiscountedAmountCurrencyRate',
                2 => 
                array (
                  'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'sales_order.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'preDiscountedAmountCurrencyRate',
                2 => 
                array (
                  'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'sales_order.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'preDiscountedAmountCurrencyRate',
                2 => 
                array (
                  'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'sales_order.pre_discounted_amount * preDiscountedAmountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'preDiscountedAmountCurrencyRate',
                2 => 
                array (
                  'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'sales_order.pre_discounted_amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'sales_order.pre_discounted_amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'preDiscountedAmountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'preDiscountedAmountCurrencyRate',
              2 => 
              array (
                'preDiscountedAmountCurrencyRate.id:' => 'preDiscountedAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'grandTotalAmountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'sales_order.grand_total_amount * grandTotalAmountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'grandTotalAmountCurrencyRate',
              2 => 
              array (
                'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.grand_total_amount * grandTotalAmountCurrencyRateSalesOrderForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'grandTotalAmountCurrencyRateSalesOrderForeign',
              2 => 
              array (
                'grandTotalAmountCurrencyRateSalesOrderForeign.id:' => '{alias}.grandTotalAmountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'sales_order.grand_total_amount * grandTotalAmountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'grandTotalAmountCurrencyRate',
                2 => 
                array (
                  'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'sales_order.grand_total_amount * grandTotalAmountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'grandTotalAmountCurrencyRate',
                2 => 
                array (
                  'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'sales_order.grand_total_amount * grandTotalAmountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'grandTotalAmountCurrencyRate',
                2 => 
                array (
                  'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'sales_order.grand_total_amount * grandTotalAmountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'grandTotalAmountCurrencyRate',
                2 => 
                array (
                  'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'sales_order.grand_total_amount * grandTotalAmountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'grandTotalAmountCurrencyRate',
                2 => 
                array (
                  'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'sales_order.grand_total_amount * grandTotalAmountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'grandTotalAmountCurrencyRate',
                2 => 
                array (
                  'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'sales_order.grand_total_amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'sales_order.grand_total_amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'grandTotalAmountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'grandTotalAmountCurrencyRate',
              2 => 
              array (
                'grandTotalAmountCurrencyRate.id:' => 'grandTotalAmountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'itemsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'itemsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'invoicesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'invoicesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'SalesOrder',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'items' => 
      array (
        'type' => 'hasMany',
        'entity' => 'SalesOrderItem',
        'foreignKey' => 'salesOrderId',
        'foreign' => 'salesOrder',
      ),
      'shippingContact' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Contact',
        'key' => 'shippingContactId',
        'foreignKey' => 'id',
        'foreign' => 'salesOrdersShipping',
      ),
      'billingContact' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Contact',
        'key' => 'billingContactId',
        'foreignKey' => 'id',
        'foreign' => 'salesOrdersBilling',
      ),
      'invoices' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Invoice',
        'foreignKey' => 'salesOrderId',
        'foreign' => 'salesOrder',
      ),
      'quote' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Quote',
        'key' => 'quoteId',
        'foreignKey' => 'id',
        'foreign' => 'salesOrders',
      ),
      'opportunity' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Opportunity',
        'key' => 'opportunityId',
        'foreignKey' => 'id',
        'foreign' => 'salesOrders',
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => 'salesOrders',
      ),
      'shippingProvider' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'ShippingProvider',
        'key' => 'shippingProviderId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'tax' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Tax',
        'key' => 'taxId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'SalesOrderItem' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'salesOrderStatus' => 
      array (
        'type' => 'foreign',
        'relation' => 'salesOrder',
        'foreign' => 'status',
        'fieldType' => 'foreign',
      ),
      'quantity' => 
      array (
        'type' => 'float',
        'default' => '1',
        'fieldType' => 'float',
      ),
      'listPrice' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'sales_order_item.list_price * listPriceCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'listPriceCurrencyRate',
              2 => 
              array (
                'listPriceCurrencyRate.id:' => 'listPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'unitPrice' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'sales_order_item.unit_price * unitPriceCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRate',
              2 => 
              array (
                'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'discount' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'amount' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'sales_order_item.amount * amountCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'unitWeight' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'weight' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'taxRate' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'default' => '0',
        'fieldType' => 'float',
      ),
      'order' => 
      array (
        'type' => 'int',
        'default' => '1',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'listPriceCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'unitPriceCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'amountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'salesOrderId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'salesOrderName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'salesOrder',
        'foreign' => 'name',
      ),
      'accountId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'productId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'productName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'product',
        'foreign' => 'name',
      ),
      'listPriceConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'sales_order_item.list_price * listPriceCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'listPriceCurrencyRate',
              2 => 
              array (
                'listPriceCurrencyRate.id:' => 'listPriceCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.list_price * listPriceCurrencyRateSalesOrderItemForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'listPriceCurrencyRateSalesOrderItemForeign',
              2 => 
              array (
                'listPriceCurrencyRateSalesOrderItemForeign.id:' => '{alias}.listPriceCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'sales_order_item.list_price * listPriceCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'sales_order_item.list_price * listPriceCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'sales_order_item.list_price * listPriceCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'sales_order_item.list_price * listPriceCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'sales_order_item.list_price * listPriceCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'sales_order_item.list_price * listPriceCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'listPriceCurrencyRate',
                2 => 
                array (
                  'listPriceCurrencyRate.id:' => 'listPriceCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'sales_order_item.list_price IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'sales_order_item.list_price IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'listPriceConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'listPriceCurrencyRate',
              2 => 
              array (
                'listPriceCurrencyRate.id:' => 'listPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'unitPriceConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'sales_order_item.unit_price * unitPriceCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRate',
              2 => 
              array (
                'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.unit_price * unitPriceCurrencyRateSalesOrderItemForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRateSalesOrderItemForeign',
              2 => 
              array (
                'unitPriceCurrencyRateSalesOrderItemForeign.id:' => '{alias}.unitPriceCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'sales_order_item.unit_price * unitPriceCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'sales_order_item.unit_price * unitPriceCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'sales_order_item.unit_price * unitPriceCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'sales_order_item.unit_price * unitPriceCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'sales_order_item.unit_price * unitPriceCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'sales_order_item.unit_price * unitPriceCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'unitPriceCurrencyRate',
                2 => 
                array (
                  'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'sales_order_item.unit_price IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'sales_order_item.unit_price IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'unitPriceConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'unitPriceCurrencyRate',
              2 => 
              array (
                'unitPriceCurrencyRate.id:' => 'unitPriceCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'amountConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'sales_order_item.amount * amountCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.amount * amountCurrencyRateSalesOrderItemForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRateSalesOrderItemForeign',
              2 => 
              array (
                'amountCurrencyRateSalesOrderItemForeign.id:' => '{alias}.amountCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'sales_order_item.amount * amountCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'sales_order_item.amount * amountCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'sales_order_item.amount * amountCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'sales_order_item.amount * amountCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'sales_order_item.amount * amountCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'sales_order_item.amount * amountCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => 
                array (
                  'amountCurrencyRate.id:' => 'amountCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'sales_order_item.amount IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'sales_order_item.amount IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'amountConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'amountCurrencyRate',
              2 => 
              array (
                'amountCurrencyRate.id:' => 'amountCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => 'salesOrderItems',
      ),
      'salesOrder' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'SalesOrder',
        'key' => 'salesOrderId',
        'foreignKey' => 'id',
        'foreign' => 'items',
      ),
      'product' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Product',
        'key' => 'productId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'ShippingProvider' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'website' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'name',
      'order' => 'ASC',
    ),
  ),
  'Tax' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'rate' => 
      array (
        'type' => 'float',
        'fieldType' => 'float',
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'name',
      'order' => 'ASC',
    ),
  ),
  'BpmnFlowNode' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'number' => 
      array (
        'type' => 'int',
        'autoincrement' => true,
        'unique' => true,
        'fieldType' => 'int',
        'len' => 11,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'fieldType' => 'varchar',
      ),
      'elementId' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'fieldType' => 'varchar',
      ),
      'elementType' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'fieldType' => 'varchar',
      ),
      'element' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'elementData' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'previousFlowNodeElementType' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'fieldType' => 'varchar',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'proceedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'processedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'userTaskId' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'isLocked' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'targetId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'target',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'targetType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'target',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'targetName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'target',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
      'divergentFlowNodeId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'notNull' => false,
      ),
      'divergentFlowNodeName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'divergentFlowNode',
        'foreign' => 'name',
      ),
      'previousFlowNodeId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'notNull' => false,
      ),
      'previousFlowNodeName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'previousFlowNode',
        'foreign' => 'name',
      ),
      'flowchartId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'notNull' => false,
      ),
      'flowchartName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'flowchart',
        'foreign' => 'name',
      ),
      'processId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'notNull' => false,
      ),
      'processName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'process',
        'foreign' => 'name',
      ),
    ),
    'relations' => 
    array (
      'divergentFlowNode' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'BpmnFlowNode',
        'key' => 'divergentFlowNodeId',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true,
      ),
      'previousFlowNode' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'BpmnFlowNode',
        'key' => 'previousFlowNodeId',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true,
      ),
      'flowchart' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'BpmnFlowchart',
        'key' => 'flowchartId',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true,
      ),
      'process' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'BpmnProcess',
        'key' => 'processId',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true,
      ),
      'target' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'targetId',
      ),
    ),
    'indexes' => 
    array (
      'statusTargetTypeElementType' => 
      array (
        'columns' => 
        array (
          0 => 'status',
          1 => 'targetType',
          2 => 'elementType',
        ),
        'key' => 'IDX_STATUS_TARGET_TYPE_ELEMENT_TYPE',
      ),
      'statusElementType' => 
      array (
        'columns' => 
        array (
          0 => 'status',
          1 => 'elementType',
        ),
        'key' => 'IDX_STATUS_ELEMENT_TYPE',
      ),
      'statusProcessId' => 
      array (
        'columns' => 
        array (
          0 => 'status',
          1 => 'processId',
        ),
        'key' => 'IDX_STATUS_PROCESS_ID',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'number',
      'order' => 'DESC',
    ),
  ),
  'BpmnFlowchart' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'targetType' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'flowchart' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'base',
      ),
      'elementsDataHash' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'isActive' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'hasNoneStartEvent' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'eventStartIdList' => 
      array (
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'startWorkflowsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'startWorkflowsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'processesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'processesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'BpmnFlowchart',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'startWorkflows' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Workflow',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'processes' => 
      array (
        'type' => 'hasMany',
        'entity' => 'BpmnProcess',
        'foreignKey' => 'flowchartId',
        'foreign' => 'flowchart',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'name',
      'order' => 'ASC',
    ),
  ),
  'BpmnProcess' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Created',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'targetType' => 
      array (
        'type' => 'foreignType',
        'fieldType' => 'linkParent',
        'len' => 100,
        'notNull' => false,
        'index' => 'target',
        'attributeRole' => 'type',
        'dbType' => 'varchar',
      ),
      'flowchartData' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'startElementId' => 
      array (
        'type' => 'varchar',
        'len' => 24,
        'fieldType' => 'varchar',
      ),
      'flowchartElementsDataHash' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'flowchartVisualization' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'base',
      ),
      'createdEntitiesData' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'variables' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'endedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'targetId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'target',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'targetName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'target',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
      'flowchartId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'flowchartName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'flowchart',
        'foreign' => 'name',
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'userTasksIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'userTasksNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'flowNodesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'flowNodesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'BpmnProcess',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'target' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'targetId',
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'flowchart' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'BpmnFlowchart',
        'key' => 'flowchartId',
        'foreignKey' => 'id',
        'foreign' => 'processes',
      ),
      'userTasks' => 
      array (
        'type' => 'hasMany',
        'entity' => 'BpmnUserTask',
        'foreignKey' => 'processId',
        'foreign' => 'process',
      ),
      'flowNodes' => 
      array (
        'type' => 'hasMany',
        'entity' => 'BpmnFlowNode',
        'foreignKey' => 'processId',
        'foreign' => 'process',
        'noJoin' => true,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'BpmnUserTask' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'actionType' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'resolution' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'isResolved' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'resolutionNote' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'isCanceled' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'targetId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'target',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'targetType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'target',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'targetName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'target',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
      'processId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'processName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'process',
        'foreign' => 'name',
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'flowNodeId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'notNull' => false,
      ),
      'flowNodeName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'flowNode',
        'foreign' => 'name',
      ),
    ),
    'relations' => 
    array (
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'BpmnUserTask',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'target' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'targetId',
      ),
      'flowNode' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'BpmnFlowNode',
        'key' => 'flowNodeId',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true,
      ),
      'process' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'BpmnProcess',
        'key' => 'processId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'Report' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'entityType' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'default' => 'Grid',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'columns' => 
      array (
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray',
      ),
      'groupBy' => 
      array (
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray',
      ),
      'orderBy' => 
      array (
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray',
      ),
      'orderByList' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'filters' => 
      array (
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray',
      ),
      'filtersDataList' => 
      array (
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray',
      ),
      'runtimeFilters' => 
      array (
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray',
      ),
      'filtersData' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'columnsData' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'chartColorList' => 
      array (
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray',
      ),
      'chartColors' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'chartColor' => 
      array (
        'type' => 'varchar',
        'len' => 7,
        'default' => '#6FA8D6',
        'fieldType' => 'varchar',
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'chartType' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'depth' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'isInternal' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'internalClassName' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'emailSendingInterval' => 
      array (
        'type' => 'varchar',
        'default' => '',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'emailSendingSettingMonth' => 
      array (
        'type' => 'varchar',
        'dbType' => 'int',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'emailSendingSettingDay' => 
      array (
        'type' => 'varchar',
        'dbType' => 'int',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'emailSendingSettingWeekdays' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'emailSendingTime' => 
      array (
        'type' => 'varchar',
        'dbType' => 'time',
        'notStorable' => false,
        'fieldType' => 'base',
      ),
      'emailSendingLastDateSent' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'emailSendingDoNotSendEmptyReport' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'applyAcl' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'joinedReportLabel' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'joinedReportDataList' => 
      array (
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray',
      ),
      'categoryId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'categoryName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'category',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'portalsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'portals',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'portalsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'emailSendingUsersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'emailSendingUsers',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'emailSendingUsersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'joinedReportsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'joinedReports',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'joinedReportsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'joinedReportsColumns' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => 
        array (
          'label' => 'joinedReportLabel',
        ),
        'attributeRole' => 'columnsMap',
      ),
      'syncTargetListsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'syncTargetListsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'category' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'ReportCategory',
        'key' => 'categoryId',
        'foreignKey' => 'id',
        'foreign' => 'reports',
      ),
      'emailSendingUsers' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'reportUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'reportId',
          1 => 'userId',
        ),
        'foreign' => 'reportEmailSending',
      ),
      'syncTargetLists' => 
      array (
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'reportTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'reportId',
          1 => 'targetListId',
        ),
        'foreign' => 'syncWithReports',
      ),
      'portals' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Portal',
        'relationName' => 'portalReport',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'reportId',
          1 => 'portalId',
        ),
        'foreign' => 'reports',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Report',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'name',
      'order' => 'ASC',
    ),
  ),
  'ReportCategory' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'order' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'childList' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'parentId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'parentName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'parent',
        'foreign' => 'name',
      ),
      'reportsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'reportsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'childrenIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'childrenNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'reports' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Report',
        'foreignKey' => 'categoryId',
        'foreign' => 'category',
      ),
      'children' => 
      array (
        'type' => 'hasMany',
        'entity' => 'ReportCategory',
        'foreignKey' => 'parentId',
        'foreign' => 'parent',
      ),
      'parent' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'ReportCategory',
        'key' => 'parentId',
        'foreignKey' => 'id',
        'foreign' => 'children',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'ReportCategory',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'additionalTables' => 
    array (
      'ReportCategoryPath' => 
      array (
        'fields' => 
        array (
          'id' => 
          array (
            'type' => 'id',
            'dbType' => 'int',
            'len' => '11',
            'autoincrement' => true,
            'unique' => true,
          ),
          'ascendorId' => 
          array (
            'type' => 'varchar',
            'len' => '100',
            'index' => true,
          ),
          'descendorId' => 
          array (
            'type' => 'varchar',
            'len' => '24',
            'index' => true,
          ),
        ),
      ),
    ),
    'collection' => 
    array (
      'order' => 'ASC',
    ),
  ),
  'ReportFilter' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 50,
        'fieldType' => 'varchar',
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'entityType' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'order' => 
      array (
        'type' => 'int',
        'default' => '1',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'isActive' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'reportId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'reportName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'report',
        'foreign' => 'name',
      ),
    ),
    'relations' => 
    array (
      'report' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Report',
        'key' => 'reportId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'ReportFilter',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'order',
      'order' => 'ASC',
    ),
  ),
  'ReportPanel' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 50,
        'fieldType' => 'varchar',
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'entityType' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'reportEntityType' => 
      array (
        'type' => 'foreign',
        'relation' => 'report',
        'foreign' => 'entityType',
        'fieldType' => 'foreign',
      ),
      'isActive' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'default' => 'side',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'column' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'columnList' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray',
      ),
      'order' => 
      array (
        'type' => 'int',
        'default' => '7',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'displayTotal' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'displayOnlyTotal' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'reportType' => 
      array (
        'type' => 'foreign',
        'relation' => 'report',
        'foreign' => 'type',
        'fieldType' => 'foreign',
      ),
      'dynamicLogicVisible' => 
      array (
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject',
      ),
      'useSiMultiplier' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'reportId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'reportName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'report',
        'foreign' => 'name',
      ),
    ),
    'relations' => 
    array (
      'report' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Report',
        'key' => 'reportId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'ReportPanel',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'Workflow' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'entityType' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'default' => 'afterRecordCreated',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'isActive' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'isInternal' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool',
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'conditionsAll' => 
      array (
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray',
      ),
      'conditionsAny' => 
      array (
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray',
      ),
      'conditionsFormula' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'actions' => 
      array (
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray',
      ),
      'portalOnly' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'scheduling' => 
      array (
        'type' => 'varchar',
        'len' => 16,
        'default' => '0 0 * * *',
        'fieldType' => 'varchar',
      ),
      'lastRun' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'portalId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'portalName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'portal',
        'foreign' => 'name',
      ),
      'targetReportId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'targetReportName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'targetReport',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'flowchartId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'notNull' => false,
      ),
      'flowchartName' => 
      array (
        'type' => 'foreign',
        'relation' => 'flowchart',
        'foreign' => 'name',
        'notStorable' => false,
      ),
      'workflowLogRecordsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'workflowLogRecordsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'flowchart' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'BpmnFlowchart',
        'key' => 'flowchartId',
        'foreignKey' => 'id',
        'foreign' => 'startWorkflows',
      ),
      'workflowLogRecords' => 
      array (
        'type' => 'hasMany',
        'entity' => 'WorkflowLogRecord',
        'foreignKey' => 'workflowId',
        'foreign' => 'workflow',
      ),
      'targetReport' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Report',
        'key' => 'targetReportId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'portal' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Portal',
        'key' => 'portalId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'WorkflowLogRecord' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'workflowId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'workflowName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'workflow',
        'foreign' => 'name',
      ),
      'targetId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'target',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'targetType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'target',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'targetName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'target',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'target' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'targetId',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'workflow' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Workflow',
        'key' => 'workflowId',
        'foreignKey' => 'id',
        'foreign' => 'workflowLogRecords',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'GoogleCalendar' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'calendarId' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'MeetingIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'MeetingNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'CallIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'CallNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'googleCalendarUserIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'googleCalendarUserNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'Meeting' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Meeting',
        'foreignKey' => 'googleCalendarId',
        'foreign' => 'googleCalendar',
        'noJoin' => true,
      ),
      'Call' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Call',
        'foreignKey' => 'googleCalendarId',
        'foreign' => 'googleCalendar',
        'noJoin' => true,
      ),
      'googleCalendarUser' => 
      array (
        'type' => 'hasMany',
        'entity' => 'GoogleCalendarUser',
        'foreignKey' => 'googleCalendarId',
        'foreign' => 'googleCalendar',
      ),
    ),
  ),
  'GoogleCalendarRecurrentEvent' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'pageToken' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'lastLoadedEventTime' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'eventId' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'googleCalendarUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'googleCalendarUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'googleCalendarUser',
        'foreign' => 'name',
      ),
    ),
    'relations' => 
    array (
      'googleCalendarUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'GoogleCalendarUser',
        'key' => 'googleCalendarUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
  ),
  'GoogleCalendarUser' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'role' => 
      array (
        'type' => 'varchar',
        'default' => 'owner',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'active' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'syncToken' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'pageToken' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'lastLooked' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'lastSync' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'googleCalendarId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'googleCalendarName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'googleCalendar',
        'foreign' => 'name',
      ),
      'userId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'userName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'user',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'googleCalendarRecurrentEventIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'googleCalendarRecurrentEventNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'googleCalendarRecurrentEvent' => 
      array (
        'type' => 'hasMany',
        'entity' => 'GoogleCalendarRecurrentEvent',
        'foreignKey' => 'googleCalendarUserId',
        'foreign' => 'googleCalendarUser',
      ),
      'googleCalendar' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'GoogleCalendar',
        'key' => 'googleCalendarId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'user' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
  ),
  'GoogleContactsGroup' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'groupId' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
    ),
    'relations' => 
    array (
    ),
  ),
  'GoogleContactsPair' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'googleAccountEmail' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'googleContactId' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'parentId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'parent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar',
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'parent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent',
      ),
    ),
    'relations' => 
    array (
      'parent' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'parentId',
      ),
    ),
  ),
  'GoogleContactsUser' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'active' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool',
      ),
      'lastLooked' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'lastSync' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'googleContactsGroupId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'googleContactsGroupName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'googleContactsGroup',
        'foreign' => 'name',
      ),
      'userId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'userName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'user',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'googleContactsGroup' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'GoogleContactsGroup',
        'key' => 'googleContactsGroupId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'user' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
  ),
  'ACC' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'fechaDeInstalacion' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'origen' => 
      array (
        'type' => 'varchar',
        'default' => 'Cambaceo',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'panelesPotencia' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'nmeroDePaneles' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'kw' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'inversor' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'nmeroDeInversores' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'estructuras' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'monto' => 
      array (
        'type' => 'float',
        'fieldType' => 'currency',
        'orderBy' => 
        array (
          'sql' => 'a_c_c.monto * montoCurrencyRate.rate {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'montoCurrencyRate',
              2 => 
              array (
                'montoCurrencyRate.id:' => 'montoCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'value',
      ),
      'descuento' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'generarInstalacion' => 
      array (
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false,
      ),
      'tipoDePago' => 
      array (
        'type' => 'varchar',
        'default' => 'Contado',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'financiamiento' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'montoCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency',
      ),
      'direccionStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'fieldType' => 'text',
      ),
      'direccionCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'direccionState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'direccionCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'direccionPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar',
      ),
      'direccionMap' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'contactsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'contacts',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'contactsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'opportunitiesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'opportunities',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'opportunitiesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'montoConverted' => 
      array (
        'type' => 'float',
        'select' => 
        array (
          'sql' => 'a_c_c.monto * montoCurrencyRate.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'montoCurrencyRate',
              2 => 
              array (
                'montoCurrencyRate.id:' => 'montoCurrency',
              ),
            ),
          ),
        ),
        'selectForeign' => 
        array (
          'sql' => '{alias}.monto * montoCurrencyRateACCForeign.rate',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'montoCurrencyRateACCForeign',
              2 => 
              array (
                'montoCurrencyRateACCForeign.id:' => '{alias}.montoCurrency',
              ),
            ),
          ),
        ),
        'where' => 
        array (
          '=' => 
          array (
            'sql' => 'a_c_c.monto * montoCurrencyRate.rate = {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'montoCurrencyRate',
                2 => 
                array (
                  'montoCurrencyRate.id:' => 'montoCurrency',
                ),
              ),
            ),
          ),
          '>' => 
          array (
            'sql' => 'a_c_c.monto * montoCurrencyRate.rate > {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'montoCurrencyRate',
                2 => 
                array (
                  'montoCurrencyRate.id:' => 'montoCurrency',
                ),
              ),
            ),
          ),
          '<' => 
          array (
            'sql' => 'a_c_c.monto * montoCurrencyRate.rate < {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'montoCurrencyRate',
                2 => 
                array (
                  'montoCurrencyRate.id:' => 'montoCurrency',
                ),
              ),
            ),
          ),
          '>=' => 
          array (
            'sql' => 'a_c_c.monto * montoCurrencyRate.rate >= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'montoCurrencyRate',
                2 => 
                array (
                  'montoCurrencyRate.id:' => 'montoCurrency',
                ),
              ),
            ),
          ),
          '<=' => 
          array (
            'sql' => 'a_c_c.monto * montoCurrencyRate.rate <= {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'montoCurrencyRate',
                2 => 
                array (
                  'montoCurrencyRate.id:' => 'montoCurrency',
                ),
              ),
            ),
          ),
          '<>' => 
          array (
            'sql' => 'a_c_c.monto * montoCurrencyRate.rate <> {value}',
            'leftJoins' => 
            array (
              0 => 
              array (
                0 => 'Currency',
                1 => 'montoCurrencyRate',
                2 => 
                array (
                  'montoCurrencyRate.id:' => 'montoCurrency',
                ),
              ),
            ),
          ),
          'IS NULL' => 
          array (
            'sql' => 'a_c_c.monto IS NULL',
          ),
          'IS NOT NULL' => 
          array (
            'sql' => 'a_c_c.monto IS NOT NULL',
          ),
        ),
        'notStorable' => true,
        'orderBy' => 
        array (
          'sql' => 'montoConverted {direction}',
          'leftJoins' => 
          array (
            0 => 
            array (
              0 => 'Currency',
              1 => 'montoCurrencyRate',
              2 => 
              array (
                'montoCurrencyRate.id:' => 'montoCurrency',
              ),
            ),
          ),
        ),
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency',
      ),
      'instalacionsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'instalacions',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'instalacionsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'productsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'products',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'productsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'emailsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'emails',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'emailsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'tasksIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'emails' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Email',
        'relationName' => 'aCCEmail',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'aCCId',
          1 => 'emailId',
        ),
        'foreign' => 'aCCs',
      ),
      'products' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Product',
        'relationName' => 'aCCProduct',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'aCCId',
          1 => 'productId',
        ),
        'foreign' => 'aCCs',
      ),
      'instalacions' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Instalacion',
        'relationName' => 'aCCInstalacion',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'aCCId',
          1 => 'instalacionId',
        ),
        'foreign' => 'aCCs',
      ),
      'opportunities' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Opportunity',
        'relationName' => 'aCCOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'aCCId',
          1 => 'opportunityId',
        ),
        'foreign' => 'aCCs',
      ),
      'contacts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'aCCContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'aCCId',
          1 => 'contactId',
        ),
        'foreign' => 'aCCs',
      ),
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'calls' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Call',
        'foreignKey' => 'parentId',
        'foreign' => 'parent',
      ),
      'meetings' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Meeting',
        'foreignKey' => 'parentId',
        'foreign' => 'parent',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'ACC',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'name' => 
      array (
        'columns' => 
        array (
          0 => 'name',
          1 => 'deleted',
        ),
        'key' => 'IDX_NAME',
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
        'key' => 'IDX_ASSIGNED_USER',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'Agenda' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'tasksIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'calls' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Call',
        'foreignKey' => 'parentId',
        'foreign' => 'parent',
      ),
      'meetings' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Meeting',
        'foreignKey' => 'parentId',
        'foreign' => 'parent',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Agenda',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'name' => 
      array (
        'columns' => 
        array (
          0 => 'name',
          1 => 'deleted',
        ),
        'key' => 'IDX_NAME',
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
        'key' => 'IDX_ASSIGNED_USER',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'Aislado' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'noViable' => 
      array (
        'type' => 'varchar',
        'default' => 'Espacio',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'detallesDeAislamiento' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'opportunitiesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'opportunities',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'opportunitiesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'contactsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'contacts',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'contactsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'contacts1Ids' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'contacts1',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'contacts1Names' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'tasksIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'contacts1' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Contact',
        'foreignKey' => 'aisladoId',
        'foreign' => 'aislado',
      ),
      'contacts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'aisladoContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'aisladoId',
          1 => 'contactId',
        ),
        'foreign' => 'aislados',
      ),
      'opportunities' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Opportunity',
        'relationName' => 'aisladoOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'aisladoId',
          1 => 'opportunityId',
        ),
        'foreign' => 'aislados',
      ),
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'calls' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Call',
        'foreignKey' => 'parentId',
        'foreign' => 'parent',
      ),
      'meetings' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Meeting',
        'foreignKey' => 'parentId',
        'foreign' => 'parent',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Aislado',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'name' => 
      array (
        'columns' => 
        array (
          0 => 'name',
          1 => 'deleted',
        ),
        'key' => 'IDX_NAME',
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
        'key' => 'IDX_ASSIGNED_USER',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'Instalacion' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'fechaPago' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'etapa' => 
      array (
        'type' => 'varchar',
        'default' => 'Inventario',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'fechaInstalacion' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'guia' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'diasTranscurridos' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'tipoDePago' => 
      array (
        'type' => 'varchar',
        'default' => 'Contado',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'financiamiento' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'direccionStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'fieldType' => 'text',
      ),
      'direccionCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'direccionState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'direccionCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar',
      ),
      'direccionPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar',
      ),
      'direccionMap' => 
      array (
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'contactsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'contacts',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'contactsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'opportunitiesIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'opportunities',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'opportunitiesNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'aCCsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'aCCs',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'aCCsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false,
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'tasksIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'aCCs' => 
      array (
        'type' => 'manyMany',
        'entity' => 'ACC',
        'relationName' => 'aCCInstalacion',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'instalacionId',
          1 => 'aCCId',
        ),
        'foreign' => 'instalacions',
      ),
      'opportunities' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Opportunity',
        'relationName' => 'instalacionOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'instalacionId',
          1 => 'opportunityId',
        ),
        'foreign' => 'instalacions',
      ),
      'contacts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'instalacionContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'instalacionId',
          1 => 'contactId',
        ),
        'foreign' => 'instalacions',
      ),
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'calls' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Call',
        'foreignKey' => 'parentId',
        'foreign' => 'parent',
      ),
      'meetings' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Meeting',
        'foreignKey' => 'parentId',
        'foreign' => 'parent',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Instalacion',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'name' => 
      array (
        'columns' => 
        array (
          0 => 'name',
          1 => 'deleted',
        ),
        'key' => 'IDX_NAME',
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
        'key' => 'IDX_ASSIGNED_USER',
      ),
      'system_fullTextSearch' => 
      array (
        'columns' => 
        array (
          0 => 'name',
        ),
        'flags' => 
        array (
          0 => 'fulltext',
        ),
        'key' => 'IDX_SYSTEM_FULL_TEXT_SEARCH',
      ),
    ),
    'fullTextSearchColumnList' => 
    array (
      0 => 'name',
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'Inversor' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'potencia' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'precio' => 
      array (
        'type' => 'float',
        'fieldType' => 'float',
      ),
      'marca' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'vmin' => 
      array (
        'type' => 'float',
        'fieldType' => 'float',
      ),
      'vmax' => 
      array (
        'type' => 'float',
        'fieldType' => 'float',
      ),
      'pmin' => 
      array (
        'type' => 'float',
        'fieldType' => 'float',
      ),
      'pmax' => 
      array (
        'type' => 'float',
        'fieldType' => 'float',
      ),
      'iSC' => 
      array (
        'type' => 'float',
        'fieldType' => 'float',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
    ),
    'relations' => 
    array (
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Inversor',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'name' => 
      array (
        'columns' => 
        array (
          0 => 'name',
          1 => 'deleted',
        ),
        'key' => 'IDX_NAME',
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
        'key' => 'IDX_ASSIGNED_USER',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'Panel' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'marca' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'potencia' => 
      array (
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11,
      ),
      'iSC' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'vOC' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'precio' => 
      array (
        'type' => 'float',
        'fieldType' => 'float',
      ),
      'vMP' => 
      array (
        'type' => 'float',
        'fieldType' => 'float',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
    ),
    'relations' => 
    array (
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Panel',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'name' => 
      array (
        'columns' => 
        array (
          0 => 'name',
          1 => 'deleted',
        ),
        'key' => 'IDX_NAME',
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
        'key' => 'IDX_ASSIGNED_USER',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
  'Ticket' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
        'fieldType' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime',
      ),
      'estatus' => 
      array (
        'type' => 'varchar',
        'default' => 'abierto',
        'fieldType' => 'varchar',
        'len' => 255,
      ),
      'diasTranscurridos' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float',
      ),
      'publicado' => 
      array (
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date',
      ),
      'folio' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'notNull' => false,
        'unique' => false,
        'fieldType' => 'varchar',
      ),
      'createdById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
      ),
      'teamsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
      ),
      'capturaId' => 
      array (
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => false,
        'notNull' => false,
      ),
      'capturaName' => 
      array (
        'type' => 'foreign',
        'relation' => 'captura',
        'foreign' => 'name',
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'followersNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'notExportable' => true,
      ),
      'tasksIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true,
      ),
    ),
    'relations' => 
    array (
      'captura' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'capturaId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
      ),
      'calls' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Call',
        'foreignKey' => 'parentId',
        'foreign' => 'parent',
      ),
      'meetings' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Meeting',
        'foreignKey' => 'parentId',
        'foreign' => 'parent',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => 
        array (
          0 => 'entityId',
          1 => 'teamId',
        ),
        'conditions' => 
        array (
          'entityType' => 'Ticket',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL,
      ),
    ),
    'indexes' => 
    array (
      'name' => 
      array (
        'columns' => 
        array (
          0 => 'name',
          1 => 'deleted',
        ),
        'key' => 'IDX_NAME',
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
        'key' => 'IDX_ASSIGNED_USER',
      ),
    ),
    'collection' => 
    array (
      'orderBy' => 'createdAt',
      'order' => 'DESC',
    ),
  ),
);
?>