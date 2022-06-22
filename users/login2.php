 <?php
 session_start();
require_once("connect.php");
if(isset($_POST["login"]))
{
 if (empty($_POST["user_name"]) || empty($_POST["user_password"]))
   {
     header("location:signin.php");
     $error= "Please fill in the form";
    exit();
   }


 else{

    $sql = "SELECT * FROM tbl_users WHERE user_name= '".$_POST['user_name']."' and user_password = '".$_POST['user_password']."'";
    $result=$conn->query($sql);
    $users=$result->fetch_assoc();

    if($users){
      if($users['role']=='admin'){
        $_SESSION['user']=$_POST['user_name'];
      header("location:../Admin/Dashboard.php");
    }else{
      header("location:../product/index.php");
      echo "<script>alert('Login Successful')</script>"; 
    }
  }else{
    header("location:signin.php");
    $error="Invalid Login";
  }
}
}
?>