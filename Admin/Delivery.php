<?php
require("connection.php");

$id= $_GET['order_id'];
$result2=mysqli_query($link,"SELECT * FROM shippingdetails WHERE `order_id`='$id'");
$row=mysqli_fetch_array($result2);
if($row){
    if(isset($_POST['send'])){
          $sql_order=mysqli_query($link," UPDATE orders set status='completed' where `order_id`='$id' "); 
          if($sql_order){  
            echo '<script>alert("Order Complete"); window.location.href="View_orders.php"</script>';
            include_once("Update_quantity.php");
            return true;
          }else{ 
            echo mysqli_error($link);
          }
      
      }
}else{
    echo '<script>alert("No shipping information available"); window.location.href="View_orders.php"</script>';
}

?>
<!DOCTYPE html>
<html>
    <head>
    <title>Shipping</title>
	<!--Bootstrap CSS-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <link rel="stylesheet" type="text/css" href="css/forms.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="shortcut icon" href="images\logo.png" type="image/x-icon">
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
    <main class="main">
        <div class="container">
<form action="" method="post" class="card" style='margin-top:80px;' >
            <div class="card-body">
              <div class="row mb-3">
                <div class="col-sm-3">
                <label for="order_id" class="mb-0">Order ID:</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" readonly required id="order_id" name="Order_id" value="<?php echo $row['order_id']; ?>">
                </div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label for="full_name" class="mb-0">Full Name:</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" readonly required id="full_name" name="Full_name" value="<?php echo $row['fullName']; ?>">
                </div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label for="address" class="mb-0">Address:</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" readonly required id="address" name="Address" value="<?php echo $row['address']; ?>">
                </div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label for="email_add" class="mb-0">Email:</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="Email" class="form-control" readonly required id="email_add" name="email_address" value="<?php echo $row['email']; ?>">
                </div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label for="phone_number" class="mb-0">Phone Number:</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" readonly required id="phone_number" name="Phone_Number" value="<?php echo $row['phoneNo']; ?>">
                </div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label for="city" class="mb-0">City:</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text"  class="form-control" readonly required id="city" class="City" name="user_password" value="<?php echo $row['city']; ?>">
                </div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label for="postal_code" class="mb-0">Postal Code:</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" readonly required id="postal_code" name="Postal_Code" value="<?php echo $row['postalCode']; ?>">
                </div>
              </div>
              <div class="row">
                  <div class="col-sm-3"></div>
                <div class="col-sm-9 text-secondary">
                <input type="submit" class="btn btn-primary px-4" id="send" name="send" value="Complete Order"> 
                </div>
              </div>
            </div>
</div>
  </form>
</main>
</body>
</html>