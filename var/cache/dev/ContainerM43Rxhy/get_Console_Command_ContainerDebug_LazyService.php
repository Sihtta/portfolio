<?php

<<<<<<<< HEAD:var/cache/dev/ContainerM43Rxhy/get_Console_Command_ContainerDebug_LazyService.php
namespace ContainerM43Rxhy;
========
namespace ContainerUD3Ncr5;
>>>>>>>> Entity:var/cache/dev/ContainerUD3Ncr5/get_Ux_TwigComponent_Command_Debug_LazyService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Ux_TwigComponent_Command_Debug_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.ux.twig_component.command.debug.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.ux.twig_component.command.debug.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('debug:twig-component', [], 'Display components and them usages for an application', false, #[\Closure(name: 'ux.twig_component.command.debug', class: 'Symfony\\UX\\TwigComponent\\Command\\TwigComponentDebugCommand')] function () use ($container): \Symfony\UX\TwigComponent\Command\TwigComponentDebugCommand {
            return ($container->privates['ux.twig_component.command.debug'] ?? $container->load('getUx_TwigComponent_Command_DebugService'));
        });
    }
}
