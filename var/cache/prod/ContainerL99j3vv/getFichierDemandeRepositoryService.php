<?php

namespace ContainerL99j3vv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFichierDemandeRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\FichierDemandeRepository' shared autowired service.
     *
     * @return \App\Repository\FichierDemandeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\FichierDemandeRepository'] = new \App\Repository\FichierDemandeRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
