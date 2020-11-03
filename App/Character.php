<?php declare(strict_types=1);

namespace App;

class Character
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $status;

    /** @var string */
    private $species;

    /** @var string */
    private $type;

    /** @var string */
    private $gender;

    /** @var string */
    private $origin;

    /** @var string */
    private $originUrl;

    /** @var string */
    private $location;

    /** @var string */
    private $locationUrl;

    /** @var string */
    private $image;

    /** @var string[] */
    private $episode;

    /** @var string */
    private $url;

    /** @var \DateTime */
    private $created;

    public function __construct(
        array $data
    )
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->status = $data['status'];
        $this->species = $data['species'];
        $this->type = $data['type'];
        $this->gender = $data['gender'];
        $this->origin = $data['origin']['name'];
        $this->originUrl = $data['origin']['url'];
        $this->location = $data['location']['name'];
        $this->locationUrl = $data['location']['url'];
        $this->image = $data['image'];
        $this->episode = $data['episode'];
        $this->url = $data['url'];
        $this->created = $data['created'];
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getSpecies(): string
    {
        return $this->species;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->origin;
    }

    /**
     * @return string
     */
    public function getOriginUrl(): string
    {
        return $this->originUrl;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getLocationUrl(): string
    {
        return $this->locationUrl;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @return string[]
     */
    public function getEpisode(): array
    {
        return $this->episode;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return \DateTime
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }
}