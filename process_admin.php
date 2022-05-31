<?php
require_once('connection.php');

$first_name=$_POST['first_name']; 
$last_name=$_POST['last_name'];
$email_address=$_POST['email_address'];
$user_name=$_POST['user_name'];
$user_password=$_POST['user_password'];
$role=$_POST['role'];

$sql="INSERT INTO tbl_users (first_name, last_name, email_address, `user_name`, user_password, `role`) VALUES ('$first_name', '$last_name', '$email_address', '$user_name', '$user_password', '$role')";

if (mysqli_query($link, $sql)) {
    echo "<script>alert('Administrator created successfully'); window.location.href='View_users.php';</script>";
   } else {
     echo "Error: " . $sql . "<br>" . $link->error;
   }
   

?>