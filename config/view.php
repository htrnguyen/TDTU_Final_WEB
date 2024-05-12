<?php

return [
    'paths' => [
        resource_path('views'),
        resource_path('views/components'),
    ],

    'compiled' => env('VIEW_COMPILED_PATH', 'storage/framework/views'),

    'cache' => env('VIEW_CACHE', true),

    'namespaces' => ['App\View\Components'],

];
