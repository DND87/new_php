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

$sql = "SELECT * FROM category";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row

?>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<table  style="width:100%; background-color: orange;">
  <tr>
    <th style="background-color: blue;">ID</th>
    <th style="background-color: blue;">Name</th>
  </tr>
<?php
  while($row = mysqli_fetch_assoc($result)) {
?>
  <tr>
    <td><?php echo $row["id"];?></td>
    <td><?php echo $row["name"];?></td>
  </tr>
<?php
}
?>
</table>

<?php
} else {
  echo "No results found";
}
mysqli_close($conn);
?>

