<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/plugins/admin-addon-user-manager/blueprints/user/account-raw.yaml',
    'modified' => 1507209316,
    'data' => [
        'title' => 'User',
        'form' => [
            'fields' => [
                'raw' => [
                    'type' => 'editor',
                    'label' => 'Raw',
                    'autofocus' => true,
                    'codemirror' => [
                        'mode' => 'yaml',
                        'indentUnit' => 4,
                        'autofocus' => true,
                        'indentWithTabs' => false,
                        'lineNumbers' => true,
                        'styleActiveLine' => true,
                        'gutters' => [
                            0 => 'CodeMirror-lint-markers'
                        ],
                        'lint' => true
                    ]
                ]
            ]
        ]
    ]
];
