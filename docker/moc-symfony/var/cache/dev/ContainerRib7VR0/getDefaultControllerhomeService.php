<?php

namespace ContainerRib7VR0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDefaultControllerhomeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uBR2pyw.App\Controller\DefaultController::home()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uBR2pyw.App\\Controller\\DefaultController::home()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'security' => '?',
        ]))->withContext('App\\Controller\\DefaultController::home()', $container);
    }
}