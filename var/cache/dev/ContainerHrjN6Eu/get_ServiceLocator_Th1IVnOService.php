<?php

namespace ContainerHrjN6Eu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Th1IVnOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Th1IVnO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Th1IVnO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'compteRepo' => ['privates', 'App\\Repository\\CompteRepository', 'getCompteRepositoryService', true],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', false],
        ], [
            'compteRepo' => 'App\\Repository\\CompteRepository',
            'serializer' => '?',
        ]);
    }
}