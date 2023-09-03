<!-- create_blog.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Blog</title>
</head>
<body>
    <h1>Create Blog</h1>
    <form action="create_blog_process.php" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" required><br><br>
        <label for="content">Content:</label>
        <textarea name="content" rows="6" cols="50" required></textarea><br><br>
        <input type="submit" value="Create Blog">
    </form>
</body>
</html>
