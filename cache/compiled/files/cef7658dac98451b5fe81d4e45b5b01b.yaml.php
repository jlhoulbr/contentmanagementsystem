<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://admin-addon-revisions/admin-addon-revisions.yaml',
    'modified' => 1521744548,
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
