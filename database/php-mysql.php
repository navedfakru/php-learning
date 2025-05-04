<?php
$host = "localhost";
$username = "root";
$password = null;
$database = "college";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo "<br>";
 $result = $conn->query("show tables")->fetch_all();
 print_r($result);
?>