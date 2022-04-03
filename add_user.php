<?php
        include("config.php");

        $user_name = $_POST['save_name'];
        $user_username = $_POST['save_usname'];
        $user_password = $_POST['save_pass'];

        $sql = "INSERT into log_info(name,username,password) value('{$user_name}','{$user_username}','{$user_password}')";

        $result = mysqli_query($conn,$sql) or die("query unsuccessful");
        if($result)
        {
            header("location: http://localhost/demo%20ecommerce/index.php");
        }
        mysqli_close($conn);
        ?>
