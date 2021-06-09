<?php
$servername = "mysql";
$username = "root";
$password = "rootpassword";
$dbname = "hoa_xuan";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>