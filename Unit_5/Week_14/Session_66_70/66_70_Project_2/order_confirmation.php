<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
</head>
<body>
    <h2>Order Confirmation</h2>
    <?php
    if (isset($_GET['order_id'])) {
        $order_id = $_GET['order_id'];
        echo "Your order with Order ID $order_id has been placed successfully.";
        // Display additional order details if needed
    } else {
        echo "Order ID not found.";
    }
    ?>
</body>
</html>
