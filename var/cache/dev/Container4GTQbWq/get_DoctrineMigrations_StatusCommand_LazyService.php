<?php

namespace Container4GTQbWq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_DoctrineMigrations_StatusCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.doctrine_migrations.status_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.doctrine_migrations.status_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('doctrine:migrations:status', [], 'View the status of a set of migrations.', false, #[\Closure(name: 'doctrine_migrations.status_command', class: 'Doctrine\\Migrations\\Tools\\Console\\Command\\StatusCommand')] function () use ($container): \Doctrine\Migrations\Tools\Console\Command\StatusCommand {
            return ($container->privates['doctrine_migrations.status_command'] ?? $container->load('getDoctrineMigrations_StatusCommandService'));
        });
    }
}
