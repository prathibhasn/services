<?php
$container['config.hostname'] = 'smtp.blogtrottr.com';
$container['config.smtp_user'] = 'smtpuser';
$container['config.smtp_password'] = 'smtppass';
$container['config.smtp_port'] = '465';
$container['config.logPath'] = __DIR__.'/logs/emails.log';
$container['config.dsn'] = 'sqlite:' . __DIR__ . '/data/database.sqlite';