<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'user' => 'User',
      'action' => 'Action',
      'createdAt' => 'Date',
      'target' => 'Target',
      'targetType' => 'Target Type',
      'authToken' => 'Auth Token',
      'ipAddress' => 'IP Address',
      'authLogRecord' => 'Auth Log Record',
    ),
    'links' => 
    array (
      'authToken' => 'Auth Token',
      'authLogRecord' => 'Auth Log Record',
      'user' => 'User',
      'target' => 'Target',
    ),
    'presetFilters' => 
    array (
      'onlyMy' => 'Only My',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'read' => 'Read',
        'update' => 'Update',
        'delete' => 'Delete',
        'create' => 'Create',
      ),
    ),
  ),
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Enabled',
      'Disabled' => 'Disabled',
      'System' => 'System',
      'Users' => 'Users',
      'Email' => 'Email',
      'Data' => 'Data',
      'Customization' => 'Customization',
      'Available Fields' => 'Available Fields',
      'Layout' => 'Layout',
      'Entity Manager' => 'Entity Manager',
      'Add Panel' => 'Add Panel',
      'Add Field' => 'Add Field',
      'Settings' => 'Settings',
      'Scheduled Jobs' => 'Scheduled Jobs',
      'Upgrade' => 'Upgrade',
      'Clear Cache' => 'Clear Cache',
      'Rebuild' => 'Rebuild',
      'Teams' => 'Teams',
      'Roles' => 'Roles',
      'Portal' => 'Portal',
      'Portals' => 'Portals',
      'Portal Roles' => 'Portal Roles',
      'Portal Users' => 'Portal Users',
      'API Users' => 'API Users',
      'Outbound Emails' => 'Outbound Emails',
      'Group Email Accounts' => 'Group Email Accounts',
      'Personal Email Accounts' => 'Personal Email Accounts',
      'Inbound Emails' => 'Inbound Emails',
      'Email Templates' => 'Email Templates',
      'Import' => 'Import',
      'Layout Manager' => 'Layout Manager',
      'User Interface' => 'User Interface',
      'Auth Tokens' => 'Auth Tokens',
      'Auth Log' => 'Auth Log',
      'Authentication' => 'Authentication',
      'Currency' => 'Currency',
      'Integrations' => 'Integrations',
      'Extensions' => 'Extensions',
      'Upload' => 'Upload',
      'Installing...' => 'Installing...',
      'Upgrading...' => 'Upgrading...',
      'Upgraded successfully' => 'Upgraded successfully',
      'Installed successfully' => 'Installed successfully',
      'Ready for upgrade' => 'Ready for upgrade',
      'Run Upgrade' => 'Run Upgrade',
      'Install' => 'Install',
      'Ready for installation' => 'Ready for installation',
      'Uninstalling...' => 'Uninstalling...',
      'Uninstalled' => 'Uninstalled',
      'Create Entity' => 'Create Entity',
      'Edit Entity' => 'Edit Entity',
      'Create Link' => 'Create Link',
      'Edit Link' => 'Edit Link',
      'Notifications' => 'Notifications',
      'Jobs' => 'Jobs',
      'Reset to Default' => 'Reset to Default',
      'Email Filters' => 'Email Filters',
      'Action History' => 'Action History',
      'Label Manager' => 'Label Manager',
      'Template Manager' => 'Template Manager',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => 'Attachments',
      'System Requirements' => 'System Requirements',
      'PDF Templates' => 'PDF Templates',
      'PHP Settings' => 'PHP Settings',
      'Database Settings' => 'Database Settings',
      'Permissions' => 'Permissions',
      'Success' => 'Success',
      'Fail' => 'Fail',
      'is recommended' => 'is recommended',
      'extension is missing' => 'extension is missing',
      'Workflow Manager' => 'Workflows',
      'Flowcharts' => 'Flowcharts',
      'Processes' => 'Processes',
      'Business Process Management' => 'Business Process Management',
      'Report Filters' => 'Report Filters',
      'Report Panels' => 'Report Panels',
    ),
    'layouts' => 
    array (
      'list' => 'List',
      'detail' => 'Detail',
      'listSmall' => 'List (Small)',
      'detailSmall' => 'Detail (Small)',
      'detailPortal' => 'Detail (Portal)',
      'detailSmallPortal' => 'Detail (Small, Portal)',
      'listSmallPortal' => 'List (Small, Portal)',
      'listPortal' => 'List (Portal)',
      'relationshipsPortal' => 'Relationship Panels (Portal)',
      'filters' => 'Search Filters',
      'massUpdate' => 'Mass Update',
      'relationships' => 'Relationship Panels',
      'sidePanelsDetail' => 'Side Panels (Detail)',
      'sidePanelsEdit' => 'Side Panels (Edit)',
      'sidePanelsDetailSmall' => 'Side Panels (Detail Small)',
      'sidePanelsEditSmall' => 'Side Panels (Edit Small)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Convert Lead',
      'listForAccount' => 'List (for Account)',
      'listForContact' => 'List (for Contact)',
      'listItem' => 'List (Item)',
      'detailBottomTotal' => 'Bottom Total',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Address',
      'array' => 'Array',
      'foreign' => 'Foreign',
      'duration' => 'Duration',
      'password' => 'Password',
      'personName' => 'Person Name',
      'autoincrement' => 'Auto-increment',
      'bool' => 'Boolean',
      'currency' => 'Currency',
      'currencyConverted' => 'Currency (Converted)',
      'date' => 'Date',
      'datetime' => 'Date-Time',
      'datetimeOptional' => 'Date/Date-Time',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Integer',
      'link' => 'Link',
      'linkMultiple' => 'Link Multiple',
      'linkParent' => 'Link Parent',
      'phone' => 'Phone',
      'text' => 'Text',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'File',
      'image' => 'Image',
      'multiEnum' => 'Multi-Enum',
      'attachmentMultiple' => 'Attachment Multiple',
      'rangeInt' => 'Range Integer',
      'rangeFloat' => 'Range Float',
      'rangeCurrency' => 'Range Currency',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Map',
      'number' => 'Number (auto-increment)',
      'colorpicker' => 'Color Picker',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json Object',
    ),
    'fields' => 
    array (
      'type' => 'Type',
      'name' => 'Name',
      'label' => 'Label',
      'tooltipText' => 'Tooltip Text',
      'required' => 'Required',
      'default' => 'Default',
      'maxLength' => 'Max Length',
      'options' => 'Options',
      'after' => 'After (field)',
      'before' => 'Before (field)',
      'link' => 'Link',
      'field' => 'Field',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Translation',
      'previewSize' => 'Preview Size',
      'noEmptyString' => 'Empty string value is not allowed',
      'defaultType' => 'Default Type',
      'seeMoreDisabled' => 'Disable Text Cut',
      'cutHeight' => 'Cut Height (px)',
      'entityList' => 'Entity List',
      'isSorted' => 'Is Sorted (alphabetically)',
      'audited' => 'Audited',
      'trim' => 'Trim',
      'height' => 'Height (px)',
      'minHeight' => 'Min Height (px)',
      'provider' => 'Provider',
      'typeList' => 'Type List',
      'rows' => 'Number of rows of textarea',
      'lengthOfCut' => 'Length of cut',
      'sourceList' => 'Source List',
      'prefix' => 'Prefix',
      'nextNumber' => 'Next Number',
      'padLength' => 'Pad Length',
      'disableFormatting' => 'Disable Formatting',
      'dynamicLogicVisible' => 'Conditions making field visible',
      'dynamicLogicReadOnly' => 'Conditions making field read-only',
      'dynamicLogicRequired' => 'Conditions making field required',
      'dynamicLogicOptions' => 'Conditional options',
      'probabilityMap' => 'Stage Probabilities (%)',
      'readOnly' => 'Read-only',
      'maxFileSize' => 'Max File Size (Mb)',
      'isPersonalData' => 'Is Personal Data',
      'useIframe' => 'Use Iframe',
      'useNumericFormat' => 'Use Numeric Format',
      'strip' => 'Strip',
      'minuteStep' => 'Minutes Step',
      'inlineEditDisabled' => 'Disable Inline Edit',
      'allowCustomOptions' => 'Allow Custom Options',
      'displayAsLabel' => 'Display as Label',
      'maxCount' => 'Max Item Count',
      'displayRawText' => 'Display raw text (no markdown)',
      'useAutoincrement' => 'Auto-Increment',
      'copyFieldList' => 'Fields to Copy',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'EspoCRM will be upgraded to version **{version}**. Please be patient as this may take a while.',
      'upgradeDone' => 'EspoCRM has been upgraded to version **{version}**.',
      'upgradeBackup' => 'We recommend making a backup of your EspoCRM files and data before upgrading.',
      'thousandSeparatorEqualsDecimalMark' => 'The thousands separator character can not be the same as the decimal point character.',
      'userHasNoEmailAddress' => 'User has no email address.',
      'selectEntityType' => 'Select entity type in the left menu.',
      'selectUpgradePackage' => 'Select upgrade package',
      'downloadUpgradePackage' => 'Download upgrade package(s) [here]({url}).',
      'selectLayout' => 'Select needed layout in the left menu and edit it.',
      'selectExtensionPackage' => 'Select extension package',
      'extensionInstalled' => 'Extension {name} {version} has been installed.',
      'installExtension' => 'Extension {name} {version} is ready for an installation.',
      'cronIsNotConfigured' => 'Scheduled jobs are not running.  Hence inbound emails, notifications and reminders are not working. Please follow the [instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) to setup cron job.',
      'newVersionIsAvailable' => 'New EspoCRM version {latestVersion} is available.',
      'newExtensionVersionIsAvailable' => 'New {extensionName} version {latestVersion} is available.',
      'uninstallConfirmation' => 'Are you sure you want to uninstall the extension?',
      'upgradeInfo' => 'Check the [documentation]({url}) about how to upgrade your EspoCRM instance.',
      'upgradeRecommendation' => 'This way of upgrading is not recommended. It\'s better to upgrade from CLI.',
      'newAdvancedPackVersionIsAvailable' => 'New Advanced Pack version {latestVersion} is available. It can be downloaded on the customer portal.',
    ),
    'descriptions' => 
    array (
      'settings' => 'System settings of application.',
      'scheduledJob' => 'Jobs which are executed by cron.',
      'jobs' => 'Jobs execute tasks in the background.',
      'upgrade' => 'Upgrade EspoCRM.',
      'clearCache' => 'Clear all backend cache.',
      'rebuild' => 'Rebuild backend and clear cache.',
      'users' => 'Users management.',
      'teams' => 'Teams management.',
      'roles' => 'Roles management.',
      'portals' => 'Portals management.',
      'portalRoles' => 'Roles for portal.',
      'portalUsers' => 'Users of portal.',
      'outboundEmails' => 'SMTP settings for outgoing emails.',
      'groupEmailAccounts' => 'Group IMAP email accounts. Email import and Email-to-Case.',
      'personalEmailAccounts' => 'Users email accounts.',
      'emailTemplates' => 'Templates for outbound emails.',
      'import' => 'Import data from CSV file.',
      'layoutManager' => 'Customize layouts (list, detail, edit, search, mass update).',
      'entityManager' => 'Create and edit custom entities. Manage fields and relationships.',
      'userInterface' => 'Configure UI.',
      'authTokens' => 'Active auth sessions. IP address and last access date.',
      'authentication' => 'Authentication settings.',
      'currency' => 'Currency settings and rates.',
      'extensions' => 'Install or uninstall extensions.',
      'integrations' => 'Integration with third-party services.',
      'notifications' => 'In-app and email notification settings.',
      'inboundEmails' => 'Settings for incoming emails.',
      'emailFilters' => 'Email messages that match the specified filter won\'t be imported.',
      'actionHistory' => 'Log of user actions.',
      'labelManager' => 'Customize application labels.',
      'templateManager' => 'Customize message templates.',
      'authLog' => 'Login history.',
      'leadCapture' => 'API entry points for Web-to-Lead.',
      'attachments' => 'All file attachments stored in the system.',
      'systemRequirements' => 'System Requirements for EspoCRM.',
      'apiUsers' => 'Separate users for integration purposes.',
      'pdfTemplates' => 'Templates for printing to PDF.',
      'workflowManager' => 'Configure Workflow rules.',
      'bpmnFlowcharts' => 'Definitions of business processes.',
      'bpmnProcesses' => 'Instances of business processes.',
      'reportFilters' => 'Custom list view filters based on reports.',
      'reportPanels' => 'Detail view panels showing report results.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'X-Small',
        'small' => 'Small',
        'medium' => 'Medium',
        'large' => 'Large',
      ),
    ),
    'logicalOperators' => 
    array (
      'and' => 'AND',
      'or' => 'OR',
      'not' => 'NOT',
    ),
    'systemRequirements' => 
    array (
      'requiredPhpVersion' => 'PHP Version',
      'requiredMysqlVersion' => 'MySQL Version',
      'requiredMariadbVersion' => 'MariaDB version',
      'host' => 'Host Name',
      'dbname' => 'Database Name',
      'user' => 'User Name',
      'writable' => 'Writable',
      'readable' => 'Readable',
    ),
    'templates' => 
    array (
      'accessInfo' => 'Access Info',
      'accessInfoPortal' => 'Access Info for Portals',
      'assignment' => 'Assignment',
      'mention' => 'Mention',
      'noteEmailRecieved' => 'Note about Recieved Email',
      'notePost' => 'Note about Post',
      'notePostNoParent' => 'Note about Post (no Parent)',
      'noteStatus' => 'Note about Status Update',
      'passwordChangeLink' => 'Password Change Link',
      'invitation' => 'Invitation',
      'reminder' => 'Reminder',
      'salesEmailPdf' => 'Email PDF (Sales)',
      'reportSendingGrid1' => 'Report Grid-1',
      'reportSendingGrid2' => 'Report Grid-2',
      'reportSendingList' => 'Report List',
    ),
  ),
  'ApiUser' => 
  array (
    'labels' => 
    array (
      'Create ApiUser' => 'Create API User',
    ),
  ),
  'Attachment' => 
  array (
    'fields' => 
    array (
      'role' => 'Role',
      'related' => 'Related',
      'file' => 'File',
      'type' => 'Type',
      'field' => 'Field',
      'sourceId' => 'Source ID',
      'storage' => 'Storage',
      'size' => 'Size (bytes)',
    ),
    'options' => 
    array (
      'role' => 
      array (
        'Attachment' => 'Attachment',
        'Inline Attachment' => 'Inline Attachment',
        'Import File' => 'Import File',
        'Export File' => 'Export File',
        'Mail Merge' => 'Mail Merge',
        'Mass Pdf' => 'Mass Pdf',
      ),
    ),
    'insertFromSourceLabels' => 
    array (
      'Document' => 'Insert Document',
    ),
    'presetFilters' => 
    array (
      'orphan' => 'Orphan',
    ),
  ),
  'AuthLogRecord' => 
  array (
    'fields' => 
    array (
      'username' => 'Username',
      'ipAddress' => 'IP Address',
      'requestTime' => 'Request Time',
      'createdAt' => 'Requested At',
      'isDenied' => 'Is Denied',
      'denialReason' => 'Denial Reason',
      'portal' => 'Portal',
      'user' => 'User',
      'authToken' => 'Auth Token Created',
      'requestUrl' => 'Request URL',
      'requestMethod' => 'Request Method',
      'authTokenIsActive' => 'Auth Token is Active',
      'authenticationMethod' => 'Authentication Method',
    ),
    'links' => 
    array (
      'authToken' => 'Auth Token Created',
      'user' => 'User',
      'portal' => 'Portal',
      'actionHistoryRecords' => 'Action History',
    ),
    'presetFilters' => 
    array (
      'denied' => 'Denied',
      'accepted' => 'Accepted',
    ),
    'options' => 
    array (
      'denialReason' => 
      array (
        'CREDENTIALS' => 'Invalid credentials',
        'INACTIVE_USER' => 'Inactive user',
        'IS_PORTAL_USER' => 'Portal user',
        'IS_NOT_PORTAL_USER' => 'Not a portal user',
        'USER_IS_NOT_IN_PORTAL' => 'User is not related to the portal',
      ),
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'User',
      'ipAddress' => 'IP Address',
      'lastAccess' => 'Last Access Date',
      'createdAt' => 'Login Date',
      'isActive' => 'Is Active',
      'portal' => 'Portal',
    ),
    'links' => 
    array (
      'actionHistoryRecords' => 'Action History',
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
      'inactive' => 'Inactive',
    ),
    'labels' => 
    array (
      'Set Inactive' => 'Set Inactive',
    ),
    'massActions' => 
    array (
      'setInactive' => 'Set Inactive',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Title',
      'dateFrom' => 'Date From',
      'dateTo' => 'Date To',
      'autorefreshInterval' => 'Auto-refresh Interval',
      'displayRecords' => 'Display Records',
      'isDoubleHeight' => 'Height 2x',
      'mode' => 'Mode',
      'enabledScopeList' => 'What to display',
      'users' => 'Users',
      'entityType' => 'Entity Type',
      'primaryFilter' => 'Primary Filter',
      'boolFilterList' => 'Additional Filters',
      'sortBy' => 'Order (field)',
      'sortDirection' => 'Order (direction)',
      'expandedLayout' => 'Layout',
      'dateFilter' => 'Date Filter',
      'futureDays' => 'Next X Days',
      'useLastStage' => 'Group by last reached stage',
      'report' => 'Report',
      'column' => 'Summation Column',
      'displayOnlyCount' => 'Display Only Total',
      'displayTotal' => 'Display Total',
      'useSiMultiplier' => 'SI Multiplier',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Week (agenda)',
        'basicWeek' => 'Week',
        'month' => 'Month',
        'basicDay' => 'Day',
        'agendaDay' => 'Day (agenda)',
        'timeline' => 'Timeline',
      ),
    ),
    'messages' => 
    array (
      'selectEntityType' => 'Select Entity Type in dashlet options.',
    ),
  ),
  'DynamicLogic' => 
  array (
    'labels' => 
    array (
      'Field' => 'Field',
    ),
    'options' => 
    array (
      'operators' => 
      array (
        'equals' => 'Equals',
        'notEquals' => 'Not Equals',
        'greaterThan' => 'Greater Than',
        'lessThan' => 'Less Than',
        'greaterThanOrEquals' => 'Greater Than Or Equals',
        'lessThanOrEquals' => 'Less Than Or Equals',
        'in' => 'In',
        'notIn' => 'Not In',
        'inPast' => 'In Past',
        'inFuture' => 'Is Future',
        'isToday' => 'Is Today',
        'isTrue' => 'Is True',
        'isFalse' => 'Is False',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
        'contains' => 'Contains',
        'notContains' => 'Not Contains',
        'has' => 'Contains',
        'notHas' => 'Not Contains',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Name (Subject)',
      'parent' => 'Parent',
      'status' => 'Status',
      'dateSent' => 'Date Sent',
      'from' => 'From',
      'to' => 'To',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Reply To',
      'replyToString' => 'Reply To (String)',
      'personStringData' => 'Person String Data',
      'isHtml' => 'Is Html',
      'body' => 'Body',
      'bodyPlain' => 'Body (Plain)',
      'subject' => 'Subject',
      'attachments' => 'Attachments',
      'selectTemplate' => 'Select Template',
      'fromEmailAddress' => 'From Address (link)',
      'toEmailAddresses' => 'To EmailAddresses',
      'emailAddress' => 'Email Address',
      'deliveryDate' => 'Delivery Date',
      'account' => 'Account',
      'users' => 'Users',
      'replied' => 'Replied',
      'replies' => 'Replies',
      'isRead' => 'Is Read',
      'isNotRead' => 'Is Not Read',
      'isImportant' => 'Is Important',
      'isReplied' => 'Is Replied',
      'isNotReplied' => 'Is Not Replied',
      'isUsers' => 'Is User\'s',
      'inTrash' => 'In Trash',
      'sentBy' => 'Sent By',
      'folder' => 'Folder',
      'inboundEmails' => 'Group Accounts',
      'emailAccounts' => 'Personal Accounts',
      'hasAttachment' => 'Has Attachment',
      'assignedUsers' => 'Assigned Users',
      'ccEmailAddresses' => 'CC Email Addresses',
      'bccEmailAddresses' => 'BCC EmailAddresses',
      'replyToEmailAddresses' => 'Reply-To EmailAddresses',
      'messageId' => 'Message Id',
      'messageIdInternal' => 'Message Id (Internal)',
      'folderId' => 'Folder Id',
      'fromName' => 'From Name',
      'fromString' => 'From String',
      'fromAddress' => 'From Address',
      'replyToName' => 'Reply-To Name',
      'replyToAddress' => 'Reply-To Address',
      'isSystem' => 'Is System',
      'aCCs' => 'ACCs',
    ),
    'links' => 
    array (
      'replied' => 'Replied',
      'replies' => 'Replies',
      'inboundEmails' => 'Group Accounts',
      'emailAccounts' => 'Personal Accounts',
      'assignedUsers' => 'Assigned Users',
      'sentBy' => 'Sent By',
      'attachments' => 'Attachments',
      'fromEmailAddress' => 'From Email Address',
      'toEmailAddresses' => 'To EmailAddresses',
      'ccEmailAddresses' => 'CC EmailAddresses',
      'bccEmailAddresses' => 'BCC EmailAddresses',
      'replyToEmailAddresses' => 'Reply-To EmailAddresses',
      'aCCs' => 'ACCs',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Draft',
        'Sending' => 'Sending',
        'Sent' => 'Sent',
        'Archived' => 'Archived',
        'Received' => 'Received',
        'Failed' => 'Failed',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Archive Email',
      'Archive Email' => 'Archive Email',
      'Compose' => 'Compose',
      'Reply' => 'Reply',
      'Reply to All' => 'Reply to All',
      'Forward' => 'Forward',
      'Original message' => 'Original message',
      'Forwarded message' => 'Forwarded message',
      'Email Accounts' => 'Personal Email Accounts',
      'Inbound Emails' => 'Group Email Accounts',
      'Email Templates' => 'Email Templates',
      'Send Test Email' => 'Send Test Email',
      'Send' => 'Send',
      'Email Address' => 'Email Address',
      'Mark Read' => 'Mark Read',
      'Sending...' => 'Sending...',
      'Save Draft' => 'Save Draft',
      'Mark all as read' => 'Mark all as read',
      'Show Plain Text' => 'Show Plain Text',
      'Mark as Important' => 'Mark as Important',
      'Unmark Importance' => 'Unmark Importance',
      'Move to Trash' => 'Move to Trash',
      'Retrieve from Trash' => 'Retrieve from Trash',
      'Move to Folder' => 'Move to Folder',
      'Filters' => 'Filters',
      'Folders' => 'Folders',
      'View Users' => 'View Users',
      'Create Lead' => 'Create Lead',
      'Create Contact' => 'Create Contact',
      'Add to Contact' => 'Add to Contact',
      'Add to Lead' => 'Add to Lead',
      'Create Task' => 'Create Task',
      'Create Case' => 'Create Case',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'No SMTP setup. {link}.',
      'testEmailSent' => 'Test email has been sent',
      'emailSent' => 'Email has been sent',
      'savedAsDraft' => 'Saved as draft',
      'confirmInsertTemplate' => 'The email body will be lost. Are you sure you want to insert the template?',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Sent',
      'archived' => 'Archived',
      'inbox' => 'Inbox',
      'drafts' => 'Drafts',
      'trash' => 'Trash',
      'important' => 'Important',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Mark as Read',
      'markAsNotRead' => 'Mark as Not Read',
      'markAsImportant' => 'Mark as Important',
      'markAsNotImportant' => 'Unmark Importance',
      'moveToTrash' => 'Move to Trash',
      'moveToFolder' => 'Move to Folder',
      'retrieveFromTrash' => 'Retrieve from Trash',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'host' => 'Host',
      'username' => 'Username',
      'password' => 'Password',
      'port' => 'Port',
      'monitoredFolders' => 'Monitored Folders',
      'ssl' => 'SSL',
      'fetchSince' => 'Fetch Since',
      'emailAddress' => 'Email Address',
      'sentFolder' => 'Sent Folder',
      'storeSentEmails' => 'Store Sent Emails',
      'keepFetchedEmailsUnread' => 'Keep Fetched Emails Unread',
      'emailFolder' => 'Put in Folder',
      'useImap' => 'Fetch Emails',
      'useSmtp' => 'Use SMTP',
      'smtpHost' => 'SMTP Host',
      'smtpPort' => 'SMTP Port',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP Security',
      'smtpUsername' => 'SMTP Username',
      'smtpPassword' => 'SMTP Password',
    ),
    'links' => 
    array (
      'filters' => 'Filters',
      'emails' => 'Emails',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Active',
        'Inactive' => 'Inactive',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Create Email Account',
      'IMAP' => 'IMAP',
      'Main' => 'Main',
      'Test Connection' => 'Test Connection',
      'Send Test Email' => 'Send Test Email',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Could not connect to IMAP server',
      'connectionIsOk' => 'Connection is Ok',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Multiple folders should be separated by comma.

You can add a \'Sent\' folder to sync emails sent from an external email client.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server. Email Address field should match the address emails will be sent from.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Primary',
      'Opted Out' => 'Opted Out',
      'Invalid' => 'Invalid',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'From',
      'to' => 'To',
      'subject' => 'Subject',
      'bodyContains' => 'Body Contains',
      'action' => 'Action',
      'isGlobal' => 'Is Global',
      'emailFolder' => 'Folder',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Create Email Filter',
      'Emails' => 'Emails',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Ignore',
        'Move to Folder' => 'Put in Folder',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Give the filter a descriptive name.',
      'subject' => 'Use a wildcard *:

text* - starts with text,
*text* - contains text,
*text - ends with text.',
      'bodyContains' => 'Body of the email contains any of the specified words or phrases.',
      'from' => 'Emails being sent from the specified address. Leave empty if not needed. You can use wildcard *.',
      'to' => 'Emails being sent to the specified address. Leave empty if not needed. You can use wildcard *.',
      'isGlobal' => 'Applies this filter to all emails incoming to system.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Skip Notifications',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Create Folder',
      'Manage Folders' => 'Manage Folders',
      'Emails' => 'Emails',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'isHtml' => 'Is Html',
      'body' => 'Body',
      'subject' => 'Subject',
      'attachments' => 'Attachments',
      'insertField' => 'Insert Field',
      'oneOff' => 'One-off',
      'category' => 'Category',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Create Email Template',
      'Info' => 'Info',
      'Available placeholders' => 'Available placeholders',
    ),
    'messages' => 
    array (
      'infoText' => 'Available placeholders:

{optOutUrl} &#8211; URL for an unsubsbribe link;

{optOutLink} &#8211; an unsubscribe link.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Check if you are going to use this template only once. E.g. for Mass Email.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
    ),
    'placeholderTexts' => 
    array (
      'today' => 'Today\'s date',
      'now' => 'Current date & time',
      'currentYear' => 'Current Year',
      'optOutUrl' => 'URL for an unsubsbribe link',
      'optOutLink' => 'an unsubscribe link',
    ),
  ),
  'EmailTemplateCategory' => 
  array (
    'labels' => 
    array (
      'Create EmailTemplateCategory' => 'Create Category',
      'Manage Categories' => 'Manage Categories',
      'EmailTemplates' => 'Email Templates',
    ),
    'fields' => 
    array (
      'order' => 'Order',
      'childList' => 'Child List',
    ),
    'links' => 
    array (
      'emailTemplates' => 'Email Templates',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => 'Fields',
      'Relationships' => 'Relationships',
      'Schedule' => 'Schedule',
      'Log' => 'Log',
      'Formula' => 'Formula',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'type' => 'Type',
      'labelSingular' => 'Label Singular',
      'labelPlural' => 'Label Plural',
      'stream' => 'Stream',
      'label' => 'Label',
      'linkType' => 'Link Type',
      'entityForeign' => 'Foreign Entity',
      'linkForeign' => 'Foreign Link',
      'link' => 'Link',
      'labelForeign' => 'Foreign Label',
      'sortBy' => 'Default Order (field)',
      'sortDirection' => 'Default Order (direction)',
      'relationName' => 'Middle Table Name',
      'linkMultipleField' => 'Link Multiple Field',
      'linkMultipleFieldForeign' => 'Foreign Link Multiple Field',
      'disabled' => 'Disabled',
      'textFilterFields' => 'Text Filter Fields',
      'audited' => 'Audited',
      'auditedForeign' => 'Foreign Audited',
      'statusField' => 'Status Field',
      'beforeSaveCustomScript' => 'Before Save Custom Script',
      'color' => 'Color',
      'kanbanViewMode' => 'Kanban View',
      'kanbanStatusIgnoreList' => 'Ignored groups in Kanban view',
      'iconClass' => 'Icon',
      'fullTextSearch' => 'Full-Text Search',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'None',
        'Base' => 'Base',
        'Person' => 'Person',
        'CategoryTree' => 'Category Tree',
        'Event' => 'Event',
        'BasePlus' => 'Base Plus',
        'Company' => 'Company',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Many-to-Many',
        'oneToMany' => 'One-to-Many',
        'manyToOne' => 'Many-to-One',
        'parentToChildren' => 'Parent-to-Children',
        'childrenToParent' => 'Children-to-Parent',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Ascending',
        'desc' => 'Descending',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Entity has been created',
      'linkAlreadyExists' => 'Link name conflict.',
      'linkConflict' => 'Name conflict: link or field with the same name already exists.',
    ),
    'tooltips' => 
    array (
      'statusField' => 'Updates of this field are logged in stream.',
      'textFilterFields' => 'Fields used by text search.',
      'stream' => 'Whether entity has a Stream.',
      'disabled' => 'Check if you don\'t need this entity in your system.',
      'linkAudited' => 'Creating related record and linking with existing record will be logged in Stream.',
      'linkMultipleField' => 'Link Multiple field provides a handy way to edit relations. Don\'t use it if you can have a large number of related records.',
      'entityType' => 'Base Plus - has Activities, History and Tasks panels.

Event - available in Calendar and Activities panel.',
      'fullTextSearch' => 'Running rebuild is required.',
    ),
  ),
  'Export' => 
  array (
    'fields' => 
    array (
      'exportAllFields' => 'Export all fields',
      'fieldList' => 'Field List',
      'format' => 'Format',
    ),
    'options' => 
    array (
      'format' => 
      array (
        'csv' => 'CSV',
        'xlsx' => 'XLSX (Excel)',
      ),
    ),
  ),
  'Extension' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'version' => 'Version',
      'description' => 'Description',
      'isInstalled' => 'Installed',
      'checkVersionUrl' => 'An URL for checking new versions',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Uninstall',
      'Install' => 'Install',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Extension {name} has been uninstalled',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Connect',
      'Connected' => 'Connected',
    ),
    'help' => 
    array (
    ),
    'options' => 
    array (
      'calendarDefaultEntity' => 
      array (
        'Call' => 'Call',
        'Meeting' => 'Meeting',
      ),
      'calendarDirection' => 
      array (
        'EspoToGC' => 'One-way: EspoCRM &gt; Google Calendar',
        'GCToEspo' => 'One-way: Google Calendar &gt; EspoCRM',
        'Both' => 'Two-way',
      ),
    ),
    'fields' => 
    array (
      'calendarStartDate' => 'Sync since',
      'calendarEntityTypes' => 'Sync Entities and Identification Labels',
      'calendarDirection' => 'Direction',
      'calendarMonitoredCalendars' => 'Other Calendars',
      'calendarMainCalendar' => 'Main Calendar',
      'calendarDefaultEntity' => 'Default Entity',
      'contactsGroups' => 'Add Contacts to Groups',
      'removeGoogleCalendarEventIfRemovedInEspo' => 'Remove Google Calendar Event upon removal in EspoCRM',
      'dontSyncEventAttendees' => 'Don\'t sync event attendees',
      'gmailEmailAddress' => 'Email Address',
    ),
    'messages' => 
    array (
      'disconnectConfirmation' => 'Do you really want to disconnect?',
      'noPanels' => 'No available Google Products. Contact your Admin.',
    ),
    'tooltips' => 
    array (
      'calendarEntityTypes' => 'For type recognizing event name has to start from identification label. Label for default entity can be empty. Recommendation: Do not change identification labels after you saved sync setting',
      'calendarDefaultEntity' => 'Unrecognized Event will be loaded as selected entity.',
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => 'Dynamic Logic',
      'Name' => 'Name',
      'Label' => 'Label',
      'Type' => 'Type',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => 'None',
        'javascript: return this.dateTime.getNow(1);' => 'Now',
        'javascript: return this.dateTime.getNow(5);' => 'Now (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'Now (15m)',
        'javascript: return this.dateTime.getNow(30);' => 'Now (30m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 hour',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 day',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 week',
      ),
      'dateDefault' => 
      array (
        '' => 'None',
        'javascript: return this.dateTime.getToday();' => 'Today',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 day',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 week',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 weeks',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 weeks',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 month',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 year',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => 'Updates will be logged in stream.',
      'required' => 'Field will be mandatory. Can\'t be left empty.',
      'default' => 'Value will be set by default upon creating.',
      'min' => 'Min acceptable value.',
      'max' => 'Max acceptable value.',
      'seeMoreDisabled' => 'If not checked then long texts will be shortened.',
      'lengthOfCut' => 'How long text can be before it will be cut.',
      'maxLength' => 'Max acceptable length of text.',
      'before' => 'The date value should be before the date value of the specified field.',
      'after' => 'The date value should be after the date value of the specified field.',
      'readOnly' => 'Field value can\'t be specified by user. But can be calculated by formula.',
      'maxFileSize' => 'If empty or 0 then no limit.',
    ),
    'fieldParts' => 
    array (
      'address' => 
      array (
        'street' => 'Street',
        'city' => 'City',
        'state' => 'State',
        'country' => 'Country',
        'postalCode' => 'Postal Code',
        'map' => 'Map',
      ),
      'personName' => 
      array (
        'salutation' => 'Salutation',
        'first' => 'First',
        'last' => 'Last',
      ),
      'currency' => 
      array (
        'converted' => '(Converted)',
        'currency' => '(Currency)',
      ),
      'datetimeOptional' => 
      array (
        'date' => 'Date',
      ),
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Email',
      'User' => 'User',
      'Team' => 'Team',
      'Role' => 'Role',
      'EmailTemplate' => 'Email Template',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Personal Email Account',
      'EmailAccountScope' => 'Personal Email Account',
      'OutboundEmail' => 'Outbound Email',
      'ScheduledJob' => 'Scheduled Job',
      'ExternalAccount' => 'External Account',
      'Extension' => 'Extension',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Group Email Account',
      'Stream' => 'Stream',
      'Import' => 'Import',
      'Template' => 'Template',
      'Job' => 'Job',
      'EmailFilter' => 'Email Filter',
      'Portal' => 'Portal',
      'PortalRole' => 'Portal Role',
      'Attachment' => 'Attachment',
      'EmailFolder' => 'Email Folder',
      'PortalUser' => 'Portal User',
      'ApiUser' => 'API User',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Record',
      'PasswordChangeRequest' => 'Password Change Request',
      'ActionHistoryRecord' => 'Action History Record',
      'AuthToken' => 'Auth Token',
      'UniqueId' => 'Unique ID',
      'LastViewed' => 'Last Viewed',
      'Settings' => 'Settings',
      'FieldManager' => 'Field Manager',
      'Integration' => 'Integration',
      'LayoutManager' => 'Layout Manager',
      'EntityManager' => 'Entity Manager',
      'Export' => 'Export',
      'DynamicLogic' => 'Dynamic Logic',
      'DashletOptions' => 'Dashlet Options',
      'Admin' => 'Admin',
      'Global' => 'Global',
      'Preferences' => 'Preferences',
      'EmailAddress' => 'Email Address',
      'PhoneNumber' => 'Phone Number',
      'AuthLogRecord' => 'Auth Log Record',
      'AuthFailLogRecord' => 'Auth Fail Log Record',
      'LeadCapture' => 'Lead Capture Entry Point',
      'LeadCaptureLogRecord' => 'Lead Capture Log Record',
      'ArrayValue' => 'Array Value',
      'Account' => 'Account',
      'Contact' => 'Contact',
      'Lead' => 'Lead',
      'Target' => 'Target',
      'Opportunity' => 'Opportunity',
      'Meeting' => 'Meeting',
      'Calendar' => 'Calendar',
      'Call' => 'Call',
      'Task' => 'Task',
      'Case' => 'Case',
      'Document' => 'Document',
      'DocumentFolder' => 'Document Folder',
      'Campaign' => 'Campaign',
      'TargetList' => 'Target List',
      'MassEmail' => 'Mass Email',
      'EmailQueueItem' => 'Email Queue Item',
      'CampaignTrackingUrl' => 'Tracking URL',
      'Activities' => 'Activities',
      'KnowledgeBaseArticle' => 'Knowledge Base Article',
      'KnowledgeBaseCategory' => 'Knowledge Base Category',
      'CampaignLogRecord' => 'Campaign Log Record',
      'Project' => 'Project',
      'ProjectTask' => 'Project Task',
      'Product' => 'Product',
      'ProductCategory' => 'Product Category',
      'ProductBrand' => 'Product Brand',
      'ReportCategory' => 'Report Category',
      'Quote' => 'Quote',
      'QuoteItem' => 'Quote Item',
      'SalesOrder' => 'Sales Order',
      'SalesOrderItem' => 'Sales Order Item',
      'Invoice' => 'Invoice',
      'InvoiceItem' => 'Invoice Item',
      'Tax' => 'Tax',
      'ShippingProvider' => 'Shipping Provider',
      'OpportunityItem' => 'Opportunity Item',
      'Workflow' => 'Workflow',
      'Report' => 'Report',
      'WorkflowLogRecord' => 'Workflow Log Record',
      'BpmnFlowchart' => 'Process Flowchart',
      'BpmnProcess' => 'Process',
      'BpmnUserTask' => 'Process User Task',
      'ReportFilter' => 'Report Filter',
      'ReportPanel' => 'Report Panel',
      'GoogleCalendar' => 'Google Calendar',
      'GoogleContacts' => 'Google Contacts',
      'Ticket' => 'Ticket',
      'Agenda' => 'Agenda',
      'Aislado' => 'Aislado',
      'Instalacion' => 'Instalacion',
      'ACC' => 'ACC',
      'Panel' => 'Panel',
      'Inversor' => 'Inversor',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Emails',
      'User' => 'Users',
      'Team' => 'Teams',
      'Role' => 'Roles',
      'EmailTemplate' => 'Email Templates',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Personal Email Accounts',
      'EmailAccountScope' => 'Personal Email Accounts',
      'OutboundEmail' => 'Outbound Emails',
      'ScheduledJob' => 'Scheduled Jobs',
      'ExternalAccount' => 'External Accounts',
      'Extension' => 'Extensions',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Group Email Accounts',
      'Stream' => 'Stream',
      'Import' => 'Import',
      'Template' => 'Templates',
      'Job' => 'Jobs',
      'EmailFilter' => 'Email Filters',
      'Portal' => 'Portals',
      'PortalRole' => 'Portal Roles',
      'Attachment' => 'Attachments',
      'EmailFolder' => 'Email Folders',
      'PortalUser' => 'Portal Users',
      'ApiUser' => 'API Users',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Records',
      'PasswordChangeRequest' => 'Password Change Requests',
      'ActionHistoryRecord' => 'Action History',
      'AuthToken' => 'Auth Tokens',
      'UniqueId' => 'Unique IDs',
      'LastViewed' => 'Last Viewed',
      'AuthLogRecord' => 'Auth Log',
      'AuthFailLogRecord' => 'Auth Fail Log',
      'LeadCapture' => 'Lead Capture',
      'LeadCaptureLogRecord' => 'Lead Capture Log',
      'ArrayValue' => 'Array Values',
      'Account' => 'Accounts',
      'Contact' => 'Contacts',
      'Lead' => 'Leads',
      'Target' => 'Targets',
      'Opportunity' => 'Opportunities',
      'Meeting' => 'Meetings',
      'Calendar' => 'Calendar',
      'Call' => 'Calls',
      'Task' => 'Tasks',
      'Case' => 'Cases',
      'Document' => 'Documents',
      'DocumentFolder' => 'Document Folders',
      'Campaign' => 'Campaigns',
      'TargetList' => 'Target Lists',
      'MassEmail' => 'Mass Emails',
      'EmailQueueItem' => 'Email Queue Items',
      'CampaignTrackingUrl' => 'Tracking URLs',
      'Activities' => 'Activities',
      'KnowledgeBaseArticle' => 'Knowledge Base',
      'KnowledgeBaseCategory' => 'Knowledge Base Categories',
      'CampaignLogRecord' => 'Campaign Log Records',
      'Project' => 'Projects',
      'ProjectTask' => 'Project Tasks',
      'Product' => 'Products',
      'ProductCategory' => 'Product Categories',
      'ReportCategory' => 'Report Categories',
      'Quote' => 'Quotes',
      'QuoteItem' => 'Quote Items',
      'SalesOrder' => 'Sales Orders',
      'SalesOrderItem' => 'Sales Order Items',
      'Invoice' => 'Invoices',
      'InvoiceItem' => 'Invoice Items',
      'Tax' => 'Taxes',
      'ShippingProvider' => 'Shipping Providers',
      'OpportunityItem' => 'Opportunity Items',
      'ProductBrand' => 'Product Brands',
      'Workflow' => 'Workflows',
      'Report' => 'Reports',
      'WorkflowLogRecord' => 'Workflows Log',
      'BpmnFlowchart' => 'Process Flowcharts',
      'BpmnProcess' => 'Processes',
      'BpmnUserTask' => 'Process User Tasks',
      'ReportFilter' => 'Report Filters',
      'ReportPanel' => 'Report Panels',
      'GoogleCalendar' => 'Google Calendar',
      'GoogleContacts' => 'Google Contacts',
      'Ticket' => 'Tickets',
      'Agenda' => 'Agendas',
      'Aislado' => 'Aislados',
      'Instalacion' => 'Instalacions',
      'ACC' => 'ACCs',
      'Panel' => 'Paneles',
      'Inversor' => 'Inversores',
    ),
    'labels' => 
    array (
      'Misc' => 'Misc',
      'Merge' => 'Merge',
      'None' => 'None',
      'Home' => 'Home',
      'by' => 'by',
      'Saved' => 'Saved',
      'Error' => 'Error',
      'Select' => 'Select',
      'Not valid' => 'Not valid',
      'Please wait...' => 'Please wait...',
      'Please wait' => 'Please wait',
      'Loading...' => 'Loading...',
      'Uploading...' => 'Uploading...',
      'Sending...' => 'Sending...',
      'Merging...' => 'Merging...',
      'Merged' => 'Merged',
      'Removed' => 'Removed',
      'Posted' => 'Posted',
      'Linked' => 'Linked',
      'Unlinked' => 'Unlinked',
      'Done' => 'Done',
      'Access denied' => 'Access denied',
      'Not found' => 'Not found',
      'Access' => 'Access',
      'Are you sure?' => 'Are you sure?',
      'Record has been removed' => 'Record has been removed',
      'Wrong username/password' => 'Wrong username/password',
      'Post cannot be empty' => 'Post cannot be empty',
      'Removing...' => 'Removing...',
      'Unlinking...' => 'Unlinking...',
      'Posting...' => 'Posting...',
      'Username can not be empty!' => 'Username can not be empty!',
      'Cache is not enabled' => 'Cache is not enabled',
      'Cache has been cleared' => 'Cache has been cleared',
      'Rebuild has been done' => 'Rebuild has been done',
      'Return to Application' => 'Return to Application',
      'Saving...' => 'Saving...',
      'Modified' => 'Modified',
      'Created' => 'Created',
      'Create' => 'Create',
      'create' => 'create',
      'Overview' => 'Overview',
      'Details' => 'Details',
      'Add Field' => 'Add Field',
      'Add Dashlet' => 'Add Dashlet',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Edit Dashboard',
      'Add' => 'Add',
      'Add Item' => 'Add Item',
      'Reset' => 'Reset',
      'Menu' => 'Menu',
      'More' => 'More',
      'Search' => 'Search',
      'Only My' => 'Only My',
      'Open' => 'Open',
      'Admin' => 'Admin',
      'About' => 'About',
      'Refresh' => 'Refresh',
      'Remove' => 'Remove',
      'Restore' => 'Restore',
      'Options' => 'Options',
      'Username' => 'Username',
      'Password' => 'Password',
      'Login' => 'Login',
      'Log Out' => 'Log Out',
      'Preferences' => 'Preferences',
      'State' => 'State',
      'Street' => 'Street',
      'Country' => 'Country',
      'City' => 'City',
      'PostalCode' => 'Postal Code',
      'Followed' => 'Followed',
      'Follow' => 'Follow',
      'Followers' => 'Followers',
      'Clear Local Cache' => 'Clear Local Cache',
      'Actions' => 'Actions',
      'Delete' => 'Delete',
      'Update' => 'Update',
      'Save' => 'Save',
      'Edit' => 'Edit',
      'View' => 'View',
      'Cancel' => 'Cancel',
      'Apply' => 'Apply',
      'Unlink' => 'Unlink',
      'Mass Update' => 'Mass Update',
      'Export' => 'Export',
      'No Data' => 'No Data',
      'No Access' => 'No Access',
      'All' => 'All',
      'Active' => 'Active',
      'Inactive' => 'Inactive',
      'Write your comment here' => 'Write your comment here',
      'Post' => 'Post',
      'Stream' => 'Stream',
      'Show more' => 'Show more',
      'Dashlet Options' => 'Dashlet Options',
      'Full Form' => 'Full Form',
      'Insert' => 'Insert',
      'Person' => 'Person',
      'First Name' => 'First Name',
      'Last Name' => 'Last Name',
      'Original' => 'Original',
      'You' => 'You',
      'you' => 'you',
      'change' => 'change',
      'Change' => 'Change',
      'Primary' => 'Primary',
      'Save Filter' => 'Save Filter',
      'Administration' => 'Administration',
      'Run Import' => 'Run Import',
      'Duplicate' => 'Duplicate',
      'Notifications' => 'Notifications',
      'Mark all read' => 'Mark all read',
      'See more' => 'See more',
      'Today' => 'Today',
      'Tomorrow' => 'Tomorrow',
      'Yesterday' => 'Yesterday',
      'Submit' => 'Submit',
      'Close' => 'Close',
      'Yes' => 'Yes',
      'No' => 'No',
      'Select All Results' => 'Select All Results',
      'Value' => 'Value',
      'Current version' => 'Current version',
      'List View' => 'List View',
      'Tree View' => 'Tree View',
      'Unlink All' => 'Unlink All',
      'Total' => 'Total',
      'Print to PDF' => 'Print to PDF',
      'Default' => 'Default',
      'Number' => 'Number',
      'From' => 'From',
      'To' => 'To',
      'Create Post' => 'Create Post',
      'Previous Entry' => 'Previous Entry',
      'Next Entry' => 'Next Entry',
      'View List' => 'View List',
      'Attach File' => 'Attach File',
      'Skip' => 'Skip',
      'Attribute' => 'Attribute',
      'Function' => 'Function',
      'Self-Assign' => 'Self-Assign',
      'Self-Assigned' => 'Self-Assigned',
      'Expand' => 'Expand',
      'Collapse' => 'Collapse',
      'New notifications' => 'New notifications',
      'Manage Categories' => 'Manage Categories',
      'Manage Folders' => 'Manage Folders',
      'Convert to' => 'Convert to',
      'View Personal Data' => 'View Personal Data',
      'Personal Data' => 'Personal Data',
      'Erase' => 'Erase',
      'View Followers' => 'View Followers',
      'Move Over' => 'Move Over',
      'Create InboundEmail' => 'Create Inbound Email',
      'Activities' => 'Activities',
      'History' => 'History',
      'Attendees' => 'Attendees',
      'Schedule Meeting' => 'Schedule Meeting',
      'Schedule Call' => 'Schedule Call',
      'Compose Email' => 'Compose Email',
      'Log Meeting' => 'Log Meeting',
      'Log Call' => 'Log Call',
      'Archive Email' => 'Archive Email',
      'Create Task' => 'Create Task',
      'Tasks' => 'Tasks',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Please wait...',
      'posting' => 'Posting...',
      'loading' => 'Loading...',
      'saving' => 'Saving...',
      'confirmLeaveOutMessage' => 'Are you sure you want to leave the form?',
      'notModified' => 'You have not modified the record',
      'duplicate' => 'The record you are creating might already exist',
      'dropToAttach' => 'Drop to attach',
      'fieldIsRequired' => '{field} is required',
      'fieldShouldBeEmail' => '{field} should be a valid email',
      'fieldShouldBeFloat' => '{field} should be a valid float',
      'fieldShouldBeInt' => '{field} should be a valid integer',
      'fieldShouldBeDate' => '{field} should be a valid date',
      'fieldShouldBeDatetime' => '{field} should be a valid date/time',
      'fieldShouldAfter' => '{field} should be after {otherField}',
      'fieldShouldBefore' => '{field} should be before {otherField}',
      'fieldShouldBeBetween' => '{field} should be between {min} and {max}',
      'fieldShouldBeLess' => '{field} shouldn\'t be greater then {value}',
      'fieldShouldBeGreater' => '{field} shouldn\'t be less then {value}',
      'fieldBadPasswordConfirm' => '{field} not confirmed properly',
      'fieldMaxFileSizeError' => 'File should not exceed {max} Mb',
      'fieldValueDuplicate' => 'Duplicate value',
      'fieldIsUploading' => 'Uploading in progress',
      'fieldExceedsMaxCount' => 'Count exceeds max allowed {maxCount}',
      'resetPreferencesDone' => 'Preferences has been reset to defaults',
      'confirmation' => 'Are you sure?',
      'unlinkAllConfirmation' => 'Are you sure you want to unlink all related records?',
      'resetPreferencesConfirmation' => 'Are you sure you want to reset preferences to defaults?',
      'removeRecordConfirmation' => 'Are you sure you want to remove the record?',
      'unlinkRecordConfirmation' => 'Are you sure you want to unlink the related record?',
      'removeSelectedRecordsConfirmation' => 'Are you sure you want to remove selected records?',
      'unlinkSelectedRecordsConfirmation' => 'Are you sure you want to unlink selected records?',
      'massUpdateResult' => '{count} records have been updated',
      'massUpdateResultSingle' => '{count} record has been updated',
      'recalculateFormulaConfirmation' => 'Are you sure you want to recalculate formula for selected records?',
      'noRecordsUpdated' => 'No records were updated',
      'massRemoveResult' => '{count} records have been removed',
      'massRemoveResultSingle' => '{count} record has been removed',
      'noRecordsRemoved' => 'No records were removed',
      'clickToRefresh' => 'Click to refresh',
      'writeYourCommentHere' => 'Write your comment here',
      'writeMessageToUser' => 'Write a message to {user}',
      'writeMessageToSelf' => 'Write a message on your stream',
      'typeAndPressEnter' => 'Type & press enter',
      'checkForNewNotifications' => 'Check for new notifications',
      'checkForNewNotes' => 'Check for stream updates',
      'internalPost' => 'Post will be seen only by internal users',
      'internalPostTitle' => 'Post is seen only by internal users',
      'done' => 'Done',
      'confirmMassFollow' => 'Are you sure you want to follow selected records?',
      'confirmMassUnfollow' => 'Are you sure you want to unfollow selected records?',
      'massFollowResult' => '{count} records now are followed',
      'massUnfollowResult' => '{count} records now are not followed',
      'massFollowResultSingle' => '{count} record now is followed',
      'massUnfollowResultSingle' => '{count} record now is not followed',
      'massFollowZeroResult' => 'Nothing got followed',
      'massUnfollowZeroResult' => 'Nothing got unfollowed',
      'erasePersonalDataConfirmation' => 'Checked fields will be erased permanently. Are you sure?',
      'massPrintPdfMaxCountError' => 'Can\'t print more that {maxCount} records.',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Only My',
      'followed' => 'Followed',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Followed',
      'all' => 'All',
    ),
    'massActions' => 
    array (
      'remove' => 'Remove',
      'merge' => 'Merge',
      'massUpdate' => 'Mass Update',
      'unlink' => 'Unlink',
      'export' => 'Export',
      'follow' => 'Follow',
      'unfollow' => 'Unfollow',
      'convertCurrency' => 'Convert Currency',
      'recalculateFormula' => 'Recalculate Formula',
      'printPdf' => 'Print to PDF',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'firstName' => 'First Name',
      'lastName' => 'Last Name',
      'salutationName' => 'Salutation',
      'assignedUser' => 'Assigned User',
      'assignedUsers' => 'Assigned Users',
      'emailAddress' => 'Email',
      'emailAddressData' => 'Email Address Data',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'assignedUserName' => 'Assigned User Name',
      'teams' => 'Teams',
      'createdAt' => 'Created At',
      'modifiedAt' => 'Modified At',
      'createdBy' => 'Created By',
      'modifiedBy' => 'Modified By',
      'description' => 'Description',
      'address' => 'Address',
      'phoneNumber' => 'Phone',
      'phoneNumberMobile' => 'Phone (Mobile)',
      'phoneNumberHome' => 'Phone (Home)',
      'phoneNumberFax' => 'Phone (Fax)',
      'phoneNumberOffice' => 'Phone (Office)',
      'phoneNumberOther' => 'Phone (Other)',
      'phoneNumberData' => 'Phone Number Data',
      'phoneNumberIsOptedOut' => 'Phone Number is Opted-Out',
      'order' => 'Order',
      'parent' => 'Parent',
      'children' => 'Children',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Type',
      'names' => 'Names',
      'types' => 'Types',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'billingAddressCity' => 'City',
      'billingAddressCountry' => 'Country',
      'billingAddressPostalCode' => 'Postal Code',
      'billingAddressState' => 'State',
      'billingAddressStreet' => 'Street',
      'billingAddressMap' => 'Map',
      'addressCity' => 'City',
      'addressStreet' => 'Street',
      'addressCountry' => 'Country',
      'addressState' => 'State',
      'addressPostalCode' => 'Postal Code',
      'addressMap' => 'Map',
      'shippingAddressCity' => 'City (Shipping)',
      'shippingAddressStreet' => 'Street (Shipping)',
      'shippingAddressCountry' => 'Country (Shipping)',
      'shippingAddressState' => 'State (Shipping)',
      'shippingAddressPostalCode' => 'Postal Code (Shipping)',
      'shippingAddressMap' => 'Map (Shipping)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Assigned User',
      'createdBy' => 'Created By',
      'modifiedBy' => 'Modified By',
      'team' => 'Team',
      'roles' => 'Roles',
      'teams' => 'Teams',
      'users' => 'Users',
      'parent' => 'Parent',
      'children' => 'Children',
      'contacts' => 'Contacts',
      'opportunities' => 'Opportunities',
      'leads' => 'Leads',
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'emails' => 'Emails',
      'accounts' => 'Accounts',
      'cases' => 'Cases',
      'documents' => 'Documents',
      'account' => 'Account',
      'opportunity' => 'Opportunity',
      'contact' => 'Contact',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Stream',
      'Emails' => 'My Inbox',
      'Records' => 'Record List',
      'Leads' => 'My Leads',
      'Opportunities' => 'My Opportunities',
      'Tasks' => 'My Tasks',
      'Cases' => 'My Cases',
      'Calendar' => 'Calendar',
      'Calls' => 'My Calls',
      'Meetings' => 'My Meetings',
      'OpportunitiesByStage' => 'Opportunities by Stage',
      'OpportunitiesByLeadSource' => 'Opportunities by Lead Source',
      'SalesByMonth' => 'Sales by Month',
      'SalesPipeline' => 'Sales Pipeline',
      'Activities' => 'My Activities',
      'Report' => 'Report',
      'BpmnUserTasks' => 'Process User Tasks',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} has been assigned to you',
      'emailReceived' => 'Email received from {from}',
      'entityRemoved' => '{user} removed {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} posted on {entityType} {entity}',
      'attach' => '{user} attached on {entityType} {entity}',
      'status' => '{user} updated {field} of {entityType} {entity}',
      'update' => '{user} updated {entityType} {entity}',
      'postTargetTeam' => '{user} posted to team {target}',
      'postTargetTeams' => '{user} posted to teams {target}',
      'postTargetPortal' => '{user} posted to portal {target}',
      'postTargetPortals' => '{user} posted to portals {target}',
      'postTarget' => '{user} posted to {target}',
      'postTargetYou' => '{user} posted to you',
      'postTargetYouAndOthers' => '{user} posted to {target} and you',
      'postTargetAll' => '{user} posted to all',
      'postTargetSelf' => '{user} self-posted',
      'postTargetSelfAndOthers' => '{user} posted to {target} and themself',
      'mentionInPost' => '{user} mentioned {mentioned} in {entityType} {entity}',
      'mentionYouInPost' => '{user} mentioned you in {entityType} {entity}',
      'mentionInPostTarget' => '{user} mentioned {mentioned} in post',
      'mentionYouInPostTarget' => '{user} mentioned you in post to {target}',
      'mentionYouInPostTargetAll' => '{user} mentioned you in post to all',
      'mentionYouInPostTargetNoTarget' => '{user} mentioned you in post',
      'create' => '{user} created {entityType} {entity}',
      'createThis' => '{user} created this {entityType}',
      'createAssignedThis' => '{user} created this {entityType} assigned to {assignee}',
      'createAssigned' => '{user} created {entityType} {entity} assigned to {assignee}',
      'createAssignedYou' => '{user} created {entityType} {entity} assigned to you',
      'createAssignedThisSelf' => '{user} created this {entityType} self-assigned',
      'createAssignedSelf' => '{user} created {entityType} {entity} self-assigned',
      'assign' => '{user} assigned {entityType} {entity} to {assignee}',
      'assignThis' => '{user} assigned this {entityType} to {assignee}',
      'assignYou' => '{user} assigned {entityType} {entity} to you',
      'assignThisVoid' => '{user} unassigned this {entityType}',
      'assignVoid' => '{user} unassigned {entityType} {entity}',
      'assignThisSelf' => '{user} self-assigned this {entityType}',
      'assignSelf' => '{user} self-assigned {entityType} {entity}',
      'postThis' => '{user} posted',
      'attachThis' => '{user} attached',
      'statusThis' => '{user} updated {field}',
      'updateThis' => '{user} updated this {entityType}',
      'createRelatedThis' => '{user} created {relatedEntityType} {relatedEntity} related to this {entityType}',
      'createRelated' => '{user} created {relatedEntityType} {relatedEntity} related to {entityType} {entity}',
      'relate' => '{user} linked {relatedEntityType} {relatedEntity} with {entityType} {entity}',
      'relateThis' => '{user} linked {relatedEntityType} {relatedEntity} with this {entityType}',
      'emailReceivedFromThis' => 'Email received from {from}',
      'emailReceivedInitialFromThis' => 'Email received from {from}, this {entityType} created',
      'emailReceivedThis' => 'Email received',
      'emailReceivedInitialThis' => 'Email received, this {entityType} created',
      'emailReceivedFrom' => 'Email received from {from}, related to {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email received from {from}, {entityType} {entity} created',
      'emailReceived' => 'Email received related to {entityType} {entity}',
      'emailReceivedInitial' => 'Email received: {entityType} {entity} created',
      'emailReceivedInitialFrom' => 'Email received from {from}, {entityType} {entity} created',
      'emailSent' => '{by} sent email related to {entityType} {entity}',
      'emailSentThis' => '{by} sent email',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user} posted to {target} and himself',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user} posted to {target} and herself',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'January',
        1 => 'February',
        2 => 'March',
        3 => 'April',
        4 => 'May',
        5 => 'June',
        6 => 'July',
        7 => 'August',
        8 => 'September',
        9 => 'October',
        10 => 'November',
        11 => 'December',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Apr',
        4 => 'May',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Oct',
        10 => 'Nov',
        11 => 'Dec',
      ),
      'dayNames' => 
      array (
        0 => 'Sunday',
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Sun',
        1 => 'Mon',
        2 => 'Tue',
        3 => 'Wed',
        4 => 'Thu',
        5 => 'Fri',
        6 => 'Sat',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Su',
        1 => 'Mo',
        2 => 'Tu',
        3 => 'We',
        4 => 'Th',
        5 => 'Fr',
        6 => 'Sa',
      ),
    ),
    'durationUnits' => 
    array (
      'd' => 'd',
      'h' => 'h',
      'm' => 'm',
      's' => 's',
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Mr.',
        'Mrs.' => 'Mrs.',
        'Ms.' => 'Ms.',
        'Dr.' => 'Dr.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbaijani',
        'be_BY' => 'Belarusian',
        'bg_BG' => 'Bulgarian',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosnian',
        'ca_ES' => 'Catalan',
        'cs_CZ' => 'Czech',
        'cy_GB' => 'Welsh',
        'da_DK' => 'Danish',
        'de_DE' => 'German',
        'el_GR' => 'Greek',
        'en_GB' => 'English (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonian',
        'eu_ES' => 'Basque',
        'fa_IR' => 'Persian',
        'fi_FI' => 'Finnish',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Irish',
        'gl_ES' => 'Galician',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebrew',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croatian',
        'hu_HU' => 'Hungarian',
        'hy_AM' => 'Armenian',
        'id_ID' => 'Indonesian',
        'is_IS' => 'Icelandic',
        'it_IT' => 'Italian',
        'ja_JP' => 'Japanese',
        'ka_GE' => 'Georgian',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korean',
        'ku_TR' => 'Kurdish',
        'lt_LT' => 'Lithuanian',
        'lv_LV' => 'Latvian',
        'mk_MK' => 'Macedonian',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norwegian Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Dutch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polish',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Romanian',
        'ru_RU' => 'Russian',
        'sk_SK' => 'Slovak',
        'sl_SI' => 'Slovene',
        'sq_AL' => 'Albanian',
        'sr_RS' => 'Serbian',
        'sv_SE' => 'Swedish',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thai',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turkish',
        'uk_UA' => 'Ukrainian',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamese',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'On',
        'notOn' => 'Not On',
        'after' => 'After',
        'before' => 'Before',
        'between' => 'Between',
        'today' => 'Today',
        'past' => 'Past',
        'future' => 'Future',
        'currentMonth' => 'Current Month',
        'lastMonth' => 'Last Month',
        'nextMonth' => 'Next Month',
        'currentQuarter' => 'Current Quarter',
        'lastQuarter' => 'Last Quarter',
        'currentYear' => 'Current Year',
        'lastYear' => 'Last Year',
        'lastSevenDays' => 'Last 7 Days',
        'lastXDays' => 'Last X Days',
        'nextXDays' => 'Next X Days',
        'ever' => 'Ever',
        'isEmpty' => 'Is Empty',
        'olderThanXDays' => 'Older Than X Days',
        'afterXDays' => 'After X Days',
        'currentFiscalYear' => 'Current Fiscal Year',
        'lastFiscalYear' => 'Last Fiscal Year',
        'currentFiscalQuarter' => 'Current Fiscal Quarter',
        'lastFiscalQuarter' => 'Last Fiscal Quarter',
      ),
      'searchRanges' => 
      array (
        'is' => 'Is',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
        'isOneOf' => 'Any Of',
        'isFromTeams' => 'Is From Team',
        'isNot' => 'Is Not',
        'isNotOneOf' => 'None Of',
        'anyOf' => 'Any Of',
        'noneOf' => 'None Of',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Equals',
        'like' => 'Is Like (%)',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => 'Starts With',
        'endsWith' => 'Ends With',
        'contains' => 'Contains',
        'notContains' => 'Not Contains',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
        'notEquals' => 'Not Equals',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Equals',
        'notEquals' => 'Not Equals',
        'greaterThan' => 'Greater Than',
        'lessThan' => 'Less Than',
        'greaterThanOrEquals' => 'Greater Than or Equals',
        'lessThanOrEquals' => 'Less Than or Equals',
        'between' => 'Between',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'None',
        '0.5' => '30 seconds',
        1 => '1 minute',
        2 => '2 minutes',
        5 => '5 minutes',
        10 => '10 minutes',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobile',
        'Office' => 'Office',
        'Fax' => 'Fax',
        'Home' => 'Home',
        'Other' => 'Other',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Popup',
        'Email' => 'Email',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'You can find translation here: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Bold',
          'italic' => 'Italic',
          'underline' => 'Underline',
          'strike' => 'Strike',
          'clear' => 'Remove Font Style',
          'height' => 'Line Height',
          'name' => 'Font Family',
          'size' => 'Font Size',
        ),
        'image' => 
        array (
          'image' => 'Picture',
          'insert' => 'Insert Image',
          'resizeFull' => 'Resize Full',
          'resizeHalf' => 'Resize Half',
          'resizeQuarter' => 'Resize Quarter',
          'floatLeft' => 'Float Left',
          'floatRight' => 'Float Right',
          'floatNone' => 'Float None',
          'dragImageHere' => 'Drag an image here',
          'selectFromFiles' => 'Select from files',
          'url' => 'Image URL',
          'remove' => 'Remove Image',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Insert Link',
          'unlink' => 'Unlink',
          'edit' => 'Edit',
          'textToDisplay' => 'Text to display',
          'url' => 'To what URL should this link go?',
          'openInNewWindow' => 'Open in new window',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video Link',
          'insert' => 'Insert Video',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Table',
        ),
        'hr' => 
        array (
          'insert' => 'Insert Horizontal Rule',
        ),
        'style' => 
        array (
          'style' => 'Style',
          'normal' => 'Normal',
          'blockquote' => 'Quote',
          'pre' => 'Code',
          'h1' => 'Header 1',
          'h2' => 'Header 2',
          'h3' => 'Header 3',
          'h4' => 'Header 4',
          'h5' => 'Header 5',
          'h6' => 'Header 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Unordered list',
          'ordered' => 'Ordered list',
        ),
        'options' => 
        array (
          'help' => 'Help',
          'fullscreen' => 'Full Screen',
          'codeview' => 'Code View',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Paragraph',
          'outdent' => 'Outdent',
          'indent' => 'Indent',
          'left' => 'Align left',
          'center' => 'Align center',
          'right' => 'Align right',
          'justify' => 'Justify full',
        ),
        'color' => 
        array (
          'recent' => 'Recent Color',
          'more' => 'More Color',
          'background' => 'BackColor',
          'foreground' => 'FontColor',
          'transparent' => 'Transparent',
          'setTransparent' => 'Set transparent',
          'reset' => 'Reset',
          'resetToDefault' => 'Reset to default',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Keyboard shortcuts',
          'close' => 'Close',
          'textFormatting' => 'Text formatting',
          'action' => 'Action',
          'paragraphFormatting' => 'Paragraph formatting',
          'documentStyle' => 'Document Style',
        ),
        'history' => 
        array (
          'undo' => 'Undo',
          'redo' => 'Redo',
        ),
      ),
    ),
    'listViewModes' => 
    array (
      'list' => 'List',
      'kanban' => 'Kanban',
    ),
    'themes' => 
    array (
      'Espo' => 'Classic Espo',
      'EspoRtl' => 'RTL Espo',
      'Sakura' => 'Classic Sakura',
      'EspoVertical' => 'Vertical Espo',
      'SakuraVertical' => 'Vertical Sakura',
      'Violet' => 'Classic Violet',
      'VioletVertical' => 'Vertical Violet',
      'Hazyblue' => 'Classic Hazyblue',
      'HazyblueVertical' => 'Vertical Hazyblue',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Revert Import',
      'Return to Import' => 'Return to Import',
      'Run Import' => 'Run Import',
      'Back' => 'Back',
      'Field Mapping' => 'Field Mapping',
      'Default Values' => 'Default Values',
      'Add Field' => 'Add Field',
      'Created' => 'Created',
      'Updated' => 'Updated',
      'Result' => 'Result',
      'Show records' => 'Show records',
      'Remove Duplicates' => 'Remove Duplicates',
      'importedCount' => 'Imported (count)',
      'duplicateCount' => 'Duplicates (count)',
      'updatedCount' => 'Updated (count)',
      'Create Only' => 'Create Only',
      'Create and Update' => 'Create & Update',
      'Update Only' => 'Update Only',
      'Update by' => 'Update by',
      'Set as Not Duplicate' => 'Set as Not Duplicate',
      'File (CSV)' => 'File (CSV)',
      'First Row Value' => 'First Row Value',
      'Skip' => 'Skip',
      'Header Row Value' => 'Header Row Value',
      'Field' => 'Field',
      'What to Import?' => 'What to Import?',
      'Entity Type' => 'Entity Type',
      'What to do?' => 'What to do?',
      'Properties' => 'Properties',
      'Header Row' => 'Header Row',
      'Person Name Format' => 'Person Name Format',
      'John Smith' => 'John Smith',
      'Smith John' => 'Smith John',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => 'Field Delimiter',
      'Date Format' => 'Date Format',
      'Decimal Mark' => 'Decimal Mark',
      'Text Qualifier' => 'Text Qualifier',
      'Time Format' => 'Time Format',
      'Currency' => 'Currency',
      'Preview' => 'Preview',
      'Next' => 'Next',
      'Step 1' => 'Step 1',
      'Step 2' => 'Step 2',
      'Double Quote' => 'Double Quote',
      'Single Quote' => 'Single Quote',
      'Imported' => 'Imported',
      'Duplicates' => 'Duplicates',
      'Skip searching for duplicates' => 'Skip searching for duplicates',
      'Timezone' => 'Timezone',
      'Remove Import Log' => 'Remove Import Log',
      'New Import' => 'New Import',
      'Import Results' => 'Import Results',
      'Silent Mode' => 'Silent Mode',
    ),
    'messages' => 
    array (
      'utf8' => 'Should be UTF-8 encoded',
      'duplicatesRemoved' => 'Duplicates removed',
      'inIdle' => 'Execute in idle (for big data; via cron)',
      'revert' => 'This will remove all imported records permanently.',
      'removeDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates.',
      'confirmRevert' => 'This will remove all imported records permanently. Are you sure?',
      'confirmRemoveDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates. Are you sure?',
      'confirmRemoveImportLog' => 'This will remove the import log. All imported records will be kept. You wan\'t be able to revert import results. Are you sure you?',
      'removeImportLog' => 'This will remove the import log. All imported records will be kept. Use it if you are sure that import is fine.',
    ),
    'fields' => 
    array (
      'file' => 'File',
      'entityType' => 'Entity Type',
      'imported' => 'Imported Records',
      'duplicates' => 'Duplicate Records',
      'updated' => 'Updated Records',
      'status' => 'Status',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => 'Failed',
        'In Process' => 'In Process',
        'Complete' => 'Complete',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'Email Address',
      'team' => 'Target Team',
      'status' => 'Status',
      'assignToUser' => 'Assign to User',
      'host' => 'Host',
      'username' => 'Username',
      'password' => 'Password',
      'port' => 'Port',
      'monitoredFolders' => 'Monitored Folders',
      'trashFolder' => 'Trash Folder',
      'ssl' => 'SSL',
      'createCase' => 'Create Case',
      'reply' => 'Auto-Reply',
      'caseDistribution' => 'Case Distribution',
      'replyEmailTemplate' => 'Reply Email Template',
      'replyFromAddress' => 'Reply From Address',
      'replyToAddress' => 'Reply To Address',
      'replyFromName' => 'Reply From Name',
      'targetUserPosition' => 'Target User Position',
      'fetchSince' => 'Fetch Since',
      'addAllTeamUsers' => 'For all team users',
      'teams' => 'Teams',
      'sentFolder' => 'Sent Folder',
      'storeSentEmails' => 'Store Sent Emails',
      'keepFetchedEmailsUnread' => 'Keep Fetched Emails Unread',
      'useImap' => 'Fetch Emails',
      'useSmtp' => 'Use SMTP',
      'smtpHost' => 'SMTP Host',
      'smtpPort' => 'SMTP Port',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP Security',
      'smtpUsername' => 'SMTP Username',
      'smtpPassword' => 'SMTP Password',
      'fromName' => 'From Name',
      'smtpIsShared' => 'SMTP Is Shared',
      'smtpIsForMassEmail' => 'SMTP Is for Mass Email',
    ),
    'tooltips' => 
    array (
      'reply' => 'Notify email senders that their emails has been received.

 Only one email will be sent to a particular recipient during some period of time to prevent looping.',
      'createCase' => 'Automatically create case from incoming emails.',
      'replyToAddress' => 'Specify email address of this mailbox to make responses come here.',
      'caseDistribution' => 'How cases will be assigned to. Assigned directly to the user or among the team.',
      'assignToUser' => 'User cases will be assigned to.',
      'team' => 'Team cases will be assigned to.',
      'teams' => 'Teams emails will be assigned to.',
      'targetUserPosition' => 'Users with specified position will be distributed with cases.',
      'addAllTeamUsers' => 'Emails will be appearing in Inbox of all users of specified teams.',
      'monitoredFolders' => 'Multiple folders should be separated by comma.',
      'smtpIsShared' => 'If checked then users will be able to send emails using this SMTP. Availability is controlled by Roles through the Group Email Account permission.',
      'smtpIsForMassEmail' => 'If checked then SMTP will be available for Mass Email.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server.',
    ),
    'links' => 
    array (
      'filters' => 'Filters',
      'emails' => 'Emails',
      'assignToUser' => 'Assign to User',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Active',
        'Inactive' => 'Inactive',
      ),
      'caseDistribution' => 
      array (
        '' => 'None',
        'Direct-Assignment' => 'Direct-Assignment',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Least-Busy',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Create Email Account',
      'IMAP' => 'IMAP',
      'Actions' => 'Actions',
      'Main' => 'Main',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Could not connect to IMAP server',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Enabled',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'redirectUri' => 'Redirect URI',
      'apiKey' => 'API Key',
      'googleCalendar' => 'Calendar',
      'googleContacts' => 'Contacts',
      'googleTasks' => 'Tasks',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google Maps',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Select an integration from menu.',
      'noIntegrations' => 'No Integrations is available.',
    ),
    'help' => 
    array (
      'Google' => '&lt;p&gt;&lt;b&gt;Obtain OAuth 2.0 credentials from the Google Developers Console.&lt;/b&gt;&lt;/p&gt;&lt;p&gt;Visit &lt;a href="https://console.developers.google.com/project" target="_blank"&gt;Google Developers Console&lt;/a&gt; to obtain OAuth 2.0 credentials such as a Client ID and Client Secret that are known to both Google and EspoCRM application.&lt;/p&gt;&lt;p&gt;This integration requires &lt;b&gt;curl&lt;/b&gt; extension. Google Contacts also needs &lt;b&gt;libxml&lt;/b&gt; and &lt;b&gt;xml&lt;/b&gt;.&lt;/p&gt;',
      'GoogleMaps' => 'Obtain API key [here](https://developers.google.com/maps/documentation/javascript/get-api-key).',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executeTime' => 'Execute At',
      'executedAt' => 'Executed At',
      'startedAt' => 'Started At',
      'attempts' => 'Attempts Left',
      'failedAttempts' => 'Failed Attempts',
      'serviceName' => 'Service',
      'method' => 'Method (deprecated)',
      'methodName' => 'Method',
      'scheduledJob' => 'Scheduled Job',
      'scheduledJobJob' => 'Scheduled Job Name',
      'data' => 'Data',
      'targetType' => 'Target Type',
      'targetId' => 'Target ID',
      'number' => 'Number',
      'queue' => 'Queue',
      'job' => 'Job',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Pending',
        'Success' => 'Success',
        'Running' => 'Running',
        'Failed' => 'Failed',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Width (%)',
      'link' => 'Link',
      'notSortable' => 'Not Sortable',
      'align' => 'Align',
      'panelName' => 'Panel Name',
      'style' => 'Style',
      'sticked' => 'Sticked',
      'isLarge' => 'Large font size',
      'dynamicLogicVisible' => 'Conditions making panel visible',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Left',
        'right' => 'Right',
      ),
      'style' => 
      array (
        'default' => 'Default',
        'success' => 'Success',
        'danger' => 'Danger',
        'info' => 'Info',
        'warning' => 'Warning',
        'primary' => 'Primary',
      ),
    ),
    'labels' => 
    array (
      'New panel' => 'New panel',
      'Layout' => 'Layout',
    ),
  ),
  'LeadCapture' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'campaign' => 'Campaign',
      'isActive' => 'Is Active',
      'subscribeToTargetList' => 'Subscribe to Target List',
      'subscribeContactToTargetList' => 'Subscribe Contact if exists',
      'targetList' => 'Target List',
      'fieldList' => 'Payload Fields',
      'optInConfirmation' => 'Double Opt-In',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'optInConfirmationLifetime' => 'Opt-in confirmation lifetime (hours)',
      'optInConfirmationSuccessMessage' => 'Text to show after opt-in confirmation',
      'leadSource' => 'Lead Source',
      'apiKey' => 'API Key',
      'targetTeam' => 'Target Team',
      'exampleRequestMethod' => 'Method',
      'exampleRequestUrl' => 'URL',
      'exampleRequestPayload' => 'Payload',
      'createLeadBeforeOptInConfirmation' => 'Create Lead before confirmation',
      'skipOptInConfirmationIfSubscribed' => 'Skip confirmation if lead is already in target list',
      'smtpAccount' => 'SMTP Account',
      'inboundEmail' => 'Group Email Account',
      'duplicateCheck' => 'Duplicate Check',
    ),
    'links' => 
    array (
      'targetList' => 'Target List',
      'campaign' => 'Campaign',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'targetTeam' => 'Target Team',
      'inboundEmail' => 'Group Email Account',
      'logRecords' => 'Log',
    ),
    'labels' => 
    array (
      'Create LeadCapture' => 'Create Entry Point',
      'Generate New API Key' => 'Generate New API Key',
      'Request' => 'Request',
      'Confirm Opt-In' => 'Confirm Opt-In',
    ),
    'messages' => 
    array (
      'generateApiKey' => 'Create new API Key',
      'optInConfirmationExpired' => 'Opt-in confirmation link is expired.',
      'optInIsConfirmed' => 'Opt-in is confirmed.',
    ),
    'tooltips' => 
    array (
      'optInConfirmationSuccessMessage' => 'Markdown is supported.',
    ),
  ),
  'LeadCaptureLogRecord' => 
  array (
    'fields' => 
    array (
      'number' => 'Number',
      'data' => 'Data',
      'target' => 'Target',
      'leadCapture' => 'Lead Capture',
      'createdAt' => 'Entered At',
      'isCreated' => 'Is Lead Created',
    ),
    'links' => 
    array (
      'leadCapture' => 'Lead Capture',
      'target' => 'Target',
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Post',
      'attachments' => 'Attachments',
      'targetType' => 'Target',
      'teams' => 'Teams',
      'users' => 'Users',
      'portals' => 'Portals',
      'type' => 'Type',
      'isGlobal' => 'Is Global',
      'isInternal' => 'Is Internal (for internal users)',
      'related' => 'Related',
      'createdByGender' => 'Created By Gender',
      'data' => 'Data',
      'number' => 'Number',
    ),
    'filters' => 
    array (
      'all' => 'All',
      'posts' => 'Posts',
      'updates' => 'Updates',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'to myself',
        'users' => 'to particular user(s)',
        'teams' => 'to particular team(s)',
        'all' => 'to all internal users',
        'portals' => 'to portal users',
      ),
      'type' => 
      array (
        'Post' => 'Post',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Write your message here',
    ),
    'links' => 
    array (
      'superParent' => 'Super Parent',
      'related' => 'Related',
    ),
  ),
  'Portal' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Roles',
      'isActive' => 'Is Active',
      'isDefault' => 'Is Default',
      'tabList' => 'Tab List',
      'quickCreateList' => 'Quick Create List',
      'companyLogo' => 'Logo',
      'theme' => 'Theme',
      'language' => 'Language',
      'dashboardLayout' => 'Dashboard Layout',
      'dateFormat' => 'Date Format',
      'timeFormat' => 'Time Format',
      'timeZone' => 'Time Zone',
      'weekStart' => 'First Day of Week',
      'defaultCurrency' => 'Default Currency',
      'customUrl' => 'Custom URL',
      'customId' => 'Custom ID',
    ),
    'links' => 
    array (
      'users' => 'Users',
      'portalRoles' => 'Roles',
      'notes' => 'Notes',
      'articles' => 'Knowledge Base Articles',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Specified Portal Roles will be applied to all users of this portal.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Create Portal',
      'User Interface' => 'User Interface',
      'General' => 'General',
      'Settings' => 'Settings',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
      'exportPermission' => 'Export Permission',
      'massUpdatePermission' => 'Mass Update Permission',
    ),
    'links' => 
    array (
      'users' => 'Users',
    ),
    'tooltips' => 
    array (
      'exportPermission' => 'Defines whether portal users have an ability to export records.',
      'massUpdatePermission' => 'Defines whether portal users have an ability to do mass update of records.',
    ),
    'labels' => 
    array (
      'Access' => 'Access',
      'Create PortalRole' => 'Create Portal Role',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => 'Create Portal User',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Date Format',
      'timeFormat' => 'Time Format',
      'timeZone' => 'Time Zone',
      'weekStart' => 'First Day of Week',
      'thousandSeparator' => 'Thousand Separator',
      'decimalMark' => 'Decimal Mark',
      'defaultCurrency' => 'Default Currency',
      'currencyList' => 'Currency List',
      'language' => 'Language',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Security',
      'smtpUsername' => 'Username',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Password',
      'smtpEmailAddress' => 'Email Address',
      'exportDelimiter' => 'Export Delimiter',
      'receiveAssignmentEmailNotifications' => 'Email notifications upon assignment',
      'receiveMentionEmailNotifications' => 'Email notifications about mentions in posts',
      'receiveStreamEmailNotifications' => 'Email notifications about posts and status updates',
      'autoFollowEntityTypeList' => 'Global Auto-Follow',
      'signature' => 'Email Signature',
      'dashboardTabList' => 'Tab List',
      'defaultReminders' => 'Default Reminders',
      'theme' => 'Theme',
      'useCustomTabList' => 'Custom Tab List',
      'tabList' => 'Tab List',
      'emailReplyToAllByDefault' => 'Email Reply to all by default',
      'dashboardLayout' => 'Dashboard Layout',
      'emailReplyForceHtml' => 'Email Reply in HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Do not pre-fill assigned user on record creation',
      'followEntityOnStreamPost' => 'Auto-follow record after posting in Stream',
      'followCreatedEntities' => 'Auto-follow created records',
      'followCreatedEntityTypeList' => 'Auto-follow created records of specific entity types',
      'emailUseExternalClient' => 'Use an external email client',
      'scopeColorsDisabled' => 'Disable scope colors',
      'tabColorsDisabled' => 'Disable tab colors',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Sunday',
        1 => 'Monday',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Notifications',
      'User Interface' => 'User Interface',
      'SMTP' => 'SMTP',
      'Misc' => 'Misc',
      'Locale' => 'Locale',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Automatically follow ALL new records (created by any user) of the selected entity types. To be able to see information in the stream and receive notifications about all records in the system.',
      'doNotFillAssignedUserIfNotRequired' => 'When create record assigned user won\'t be filled with own user unless the field is required.',
      'followCreatedEntities' => 'When create new records, they will be automatically followed even if assigned to another user.',
      'followCreatedEntityTypeList' => 'When create new records of selected entity types, they will be followed automatically even if assigned to another user.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'roles' => 'Roles',
      'assignmentPermission' => 'Assignment Permission',
      'userPermission' => 'User Permission',
      'portalPermission' => 'Portal Permission',
      'groupEmailAccountPermission' => 'Group Email Account Permission',
      'exportPermission' => 'Export Permission',
      'massUpdatePermission' => 'Mass Update Permission',
      'dataPrivacyPermission' => 'Data Privacy Permission',
    ),
    'links' => 
    array (
      'users' => 'Users',
      'teams' => 'Teams',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Allows to restrict an ability to assign records and post messages to other users.

all - no restriction

team - can assign and post only to teammates

no - can assign and post only to self',
      'userPermission' => 'Allows to restrict an ability for users to view activities, calendar and stream of other users.

all - can view all

team - can view activities of teammates only

no - can\'t view',
      'portalPermission' => 'Defines an access to portal information, ability to post messages to portal users.',
      'groupEmailAccountPermission' => 'Defines an access to group email accounts, an ability to send emails from group SMTP.',
      'exportPermission' => 'Defines whether users have an ability to export records.',
      'massUpdatePermission' => 'Defines whether users have an ability to do mass update of records.',
      'dataPrivacyPermission' => 'Allows to view and erase personal data.',
    ),
    'labels' => 
    array (
      'Access' => 'Access',
      'Create Role' => 'Create Role',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'not-set',
        'enabled' => 'enabled',
        'disabled' => 'disabled',
      ),
      'levelList' => 
      array (
        'all' => 'all',
        'team' => 'team',
        'account' => 'account',
        'contact' => 'contact',
        'own' => 'own',
        'no' => 'no',
        'yes' => 'yes',
        'not-set' => 'not-set',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Read',
      'edit' => 'Edit',
      'delete' => 'Delete',
      'stream' => 'Stream',
      'create' => 'Create',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'All changes in an access control will be applied after cache is cleared.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'job' => 'Job',
      'scheduling' => 'Scheduling',
    ),
    'links' => 
    array (
      'log' => 'Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Create Scheduled Job',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Clean-up',
        'CheckInboundEmails' => 'Check Group Email Accounts',
        'CheckEmailAccounts' => 'Check Personal Email Accounts',
        'SendEmailReminders' => 'Send Email Reminders',
        'AuthTokenControl' => 'Auth Token Control',
        'SendEmailNotifications' => 'Send Email Notifications',
        'CheckNewVersion' => 'Check for New Version',
        'ProcessMassEmail' => 'Send Mass Emails',
        'ControlKnowledgeBaseArticleStatus' => 'Control Knowledge Base Article Status',
        'ReportTargetListSync' => 'Sync Target Lists with Reports',
        'ScheduleReportSending' => 'Schedule Report Sending',
        'RunScheduledWorkflows' => 'Run Scheduled Workflows',
        'ProcessPendingProcessFlows' => 'Process Pending Flows',
        'SynchronizeEventsWithGoogleCalendar' => 'Google Calendar Sync',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Note: Add this line to the crontab file to run Espo Scheduled Jobs:',
        'mac' => 'Note: Add this line to the crontab file to run Espo Scheduled Jobs:',
        'windows' => 'Note: Create a batch file with the following commands to run Espo Scheduled Jobs using Windows Scheduled Tasks:',
        'default' => 'Note: Add this command to Cron Job (Scheduled Task):',
      ),
      'status' => 
      array (
        'Active' => 'Active',
        'Inactive' => 'Inactive',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Crontab notation. Defines frequency of job runs.

*/5 * * * * - every 5 minutes

0 */2 * * * - every 2 hours

30 1 * * * - at 01:30 once a day

0 0 1 * * - on the first day of the month',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executionTime' => 'Execution Time',
      'target' => 'Target',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Use Cache',
      'dateFormat' => 'Date Format',
      'timeFormat' => 'Time Format',
      'timeZone' => 'Time Zone',
      'weekStart' => 'First Day of Week',
      'thousandSeparator' => 'Thousand Separator',
      'decimalMark' => 'Decimal Mark',
      'defaultCurrency' => 'Default Currency',
      'baseCurrency' => 'Base Currency',
      'currencyRates' => 'Rate Values',
      'currencyList' => 'Currency List',
      'language' => 'Language',
      'companyLogo' => 'Company Logo',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Security',
      'smtpUsername' => 'Username',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Password',
      'outboundEmailFromName' => 'From Name',
      'outboundEmailFromAddress' => 'From Address',
      'outboundEmailIsShared' => 'Is Shared',
      'recordsPerPage' => 'Records Per Page',
      'recordsPerPageSmall' => 'Records Per Page (Small)',
      'tabList' => 'Tab List',
      'quickCreateList' => 'Quick Create List',
      'exportDelimiter' => 'Export Delimiter',
      'globalSearchEntityList' => 'Global Search Entity List',
      'authenticationMethod' => 'Authentication Method',
      'ldapHost' => 'Host',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Full User DN',
      'ldapPassword' => 'Password',
      'ldapBindRequiresDn' => 'Bind Requires DN',
      'ldapBaseDn' => 'Base DN',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Account Domain Name',
      'ldapTryUsernameSplit' => 'Try Username Split',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Create User in EspoCRM',
      'ldapSecurity' => 'Security',
      'ldapUserLoginFilter' => 'User Login Filter',
      'ldapAccountDomainNameShort' => 'Account Domain Name Short',
      'ldapOptReferrals' => 'Opt Referrals',
      'ldapUserNameAttribute' => 'Username Attribute',
      'ldapUserObjectClass' => 'User ObjectClass',
      'ldapUserTitleAttribute' => 'User Title Attribute',
      'ldapUserFirstNameAttribute' => 'User First Name Attribute',
      'ldapUserLastNameAttribute' => 'User Last Name Attribute',
      'ldapUserEmailAddressAttribute' => 'User Email Address Attribute',
      'ldapUserTeams' => 'User Teams',
      'ldapUserDefaultTeam' => 'User Default Team',
      'ldapUserPhoneNumberAttribute' => 'User Phone Number Attribute',
      'ldapPortalUserPortals' => 'Default Portals for a Portal User',
      'ldapPortalUserRoles' => 'Default Roles for a Portal User',
      'exportDisabled' => 'Disable Export (only admin is allowed)',
      'assignmentNotificationsEntityList' => 'Entities to notify about upon assignment',
      'assignmentEmailNotifications' => 'Notifications upon assignment',
      'assignmentEmailNotificationsEntityList' => 'Assignment email notifications scopes',
      'streamEmailNotifications' => 'Notifications about updates in Stream for internal users',
      'portalStreamEmailNotifications' => 'Notifications about updates in Stream for portal users',
      'streamEmailNotificationsEntityList' => 'Stream email notifications scopes',
      'streamEmailNotificationsTypeList' => 'What to notify about',
      'emailNotificationsDelay' => 'Delay of email notifications (in seconds)',
      'b2cMode' => 'B2C Mode',
      'avatarsDisabled' => 'Disable Avatars',
      'followCreatedEntities' => 'Follow created records',
      'displayListViewRecordCount' => 'Display Total Count (on List View)',
      'theme' => 'Theme',
      'userThemesDisabled' => 'Disable User Themes',
      'emailMessageMaxSize' => 'Email Max Size (Mb)',
      'massEmailMaxPerHourCount' => 'Max number of emails sent per hour',
      'personalEmailMaxPortionSize' => 'Max email portion size for personal account fetching',
      'inboundEmailMaxPortionSize' => 'Max email portion size for group account fetching',
      'maxEmailAccountCount' => 'Max number of personal email accounts per user',
      'authTokenLifetime' => 'Auth Token Lifetime (hours)',
      'authTokenMaxIdleTime' => 'Auth Token Max Idle Time (hours)',
      'dashboardLayout' => 'Dashboard Layout (default)',
      'siteUrl' => 'Site URL',
      'addressPreview' => 'Address Preview',
      'addressFormat' => 'Address Format',
      'notificationSoundsDisabled' => 'Disable Notification Sounds',
      'applicationName' => 'Application Name',
      'calendarEntityList' => 'Calendar Entity List',
      'mentionEmailNotifications' => 'Send email notifications about mentions in posts',
      'massEmailDisableMandatoryOptOutLink' => 'Disable mandatory opt-out link',
      'massEmailOpenTracking' => 'Email Open Tracking',
      'activitiesEntityList' => 'Activities Entity List',
      'historyEntityList' => 'History Entity List',
      'currencyFormat' => 'Currency Format',
      'currencyDecimalPlaces' => 'Currency Decimal Places',
      'aclStrictMode' => 'ACL Strict Mode',
      'aclAllowDeleteCreated' => 'Allow to remove created records',
      'adminNotifications' => 'System notifications in administration panel',
      'adminNotificationsNewVersion' => 'Show notification when new EspoCRM version is available',
      'adminNotificationsNewExtensionVersion' => 'Show notification when new versions of extensions are available',
      'textFilterUseContainsForVarchar' => 'Use \'contains\' operator when filtering varchar fields',
      'authTokenPreventConcurrent' => 'Only one auth token per user',
      'scopeColorsDisabled' => 'Disable scope colors',
      'tabColorsDisabled' => 'Disable tab colors',
      'tabIconsDisabled' => 'Disable tab icons',
      'emailAddressIsOptedOutByDefault' => 'Mark new email addresses as opted-out',
      'outboundEmailBccAddress' => 'BCC address for external clients',
      'cleanupDeletedRecords' => 'Clean up deleted records',
      'addressCountryList' => 'Address Country Autocomplete List',
      'addressCityList' => 'Address City Autocomplete List',
      'addressStateList' => 'Address State Autocomplete List',
      'fiscalYearShift' => 'Fiscal Year Start',
      'jobRunInParallel' => 'Jobs Run in Parallel',
      'jobMaxPortion' => 'Jobs Max Portion',
      'jobPoolConcurrencyNumber' => 'Jobs Pool Concurrency Number',
      'daemonInterval' => 'Daemon Interval',
      'daemonMaxProcessNumber' => 'Daemon Max Process Number',
      'daemonProcessTimeout' => 'Daemon Process Timeout',
      'cronDisabled' => 'Disable Cron',
      'maintenanceMode' => 'Maintenance Mode',
      'useWebSocket' => 'Use WebSocket',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Sunday',
        1 => 'Monday',
      ),
      'currencyFormat' => 
      array (
        1 => '10 USD',
        2 => '$10',
      ),
      'streamEmailNotificationsTypeList' => 
      array (
        'Post' => 'Posts',
        'Status' => 'Status updates',
        'EmailReceived' => 'Received emails',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPage' => 'Number of records initially displayed in list views.',
      'recordsPerPageSmall' => 'Number of records initially displayed in relationship panels.',
      'outboundEmailIsShared' => 'Allow users to send emails from this address.',
      'followCreatedEntities' => 'Users will automatically follow records they created.',
      'emailMessageMaxSize' => 'All inbound emails exceeding a specified size will be fetched w/o body and attachments.',
      'authTokenLifetime' => 'Defines how long tokens can exist.
0 - means no expiration.',
      'authTokenMaxIdleTime' => 'Defines how long since the last access tokens can exist.
0 - means no expiration.',
      'userThemesDisabled' => 'If checked then users won\'t be able to select another theme.',
      'ldapUsername' => 'The full system user DN which allows to search other users. E.g. "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan".',
      'ldapPassword' => 'The password to access to LDAP server.',
      'ldapAuth' => 'Access credentials for the LDAP server.',
      'ldapUserNameAttribute' => 'The attribute to identify the user. 
E.g. "userPrincipalName" or "sAMAccountName" for Active Directory, "uid" for OpenLDAP.',
      'ldapUserObjectClass' => 'ObjectClass attribute for searching users. E.g. "person" for AD, "inetOrgPerson" for OpenLDAP.',
      'ldapAccountCanonicalForm' => 'The type of your account canonical form. There are 4 options:

- \'Dn\' - the form in the format \'CN=tester,OU=espocrm,DC=test, DC=lan\'.

- \'Username\' - the form \'tester\'.

- \'Backslash\' - the form \'COMPANY\\tester\'.

- \'Principal\' - the form \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'The option to format the username in the DN form.',
      'ldapBaseDn' => 'The default base DN used for searching users. E.g. "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'The option to split a username with the domain.',
      'ldapOptReferrals' => 'if referrals should be followed to the LDAP client.',
      'ldapPortalUserLdapAuth' => 'Allow portal users to use LDAP authentication instead of Espo authentication.',
      'ldapCreateEspoUser' => 'This option allows EspoCRM to create a user from the LDAP.',
      'ldapUserFirstNameAttribute' => 'LDAP attribute which is used to determine the user first name. E.g. "givenname".',
      'ldapUserLastNameAttribute' => 'LDAP attribute which is used to determine the user last name. E.g. "sn".',
      'ldapUserTitleAttribute' => 'LDAP attribute which is used to determine the user title. E.g. "title".',
      'ldapUserEmailAddressAttribute' => 'LDAP attribute which is used to determine the user email address. E.g. "mail".',
      'ldapUserPhoneNumberAttribute' => 'LDAP attribute which is used to determine the user phone number. E.g. "telephoneNumber".',
      'ldapUserLoginFilter' => 'The filter which allows to restrict users who able to use EspoCRM. E.g. "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => 'The domain which is used for authorization to LDAP server.',
      'ldapAccountDomainNameShort' => 'The short domain which is used for authorization to LDAP server.',
      'ldapUserTeams' => 'Teams for created user. For more, see user profile.',
      'ldapUserDefaultTeam' => 'Default team for created user. For more, see user profile.',
      'ldapPortalUserPortals' => 'Default Portals for created Portal User',
      'ldapPortalUserRoles' => 'Default Roles for created Portal User',
      'b2cMode' => 'By default EspoCRM is adapted for B2B. You can switch it to B2C.',
      'currencyDecimalPlaces' => 'Number of decimal places. If empty then all nonempty decimal places will be displayed.',
      'aclStrictMode' => 'Enabled: Access to scopes will be forbidden if it\'s not specified in roles.

Disabled: Access to scopes will be allowed if it\'s not specified in roles.',
      'aclAllowDeleteCreated' => 'Users will be able to remove records they created even if they don\'t have a delete access.',
      'textFilterUseContainsForVarchar' => 'If not checked then \'starts with\' operator is used. You can use the wildcard \'%\'.',
      'streamEmailNotificationsEntityList' => 'Email notifications about stream updates of followed records. Users will receive email notifications only for specified entity types.',
      'authTokenPreventConcurrent' => 'Users won\'t be able to be logged in on multiple devices simultaneously.',
      'emailAddressIsOptedOutByDefault' => 'When creating new record email addess will be marked as opted-out.',
      'cleanupDeletedRecords' => 'Removed records will be deleted from database after a while.',
      'jobRunInParallel' => 'Jobs will be executed in parallel processes.',
      'jobPoolConcurrencyNumber' => 'Max number of processes run simultaneously.',
      'jobMaxPortion' => 'Max number of jobs processed per one execution.',
      'daemonInterval' => 'Interval between process cron runs in seconds.',
      'daemonMaxProcessNumber' => 'Max number of cron processes run simultaneously.',
      'daemonProcessTimeout' => 'Max execution time (in seconds) allocated for a single cron process.',
      'cronDisabled' => 'Cron will not run.',
      'maintenanceMode' => 'Only administrators will have access to the system.',
    ),
    'labels' => 
    array (
      'System' => 'System',
      'Locale' => 'Locale',
      'Search' => 'Search',
      'Misc' => 'Misc',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configuration',
      'In-app Notifications' => 'In-app Notifications',
      'Email Notifications' => 'Email Notifications',
      'Currency Settings' => 'Currency Settings',
      'Currency Rates' => 'Currency Rates',
      'Mass Email' => 'Mass Email',
      'Test Connection' => 'Test Connection',
      'Connecting' => 'Connecting...',
      'Activities' => 'Activities',
      'Admin Notifications' => 'Admin Notifications',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'The connection successfully established.',
    ),
  ),
  'Stream' => 
  array (
    'messages' => 
    array (
      'infoMention' => 'Type **@username** to mention user in the post.',
      'infoSyntax' => 'Available markdown syntax',
    ),
    'syntaxItems' => 
    array (
      'code' => 'code',
      'multilineCode' => 'multiline code',
      'strongText' => 'strong text',
      'emphasizedText' => 'emphasized text',
      'deletedText' => 'deleted text',
      'blockquote' => 'blockquote',
      'link' => 'link',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'roles' => 'Roles',
      'positionList' => 'Position List',
    ),
    'links' => 
    array (
      'users' => 'Users',
      'notes' => 'Notes',
      'roles' => 'Roles',
      'inboundEmails' => 'Group Email Accounts',
    ),
    'tooltips' => 
    array (
      'roles' => 'Access Roles. Users of this team obtain access control level from selected roles.',
      'positionList' => 'Available positions in this team. E.g. Salesperson, Manager.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Create Team',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'body' => 'Body',
      'entityType' => 'Entity Type',
      'header' => 'Header',
      'footer' => 'Footer',
      'leftMargin' => 'Left Margin',
      'topMargin' => 'Top Margin',
      'rightMargin' => 'Right Margin',
      'bottomMargin' => 'Bottom Margin',
      'printFooter' => 'Print Footer',
      'footerPosition' => 'Footer Position',
      'variables' => 'Available Placeholders',
      'pageOrientation' => 'Page Orientation',
      'pageFormat' => 'Paper Format',
      'pageWidth' => 'Page Width (mm)',
      'pageHeight' => 'Page Height (mm)',
      'fontFace' => 'Font',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Create Template',
    ),
    'options' => 
    array (
      'pageOrientation' => 
      array (
        'Portrait' => 'Portrait',
        'Landscape' => 'Landscape',
      ),
      'pageFormat' => 
      array (
        'Custom' => 'Custom',
      ),
      'placeholders' => 
      array (
        'today' => 'Today (date)',
        'now' => 'Now (date-time)',
      ),
      'fontFace' => 
      array (
        'aealarabiya' => 'AlArabiya',
        'aefurat' => 'Aefurat',
        'cid0cs' => 'CID-0 cs',
        'cid0ct' => 'CID-0 ct',
        'cid0jp' => 'CID-0 jp',
        'cid0kr' => 'CID-0 kr',
        'courier' => 'Courier',
        'dejavusans' => 'DejaVu Sans',
        'dejavusanscondensed' => 'DejaVu Sans Condensed',
        'dejavusansextralight' => 'DejaVu Sans ExtraLight',
        'dejavusansmono' => 'DejaVu Sans Mono',
        'dejavuserif' => 'DejaVu Serif',
        'dejavuserifcondensed' => 'DejaVu Serif Condensed',
        'freemono' => 'FreeMono',
        'freesans' => 'FreeSans',
        'freeserif' => 'FreeSerif',
        'helvetica' => 'Helvetica',
        'hysmyeongjostdmedium' => 'Hysmyeongjostd Medium',
        'kozgopromedium' => 'Kozgo Pro Medium',
        'kozminproregular' => 'Kozmin Pro Regular',
        'msungstdlight' => 'Msung Std Light',
        'pdfacourier' => 'PDFA Courier',
        'pdfahelvetica' => 'PDFA Helvetica',
        'pdfasymbol' => 'PDFA Symbol',
        'pdfatimes' => 'PDFA Times',
        'stsongstdlight' => 'STSong Std Light',
        'symbol' => 'Symbol',
        'times' => 'Times',
      ),
    ),
    'tooltips' => 
    array (
      'footer' => 'Use {pageNumber} to print page number.',
      'variables' => 'Copy-paste needed placeholder to Header, Body or Footer.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'userName' => 'User Name',
      'title' => 'Title',
      'type' => 'Type',
      'isAdmin' => 'Is Admin',
      'defaultTeam' => 'Default Team',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Phone',
      'roles' => 'Roles',
      'portals' => 'Portals',
      'portalRoles' => 'Portal Roles',
      'teamRole' => 'Position',
      'password' => 'Password',
      'currentPassword' => 'Current Password',
      'passwordConfirm' => 'Confirm Password',
      'newPassword' => 'New Password',
      'newPasswordConfirm' => 'Confirm New Password',
      'avatar' => 'Avatar',
      'isActive' => 'Is Active',
      'isPortalUser' => 'Is Portal User',
      'contact' => 'Contact',
      'accounts' => 'Accounts',
      'account' => 'Account (Primary)',
      'sendAccessInfo' => 'Send Email with Access Info to User',
      'portal' => 'Portal',
      'gender' => 'Gender',
      'position' => 'Position in Team',
      'ipAddress' => 'IP Address',
      'passwordPreview' => 'Password Preview',
      'isSuperAdmin' => 'Is Super Admin',
      'lastAccess' => 'Last Access',
      'apiKey' => 'API Key',
      'secretKey' => 'Secret Key',
      'authMethod' => 'Authentication Method',
      'acceptanceStatus' => 'Acceptance Status',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'defaultTeam' => 'Default Team',
      'teams' => 'Teams',
      'roles' => 'Roles',
      'notes' => 'Notes',
      'portals' => 'Portals',
      'portalRoles' => 'Portal Roles',
      'contact' => 'Contact',
      'accounts' => 'Accounts',
      'account' => 'Account (Primary)',
      'tasks' => 'Tasks',
      'targetLists' => 'Target Lists',
    ),
    'labels' => 
    array (
      'Create User' => 'Create User',
      'Generate' => 'Generate',
      'Access' => 'Access',
      'Preferences' => 'Preferences',
      'Change Password' => 'Change Password',
      'Teams and Access Control' => 'Teams and Access Control',
      'Forgot Password?' => 'Forgot Password?',
      'Password Change Request' => 'Password Change Request',
      'Email Address' => 'Email Address',
      'External Accounts' => 'External Accounts',
      'Email Accounts' => 'Email Accounts',
      'Portal' => 'Portal',
      'Create Portal User' => 'Create Portal User',
      'Proceed w/o Contact' => 'Proceed w/o Contact',
      'Generate New API Key' => 'Generate New API Key',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'All records created by this user will be related to this team by default.',
      'userName' => 'Letters a-z, numbers 0-9, dots, hyphens, @-signs and underscores are allowed.',
      'isAdmin' => 'Admin user can access everything.',
      'isActive' => 'If unchecked then user won\'t be able to login.',
      'teams' => 'Teams which this user belongs to. Access control level is inherited from team\'s roles.',
      'roles' => 'Additional access roles. Use it if user doesn\'t belong to any team or you need to extend access control level exclusively for this user.',
      'portalRoles' => 'Additional portal roles. Use it to extend access control level exclusively for this user.',
      'portals' => 'Portals which this user has access to.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Password will be sent to user\'s email address.',
      'passwordChanged' => 'Password has been changed',
      'userCantBeEmpty' => 'Username can not be empty',
      'wrongUsernamePasword' => 'Wrong username/password',
      'emailAddressCantBeEmpty' => 'Email Address can not be empty',
      'userNameEmailAddressNotFound' => 'Username/Email Address not found',
      'forbidden' => 'Forbidden, please try later',
      'uniqueLinkHasBeenSent' => 'The unique URL has been sent to the specified email address.',
      'passwordChangedByRequest' => 'Password has been changed.',
      'setupSmtpBefore' => 'You need to setup [SMTP settings]({url}) to make the system be able to send password in email.',
      'userNameExists' => 'User Name already exists',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'Not Set',
        'Male' => 'Male',
        'Female' => 'Female',
        'Neutral' => 'Neutral',
      ),
      'type' => 
      array (
        'regular' => 'Regular',
        'admin' => 'Admin',
        'portal' => 'Portal',
        'system' => 'System',
        'super-admin' => 'Super-Admin',
        'api' => 'API',
      ),
      'authMethod' => 
      array (
        'ApiKey' => 'API Key',
        'Hmac' => 'HMAC',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Only My Team',
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
      'activePortal' => 'Portal Active',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'Email',
      'website' => 'Website',
      'phoneNumber' => 'Phone',
      'billingAddress' => 'Billing Address',
      'shippingAddress' => 'Shipping Address',
      'description' => 'Description',
      'sicCode' => 'Sic Code',
      'industry' => 'Industry',
      'type' => 'Type',
      'contactRole' => 'Title',
      'contactIsInactive' => 'Inactive',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
      'originalLead' => 'Original Lead',
    ),
    'links' => 
    array (
      'contacts' => 'Contacts',
      'opportunities' => 'Opportunities',
      'cases' => 'Cases',
      'documents' => 'Documents',
      'meetingsPrimary' => 'Meetings (expanded)',
      'callsPrimary' => 'Calls (expanded)',
      'tasksPrimary' => 'Tasks (expanded)',
      'emailsPrimary' => 'Emails (expanded)',
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
      'campaign' => 'Campaign',
      'portalUsers' => 'Portal Users',
      'originalLead' => 'Original Lead',
      'quotes' => 'Quotes',
      'quoteItems' => 'Quote Items',
      'salesOrders' => 'Sales Orders',
      'salesOrderItems' => 'Sales Order Items',
      'invoices' => 'Invoices',
      'invoiceItems' => 'Invoice Items',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Customer',
        'Investor' => 'Investor',
        'Partner' => 'Partner',
        'Reseller' => 'Reseller',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Aerospace',
        'Agriculture' => 'Agriculture',
        'Advertising' => 'Advertising',
        'Apparel & Accessories' => 'Apparel & Accessories',
        'Architecture' => 'Architecture',
        'Automotive' => 'Automotive',
        'Banking' => 'Banking',
        'Biotechnology' => 'Biotechnology',
        'Building Materials & Equipment' => 'Building Materials & Equipment',
        'Chemical' => 'Chemical',
        'Construction' => 'Construction',
        'Computer' => 'Computer',
        'Defense' => 'Defense',
        'Creative' => 'Creative',
        'Culture' => 'Culture',
        'Consulting' => 'Consulting',
        'Education' => 'Education',
        'Electronics' => 'Electronics',
        'Electric Power' => 'Electric Power',
        'Energy' => 'Energy',
        'Entertainment & Leisure' => 'Entertainment & Leisure',
        'Finance' => 'Finance',
        'Food & Beverage' => 'Food & Beverage',
        'Grocery' => 'Grocery',
        'Hospitality' => 'Hospitality',
        'Healthcare' => 'Healthcare',
        'Insurance' => 'Insurance',
        'Legal' => 'Legal',
        'Manufacturing' => 'Manufacturing',
        'Mass Media' => 'Mass Media',
        'Mining' => 'Mining',
        'Music' => 'Music',
        'Marketing' => 'Marketing',
        'Publishing' => 'Publishing',
        'Petroleum' => 'Petroleum',
        'Real Estate' => 'Real Estate',
        'Retail' => 'Retail',
        'Shipping' => 'Shipping',
        'Service' => 'Service',
        'Support' => 'Support',
        'Sports' => 'Sports',
        'Software' => 'Software',
        'Technology' => 'Technology',
        'Telecommunications' => 'Telecommunications',
        'Television' => 'Television',
        'Testing, Inspection & Certification' => 'Testing, Inspection & Certification',
        'Transportation' => 'Transportation',
        'Travel' => 'Travel',
        'Venture Capital' => 'Venture Capital',
        'Wholesale' => 'Wholesale',
        'Water' => 'Water',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Create Account',
      'Copy Billing' => 'Copy Billing',
      'Set Primary' => 'Set Primary',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Customers',
      'partners' => 'Partners',
      'recentlyCreated' => 'Recently Created',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Month',
      'week' => 'Week',
      'day' => 'Day',
      'agendaWeek' => 'Week',
      'agendaDay' => 'Day',
      'timeline' => 'Timeline',
    ),
    'labels' => 
    array (
      'Today' => 'Today',
      'Create' => 'Create',
      'Shared' => 'Shared',
      'Add User' => 'Add User',
      'current' => 'current',
      'time' => 'time',
      'User List' => 'User List',
      'Manage Users' => 'Manage Users',
      'View Calendar' => 'View Calendar',
      'Create Shared View' => 'Create Shared View',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Parent',
      'status' => 'Status',
      'dateStart' => 'Date Start',
      'dateEnd' => 'Date End',
      'direction' => 'Direction',
      'duration' => 'Duration',
      'description' => 'Description',
      'users' => 'Users',
      'contacts' => 'Contacts',
      'leads' => 'Leads',
      'reminders' => 'Reminders',
      'account' => 'Account',
      'acceptanceStatus' => 'Acceptance Status',
      'googleCalendarEventId' => 'Google Calendar Event ID',
      'googleCalendar' => 'Google Calendar',
    ),
    'links' => 
    array (
      'googleCalendar' => 'Google Calendar',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planned',
        'Held' => 'Held',
        'Not Held' => 'Not Held',
      ),
      'direction' => 
      array (
        'Outbound' => 'Outbound',
        'Inbound' => 'Inbound',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'None',
        'Accepted' => 'Accepted',
        'Declined' => 'Declined',
        'Tentative' => 'Tentative',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held',
    ),
    'labels' => 
    array (
      'Create Call' => 'Create Call',
      'Set Held' => 'Set Held',
      'Set Not Held' => 'Set Not Held',
      'Send Invitations' => 'Send Invitations',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planned',
      'held' => 'Held',
      'todays' => 'Today\'s',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'description' => 'Description',
      'status' => 'Status',
      'type' => 'Type',
      'startDate' => 'Start Date',
      'endDate' => 'End Date',
      'targetLists' => 'Target Lists',
      'excludingTargetLists' => 'Excluding Target Lists',
      'sentCount' => 'Sent',
      'openedCount' => 'Opened',
      'clickedCount' => 'Clicked',
      'optedOutCount' => 'Opted Out',
      'bouncedCount' => 'Bounced',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Hard Bounced',
      'softBouncedCount' => 'Soft Bounced',
      'leadCreatedCount' => 'Leads Created',
      'revenue' => 'Revenue',
      'revenueConverted' => 'Revenue (converted)',
      'budget' => 'Budget',
      'budgetConverted' => 'Budget (converted)',
      'budgetCurrency' => 'Budget Currency',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address',
    ),
    'links' => 
    array (
      'targetLists' => 'Target Lists',
      'excludingTargetLists' => 'Excluding Target Lists',
      'accounts' => 'Accounts',
      'contacts' => 'Contacts',
      'leads' => 'Leads',
      'opportunities' => 'Opportunities',
      'campaignLogRecords' => 'Log',
      'massEmails' => 'Mass Emails',
      'trackingUrls' => 'Tracking URLs',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Television',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Mail',
      ),
      'status' => 
      array (
        'Planning' => 'Planning',
        'Active' => 'Active',
        'Inactive' => 'Inactive',
        'Complete' => 'Complete',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Create Campaign',
      'Target Lists' => 'Target Lists',
      'Statistics' => 'Statistics',
      'hard' => 'hard',
      'soft' => 'soft',
      'Unsubscribe' => 'Unsubscribe',
      'Mass Emails' => 'Mass Emails',
      'Email Templates' => 'Email Templates',
      'Unsubscribe again' => 'Unsubscribe again',
      'Subscribe again' => 'Subscribe again',
      'Create Target List' => 'Create Target List',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF',
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'You have been unsubscribed from our mailing list.',
      'subscribedAgain' => 'You are subscribed again.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Targets that should receive messages.',
      'excludingTargetLists' => 'Targets that should not receive messages.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Action',
      'actionDate' => 'Date',
      'data' => 'Data',
      'campaign' => 'Campaign',
      'parent' => 'Target',
      'object' => 'Object',
      'application' => 'Application',
      'queueItem' => 'Queue Item',
      'stringData' => 'String Data',
      'stringAdditionalData' => 'String Additional Data',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'queueItem' => 'Queue Item',
      'parent' => 'Parent',
      'object' => 'Object',
      'campaign' => 'Campaign',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Sent',
        'Opened' => 'Opened',
        'Opted Out' => 'Opted Out',
        'Bounced' => 'Bounced',
        'Clicked' => 'Clicked',
        'Lead Created' => 'Lead Created',
        'Opted In' => 'Opted In',
      ),
    ),
    'labels' => 
    array (
      'All' => 'All',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Sent',
      'opened' => 'Opened',
      'optedOut' => 'Opted Out',
      'optedIn' => 'Opted In',
      'bounced' => 'Bounced',
      'clicked' => 'Clicked',
      'leadCreated' => 'Lead Created',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL',
      'urlToUse' => 'Code to insert instead of URL',
      'campaign' => 'Campaign',
    ),
    'links' => 
    array (
      'campaign' => 'Campaign',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Create Tracking URL',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'number' => 'Number',
      'status' => 'Status',
      'account' => 'Account',
      'contact' => 'Contact',
      'contacts' => 'Contacts',
      'priority' => 'Priority',
      'type' => 'Type',
      'description' => 'Description',
      'inboundEmail' => 'Group Email Account',
      'lead' => 'Lead',
      'attachments' => 'Attachments',
      'algo' => 'Algo',
      'opportunity' => 'Opportunity',
      'contacts1' => 'Contacts1',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Group Email Account',
      'account' => 'Account',
      'contact' => 'Contact (Primary)',
      'Contacts' => 'Contacts',
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'emails' => 'Emails',
      'articles' => 'Knowledge Base Articles',
      'lead' => 'Lead',
      'attachments' => 'Attachments',
      'algo' => 'Algo',
      'opportunity' => 'Opportunity',
      'contacts1' => 'Contacts1',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'New',
        'Assigned' => 'Assigned',
        'Pending' => 'Pending',
        'Closed' => 'Closed',
        'Rejected' => 'Rejected',
        'Duplicate' => 'Duplicate',
      ),
      'priority' => 
      array (
        'Low' => 'Low',
        'Normal' => 'Normal',
        'High' => 'High',
        'Urgent' => 'Urgent',
      ),
      'type' => 
      array (
        'Question' => 'Question',
        'Incident' => 'Incident',
        'Problem' => 'Problem',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Create Case',
      'Close' => 'Close',
      'Reject' => 'Reject',
      'Closed' => 'Closed',
      'Rejected' => 'Rejected',
    ),
    'presetFilters' => 
    array (
      'open' => 'Open',
      'closed' => 'Closed',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'Email',
      'title' => 'Primary Account Title',
      'account' => 'Account',
      'accounts' => 'Accounts',
      'phoneNumber' => 'Phone',
      'accountType' => 'Account Type',
      'doNotCall' => 'Do Not Call',
      'address' => 'Address',
      'opportunityRole' => 'Opportunity Role',
      'accountRole' => 'Title',
      'description' => 'Description',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
      'portalUser' => 'Portal User',
      'originalLead' => 'Original Lead',
      'acceptanceStatus' => 'Acceptance Status',
      'accountIsInactive' => 'Account Inactive',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
      'case' => 'Case',
      'alias' => 'Alias',
      'giroProf' => 'Giro o Profesión',
      'origen' => 'Origen',
      'tarifa' => 'Tarifa',
      'opportunities1' => 'Opportunities1',
      'opportunity' => 'Opportunity',
      'instalacion' => 'Instalacion',
      'instalacions' => 'Instalacions',
      'aislados' => 'Aislados',
      'aislado' => 'Aislado',
      'aCCs' => 'ACCs',
    ),
    'links' => 
    array (
      'opportunities' => 'Opportunities',
      'cases' => 'Cases',
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
      'campaign' => 'Campaign',
      'account' => 'Account (Primary)',
      'accounts' => 'Accounts',
      'casesPrimary' => 'Cases (Primary)',
      'tasksPrimary' => 'Tasks (expanded)',
      'portalUser' => 'Portal User',
      'originalLead' => 'Original Lead',
      'documents' => 'Documents',
      'quotesBilling' => 'Quotes (Billing)',
      'quotesShipping' => 'Quotes (Shipping)',
      'salesOrdersBilling' => 'Sales Orders (Billing)',
      'salesOrdersShipping' => 'Sales Orders (Shipping)',
      'invoicesBilling' => 'Invoices (Billing)',
      'invoicesShipping' => 'Invoices (Shipping)',
      'case' => 'Case',
      'opportunities1' => 'Opportunities1',
      'opportunity' => 'Opportunity',
      'instalacion' => 'Instalacion',
      'instalacions' => 'Instalacions',
      'aislados' => 'Aislados',
      'aislado' => 'Aislado',
      'aCCs' => 'ACCs',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Create Contact',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '',
        'Decision Maker' => 'Decision Maker',
        'Evaluator' => 'Evaluator',
        'Influencer' => 'Influencer',
      ),
      'origen' => 
      array (
        'Redes' => 'Redes',
        'Cambaceo' => 'Cambaceo',
        'Recomendado' => 'Recomendado',
        'Arquitecto' => 'Arquitecto',
        'Auto' => 'Auto',
        'Volanteo' => 'Volanteo',
      ),
      'tarifa' => 
      array (
        'Domestico' => 'Domestico',
        'Industrial' => 'Industrial',
        'Comercial' => 'Comercial',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Portal Users',
      'notPortalUsers' => 'Not Portal Users',
      'accountActive' => 'Active',
    ),
    'massActions' => 
    array (
      'pushToGoogle' => 'Push to Google',
    ),
    'messages' => 
    array (
      'confirmationGoogleContactsPush' => 'Do you want to push selected contacts to Google Contacts?',
      'successGoogleContactsPush' => '{count} record(s) successfully pushed. The rest is about to be pushed in idle mode.',
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => 'Create Document',
      'Details' => 'Details',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'file' => 'File',
      'type' => 'Type',
      'publishDate' => 'Publish Date',
      'expirationDate' => 'Expiration Date',
      'description' => 'Description',
      'accounts' => 'Accounts',
      'folder' => 'Folder',
    ),
    'links' => 
    array (
      'accounts' => 'Accounts',
      'opportunities' => 'Opportunities',
      'folder' => 'Folder',
      'leads' => 'Leads',
      'contacts' => 'Contacts',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Active',
        'Draft' => 'Draft',
        'Expired' => 'Expired',
        'Canceled' => 'Canceled',
      ),
      'type' => 
      array (
        '' => 'None',
        'Contract' => 'Contract',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'License Agreement',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
      'draft' => 'Draft',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Create Document Folder',
      'Manage Categories' => 'Manage Folders',
      'Documents' => 'Documents',
    ),
    'links' => 
    array (
      'documents' => 'Documents',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'target' => 'Target',
      'sentAt' => 'Date Sent',
      'attemptCount' => 'Attempts',
      'emailAddress' => 'Email Address',
      'massEmail' => 'Mass Email',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'target' => 'Target',
      'massEmail' => 'Mass Email',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Pending',
        'Sent' => 'Sent',
        'Failed' => 'Failed',
        'Sending' => 'Sending',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'Pending',
      'sent' => 'Sent',
      'failed' => 'Failed',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Create Article',
      'Any' => 'Any',
      'Send in Email' => 'Send in Email',
      'Move Up' => 'Move Up',
      'Move Down' => 'Move Down',
      'Move to Top' => 'Move to Top',
      'Move to Bottom' => 'Move to Bottom',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'type' => 'Type',
      'attachments' => 'Attachments',
      'publishDate' => 'Publish Date',
      'expirationDate' => 'Expiration Date',
      'description' => 'Description',
      'body' => 'Body',
      'categories' => 'Categories',
      'language' => 'Language',
      'portals' => 'Portals',
    ),
    'links' => 
    array (
      'cases' => 'Cases',
      'opportunities' => 'Opportunities',
      'categories' => 'Categories',
      'portals' => 'Portals',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'In Review',
        'Draft' => 'Draft',
        'Archived' => 'Archived',
        'Published' => 'Published',
      ),
      'type' => 
      array (
        'Article' => 'Article',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'Article will be available only in specified portals.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Published',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Create Category',
      'Manage Categories' => 'Manage Categories',
      'Articles' => 'Articles',
    ),
    'links' => 
    array (
      'articles' => 'Articles',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Converted To',
      'Create Lead' => 'Create Lead',
      'Convert' => 'Convert',
      'convert' => 'convert',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'Email',
      'title' => 'Title',
      'website' => 'Website',
      'phoneNumber' => 'Phone',
      'accountName' => 'Account Name',
      'doNotCall' => 'Do Not Call',
      'address' => 'Address',
      'status' => 'Status',
      'source' => 'Source',
      'opportunityAmount' => 'Opportunity Amount',
      'opportunityAmountConverted' => 'Opportunity Amount (converted)',
      'description' => 'Description',
      'createdAccount' => 'Account',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Opportunity',
      'convertedAt' => 'Converted At',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
      'industry' => 'Industry',
      'acceptanceStatus' => 'Acceptance Status',
      'opportunityAmountCurrency' => 'Opportunity Amount Currency',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
      'campaign' => 'Campaign',
      'createdAccount' => 'Account',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Opportunity',
      'cases' => 'Cases',
      'documents' => 'Documents',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'New',
        'Assigned' => 'Assigned',
        'In Process' => 'In Process',
        'Converted' => 'Converted',
        'Recycled' => 'Recycled',
        'Dead' => 'Dead',
      ),
      'source' => 
      array (
        '' => 'None',
        'Call' => 'Call',
        'Email' => 'Email',
        'Existing Customer' => 'Existing Customer',
        'Partner' => 'Partner',
        'Public Relations' => 'Public Relations',
        'Web Site' => 'Web Site',
        'Campaign' => 'Campaign',
        'Other' => 'Other',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
      'actual' => 'Actual',
      'converted' => 'Converted',
    ),
    'massActions' => 
    array (
      'pushToGoogle' => 'Push to Google',
    ),
    'messages' => 
    array (
      'confirmationGoogleContactsPush' => 'Do you want to push selected leads to Google Contacts?',
      'successGoogleContactsPush' => '{count} record(s) successfully pushed. The rest is about to be pushed in idle mode.',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'storeSentEmails' => 'Store Sent Emails',
      'startAt' => 'Date Start',
      'fromAddress' => 'From Address',
      'fromName' => 'From Name',
      'replyToAddress' => 'Reply-to Address',
      'replyToName' => 'Reply-to Name',
      'campaign' => 'Campaign',
      'emailTemplate' => 'Email Template',
      'inboundEmail' => 'Email Account',
      'targetLists' => 'Target Lists',
      'excludingTargetLists' => 'Excluding Target Lists',
      'optOutEntirely' => 'Opt-Out Entirely',
      'smtpAccount' => 'SMTP Account',
    ),
    'links' => 
    array (
      'targetLists' => 'Target Lists',
      'excludingTargetLists' => 'Excluding Target Lists',
      'queueItems' => 'Queue Items',
      'campaign' => 'Campaign',
      'emailTemplate' => 'Email Template',
      'inboundEmail' => 'Email Account',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Draft',
        'Pending' => 'Pending',
        'In Process' => 'In Process',
        'Complete' => 'Complete',
        'Canceled' => 'Canceled',
        'Failed' => 'Failed',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Create Mass Email',
      'Send Test' => 'Send Test',
      'System SMTP' => 'System SMTP',
      'system' => 'system',
      'group' => 'group',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Select at least one target.',
      'testSent' => 'Test email(s) supposed to be sent',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'Email addresses of recipients that unsubscribed will be marked as opted out and they will not receive any mass emails anymore.',
      'targetLists' => 'Targets that should receive messages.',
      'excludingTargetLists' => 'Targets that should not receive messages.',
      'storeSentEmails' => 'Emails will be stored in CRM.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'complete' => 'Complete',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Parent',
      'status' => 'Status',
      'dateStart' => 'Date Start',
      'dateEnd' => 'Date End',
      'duration' => 'Duration',
      'description' => 'Description',
      'users' => 'Users',
      'contacts' => 'Contacts',
      'leads' => 'Leads',
      'reminders' => 'Reminders',
      'account' => 'Account',
      'acceptanceStatus' => 'Acceptance Status',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'isAllDay' => 'Is All-Day',
      'Acceptance' => 'Acceptance',
      'googleCalendarEventId' => 'Google Calendar Event ID',
      'googleCalendar' => 'Google Calendar',
    ),
    'links' => 
    array (
      'googleCalendar' => 'Google Calendar',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planned',
        'Held' => 'Held',
        'Not Held' => 'Not Held',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'None',
        'Accepted' => 'Accepted',
        'Declined' => 'Declined',
        'Tentative' => 'Tentative',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Create Meeting',
      'Set Held' => 'Set Held',
      'Set Not Held' => 'Set Not Held',
      'Send Invitations' => 'Send Invitations',
      'on time' => 'on time',
      'before' => 'before',
      'All-Day' => 'All-Day',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planned',
      'held' => 'Held',
      'todays' => 'Today\'s',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => 'Nothing were sent',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'account' => 'Account',
      'stage' => 'Stage',
      'amount' => 'Amount',
      'probability' => 'Probability, %',
      'leadSource' => 'Lead Source',
      'doNotCall' => 'Do Not Call',
      'closeDate' => 'Close Date',
      'contacts' => 'Contacts',
      'description' => 'Description',
      'amountConverted' => 'Amount (converted)',
      'amountWeightedConverted' => 'Amount Weighted',
      'campaign' => 'Campaign',
      'originalLead' => 'Original Lead',
      'amountCurrency' => 'Amount Currency',
      'contactRole' => 'Contact Role',
      'lastStage' => 'Last Stage',
      'itemList' => 'Item List',
      'cases' => 'Cases',
      'kw' => 'Kw',
      'origen' => 'Origen',
      'probabilidad' => 'Probabilidad de cierre %',
      'documentos' => 'Documentos',
      'tarifa' => 'Tarifa',
      'contacts1' => 'Contacts1',
      'contacts12' => 'Contacts12',
      'aislados' => 'Aislados',
      'instalacion' => 'Instalacion',
      'instalacions' => 'Instalacions',
      'instalacions1' => 'Instalacions1',
      'instalacions12' => 'Instalacions12',
      'tipoPago' => 'Tipo de Pago',
      'aCCs' => 'ACCs',
      'direccion' => 'Direccion',
      'direccionStreet' => 'Direccion Calle',
      'direccionCity' => 'Direccion Ciudad',
      'direccionState' => 'Direccion Estado',
      'direccionCountry' => 'Direccion País',
      'direccionPostalCode' => 'Direccion Código Postal',
      'direccionMap' => 'Direccion Mapa',
      'financiamento' => 'Financiamento',
      'recibo' => 'Recibo',
      'cotizacion' => 'Cotización',
      'consumoPromedio' => 'Consumo promedio',
      'subidaDeArchivos' => 'Subida de archivos',
    ),
    'links' => 
    array (
      'contacts' => 'Contacts',
      'documents' => 'Documents',
      'campaign' => 'Campaign',
      'originalLead' => 'Original Lead',
      'quotes' => 'Quotes',
      'salesOrders' => 'Sales Orders',
      'invoices' => 'Invoices',
      'items' => 'Items',
      'algos' => 'Algos',
      'cases' => 'Cases',
      'contacts1' => 'Contacts1',
      'contacts12' => 'Contacts12',
      'aislados' => 'Aislados',
      'instalacion' => 'Instalacion',
      'instalacions' => 'Instalacions',
      'instalacions1' => 'Instalacions1',
      'instalacions12' => 'Instalacions12',
      'aCCs' => 'ACCs',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Qualification',
        'Proposal' => 'Proposal',
        'Negotiation' => 'Negotiation',
        'Needs Analysis' => 'Needs Analysis',
        'Value Proposition' => 'Value Proposition',
        'Id. Decision Makers' => 'Id. Decision Makers',
        'Perception Analysis' => 'Perception Analysis',
        'Proposal/Price Quote' => 'Proposal/Price Quote',
        'Negotiation/Review' => 'Negotiation/Review',
        'Closed Won' => 'Closed Won',
        'Closed Lost' => 'Closed Lost',
      ),
      'origen' => 
      array (
        'Cambaceo' => 'Cambaceo',
        'Facebook' => 'Redes',
        'Adwords' => 'Adwords',
        'Auto' => 'Auto',
        'Recomendado' => 'Recomendado',
        'Arquitecto' => 'Arquitecto',
        'Volanteo' => 'Volanteo',
        'Oficina' => 'Oficina',
      ),
      'probabilidad' => 
      array (
        10 => '10%',
        20 => '20%',
        30 => '30%',
        40 => '40%',
        50 => '50%',
        60 => '60%',
        70 => '70%',
        80 => '80%',
        90 => '90%',
        100 => '100%',
        'D1' => '0%',
        'D2' => '10%',
        'D3' => '20%',
        'D4' => '30%',
        'M1' => '40%',
        'M2' => '50%',
        'M3' => '60%',
        'M4' => '70%',
        'C1' => '80%',
        'C2' => '90%',
        'C3' => '100%',
      ),
      'tarifa' => 
      array (
        'Domestico' => 'Domestico',
        'Industrial' => 'Industrial',
        'Comercial' => 'Comercial',
      ),
      'tipoPago' => 
      array (
        'Contado' => 'Contado',
        'Financiado' => 'Financiado',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Create Opportunity',
      'Items' => 'Items',
      'Select Product' => 'Select Product',
      'Add Item' => 'Add Item',
    ),
    'presetFilters' => 
    array (
      'open' => 'Open',
      'won' => 'Won',
      'lost' => 'Lost',
    ),
    'tooltips' => 
    array (
      'kw' => 'KW',
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'description' => 'Description',
      'entryCount' => 'Entry Count',
      'optedOutCount' => 'Opted Out Count',
      'campaigns' => 'Campaigns',
      'endDate' => 'End Date',
      'targetLists' => 'Target Lists',
      'includingActionList' => 'Including',
      'excludingActionList' => 'Excluding',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out',
      'syncWithReports' => 'Reports',
      'syncWithReportsEnabled' => 'Enabled',
      'syncWithReportsUnlink' => 'Unlink',
    ),
    'links' => 
    array (
      'accounts' => 'Accounts',
      'contacts' => 'Contacts',
      'leads' => 'Leads',
      'campaigns' => 'Campaigns',
      'massEmails' => 'Mass Emails',
      'syncWithReports' => 'Sync with Reports',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Television',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
      ),
      'targetStatus' => 
      array (
        'Opted Out' => 'Opted Out',
        'Listed' => 'Listed',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Create Target List',
      'Opted Out' => 'Opted Out',
      'Cancel Opt-Out' => 'Cancel Opt-Out',
      'Opt-Out' => 'Opt-Out',
      'Sync with Reports' => 'Sync with Reports',
    ),
    'tooltips' => 
    array (
      'syncWithReportsUnlink' => 'Entries which are not contained in report results will be unlinked from Target List.',
      'syncWithReports' => 'Target List will be synced with results of selected reports.',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Parent',
      'status' => 'Status',
      'dateStart' => 'Date Start',
      'dateEnd' => 'Date Due',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'priority' => 'Priority',
      'description' => 'Description',
      'isOverdue' => 'Is Overdue',
      'account' => 'Account',
      'dateCompleted' => 'Date Completed',
      'attachments' => 'Attachments',
      'reminders' => 'Reminders',
      'contact' => 'Contact',
    ),
    'links' => 
    array (
      'attachments' => 'Attachments',
      'account' => 'Account',
      'contact' => 'Contact',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Not Started',
        'Started' => 'Started',
        'Completed' => 'Completed',
        'Canceled' => 'Canceled',
        'Deferred' => 'Deferred',
      ),
      'priority' => 
      array (
        'Low' => 'Low',
        'Normal' => 'Normal',
        'High' => 'High',
        'Urgent' => 'Urgent',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Create Task',
      'Complete' => 'Complete',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'completed' => 'Completed',
      'deferred' => 'Deferred',
      'todays' => 'Today\'s',
      'overdue' => 'Overdue',
    ),
  ),
  'Project' => 
  array (
    'labels' => 
    array (
      'Create Project' => 'Create Project',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'account' => 'Account',
    ),
    'links' => 
    array (
      'projectTasks' => 'Project Tasks',
    ),
  ),
  'ProjectTask' => 
  array (
    'labels' => 
    array (
      'Create ProjectTask' => 'Create Project Task',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'project' => 'Project',
      'dateStart' => 'Date Start',
      'dateEnd' => 'Date End',
      'estimatedEffort' => 'Estimated Effort (hrs)',
      'actualDuration' => 'Actual Duration (hrs)',
    ),
  ),
  'Invoice' => 
  array (
    'labels' => 
    array (
      'Create Invoice' => 'Create Invoice',
      'Taxes' => 'Taxes',
      'Shipping Providers' => 'Shipping Providers',
      'Add Item' => 'Add Item',
      'Templates' => 'Templates',
      'Items' => 'Items',
      'Email PDF' => 'Email PDF',
      'Invoice Items' => 'Invoice Items',
    ),
    'fields' => 
    array (
      'status' => 'Status',
      'number' => 'Number',
      'numberA' => 'Number (auto-incremented)',
      'account' => 'Account',
      'opportunity' => 'Opportunity',
      'quote' => 'Quote',
      'salesOrder' => 'Sales Order',
      'billingAddress' => 'Billing Address',
      'shippingAddress' => 'Shipping Address',
      'billingContact' => 'Billing Contact',
      'shippingContact' => 'Shipping Contact',
      'tax' => 'Tax',
      'taxRate' => 'Tax Rate',
      'shippingCost' => 'Shipping Cost',
      'shippingProvider' => 'Shipping Provider',
      'taxAmount' => 'Tax Amount',
      'discountAmount' => 'Discount Amount',
      'amount' => 'Amount',
      'preDiscountedAmount' => 'Pre-Discount Amount',
      'grandTotalAmount' => 'Grand Total Amount',
      'itemList' => 'Item List',
      'dateInvoiced' => 'Date Invoiced',
      'weight' => 'Weight',
      'amountConverted' => 'Amount (converted)',
      'taxAmountConverted' => 'Tax Amount (converted)',
      'shippingCostConverted' => 'Shipping Cost (converted)',
      'preDiscountedAmountConverted' => 'Pre-Discount Amount (converted)',
      'discountAmountConverted' => 'Discount Amount (converted)',
      'grandTotalAmountConverted' => 'Grand Total Amount (converted)',
      'shippingCostCurrency' => 'Shipping Cost Currency',
      'taxAmountCurrency' => 'Tax Amount Currency',
      'discountAmountCurrency' => 'Discount Amount Currency',
      'amountCurrency' => 'Amount Currency',
      'preDiscountedAmountCurrency' => 'Pre-Discount Amoun Currency',
      'grandTotalAmountCurrency' => 'Grand Total Amount Currency',
      'currency' => 'Currency',
    ),
    'links' => 
    array (
      'items' => 'Items',
      'billingContact' => 'Billing Contact',
      'shippingContact' => 'Shipping Contact',
      'shippingProvider' => 'Shipping Provider',
      'opportunity' => 'Opportunity',
      'account' => 'Account',
      'tax' => 'Tax',
      'quote' => 'Quote',
      'salesOrder' => 'Sales Order',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Draft',
        'In Review' => 'In Review',
        'Confirmed' => 'Confirmed',
        'Paid' => 'Paid',
        'Rejected' => 'Rejected',
        'Canceled' => 'Canceled',
      ),
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'paid' => 'Paid',
    ),
  ),
  'InvoiceItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'qty' => 'Qty',
      'quantity' => 'Quantity',
      'listPrice' => 'List Price',
      'unitPrice' => 'Unit Price',
      'amount' => 'Amount',
      'taxRate' => 'Tax Rate',
      'product' => 'Product',
      'order' => 'Line Number',
      'invoice' => 'Invoice',
      'weight' => 'Weight',
      'unitWeight' => 'Unit Weight',
      'description' => 'Description',
      'discount' => 'Discount (%)',
      'amountConverted' => 'Amount (Converted)',
      'unitPriceConverted' => 'Unit Price (Converted)',
      'listPriceConverted' => 'List Price (Converted)',
      'account' => 'Account',
      'listPriceCurrency' => 'List Price Currency',
      'unitPriceCurrency' => 'Unit Price Currency',
      'amountCurrency' => 'Amount Currency',
      'invoiceStatus' => 'Invoice Status',
    ),
    'links' => 
    array (
      'invoice' => 'Invoice',
      'product' => 'Product',
      'account' => 'Account',
    ),
    'labels' => 
    array (
      'Invoices' => 'Invoices',
    ),
  ),
  'OpportunityItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'qty' => 'Qty',
      'quantity' => 'Quantity',
      'unitPrice' => 'Unit Price',
      'amount' => 'Amount',
      'product' => 'Product',
      'order' => 'Line Number',
      'opportunity' => 'Opportunity',
      'description' => 'Description',
      'amountConverted' => 'Amount (Converted)',
      'unitPriceConverted' => 'Unit Price (Converted)',
      'opportunityStage' => 'Stage',
    ),
    'links' => 
    array (
      'opportunity' => 'Opportunity',
      'product' => 'Product',
    ),
    'labels' => 
    array (
      'Opportunities' => 'Opportunities',
    ),
  ),
  'Product' => 
  array (
    'labels' => 
    array (
      'Create Product' => 'Create Product',
      'Price' => 'Price',
      'Brands' => 'Brands',
      'Categories' => 'Categories',
    ),
    'fields' => 
    array (
      'status' => 'Status',
      'brand' => 'Brand',
      'partNumber' => 'Part Number',
      'category' => 'Category',
      'pricingType' => 'Pricing Type',
      'pricingFactor' => 'Pricing Factor',
      'costPrice' => 'Cost Price',
      'listPrice' => 'List Price',
      'unitPrice' => 'Unit Price',
      'costPriceCurrency' => 'Cost Price Currency',
      'listPriceCurrency' => 'List Price Currency',
      'unitPriceCurrency' => 'Unit Price Currency',
      'costPriceConverted' => 'Cost Price (Converted)',
      'listPriceConverted' => 'List Price (Converted)',
      'unitPriceConverted' => 'Unit Price (Converted)',
      'url' => 'URL',
      'isTaxFree' => 'Tax-free',
      'weight' => 'Weight',
      'aCCs' => 'ACCs',
    ),
    'links' => 
    array (
      'brand' => 'Brand',
      'category' => 'Category',
      'aCCs' => 'ACCs',
    ),
    'options' => 
    array (
      'pricingType' => 
      array (
        'Same as List' => 'Same as List',
        'Fixed' => 'Fixed',
        'Discount from List' => 'Discount from List',
        'Markup over Cost' => 'Markup over Cost',
        'Profit Margin' => 'Profit Margin',
      ),
    ),
    'presetFilters' => 
    array (
      'available' => 'Available',
    ),
  ),
  'ProductBrand' => 
  array (
    'labels' => 
    array (
      'Create ProductBrand' => 'Create Brand',
    ),
    'fields' => 
    array (
      'website' => 'Website',
    ),
    'links' => 
    array (
      'products' => 'Products',
    ),
  ),
  'ProductCategory' => 
  array (
    'labels' => 
    array (
      'Create ProductCategory' => 'Create Category',
      'Manage Categories' => 'Manage Categories',
      'Products' => 'Products',
    ),
    'fields' => 
    array (
      'order' => 'Order',
      'childList' => 'Child List',
    ),
    'links' => 
    array (
      'products' => 'Products',
    ),
  ),
  'Quote' => 
  array (
    'labels' => 
    array (
      'Create Quote' => 'Create Quote',
      'Taxes' => 'Taxes',
      'Shipping Providers' => 'Shipping Providers',
      'Add Item' => 'Add Item',
      'Templates' => 'Templates',
      'Items' => 'Items',
      'Email PDF' => 'Email PDF',
      'Quote Items' => 'Quote Items',
    ),
    'fields' => 
    array (
      'status' => 'Status',
      'number' => 'Quote Number',
      'numberA' => 'Quote Number (auto-incremented)',
      'invoiceNumber' => 'Invoice Number',
      'account' => 'Account',
      'opportunity' => 'Opportunity',
      'billingAddress' => 'Billing Address',
      'shippingAddress' => 'Shipping Address',
      'billingContact' => 'Billing Contact',
      'shippingContact' => 'Shipping Contact',
      'tax' => 'Tax',
      'taxRate' => 'Tax Rate',
      'shippingCost' => 'Shipping Cost',
      'shippingProvider' => 'Shipping Provider',
      'taxAmount' => 'Tax Amount',
      'discountAmount' => 'Discount Amount',
      'amount' => 'Amount',
      'preDiscountedAmount' => 'Pre-Discount Amount',
      'grandTotalAmount' => 'Grand Total Amount',
      'itemList' => 'Item List',
      'dateQuoted' => 'Date Quoted',
      'dateOrdered' => 'Date Ordered',
      'dateInvoiced' => 'Date Invoiced',
      'weight' => 'Weight',
      'amountConverted' => 'Amount (converted)',
      'taxAmountConverted' => 'Tax Amount (converted)',
      'shippingCostConverted' => 'Shipping Cost (converted)',
      'preDiscountedAmountConverted' => 'Pre-Discount Amount (converted)',
      'discountAmountConverted' => 'Discount Amount (converted)',
      'grandTotalAmountConverted' => 'Grand Total Amount (converted)',
      'shippingCostCurrency' => 'Shipping Cost Currency',
      'taxAmountCurrency' => 'Tax Amount Currency',
      'discountAmountCurrency' => 'Discount Amount Currency',
      'amountCurrency' => 'Amount Currency',
      'preDiscountedAmountCurrency' => 'Pre-Discount Amoun Currency',
      'grandTotalAmountCurrency' => 'Grand Total Amount Currency',
      'currency' => 'Currency',
    ),
    'links' => 
    array (
      'items' => 'Items',
      'billingContact' => 'Billing Contact',
      'shippingContact' => 'Shipping Contact',
      'shippingProvider' => 'Shipping Provider',
      'opportunity' => 'Opportunity',
      'account' => 'Account',
      'tax' => 'Tax',
      'salesOrders' => 'Sales Orders',
      'invoices' => 'Invoices',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Draft',
        'In Review' => 'In Review',
        'Presented' => 'Presented',
        'Approved' => 'Approved',
        'Rejected' => 'Rejected',
        'Canceled' => 'Canceled',
      ),
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'approved' => 'Approved',
    ),
  ),
  'QuoteItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'qty' => 'Qty',
      'quantity' => 'Quantity',
      'listPrice' => 'List Price',
      'unitPrice' => 'Unit Price',
      'amount' => 'Amount',
      'taxRate' => 'Tax Rate',
      'product' => 'Product',
      'order' => 'Line Number',
      'quote' => 'Quote',
      'weight' => 'Weight',
      'unitWeight' => 'Unit Weight',
      'description' => 'Description',
      'discount' => 'Discount (%)',
      'amountConverted' => 'Amount (Converted)',
      'unitPriceConverted' => 'Unit Price (Converted)',
      'listPriceConverted' => 'List Price (Converted)',
      'account' => 'Account',
      'listPriceCurrency' => 'List Price Currency',
      'unitPriceCurrency' => 'Unit Price Currency',
      'amountCurrency' => 'Amount Currency',
      'quoteStatus' => 'Quote Status',
    ),
    'links' => 
    array (
      'quote' => 'Quote',
      'product' => 'Product',
      'account' => 'Account',
    ),
    'labels' => 
    array (
      'Quotes' => 'Quotes',
    ),
  ),
  'SalesOrder' => 
  array (
    'labels' => 
    array (
      'Create SalesOrder' => 'Create Sales Order',
      'Taxes' => 'Taxes',
      'Shipping Providers' => 'Shipping Providers',
      'Add Item' => 'Add Item',
      'Templates' => 'Templates',
      'Items' => 'Items',
      'Email PDF' => 'Email PDF',
      'Sales Order Items' => 'Sales Order Items',
    ),
    'fields' => 
    array (
      'status' => 'Status',
      'number' => 'Number',
      'numberA' => 'Number (auto-incremented)',
      'account' => 'Account',
      'opportunity' => 'Opportunity',
      'quote' => 'Quote',
      'billingAddress' => 'Billing Address',
      'shippingAddress' => 'Shipping Address',
      'billingContact' => 'Billing Contact',
      'shippingContact' => 'Shipping Contact',
      'tax' => 'Tax',
      'taxRate' => 'Tax Rate',
      'shippingCost' => 'Shipping Cost',
      'shippingProvider' => 'Shipping Provider',
      'taxAmount' => 'Tax Amount',
      'discountAmount' => 'Discount Amount',
      'amount' => 'Amount',
      'preDiscountedAmount' => 'Pre-Discount Amount',
      'grandTotalAmount' => 'Grand Total Amount',
      'itemList' => 'Item List',
      'dateOrdered' => 'Date Ordered',
      'dateInvoiced' => 'Date Invoiced',
      'weight' => 'Weight',
      'amountConverted' => 'Amount (converted)',
      'taxAmountConverted' => 'Tax Amount (converted)',
      'shippingCostConverted' => 'Shipping Cost (converted)',
      'preDiscountedAmountConverted' => 'Pre-Discount Amount (converted)',
      'discountAmountConverted' => 'Discount Amount (converted)',
      'grandTotalAmountConverted' => 'Grand Total Amount (converted)',
      'shippingCostCurrency' => 'Shipping Cost Currency',
      'taxAmountCurrency' => 'Tax Amount Currency',
      'discountAmountCurrency' => 'Discount Amount Currency',
      'amountCurrency' => 'Amount Currency',
      'preDiscountedAmountCurrency' => 'Pre-Discount Amoun Currency',
      'grandTotalAmountCurrency' => 'Grand Total Amount Currency',
      'currency' => 'Currency',
    ),
    'links' => 
    array (
      'items' => 'Items',
      'billingContact' => 'Billing Contact',
      'shippingContact' => 'Shipping Contact',
      'shippingProvider' => 'Shipping Provider',
      'opportunity' => 'Opportunity',
      'account' => 'Account',
      'tax' => 'Tax',
      'quote' => 'Quote',
      'invoices' => 'Invoices',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Draft',
        'Ready' => 'Ready',
        'Active' => 'Active',
        'Approved' => 'Approved',
        'Completed' => 'Completed',
        'Rejected' => 'Rejected',
        'Canceled' => 'Canceled',
      ),
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'completed' => 'Completed',
    ),
  ),
  'SalesOrderItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'qty' => 'Qty',
      'quantity' => 'Quantity',
      'listPrice' => 'List Price',
      'unitPrice' => 'Unit Price',
      'amount' => 'Amount',
      'taxRate' => 'Tax Rate',
      'product' => 'Product',
      'order' => 'Line Number',
      'salesOrder' => 'Sales Order',
      'weight' => 'Weight',
      'unitWeight' => 'Unit Weight',
      'description' => 'Description',
      'discount' => 'Discount (%)',
      'amountConverted' => 'Amount (Converted)',
      'unitPriceConverted' => 'Unit Price (Converted)',
      'listPriceConverted' => 'List Price (Converted)',
      'account' => 'Account',
      'listPriceCurrency' => 'List Price Currency',
      'unitPriceCurrency' => 'Unit Price Currency',
      'amountCurrency' => 'Amount Currency',
      'salesOrderStatus' => 'Sales Order Status',
    ),
    'links' => 
    array (
      'salesOrder' => 'Sales Order',
      'product' => 'Product',
      'account' => 'Account',
    ),
    'labels' => 
    array (
      'Sales Orders' => 'Sales Orders',
    ),
  ),
  'ShippingProvider' => 
  array (
    'labels' => 
    array (
      'Create ShippingProvider' => 'Create Shipping Provider',
    ),
    'fields' => 
    array (
      'website' => 'Website',
    ),
  ),
  'Tax' => 
  array (
    'labels' => 
    array (
      'Create Tax' => 'Create Tax',
    ),
    'fields' => 
    array (
      'rate' => 'Rate',
    ),
  ),
  'BpmnFlowNode' => 
  array (
    'labels' => 
    array (
    ),
    'fields' => 
    array (
      'status' => 'Status',
      'processedAt' => 'Processed At',
      'elementType' => 'Element Type',
      'element' => 'Element',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Created' => 'Created',
        'Pending' => 'Pending',
        'In Process' => 'In Process',
        'Processed' => 'Processed',
        'Rejected' => 'Rejected',
        'Failed' => 'Failed',
      ),
    ),
  ),
  'BpmnFlowchart' => 
  array (
    'labels' => 
    array (
      'Create BpmnFlowchart' => 'Create Flowchart',
      'Hand tool' => 'Hand tool',
      'Create Event tool' => 'Create Event tool',
      'Create Gateway tool' => 'Create Event tool',
      'Create Activity tool' => 'Create Activity tool',
      'Connect tool' => 'Connect tool',
      'Erase tool' => 'Erase tool',
      'Full Screen' => 'Full Screen',
      'Processes' => 'Processes',
      'data' => 'Data',
    ),
    'fields' => 
    array (
      'isActive' => 'Is Active',
      'targetType' => 'Target Entity Type',
      'hasNoneStartEvent' => 'Has Start Event of None type',
    ),
    'links' => 
    array (
      'processes' => 'Processes',
    ),
    'elements' => 
    array (
      'eventStartConditional' => 'Conditional Start Event',
      'eventStartTimer' => 'Timer Start Event',
      'eventStart' => 'Start Event',
      'eventIntermediateTimerCatch' => 'Timer Intermediate Event (Catching)',
      'eventIntermediateConditionalCatch' => 'Conditional Intermediate Event (Catching)',
      'eventEnd' => 'End Event',
      'eventEndTerminate' => 'Terminate End Event',
      'gatewayExclusive' => 'Exclusive Gateway',
      'gatewayInclusive' => 'Inclusive Gateway',
      'gatewayParallel' => 'Parallel Gateway',
      'gatewayEventBased' => 'Event Based Gateway',
      'taskSendMessage' => 'Send Message Task',
      'taskScript' => 'Script Task',
      'taskBusinessRule' => 'Business Rule Task',
      'taskUser' => 'User Task',
      'task' => 'Task',
      'flow' => 'Sequence Flow',
    ),
    'presetFilters' => 
    array (
      'isManuallyStartable' => 'Manually Startable',
      'activeHasNoneStartEvent' => 'Active w/ None Start Event',
      'active' => 'Active',
    ),
  ),
  'BpmnFlowchartElement' => 
  array (
    'fields' => 
    array (
      'text' => 'Text',
      'triggerType' => 'Trigger Type',
      'timer' => 'Timer Parameters',
      'defaultFlowId' => 'Default Flow',
      'from' => 'From',
      'to' => 'To',
      'replyTo' => 'Reply-To',
      'fromEmailAddress' => 'From Email Address',
      'toEmailAddress' => 'To Email Address',
      'replyToEmailAddress' => 'Reply-To Email Address',
      'toSpecifiedTeams' => 'To Teams',
      'toSpecifiedUsers' => 'To Users',
      'toSpecifiedContacts' => 'To Contacts',
      'emailTemplate' => 'Email Template',
      'doNotStore' => 'Do not store sent email',
      'actions' => 'Actions',
      'formula' => 'Formula (script)',
      'actionType' => 'Action Type',
      'targetUser' => 'Target User',
      'assignmentType' => 'Assignment',
      'targetTeam' => 'Target Team',
      'targetUserPosition' => 'Target User Position',
      'startDirection' => 'Start Direction',
      'targetReport' => 'Target Report',
      'scheduling' => 'Scheduling',
      'messageType' => 'Message Type',
      'canBeFailed' => 'Can be Failed',
    ),
    'labels' => 
    array (
      'Conditions' => 'Conditions',
      'Actions' => 'Actions',
      'Field' => 'Field',
      'Flows Conditions' => 'Flows Conditions',
    ),
    'tooltips' => 
    array (
      'targetReport' => 'Records from the list report will be passed to the new process.',
      'scheduling' => 'Crontab notation. Defines frequency. UTC timezone.

*/5 * * * * - every 5 minutes

0 */2 * * * - every 2 hours

30 1 * * * - at 01:30 once a day

0 0 1 * * - on the first day of the month',
    ),
    'options' => 
    array (
      'emailAddress' => 
      array (
        'system' => 'System',
        'currentUser' => 'Current User',
        'specifiedEmailAddress' => 'Specified Email Address',
        'assignedUser' => 'Assigned User',
        'followers' => 'Followers',
        'specifiedContacts' => 'Specified Contacts',
        'specifiedUsers' => 'Specified Users',
        'specifiedTeams' => 'Specified Teams',
        'followersExcludingAssignedUser' => 'Followers excluding Assigned User',
        'processAssignedUser' => 'User assigned to Process',
        'targetEntity' => 'Target Record',
        '' => 'None',
      ),
      'triggerType' => 
      array (
        'afterRecordCreated' => 'After record created',
        'afterRecordSaved' => 'After record saved',
        'sequential' => 'Sequential',
      ),
      'timerShiftOperator' => 
      array (
        'plus' => 'plus',
        'minus' => 'minus',
      ),
      'timerShiftUnits' => 
      array (
        'minutes' => 'minutes',
        'hours' => 'hours',
        'days' => 'days',
        'months' => 'months',
      ),
      'timerBase' => 
      array (
        'moment' => 'Moment when event triggered',
        'formula' => 'Calculated by formula',
      ),
      'actionType' => 
      array (
        'Approve' => 'Approve',
        'Review' => 'Review',
      ),
      'assignmentType' => 
      array (
        '' => 'None',
        'processAssignedUser' => 'User assigned to Process',
        'specifiedUser' => 'Specified User',
        'rule:Round-Robin' => 'Round-Robin',
        'rule:Least-Busy' => 'Least-Busy',
      ),
      'startDirection' => 
      array (
        '' => 'Auto',
        'r' => 'Right',
        'd' => 'Down',
        'u' => 'Up',
        'l' => 'Left',
      ),
      'messageType' => 
      array (
        'Email' => 'Email',
      ),
    ),
  ),
  'BpmnProcess' => 
  array (
    'labels' => 
    array (
      'Create BpmnProcess' => 'Start Process',
      'Stop Process' => 'Stop Process',
      'User Tasks' => 'User Tasks',
      'Flowcharts' => 'Flowcharts',
    ),
    'fields' => 
    array (
      'status' => 'Status',
      'targetType' => 'Target Entity Type',
      'target' => 'Target',
      'createdEntitiesData' => 'Created Entities Data',
      'flowchartData' => 'Flowchart Data',
      'flowchart' => 'Flowchart',
      'flowchartVisualization' => 'Flowchart (visualization)',
      'flowchartElementsDataHash' => 'Flowchart Elements',
      'variables' => 'Variables',
      'endedAt' => 'Ended At',
      'startElementId' => 'Start Element',
    ),
    'links' => 
    array (
      'flowchart' => 'Flowchart',
      'target' => 'Target',
      'flowNodes' => 'Flow Log',
      'userTasks' => 'Process User Tasks',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Created' => 'Created',
        'Started' => 'Started',
        'Ended' => 'Ended',
        'Paused' => 'Paused',
        'Stopped' => 'Stopped',
      ),
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'ended' => 'Ended',
    ),
  ),
  'BpmnUserTask' => 
  array (
    'labels' => 
    array (
      'Resolve' => 'Resolve',
    ),
    'fields' => 
    array (
      'actionType' => 'Action Type',
      'resolution' => 'Resolution',
      'target' => 'Target',
      'process' => 'Process',
      'isResolved' => 'Is Resolved',
      'resolutionNote' => 'Resolution Note',
      'isCanceled' => 'Is Canceled',
    ),
    'links' => 
    array (
      'process' => 'Process',
      'target' => 'Target',
      'flowNode' => 'Flow Node',
    ),
    'options' => 
    array (
      'actionType' => 
      array (
        'Approve' => 'Approve',
        'Review' => 'Review',
        'Accomplish' => 'Accomplish',
      ),
      'resolution' => 
      array (
        '' => 'None',
        'Approved' => 'Approved',
        'Rejected' => 'Rejected',
        'Reviewed' => 'Reviewed',
        'Completed' => 'Completed',
        'Canceled' => 'Canceled',
      ),
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'resolved' => 'Resolved',
      'canceled' => 'Canceled',
    ),
  ),
  'Report' => 
  array (
    'labels' => 
    array (
      'Create Report' => 'Create Report',
      'Run' => 'Run',
      'Total' => 'Total',
      '-Empty-' => '-Empty-',
      'Parameters' => 'Parameters',
      'Filters' => 'Filters',
      'Chart' => 'Chart',
      'List Report' => 'List Report',
      'Grid Report' => 'Grid Report',
      'days' => 'days',
      'never' => 'never',
      'Get Csv' => 'Get Csv',
      'EmailSending' => 'Email Sending',
      'View Report' => 'View Report',
      'Report' => 'Report',
      'AND' => 'AND',
      'OR' => 'OR',
      'NOT' => 'NOT IN',
      'IN' => 'IN',
      'Complex expression' => 'Complex expression',
      'Having' => 'Having',
      'Add AND group' => 'Add AND group',
      'Add OR group' => 'Add OR group',
      'Add NOT group' => 'Add NOT group',
      'Add IN group' => 'Add IN group',
      'Add Having group' => 'Add Having group',
      'Add Complex expression' => 'Add Complex expression',
      'Columns' => 'Columns',
      'Send Email' => 'Send Email',
      'Show' => 'Show',
      'Create Joint Grid Report' => 'Create Joint Grid Report',
    ),
    'fields' => 
    array (
      'type' => 'Type',
      'entityType' => 'Entity Type',
      'description' => 'Description',
      'groupBy' => 'Group by',
      'columns' => 'Columns',
      'orderBy' => 'Order by',
      'filters' => 'Filters',
      'runtimeFilters' => 'Runtime Filters',
      'chartType' => 'Chart Type',
      'emailSendingInterval' => 'Interval',
      'emailSendingTime' => 'Time',
      'emailSendingUsers' => 'Users',
      'emailSendingSettingDay' => 'Day',
      'emailSendingSettingMonth' => 'Month',
      'emailSendingSettingWeekdays' => 'Days',
      'emailSendingDoNotSendEmptyReport' => 'Don\'t send if report is empty',
      'chartColorList' => 'Colors',
      'chartColor' => 'Color',
      'orderByList' => 'List Order',
      'column' => 'Column',
      'exportFormat' => 'Format',
      'category' => 'Category',
      'applyAcl' => 'Apply ACL',
      'portals' => 'Portals',
      'joinedReports' => 'Sub-Reports',
      'joinedReportLabel' => 'Sub-Report Label',
    ),
    'tooltips' => 
    array (
      'emailSendingUsers' => 'Users report result will be sent to',
      'chartColorList' => 'Custom colors for specific groups.',
      'applyAcl' => 'Report results will depend on the user\'s access.',
      'portals' => 'Report will be available only in specified portals.',
    ),
    'functions' => 
    array (
      'COUNT' => 'Count',
      'SUM' => 'Sum',
      'AVG' => 'Avg',
      'MIN' => 'Min',
      'MAX' => 'Max',
      'YEAR' => 'Year',
      'QUARTER' => 'Quarter',
      'MONTH' => 'Month',
      'DAY' => 'Day',
      'WEEK' => 'Week',
      'YEAR_FISCAL' => 'Fiscal Year',
      'QUARTER_FISCAL' => 'Fiscal Quarter',
    ),
    'orders' => 
    array (
      'ASC' => 'ASC',
      'DESC' => 'DESC',
      'LIST' => 'LIST',
    ),
    'options' => 
    array (
      'chartType' => 
      array (
        'BarHorizontal' => 'Bar (horizontal)',
        'BarVertical' => 'Bar (vertical)',
        'BarGroupedHorizontal' => 'Bar Grouped (horizontal)',
        'BarGroupedVertical' => 'Bar Grouped (vertical)',
        'Pie' => 'Pie',
        'Line' => 'Line',
      ),
      'emailSendingInterval' => 
      array (
        '' => 'None',
        'Daily' => 'Daily',
        'Weekly' => 'Weekly',
        'Monthly' => 'Monthly',
        'Yearly' => 'Yearly',
      ),
      'emailSendingSettingDay' => 
      array (
        32 => 'Last day of month',
      ),
      'type' => 
      array (
        'Grid' => 'Grid',
        'List' => 'List',
        'JointGrid' => 'Joint Grid',
      ),
      'function' => 
      array (
        '' => 'No Function',
        'custom' => 'Expression',
        'customWithOperator' => 'Expression w/ Operator',
        'DATE_NUMBER' => 'DATE',
        'MONTH_NUMBER' => 'MONTH',
        'YEAR_NUMBER' => 'YEAR',
        'QUARTER_NUMBER' => 'QUARTER',
        'DAYOFWEEK_NUMBER' => 'DAYOFWEEK',
        'HOUR_NUMBER' => 'HOUR',
        'MINUTE_NUMBER' => 'MINUTE',
        'LOWER' => 'LOWER',
        'UPPER' => 'UPPER',
        'TRIM' => 'TRIM',
        'LENGTH' => 'LENGTH',
        'WEEK_NUMBER_0' => 'WEEK (Sunday)',
        'WEEK_NUMBER_1' => 'WEEK (Monday)',
        'COUNT' => 'COUNT',
        'SUM' => 'SUM',
        'AVG' => 'AVG',
        'MAX' => 'MAX',
        'MIN' => 'MIN',
      ),
      'operator' => 
      array (
        'equals' => 'Equals',
        'notEquals' => 'Not Equals',
        'greaterThan' => 'Greater Than',
        'lessThan' => 'Less Than',
        'greaterThanOrEquals' => 'Greater Than or Equals',
        'lessThanOrEquals' => 'Less Than or Equals',
        'in' => 'In',
        'notIn' => 'Not In',
        'isTrue' => 'Is True',
        'isFalse' => 'Is False',
        'isNull' => 'Is Null',
        'isNotNull' => 'Is Not Null',
        'like' => 'Like',
      ),
      'exportFormat' => 
      array (
        'csv' => 'CSV',
        'xlsx' => 'XLSX (Excel)',
      ),
    ),
    'messages' => 
    array (
      'validateMaxCount' => 'Count should not be greater than {maxCount}',
      'gridReportDescription' => 'Group by one or two columns and see summations. Can be displayed as a chart.',
      'listReportDescription' => 'Simple list of records which meet filters criteria.',
    ),
    'presetFilters' => 
    array (
      'list' => 'List',
      'grid' => 'Grid',
      'listTargets' => 'List (Targets)',
      'listAccounts' => 'List (Accounts)',
      'listContacts' => 'List (Contacts)',
      'listLeads' => 'List (Leads)',
      'listUsers' => 'List (Users)',
    ),
    'errorMessages' => 
    array (
      'error' => 'Error',
      'noChart' => 'No chart selected for the report.',
      'selectReport' => 'Select a report in the dashlet options.',
    ),
    'filtersGroupTypes' => 
    array (
      'or' => 'OR',
      'and' => 'AND',
      'not' => 'NOT IN',
      'subQueryIn' => 'IN',
      'having' => 'Having',
    ),
  ),
  'ReportCategory' => 
  array (
    'labels' => 
    array (
      'Create ReportCategory' => 'Create Category',
      'Manage Categories' => 'Manage Categories',
      'Reports' => 'Reports',
    ),
    'fields' => 
    array (
      'order' => 'Order',
    ),
    'links' => 
    array (
      'reports' => 'Reports',
    ),
  ),
  'ReportFilter' => 
  array (
    'labels' => 
    array (
      'Create ReportFilter' => 'Create Filter',
      'Rebuild Filters' => 'Rebuild Filters',
    ),
    'fields' => 
    array (
      'order' => 'Order',
      'report' => 'Report',
      'entityType' => 'Entity Type',
      'isActive' => 'Is Enabled',
    ),
    'links' => 
    array (
      'report' => 'Report',
    ),
    'tooltips' => 
    array (
      'teams' => 'Teams the filter will be available for. If no teams specified then no restriction by team will be applied.',
      'report' => 'List Report that will be used for the filter.',
    ),
  ),
  'ReportPanel' => 
  array (
    'labels' => 
    array (
      'Create ReportPanel' => 'Create Panel',
      'Rebuild Panels' => 'Rebuild Panels',
    ),
    'fields' => 
    array (
      'report' => 'Report',
      'entityType' => 'Entity Type',
      'isActive' => 'Is Enabled',
      'type' => 'Type',
      'reportType' => 'Report Type',
      'displayTotal' => 'Display Total',
      'displayOnlyTotal' => 'Display Only Total',
      'column' => 'Column',
      'reportEntityType' => 'Report Entity Type',
      'columnList' => 'Column List',
      'dynamicLogicVisible' => 'Conditions making panel visible',
      'order' => 'Order',
      'useSiMultiplier' => 'SI Multiplier',
    ),
    'links' => 
    array (
      'report' => 'Report',
    ),
    'tooltips' => 
    array (
      'teams' => 'Teams the panel will be displayed for. If no teams specified then no restriction by team will be applied.',
      'report' => 'Report that will be used for the panel.',
      'order' => '[0..1] - before Stream panel;
[3..4] - before relationship panels;
[6..] - after relationship panels.',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'side' => 'Side',
        'bottom' => 'Bottom',
      ),
    ),
  ),
  'Workflow' => 
  array (
    'fields' => 
    array (
      'Name' => 'Name',
      'entityType' => 'Target Entity',
      'type' => 'Trigger Type',
      'isActive' => 'Active',
      'description' => 'Description',
      'usersToMakeToFollow' => 'Users to make to follow the record',
      'whatToFollow' => 'What to follow',
      'portalOnly' => 'Portal Only',
      'portal' => 'Portal',
      'targetReport' => 'Target Report',
      'scheduling' => 'Scheduling',
      'methodName' => 'Service Method',
      'assignmentRule' => 'Assignment Rule',
      'targetTeam' => 'Target Team',
      'targetUserPosition' => 'Target User Position',
      'listReport' => 'List Report',
      'linkList' => 'Link with Target Entity through relationships',
      'linkListShort' => 'Links',
      'target' => 'Target',
      'whoFollow' => 'Who make to follow',
    ),
    'links' => 
    array (
      'portal' => 'Portal',
      'targetReport' => 'Target Report',
      'workflowLogRecords' => 'Log',
    ),
    'tooltips' => 
    array (
      'portalOnly' => 'If checked workflow will be triggered only in portal.',
      'portal' => 'Specific portal where workflow will be triggered. Leave empty if you need it to work in any portal.',
      'scheduling' => 'Crontab notation. Defines frequency of workflow rule runs. UTC timezone.

*/5 * * * * - every 5 minutes

0 */2 * * * - every 2 hours

30 1 * * * - at 01:30 once a day

0 0 1 * * - on the first day of the month',
    ),
    'labels' => 
    array (
      'Create Workflow' => 'Create Rule',
      'General' => 'General',
      'Conditions' => 'Conditions',
      'Actions' => 'Actions',
      'All' => 'All',
      'Any' => 'Any',
      'Formula' => 'Formula',
      'Email Address' => 'Email Address',
      'Email Template' => 'Email Template',
      'From' => 'From',
      'To' => 'To',
      'immediately' => 'Immediately',
      'Reply-To' => 'Reply-To',
      'later' => 'Later',
      'today' => 'now',
      'plus' => 'plus',
      'minus' => 'minus',
      'days' => 'days',
      'hours' => 'hours',
      'months' => 'months',
      'minutes' => 'minutes',
      'Link' => 'Link',
      'Entity' => 'Entity',
      'Add Field' => 'Add Field',
      'equals' => 'equals',
      'wasEqual' => 'was equal',
      'notEquals' => 'not equals',
      'wasNotEqual' => 'was not equal',
      'changed' => 'changed',
      'notChanged' => 'not changed',
      'notEmpty' => 'not empty',
      'isEmpty' => 'empty',
      'value' => 'value',
      'field' => 'field',
      'true' => 'true',
      'false' => 'false',
      'greaterThan' => 'greater than',
      'lessThan' => 'less than',
      'greaterThanOrEquals' => 'greater than or equals',
      'lessThanOrEquals' => 'less than or equals',
      'between' => 'between',
      'on' => 'on',
      'before' => 'before',
      'after' => 'after',
      'beforeToday' => 'before today',
      'afterToday' => 'after today',
      'recipient' => 'Recipient',
      'has' => 'has',
      'notHas' => 'not has',
      'messageTemplate' => 'Message Template',
      'users' => 'Users',
      'Target Entity' => 'Target Entity',
      'Current' => 'Current',
      'Workflow' => 'Workflow',
      'Workflows Log' => 'Workflows Log',
      'methodName' => 'Service Method',
      'additionalParameters' => 'Additional Parameters (JSON format)',
      'doNotStore' => 'Do not store sent email',
      'Related' => 'Related',
      'Entity Type' => 'Entity Type',
      'Workflow Rule' => 'Workflow Rule',
      'Add Condition' => 'Add Condition',
      'Add Action' => 'Add Action',
      'Created' => 'Created',
      'Field' => 'Field',
      'Process' => 'Process',
    ),
    'emailAddressOptions' => 
    array (
      '' => 'None',
      'currentUser' => 'Current user',
      'specifiedEmailAddress' => 'Specified email address',
      'assignedUser' => 'Assigned user',
      'targetEntity' => 'Target record',
      'specifiedUsers' => 'Specified users',
      'specifiedContacts' => 'Specified contacts',
      'teamUsers' => 'Users of teams related to target record',
      'followers' => 'Followers of target record',
      'followersExcludingAssignedUser' => 'Followers excluding assigned user',
      'specifiedTeams' => 'Users of specified teams',
      'system' => 'System',
      'fromOrReplyTo' => 'From/Reply-To address',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'afterRecordSaved' => 'After record saved (created or updated)',
        'afterRecordCreated' => 'After record created',
        'afterRecordUpdated' => 'After record updated',
        'scheduled' => 'Scheduled',
        'sequential' => 'Sequential',
      ),
      'subjectType' => 
      array (
        'value' => 'value',
        'field' => 'field',
        'today' => 'today/now',
      ),
      'assignmentRule' => 
      array (
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Least-Busy',
      ),
    ),
    'actionTypes' => 
    array (
      'sendEmail' => 'Send Email',
      'createEntity' => 'Create Record',
      'createRelatedEntity' => 'Create Related Record',
      'updateEntity' => 'Update Target Record',
      'updateRelatedEntity' => 'Update Related Record',
      'relateWithEntity' => 'Link with Another Record',
      'unrelateFromEntity' => 'Unlink from Another Record',
      'makeFollowed' => 'Make Followed',
      'createNotification' => 'Create Notification',
      'triggerWorkflow' => 'Trigger Another Workflow Rule',
      'runService' => 'Run Service Action',
      'applyAssignmentRule' => 'Apply Assignment Rule',
      'updateCreatedEntity' => 'Update Created Record',
      'updateProcessEntity' => 'Update Process Record',
    ),
    'texts' => 
    array (
      'allMustBeMet' => 'All must be met',
      'atLeastOneMustBeMet' => 'At least one must be met',
      'formulaInfo' => 'Conditions of any complexity in espo-formula language',
    ),
    'messages' => 
    array (
      'loopNotice' => 'Be careful about a possible looping through two or more workflow rules continuously.',
      'messageTemplateHelpText' => 'Available variables:
{entity} - target record,
{user} - current user.',
    ),
    'serviceActions' => 
    array (
      'sendEventInvitations' => 'Send Invitations',
      'addQuoteItemList' => 'Add Quote Items',
    ),
    'serviceActionsHelp' => 
    array (
      'addQuoteItemList' => 'Example: &lt;br&gt;&lt;code&gt;{&lt;br&gt;&nbsp;&nbsp;"itemList": [&lt;br&gt;&nbsp;&nbsp;&nbsp;&nbsp;{"quantity": 1, "procuctId": "productId", "name": "Product Name", "listPrice": 100, "unitPrice": 100}&lt;br&gt;&nbsp;&nbsp;]&lt;br&gt;}',
    ),
  ),
  'WorkflowLogRecord' => 
  array (
    'labels' => 
    array (
    ),
    'fields' => 
    array (
      'target' => 'Target',
      'workflow' => 'Workflow',
    ),
  ),
  'Google' => 
  array (
    'products' => 
    array (
      'googleCalendar' => 'Google Calendar',
      'googleTask' => 'Google Task',
      'googleContacts' => 'Contacts',
      'gmail' => 'Gmail',
    ),
  ),
  'GoogleCalendar' => 
  array (
    'messages' => 
    array (
      'fieldLabelIsRequired' => 'Only one entity could haven\'t Identification Label',
      'emptyNotDefaultEnitityLabel' => 'Identification Label of not by default Entity can\'t be empty',
      'defaultEntityIsRequiredInList' => 'Default Entity is required in the Sync Entities List',
      'notUniqueIdentificationLabel' => 'Identification Labels have to be unique',
    ),
  ),
  'ACC' => 
  array (
    'fields' => 
    array (
      'contacts' => 'Clientes',
      'opportunities' => 'Potencial',
      'fechaDeInstalacion' => 'Fecha de Instalacion',
      'origen' => 'Origen',
      'panelesPotencia' => 'Paneles Potencia',
      'nmeroDePaneles' => 'Número de Paneles',
      'kw' => 'Kw',
      'inversor' => 'Inversor',
      'nmeroDeInversores' => 'Número de Inversores',
      'estructuras' => 'Estructuras',
      'monto' => 'Monto',
      'montoCurrency' => 'Monto (Moneda)',
      'montoConverted' => 'Monto (Convertido)',
      'descuento' => 'Descuento',
      'aCCs' => 'ACCs',
      'aCCParent' => 'ACCParent',
      'instalacions' => 'Instalacions',
      'generarInstalacion' => 'Generar Instalacion?',
      'direccion' => 'Dirección',
      'direccionStreet' => 'Dirección Calle',
      'direccionCity' => 'Dirección Ciudad',
      'direccionState' => 'Dirección Estado',
      'direccionCountry' => 'Dirección País',
      'direccionPostalCode' => 'Dirección Código Postal',
      'direccionMap' => 'Dirección Mapa',
      'products' => 'Products',
      'tipoDePago' => 'Tipo de Pago',
      'financiamiento' => 'Financiamiento',
      'emails' => 'Emails',
    ),
    'links' => 
    array (
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'contacts' => 'Contacts',
      'opportunities' => 'Opportunities',
      'aCCs' => 'ACCs',
      'aCCParent' => 'ACCParent',
      'instalacions' => 'Instalacions',
      'products' => 'Products',
      'emails' => 'Emails',
    ),
    'labels' => 
    array (
      'Create ACC' => 'Create ACC',
    ),
    'options' => 
    array (
      'origen' => 
      array (
        'Cambaceo' => 'Cambaceo',
        'Redes' => 'Redes',
        'Auto' => 'Auto',
        'Recomendado' => 'Recomendado',
        'Arquitecto' => 'Arquitecto',
        'Volanteo' => 'Volanteo',
        'Oficina' => 'Oficina',
      ),
      'tipoDePago' => 
      array (
        'Contado' => 'Contado',
        'Financiado' => 'Financiado',
      ),
    ),
  ),
  'Agenda' => 
  array (
    'fields' => 
    array (
    ),
    'links' => 
    array (
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
    ),
    'labels' => 
    array (
      'Create Agenda' => 'Create Agenda',
    ),
  ),
  'Aislado' => 
  array (
    'fields' => 
    array (
      'opportunities' => 'Opportunities',
      'noViable' => 'No viable por...',
      'detallesDeAislamiento' => 'Detalles de aislamiento',
      'contacts' => 'Contacts',
      'contacts1' => 'Contacts1',
    ),
    'links' => 
    array (
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'opportunities' => 'Opportunities',
      'contacts' => 'Contacts',
      'contacts1' => 'Contacts1',
    ),
    'labels' => 
    array (
      'Create Aislado' => 'Create Aislado',
    ),
    'options' => 
    array (
      'noViable' => 
      array (
        'Espacio' => 'Espacio insuficiente',
        'Otra Empresa' => 'Otra Empresa',
        'Facturacion' => 'Facturación mínima',
        'Solo información' => 'Solo información',
        'Sistema Aislado' => 'Sistema Aislado',
      ),
    ),
  ),
  'Instalacion' => 
  array (
    'fields' => 
    array (
      'fechaPago' => 'Fecha de pago',
      'etapa' => 'Etapa',
      'opportunities' => 'Potencial',
      'fechaInstalacion' => 'Fecha de Instalación',
      'contacts' => 'Cliente',
      'opportunities1' => 'Opportunities1',
      'opportunity' => 'Opportunity',
      'guia' => 'Guias Asignadas',
      'diasTranscurridos' => 'Dias Transcurridos desde firma',
      'aCCs' => 'ACCs',
      'direccion' => 'Direccion',
      'direccionStreet' => 'Direccion Calle',
      'direccionCity' => 'Direccion Ciudad',
      'direccionState' => 'Direccion Estado',
      'direccionCountry' => 'Direccion País',
      'direccionPostalCode' => 'Direccion Código Postal',
      'direccionMap' => 'Direccion Mapa',
      'tipoDePago' => 'Tipo de Pago',
      'financiamiento' => 'Financiamiento',
    ),
    'links' => 
    array (
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'opportunities' => 'Opportunities',
      'contacts' => 'Contacts',
      'opportunities1' => 'Opportunities1',
      'opportunity' => 'Opportunity',
      'aCCs' => 'ACCs',
    ),
    'labels' => 
    array (
      'Create Instalacion' => 'Create Instalacion',
    ),
    'options' => 
    array (
      'etapa' => 
      array (
        'Inventario' => 'Inventario',
        'Estrutura' => 'Estrutura',
        'Instalacion' => 'Instalacion',
        'Papeles' => 'Papeles',
        'Tramite' => 'Tramite',
        'CambioMed' => 'Cambio de Medidor',
        'Arranque' => 'Arranque',
        'Monitoreo' => 'Monitoreo',
        'App' => 'App',
        'Contrato' => 'Contrato',
      ),
      'tipoDePago' => 
      array (
        'Contado' => 'Contado',
        'Financiado' => 'Financiado',
      ),
    ),
  ),
  'Inversor' => 
  array (
    'fields' => 
    array (
      'potencia' => 'Potencia',
      'precio' => 'Precio',
      'marca' => 'Marca',
      'vmin' => 'Vmin',
      'vmax' => 'Vmax',
      'pmin' => 'Pmin',
      'pmax' => 'Pmax',
      'iSC' => 'ISC',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Inversor' => 'Create Inversor',
    ),
  ),
  'Panel' => 
  array (
    'fields' => 
    array (
      'marca' => 'Marca',
      'potencia' => 'Potencia',
      'iSC' => 'ISC',
      'vOC' => 'VOC',
      'precio' => 'Precio',
      'vMP' => 'VMP',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Panel' => 'Create Panel',
    ),
  ),
  'Ticket' => 
  array (
    'fields' => 
    array (
      'estatus' => 'Estatus',
      'captura' => 'Captura',
      'diasTranscurridos' => 'Dias Transcurridos',
      'publicado' => 'Publicado',
      'folio' => 'Folio',
    ),
    'links' => 
    array (
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
    ),
    'labels' => 
    array (
      'Create Ticket' => 'Create Ticket',
    ),
    'options' => 
    array (
      'estatus' => 
      array (
        'abierto' => 'abierto',
        'revisado' => 'revisado',
        'en desarrollo' => 'en desarrollo',
        'cerrado' => 'cerrado',
      ),
    ),
  ),
);
?>