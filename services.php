<?php

use Prathibha\DIExample\Mailer;
use Prathibha\DIExample\SubscriberManager;

// Define 3 services
$container['pdo'] = function ($container) {
 return new PDO(
     $container['config.dsn']
 );
};

$container['mailer'] = function ($container) {
    return new Mailer(
        $container['config.hostname'],
        $container['config.smtp_user'],
        $container['config.smtp_password'],
        $container['config.smtp_port'],
        $container['config.logPath']
    );
};

$container['subscriber_manager'] = function ($container) {
    return new SubscriberManager(
       $container['pdo'],
       $container['mailer']
    );
};