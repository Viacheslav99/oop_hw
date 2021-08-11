<?php

namespace oop;

class Poster extends Publication
{
   public $type;
   public $series;

    function __construct($price , $title , $size , $type, $series )
    {
        parent::__construct($price , $title , $size);
        $this->type = $type;
        $this->series = $series;
    }

   public function getType()
   {
       $this->type;
   }
   public function getSeries()
   {
       $this->series;
   }
}