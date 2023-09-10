<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors
    if (isset($_FILES["xmlfile"]) && $_FILES["xmlfile"]["error"] == 0) {
        $filename = $_FILES["xmlfile"]["name"];
        $filetype = $_FILES["xmlfile"]["type"];
        $filesize = $_FILES["xmlfile"]["size"];
        
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if ($ext != "xml") {
            echo "Error: Please select a valid XML file.";
            exit;
        }

        // Parse the XML
        $xmlString = file_get_contents($_FILES["xmlfile"]["tmp_name"]);
        $xml = new DOMDocument();
        $xml->loadXML($xmlString);

        // Display the values (for this example, we'll assume it's a list of books)
        $books = $xml->getElementsByTagName('book');
        foreach ($books as $book) {
            $title = $book->getElementsByTagName('title')->item(0)->nodeValue;
            $author = $book->getElementsByTagName('author')->item(0)->nodeValue;
            $year = $book->getElementsByTagName('year')->item(0)->nodeValue;
            
            echo "Title: $title, Author: $author 
            Year: $year
            <br>";
        }
    } else {
       
        echo "Error: ";
        
    }
}

?>
