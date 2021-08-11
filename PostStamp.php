<?php

namespace oop;

class PostStamp extends Publication
{
    public $country;
    public $series;
    public $denomination;

    function __construct($price , $title , $size , $country , $series , $denomination)
    {
        parent::__construct($price , $title , $size);
        $this->country = $country;
        $this->series = $series;
        $this->denomination = $denomination;
    }

   public function getCountry()
   {
       $this->country;
   }
    public function getSeries()
    {
        $this->series;
    }
    public function getdenomination()
    {
        $this->denomination;
    }
}