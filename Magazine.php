<?php

namespace oop;

class Magazine extends Publication
{
    public $subscriptionPrice;
    public $number;
    public $numsPerYear;
    private $pages;
    private $publisher;
    private $year;
    function __construct($price, $title, $pages, $publisher, $year, $size, $subscriptionPrice, $number, $numsPerYear)
    {
        parent::__construct($price, $title, $size);
        $this->subscriptionPrice = $subscriptionPrice;
        $this->number = $number;
        $this->numsPerYear = $numsPerYear;
        $this->publisher = $publisher;
        $this->year = $year;
        $this->pages = $pages;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getSubscriptionPrice()
    {
        return $this->subscriptionPrice;
    }

    public function getNumsPerYear($numsPerYear)
    {
        $this->numsPerYear = $numsPerYear;
    }

    public function getPages()
    {
        return $this->pages;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }

    public function getYear()
    {
        return $this->year;
    }


}