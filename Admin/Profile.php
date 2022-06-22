<?php
session_start();
require("Connection.php");
$name= $_SESSION['user'];

$result=mysqli_query($link,"SELECT * FROM tbl_users WHERE user_name='$name'");
$row=mysqli_fetch_array($result);

if(isset($_POST['update'])){
  $first_name=$_POST['first_name']; 
  $last_name=$_POST['last_name'];
  $email_address=$_POST['email_address'];
  $user_name=$_POST['user_name'];
  $user_password=$_POST['user_password'];

  $edit=mysqli_query($link," UPDATE tbl_users set first_name='$first_name', last_name='$last_name', email_address='$email_address', `user_name`='$user_name', user_password='$user_password' where `user_name`='$name' ");
if($edit){
  $_SESSION['user']=$_POST['user_name'];
  echo '<script>alert("Updated successfully"); window.location.href="Profile.php"</script>';
  return true;
}else{ 
  echo mysqli_error($link);
}

}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <link rel="stylesheet" type="text/css" href="css/Profile_Style.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="shortcut icon" href="images\logo.png" type="image/x-icon">

</head>
<body>
<nav class="navbar fixed-top navbar-default navbar-fixed-top">
		<div class="logo-link">
			<img src="images/Logo.png" class="logo" style='max-width:60px'>	
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
  <div class="container">
    <div class="main-body">

      <!-- Breadcrumb -->
      <nav aria-label="breadcrumb" class="main-breadcrumb" style='margin-top:80px;'>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="Dashboard.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">User Profile</li>
        </ol>
      </nav>
      <!-- /Breadcrumb -->

      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="Profile_images/avatar_1.png" alt="Admin" class="rounded-circle" width="150">
              <div class="mt-3">
            <h4>Admin</h4>
          </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">First Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?php echo $row['first_name']; ?>
               </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Last Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?php echo $row['last_name']; ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?php echo $row['email_address']; ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">User Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?php echo $row['user_name']; ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-info" id="form-btn">Edit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
     </div>


     <!-- Edit Profile Form -->
      <form action="" method="post" class="card" id="profile-edit">
            <div class="card-body">
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">First Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" required id="f_name" name="first_name" value="<?php echo $row['first_name']; ?>">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Last Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" required id="l_name" name="last_name" value="<?php echo $row['last_name']; ?>">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="Email" class="form-control" required id="email_add" name="email_address" value="<?php echo $row['email_address']; ?>">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">User Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" required id="usernme" name="user_name" value="<?php echo $row['user_name']; ?>">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Password</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="Password"  class="form-control" required id="pwd" class="pwd" name="user_password" value="<?php echo $row['user_password']; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9 text-secondary">
                  <input type="submit" class="btn btn-primary px-4" name="update" id="update" value="Save Changes">
                </div>
              </div>
            </div>
          </div>
</form>
  </div>
</div>
  <script src="Profile.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
