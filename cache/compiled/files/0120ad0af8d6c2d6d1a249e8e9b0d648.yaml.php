<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/user/plugins/tinymce-editor/blueprints/pages/default.yaml',
    'modified' => 1519227221,
    'data' => [
        'title' => 'PLUGIN_ADMIN.DEFAULT',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'content' => [
                                    'type' => 'tinymce',
                                    'validate' => [
                                        'type' => 'textarea'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
