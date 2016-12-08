<?php

return [
    'default/index' => [
        '',
        'index.php',
    ],

    'general/url' => 'url',
    'general/controller' => 'controller',
    'general/view' => 'view',
    'general/model' => 'model',
    'general/plugin' => 'plugin',
    'general/helper' => 'helper',
    'general/router' => 'router',
    'general/cli' => 'cli',
    'general/php' => 'php',

    'eyeglasses/gender' => [
        '<gender:men|women>-eyeglasses-page-<page:\d+>.html',
    ],

    'eyeglasses/list' => [
        '<attrs+:[^\-]+>-<gender:men|women>-<tags*:[^\-]+~>eyeglasses-<*:width|height|length><~page?:\d+>.html',
        'eyeglasses.html',
    ],

    '*/*' => '<_controller:[^/]+>/<_action:[^/]+>',
];
