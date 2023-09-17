<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
<body>
    <h2>Checkout</h2>
    <form method="post" action="process_checkout.php">
        <label for="shipping_address">Shipping Address:</label>
        <input type="text" name="shipping_address" required><br><br>
        
        <label for="payment_info">Payment Information:</label>
        <input type="text" name="payment_info" required><br><br>

        <input type="submit" value="Place Order">
    </form>
</body>
</html>
