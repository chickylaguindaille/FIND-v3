<?php

namespace ContainerJrHxN5s;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_UserProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.listener.user_provider' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\UserProviderListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EventListener/UserProviderListener.php';

        return $container->privates['security.listener.user_provider'] = new \Symfony\Component\Security\Http\EventListener\UserProviderListener(($container->privates['App\\Security\\UserProvider'] ?? $container->load('getUserProviderService')));
    }
}