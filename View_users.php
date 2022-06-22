<!DOCTYPE html>
<html>
    <head>
    <title>View Users</title>
	<!--Bootstrap CSS-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	 <link rel="stylesheet" type="text/css" href="css/tables.css"> 
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
    <main class="content">
    <!-- Sidebar -->
<div class="wrapper">
    <nav id="sidebar">
        <ul>
            
            <li><a href="Add_product.php">Add Product</a></li>
            <li><a href="Add_admin.php">Add Admin</a></li>
            <li><a href="Product.php">View Products</a></li>
            <li><a href="View_orders.php">View Orders</a></li>
            <li><a href="View_users.php">View Customer Details</a></li>
        </ul>

    </nav>
</div>
    <?php
    require_once("connection.php");
   $sql="SELECT* FROM tbl_users" ; 
   if($result=mysqli_query($link, $sql)){
	if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-hover table-bordered' id='myTable'>";

        echo "<thread>" ;
            echo "<tr>";
                echo "<th>User ID</th>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Email Address</th>";
				echo "<th>User Name</th>";
                echo "<th>Password</th>";
                echo "<th>Role</th>";
                echo "<th>Action</th>";
            echo "</tr>";
            echo "</thread";
        while($row = mysqli_fetch_array($result)){
            echo "<tbody>";
            echo "<tr>";
                echo "<td>" . $row['user_id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email_address'] . "</td>";
				echo "<td>" . $row['user_name'] . "</td>";
                echo "<td>" . $row['user_password'] . "</td>";
                echo "<td>" . $row['role'] . "</td>";
                echo "<td><a class='btn btn-info' href=Updateuser.php?user_id=" .$row['user_id']. ">Edit</a>" . "&nbsp; <a class='btn btn-danger' id='del_user' href=Deleteuser.php?user_id=" .$row['user_id']. ">Delete</a>" . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
       ?> <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );

    </script>
    <?php
        mysqli_free_result($result);
    } else{
        echo "No records found.";
    }
} else{
    echo "ERROR " . mysqli_error($link);
   }
   
?>
</main>
    </body>
</html>
