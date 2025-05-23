<?php

namespace ContainerRwsMtxL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAutomationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AutomationController' shared autowired service.
     *
     * @return \App\Controller\AutomationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AutomationController.php';

        $container->services['App\\Controller\\AutomationController'] = $instance = new \App\Controller\AutomationController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\AutomationController', $container));

        return $instance;
    }
}
