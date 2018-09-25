<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config.php';

use Prathibha\DIExample\Mailer;
use Prathibha\DIExample\SubscriberManager;

$subscriberManager = new SubscriberManager($config);
$subscriberManager->notifySubscribers();