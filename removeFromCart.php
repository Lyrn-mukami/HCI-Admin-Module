<?php
session_start();

$id = $_GET['id']??null;

if(!empty($_SESSION["cart"])) {
	foreach($_SESSION["cart"] as $k => $v) {
		$prod_id = $_SESSION['cart'][$k]['product_id'];
		echo $prod_id.'<br>';

		if($id == $prod_id)
			unset($_SESSION["cart"][$k]);
		}				
		if(empty($_SESSION["cart"])){
			unset($_SESSION["cart"]);
		}
}

header("location: cart.php");
?>