<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT id, username, password FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if($row['password'] == $password) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
        header("Location: create_blog.php");
    } else {
        echo "Wrong password";
    }
} else {
    echo "User not found";
}