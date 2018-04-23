<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/user/accounts/test.yaml',
    'modified' => 1522148775,
    'data' => [
        'state' => 'enabled',
        'email' => 'j.l.houlbrook@brad.ac.uk',
        'fullname' => 'Josh Test',
        'title' => '2nd admin',
        'language' => 'en',
        'access' => [
            'admin' => [
                'super' => 'false',
                'login' => 'true',
                'cache' => 'true',
                'configuration' => 'true',
                'configuration_system' => 'true',
                'configuration_site' => 'true',
                'configuration_media' => 'true',
                'configuration_info' => 'true',
                'settings' => 'true',
                'pages' => 'true',
                'maintenance' => 'true',
                'statistics' => 'true',
                'plugins' => 'true',
                'themes' => 'true',
                'users' => 'false'
            ],
            'admin-addon-user-manager' => [
                'users' => 'false',
                'groups' => 'false',
                'users_expert' => 'false'
            ]
        ],
        'hashed_password' => '$2y$10$Wmh4/6bKN3FXaRRKOAckVO7wLIYUBYQGkQRT.sbcfpO7HzY2kHKRe',
        'twofa_secret' => 'N2D5Q6FR2RM3DXWCJV5WDLPBN6LJJBWA'
    ]
];
