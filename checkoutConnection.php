<?php include('product/database_connection.php');
session_start();

$subtotal = 0;
$total_quantity = 0;

foreach($_SESSION['cart'] as $item){
	$subtotal += ($item["price"]*$item["quantity"]);
}

$queryOrders = "INSERT INTO orders (total_price) VALUES ($subtotal)";
$statement = $connect->prepare($queryOrders);
$statement->execute();	

$query_select_order = "SELECT * FROM orders WHERE total_price = $subtotal";
$statement_select = $connect->prepare($query_select_order);
$statement_select->execute();
$result = $statement_select->fetchAll();
$total_row = $statement_select->rowCount();
$output = '';

if($total_row > 0)
{
    foreach($result as $row)
    {
        $order_id = $row['order_id'];
    }
}

if(!empty($_SESSION["cart"])) {

	foreach($_SESSION["cart"] as $key){
		
		$name = array($key['product_name']);
		$quantity = $key['quantity'];
		$product_id = $key['product_id'];
		$price = $key['price'];

		$sql_insert_ItemOrder = "INSERT INTO item_order(order_id, product_id, quantity) VALUES($order_id, $product_id, $quantity)";
		$statement_item = $connect->prepare($sql_insert_ItemOrder);

		if($statement_item->execute())
		{
			header("location: shippingDetails.php?id=".$order_id);
		}

	}
	
	
}