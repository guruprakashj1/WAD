<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit(); // Stop script execution
}

// The rest of your dashboard.php code goes here
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <p>This is your dashboard.</p>
    <a href="new_blog.php">Create a New Blog</a>
    <a href="view_blogs.php">View All Blogs</a>
    <a href="logout.php">Logout</a>
</body>
</html>
