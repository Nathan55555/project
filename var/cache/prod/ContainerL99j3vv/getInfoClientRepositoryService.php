<?php

namespace ContainerL99j3vv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInfoClientRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\InfoClientRepository' shared autowired service.
     *
     * @return \App\Repository\InfoClientRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\InfoClientRepository'] = new \App\Repository\InfoClientRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
