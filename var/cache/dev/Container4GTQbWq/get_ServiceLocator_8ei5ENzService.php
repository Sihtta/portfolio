<?php

namespace Container4GTQbWq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8ei5ENzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8ei5ENz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8ei5ENz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'creationRepository' => ['privates', 'App\\Repository\\CreationRepository', 'getCreationRepositoryService', true],
        ], [
            'creationRepository' => 'App\\Repository\\CreationRepository',
        ]);
    }
}
