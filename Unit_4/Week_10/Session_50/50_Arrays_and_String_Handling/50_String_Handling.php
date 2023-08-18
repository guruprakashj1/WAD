<!DOCTYPE html>
<html lang="en">
<head>
    <title>Strings</title>
</head>
<body>
    <?php
    //Creating a string
    $name = "Guru";
    $secondname = 'Prasad';

    $message = "Hello $name";
    echo $message . "<br>";

    //string functions
    //strlen

    echo strlen($name) . "<br>";

    //strtoupper and strtolower
    echo strtoupper($name) . "<br>";
    echo strtolower($name) . "<br>";

    //strpos()
    echo strpos($name, "r") . "<br>";

    //str_replace()
    echo str_replace("Guru", "Guru Prasad", $message) . "<br>";

    //substr()
    echo substr($name, 0, 1) . "<br>";

    ?>
    
    
</body>
</html>