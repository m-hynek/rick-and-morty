<?php declare(strict_types=1);

namespace App;

use App\Controller\CharacterController;
use App\Controller\LocationController;
use Psr\Container\ContainerInterface;

class Container
{
    public static function initialize(): ContainerInterface
    {
        $container = new \League\Container\Container;

        $container->add(LocationController::class)
            ->addArgument(TemplateRenderer::class);

        $container->add(CharacterController::class)
            ->addArgument(TemplateRenderer::class)
            ->addArgument(RickAndMortyApiClient::class);

        $container->add(TemplateRenderer::class);

        $container->add(RickAndMortyApiClient::class);

        return $container;
    }
}