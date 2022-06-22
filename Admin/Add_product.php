<?php 
require_once("Connection.php");


if (isset($_POST['submit'])) {


$file = $_FILES['product_image'];
$name = $_POST['product_name'];

$file_path = "ProductImages/";

$original_file_name= $_FILES['product_image']['name'];

$file_tmp_location = $_FILES['product_image']['tmp_name'];

$file_type = substr($original_file_name,strpos($original_file_name,'.'),strlen($original_file_name));

$select="SELECT * FROM product where product_name= '$name'";
$result=$link->query($select);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo" <h2>product already exists</h2>";
}
else{
	if(move_uploaded_file($file_tmp_location, $file_path.$original_file_name)){
		$brand = $_POST['product_brand'];
		$ram = $_POST['product_ram'];
		$category = $_POST['product_category'];
		$quantity = $_POST['product_quantity'];
		$price = $_POST['product_price'];
	$sql = "INSERT INTO product(product_name,product_brand, product_price,product_ram, product_category,product_image,product_quantity)VALUES('$name','$brand','$price','$ram','$category','$original_file_name','$quantity')" ;

	$result = $link->query($sql);
if ($result) {
	echo '<script>alert("Added Successfully"); window.location.href="Product.php"</script>';

}
else{
			echo "Unsuccessful".mysqli_error($link);
		}

	}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	 <meta charset="utf-8">
	 <link rel="stylesheet" href="css/navbar.css">
	 <link rel="stylesheet" type="text/css" href="css/forms.css">
	 <link rel="stylesheet" type="text/css" href="css/product_forms.css">
	 <link rel="shortcut icon" href="images\logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar fixed-top navbar-default navbar-fixed-top">
		<div class="logo-link">
			<img src="images/Logo.png" class="logo" style='max-width:60px'>	
			<li></li><a href="Dashboard.php">Home</a></li>
		</div>
		<div class="search-profile">
			
			  <div class="profile">
			  <img src="Profile_images/avatar_1.png">
			  <div class="dropdown-content">
			  	<a href="Profile.php">Profile</a>
			  	<a href="logout.php">Log out</a>
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
<div class="main" style="margin-top: 60px;">
        <div class="container">
<form onsubmit="onformsubmit(); " method="POST" class="card" enctype="multipart/form-data" style="text-align: center;">
	<h3>Add product</h3>
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
				<input type="text" name='product_name' class="form-control" placeholder="Enter Product name"/></div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label class="mb-0">Brand:</label>
                </div>
                <div class="col-sm-9 text-secondary">
				<input type="text" name='product_brand' class="form-control" placeholder="Enter Product brand"/></div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label class="mb-0">RAM:</label>
                </div>
                <div class="col-sm-9 text-secondary">
				<input type="text" name='product_ram' class="form-control" placeholder="Enter Product RAM"/></div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label class="mb-0">Category:</label>
                </div>
                <div class="col-sm-9 text-secondary">
				<input type="text" name='product_category' class="form-control" placeholder="Enter Product category"/></div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label class="mb-0">Quantity:</label>
                </div>
                <div class="col-sm-9 text-secondary">
				<input type="text" name="product_quantity" class="form-control" placeholder="Enter Product quantity"/></div>
              </div>
			  <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label class="mb-0">Price:</label>
                </div>
                <div class="col-sm-9 text-secondary">
				<input type="text" name='product_price' class="form-control" placeholder="Enter Product price" /></div>
              <div class="row">
                  <div class="col-sm-3"></div>
                <div class="col-sm-9 text-secondary">
					<br>
                <input type="submit" class="btn btn-primary px-4" name="submit" value="Add"> 
                </div>
              </div>
            </div>
</div>
  </form>
</div>
</div>
</body>
</html>