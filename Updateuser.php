<?php
require("connection.php");

$id= $_GET['user_id'];
$result=mysqli_query($link,"SELECT * FROM tbl_users WHERE `user_id`='$id'");
$row=mysqli_fetch_array($result);

if(isset($_POST['update'])){
  $first_name=$_POST['first_name']; 
  $last_name=$_POST['last_name'];
  $email_address=$_POST['email_address'];
  $user_name=$_POST['user_name'];
  $user_password=$_POST['user_password'];
  $role=$_POST['role'];

  $edit=mysqli_query($link," UPDATE tbl_users set first_name='$first_name', last_name='$last_name', email_address='$email_address', `user_name`='$user_name', user_password='$user_password', `role`='$role' where `user_id`='$id' ");
if($edit){
  echo '<script>alert("Updated successfully"); window.location.href="View_users.php"</script>';
  return true;
}else{ 
  echo mysqli_error($link);
}

}

?>
<!DOCTYPE html>
<html>
    <head>
    <title>Update User</title>
	<!--Bootstrap CSS-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <link rel="stylesheet" type="text/css" href="css/forms.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="shortcut icon" href="images\logo.png" type="image/x-icon">
    </head>
    <body>
    <nav class="navbar">
		<div class="logo-link">
			<img src="images/Logo.png" class="logo" style='max-width:70px'>	
			<li></li><a href="Dashboard.php">Home</a></li>
		</div>
		<div class="search-profile">
			 
			  <div class="profile">
			  <img src="Profile_images/avatar_1.png">
			  <div class="dropdown-content">
			  	<a href="Profile.php">Profile</a>
			  	<a href="logout.php">Log out</a>
			  </div>
			  </div>
		</div>
	</nav>
    <main class="main">
        <div class="container">
<form action="" method="post" class="card" >
            <div class="card-body">
              <div class="row mb-3">
                <div class="col-sm-3">
                <label for="f_name" class="mb-0">First name:</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" required id="f_name" name="first_name" value="<?php echo $row['first_name']; ?>">
                </div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label for="l_name" class="mb-0">Last name:</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" required id="l_name" name="last_name" value="<?php echo $row['last_name']; ?>">
                </div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label for="email_add" class="mb-0">Email:</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="Email" class="form-control" required id="email_add" name="email_address" value="<?php echo $row['email_address']; ?>">
                </div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label for="usernme" class="mb-0">User name:</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" required id="usernme" name="user_name" value="<?php echo $row['user_name']; ?>">
                </div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label for="pwd" class="mb-0">Password:</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="Password"  class="form-control" required id="pwd" class="pwd" name="user_password" value="<?php echo $row['user_password']; ?>">
                </div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label for="role" class="mb-0">Role:</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" required id="role" name="role" value="<?php echo $row['role']; ?>">
                </div>
              </div>
              <div class="row">
                  <div class="col-sm-3"></div>
                <div class="col-sm-9 text-secondary">
                <input type="submit" class="btn btn-primary px-4" id="update" name="update" value="Update"> 
                </div>
              </div>
            </div>
</div>
  </form>
</main>
</body>
</html>
