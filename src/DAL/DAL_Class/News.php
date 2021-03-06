<?php

namespace DAL_Class;

/**
 * DAL_Class News
 * @package DAL_Class
 */
class News {

    private $url;
    private $website;
    private $title;
    private $description;
    private $date;
    private $nbClics;

    public function __construct(string $url, string $website, string $title, string $description, string $date, int $nbClics) {
        $this->url = $url;
        $this->website = $website;
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->nbClics =$nbClics;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getWebsite(): string
    {
        return $this->website;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return int
     */
    public function getNbClics(): int
    {
        return $this->nbClics;
    }
}