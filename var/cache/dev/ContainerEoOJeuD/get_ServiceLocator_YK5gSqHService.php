<?php

namespace ContainerEoOJeuD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YK5gSqHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YK5gSqH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YK5gSqH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'creation' => ['privates', '.errored..service_locator.YK5gSqH.App\\Entity\\Creation', NULL, 'Cannot autowire service ".service_locator.YK5gSqH": it references class "App\\Entity\\Creation" but no such service exists.'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'creation' => 'App\\Entity\\Creation',
            'manager' => '?',
        ]);
    }
}
