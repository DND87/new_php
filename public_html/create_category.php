<?php
include 'connect_db.php';
$cate_name = $_GET['cate_name'];
$sql = "INSERT INTO category(name) VALUES ('$cate_name')";
if ($conn->query($sql) === TRUE) {
  echo "New category created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

<html>
<body>

<h2>Create new category</h2>

<form action="">
  <label for="cname">Category name:</label><br>
  <input type="text" id="cname" name="cate_name" value=""><br>
  <input type="submit" value="Save">
</form> 
<br>
<a href="category.php">Back to Category list</a>

</body>
</html>

