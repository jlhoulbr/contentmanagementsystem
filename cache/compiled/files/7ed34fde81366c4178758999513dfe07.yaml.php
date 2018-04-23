<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/user/plugins/maintenance/blueprints.yaml',
    'modified' => 1508251251,
    'data' => [
        'name' => 'Maintenance',
        'version' => '1.3.1',
        'description' => 'Puts your grav site into a maintenance mode',
        'icon' => 'exclamation-triangle',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-maintenance',
        'keywords' => 'maintenance, plugin, required',
        'bugs' => 'https://github.com/getgrav/grav-plugin-maintenance/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'login'
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_MAINTENANCE.BLUEPRINTS.STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'active' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_MAINTENANCE.BLUEPRINTS.MODE',
                    'help' => 'PLUGIN_MAINTENANCE.BLUEPRINTS.MODE_HELP',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'allow_login' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_MAINTENANCE.BLUEPRINTS.ALLOW_LOGIN',
                    'help' => 'PLUGIN_MAINTENANCE.BLUEPRINTS.ALLOW_LOGIN_HELP',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'login_access' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_MAINTENANCE.BLUEPRINTS.ACCESS',
                    'help' => 'PLUGIN_MAINTENANCE.BLUEPRINTS.ACCESS_HELP',
                    'size' => 'medium',
                    'default' => 'login_access'
                ],
                'maintenance_page_route' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_MAINTENANCE.BLUEPRINTS.PAGE_ROUTE',
                    'help' => 'PLUGIN_MAINTENANCE.BLUEPRINTS.PAGE_ROUTE_HELP',
                    'size' => 'medium',
                    'placeholder' => '/maintenance'
                ]
            ]
        ]
    ]
];
