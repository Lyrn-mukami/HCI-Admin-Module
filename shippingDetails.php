<!DOCTYPE html>
<?php
$id = $_GET['id'];
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<header>
		<title>Shipping Details</title>
		<link rel="stylesheet"href="shippingDetails.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet"href="homepage.css">
	</header>
	<main>
		<div class="fixed-navbar">
            <div class="container">
                <div class="logo_div">
                    <a href = "users/homepage.php"><img src="logo.png"alt=""class="logo"style='max-width:80px'></a>
                </div>
                <div class="fixed-navbar_links">
                    <ul class="Taskbar">
                        <a style = "text-decoration: none;font-size: xx-large;" href="users/homepage.php"class="mb-logo" style="color: grey;">Yes <span style="color:#F37335 ;">Gadgets Kenya</span></a>
                    </ul>
                        
                    <ul class="Taskbar_2">
                        <a href="user/signin.php"> <i class='fas fa-user-circle' style='font-size:30px;color:red'></i></a>
                        &nbsp;&nbsp;&nbsp;
                        <a href = 'cart.php'><i class="fa fa-shopping-cart" style='font-size:30px;color:red'></i></a>&nbsp;&nbsp;&nbsp;
                    </ul>
                </div>
            </div>
        </div>

		<div class="container2">

        <?php echo'<form action="shippingInfo.php?id='.$id.'" method="post">'?>

        	<h3>Shipping and Payment:</h3>

            <div class="row">

                <div class="col">

                    
                    <div class="inputBox">
                        <span>Full Name :</span>
                        <input type="text" name= "fullName" placeholder="John Doe" required>
                    </div>

                    <div class="inputBox">
                        <span>Email Address:</span>
                        <input type="email" name= "emailAddress" placeholder="johndoe@example.com" required>
                    </div>

                    <div class="inputBox">
                        <span>Phone Number:</span>
                        <input type="number" name= "phoneNumber" placeholder="0712345678" required>
                    </div>

                    <div class="inputBox">
                        <span>Address :</span>
                        <input type="text" name= "address" placeholder="Rhapta Road, House No.12" required>
                    </div>

                    <div class="inputBox">
                        <span>City :</span>
                        <input type="text" name= "city" placeholder="Nairobi" required>
                    </div>

                    <div class="inputBox">
                         <span>Postal code :</span>
                          <input type="text" name= "postalCode" placeholder="0000" required>
                    </div>
                    
                    <div class="flex">
                        <span><input type="radio" value="Payment on Delivery" checked= "checked"></span>
                        <span>Pay on Delivery</span>
                    </div>
                    <br>
                    <!--<div class="flex">
                        <span><input type="radio" value="Payment via Wallet" ></span>
                        <span>Pay via Wallet</span>
                    </div>  -->

                      <input style = "margin-left:130px;height: 50px;width:250px" type="submit" value="Proceed to Final Checkout" class="btn" name= "addDetails">
                  </div>
                </div>
            </div>
    </form>
</div>    
<script src="homepage.js"></script>
</main>
</body>
</html>