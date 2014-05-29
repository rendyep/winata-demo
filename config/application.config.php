<?php

return array(
    'module_manager' => array(
        'modules' => array(
            'home' => array(
                'controllers' => array(
                    'index' => 'Controller\Home\Index'
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
            'Controller\Home\Index' => '\WinataApp\Home\IndexController'
        )
    ),
    'view_manager' => array(
        'template_path' => __DIR__ . '/../views/template',
        'module_path' => __DIR__ . '/../views/module'
    )
);
