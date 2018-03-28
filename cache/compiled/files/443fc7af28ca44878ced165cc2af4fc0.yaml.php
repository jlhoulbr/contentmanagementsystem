<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/plugins/admin-addon-revisions/blueprints.yaml',
    'modified' => 1521744548,
    'data' => [
        'name' => 'Admin Addon Revisions',
        'version' => '1.3.2',
        'description' => 'An extension for Admin plugin which adds revisions for pages. Integrates with admin, easily revert back to a previous revision whenever you want!',
        'icon' => 'plug',
        'author' => [
            'name' => 'Dávid Szabó',
            'email' => 'david.szabo97@gmail.com'
        ],
        'homepage' => 'https://github.com/david-szabo97/grav-plugin-admin-addon-revisions',
        'keywords' => 'grav, plugin, admin, revisions',
        'bugs' => 'https://github.com/david-szabo97/grav-plugin-admin-addon-revisions/issues',
        'docs' => 'https://github.com/david-szabo97/grav-plugin-admin-addon-revisions/blob/master/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.0.0'
            ],
            1 => [
                'name' => 'admin',
                'version' => '>=1.0.0'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
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
                'debug' => [
                    'type' => 'toggle',
                    'label' => 'Debug mode',
                    'help' => 'Enables debug mode, debug messages will appear in the debugger.',
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
                'directory' => [
                    'type' => 'text',
                    'label' => 'Directory',
                    'help' => 'Be careful, don\'t change this if you don\'t know the consequences!'
                ],
                'limit.maximum' => [
                    'type' => 'text',
                    'label' => 'Maximum revisions per page'
                ],
                'limit.older' => [
                    'type' => 'text',
                    'label' => 'Delete older than'
                ],
                'ignore_files' => [
                    'label' => 'Ignore files (regexp)',
                    'type' => 'array',
                    'value_only' => true
                ]
            ]
        ]
    ]
];
