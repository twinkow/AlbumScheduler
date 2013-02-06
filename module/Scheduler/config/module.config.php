<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(

    'controllers' => array(
        'invokables' => array(
            'Scheduler\Controller\Scheduler' => 'Scheduler\Controller\SchedulerController',
        ),
    ),

    'router' => array(
        'routes' => array(
            'scheduler' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/scheduler[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Scheduler\Controller\Scheduler',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'scheduler' => __DIR__ . '/../view',
        ),
    ),
);
