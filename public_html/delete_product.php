<?php
include 'connect_db.php';
if(!empty($_GET['id'])){
  $prod_id = $_GET['id'];
  $sql = "DELETE FROM product WHERE id=$prod_id";
  if ($conn->query($sql) === TRUE) {
  //    echo "Deleted successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
} 
header('Location: product.php?msg=Deleted successfully');

?>

