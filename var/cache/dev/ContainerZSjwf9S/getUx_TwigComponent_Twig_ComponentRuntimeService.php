<?php

namespace ContainerZSjwf9S;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_TwigComponent_Twig_ComponentRuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.twig_component.twig.component_runtime' shared service.
     *
     * @return \Symfony\UX\TwigComponent\Twig\ComponentRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-twig-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'ComponentRuntime.php';

        $a = ($container->privates['ux.twig_component.component_renderer'] ?? $container->load('getUx_TwigComponent_ComponentRendererService'));

        if (isset($container->privates['ux.twig_component.twig.component_runtime'])) {
            return $container->privates['ux.twig_component.twig.component_runtime'];
        }

        return $container->privates['ux.twig_component.twig.component_runtime'] = new \Symfony\UX\TwigComponent\Twig\ComponentRuntime($a, ($container->privates['.service_locator.Xbsa8iG'] ?? ($container->privates['.service_locator.Xbsa8iG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [], []))));
    }
}
