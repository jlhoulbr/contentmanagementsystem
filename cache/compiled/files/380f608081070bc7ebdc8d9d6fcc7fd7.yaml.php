<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/plugins/tinymce-editor/blueprints/admin/pages/raw.yaml',
    'modified' => 1519227221,
    'data' => [
        'title' => 'PLUGIN_ADMIN.DEFAULT',
        '@extends' => [
            'type' => 'raw',
            'context' => 'blueprints://admin/pages'
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
