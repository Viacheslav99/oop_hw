<?php

namespace oop;
include 'Publication.php';
include 'Book.php';
include 'Calendar.php';
include 'EMagazine.php';
include 'EBook.php';
include  'Newspaper.php';
include  'PostStamp.php';
include  'Magazine.php';
include  'Poster.php';
include 'Postcard.php';


$book = new Book(2399, ' Harry potter ', ' 20x10 ', ' BookStudio ', 2002, ' Roaling ', ' Yes ', ' Fantastic ');
echo $book->getTitle();
echo $book->getPrice() . "\n";
$book->Show();

$poster = new Poster(100 , ' Superman and Batman ' , ' 140x80 ' , ' Simple ' , 15);
echo $poster->getTitle() . "\n";

$newspaper = new Newspaper(30 , ' France Footbal ' , 15 , ' Marcus Antonio ' , 2021 , ' 25x15 ' , 680 , 673 , 18 , ' red ');
echo $newspaper->getTitle() . $newspaper->getPages() . ' Ціна за одиницю: ' . $newspaper->getPrice();


