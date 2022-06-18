<?php require("connection.php"); ?>
<!DOCTYPE html>
<html>
    <head>
    <title>Items Ordered</title>
	<!--Bootstrap CSS-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	 <link rel="stylesheet" type="text/css" href="css/tables.css"> 
     <link rel="stylesheet" type="text/css" href="css/forms.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/View_item_order.css">
    
    <link rel="shortcut icon" href="images\logo.png" type="image/x-icon">
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
<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="View_orders.php">Back</a></li>
        </ol>
      </nav>
      <!-- /Breadcrumb -->
    <?php

    $id = $_GET['order_id'];
   $sql="SELECT product.product_name, item_order.* FROM item_order LEFT JOIN product ON product.product_id = item_order.product_id WHERE order_id= '$id' " ; 
   if($result=mysqli_query($link, $sql)){
	if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-hover table-bordered' id='myTable'>";
        echo "<div>";
        echo "<thread>" ;
            echo "<tr>";
                echo "<th>Item Order ID</th>";
                echo "<th>Order ID</th>";
                echo "<th>Product ID</th>";
                echo "<th>Product Name</th>";
                echo "<th>Quantity</th>";
            echo "</tr>";
            echo "</thread";
        while($row = mysqli_fetch_array($result)){
            echo "<tbody>";
            echo "<tr>";
                echo "<td>" . $row['item_order_id'] . "</td>";
                echo "<td>" . $row['order_id'] . "</td>";
                echo "<td>" . $row['product_id'] . "</td>";
                echo "<td>" . $row['product_name'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
      
  } else{
      echo "No records found.";
  }
} else{
  echo "ERROR " . mysqli_error($link);
 }


       
?>


</main>
    </body>
</html>