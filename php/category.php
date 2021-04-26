<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hoa_xuan";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM category";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - name: " . $row["name"]. "<br>";
  }
} else {
  echo "No results found";
}

mysqli_close($conn);
?>