<?php

namespace ContainerEoOJeuD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_53M8mMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.53M8m_m' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.53M8m_m'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'creation' => ['privates', '.errored..service_locator.53M8m_m.App\\Entity\\Creation', NULL, 'Cannot autowire service ".service_locator.53M8m_m": it references class "App\\Entity\\Creation" but no such service exists.'],
            'likeRepository' => ['privates', 'App\\Repository\\LikeRepository', 'getLikeRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'creation' => 'App\\Entity\\Creation',
            'likeRepository' => 'App\\Repository\\LikeRepository',
            'manager' => '?',
        ]);
    }
}
