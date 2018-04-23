<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/user/config/plugins/email.yaml',
    'modified' => 1518024101,
    'data' => [
        'enabled' => true,
        'from' => 'GravTest@test.com',
        'from_name' => 'joshyh23@hotmail.co.uk',
        'to' => 'joshyh23@hotmail.co.uk',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'smtp.gmail.com',
                'port' => 587,
                'encryption' => 'tls',
                'user' => 'extane2@gmail.com',
                'password' => 'Joshh2308'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
