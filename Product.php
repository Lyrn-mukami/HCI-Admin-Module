<!DOCTYPE html>
<html>
<head>
	<title>Products</title>

	<meta charset="utf-8">
	 
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/tables.css">

    <link rel="shortcut icon" href="images\logo.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<nav class="navbar fixed-top navbar-default navbar-fixed-top" id="navbar">
		<div class="logo-link">
			<img src="images/Logo.png" class="logo" style='max-width:70px'>	
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
<!-- <button class="btn btn-primary my-4" ><a href="Add_product.php " class="text-light">Add product</a> </button> -->
<div style="margin-left: -40px; margin-top: 60px;">
	<table id="Products" class="table table-hover table-bordered">
		<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Brand</th>
			<th>Price</th>
			<th>RAM</th>
			<th>Category</th>
			<th>Image</th>
			<th>Quantity</th>
			<th>Action</th>
		</tr>
	</thead>
<tbody>

<?php

require_once("Connection.php");
$sql = "SELECT * FROM product";
$results = $link->query($sql);
$rowcount =mysqli_num_rows($results);
if ($rowcount > 0) {
	while ($row = $results->fetch_assoc()) {
		$id = $row['product_id']; 
		?>

		<tr>
		<td><?php echo $row['product_id'] ?></td>
		<td><?php echo $row['product_name'] ?></td>
		<td><?php echo $row['product_brand'] ?></td>
		<td><?php echo $row['product_price'] ?></td>
		<td><?php echo $row['product_ram'] ?></td>
		<td><?php echo $row['product_category'] ?></td>
		<td><img src='ProductImages/<?php echo $row['product_image']; ?>' width="100" height="100" ></td>
		<td><?php echo $row['product_quantity'] ?></td>
		
		<td>
	<a class="btn btn-info" href="Update.php?update=<?php echo $id; ?>" class="text-light">Edit</a> &nbsp; <a class="btn btn-danger" href="Delete.php?delete=<?php echo $id; ?>" class="text-light">Delete</a></td>
	</tr>
	<?php
	}
}
else {
	echo "0 results";
}
?>
</tbody>
</table>
</div>
</main>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>
