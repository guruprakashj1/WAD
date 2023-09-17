<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h2>Add Product</h2>
    <form method="post" action="add_product_process.php">
        <label for="name">Product Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="description">Description:</label>
        <textarea name="description" required></textarea><br><br>

        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" required><br><br>

        <input type="submit" value="Add Product">
    </form>
</body>
</html>
