<?php
include"Connection.php";

$sql = "SELECT * FROM `product`";
$result = $link->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

<button class="btn btn-primary my-4" ><a href="product_add.php " class="text-light">Add product</a> </button>
<div class="container">
	<table id="Products" class="table table-striped">
		<thead>
		<tr>
			<th>ID</th>
			<th>Image</th>
			<th>Name</th>
			<th>Brand</th>
			<th>RAM</th>
			<th>Category</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
	</thead>
<tbody>
	<?php 
	if ($result->num_rows > 0){

		while ($row = $result->fetch_assoc()) {
			$id = $row['product_id'];
		?>

		<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $row['product_name'] ?></td>
		<td><?php echo $row['product_brand'] ?></td>
		<td><?php echo $row['product_price'] ?></td>
		<td><?php echo $row['product_ram'] ?></td>
		<td><?php echo $row['product_category'] ?></td>
		<td><?php echo $row['product_image'] ?></td>
		<td><?php echo $row['product_quantity'] ?></td>
		<td><a class="btn btn-info" href="Update.php?updateid=<?php echo $id; ?>">Edit</a> &nbsp; <a class="btn btn-danger" href="Delete.php? deleteid=<?php echo $id; ?>">Delete</a></td>
		</tr>

		<?php
		}
	}
	?>
</tbody>
</table>
</div>
</body>
</html>