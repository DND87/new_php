<?php
include 'connect_db.php';
$cate_id = $_GET['cate_id'];
$sql = "SELECT *, product.name as product_name  FROM product
inner join category on product.category_id = category.id
where category_id = $cate_id" ;
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
<table  style="width:100%; background-color: #ff9999;">
  <tr>
    <th style="background-color: #ffe6e6;">ID</th>
    <th style="background-color: #ffe6e6;">Name</th>
    <th style="background-color: #ffe6e6;">Category</th>
    <th style="background-color: #ffe6e6;">Price</th>
    <th style="background-color: #ffe6e6;">Unit</th>
  </tr>
<?php
  while($row = mysqli_fetch_assoc($result)) {
?>
  <tr>
    <td><?php echo $row["id"];?></td>
    <td><?php echo $row["product_name"];?></td>
    <td><?php echo $row["name"];?></td>
    <td><?php echo $row["price"];?></td>
    <td><?php echo $row["unit"];?></td>
  </tr>
<?php
}
?>
</table>
<a href="category.php">Back</a>
<?php
} else {
  echo "No results found";
}
mysqli_close($conn);
?>

