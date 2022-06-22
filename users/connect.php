<?php
$conn=new mysqli("localhost","root","","yesgadgets");
if($conn->connect_error){
	die("Not Connected".$conn->connect_error);

}else{
	
}
$sql="CREATE DATABASE IF NOT EXISTS gadgets";
if($conn->query($sql)===TRUE){
	
}else{
	echo "Error".$conn->error;

}
?>