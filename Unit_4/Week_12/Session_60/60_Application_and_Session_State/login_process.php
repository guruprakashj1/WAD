<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_auth";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if($result->num_rows ==1){
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    header("Location: dashboard.php");
} else {
    echo "Invalid email or password";
}

$conn->close();
?>