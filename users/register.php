<?php
  $conn=new mysqli("localhost","root","","yesgadgets");
if(isset($_POST['register'])){ 
   // echo "<script>alert('Registration Succesful')</script>";
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];  
        $emailaddress = $_POST['emailadd'];   
        $username= $_POST['username'];
        $password= $_POST['password']; 

        
        $add_user="INSERT INTO tbl_users(first_name, last_name, email_address, user_name, user_password)
                         VALUES('$firstname','$lastname', '$emailaddress', '$username', '$password')"; 
        
                if(mysqli_query($conn,$add_user)){
                     echo "<script>alert('Registration Successful');window.location.href='signin.php';</script>";  
                }else{  
                    echo "<script>alert('Registration Not Successful');window.location.href='signup.php'</script>" . $conn->error;
                    }
                    
    }

?>