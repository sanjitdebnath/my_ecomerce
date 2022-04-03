<?php


include ("config.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in page</title>
    <link rel="stylesheet" href="log_in2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
</head>
<body>
        <!-- <i class="fas fa-ellipsis-h"></i> -->
<div class="main_box">
    <div class="head">
        <div class="cont">
        <div class="back_col"></div>
        <div class="log_in">log in</div>
        <div class="sign_in">sign in</div>
        </div>
    </div>
    <div class="log_box">
    <div class="log_in_sec">
                <form  action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="input_sec">
                        <div class="input_name">username</div>
                        <div class="input_box">
                            <div class="icon"><i class="fas fa-user"></i></div>
                            <input type="text" name="username" placeholder="enter your username">
                        </div>
                    </div>
                    <div class="input_sec">
                        <div class="input_name">password</div>
                        <div class="input_box">
                            <div class="icon"><i class="fas fa-lock"></i></div>
                            <input type="password" name="password" placeholder="enter your password">
                        </div>
                    </div>
                    <div class="forgot_sec">
                        <a href="product.html" target="blank">forgot password?</a>
                    </div>
                    <input class="submit" type="submit" name="submit" value="submit" required>
                </form>

                <?php
                    
                


                    if(isset($_POST['submit']))
                    {

                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        $sql = "SELECT * FROM log_info WHERE username = '{$username}' AND password = '{$password}'";

                        $result = mysqli_query($conn,$sql) or die("query not work");

                        if(mysqli_num_rows($result)>0)
                        {
                            // http://localhost/demo%20ecommerce/index.php
                            header("location: http://localhost/demo%20ecommerce/product.php");   
                                            // }
                        }
                        else{
                            echo "<div style='
                            position: absolute;
                            top: 50px;
                            width: 100%;
                            color:red;
                            height: 40px;
                            text-align: center;
                            font-size: 12px;
                            '>wrong username and password</div>";
                        }
                    }
                    ?>
            <!-- sign up section -->
                <div class="sign_up">
                    <div class="sign_in_head">
                        <div class="title">or sign up using</div>
                    </div>
                    <div class="sign_in_icon">
                        <div class="icon_box"><a href="#"><i class="fab fa-facebook-f"></i></a></div>
                        <div class="icon_box"><a href="#"><i class="fab fa-instagram"></i></a></div>
                        <div class="icon_box"><a href="#"><i class="fab fa-google"></i></a></div>
                    </div>
                </div>
        </div>


        <!-- sign in section -->
        <div class="sign_in_sec">
            <div class="sign_in_box">
                        <form  action="add_user.php" method="POST">
                            <div class="input_sec">
                                <div class="input_name">name</div>
                                <div class="input_box">
                                    <input type="text" autocomplete="off" name="save_name" placeholder="enter your name" required>
                                </div>
                            </div>
                            <div class="input_sec">
                                <div class="input_name">username</div>
                                <div class="input_box">
                                    <input type="text" name="save_usname" autocomplete="off" placeholder="enter your username" required>
                                </div>
                            </div>
                            <div class="input_sec">
                                <div class="input_name">password</div>
                                <div class="input_box">
                                    <input type="text" name="save_pass" autocomplete="off" placeholder="enter your password" required>
                                </div>
                            </div>
                            <input class="submit" type="submit" name="save" value="save" required>
                    </form>
            </div>
        </div>
    </div>

            







</div>
    </div>
</body>
        <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"
        ></script>
        <script>
            $(".sign_in").click(function()
            {
                $('.log_box').css(
                    {'transform' :'translateX(-50%)','transition': '0.5s'}
            
                     )
                $('.back_col').css(
                    {'transform' :'translateX(90%)','transition': '0.5s'}
            
                     )
                $('.sign_in').css(
                    {'color' :'white'}
            
                     )
                $('.log_in').css(
                    {'color' :'rgb(72, 103, 243)'}
            
                     )
                // $(".log_in_sec").hide();
            // console.log("work");
            });
            $(".log_in").click(function()
            {
                $('.log_box').css(
                    {'transform' :'translateX(0)','transition': '0.5s'}
            
                     )
               $('.back_col').css(
                    {'transform' :'translateX(0)','transition': '0.5s'}
            
                     )
                $('.sign_in').css(
                    {'color' :'rgb(72, 103, 243)'}
            
                     )
                $('.log_in').css(
                    {'color' :'white'}
            
                     )


                    //  other code

            
            });
        </script>
</html>