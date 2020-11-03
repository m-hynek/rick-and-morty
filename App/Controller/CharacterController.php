<?php declare(strict_types=1);

namespace App\Controller;

use App\RickAndMortyApiClient;
use App\TemplateRenderer;
use Laminas\Diactoros\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class CharacterController
{
    /**
     * @var TemplateRenderer
     */
    private $templateRenderer;

    /**
     * @var RickAndMortyApiClient
     */
    private $rickAndMortyApiClient;

    public function __construct(
        TemplateRenderer $templateRenderer,
        RickAndMortyApiClient $rickAndMortyApiClient
    )
    {
        $this->templateRenderer = $templateRenderer;
        $this->rickAndMortyApiClient = $rickAndMortyApiClient;
    }

    public function __invoke(
        ServerRequestInterface $request,
        array $arguments = null
    ): ResponseInterface
    {
        $response = new Response;
        $page = $arguments['page'] ?? 1;
        $characterList = $this->rickAndMortyApiClient->getCharacterList((int)$page);
        $response->getBody()->write(
            $this->templateRenderer->getViewHtml(
                'character',
                ['characterList' => $characterList]
            ));
        return $response;
    }
}