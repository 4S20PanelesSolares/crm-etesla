<?php
return [
    'afterRecordCreated' => [
        'Case' => [
            '5c50a236618b4dfd7' => [
                'actions' => [
                    0 => (object) [
                        'link' => 'Contact',
                        'fieldList' => [
                            0 => 'name',
                            1 => 'description',
                            2 => 'assignedUser',
                            3 => 'teams'
                        ],
                        'fields' => (object) [
                            'name' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'name'
                            ],
                            'description' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'description'
                            ],
                            'assignedUser' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'assignedUser'
                            ],
                            'teams' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'assignedUser.teams'
                            ]
                        ],
                        'cid' => 0,
                        'id' => 'lmxrh2spjx',
                        'linkList' => [
                            
                        ],
                        'formula' => '',
                        'entityType' => 'Contact',
                        'type' => 'createEntity'
                    ]
                ],
                'portalOnly' => false
            ]
        ],
        'Meeting' => [
            '5c6746f41180a16d1' => [
                'actions' => [
                    0 => (object) [
                        'execution' => (object) [
                            'type' => 'later',
                            'field' => 'dateEnd',
                            'shiftDays' => -1,
                            'shiftUnit' => 'days'
                        ],
                        'from' => 'system',
                        'to' => 'currentUser',
                        'cid' => 1,
                        'id' => 'zvb7svg3dh',
                        'emailTemplateId' => '5c67448ee3f77991a',
                        'emailTemplateName' => 'Recordatorio',
                        'replyTo' => '',
                        'fromEmail' => '',
                        'toEmail' => '',
                        'replyToEmail' => '',
                        'doNotStore' => true,
                        'type' => 'sendEmail'
                    ]
                ],
                'portalOnly' => false
            ],
            '5c76d3d2a1b7af075' => [
                'actions' => [
                    0 => (object) [
                        'link' => 'contacts',
                        'fieldList' => [
                            0 => 'modifiedAt'
                        ],
                        'fields' => (object) [
                            'modifiedAt' => (object) [
                                'subjectType' => 'today',
                                'shiftDays' => '0',
                                'attributes' => (object) [
                                    
                                ],
                                'shiftUnit' => 'days'
                            ]
                        ],
                        'cid' => 1,
                        'id' => '4nopstt89c',
                        'parentEntityType' => NULL,
                        'formula' => '',
                        'type' => 'updateRelatedEntity'
                    ]
                ],
                'portalOnly' => false
            ]
        ],
        'Call' => [
            '5c6747a06ae3f2bce' => [
                'portalOnly' => false
            ],
            '5c76d3fac81fec2c5' => [
                'actions' => [
                    0 => (object) [
                        'link' => 'contacts',
                        'fieldList' => [
                            0 => 'modifiedAt'
                        ],
                        'fields' => (object) [
                            'modifiedAt' => (object) [
                                'subjectType' => 'today',
                                'shiftDays' => '0',
                                'attributes' => (object) [
                                    
                                ],
                                'shiftUnit' => 'days'
                            ]
                        ],
                        'cid' => 0,
                        'id' => '2gs9durv9f',
                        'parentEntityType' => NULL,
                        'formula' => '',
                        'type' => 'updateRelatedEntity'
                    ]
                ],
                'portalOnly' => false
            ]
        ],
        'Contact' => [
            '5c7076eb41b171f3f' => [
                'actions' => [
                    0 => (object) [
                        'execution' => (object) [
                            'type' => 'immediately',
                            'field' => false,
                            'shiftDays' => 0,
                            'shiftUnit' => 'days'
                        ],
                        'from' => 'system',
                        'to' => 'link:assignedUser',
                        'cid' => 0,
                        'id' => 'wms8krkqw5',
                        'emailTemplateId' => '5c6b4cd848a187393',
                        'emailTemplateName' => 'ETESLA CRM: Nuevo Cliente! {today}',
                        'replyTo' => '',
                        'fromEmail' => '',
                        'toEmail' => 'felipe.toledano@etesla.mx',
                        'replyToEmail' => '',
                        'doNotStore' => false,
                        'type' => 'sendEmail'
                    ]
                ],
                'portalOnly' => false
            ],
            '5c814f5b374552396' => [
                'actions' => [
                    0 => (object) [
                        'link' => 'Opportunity',
                        'fieldList' => [
                            0 => 'name',
                            1 => 'description',
                            2 => 'origen',
                            3 => 'tarifa',
                            4 => 'contacts',
                            5 => 'assignedUser',
                            6 => 'teams',
                            7 => 'direccion'
                        ],
                        'fields' => (object) [
                            'name' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'firstName'
                            ],
                            'description' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'description'
                            ],
                            'origen' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'origen'
                            ],
                            'tarifa' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'tarifa'
                            ],
                            'contacts' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'opportunity.contacts'
                            ],
                            'assignedUser' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'assignedUser'
                            ],
                            'teams' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'assignedUser.teams'
                            ],
                            'direccion' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'address'
                            ]
                        ],
                        'cid' => 0,
                        'id' => 'p96v1odv5z',
                        'linkList' => [
                            
                        ],
                        'formula' => '',
                        'entityType' => 'Opportunity',
                        'type' => 'createEntity'
                    ]
                ],
                'portalOnly' => false
            ],
            '5ca296e547ecdfadd' => [
                'actions' => [
                    0 => (object) [
                        'fieldList' => [
                            0 => 'teams'
                        ],
                        'fields' => (object) [
                            'teams' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'createdBy.teams'
                            ]
                        ],
                        'cid' => 0,
                        'id' => 'w1997er5uy',
                        'formula' => '',
                        'type' => 'updateEntity'
                    ]
                ],
                'portalOnly' => false
            ]
        ],
        'Task' => [
            '5c76d41e643dd8723' => [
                'actions' => [
                    0 => (object) [
                        'link' => 'contact',
                        'fieldList' => [
                            0 => 'modifiedAt'
                        ],
                        'fields' => (object) [
                            'modifiedAt' => (object) [
                                'subjectType' => 'today',
                                'shiftDays' => '0',
                                'attributes' => (object) [
                                    
                                ],
                                'shiftUnit' => 'days'
                            ]
                        ],
                        'cid' => 0,
                        'id' => 'uwp5as4tbo',
                        'parentEntityType' => NULL,
                        'formula' => '',
                        'type' => 'updateRelatedEntity'
                    ]
                ],
                'portalOnly' => false
            ]
        ],
        'Instalacion' => [
            '5ca24b5572eb1bdf1' => [
                'actions' => [
                    0 => (object) [
                        'assignmentRule' => 'Round-Robin',
                        'targetTeamId' => '5bee0a28c7b16311e',
                        'targetTeamName' => 'Ingenieria',
                        'targetUserPosition' => '',
                        'listReportId' => NULL,
                        'listReportName' => NULL,
                        'cid' => 0,
                        'id' => 'y7zneg6phi',
                        'type' => 'applyAssignmentRule'
                    ]
                ],
                'portalOnly' => false
            ]
        ],
        'Opportunity' => [
            '5ca2974c208a8b56a' => [
                'actions' => [
                    0 => (object) [
                        'fieldList' => [
                            0 => 'teams'
                        ],
                        'fields' => (object) [
                            'teams' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'createdBy.teams'
                            ]
                        ],
                        'cid' => 0,
                        'id' => '0u8mdrxou4',
                        'formula' => '',
                        'type' => 'updateEntity'
                    ]
                ],
                'portalOnly' => false
            ]
        ],
        'Ticket' => [
            '5d6fcb9523eef6a9e' => [
                'conditionsAll' => [
                    0 => (object) [
                        'comparison' => 'has',
                        'cid' => 0,
                        'fieldToCompare' => 'createdBy.teams',
                        'subjectType' => 'value',
                        'valueName' => 'Ventas Veracruz',
                        'value' => '5c19771814e5da154',
                        'type' => 'all'
                    ]
                ],
                'actions' => [
                    0 => (object) [
                        'assignmentRule' => 'Round-Robin',
                        'targetTeamId' => '5d07d23839bcd1a5e',
                        'targetTeamName' => 'Ingenieria Veracruz',
                        'targetUserPosition' => '',
                        'listReportId' => NULL,
                        'listReportName' => NULL,
                        'cid' => 2,
                        'id' => 'zdzo6vhoz3',
                        'type' => 'applyAssignmentRule'
                    ]
                ],
                'portalOnly' => false
            ],
            '5d6fcd5ba74fbd9a1' => [
                'conditionsAll' => [
                    0 => (object) [
                        'comparison' => 'has',
                        'cid' => 1,
                        'fieldToCompare' => 'createdBy.teams',
                        'subjectType' => 'value',
                        'valueName' => 'Ventas CDMX',
                        'value' => '5c197c598ac299c90',
                        'type' => 'all'
                    ]
                ],
                'actions' => [
                    0 => (object) [
                        'assignmentRule' => 'Round-Robin',
                        'targetTeamId' => '5d07d2445f2bb63cd',
                        'targetTeamName' => 'Ingenieria CDMX',
                        'targetUserPosition' => '',
                        'listReportId' => NULL,
                        'listReportName' => NULL,
                        'cid' => 0,
                        'id' => 'd2n6zzpjgu',
                        'type' => 'applyAssignmentRule'
                    ]
                ],
                'portalOnly' => false
            ],
            '5d6fcdbc7421fddd4' => [
                'conditionsAll' => [
                    0 => (object) [
                        'comparison' => 'has',
                        'cid' => 0,
                        'fieldToCompare' => 'createdBy.teams',
                        'subjectType' => 'value',
                        'valueName' => 'Ventas Puebla',
                        'value' => '5c197cade7fb33200',
                        'type' => 'all'
                    ]
                ],
                'actions' => [
                    0 => (object) [
                        'assignmentRule' => 'Round-Robin',
                        'targetTeamId' => '5d07d2445f2bb63cd',
                        'targetTeamName' => 'Ingenieria CDMX',
                        'targetUserPosition' => '',
                        'listReportId' => NULL,
                        'listReportName' => NULL,
                        'cid' => 0,
                        'id' => '8bubmohqhw',
                        'type' => 'applyAssignmentRule'
                    ]
                ],
                'portalOnly' => false
            ],
            '5d6fce742658b1413' => [
                'conditionsAll' => [
                    0 => (object) [
                        'comparison' => 'has',
                        'cid' => 0,
                        'fieldToCompare' => 'createdBy.teams',
                        'subjectType' => 'value',
                        'valueName' => 'Ventas Nuevo Leon',
                        'value' => '5c197d096a5bb6c48',
                        'type' => 'all'
                    ]
                ],
                'actions' => [
                    0 => (object) [
                        'assignmentRule' => 'Round-Robin',
                        'targetTeamId' => '5d07d35469ae25755',
                        'targetTeamName' => 'Ingenieria Monterrey',
                        'targetUserPosition' => '',
                        'listReportId' => NULL,
                        'listReportName' => NULL,
                        'cid' => 0,
                        'id' => 'fxmsvgkyls',
                        'type' => 'applyAssignmentRule'
                    ]
                ],
                'portalOnly' => false
            ]
        ]
    ],
    'afterRecordSaved' => [
        'Contact' => [
            '5c814dd85b4e7af05' => [
                'actions' => [
                    0 => (object) [
                        'link' => 'opportunities',
                        'fieldList' => [
                            0 => 'documentos'
                        ],
                        'fields' => (object) [
                            'documentos' => (object) [
                                'subjectType' => 'value',
                                'attributes' => (object) [
                                    'documentos' => true
                                ]
                            ]
                        ],
                        'cid' => 0,
                        'id' => 'k47ymk14q8',
                        'parentEntityType' => NULL,
                        'formula' => '',
                        'type' => 'updateRelatedEntity'
                    ]
                ],
                'portalOnly' => false
            ],
            '5ca2a222392501290' => [
                'actions' => [
                    0 => (object) [
                        'fieldList' => [
                            0 => 'teams'
                        ],
                        'fields' => (object) [
                            'teams' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'assignedUser.teams'
                            ]
                        ],
                        'cid' => 0,
                        'id' => 'zzfvjw3gw5',
                        'formula' => '',
                        'type' => 'updateEntity'
                    ]
                ],
                'portalOnly' => false
            ]
        ],
        'Opportunity' => [
            '5c814f025ce103f85' => [
                'conditionsAll' => [
                    0 => (object) [
                        'comparison' => 'equals',
                        'subjectType' => 'value',
                        'cid' => 0,
                        'fieldToCompare' => 'stage',
                        'value' => 'entrante',
                        'type' => 'all'
                    ],
                    1 => (object) [
                        'comparison' => 'false',
                        'cid' => 1,
                        'fieldToCompare' => 'documentos',
                        'type' => 'all'
                    ]
                ],
                'conditionsFormula' => 'ifThen(stage=="entrada" && documentos==true, stage="entrada")',
                'actions' => [
                    0 => (object) [
                        'fieldList' => [
                            0 => 'stage'
                        ],
                        'fields' => (object) [
                            'stage' => (object) [
                                'subjectType' => 'value',
                                'attributes' => (object) [
                                    'stage' => 'entrante'
                                ]
                            ]
                        ],
                        'cid' => 0,
                        'id' => 'ksbwbjoywp',
                        'formula' => '',
                        'type' => 'updateEntity'
                    ]
                ],
                'portalOnly' => false
            ],
            '5c894955ede3a6069' => [
                'conditionsAll' => [
                    0 => (object) [
                        'comparison' => 'equals',
                        'subjectType' => 'value',
                        'cid' => 0,
                        'fieldToCompare' => 'stage',
                        'value' => 'Aislado',
                        'type' => 'all'
                    ]
                ],
                'actions' => [
                    0 => (object) [
                        'link' => 'Aislado',
                        'fieldList' => [
                            0 => 'name',
                            1 => 'assignedUser',
                            2 => 'description',
                            3 => 'contacts'
                        ],
                        'fields' => (object) [
                            'name' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'name'
                            ],
                            'assignedUser' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'assignedUser'
                            ],
                            'description' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'description'
                            ],
                            'contacts' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'contacts'
                            ]
                        ],
                        'cid' => 0,
                        'id' => 'dd959hma91',
                        'linkList' => [
                            
                        ],
                        'formula' => '',
                        'entityType' => 'Aislado',
                        'type' => 'createEntity'
                    ]
                ],
                'portalOnly' => false
            ],
            '5ca29d5dcc3e7e034' => [
                'actions' => [
                    0 => (object) [
                        'fieldList' => [
                            0 => 'teams'
                        ],
                        'fields' => (object) [
                            'teams' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'assignedUser.teams'
                            ]
                        ],
                        'cid' => 0,
                        'id' => '6c6xkxzi3p',
                        'formula' => '',
                        'type' => 'updateEntity'
                    ]
                ],
                'portalOnly' => false
            ],
            '5cb0a13810cde873c' => [
                'conditionsAll' => [
                    0 => (object) [
                        'comparison' => 'equals',
                        'subjectType' => 'value',
                        'cid' => 0,
                        'fieldToCompare' => 'stage',
                        'type' => 'all',
                        'value' => 'Cerrado'
                    ],
                    1 => (object) [
                        'comparison' => 'notEmpty',
                        'cid' => 2,
                        'fieldToCompare' => 'cotizacion',
                        'type' => 'all'
                    ],
                    2 => (object) [
                        'comparison' => 'notEmpty',
                        'cid' => 3,
                        'fieldToCompare' => 'recibo',
                        'type' => 'all'
                    ]
                ],
                'actions' => [
                    0 => (object) [
                        'link' => 'aCCs',
                        'fieldList' => [
                            0 => 'contacts',
                            1 => 'fechaDeInstalacion',
                            2 => 'kw',
                            3 => 'monto',
                            4 => 'name',
                            5 => 'origen',
                            6 => 'assignedUser',
                            7 => 'direccion',
                            8 => 'tipoDePago',
                            9 => 'financiamiento'
                        ],
                        'fields' => (object) [
                            'contacts' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'contacts'
                            ],
                            'fechaDeInstalacion' => (object) [
                                'subjectType' => 'today',
                                'shiftDays' => '10',
                                'attributes' => (object) [
                                    
                                ],
                                'shiftUnit' => 'days'
                            ],
                            'kw' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'kw'
                            ],
                            'monto' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'amount'
                            ],
                            'name' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'name'
                            ],
                            'origen' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'origen'
                            ],
                            'assignedUser' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'assignedUser'
                            ],
                            'direccion' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'direccion'
                            ],
                            'tipoDePago' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'tipoPago'
                            ],
                            'financiamiento' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'financiamento'
                            ]
                        ],
                        'cid' => 0,
                        'id' => 'vezvh5khmm',
                        'linkList' => [
                            
                        ],
                        'formula' => '',
                        'type' => 'createRelatedEntity'
                    ]
                ],
                'portalOnly' => false
            ],
            '5cb1044885407293c' => [
                'conditionsAll' => [
                    0 => (object) [
                        'comparison' => 'false',
                        'cid' => 0,
                        'fieldToCompare' => 'documentos',
                        'type' => 'all'
                    ],
                    1 => (object) [
                        'comparison' => 'notEquals',
                        'subjectType' => 'value',
                        'cid' => 1,
                        'fieldToCompare' => 'stage',
                        'type' => 'all',
                        'value' => 'entrante'
                    ],
                    2 => (object) [
                        'comparison' => 'notEquals',
                        'subjectType' => 'value',
                        'cid' => 2,
                        'fieldToCompare' => 'stage',
                        'value' => 'Aislado',
                        'type' => 'all'
                    ]
                ],
                'actions' => [
                    0 => (object) [
                        'fieldList' => [
                            0 => 'stage'
                        ],
                        'fields' => (object) [
                            'stage' => (object) [
                                'subjectType' => 'value',
                                'attributes' => (object) [
                                    'stage' => 'Prospecting'
                                ]
                            ]
                        ],
                        'cid' => 0,
                        'id' => 'e8y0l328uq',
                        'formula' => '',
                        'type' => 'updateEntity'
                    ],
                    1 => (object) [
                        'recipient' => 'currentUser',
                        'userIdList' => [
                            
                        ],
                        'userNames' => (object) [
                            
                        ],
                        'cid' => 1,
                        'id' => 'rqm1qkc5ck',
                        'messageTemplate' => 'No se puede cerrar cliente',
                        'specifiedTeamsIds' => [
                            
                        ],
                        'specifiedTeamsNames' => (object) [
                            
                        ],
                        'type' => 'createNotification'
                    ]
                ],
                'portalOnly' => false
            ]
        ],
        'Aislado' => [
            '5ca79e27538781f78' => [
                'actions' => [
                    0 => (object) [
                        'fieldList' => [
                            0 => 'contacts'
                        ],
                        'fields' => (object) [
                            'contacts' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'contacts1'
                            ]
                        ],
                        'cid' => 0,
                        'id' => '7ny22vc10x',
                        'formula' => '',
                        'type' => 'updateEntity'
                    ]
                ],
                'portalOnly' => false
            ]
        ],
        'ACC' => [
            '5cb0a410b91f44eb4' => [
                'conditionsAll' => [
                    0 => (object) [
                        'comparison' => 'true',
                        'cid' => 0,
                        'fieldToCompare' => 'generarInstalacion',
                        'type' => 'all'
                    ]
                ],
                'actions' => [
                    0 => (object) [
                        'execution' => (object) [
                            'type' => 'immediately',
                            'field' => false,
                            'shiftDays' => 0,
                            'shiftUnit' => 'days'
                        ],
                        'from' => 'system',
                        'to' => 'specifiedTeams',
                        'cid' => 2,
                        'id' => '7oigba9s8d',
                        'emailTemplateId' => '5cb10a27131ecd5b2',
                        'emailTemplateName' => 'Notificar acc',
                        'replyTo' => '',
                        'toSpecifiedEntityName' => 'Team',
                        'toSpecifiedEntityIds' => [
                            0 => '5bee0a28c7b16311e'
                        ],
                        'toSpecifiedEntityNames' => (object) [
                            '5bee0a28c7b16311e' => 'Ingenieria'
                        ],
                        'fromEmail' => '',
                        'toEmail' => '',
                        'replyToEmail' => '',
                        'doNotStore' => false,
                        'type' => 'sendEmail'
                    ],
                    1 => (object) [
                        'link' => 'instalacions',
                        'fieldList' => [
                            0 => 'contacts',
                            1 => 'name',
                            2 => 'fechaInstalacion',
                            3 => 'fechaPago',
                            4 => 'opportunities',
                            5 => 'direccion',
                            6 => 'tipoDePago',
                            7 => 'financiamiento'
                        ],
                        'fields' => (object) [
                            'contacts' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'contacts'
                            ],
                            'name' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'name'
                            ],
                            'fechaInstalacion' => (object) [
                                'subjectType' => 'field',
                                'shiftDays' => '0',
                                'attributes' => (object) [
                                    
                                ],
                                'shiftUnit' => 'days',
                                'field' => 'fechaDeInstalacion'
                            ],
                            'fechaPago' => (object) [
                                'subjectType' => 'today',
                                'shiftDays' => '0',
                                'attributes' => (object) [
                                    
                                ],
                                'shiftUnit' => 'days'
                            ],
                            'opportunities' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'opportunities'
                            ],
                            'direccion' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'direccion'
                            ],
                            'tipoDePago' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'tipoDePago'
                            ],
                            'financiamiento' => (object) [
                                'subjectType' => 'field',
                                'attributes' => (object) [
                                    
                                ],
                                'field' => 'financiamiento'
                            ]
                        ],
                        'cid' => 0,
                        'id' => 'bxogau674j',
                        'linkList' => [
                            
                        ],
                        'formula' => '',
                        'type' => 'createRelatedEntity'
                    ],
                    2 => (object) [
                        'execution' => (object) [
                            'type' => 'immediately',
                            'field' => false,
                            'shiftDays' => 0,
                            'shiftUnit' => 'days'
                        ],
                        'from' => 'system',
                        'to' => 'specifiedTeams',
                        'cid' => 1,
                        'id' => '4dnw9ww7fa',
                        'emailTemplateId' => '5cb60c1f6ce065c65',
                        'emailTemplateName' => 'Nueva instalación',
                        'replyTo' => '',
                        'toSpecifiedEntityName' => 'Team',
                        'toSpecifiedEntityIds' => [
                            0 => '5bee0a28c7b16311e'
                        ],
                        'toSpecifiedEntityNames' => (object) [
                            '5bee0a28c7b16311e' => 'Ingenieria'
                        ],
                        'fromEmail' => '',
                        'toEmail' => '',
                        'replyToEmail' => '',
                        'doNotStore' => false,
                        'type' => 'sendEmail'
                    ]
                ],
                'portalOnly' => false
            ]
        ]
    ],
    'scheduled' => [
        'Instalacion' => [
            '5ca2b384195ca205a' => [
                'actions' => [
                    0 => (object) [
                        'type' => 'startBpmnProcess',
                        'flowchartId' => '5ca2b210f38ff5b05',
                        'elementId' => '473xv1iyxz',
                        'cid' => 0
                    ]
                ],
                'portalOnly' => false
            ]
        ]
    ]
];
?>