<?php

$id = $_GET['id']??null;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order Confirmation</title>
	<title>Home Page</title>
		<link rel="stylesheet"href="orderConfirmed.css">
		<link rel="stylesheet"href="homepage.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="fixed-navbar">

        <div class="container">
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

<div class="orderConfirmed">
	<img src="orderConfirmed.jpg">
	<span><br/><a href = 'emptyCart.php'><button class="btn btn-secondary btn-lg" type="button" id="myButton">OK</button></a></span>
</div>

</body>
</html>


