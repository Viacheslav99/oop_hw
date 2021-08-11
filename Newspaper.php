<?php
namespace oop;

class Newspaper extends Publication
{
   private $subscriptionPrice;
   private $number;
   private $numsPerYear;
   private $isColor;
   private $pages;
   private $publisher;
   private $year;
    function __construct($price , $title , $pages , $publisher , $year , $size , $subscriptionPrice , $number , $numsPerYear , $isColor)
    {
        parent::__construct($price , $title , $size);
        $this->subscriptionPrice = $subscriptionPrice;
        $this->number = $number;
        $this->numsPerYear = $numsPerYear;
        $this->isColor = $isColor;
        $this->publisher = $publisher;
        $this->year = $year;
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
    public function getIsColor()
    {
        $this->isColor;
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