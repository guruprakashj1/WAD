<!DOCTYPE html>
<html>
<head>
    <title>Comment system</title>
</head>

<body>
    <form action="process.php" method="post">
        <lable for="name">Name:</lable>
        <input type="text" name="name" id="name" placeholder="Enter your name" required><br>
        <label for="comment">Comment:</label><br>
        <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Enter your comment" required></textarea><br>
        <input type="submit" value="Submit">
    </form>

    <?php include 'display.php'; ?>

</body>
</html>