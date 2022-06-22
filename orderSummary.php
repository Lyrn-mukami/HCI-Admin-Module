<?php include('product/database_connection.php');
session_start();
$subtotal = 0;
$total_quantity = 0;

$order_id = $_GET['id'] ?? null;
?>
<title></title>
</head>
<body>

</body>

	<head>
		<title>Order Summary</title>
		<link rel="stylesheet"href="orderSummary.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet"href="homepage.css">

	</head>
	<body>
		<style type="text/css">
			input{
				height: 30px;
			}
		</style>
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

		<div class="orderContainer">
			<h3>Order Summary</h3><br>

			<table class='table table-bordered table-striped'>
				<tr>
					<td>Order ID </td>
					<td>Item Image</td>
					<td>Item Name</td>
					<td>Quantity</td>
					<td>Price</td>
					<td>Total Price</td>
				</tr> <?php foreach($_SESSION['cart'] as $item){?>
				<tr>
					<td><?php echo $order_id;?></td>
					<td><img style = 'height:50px; width:50px;'src = 'product/image/<?php echo $item["image"];?>'></td>
					<td><?php echo $item['product_name'];?></td>
					<td><?php echo $item['quantity'];?></td>
					<td><?php echo $item['price'];?></td>
					<td><?php echo $item['price'] * $item['quantity'];?></td>
				</tr><?php
				 $total_quantity += $item["quantity"];
                 $subtotal += ($item["price"]*$item["quantity"]);
			}?>
			<tr><td></td>
				<td></td>
				<td></td>
				<td></td>
				<td class= "subtotal">Subtotal</td>
				<td class="subtotal">Ksh. <?php echo $subtotal;?></td></tr>
			</table>

		</div>

		<div class= "shippingDetails">
			<h3>Shipping Information</h3><br>

			<div class="row">
    		<div class="col-sm" style= "font-weight: bold;">Name:</div>
    		<div class="col-sm" style= "font-weight: bold;">Phone Number:</div>
    		<div class="col-sm" style= "font-weight: bold;">Email Address:</div>
  		</div><?php
  		$query = "SELECT * FROM shippingdetails WHERE order_id = $order_id";

        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $total_row = $statement->rowCount();
        if($total_row > 0)
        {
            foreach($result as $row)
            {?>
            	<div class="row">
		    		<div class="col-sm"><?php echo $row['fullName'];?></div>
		    		<div class="col-sm"><?php echo $row['phoneNo'];?></div>
		    		<div class="col-sm"><?php echo $row['email'];?></div>
		  		</div>
		  		<br>
		  		<div class="row">
		    		<div class="col-sm" style= "font-weight: bold;">Shipping Address:</div>
		    		
		  		</div>
		  		<div class="row">
		    		<div class="col-sm"><?php echo $row['address'];?></div>
		    		
		  		</div>

					
				</div>
            <?php
        	}
        }?>
  		

		<div class="confirmButton"><?php echo'
			<a href = "orderConfirmed.php?id='.$order_id.'"><button style = "height: 50px;width:250px" type="button" id="myButton" class="btn btn-secondary btn-lg">Confirm Order</button></a>
		</div>';?>

		
    
    <script src="homepage.js"></script>
	</body>
	</html>