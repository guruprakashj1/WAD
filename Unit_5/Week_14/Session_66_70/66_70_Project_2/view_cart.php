<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
</head>
<body>
    <h2>Shopping Cart</h2>
    <?php
    if (empty($_SESSION['cart'])) {
        echo "Your cart is empty.";
    } else {
        echo '<table>';
        echo '<tr><th>Product</th><th>Quantity</th><th>Price</th><th>Total</th><th>Action</th></tr>';
        include_once('db_config.php');

        foreach ($_SESSION['cart'] as $product_id => $quantity) {
            $sql = "SELECT name, price FROM products WHERE id = $product_id";
            $result = $conn->query($sql);
            
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $product_name = $row['name'];
                $price = $row['price'];
                $total = $price * $quantity;

                echo "<tr>";
                echo "<td>$product_name</td>";
                echo "<td>$quantity</td>";
                echo "<td>$$price</td>";
                echo "<td>$$total</td>";
                echo "<td><a href='remove_from_cart.php?product_id=$product_id'>Remove</a></td>";
                echo "</tr>";
            }
        }

        echo '</table>';
        echo '<a href="checkout.php">Proceed to Checkout</a>';
        $conn->close();
    }
    ?>
</body>
</html>
