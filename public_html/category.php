<?php
include 'connect_db.php';
$sql = "SELECT * FROM category";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
?>
<br>
<a href="create_category.php">Add new</a>
<br><br>
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
    <td><a href="product.php?cate_id=<?php echo $row['id']; ?>"><?php echo $row["name"];?></a></td>
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

