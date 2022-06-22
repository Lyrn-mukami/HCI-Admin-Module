<?php 	
	//connecting to the database
	$conn = new mysqli('localhost', 'root','','yesgadgetskenya');
	if ($conn -> connect_error) {
		die('Connection failed.'. mysqli_connect_error());
	}

 ?>