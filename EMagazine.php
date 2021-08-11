<?php

namespace oop;

class EMagazine extends Publication
{
    private $subscriptionPrice;
    private $number;
    private $numsPerYear;
    private $fileSize;
    private $year;
    private $publisher;
    private $pages;

    function __construct($price , $title , $pages , $publisher , $year , $subscriptionPrice , $number , $numsPerYear, $fileSize)
    {
        parent::__construct($price , $title);
        $this->subscriptionPrice = $subscriptionPrice;
        $this->number = $number;
        $this->numsPerYear = $numsPerYear;
        $this->fileSize = $fileSize;
        $this->year = $year;
        $this->publisher = $publisher;
        $this->pages = $pages;

    }

    public function getSubscriptionPrice()
    {
        $this->subscriptionPrice;
    }

    public function getNumber()
    {
        $this->number;
    }

    public function getNumsPerYear()
    {
        $this->numsPerYear;
    }

    public function getFileSize()
    {
        $this->fileSize;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }

    public function getPages()
    {
        return $this->pages;
    }
}