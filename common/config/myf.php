<?php

return [
    // mysql配置
    'mysql' => [
        'default' => [
            'dbname' => 'test_db',
            'username' => 'test_user',
            'password' => 'test_pass',
            'charset' => 'utf8',
            'master' => [
                [
                    'host' => 'localhost',
                    'port' => 3306
                ],
            ],
            'slave' => [
                [
                    'host' => 'localhost',
                    'port' => 3306
                ],
            ]
        ]
    ],

    // redis配置
    'redis' => [

    ],

    // elasticsearch配置
    'elasticsearch' => [

    ],

    // http client配置
    'http' => [

    ],
];