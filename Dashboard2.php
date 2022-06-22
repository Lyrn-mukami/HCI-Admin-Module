<div class="container-fluid">
	<div class="row">
	<div class="col-xl-3 col-md-6">
		<div class="card">
<div class="card-body">
	<div>
		<h4 class="header-title mt-0 mb-4">Total Customers</h4>
		 <div>
			<h2 class="fw-normal pt-2 mb-1">

<?php
	$sqluser="SELECT count(`user_id`) as count1 FROM tbl_users WHERE `role` = 'client' ";
	$result=mysqli_query($link, $sqluser);
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['count1'];
}
?>		
			</h2>
</div>
	</div>
</div>
</div>
</div>

<div class="col-xl-3 col-md-6">
		<div class="card">
<div class="card-body">
	<div>
		<h4 class="header-title mt-0 mb-4">Total Earnings</h4>
		 <div>
			<h2 class="fw-normal pt-2 mb-1">

<?php
	$sqltotal="SELECT sum(`total_price`) as earnings FROM orders WHERE `status` = 'completed' ";
	$result0=mysqli_query($link, $sqltotal);
while ($row = mysqli_fetch_assoc($result0)) {
    if($row>0){
		echo $row['earnings'];
	}else{
		echo '0';
	}
}
?>		
			</h2>
</div>
	</div>
</div>
</div>
</div>

<div class="col-xl-3 col-md-6">
		<div class="card">
<div class="card-body">
	<div>
		<h4 class="header-title mt-0 mb-4">Total Sales</h4>
		 <div>
			<h2 class="fw-normal pt-2 mb-1">

<?php
	$sqlcomporder="SELECT COUNT(`total_price`) as sales FROM orders WHERE `status` = 'completed' ";
	$result1=mysqli_query($link, $sqlcomporder);
while ($row = mysqli_fetch_assoc($result1)) {
		echo $row['sales'];
   
}
?>		
			</h2>
</div>
	</div>
</div>
</div>
</div>

<div class="col-xl-3 col-md-6">
		<div class="card">
<div class="card-body">
	<div>
		<h4 class="header-title mt-0 mb-4">Pending orders</h4>
		 <div>
			<h2 class="fw-normal pt-2 mb-1">

<?php
	$sqlpenorder="SELECT COUNT(`order_id`) as pend FROM orders WHERE `status` = 'pending' ";
	$result2=mysqli_query($link, $sqlpenorder);
while ($row = mysqli_fetch_assoc($result2)) {
    echo $row['pend'];
}
?>		
			</h2>
</div>
	</div>
</div>
</div>
</div>
