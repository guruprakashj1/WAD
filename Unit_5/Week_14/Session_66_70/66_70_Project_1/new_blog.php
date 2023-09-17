<!-- new_blog.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create a New Blog</title>
</head>
<body>
    <h1>Create a New Blog</h1>
    <form action="create_blog.php" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" required><br><br>
        <label for="content">Content:</label>
        <textarea name="content" rows="4" required></textarea><br><br>
        <input type="submit" value="Create Blog">
    </form>
</body>
</html>
