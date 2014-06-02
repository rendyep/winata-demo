<?php

/**
* Winata Demo (https://github.com/rendyep/winata)
*
* @link https://github.com/rendyep/winata-demo for the canonical source repository
* @copyright Copyright (c) 20014 Winata Technology Inc. (https://github.com/rendyep/winata)
* @license https://github.com/rendyep/winata-demo/blob/master/LICENCE
*/

namespace WinataApp\Home;

use Winata\Mvc\Controller\AbstractActionController;
use Winata\ServiceManager\ServiceManagerInterface;
use Winata\Service\View\View;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $view = $this->serviceManager->getService('view');
        $view->setTitleSeparator('-');
        $view->setTitle('Demo App');
        $view->prependTitle('Winata');

        // this output will be ignored
        echo 'tessssssss';

        return $view;
    }
}
