<?php
session_start();
include_once('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "INSERT INTO products (name, description, price) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssd", $name, $description, $price);
        if ($stmt->execute()) {
            // Product added successfully
            header("Location: products.php"); // Redirect back to the product catalog
            exit();
        } else {
            // Handle product addition failure
            echo "Product addition failed. Please try again.";
        }
        $stmt->close();
    } else {
        // Handle database error
        echo "Database error: " . $conn->error;
    }
}

$conn->close();
?>
