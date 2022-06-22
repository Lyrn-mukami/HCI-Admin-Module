<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <link rel="stylesheet" href="signin.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://fontawesome.com/v4/icons/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">

    <style type="text/css">
          body{
            background-image:url('ta.jpg');
            background-size: cover;
                background-attachment: fixed;
          }
              

        </style>
   </head>
   <body>
   	 <div class="container">
    <div class="cover">
      <div class="front">
        <!--<img src="images/frontImg.jpg" alt="">-->
      
      </div>
    </div>
    <div class="forms">
      <form action="login2.php" method="POST">
        <div class="form-content">
          <div class="login-form">
            <div class="title" >Login</div>
            <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user" style = "color:red"></i>
                <input type="text" name="user_name" placeholder="Enter your Username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock" style = "color:red"></i>
                <input type="password" name="user_password" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" name="login" id="submit_login" value="Submit" style = "color:red">
              </div>
              <div class="text sign-up-text" style = 'color:white'>Don't have an account? <a href="signup.php">Register now</label></div>
            </div>
        </form>
      </div>

   </body>
</html>