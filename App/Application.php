<?php declare(strict_types=1);

namespace App;

use Laminas\Diactoros\ServerRequestFactory;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;

class Application
{
    public static function run() : void
    {
        $container = Container::initialize();
        $router = Router::getRouter($container);
        $request = ServerRequestFactory::fromGlobals(
            $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
        );
        $response = $router->dispatch($request);
        (new SapiEmitter)->emit($response);
    }
}