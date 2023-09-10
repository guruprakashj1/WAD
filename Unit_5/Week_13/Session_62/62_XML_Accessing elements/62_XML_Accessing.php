<?php
//Load xml
$doc = new DOMDocument();
$doc->load('./sample.xml');

//Access the root element
$root = $doc ->documentElement;

//Get all the book elements
$books = $root ->getElementsByTagName('book');

//Iterate the book elements
foreach($books as $book){
    $title = $book->getElementsByTagName('title')->item(0)->nodeValue;

    $author = $book->getElementsByTagName('author')->item(0)->nodeValue;

    $year = $book->getElementsByTagName('year')->item(0)->nodeValue;

    echo "Title: $title, Author: $author , Year: $year";
}



?>