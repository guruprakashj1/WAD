<html>
<head>
    <title>Control Statements</title>
</head>
<body>
    <h1> Conditional Statements </h1>
    <?php
    $age = 25;
    if($age >= 18){
        echo "You are eligible to vote";
    }else{
        echo "You are not eligible to vote";
    }
    ?>

    <h1> Switch Statement </h1>
    <?php
    $color = "yellow";
    switch($color){
        case "red":
            echo "APPLE";
            break;
        case "yellow":
            echo "BANANA";
            break;
        case "green":
            echo "MANGO";
            break;
    }
    
    ?>
</body>
</html>
