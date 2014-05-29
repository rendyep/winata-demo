<?php

use Winata\ServiceManager\ServiceManager;

$loader = require __DIR__ . '/vendor/autoload.php';

$config = require __DIR__ . '/config/application.config.php';

$serviceManager = new ServiceManager($config);

$application = new \Winata\Mvc\Application($config, $serviceManager);
$application->bootstrap();
$response = $application->run();
$response->send();
