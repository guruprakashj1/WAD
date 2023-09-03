<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comments_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

//Retrieve the data 
$name = $_POST['name'];
$comment = $_POST['comment'];

// Insert data into database
$sql = "INSERT INTO comments (name, comments) VALUES ('".$_POST["name"]."','".$_POST["comment"]."')";
if ($conn->query($sql) === TRUE)
{
    echo "New record created successfully";
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>