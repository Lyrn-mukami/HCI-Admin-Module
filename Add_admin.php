<!DOCTYPE html>
<html>
    <head>
    <title>Add Administrator</title>
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
			<li></li><a href="Dashboard.html">Home</a></li>
		</div>
		<div class="search-profile">
			 <div class="search-container">
			    <form action="/action_page.php">
			      <input type="text" placeholder="Search.." name="search">
			      <button type="submit"><i class="fa fa-search"></i></button>
			    </form>
			  </div>
			  <div class="profile">
			  <img src="Profile_images/avatar_1.png">
			  <div class="dropdown-content">
			  	<a href="Profile.html">Profile</a>
			  	<a href="#">Log out</a>
			  </div>
			  </div>
		</div>
	</nav>
	<main class="main">
        <div class="container">
<form action="process_admin.php" method="post" class="card" >
            <div class="card-body">
              <div class="row mb-3">
                <div class="col-sm-3">
                <label for="f_name" class="mb-0">First name:</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" required id="f_name" name="first_name" placeholder="John">
                </div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label for="l_name" class="mb-0">Last name:</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" required id="l_name" name="last_name" placeholder="Smith">
                </div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label for="email_add" class="mb-0">Email:</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="Email" class="form-control" required id="email_add" name="email_address" placeholder="jsmith@gmail.com">
                </div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label for="usernme" class="mb-0">User name:</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" required id="usernme" name="user_name" placeholder="Smith_John">
                </div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label for="pwd" class="mb-0">Password:</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="Password"  class="form-control" required id="pwd" class="pwd" name="user_password" placeholder="*******">
                </div>
              </div>
              <hr>
              <div class="row mb-3">
                <div class="col-sm-3">
                <label for="role" class="mb-0">Role:</label>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" required id="role" name="role" value="Admin" readonly>
                </div>
              </div>
              <div class="row">
                  <div class="col-sm-3"></div>
                <div class="col-sm-9 text-secondary">
                <input type="submit" class="btn btn-primary px-4" id="add" name="add" value="Add"> 
                </div>
              </div>
            </div>
</div>
  </form>
</main>
    </body>
</html>