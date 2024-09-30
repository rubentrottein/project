<?php

namespace ContainerDyDdjHc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationControllerregisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.g9BceMG.App\Controller\RegistrationController::register()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.g9BceMG.App\\Controller\\RegistrationController::register()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'userPasswordHasher' => '?',
            'security' => '?',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\RegistrationController::register()', $container);
    }
}
