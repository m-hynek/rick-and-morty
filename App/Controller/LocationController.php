<?php declare(strict_types=1);

namespace App\Controller;

use App\Repository\RickAndMortyApiClient;
use App\TemplateRenderer;
use Laminas\Diactoros\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class LocationController
{
    /**
     * @var TemplateRenderer
     */
    private $templateRenderer;

    public function __construct(
        TemplateRenderer $templateRenderer
    )
    {
        $this->templateRenderer = $templateRenderer;
    }

    public function __invoke(
        ServerRequestInterface $request
    ): ResponseInterface
    {
        $response = new Response;
        $response->getBody()->write(
            $this->templateRenderer->getViewHtml(
                'location'
            ));
        return $response;
    }
}