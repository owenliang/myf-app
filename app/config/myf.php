<?php

return [
    // 调试模式
    'debug' => true,

    // 路由配置
    'route' => [
        // 静态路由
        'static' => [
            '/demo/a' => ['demo', 'a'],
            '/' => ['demo', 'c']
        ],
        // pcre正则路由
        'regex' => [
            ['^/demo/b/(\d+)$', 'demo', 'b'],
        ],
    ],
];