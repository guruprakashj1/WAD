<?php

// Create a new DOMDocument instance
$doc = new DOMDocument('1.0', 'UTF-8');

// Root Node
$root = $doc->createElement('library');
$doc->appendChild($root);

// Element Node with Text Node
$book = $doc->createElement('book');
$title = $doc->createElement('title', 'Into to XML'); // 'Dune' is a Text Node
$book->appendChild($title);

// Attribute Node
$book->setAttribute('id', 'Book001'); // 'id' is an Attribute Node with value '001'

// Comment Node
$comment = $doc->createComment('This is a comment node in the XML');
$root->appendChild($comment);

// Append the book element node to the root
$root->appendChild($book);

// Save the XML to a string
$xmlString = $doc->saveXML();

// Output the XML
echo $xmlString;

?>
