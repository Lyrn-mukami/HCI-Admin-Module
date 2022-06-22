<?php

//fetch_data.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM product WHERE product_status = '1'
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND product_price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}

	if(isset($_POST["brand"]))
	{
		$brand_filter = implode("','", $_POST["brand"]);
		$query .= "
		 AND product_brand IN('".$brand_filter."')
		";
	}
	if(isset($_POST["ram"]))
	{
		$ram_filter = implode("','", $_POST["ram"]);
		$query .= "
		 AND product_ram IN('".$ram_filter."')
		";
	}
	if(isset($_POST["storage"]))
	{
		$storage_filter = implode("','", $_POST["storage"]);
		$query .= "
		 AND product_category IN('".$storage_filter."')
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$id = $row['product_id'];
			$output .= '
			
			<div class="col-sm-4 col-lg-3 col-md-3">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
					<img src="image/'. $row['product_image'] .'" alt="" class="img-responsive" >
					<p align="center" style = "color: black;"><strong><a href="#">'. $row['product_name'] .'</a></strong></p>
					<h4 style="text-align:center;" class="text-danger" >'. $row['product_price'] .'</h4>
				
					category : '. $row['product_category'] .' <br />
					Brand : '. $row['product_brand'] .' <br />
					RAM : '. $row['product_ram'] .' GB<br />
					category : '. $row['product_category'] .' </p>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor" aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					
				</button>
				<form method = "post" action = "../cart.php?id='.$id.'">
					<input type = "number" min = 1 style = "width:40px; height:22px; color:black; text-align:center;" name = "quantity">
					<a><button style = "width:68px; color:white; background-color:black">Add to Cart</button></a></form>
			
				</div>
			</div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>