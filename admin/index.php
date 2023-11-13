<?php
include "config.php";
if(isset($_SESSION['admin_logged_in_id'])){
     header("Location:dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Dashbaord</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/admin_login.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins:wght@200&display=swap');
    </style>
    <?php include "common_styles.php"; ?>
</head>

<body>


    <div class="signup_container">
        <!-- tabs  -->

        <div class="erro_msg" id="erro_msg">
            
        </div>
        <!-- content of tabs -->

        <div class="tabs_content_sign">


            <form id="sign_in_page" class="signup_tab_data sign_active" method="post" action="">
                <h1 style="color: #00D3AD; margin-bottom: 40px;">Admin Sign in</h1>
                <input type="text" placeholder="Email" id="email">
                <input type="password" placeholder="Password" id="password">
                <!-- <p
                    style="font-size: 16px; line-height: 23px; color: #ccc; width: 100%; max-width: 90%;margin-bottom: 10px;">
                    <a href="forgot_page.html" style="color: #56aaff;">Forgot Password?</a>
                </p> -->
                <button type="submit" id="admin_login">Sign in</button>
            </form>



        </div>





    </div>

    </div>



    <!-- overlay -->
    <div class="over_lay"
        style="display:none;position: fixed; top: 0px;left: 0px;width: 100%;height: 100%;background: rgba(0,0,0,0.2);z-index: 100000;"
        id="overlay"></div>

    <script src="js/Js.js"></script>
    <script src="backend/authentication/js/login.js"></script>


</body>

</html>