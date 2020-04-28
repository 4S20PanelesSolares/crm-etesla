<?php
return (object) [
    'table' => (object) [
        'Email' => (object) [
            'read' => 'own',
            'stream' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
        ],
        'EmailAccountScope' => true,
        'EmailTemplateCategory' => (object) [
            'read' => 'all',
            'stream' => 'all',
            'edit' => 'all',
            'delete' => 'all',
            'create' => 'yes'
        ],
        'ExternalAccount' => true,
        'Import' => true,
        'Activities' => true,
        'Calendar' => true,
        'Contact' => (object) [
            'read' => 'all',
            'stream' => 'all',
            'edit' => 'all',
            'delete' => 'no',
            'create' => 'no'
        ],
        'DocumentFolder' => (object) [
            'read' => 'team',
            'stream' => 'team',
            'edit' => 'team',
            'delete' => 'team',
            'create' => 'yes'
        ],
        'Meeting' => (object) [
            'read' => 'team',
            'stream' => 'team',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
        ],
        'Opportunity' => (object) [
            'read' => 'all',
            'stream' => 'all',
            'edit' => 'all',
            'delete' => 'no',
            'create' => 'no'
        ],
        'Report' => (object) [
            'read' => 'all',
            'stream' => 'all',
            'edit' => 'team',
            'delete' => 'team',
            'create' => 'no'
        ],
        'GoogleCalendar' => true,
        'GoogleContacts' => true,
        'Agenda' => (object) [
            'read' => 'team',
            'stream' => 'team',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
        ],
        'Aislado' => false,
        'Instalacion' => (object) [
            'read' => 'team',
            'stream' => 'team',
            'edit' => 'team',
            'delete' => 'team',
            'create' => 'yes'
        ],
        'Inversor' => (object) [
            'read' => 'all',
            'stream' => 'all',
            'edit' => 'all',
            'delete' => 'all',
            'create' => 'yes'
        ],
        'Panel' => (object) [
            'read' => 'team',
            'stream' => 'team',
            'edit' => 'team',
            'delete' => 'no',
            'create' => 'yes'
        ],
        'Ticket' => (object) [
            'read' => 'team',
            'stream' => 'no',
            'edit' => 'team',
            'delete' => 'team',
            'create' => 'yes'
        ],
        'User' => (object) [
            'read' => 'own',
            'edit' => 'no'
        ],
        'EmailTemplate' => false,
        'Team' => false,
        'Template' => false,
        'Account' => false,
        'Call' => false,
        'Campaign' => false,
        'Case' => false,
        'Document' => false,
        'KnowledgeBaseArticle' => false,
        'KnowledgeBaseCategory' => false,
        'Lead' => false,
        'TargetList' => false,
        'Task' => false,
        'Project' => false,
        'ProjectTask' => false,
        'Invoice' => false,
        'Product' => false,
        'ProductBrand' => false,
        'ProductCategory' => false,
        'Quote' => false,
        'SalesOrder' => false,
        'ShippingProvider' => false,
        'Tax' => false,
        'BpmnFlowchart' => false,
        'BpmnProcess' => false,
        'BpmnUserTask' => false,
        'ReportCategory' => false,
        'ACC' => false,
        'Note' => (object) [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
        ],
        'Portal' => (object) [
            'read' => 'all',
            'edit' => 'no',
            'delete' => 'no',
            'create' => 'no'
        ],
        'Attachment' => (object) [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
        ],
        'EmailAccount' => (object) [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
        ],
        'EmailFilter' => (object) [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
        ],
        'EmailFolder' => (object) [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
        ],
        'Preferences' => (object) [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'no',
            'create' => 'no'
        ],
        'Notification' => (object) [
            'read' => 'own',
            'edit' => 'no',
            'delete' => 'own',
            'create' => 'no'
        ],
        'ActionHistoryRecord' => (object) [
            'read' => 'no',
            'edit' => 'no',
            'delete' => 'no',
            'create' => 'no'
        ],
        'Role' => false,
        'PortalRole' => false,
        'MassEmail' => false,
        'CampaignLogRecord' => false,
        'CampaignTrackingUrl' => false,
        'EmailQueueItem' => false,
        'QuoteItem' => false,
        'SalesOrderItem' => false,
        'InvoiceItem' => false,
        'OpportunityItem' => (object) [
            'read' => 'all',
            'stream' => 'all',
            'edit' => 'all',
            'delete' => 'no',
            'create' => 'no'
        ],
        'Workflow' => false,
        'WorkflowLogRecord' => false,
        'ReportPanel' => false
    ],
    'fieldTable' => (object) [
        'Email' => (object) [
            'inboundEmails' => (object) [
                'read' => 'no',
                'edit' => 'no'
            ],
            'emailAccounts' => (object) [
                'read' => 'no',
                'edit' => 'no'
            ]
        ],
        'EmailTemplate' => (object) [
            
        ],
        'EmailTemplateCategory' => (object) [
            
        ],
        'ExternalAccount' => (object) [
            
        ],
        'Import' => (object) [
            
        ],
        'Team' => (object) [
            
        ],
        'Template' => (object) [
            
        ],
        'User' => (object) [
            'gender' => (object) [
                'read' => 'no',
                'edit' => 'no'
            ],
            'password' => (object) [
                'read' => 'no',
                'edit' => 'no'
            ],
            'passwordConfirm' => (object) [
                'read' => 'no',
                'edit' => 'no'
            ],
            'authMethod' => (object) [
                'read' => 'no',
                'edit' => 'no'
            ],
            'apiKey' => (object) [
                'read' => 'no',
                'edit' => 'no'
            ],
            'secretKey' => (object) [
                'read' => 'no',
                'edit' => 'no'
            ],
            'token' => (object) [
                'read' => 'no',
                'edit' => 'no'
            ]
        ],
        'Account' => (object) [
            
        ],
        'Call' => (object) [
            
        ],
        'Campaign' => (object) [
            
        ],
        'Case' => (object) [
            
        ],
        'Contact' => (object) [
            
        ],
        'Document' => (object) [
            
        ],
        'DocumentFolder' => (object) [
            
        ],
        'KnowledgeBaseArticle' => (object) [
            
        ],
        'KnowledgeBaseCategory' => (object) [
            
        ],
        'Lead' => (object) [
            
        ],
        'Meeting' => (object) [
            
        ],
        'Opportunity' => (object) [
            
        ],
        'TargetList' => (object) [
            
        ],
        'Task' => (object) [
            
        ],
        'Project' => (object) [
            
        ],
        'ProjectTask' => (object) [
            
        ],
        'Invoice' => (object) [
            
        ],
        'Product' => (object) [
            
        ],
        'ProductBrand' => (object) [
            
        ],
        'ProductCategory' => (object) [
            
        ],
        'Quote' => (object) [
            
        ],
        'SalesOrder' => (object) [
            
        ],
        'ShippingProvider' => (object) [
            
        ],
        'Tax' => (object) [
            
        ],
        'BpmnFlowchart' => (object) [
            
        ],
        'BpmnProcess' => (object) [
            
        ],
        'BpmnUserTask' => (object) [
            
        ],
        'Report' => (object) [
            
        ],
        'ReportCategory' => (object) [
            
        ],
        'GoogleCalendar' => (object) [
            
        ],
        'ACC' => (object) [
            
        ],
        'Agenda' => (object) [
            
        ],
        'Aislado' => (object) [
            
        ],
        'Instalacion' => (object) [
            
        ],
        'Inversor' => (object) [
            
        ],
        'Panel' => (object) [
            
        ],
        'Ticket' => (object) [
            
        ],
        'Attachment' => (object) [
            'parent' => (object) [
                'read' => 'no',
                'edit' => 'no'
            ]
        ]
    ],
    'fieldTableQuickAccess' => (object) [
        'Email' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'inboundEmailsIds',
                        1 => 'inboundEmailsNames',
                        2 => 'emailAccountsIds',
                        3 => 'emailAccountsNames'
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'inboundEmailsIds',
                        1 => 'inboundEmailsNames',
                        2 => 'emailAccountsIds',
                        3 => 'emailAccountsNames'
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'inboundEmails',
                        1 => 'emailAccounts'
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'inboundEmails',
                        1 => 'emailAccounts'
                    ]
                ]
            ]
        ],
        'EmailTemplate' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'EmailTemplateCategory' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'ExternalAccount' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Import' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Team' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Template' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'User' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'gender',
                        1 => 'password',
                        2 => 'passwordConfirm',
                        3 => 'authMethod',
                        4 => 'apiKey',
                        5 => 'secretKey',
                        6 => 'token'
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'gender',
                        1 => 'password',
                        2 => 'passwordConfirm',
                        3 => 'authMethod',
                        4 => 'apiKey',
                        5 => 'secretKey',
                        6 => 'token'
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'gender',
                        1 => 'password',
                        2 => 'passwordConfirm',
                        3 => 'authMethod',
                        4 => 'apiKey',
                        5 => 'secretKey',
                        6 => 'token'
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'gender',
                        1 => 'password',
                        2 => 'passwordConfirm',
                        3 => 'authMethod',
                        4 => 'apiKey',
                        5 => 'secretKey',
                        6 => 'token'
                    ]
                ]
            ]
        ],
        'Account' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Call' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Campaign' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Case' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Contact' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Document' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'DocumentFolder' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'KnowledgeBaseArticle' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'KnowledgeBaseCategory' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Lead' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Meeting' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Opportunity' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'TargetList' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Task' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Project' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'ProjectTask' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Invoice' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Product' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'ProductBrand' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'ProductCategory' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Quote' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'SalesOrder' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'ShippingProvider' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Tax' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'BpmnFlowchart' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'BpmnProcess' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'BpmnUserTask' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Report' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'ReportCategory' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'GoogleCalendar' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'ACC' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Agenda' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Aislado' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Instalacion' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Inversor' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Panel' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Ticket' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        
                    ]
                ]
            ]
        ],
        'Attachment' => (object) [
            'attributes' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'parentId',
                        1 => 'parentType',
                        2 => 'parentName'
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'parentId',
                        1 => 'parentType',
                        2 => 'parentName'
                    ]
                ]
            ],
            'fields' => (object) [
                'read' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'parent'
                    ]
                ],
                'edit' => (object) [
                    'yes' => [
                        
                    ],
                    'no' => [
                        0 => 'parent'
                    ]
                ]
            ]
        ]
    ],
    'assignmentPermission' => 'no',
    'userPermission' => 'no',
    'portalPermission' => 'no',
    'groupEmailAccountPermission' => 'no',
    'exportPermission' => 'no',
    'massUpdatePermission' => 'no',
    'dataPrivacyPermission' => 'yes'
];
?>