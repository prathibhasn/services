<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config.php';

use Prathibha\DIExample\Mailer;
use Prathibha\DIExample\SubscriberManager;


$pdo = new PDO($config['dsn']);
$mailer = new Mailer(
  $config['hostname'],
  $config['smtp_user'],
  $config['smtp_password'],
  $config['smtp_port'],
  $config['logPath']
);

$subscriberManager = new SubscriberManager($pdo, $mailer);
$subscriberManager->notifySubscribers();