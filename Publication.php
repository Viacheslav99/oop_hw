<?php


namespace oop;

class Publication
{
    private $price, $title, $size;

    public function __construct(
        int $price,
        string $title,
        string $size
    )
    {
        $this->price = $price;
        $this->title = $title;
        $this->size = $size;
    }


    public function getPrice(): int
    {
        return $this->price;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getSize(): string
    {
        return $this->size;
    }
}
trait Info
{
public function Show() {
    echo ' Цей запис показує що трейт працює' . "\n" ;
}
}