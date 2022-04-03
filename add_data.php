<?php
        include("config.php");


        // if(isset($_FILES['pd_img']))
        // {
            // $file_name = $_FILES['pd_img']['name'];
            // $file_temp_name = $_FILES['pd_img']['tmp_name'];
            // $file_stored_loc = "upload/".$file_name;
            // move_uploaded_file($file_temp_name,$file_stored_loc);


        // }
        $file_name = $_FILES['file']['name'];
        $file_temp_name = $_FILES['file']['tmp_name'];
        $file_stored_loc = "upload/".$file_name;
        move_uploaded_file($file_temp_name,$file_stored_loc);


        


        echo($file_name);


        $pd_name = $_POST['pd_name'];
        $pd_price = $_POST['price'];

        $sql = "INSERT into pd_info(pd_img,pd_name,pd_price) value('{$file_stored_loc}','{$pd_name}','{$pd_price}')";

        $result = mysqli_query($conn,$sql) or die("query unsuccessful");
        header("location: http://localhost/demo%20ecommerce/product.php");
        mysqli_close($conn);
        ?>
