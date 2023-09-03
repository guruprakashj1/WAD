<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comments_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

//Retrieve the comments from the database
$sql = "SELECT * FROM comments";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    // Output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "Name: " . $row["name"]. " - Comment: " . $row["comments"]. "<br>";
    }
}
else
{
    echo "No commnets yet ";
}

// Close connection
$conn->close();

?>