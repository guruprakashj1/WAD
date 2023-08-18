<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn -> connect_error) {
    die("Connection failed: " . $conn -> connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM mytable";
$result = $conn -> query($sql);

//Output of result
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo $row["message"];
    }
}else{
    echo "No results";
}

// Close connection
$conn -> close();

?>