<!-- view_blogs.php -->
<!DOCTYPE html>
<html>
<head>
    <title>View All Blogs</title>
</head>
<body>
    <h1>View All Blogs</h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blog_system";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM blogs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p>" . $row['content'] . "</p>";
            echo "<p>Author: " . $row['author_id'] . "</p>";
            echo "<p>Created at: " . $row['created_at'] . "</p>";
            echo "<hr>";
        }
    } else {
        echo "No blogs found.";
    }

    $conn->close();
    ?>
    <a href="dashboard.php">Back to Dashboard</a>
</body>
</html>
