<?php

namespace oop;

class Calendar extends Publication
{
    private $type;
    private $year;

    function __construct($price , $title , $year , $size , $type)
    {
        parent::__construct($price , $title , $size);
        $this->type = $type;
        $this->year = $year;
    }

    public function getType()
    {
       return $this->type;
    }

    public function getYear()
    {
        return $this->year;
    }
}