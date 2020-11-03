<?php declare(strict_types=1);

namespace App;

class RickAndMortyApiClient
{
    const API_ENDPOINT = 'https://rickandmortyapi.com/api/';
    const CHARACTER = 'character';

    public function getCharacterList(
        int $page = 1
    ): CharacterList
    {
        $url = $this->getUrl(self::CHARACTER);

        if ($page > 1) {
            $url = $url . '?' . http_build_query(['page' => $page]);
        }

        return new CharacterList($this->getData($url));
    }

    private function getUrl(string $resource): string
    {
        return self::API_ENDPOINT . $resource;
    }

    private function getData(string $url): array
    {
        $json_data = file_get_contents($url);
        return json_decode($json_data, true);
    }
}