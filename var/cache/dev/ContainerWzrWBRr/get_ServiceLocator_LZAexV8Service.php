<?php

namespace ContainerWzrWBRr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LZAexV8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lZAexV8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lZAexV8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\FindController::changeVilles' => ['privates', '.service_locator.vqbRAJs', 'get_ServiceLocator_VqbRAJsService', true],
            'App\\Controller\\FindController::corporation' => ['privates', '.service_locator.U.yze7b', 'get_ServiceLocator_U_Yze7bService', true],
            'App\\Controller\\FindController::corporations' => ['privates', '.service_locator.xfDPf.V', 'get_ServiceLocator_XfDPf_VService', true],
            'App\\Controller\\FindController::rechercheCorporations' => ['privates', '.service_locator.xfDPf.V', 'get_ServiceLocator_XfDPf_VService', true],
            'App\\Controller\\FindController::villes' => ['privates', '.service_locator.vqbRAJs', 'get_ServiceLocator_VqbRAJsService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\FindController:changeVilles' => ['privates', '.service_locator.vqbRAJs', 'get_ServiceLocator_VqbRAJsService', true],
            'App\\Controller\\FindController:corporation' => ['privates', '.service_locator.U.yze7b', 'get_ServiceLocator_U_Yze7bService', true],
            'App\\Controller\\FindController:corporations' => ['privates', '.service_locator.xfDPf.V', 'get_ServiceLocator_XfDPf_VService', true],
            'App\\Controller\\FindController:rechercheCorporations' => ['privates', '.service_locator.xfDPf.V', 'get_ServiceLocator_XfDPf_VService', true],
            'App\\Controller\\FindController:villes' => ['privates', '.service_locator.vqbRAJs', 'get_ServiceLocator_VqbRAJsService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\FindController::changeVilles' => '?',
            'App\\Controller\\FindController::corporation' => '?',
            'App\\Controller\\FindController::corporations' => '?',
            'App\\Controller\\FindController::rechercheCorporations' => '?',
            'App\\Controller\\FindController::villes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\FindController:changeVilles' => '?',
            'App\\Controller\\FindController:corporation' => '?',
            'App\\Controller\\FindController:corporations' => '?',
            'App\\Controller\\FindController:rechercheCorporations' => '?',
            'App\\Controller\\FindController:villes' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}