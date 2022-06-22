<?php
    include('product/database_connection.php');

    session_start();

    $id = $_GET['id'] ?? null;

    $quantity = $_POST['quantity'] ?? null;

    if($id != null){
        $query = "SELECT * FROM product WHERE product_status = '1' AND product_id = $id";

        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $total_row = $statement->rowCount();
        $output = '';
        if($total_row > 0)
        {
            foreach($result as $row)
            {
                $product_name = $row['product_name'];
                $price = $row['product_price'];
                $image = $row['product_image'];
            }
        }

        
        $itemArray = array($result[0]["product_name"]=>array('product_id'=>$result[0]["product_id"], 'product_name'=>$result[0]["product_name"], 'price'=>$result[0]["product_price"], 'image'=>$result[0]["product_image"], 'quantity'=>$quantity));
echo "<br><br><br><br>";

        if(!empty($_SESSION["cart"])) {
            if(in_array($result[0]["product_name"],array_keys($_SESSION["cart"]))) {
                foreach($_SESSION["cart"] as $k => $v) {

                    if($result[0]["product_name"] == $k) {
                        if(empty($_SESSION["cart"][$k]["quantity"])) {
                            $_SESSION["cart"][$k]["quantity"] = 0;
                        }
                        $_SESSION["cart"][$k]["quantity"] += $quantity;
                    }
                }
            } else {
                $_SESSION["cart"] = array_merge($_SESSION["cart"],$itemArray);
            }
        } else {
            $_SESSION["cart"] = $itemArray;
        }
    }

?>
<!DOCTYPE html>
<html>
	<head>
		<title>My Cart</title>
		<link rel="stylesheet"href="homepage.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <style>
            table{
                width:80%;
            }
            table, th, td{
                text-align:center;
            }
           tr{
            border-bottom: solid 2px;
           }
            input{
                text-align:center;
                height: 40px;
            }
            thead{
                height:60px;
            }
        </style>
    </head>
	<body>
		<div class="fixed-navbar">
			<div class="container">
				<div class="logo_div">
				    <a href = "users/homepage.php"><img src="logo.png"alt=""class="logo"style='max-width:80px'></a>
			    </div>
			    <div class="fixed-navbar_links">
                    <ul class="Taskbar">
                        <a style = "text-decoration: none;font-size: xx-large;" href="users/homepage.php"class="mb-logo" style="color: grey;">Yes <span style="color:#F37335 ;">Gadgets Kenya</span></a>&nbsp;
                        
                    </ul>
                        
                    <ul class="Taskbar_2">
                        <a href="user/signin.php"> <i class='fas fa-user-circle' style='font-size:30px;color:red'></i></a>
                        &nbsp;&nbsp;&nbsp;
                        <a href = 'cart.php'><i class="fa fa-shopping-cart" style='font-size:30px;color:red'></i></a>&nbsp;&nbsp;&nbsp;
                    </ul>
			    </div>
			</div>
		</div><br/><br/><br/><br/>
        <?php 
            
            if(isset($_SESSION['cart'])){
                $total_quantity = 0;
                $total_price = 0;

                ?><br/><br/><div style = "color:black; text-align:center"><h2>Your Cart</h2><br/><br/>
                <table>
                    <thead>
                        <th></th>
                        <th style = 'text-align:left;'>Product</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
                    </thead>
                    <tbody style = 'color:black;'>
                    <?php foreach($_SESSION['cart'] as $item){
                        $item_price = $item["quantity"] * $item["price"];?>
                        <tr>
                            <td style = 'text-align: right;'><img style = 'height:150px;'src = 'product/image/<?php echo $item["image"];?>'></td>
                            <td style = 'text-align: left;'><?php echo $item['product_name'];?><br/><br>
                                <p><?php echo $item['price'];?></p></td> 
                            <td><input readonly type = 'number' id = 'quantity' name = 'quantity' value = <?php echo $item['quantity'];?> min = 1></td>
                            <td id = 'total_cost'><?php echo $item_price;?></td>
                            <td style = 'text-align: right;'>
                            <?php echo "<a href = 'removeFromCart.php?id=".$item['product_id']."'><i class='fa fa-trash-o' style = 'color:red;'></i></td></a>"?>
                    </tr><?php

                    $total_quantity += $item["quantity"];
                    $total_price += ($item["price"]*$item["quantity"]);
                }
                ?>
                </tbody>

                </table>
                <br><br><br>
                <b><p id = 'subtotal_cost'style = 'text-align:right;padding-right:20%;color:black;'>Subtotal: <?php echo $total_price;?></p></b><br/><br/><br/>
                <a href = "emptyCart.php"><button style = "height: 50px;width:250px;"class = 'btn'>Empty Cart</button></a>
                <a href = "product/index.php"><button style = "height: 50px;width:250px;"class = 'btn'>Continue Shopping</button></a>
                <a href = "checkoutConnection.php"><button style = "height: 50px;width:250px"class = 'btn'>Checkout</button></a>
                </div><?php
            }
            else{?>
                <div style = "color:black;" class = 'centered'>
                    <img src = 'cart.jpg'>
                    <h2>Your cart is empty</h2>
                    <a href = "product/index.php"><button style = "height: 50px;width:250px" class = 'btn'>Start Shopping</button></a>
                </div><?php
            }
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
                var new_cost = 0;
                $("#quantity").change(function(){
                      var quantity = $("#quantity").val();
                      var price = $("#prod_price").val();
                      new_cost += quantity*price;
                      $('#total_cost').text(new_cost);
                      $('#subtotal_cost').text('Subtotal: '+new_cost);
                      alert(new_cost);

                });
            });
        </script>
        
    </body>
</html>