<?php

/**
* Winata Demo (https://github.com/rendyep/winata-demo)
*
* @link https://github.com/rendyep/winata-demo for the canonical source repository
* @copyright Copyright (c) 20014 Winata Technology Inc. (https://github.com/rendyep/winata)
* @license https://github.com/rendyep/winata-demo/blob/master/LICENCE
*/

namespace WinataApp\Module\Home;

use Winata\Mvc\Controller\AbstractActionController;
use Winata\ServiceManager\ServiceManagerInterface;
use Winata\Service\View\View;

class AboutController extends AbstractActionController
{
    public function indexAction()
    {
        $view = $this->serviceManager->getService('view');
        $view->setTitleSeparator('-');
        $view->setTitle('About');
        $view->prependTitle('Demo App');
        $view->prependTitle('Winata');

        return $view;
    }

    public function contactUsAction()
    {
        $view = $this->serviceManager->getService('view');
        $view->setTitleSeparator('-');
        $view->setTitle('Contact Us');
        $view->prependTitle('Demo App');
        $view->prependTitle('Winata');

        return $view;
    }
}
