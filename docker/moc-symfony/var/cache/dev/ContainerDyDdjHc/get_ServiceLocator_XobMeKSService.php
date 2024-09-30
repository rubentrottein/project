<?php

namespace ContainerDyDdjHc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XobMeKSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xobMeKS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xobMeKS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'security' => ['privates', '.errored.NW_Rv_Q', NULL, 'Cannot determine controller argument for "App\\Controller\\DefaultController::home()": the $security argument is type-hinted with the non-existent class or interface: "App\\Controller\\Security". Did you forget to add a use statement?'],
        ], [
            'security' => '?',
        ]);
    }
}
