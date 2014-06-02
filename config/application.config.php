<?php

/**
* Winata Demo (https://github.com/rendyep/winata)
*
* @link https://github.com/rendyep/winata-demo for the canonical source repository
* @copyright Copyright (c) 20014 Winata Technology Inc. (https://github.com/rendyep/winata)
* @license https://github.com/rendyep/winata-demo/blob/master/LICENCE
*/

return array(
    'module_manager' => array(
        'modules' => array(
            'home' => array(
                'controllers' => array(
                    'index' => 'Controller\Home\Index',
                    'about' => 'Controller\Home\About'
                ),
                'default' => array(
                    'controller' => 'index',
                    'action' => 'index'
                )
            )
        ),
        'default' => array(
            'module' => 'home',
            'controller' => 'index',
            'action' => 'index'
        ),
        'invokables' => array(
            'Controller\Home\Index' => '\WinataApp\Home\IndexController',
            'Controller\Home\About' => '\WinataApp\Home\AboutController'
        )
    ),
    'view_manager' => array(
        'layout_path' => __DIR__ . '/../views/layout',
        'module_path' => __DIR__ . '/../views/module'
    ),
    'navigation' => array(
        'home' => array(
            'label' => 'Home',
            'child' => array(
                'about' => array(
                    'label' => 'about',
                    'resource' => array(
                        'module' => 'home',
                        'controller' => 'about',
                        'action' => 'index'
                    )
                ),
                'contact-us' => array(
                    'label' => 'Contact Us',
                    'resource' => array(
                        'module' => 'home',
                        'controller' => 'about',
                        'action' => 'contact-us'
                    )
                )
            )
        ),
    )
);
