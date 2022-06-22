<?php
require("connection.php");
$id= $_GET['user_id'];

$del="DELETE FROM tbl_users WHERE user_id='$id' ";

if($link->query($del)== TRUE){ 
    echo "<script>alert('User deleted successfully'); window.location.href='View_users.php';</script>";
}else{ 
    echo "Error: " . $del . "<br>" . $link->error;  
}
?>