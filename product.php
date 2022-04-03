<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product page</title>
    <link rel="stylesheet" href="product8.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
</head>

<body>
    <div class="main_box">
        <header>my favourate shoes</header>
        <div class="products">
            


        <?php

            include("config.php");

            $sql = "SELECT * from pd_info";

            $result = mysqli_query($conn,$sql) or die("this query cant work");

            if(mysqli_num_rows($result))
            {
                while($rows = mysqli_fetch_assoc($result))
                {
        ?>
            <div class="pd_box">
                <div class="img_sec"><img src="<?php echo"{$rows['pd_img']}" ?>"></div>
                <div class="pd_name" contenteditable="true"> <?php echo"{$rows['pd_name']}" ?></div>
                <div class="price"><?php echo"{$rows['pd_price']}" ?>$</div>
                <div class="btn"><button>buy</button></div>
                <div class="edit" data-eid="<?php echo"{$rows['sr']}" ?>">
                   <i class="fa fa-pencil-alt"></i>
                </div>
                <div class="delete">
                   <a href="delete.php?pd_id=<?php echo"{$rows['sr']}"?>"><i class="fa fa-trash"></i></a>
                </div>
            </div>

            <?php
            
                } 
                }
            ?>


            <div class="add_pd">
                <div class="title">add <br> product</div>
                <div class="add_btn">
                    <i class="fas fa-plus"></i>
                </div>
            </div>


           
            
        </div>

    </div>
    <div class="add_sec">
    <p>add</p>
        <div class="add_box">
            <div class="add_close">
                <i class="fas fa-times"></i>
            </div>
            <form action="add_data.php" method="post" enctype="multipart/form-data">
                <input type="text" name="pd_name"  placeholder="product name">
                <input type="text" name="price" placeholder="product price">
                <input type="file" name="file" required>
                <input type="submit" name="submit">
            </form>
        </div>
    </div>


    <!-- edit section -->
    <div class="edit_sec">
    <p>edit</p>
        <div class="edit_box">
            <div class="edit_close">
                <i class="fas fa-times"></i>
            </div>
            <form action="update-data.php" method="post" enctype="multipart/form-data">
            </form>
        </div>
    </div>
    
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
    ></script>
    
    <script src="pd_ajax.js"></script>
</body>
</html>