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
        $root->removeChild($book);

    }

}

//Add a new book 
$newBook = $doc->createElement('book');
$newTitle = $doc->createElement('title', 'New Malgudi Days');
$newAuthor = $doc->createElement('author', 'New R. K. Narayan');
$newYear = $doc->createElement('year', '2024');

$newBook ->appendChild($newTitle);
$newBook ->appendChild($newAuthor);
$newBook ->appendChild($newYear);

$root ->appendChild($newBook);

$doc -> save('sample2.xml');
echo "XML has been updated";

?>