<?php
require_once("Connection.php");
if (isset($_GET['delete'])) {
$id =$_GET['delete'];

$sql = "DELETE FROM  product WHERE product_id='$id' ";
$result = $link->query($sql);
if($result){
	header("location:Product.php");
	echo "Deleted Successfully";
}
else{
	die(mysqli_error($link));
}
}


?>