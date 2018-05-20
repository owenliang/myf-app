<?php

return [
    // 调试模式
    'debug' => true,

    // 路由配置
    'route' => [
        // 静态路由
        'static' => [
            '/service' => ['Demo', 'service'],
            '/view' => ['Demo', 'view'],
            '/mysql' => ['Demo', 'mysql'],
            '/redis' => ['Demo', 'redis'],
            '/http' => ['Demo', 'http'],
            '/elasticsearch' => ['Demo', 'elasticsearch'],
        ],
        // pcre正则路由
        'regex' => [
            ['^/params/(\d+)$', 'Demo', 'params'],
        ],
    ],
];