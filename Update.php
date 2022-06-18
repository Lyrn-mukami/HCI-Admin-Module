<?php
require_once("Connection.php");

$id = $_GET['update'];
if (isset($_POST['submit'])) {
// items to be posted
$file = $_FILES['product_image'];
$name = $_POST['product_name'];
$brand = $_POST['product_brand'];
$ram = $_POST['product_ram'];
$category = $_POST['product_category'];
$quantity = $_POST['product_quantity'];
$price = $_POST['product_price'];



$file_path = "ProductImages/";

$original_file_name= $_FILES['product_image']['name'];

$file_tmp_location = $_FILES['product_image']['tmp_name'];

$file_type = substr($original_file_name,strpos($original_file_name,'.'),strlen($original_file_name));

if  (!empty($_FILES["product_image"]["name"])){
	$sqlUpdate = "UPDATE product SET product_id='$id',product_image='$original_file_name',product_name='$name',product_brand='$brand',product_ram='$ram',product_category='$category',product_quantity='$quantity',product_price='$price' where product_id = '$id' " ;
	$result = $link->query($sqlUpdate);
}else{
	$sqlUpdate2 = "UPDATE product SET product_id='$id',product_name='$name',product_brand='$brand',product_ram='$ram',product_category='$category',product_quantity='$quantity',product_price='$price' where product_id = '$id' " ;
	$result = $link->query($sqlUpdate2);
}




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
	<title>Update Product</title>
	 <meta charset="utf-8">
	 <link rel="stylesheet" href="css/navbar.css">
	 <link rel="stylesheet" type="text/css" href="css/forms.css">
	 <link rel="stylesheet" type="text/css" href="css/product_forms.css">
	 <link rel="shortcut icon" href="images\logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar">
		<div class="logo-link">
			<img src="images/Logo.png" class="logo" style='max-width:70px'>	
			<li></li><a href="Dashboard.php">Home</a></li>
		</div>
		<div class="search-profile">
			 <div class="search-container">
			    <form action="/action_page.php">
			      <input type="text" placeholder="Search.." name="search">
			      <button type="submit"><i class="fa fa-search"></i></button>
			    </form>
			  </div>
			  <div class="profile">
			  <img src="Profile_images/avatar_1.png">
			  <div class="dropdown-content">
			  	<a href="Profile.html">Profile</a>
			  	<a href="#">Log out</a>
			  </div>
			  </div>
		</div>
	</nav>

	<main class="content">
    <!-- Sidebar -->
<div class="wrapper">
    <nav id="sidebar">
        <ul>
            
            <li><a href="Add_product.php">Add Product</a></li>
            <li><a href="Add_admin.php">Add Admin</a></li>
            <li><a href="Product.php">View Products</a></li>
            <li><a href="View_orders.php">View Orders</a></li>
            <li><a href="View_users.php">View Customer Details</a></li>
        </ul>

    </nav>
</div>
<div class="main">
        <div class="container">

<form onsubmit="onformsubmit(); " method="POST" class="card" enctype="multipart/form-data" style="text-align: center;">
	<h3>Update product</h3>
	<div class="card-body">
              <div class="row mb-3">
                <div class="col-sm-3">
                <label class="mb-0">Product Image</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="file" class="form-control" name="product_image">
                </div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label class="mb-0">Name:</label>
                </div>
                <div class="col-sm-9 text-secondary">
				<input type="text" name='product_name' class="form-control" value="<?php echo $disp_name?>" />
				</div>
			</div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label class="mb-0">Brand:</label>
                </div>
                <div class="col-sm-9 text-secondary">
				<input type="text" name='product_brand' class="form-control" value="<?php echo $disp_brand?>" /></div></div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label class="mb-0">RAM:</label>
                </div>
                <div class="col-sm-9 text-secondary">
				<input type="text" name='product_ram' class="form-control" value="<?php echo $disp_ram?>"/></div></div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label class="mb-0">Category:</label>
                </div>
                <div class="col-sm-9 text-secondary">
				<input type="text" name='product_category' class="form-control" value="<?php echo $disp_category?>"/></div></div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label class="mb-0">Quantity:</label>
                </div>
                <div class="col-sm-9 text-secondary">
				<input type="text" name="product_quantity" class="form-control" value="<?php echo $disp_quantity?>"/></div></div>
			  <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label class="mb-0">Price:</label>
                </div>
                <div class="col-sm-9 text-secondary">
				<input type="text" name='product_price' class="form-control" value="<?php echo $disp_price?>"/></div></div>
                  <div class="col-sm-3"></div>
                <div class="col-sm-9 text-secondary">
					<br>
                <input type="submit" class="btn btn-primary px-4" name="submit" value="Update"> 
                </div>
              </div>
            </div>
</div>
  </form>
</div>
</div>


</body>
</html>