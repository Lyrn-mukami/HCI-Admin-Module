<?php require("connection.php");
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<!--Bootstrap CSS-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">

	<link rel="shortcut icon" href="images\logo.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">

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

		
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="card">
						<div class="card-body">
							<div>
								<img src="images/user.png" style="width: 50px; height: 50px;">
								<h4 class="header-title mt-0 mb-4">Total Customers</h4>
								<div>
									<h2 class="fw-normal pt-2 mb-1">

										<?php
										$sqluser="SELECT count(`user_id`) as count1 FROM tbl_users WHERE `role` = 'client' ";
										$result=mysqli_query($link, $sqluser);
										while ($row = mysqli_fetch_assoc($result)) {
											echo $row['count1'];
										}
										?>		
									</h2>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="card">
						<div class="card-body">
							<div>
								<img src="images/wallet.png" style="width: 50px; height: 50px;">
								<h4 class="header-title mt-0 mb-4">Total Earnings</h4>
								<div>
									<h2 class="fw-normal pt-2 mb-1">

										<?php
										$sqltotal="SELECT sum(`total_price`) as earnings FROM orders WHERE `status` = 'completed' ";
										$result0=mysqli_query($link, $sqltotal);
										while ($row = mysqli_fetch_assoc($result0)) {
											if($row>0){
												echo "ksh. ";
												echo $row['earnings'];
											}else{
												echo '0';
											}
										}
										?>		
									</h2>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="card">
						<div class="card-body">
							<div>
								<img src="images/shopping-bag.png" style="width: 50px; height: 50px;">
								<h4 class="header-title mt-0 mb-4">Completed orders</h4>
								<div>
									<h2 class="fw-normal pt-2 mb-1">

										<?php
										$sqlpenorder="SELECT COUNT(`order_id`) as pend FROM orders WHERE `status` = 'completed' ";
										$result2=mysqli_query($link, $sqlpenorder);
										while ($row = mysqli_fetch_assoc($result2)) {
											echo $row['pend'];
										}
										?>		
									</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<table class="table table-hover table-bordered">
						<thead>
							<th>Product Name</th>
							<th>Product Ram</th>
							<th>Product Quantity</th>

							<tr></tr>
						</thead>
						<tbody>
							<?php 
							$sqlprod="SELECT `product_name`,`product_ram`,`product_quantity`FROM `product` WHERE product_quantity <= '5' ORDER BY product_quantity ASC";
							$result3=mysqli_query($link, $sqlprod);
							while ($row = mysqli_fetch_assoc($result3)) { ?>
								<tr>
									<td><?php echo $row['product_name'] ?></td>
									<td><?php echo $row['product_ram'] ?></td>
									<td><?php echo $row['product_quantity'] ?></td>
								</tr>
								<?php
							}
							?>	

						</tbody>
					</table>	
				</div>
				<div class="col-sm-6">
					<table class="table table-hover table-bordered">
						<thead>
							<th>Order ID</th>
							<th>Order Date</th>
							<th>Total price</th>
							<th>Status</th>

							<tr></tr>
						</thead>
						<tbody>
							<?php 
							$sqlprod="SELECT `order_id`,`date`,`total_price`,`status` FROM `orders` WHERE status = 'pending'";
							$result3=mysqli_query($link, $sqlprod);
							while ($row = mysqli_fetch_assoc($result3)) { ?>
								<tr>
									<td><?php echo $row['order_id'] ?></td>
									<td><?php echo $row['date'] ?></td>
									<td><?php echo $row['total_price'] ?></td>
									<td><?php echo $row['status'] ?></td>
								</tr>
								<?php
							}
							?>	
							
						</tbody>
					</table>	
				</div>
			</div>
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


	<!--Javascript bundle-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>