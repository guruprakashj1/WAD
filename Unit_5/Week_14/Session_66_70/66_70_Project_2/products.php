<!DOCTYPE html>
<html>
<head>
    <title>Product Catalog</title>
</head>
<body>
    <h2>Product Catalog</h2>
    <div class="product-container">
        <?php
        include_once('db_config.php');

        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="product">';
                echo '<h3>' . $row['name'] . '</h3>';
                echo '<p>Description: ' . $row['description'] . '</p>';
                echo '<p>Price: $' . $row['price'] . '</p>';
                echo '<form method="post" action="add_to_cart.php">';
                echo '<input type="hidden" name="product_id" value="' . $row['id'] . '">';
                echo '<input type="number" name="quantity" value="1" min="1">';
                echo '<input type="submit" value="Add to Cart">';
                echo '</form>';
                echo '</div>';
            }
        } else {
            echo "No products available.";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
