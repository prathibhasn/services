<?php
use Pimple\Container;

require __DIR__ . '/vendor/autoload.php';

$container = new Container();
require __DIR__ . '/config.php';
require __DIR__ . '/services.php';

$subscriberManager = $container['subscriber_manager'];
$subscriberManager->notifySubscribers();