<html>
<head>
    <title>Loops</title>
</head>
<body>
    <h1>for</h1>
    <?php
    for($i = 0; $i < 10; $i++){
        echo $i . "<br>";
    }
    ?>
    <h1>while</h1>
    <?php
    $i = 0;
    while($i < 10){
        echo $i . "<br>";
        $i++;
    }
    ?>

    <h1>do while</h1>
    <?php
    $i = 1;
    do{
        echo $i . "<br>";
        $i++;
    }while($i < 0);
    ?>

    <h1>foreach</h1>
    <?php

    $arr = array("apple", "banana");
    foreach($arr as $value){
        echo $value . "<br>";
    }

    ?>

</body>
</html>