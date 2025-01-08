<?php

namespace ContainerIR9TKEs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Plpy_ThService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.plpy.th' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.plpy.th'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'repository' => ['privates', 'App\\Repository\\CreationRepository', 'getCreationRepositoryService', true],
        ], [
            'paginator' => '?',
            'repository' => 'App\\Repository\\CreationRepository',
        ]);
    }
}
