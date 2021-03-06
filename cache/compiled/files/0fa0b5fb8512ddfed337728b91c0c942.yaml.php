<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/user/plugins/responsive-images/blueprints.yaml',
    'modified' => 1508256502,
    'data' => [
        'name' => 'Responsive Images',
        'version' => '1.0.0',
        'description' => 'Provides a Twig function to generate a responsive image for a set of pre-rendered image files',
        'icon' => 'plug',
        'author' => [
            'name' => 'OliverO2',
            'email' => 'oliver.o456i@gmail.com'
        ],
        'homepage' => 'https://github.com/OliverO2/grav-plugin-responsive-images',
        'keywords' => 'grav, plugin, media, images, responsive, srcset',
        'bugs' => 'https://github.com/OliverO2/grav-plugin-responsive-images/issues',
        'docs' => 'https://github.com/OliverO2/grav-plugin-responsive-images/blob/master/README.md',
        'license' => 'MIT',
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
                ]
            ]
        ]
    ]
];
