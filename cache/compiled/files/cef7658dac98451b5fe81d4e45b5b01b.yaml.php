<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://admin-addon-revisions/admin-addon-revisions.yaml',
    'modified' => 1507211429,
    'data' => [
        'enabled' => true,
        'debug' => false,
        'directory' => '.revs',
        'limit' => [
            'maximum' => 50,
            'older' => '1 year'
        ]
    ]
];
