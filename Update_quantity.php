<?php
require_once('connection.php');
$id=$_GET['order_id'];

$sql= "SELECT * FROM item_order WHERE order_id = '$id' ";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
        $product=$row['product_id'];
        $quantitybought=$row['quantity'];

        $sql_quantity= "UPDATE product SET product_quantity = product_quantity - '$quantitybought' WHERE product_id = '$product' ";
$update= mysqli_query($link, $sql_quantity);
if($update){
     return true;
   }else{
     echo mysqli_error($link);
   }
    }
} else {
    echo "No records found.";
}
} else{
echo "ERROR " . mysqli_error($link);
}


   
?>