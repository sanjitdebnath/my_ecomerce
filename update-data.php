<?php

include("config.php");

$pd_id = $_POST["product_sr"];
$pd_name = $_POST["product_name"];
$pd_price = $_POST["product_price"];
// $pd_img = $_POST["product_img"];

if(empty($_FILES['product_img']['name']))
        {
            $new_name = $_POST['old-image'];
        }
        else{
            $file_name = $_FILES['product_img']['name'];
            $file_temp_name = $_FILES['product_img']['tmp_name'];
            $file_stored_loc = "upload/".$file_name;
            move_uploaded_file($file_temp_name,$file_stored_loc);

            $new_name = "upload/".$file_name;

        }

// echo $pd_img;
$sql = "UPDATE pd_info SET pd_name = '{$pd_name}', pd_price = '{$pd_price}', pd_img = '{$new_name}' WHERE sr = {$pd_id}";
  
$result = mysqli_query($conn,$sql) or die("query failed");

if($result)
{
    header("location: http://localhost/demo%20ecommerce/product.php");
}
else{
    echo "<h2>code not work</h2>";
}


?>