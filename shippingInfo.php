<?php
include("product/database_connection.php");
print_r($_POST);

$order_id = $_GET['id'] ?? null;
$name = $_POST['fullName'];
$address = $_POST['address'];
$email = $_POST['emailAddress'];
$phone = $_POST['phoneNumber'];
$city = $_POST['city'];
$postal = $_POST['postalCode'];

$query = "INSERT INTO shippingdetails(order_id, fullName, address, email, phoneNo, city,postalCode) VALUES ('$order_id','$name','$address','$email','$phone','$city','$postal')";

$statement_item = $connect->prepare($query);
if($statement_item->execute()){
	header("location: orderSummary.php?id=".$order_id);
}
?>