<?php
session_start();
include_once('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($user_id, $username, $hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $user_id;
                $_SESSION['username'] = $username;
                header("Location: products.php");
                exit();
            } else {
                $_SESSION['error'] = "Incorrect password.";
                header("Location: login.php");
                exit();
            }
        } else {
            $_SESSION['error'] = "User not found.";
            header("Location: login.php");
            exit();
        }

        $stmt->close();
    } else {
        echo "Database error: " . $conn->error;
    }
}

$conn->close();
?>
