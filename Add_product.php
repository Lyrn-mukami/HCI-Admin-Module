<?php 
require_once("Connection.php");


if (isset($_POST['submit'])) {


$file = $_FILES['product_image'];


$file_path = "ProductImages/";

$original_file_name= $_FILES['product_image']['name'];

$file_tmp_location = $_FILES['product_image']['tmp_name'];

$file_type = substr($original_file_name,strpos($original_file_name,'.'),strlen($original_file_name));

// items to be posted

$name = $_POST['product_name'];
$brand = $_POST['product_brand'];
$ram = $_POST['product_ram'];
$category = $_POST['product_category'];
$quantity = $_POST['product_quantity'];
$price = $_POST['product_price'];


	$sql = "INSERT INTO product (product_id, product_image, product_name, product_brand, product_ram, product_category, product_quantity, product_price) VALUES('$id', '$original_file_name', '$name', '$brand','$ram', '$category','$quantity','$price')" ;
$result = $link->query($sql);
if ($result) {
	echo "Added Successfully";
header('location:Product.php');
}
else{
			echo "Unsuccessful".mysqli_error($link);
		}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	 <meta charset="utf-8">
	 <link rel="stylesheet" href="css/navbar.css">
	 <link rel="shortcut icon" href="images\logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar">
		<div class="logo-link">
			<img src="images/Logo.png" class="logo" style='max-width:70px'>	
			<li></li><a href="Dashboard.html">Home</a></li>
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
<div class="row justify-content-center">
<form onsubmit="onformsubmit(); " method="POST" class="mb-3" enctype="multipart/form-data" style="text-align: center;">
	<h3>Add product</h3>
	 <div class="form-group mb-3"><input type="file" name="product_image"></div>
	 <div class="form-group mb-3"><input type="text" name='product_name'  placeholder="Enter Product name"/><br></div>
	 <div class="form-group mb-3"><input type="text" name='product_brand' placeholder="Enter Product brand"/><br></div>
	 <div class="form-group mb-3"><input type="text" name='product_ram' placeholder="Enter Product RAM"/><br></div>
	 <div class="form-group mb-3"><input type="" name='product_category' placeholder="Enter Product category"/><br></div>
	 <div class="form-group mb-3"><input type="text" name="product_quantity" placeholder="Enter Product quantity"/><br></div>
	 <div class="form-group mb-3"><input type="text" name='product_price' placeholder="Enter Product price" /><br></div>
	 
	 <div class="mb-3"><input type="submit" name="submit" value="ADD"></div>

</form>
</div>


</body>
</html>