<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        // Database settings
        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'gos2',
            'username' => 'gos2',
            'password' => 'WjrPSRssiebVbh7G',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ],

        // E-mail setting
        'mailer' => [
            'from' => ['support@gos2.jp' => 'support_gos2'],
            'to' => ['support@gos2.jp'],
            //'bcc' => ['support@gos2.jp'],
            'content_type' => 'text/html',
        ],
    ],
];
