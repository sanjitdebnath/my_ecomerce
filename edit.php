
<?php

            include("config.php");

            $pd_id = $_POST["id"];
            $sql = "SELECT * from pd_info where sr = $pd_id";

            $result = mysqli_query($conn,$sql) or die("this query cant work");

            $output = "";
            if(mysqli_num_rows($result)>0)
            {
                        while($rows = mysqli_fetch_assoc($result))
                        {
                            
                            
                            $output.= "
                            <input type='text' value='{$rows['pd_name']}' name='product_name'>
                            <input type='text' value='{$rows['pd_price']}' name='product_price'>
                            <input type='file' name='product_img'>
                            <input type='hidden' name='old-image' value='{$rows["pd_img"]}'>
                            
                            <input type='text' hidden value='{$rows["sr"]}' name='product_sr'>
                            <input type='submit' value='save'>
                        ";
                            
                        }
                        mysqli_close($conn);
                        echo $output;
            }
            else{
                echo "<h2>record not found</h2>";
            
            }



            
            
                
?>