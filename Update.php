<?php
require_once("Connection.php");

$id = $_GET['update'];
if (isset($_POST['submit'])) {
// items to be posted
$image = $_POST['product_image'];
$name = $_POST['product_name'];
$brand = $_POST['product_brand'];
$ram = $_POST['product_ram'];
$category = $_POST['product_category'];
$quantity = $_POST['product_quantity'];
$price = $_POST['product_price'];

$sqlUpdate = "UPDATE product SET product_id='$id',product_image='$image',product_name='$name',product_brand='$brand',product_ram='$ram',product_category='$category',product_quantity='$quantity',product_price='$price' where product_id = '$id' " ;
$result = $link->query($sqlUpdate);

if ($result) {
	echo "Updated Successfully";
header('location:Product.php');
}
else{
			echo "Update unsuccessful".mysqli_error($link);
		}
}

if (isset($_GET['update'])){
	$id = $_GET['update'];
$sql = "SELECT * FROM product WHERE product_id = $id";

$result1 = $link->query($sql);
$rowcount =mysqli_num_rows($result1);
if ($rowcount==1){
	$row = $result1 ->fetch_array();
	$disp_image = $row['product_image'];
	$disp_name = $row['product_name'];
	$disp_brand = $row['product_brand'];
	$disp_ram = $row['product_ram'];
	$disp_category = $row['product_category'];
	$disp_quantity = $row['product_quantity'];
	$disp_price = $row['product_price'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD functionality</title>
	 <meta charset="utf-8">
	 <link rel="stylesheet" href="style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</head>
<body>


<div class="row justify-content-center">
<form onsubmit="onformsubmit(); " method="POST" class="mb-3" enctype="multipart/form-data" style="text-align: center;">
	<h3>Update product</h3>
	 <div class="form-group mb-3"><input type="file" name="product_image"></div>
	 <div class="form-group mb-3"><input type="text" name='product_name' value="<?php echo $disp_name?>" /><br></div>
	 <div class="form-group mb-3"><input type="text" name='product_brand' value="<?php echo $disp_brand?>" /><br></div>
	 <div class="form-group mb-3"><input type="text" name='product_ram' value="<?php echo $disp_ram?>"/><br></div>
	 <div class="form-group mb-3"><input type="" name='product_category' value="<?php echo $disp_category?>"/><br></div>
	 <div class="form-group mb-3"><input type="text" name="product_quantity" value="<?php echo $disp_quantity?>"/><br></div>
	 <div class="form-group mb-3"><input type="text" name='product_price' value="<?php echo $disp_price?>"/><br></div>
	 
	 <div class="mb-3"><input type="submit" name="submit" value="UPDATE"></div>

</form>
</div>


</body>
</html>