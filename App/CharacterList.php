<?php declare(strict_types=1);

namespace App;

class CharacterList
{
    /** @var int */
    private $count;

    /** @var int */
    private $pages;

    /** @var int|null */
    private $next;

    /** @var int|null */
    private $prev;

    /** @var Character[] */
    private $characters = [];

    public function __construct(
        array $data
    )
    {
        $this->count = $data['info']['count'];
        $this->pages = $data['info']['pages'];
        $this->next = (int) preg_replace('/[^0-9]/', '', $data['info']['next']);
        $this->prev = (int) preg_replace('/[^0-9]/', '', $data['info']['prev']);

        foreach ($data['results'] as $characterData) {
            $this->characters[] = new Character($characterData);
        }
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @return int
     */
    public function getPages(): int
    {
        return $this->pages;
    }

    /**
     * @return int|null
     */
    public function getNext(): ?int
    {
        return $this->next;
    }

    /**
     * @return int|null
     */
    public function getPrev(): ?int
    {
        return $this->prev;
    }

    /**
     * @return Character[]
     */
    public function getCharacters(): array
    {
        return $this->characters;
    }
}