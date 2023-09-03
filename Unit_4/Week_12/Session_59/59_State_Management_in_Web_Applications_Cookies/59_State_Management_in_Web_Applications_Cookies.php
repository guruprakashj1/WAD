<!DOCTYPE html>
<html>
    <head>
        <title>State Management in Web Applications Cookies</title>
    </head>
    <body>
        <?php

        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $broswer = "unkonw";

        if(strpos($userAgent, 'Firefox') !== FALSE)
        {
            $broswer = "Mozilla Firefox";
        }
        else if(strpos($userAgent, 'Chrome') !== FALSE)
        {
            $broswer = "Google Chrome";
        }
        else if(strpos($userAgent, 'MSIE') !== FALSE)
        {
            $broswer = "Internet Explorer";
        }
        else if(strpos($userAgent, 'Edge') !== FALSE)
        {
            $broswer = "MS Edge";
        }
        else if(strpos($userAgent, 'Opera') !== FALSE)
        {
            $broswer = "Opera";
        }

        $lastAccessTime = date("d-m-Y H:i:s");
        setcookie("lastAccessTime", $lastAccessTime, time() + 60 * 60 * 24 * 30);
        setcookie("browser", $broswer, time() + 60 * 60 * 24 * 30);
        ?>




        <h1> Last access time and Browser details </h1>
        <h2><?php echo $lastAccessTime;?></h2>
        <h2><?php echo $broswer;?></h2>

    </body>
</html>