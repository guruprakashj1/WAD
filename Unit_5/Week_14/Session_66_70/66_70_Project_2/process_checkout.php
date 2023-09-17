<?php
session_start();
include_once('db_config.php');

function calculateTotalAmount($cart, $conn) {
    $total = 0;

    foreach ($cart as $product_id => $quantity) {
        $sql = "SELECT price FROM products WHERE id = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("i", $product_id);
            $stmt->execute();
            $stmt->bind_result($price);
            $stmt->fetch();

            $total += $price * $quantity;

            $stmt->close();
        }
    }

    return $total;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $shipping_address = $_POST['shipping_address'];
    $payment_info = $_POST['payment_info'];

    // Check if the cart exists and is not empty
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        // Calculate the total order amount based on cart contents
        $total_amount = calculateTotalAmount($_SESSION['cart'], $conn);

        // Save the order details in the database
        $user_id = $_SESSION['user_id'];

        $sql = "INSERT INTO orders (user_id, total_amount, shipping_address) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ids", $user_id, $total_amount, $shipping_address);
            if ($stmt->execute()) {
                // Order placed successfully, save order items and proceed to order confirmation
                $order_id = $stmt->insert_id;
                if (saveOrderItems($order_id, $_SESSION['cart'], $conn)) {
                    // Clear the shopping cart
                    unset($_SESSION['cart']);

                    // Redirect to the order confirmation page
                    header("Location: order_confirmation.php?order_id=$order_id");
                    exit();
                } else {
                    // Handle order item saving failure
                    echo "Order item saving failed. Please try again.";
                }
            } else {
                // Handle order placement failure
                echo "Order placement failed. Please try again.";
            }
            $stmt->close();
        } else {
            // Handle database error
            echo "Database error: " . $conn->error;
        }
    } else {
        echo "Your cart is empty. Add products to your cart before checkout.";
    }
}

$conn->close();

function saveOrderItems($order_id, $cart, $conn) {
    foreach ($cart as $product_id => $quantity) {
        $sql = "INSERT INTO orders_items1 (order_id, product_id, quantity) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("iii", $order_id, $product_id, $quantity);
            if (!$stmt->execute()) {
                return false; // Return false if saving an order item fails
            }
            $stmt->close();
        } else {
            return false; // Return false if preparing the statement fails
        }
    }

    return true; // All order items were saved successfully
}
?>
