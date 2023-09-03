
<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
exit();
}
?>

<html>
    <head>
        <title>Dashboard</title>
    </head>
    <body>
    <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
    <h2> This is the Dashboard </h2>
    <a href="logout.php">Logout</a>

</body>
</html>
