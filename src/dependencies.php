<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// mysql
$container['db'] = function ($c) {
    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($c->get('settings')['db'], 'default');
    $capsule->setAsGlobal();
    $capsule->bootEloquent();
    return $capsule;
};

// mailer
$container['mailer'] = function ($c) {
    $transport = Swift_MailTransport::newInstance();
    $mailer    = Swift_Mailer::newInstance($transport);
    return $mailer;
};

// controller
$container['FuncController'] = function ($c) {
    require (__DIR__ . '/../app/FuncController.php');
    return new App\FuncController($c);
};
$container['PreregisterController'] = function ($c) {
    require (__DIR__ . '/../app/PreregisterController.php');
    return new App\PreregisterController($c);
};