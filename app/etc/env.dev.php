<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '7a47089fc28fe4416505008d4cf9f092'
    ],
    'db' => [
        'table_prefix' => 'm2_',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'viacheslav_vahin_dev',
                'username' => 'viacheslav_vahin_user',
                'password' => 'hrr8xNRLk+3L-"5f',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'production',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '69d_'
            ],
            'page_cache' => [
                'id_prefix' => '69d_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => ''
        ]
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        'viacheslav-vahin-magento.local'
    ],
    'install' => [
        'date' => 'Fri, 08 Oct 2021 20:18:54 +0000'
    ],
    'system' => [
        'default' => [
            'web' => [
                'unsecure' => [
                    'base_url' => 'https://viacheslav-vahin-magento-local.allbugs.info/',
                    'base_link_url' => 'https://viacheslav-vahin-magento-local.allbugs.info/',
                    'base_static_url' => 'https://viacheslav-vahin-magento-local.allbugs.info/static/',
                    'base_media_url' => 'https://viacheslav-vahin-magento-local.allbugs.info/media/'
                ],
                'secure' => [
                    'base_url' => 'https://viacheslav-vahin-magento-local.allbugs.info/',
                    'base_link_url' => 'https://viacheslav-vahin-magento-local.allbugs.info/',
                    'base_static_url' => 'https://viacheslav-vahin-magento-local.allbugs.info/static/',
                    'base_media_url' => 'https://viacheslav-vahin-magento-local.allbugs.info/media/'
                ]
            ]
        ],
        'websites' => [
            'us_website' => [
                'web' => [
                    'unsecure' => [
                        'base_url' => 'https://viacheslav-vahin-magento-us.allbugs.info/',
                        'base_link_url' => 'https://viacheslav-vahin-magento-us.allbugs.info/',
                        'base_static_url' => 'https://viacheslav-vahin-magento-us.allbugs.info/static/',
                        'base_media_url' => 'https://viacheslav-vahin-magento-us.allbugs.info/media/'
                    ],
                    'secure' => [
                        'base_url' => 'https://viacheslav-vahin-magento-us.allbugs.info/',
                        'base_link_url' => 'https://viacheslav-vahin-magento-us.allbugs.info/',
                        'base_static_url' => 'https://viacheslav-vahin-magento-us.allbugs.info/static/',
                        'base_media_url' => 'https://viacheslav-vahin-magento-us.allbugs.info/media/'
                    ]
                ]
            ]
        ]
    ],
    'http_cache_hosts' => [
        [
            'host' => '127.0.0.1',
            'port' => '6081'
        ]
    ]
];
