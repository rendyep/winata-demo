<?php

/**
* Winata Demo (https://github.com/rendyep/winata)
*
* @link https://github.com/rendyep/winata-demo for the canonical source repository
* @copyright Copyright (c) 20014 Winata Technology Inc. (https://github.com/rendyep/winata)
* @license https://github.com/rendyep/winata-demo/blob/master/LICENCE
*/

use Winata\ServiceManager\ServiceManager;

$loader = require __DIR__ . '/vendor/autoload.php';

$config = require __DIR__ . '/config/application.config.php';

$serviceManager = new ServiceManager($config);

$application = new \Winata\Mvc\Application($config, $serviceManager);
$application->bootstrap();
$response = $application->run();
$response->send();
