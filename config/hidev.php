<?php

use codexten\admin\dev\console\AdminAppController;

return [
    'controllerMap' => [
        'admin-app' => [
            'class' => AdminAppController::class,
        ],
    ],
    'components' => [
        'include' => [
            __DIR__ . '/goals.yml',
        ],
        'adminApp' => [
            'class' => \hidev\components\Directory::class,
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@hidev/views' => ['@codexten/admin/dev/views'],
                ],
            ],
        ],
        'vcsignore' => [
            '/public/admin/assets/*' => 'Admin directories',
            '/public/admin/minify/*' => 'Admin directories',
            'runtime/admin/*' => 'Admin directories',
        ],
    ],
];
