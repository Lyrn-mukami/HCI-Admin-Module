<?php
require_once("Connection.php");
if (isset($_GET['delete'])) {
$id =$_GET['delete'];

$sql = "DELETE FROM  product WHERE product_id='$id' ";
$result = $link->query($sql);
if($result){
	echo '<script>alert("Deleted successfully"); window.location.href="Product.php"</script>';
}
else{
	die(mysqli_error($link));
}
}


?>