<?php
//load
$doc = new DOMDocument();
$doc ->load('./sample.xml');

//access 
$root = $doc->documentElement;

//Get all the book 
$books = $root->getElementsByTagName('book');

//Iterate
foreach($books as $book){
    $title = $book ->getElementsByTagName('title')->item(0)->nodeValue;

    if($title=='Malgudi Days'){
        $book->getElementsByTagName('year')->item(0)->nodeValue = '2023';

    }

}

$doc -> save('sample1.xml');
echo "XML has been updated";

?>