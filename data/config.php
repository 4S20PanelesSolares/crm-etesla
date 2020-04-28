<?php
return [
    'cacheTimestamp' => 1584517272,
    'database' => [
        'driver' => 'pdo_mysql',
        'host' => 'localhost',
        'port' => '',
        'charset' => 'utf8mb4',
        'dbname' => 'eteslamx_crm',
        'user' => 'eteslamx',
        'password' => '@Etesla2019_'
    ],
    'useCache' => true,
    'recordsPerPage' => 20,
    'recordsPerPageSmall' => 5,
    'applicationName' => 'eTesla',
    'version' => '5.6.13',
    'timeZone' => 'America/Mexico_City',
    'dateFormat' => 'DD/MM/YYYY',
    'timeFormat' => 'hh:mm a',
    'weekStart' => 0,
    'thousandSeparator' => ',',
    'decimalMark' => '.',
    'exportDelimiter' => ';',
    'currencyList' => [
        0 => 'USD',
        1 => 'MXN'
    ],
    'defaultCurrency' => 'USD',
    'baseCurrency' => 'MXN',
    'currencyRates' => [
        'USD' => 19.300000000000000710542735760100185871124267578125
    ],
    'outboundEmailIsShared' => true,
    'outboundEmailFromName' => 'etesla',
    'outboundEmailFromAddress' => 'sistemas@etesla.mx',
    'smtpServer' => 'mail.etesla.mx',
    'smtpPort' => 26,
    'smtpAuth' => true,
    'smtpSecurity' => '',
    'smtpUsername' => 'sistemas@etesla.mx',
    'smtpPassword' => '#frinksdevSistemas',
    'languageList' => [
        0 => 'en_GB',
        1 => 'en_US',
        2 => 'es_MX',
        3 => 'cs_CZ',
        4 => 'da_DK',
        5 => 'de_DE',
        6 => 'es_ES',
        7 => 'hr_HR',
        8 => 'hu_HU',
        9 => 'fr_FR',
        10 => 'id_ID',
        11 => 'it_IT',
        12 => 'lt_LT',
        13 => 'nb_NO',
        14 => 'nl_NL',
        15 => 'tr_TR',
        16 => 'sk_SK',
        17 => 'sr_RS',
        18 => 'ro_RO',
        19 => 'ru_RU',
        20 => 'pl_PL',
        21 => 'pt_BR',
        22 => 'uk_UA',
        23 => 'vi_VN',
        24 => 'zh_CN',
        25 => 'fa_IR',
        26 => 'lv_LV'
    ],
    'language' => 'es_MX',
    'logger' => [
        'path' => 'data/logs/espo.log',
        'level' => 'WARNING',
        'rotation' => true,
        'maxFileNumber' => 30
    ],
    'authenticationMethod' => 'Espo',
    'globalSearchEntityList' => [
        0 => 'Contact',
        1 => 'Opportunity',
        2 => 'Case'
    ],
    'tabList' => [
        0 => 'Calendar',
        1 => 'Contact',
        2 => 'Opportunity',
        3 => 'ACC',
        4 => 'Instalacion',
        5 => 'Ticket',
        6 => 'Aislado',
        7 => 'Email',
        8 => 'Task',
        9 => 'Meeting',
        10 => 'Call',
        11 => '_delimiter_',
        12 => 'Report',
        13 => 'Document',
        14 => 'Case',
        15 => 'Agenda',
        16 => 'Quote',
        17 => 'SalesOrder',
        18 => 'Product',
        19 => 'Inversor',
        20 => 'Panel'
    ],
    'quickCreateList' => [
        0 => 'Contact',
        1 => 'Email',
        2 => 'Opportunity',
        3 => 'Document',
        4 => 'Ticket',
        5 => 'ACC'
    ],
    'exportDisabled' => true,
    'adminNotifications' => true,
    'adminNotificationsNewVersion' => true,
    'adminNotificationsCronIsNotConfigured' => true,
    'adminNotificationsNewExtensionVersion' => true,
    'assignmentEmailNotifications' => true,
    'assignmentEmailNotificationsEntityList' => [
        0 => 'Task'
    ],
    'assignmentNotificationsEntityList' => [
        0 => 'Meeting',
        1 => 'Call',
        2 => 'Task',
        3 => 'Email',
        4 => 'BpmnUserTask'
    ],
    'portalStreamEmailNotifications' => true,
    'streamEmailNotificationsEntityList' => [
        
    ],
    'streamEmailNotificationsTypeList' => [
        0 => 'Post',
        1 => 'Status',
        2 => 'EmailReceived'
    ],
    'emailMessageMaxSize' => 10,
    'notificationsCheckInterval' => 10,
    'disabledCountQueryEntityList' => [
        0 => 'Email'
    ],
    'maxEmailAccountCount' => 2,
    'followCreatedEntities' => true,
    'b2cMode' => true,
    'restrictedMode' => false,
    'theme' => 'EspoVertical',
    'massEmailMaxPerHourCount' => 100,
    'personalEmailMaxPortionSize' => 10,
    'inboundEmailMaxPortionSize' => 20,
    'authTokenLifetime' => 0,
    'authTokenMaxIdleTime' => 120,
    'userNameRegularExpression' => '[^a-z0-9\\-@_\\.\\s]',
    'addressFormat' => 1,
    'displayListViewRecordCount' => true,
    'dashboardLayout' => [
        0 => (object) [
            'name' => 'My Espo',
            'layout' => [
                0 => (object) [
                    'id' => 'd815384',
                    'name' => 'Report',
                    'x' => 2,
                    'y' => 13,
                    'width' => 2,
                    'height' => 2
                ],
                1 => (object) [
                    'id' => 'd754957',
                    'name' => 'Calendar',
                    'x' => 0,
                    'y' => 0,
                    'width' => 4,
                    'height' => 2
                ],
                2 => (object) [
                    'id' => 'd785036',
                    'name' => 'Report',
                    'x' => 0,
                    'y' => 2,
                    'width' => 2,
                    'height' => 2
                ],
                3 => (object) [
                    'id' => 'd926305',
                    'name' => 'Emails',
                    'x' => 2,
                    'y' => 2,
                    'width' => 2,
                    'height' => 2
                ],
                4 => (object) [
                    'id' => 'd530008',
                    'name' => 'Tasks',
                    'x' => 1,
                    'y' => 4,
                    'width' => 2,
                    'height' => 2
                ],
                5 => (object) [
                    'id' => 'd783126',
                    'name' => 'Report',
                    'x' => 0,
                    'y' => 6,
                    'width' => 4,
                    'height' => 2
                ],
                6 => (object) [
                    'id' => 'd716205',
                    'name' => 'Report',
                    'x' => 0,
                    'y' => 8,
                    'width' => 4,
                    'height' => 2
                ],
                7 => (object) [
                    'id' => 'd84615',
                    'name' => 'Report',
                    'x' => 0,
                    'y' => 10,
                    'width' => 4,
                    'height' => 3
                ],
                8 => (object) [
                    'id' => 'd137888',
                    'name' => 'Report',
                    'x' => 0,
                    'y' => 13,
                    'width' => 2,
                    'height' => 2
                ]
            ]
        ]
    ],
    'calendarEntityList' => [
        0 => 'Meeting',
        1 => 'Call',
        2 => 'Task'
    ],
    'activitiesEntityList' => [
        0 => 'Meeting',
        1 => 'Call'
    ],
    'historyEntityList' => [
        0 => 'Meeting',
        1 => 'Call',
        2 => 'Email'
    ],
    'lastViewedCount' => 20,
    'cleanupJobPeriod' => '1 month',
    'cleanupActionHistoryPeriod' => '15 days',
    'cleanupAuthTokenPeriod' => '1 month',
    'currencyFormat' => 2,
    'currencyDecimalPlaces' => 2,
    'aclStrictMode' => true,
    'aclAllowDeleteCreated' => true,
    'inlineAttachmentUploadMaxSize' => 20,
    'textFilterUseContainsForVarchar' => true,
    'tabColorsDisabled' => false,
    'massPrintPdfMaxCount' => 50,
    'emailKeepParentTeamsEntityList' => [
        0 => 'Case'
    ],
    'recordListMaxSizeLimit' => 200,
    'noteDeleteThresholdPeriod' => '1 month',
    'noteEditThresholdPeriod' => '7 days',
    'isInstalled' => true,
    'siteUrl' => 'http://crm.etesla.mx',
    'passwordSalt' => 'dae594fc53aa1447',
    'cryptKey' => '24d8cae11da7220076b9040329e1f2d1',
    'defaultPermissions' => [
        'user' => 943,
        'group' => 943
    ],
    'fullTextSearchMinLength' => 4,
    'avatarsDisabled' => false,
    'scopeColorsDisabled' => false,
    'tabIconsDisabled' => false,
    'userThemesDisabled' => false,
    'dashletsOptions' => (object) [
        'd785036' => (object) [
            'title' => 'Indicadores Generales',
            'reportName' => 'Indicadores Generales',
            'reportId' => '5c50f06c78bde422a',
            'column' => 'SUM:amountWeightedConverted',
            'displayOnlyCount' => false,
            'displayTotal' => true,
            'entityType' => 'Opportunity',
            'runtimeFilters' => [
                
            ],
            'type' => 'Grid',
            'columns' => [
                0 => 'COUNT:id',
                1 => 'SUM:amountWeightedConverted',
                2 => 'SUM:kw'
            ],
            'depth' => 2
        ],
        'd783126' => (object) [
            'title' => 'Productividad por asesor',
            'reportName' => 'Productividad por asesor',
            'reportId' => '5c50f1cfaaae8a535',
            'column' => 'COUNT:id',
            'displayOnlyCount' => false,
            'displayTotal' => true,
            'filtersData' => (object) [
                'assignedUser' => false
            ],
            'entityType' => 'Opportunity',
            'runtimeFilters' => [
                0 => 'assignedUser'
            ],
            'type' => 'Grid',
            'columns' => [
                0 => 'COUNT:id'
            ],
            'depth' => 2
        ],
        'd716205' => (object) [
            'title' => 'Cierres Programados',
            'reportName' => 'Cierres Programados',
            'reportId' => '5c50f2cd3cf196ddf',
            'column' => 'SUM:kw',
            'displayOnlyCount' => false,
            'displayTotal' => true,
            'filtersData' => (object) [
                'assignedUser' => false,
                'closeDate' => (object) [
                    'type' => 'lastSevenDays',
                    'field' => 'closeDate',
                    'attribute' => 'closeDate'
                ]
            ],
            'entityType' => 'Opportunity',
            'runtimeFilters' => [
                0 => 'assignedUser',
                1 => 'closeDate'
            ],
            'type' => 'Grid',
            'columns' => [
                0 => 'COUNT:id',
                1 => 'SUM:amountWeightedConverted',
                2 => 'SUM:kw'
            ],
            'depth' => 1
        ],
        'd84615' => (object) [
            'title' => 'Pipeline',
            'reportName' => 'Pipeline',
            'reportId' => '5c75e02ac7bd12468',
            'column' => NULL,
            'displayOnlyCount' => false,
            'displayTotal' => false,
            'filtersData' => (object) [
                'closeDate' => (object) [
                    'type' => 'lastSevenDays',
                    'field' => 'closeDate',
                    'attribute' => 'closeDate'
                ],
                'amount' => (object) [
                    'type' => 'isNotNull',
                    'typeFront' => 'isNotEmpty',
                    'field' => 'amount',
                    'attribute' => 'amount'
                ],
                'kw' => (object) [
                    'type' => 'isNotNull',
                    'typeFront' => 'isNotEmpty',
                    'field' => 'kw',
                    'attribute' => 'kw'
                ]
            ],
            'entityType' => 'Opportunity',
            'runtimeFilters' => [
                0 => 'closeDate',
                1 => 'amount',
                2 => 'kw'
            ],
            'type' => 'List',
            'columns' => [
                0 => 'name',
                1 => 'closeDate',
                2 => 'probabilidad',
                3 => 'kw',
                4 => 'amount'
            ],
            'depth' => NULL
        ],
        'd137888' => (object) [
            'title' => 'Proyeccion a 4 semanas',
            'reportName' => 'Cierres',
            'reportId' => '5c76bc3ad7cc62279',
            'column' => 'SUM:kw',
            'displayOnlyCount' => false,
            'displayTotal' => true,
            'filtersData' => (object) [
                'closeDate' => (object) [
                    'type' => 'nextMonth',
                    'field' => 'closeDate',
                    'attribute' => 'closeDate'
                ]
            ],
            'entityType' => 'Opportunity',
            'runtimeFilters' => [
                0 => 'closeDate'
            ],
            'type' => 'Grid',
            'columns' => [
                0 => 'COUNT:id',
                1 => 'SUM:amountWeightedConverted',
                2 => 'SUM:kw'
            ],
            'depth' => 1
        ],
        'd815384' => (object) [
            'title' => 'Proyeccion a 8 semanas',
            'reportName' => 'Cierres',
            'reportId' => '5c76bc3ad7cc62279',
            'column' => 'SUM:kw',
            'displayOnlyCount' => false,
            'displayTotal' => true,
            'filtersData' => (object) [
                'closeDate' => (object) [
                    'type' => 'olderThanXDays',
                    'value' => '56',
                    'number' => '56',
                    'field' => 'closeDate',
                    'attribute' => 'closeDate'
                ]
            ],
            'entityType' => 'Opportunity',
            'runtimeFilters' => [
                0 => 'closeDate'
            ],
            'type' => 'Grid',
            'columns' => [
                0 => 'COUNT:id',
                1 => 'SUM:amountWeightedConverted',
                2 => 'SUM:kw'
            ],
            'depth' => 1
        ]
    ],
    'companyLogoId' => '5d4486330fda7173c',
    'companyLogoName' => 'eTesla-Logo-2-01.png',
    'outboundEmailBccAddress' => NULL,
    'massEmailDisableMandatoryOptOutLink' => false,
    'latestVersion' => '5.8.4',
    'emailAddressIsOptedOutByDefault' => false,
    'cleanupDeletedRecords' => true,
    'apiSecretKeys' => (object) [
        
    ],
    'addressCountryList' => [
        
    ],
    'fiscalYearShift' => 0,
    'streamEmailNotifications' => true,
    'notificationSoundsDisabled' => false,
    'mentionEmailNotifications' => false,
    'defaultPortalId' => NULL,
    'adminPanelIframeUrl' => 'https://s.espocrm.com/?advanced-pack=b05a39a2254aff91765cddbd4982f2af&google-integration=d7328b509a0c6565cdb459461877aa93&sales-pack=48b45b7d11e497058130ec49a7811186',
    'integrations' => (object) [
        'Google' => true,
        'GoogleMaps' => true
    ],
    'latestExtensionVersions' => [
        'Advanced Pack' => '2.5.6',
        'Google Integration' => '1.3.4',
        'Sales Pack' => '1.0.10'
    ],
    'addressCityList' => [
        
    ],
    'googleMapsApiKey' => 'AIzaSyD0cJDO0IwwolWkvCCnzVFTmbsvQjsdOyo ',
    'maintenanceMode' => false,
    'cronDisabled' => false,
    'useWebSocket' => true,
    'addressStateList' => [
        
    ],
    'emailNotificationsDelay' => NULL
];
?>