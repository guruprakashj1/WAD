<?php

$doc = new DOMDocument();
//Creates a new instance of the DOMDoc class. 
// DOMDocument is class represents the entire xml. 

$doc ->load('sample.xml');
//load the xml contents

$root = $doc->documentElement;
// gets the root element of the XML

$books = $root->getElementsByTagName('book');
//check all tag and return by TagName match


$root ->removeChild('book');

$root -> appendChild('book');

$doc->save('sample1.xml');
?>