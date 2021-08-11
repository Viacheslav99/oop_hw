<?php

namespace oop;

class Postcard extends Book
{
    public $country;
    public $series;

    function __construct($price , $title , $size , $country, $series )
    {
        parent::__construct($price , $title , $size);
        $this->country = $country;
        $this->series = $series;
    }
    public function getCountry()
    {
        $this->country;
    }

    public function getSeries()
    {
        $this->series;
    }
}