<!DOCTYPE html>
<html>
<head>
	<title>Products</title>

	<meta charset="utf-8">
	 
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">

</head>
<body>

<button class="btn btn-primary my-4" ><a href="Add.php " class="text-light">Add product</a> </button>
<div>
	<table id="Products" class="table table-striped">
		<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Brand</th>
			<th>Price</th>
			<th>RAM</th>
			<th>Category</th>
			<th>Image</th>
			<th>Quantity</th>
			<th>Action</th>
		</tr>
	</thead>
<tbody>

<?php

require_once("Connection.php");
$sql = "SELECT * FROM product";
$results = $link->query($sql);
$rowcount =mysqli_num_rows($results);
if ($rowcount > 0) {
	while ($row = $results->fetch_assoc()) {
		$id = $row['product_id']; 
		?>

		<tr>
		<td><?php echo $row['product_id'] ?></td>
		<td><?php echo $row['product_name'] ?></td>
		<td><?php echo $row['product_brand'] ?></td>
		<td><?php echo $row['product_price'] ?></td>
		<td><?php echo $row['product_ram'] ?></td>
		<td><?php echo $row['product_category'] ?></td>
		<td><?php echo $row['product_image'] ?></td>
		<td><?php echo $row['product_quantity'] ?></td>
		
		<td>
	<a class="btn btn-info" href="Update.php?update=<?php echo $id; ?>" class="text-light">Edit</a> &nbsp; <a class="btn btn-danger" href="Delete.php?delete=<?php echo $id; ?>" class="text-light">Delete</a></td>
	</tr>
	<?php
	}
}
else {
	echo "0 results";
}
?>
</tbody>
</table>
</div>


</body>
</html>