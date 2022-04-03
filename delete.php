<?php

include("config.php");

$product_id = $_GET['pd_id'];

echo($product_id);

$sql = "DELETE from pd_info where sr = {$product_id}";

$result = mysqli_query($conn,$sql) or die("product not deleted");


header("location: http://localhost/demo%20ecommerce/product.php");

mysqli_close($conn);



?>