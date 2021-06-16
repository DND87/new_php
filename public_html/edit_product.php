<?php
include 'connect_db.php';
if(!empty($_GET['id'])){
  $prod_id = $_GET['id'];
  $sql = "SELECT * FROM product WHERE id=$prod_id";
  $result = mysqli_query($conn, $sql);
  $prod = mysqli_fetch_assoc($result);
/*	$cate_id = $_GET['cate_id'];
	$prod_name = $_GET['prod_name'];
	$price = $_GET['price'];
	$unit = $_GET['unit'];
	$sql = "INSERT INTO product(category_id, name, price, unit ) VALUES ($cate_id,'$prod_name',$price,'$unit')";
 	if ($conn->query($sql) === TRUE) {
  		echo "Updated successfully";
	} else {
  		echo "Error: " . $sql . "<br>" . $conn->error;
	}*/
}
$sql = "SELECT * FROM category";
$result = mysqli_query($conn, $sql);
?>
<html>
<body>

<h2>Edit product</h2>

<form action="">
  <label for="pname">Product name:</label><br>
  <input type="text" id="pname" name="prod_name" value="<?php echo $prod['name']?>"><br>
  <label for="cname">Category name:</label><br>
  <select id="cname" name="cate_id" >
	<?php
  	while($row = mysqli_fetch_assoc($result)) {
	?>
    <option <?php  
        if($row['id']==$prod['category_id']){
          echo 'selected';          
        }
        ?> value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
	
  <?php
	}
	?> 

  </select><br>
  <label for="prname">Price:</label><br>
  <input type="text" id="prname" name="price" value="<?php echo $prod['price']?>"><br>
  <label for="uname">Unit:</label><br>
  <input type="text" id="uname" name="unit" value="<?php echo $prod['unit']?>"><br>
  <input type="submit" value="Save">
</form> 
<br>
<a href="product.php">Back to Product list</a>

</body>
</html>

