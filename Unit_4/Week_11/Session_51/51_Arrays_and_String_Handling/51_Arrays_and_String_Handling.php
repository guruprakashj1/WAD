<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PHP and MySQL Example</title>
</head>
<body>
  <?php
    // Connect to the MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "my_database";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve data from the "users" table
    $sql = "SELECT id, firstname, lastname FROM users";
    $result = $conn->query($sql);

    // Create an array to store the retrieved data
    $users = array();

    // Loop through the retrieved data and add it to the array
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $users[] = array(
          "id" => $row["id"],
          "firstname" => $row["firstname"],
          "lastname" => $row["lastname"]
        );
      }
    }

    // Close the MySQL connection
    $conn->close();

    // Print the retrieved data
    echo "<table>";
    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>";
    foreach ($users as $user) {
      echo "<tr><td>".$user['id']."</td><td>".$user['firstname']."</td><td>".$user['lastname']."</td></tr>";
    }
    echo "</table>";
  ?>
</body>
</html>
