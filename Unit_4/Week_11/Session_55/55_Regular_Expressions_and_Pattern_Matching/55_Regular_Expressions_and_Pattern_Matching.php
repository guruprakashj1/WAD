<?php

    // Connect to the MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "my_database";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST["email"];
    $name = $_POST["name"];
    $lname = $_POST["lname"];

    $email_pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/";

    //validate email 
    if (preg_match($email_pattern, $email))
    {
        echo "Email is valid";
        $sql = "INSERT INTO users (firstname , lastname , email) VALUES ('$name','$lname','$email')";

        if ($conn->query($sql) === TRUE) {
            echo "Email registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        
    }
    else
    {
        echo "Email is not valid";
    }

    $conn->close();


?>
