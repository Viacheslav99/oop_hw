<?php

namespace oop;

class EBook extends Publication
{
    private $fileSize;
    private $year;
    private $publisher;
    private $author;

    function __construct($price , $title , $pages, $publisher , $year , $author , $fileSize)
    {
        parent::__construct($price , $title , $pages);
        $this->publisher = $publisher ;
        $this->year = $year;
        $this->author = $author;
        $this->fileSize = $fileSize;
    }
        public
        function getFileSize()
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

    public function getAuthor()
    {
        return $this->author;
    }

}