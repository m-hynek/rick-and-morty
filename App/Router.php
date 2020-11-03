<?php declare(strict_types=1);

namespace App;

use App\Controller\CharacterController;
use App\Controller\LocationController;
use League\Route\Strategy\ApplicationStrategy;
use Psr\Container\ContainerInterface;

class Router
{
    public static function getRouter(
        ContainerInterface $container
    ): \League\Route\Router
    {
        $strategy = (new ApplicationStrategy)->setContainer($container);
        $router = (new \League\Route\Router)->setStrategy($strategy);

        $router->map(
            'GET',
            '/',
            CharacterController::class
        );
        $router->map(
            'GET',
            '/characters/page/{page:number}',
            CharacterController::class
        );
        $router->map(
            'GET',
            '/locations',
            LocationController::class
        );

        return $router;
    }
}