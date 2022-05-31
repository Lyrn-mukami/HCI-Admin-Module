<?php

	$link = new mysqli("localhost","root","","hci");
	if ($link->connect_error){
		die("Connection Failed" . $conn->connect_error);
	}
 
 function setData($sql){
	$link = connect();
	if(mysqli_query($link,$sql)){
		echo "item inserted";
	}
		else{
			echo "item not inserted".mysqli_error($link);
		}
	}

?>