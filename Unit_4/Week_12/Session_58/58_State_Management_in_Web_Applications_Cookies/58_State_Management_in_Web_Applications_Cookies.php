<!DOCTYPE html>
<html>
    <head>
        <title>State Management in Web Applications: Cookies</title>
    </head>
    <body>

    <h1>Cookies coutner</h1>
    <?php
     

    if(isset($_COOKIE['counter'])) {
        $counter = $_COOKIE['counter'];
        $counter++;
        setcookie('counter', $counter, time() + 3600);
        
    } else {
        $counter = 1;
        
    }
    setcookie('counter', $counter, time() + 3600);
    echo "You have visited this page $counter times";
    ?>
    </body>
</html>