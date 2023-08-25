<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newreg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

// Retrieving form data using POST method
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Simple validation
if (empty($username) || empty($email) || empty($password)) {
    echo "All fields are required!";
} else {
    // Perform SQL insertion
    $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>