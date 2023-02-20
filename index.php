<?php

use Kirby\Cms\App as Kirby;

Kirby::plugin('jan-herman/tracking-codes', [
    'blueprints' => [
        'settings/tracking-codes' => __DIR__ . '/blueprints/settings/tracking-codes.yml',
    ],
    'snippets' => [
        'tracking-codes/head' => __DIR__ . '/snippets/head.php',
        'tracking-codes/body-start' => __DIR__ . '/snippets/body-start.php',
        'tracking-codes/body-end' => __DIR__ . '/snippets/body-end.php',
    ]
]);
