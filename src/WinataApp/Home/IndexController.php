<?php

namespace WinataApp\Home;

use Winata\Mvc\Controller\AbstractActionController;
use Winata\ServiceManager\ServiceManagerInterface;
use Winata\Service\View\View;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $view = $this->serviceManager->getService('view');
        $view->setProperties(array('a' => 'b'));
        $view->c = 'd';

        return $view;
    }
}
