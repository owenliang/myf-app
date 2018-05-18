<?php

return [
    // 调试模式
    'debug' => true,

    // 路由配置
    'route' => [
        // 静态路由
        'static' => [
            '/service' => ['demo', 'service'],
            '/view' => ['demo', 'view'],
            '/mysql' => ['demo', 'mysql'],
        ],
        // pcre正则路由
        'regex' => [
            ['^/params/(\d+)$', 'demo', 'params'],
        ],
    ],
];