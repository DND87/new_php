<?php
include 'connect_db.php';
if(!empty($_GET)){
	$cate_id = $_GET['cate_id'];
	$prod_name = $_GET['prod_name'];
	$price = $_GET['price'];
	$unit = $_GET['unit'];
	$sql = "INSERT INTO product(category_id, name, price, unit ) VALUES ($cate_id,'$prod_name',$price,'$unit')";
 	if ($conn->query($sql) === TRUE) {
  		echo "New product created successfully";
	} else {
  		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
$sql = "SELECT * FROM category";
$result = mysqli_query($conn, $sql);

?>
<html>
<body>

<h2>Create new product</h2>

<form action="">
  <label for="pname">Product name:</label><br>
  <input type="text" id="pname" name="prod_name" value=""><br>
  <label for="cname">Category name:</label><br>
  <select id="cname" name="cate_id" >
	<?php
  	while($row = mysqli_fetch_assoc($result)) {
	?>
    <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
	<?php
	}
	?> 
  </select><br>
  <label for="prname">Price:</label><br>
  <input type="text" id="prname" name="price" value=""><br>
  <label for="uname">Unit:</label><br>
  <input type="text" id="uname" name="unit" value=""><br>
  <input type="submit" value="Save">
</form> 
<br>
<a href="product.php">Back to Product list</a>

</body>
</html>

