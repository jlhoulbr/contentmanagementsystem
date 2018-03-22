<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/config/site.yaml',
    'modified' => 1520521497,
    'data' => [
        'title' => 'Qualsafe Awards',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Josh Houlbrook',
            'email' => 'joshyh23@hotmail.co.uk'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
