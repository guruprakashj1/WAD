<html>
<head>
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>
    <?php
    //Creating an array
    $fruitarr = array("mango", "banana", "apple");
    $colorarr = ["red", "yellow", "green"];
    //Accessing an array - using index
    echo $fruitarr[0] . "<br>";
    echo $colorarr[2] . "<br>";

    // modify array
    $fruitarr[0] = "orange";
    echo $fruitarr[0] . "<br>";

// loop through array
    for($i = 0; $i < count($fruitarr); $i++){
        echo $fruitarr[$i] . "<br>";
    }

//multi-dimensional array
$fc = [
    ["fruit", "color"],
    ["apple", "red"],
    ["banana", "yellow"],
    ["mango", "green"]
];
echo $fc[1][0] .$fc[1][1]. "<br>";
//sort array
sort($fruitarr);
for($i = 0; $i < count($fruitarr); $i++){
    echo $fruitarr[$i] . "<br>";
}




    ?>
    
    
</body>
</html>