<html>
    <head>
        <title>Data Types</title>
    </head>
    <body>
        <h1>Integer</h1>
        <?php
        $age = (int) + 40;
        echo "Age: $age<br>";
        ?>
        <h1>Float</h1>
        <?php
        $bataPrice = (float) 99.99;
        echo "Bata Price is Rs = " . $bataPrice . "<br>";    
        ?>

        <h1>String</h1>
        <?php
        $name = (string) "Guru";
        echo "Name: $name<br>";
        ?>    
        
        <h1>Boolean</h1>
        <?php
        $isMarried = (bool) true;
        echo "Is Married: $isMarried<br>";

        if($isMarried){
            echo "Yes, he is am married";
        }else{
            echo "No, he is not married";
        }
        ?>
        <h1>Null</h1>
        <?php
        $var = null;
        echo "Value of var is $var<br>";

        ?>

        </body>
</html>