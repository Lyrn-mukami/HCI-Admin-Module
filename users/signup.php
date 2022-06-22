<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <link rel="stylesheet" href="signup.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://fontawesome.com/v4/icons/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
          body{
            background-image:url('sa.jpg');
            background-size: cover;
                background-attachment: fixed;
          }
              

        </style>
        <script defer src="script.js"></script>
   </head>
   <body>
   	 <div class="project">
    <div class="coner">
      <div class="forward">
        <!--<img src="images/frontImg.jpg" alt="">-->
      
      </div>
    </div>
    <form id></form>
    <div id="error">
    </div>
    <div class="list">
      <form action="register.php" method="POST">
        <div class="list-content">
          <div class="register-form">
            <div class="title">Register</div>
            <div class="output-boxes">
              <div class="output-box">
                <i class="fas fa-user" style = 'color: red;'></i>
                <input type="text"  name="firstname" id="fname" placeholder="Enter your Firstname" required>
              </div>
              <div class="output-box">
                <i class="fas fa-user" style = 'color: red;'></i>
                <input type="text" name="lastname" id="lname" placeholder="Enter your Lastname" required>
              </div>
              <div class="output-box">
                <i class="fas fa-envelope" style = 'color: red;'></i>
                <input type="email"  name="emailadd" id="form_email" placeholder="Enter your Email" required>
              </div>
               <div class="output-box">
                <i class="fas fa-user" style = 'color: red;'></i>
                <input type="text" name="username" id="form_user" placeholder="Enter your Username" required>
              </div>
              <div class="output-box">
                <i class="fas fa-lock" style = 'color: red;'></i>
                <input type="password" name="password" id="form_pass" placeholder="Enter your password" required><br></br>
              </div>
              <div class="button output-box">
                <input type="submit" name="register" id="submit_registration" style = 'color: red;'value="Submit">
              </div>
              <div class="text sign-up-text"><a href="signin.php">Login now</a></div>
            </div>
        </form>
      </div>
  

   </body>
</html>