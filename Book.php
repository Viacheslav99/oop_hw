<?php

namespace oop;

class Book extends Publication
{
    private $publisher;
    private $year;
    private $author;
    private $hardcover;
    private $genres;

    public function __construct(
        int $price,
        string $title,
        string $size,
        string $publisher,
        string $year,
        string $author,
        string $hardcover,
        string $genres
    )

    {
        parent::__construct($price, $title, $size);
        $this->publisher = $publisher;
        $this->year = $year;
        $this->author = $author;
        $this->hardcover = $hardcover;
        $this->genres = $genres;
    }

    use Info;

    public function getPublisher(): string
    {
        return $this->publisher;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getHardcover(): string
    {
        return $this->hardcover;
    }

    public function getGenres(): string
    {
        return $this->genres;
    }

}

