<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/themes/antimatter/blueprints.yaml',
    'modified' => 1502903290,
    'data' => [
        'name' => 'Antimatter',
        'version' => '2.1.1',
        'description' => 'Antimatter is the default theme included with **Grav**',
        'icon' => 'empire',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-antimatter',
        'demo' => 'http://demo.getgrav.org/blog-skeleton',
        'keywords' => 'antimatter, theme, core, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/getgrav/grav-theme-antimatter/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];