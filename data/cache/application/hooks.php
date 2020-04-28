<?php
return array (
  'Opportunity' => 
  array (
    'beforeSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Modules\\Sales\\Hooks\\Opportunity\\OpportunityItem',
        'order' => 9,
      ),
    ),
    'afterSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Modules\\Sales\\Hooks\\Opportunity\\OpportunityItem',
        'order' => 9,
      ),
    ),
  ),
  'BpmnProcess' => 
  array (
    'afterSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Modules\\Advanced\\Hooks\\BpmnProcess\\StartProcess',
        'order' => 9,
      ),
      1 => 
      array (
        'className' => '\\Espo\\Modules\\Advanced\\Hooks\\BpmnProcess\\StopProcess',
        'order' => 9,
      ),
    ),
  ),
  'BpmnUserTask' => 
  array (
    'afterSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Modules\\Advanced\\Hooks\\BpmnUserTask\\Resolve',
        'order' => 9,
      ),
    ),
  ),
  'Common' => 
  array (
    'afterSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\AssignmentEmailNotification',
        'order' => 9,
      ),
      1 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\Stream',
        'order' => 9,
      ),
      2 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\Notifications',
        'order' => 10,
      ),
      3 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\StreamNotesAcl',
        'order' => 10,
      ),
      4 => 
      array (
        'className' => '\\Espo\\Modules\\Advanced\\Hooks\\Common\\Workflow',
        'order' => 99,
      ),
    ),
    'beforeSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\CurrencyConverted',
        'order' => 1,
      ),
      1 => 
      array (
        'className' => '\\Espo\\Modules\\Google\\Hooks\\Common\\GoogleCalendar',
        'order' => 8,
      ),
      2 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\NextNumber',
        'order' => 9,
      ),
      3 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\Formula',
        'order' => 11,
      ),
    ),
    'beforeRemove' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\Notifications',
        'order' => 10,
      ),
    ),
    'afterRemove' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\Stream',
        'order' => 9,
      ),
      1 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\Notifications',
        'order' => 10,
      ),
    ),
    'afterRelate' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\Stream',
        'order' => 9,
      ),
    ),
    'afterUnrelate' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\Stream',
        'order' => 9,
      ),
    ),
  ),
  'Workflow' => 
  array (
    'afterSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Modules\\Advanced\\Hooks\\Workflow\\ReloadWorkflows',
        'order' => 9,
      ),
    ),
    'afterRemove' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Modules\\Advanced\\Hooks\\Workflow\\ReloadWorkflows',
        'order' => 9,
      ),
    ),
  ),
  'Call' => 
  array (
    'beforeSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Modules\\Google\\Hooks\\Call\\Google',
        'order' => 9,
      ),
    ),
  ),
  'ExternalAccount' => 
  array (
    'afterSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Modules\\Google\\Hooks\\ExternalAccount\\Google',
        'order' => 9,
      ),
    ),
    'beforeSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Modules\\Google\\Hooks\\ExternalAccount\\Google',
        'order' => 9,
      ),
    ),
  ),
  'Integration' => 
  array (
    'afterSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Integration\\GoogleMaps',
        'order' => 9,
      ),
      1 => 
      array (
        'className' => '\\Espo\\Modules\\Google\\Hooks\\Integration\\Google',
        'order' => 20,
      ),
    ),
  ),
  'Meeting' => 
  array (
    'beforeSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Modules\\Google\\Hooks\\Meeting\\Google',
        'order' => 9,
      ),
    ),
  ),
  'Note' => 
  array (
    'beforeSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Note\\Mentions',
        'order' => 9,
      ),
    ),
    'afterSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Note\\Notifications',
        'order' => 14,
      ),
      1 => 
      array (
        'className' => '\\Espo\\Hooks\\Note\\WebSocketSubmit',
        'order' => 20,
      ),
    ),
  ),
  'Notification' => 
  array (
    'afterSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Notification\\WebSocketSubmit',
        'order' => 20,
      ),
    ),
  ),
);
?>