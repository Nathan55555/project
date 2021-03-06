<?php

namespace ContainerEndVxuj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_U0e_OFDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.u0e.oFD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.u0e.oFD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'file' => ['privates', '.errored..service_locator.u0e.oFD.App\\Entity\\FichierClient', NULL, 'Cannot autowire service ".service_locator.u0e.oFD": it references class "App\\Entity\\FichierClient" but no such service exists.'],
            'infoclientrepo' => ['privates', 'App\\Repository\\InfoClientRepository', 'getInfoClientRepositoryService', true],
        ], [
            'file' => 'App\\Entity\\FichierClient',
            'infoclientrepo' => 'App\\Repository\\InfoClientRepository',
        ]);
    }
}
