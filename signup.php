<?php
require_once 'config.php';
session_start();
if (isset($_SESSION['user_id'])) {
    header("location:index.php");
}


$tab_sign_active = true;
$alert_class = "alert-hide";
$resp_msg = "";

function clean_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function isUserExist($mail, $logged_for)
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_email`='{$mail}' AND `logged_for` = '{$logged_for}';")) {
        if (mysqli_num_rows($result) > 0) {
            return true;
        }
    }

    return false;
}


function getUserIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

if (isset($_POST['mir_ehtesham_signup'])) {
    $error = "";
    $tab_sign_active = false;

    $logged_with = "website";
    $logged_for = "mir_ehtisham";

    $email = clean_data($_POST['email']);
    $password = clean_data($_POST['password']);
    $full_name = clean_data($_POST['full_name']);

    if (isUserExist($email, $logged_for)) {
        $error = "User with this email already exist, Please try sign in";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email account";
    }

    if (!preg_match('/^[A-Za-z]+(?: [A-Za-z]+)*$/', $full_name)) {
        $error = "Please provide a valid full name with only letters and single space between words.";
    }

    if (!isset($_POST['terms_and_cond_val'])) {
        $error = "Please check our terms and conditions box if you are agree";
    }

    if (empty($email) || empty($password) || empty($full_name)) {
        $error = "All fields are required, Please fill";
    }



    if (empty($error)) {
        $password = md5($password);
        $username = explode("@", $email)[0];
        $ipAddress = getUserIpAddr();
        $insertUser = "INSERT INTO `users`(`user_fullname`, `user_username`, `user_email`, `user_ipaddress`, `user_password`, `user_createdat`, `user_class`, `email_verified`, `user_role`, `status`, `logged_with`, `logged_for`) VALUES ('{$full_name}','{$username}','{$email}','{$ipAddress}','{$password}',CURRENT_TIMESTAMP(),'classic',0,'user','active','{$logged_with}','{$logged_for}')";
        if (mysqli_query($conn, $insertUser)) {
            if ($id = mysqli_insert_id($conn)) {
                $alert_class = "alert-success";
                $resp_msg = "Your account created successfully";
                $_POST = null;
                // set sessions
                $_SESSION['user_id'] = $id;
                $_SESSION['logged_for'] = $logged_for;
                $_SESSION['logged_with'] = $logged_with;
                // redirect
                header("location:index.php");
            }
        } else {
            $alert_class = "alert-error";
            $resp_msg = "We are sorry something has went wrong, Please try again later";
        }
    } else {
        $alert_class = "alert-error";
        $resp_msg = $error;
    }
}


// login
if (isset($_POST['login_btn'])) {
    $error = "";
    $tab_sign_active = true;

    $logged_with = "website";
    $logged_for = "mir_ehtisham";

    $email = clean_data($_POST['email']);
    $password = clean_data($_POST['password']);

    if (empty($email) || empty($password)) {
        $error = "All fields are required, Please fill";
    }



    if (empty($error)) {
        $password = md5($password);

        $login_query = "SELECT * FROM `users` WHERE user_email='{$email}' AND logged_for = '{$logged_for}';";
        if ($result = mysqli_query($conn, $login_query)) {
            if (mysqli_num_rows($result) > 0) {
               $row = mysqli_fetch_assoc($result);
               
               if($row['logged_with']==$logged_with){
                    if($password == $row['user_password']){
                        // set sessions
                        $_SESSION['user_id'] = $row['user_id'];
                        $_SESSION['logged_for'] = $logged_for;
                        $_SESSION['logged_with'] = $logged_with;
                        // display alert
                        $alert_class = "alert-success";
                        $resp_msg = "Account authorized successfully";
                        $_POST = null;
                        // redirect
                        header("location:index.php");
                    }else{
                        $alert_class = "alert-error";
                        $resp_msg = "Password you entered is wrong, Please try again";
                    }
               }else{
                    $alert_class = "alert-error";
                    $resp_msg = "Please login with ".$row['logged_with'];
               }
            }else{
                $alert_class = "alert-error";
                $resp_msg = "User with this email does not exist";
            }
        } else {
            $alert_class = "alert-error";
            $resp_msg = "We are sorry something has went wrong, Please try again later. If error persists then please report us";
        }
    } else {
        $alert_class = "alert-error";
        $resp_msg = $error;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/signup.css">
    <link rel="stylesheet" href="static/css/alerts.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins:wght@200&display=swap');
    </style>
    <!-- include loading anim css  -->
    <?php include "loading-css.php"; ?>
</head>

<body>

    <div class="loading_container" id="Pageloader"><span class="loader"></span></div>

    <!-- alert box -->
    <div class="alert alert_box <?= $alert_class ?>">
        <div class="icon__wrapper">
            <svg width="30" height="30" class="error" viewBox="0 0 24 24">
                <path fill="currentColor" d="M12 16.462q.262 0 .438-.177q.177-.177.177-.439q0-.261-.177-.438q-.176-.177-.438-.177t-.438.177q-.177.177-.177.438q0 .262.177.439q.176.177.438.177m-.5-3.308h1v-6h-1zM12.003 21q-1.866 0-3.51-.708q-1.643-.709-2.859-1.924q-1.216-1.214-1.925-2.856Q3 13.87 3 12.003q0-1.866.708-3.51q.709-1.643 1.924-2.859q1.214-1.216 2.856-1.925Q10.13 3 11.997 3q1.866 0 3.51.708q1.643.709 2.859 1.924q1.216 1.214 1.925 2.856Q21 10.13 21 11.997q0 1.866-.708 3.51q-.709 1.643-1.924 2.859q-1.214 1.216-2.856 1.925Q13.87 21 12.003 21" />
            </svg>
            <svg width="30" height="30" class="success" viewBox="0 0 1024 1024">
                <path fill="currentColor" d="M512 64a448 448 0 1 1 0 896a448 448 0 0 1 0-896m-55.808 536.384l-99.52-99.584a38.4 38.4 0 1 0-54.336 54.336l126.72 126.72a38.272 38.272 0 0 0 54.336 0l262.4-262.464a38.4 38.4 0 1 0-54.272-54.336z" />
            </svg>
        </div>
        <p><?= $resp_msg ?></p>
        <span class="close close-alert">
            <svg width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
            </svg>
        </span>
    </div>

    <div class="signup_container">
        <!-- tabs  -->


        <div class="signup_container_tabs">

            <a href="#sign_in_page" class="signup_Tab_link <?= ($tab_sign_active == true) ? "sign_active" : "" ?> ">Sign in</a>

            <a href="#sign_up_page" class="signup_Tab_link <?= ($tab_sign_active == false) ? "sign_active" : "" ?>">Sign Up</a>

        </div>

        <!-- content of tabs -->

        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="tabs_content_sign">


            <div id="sign_in_page" class="signup_tab_data <?= ($tab_sign_active == true) ? "sign_active" : "" ?>">
                <h1 style="color: #fff; margin-bottom: 40px;">Log in</h1>
                <input type="email" name="email" placeholder="Please enter email">
                <input type="password" name="password" placeholder="Please enter password">
                <p style="font-size: 16px; line-height: 23px; color: #ccc; width: 100%; max-width: 90%;margin-bottom: 10px;">
                    <a href="forget_password.php" style="color: #56aaff;">Forgot Password?</a>
                </p>
                <input type="submit" value="Sign in" name="login_btn">
                <div class="or_line">
                    <span></span> OR <span></span>
                </div>

                <div class="with_link">
                    <a href=' <?= $login_url; ?>' id="with_link">
                        <svg width="30px" height="30px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.0014 16.3109C30.0014 15.1598 29.9061 14.3198 29.6998 13.4487H16.2871V18.6442H24.1601C24.0014 19.9354 23.1442 21.8798 21.2394 23.1864L21.2127 23.3604L25.4536 26.58L25.7474 26.6087C28.4458 24.1665 30.0014 20.5731 30.0014 16.3109Z" fill="#4285F4" />
                            <path d="M16.2863 29.9998C20.1434 29.9998 23.3814 28.7553 25.7466 26.6086L21.2386 23.1863C20.0323 24.0108 18.4132 24.5863 16.2863 24.5863C12.5086 24.5863 9.30225 22.1441 8.15929 18.7686L7.99176 18.7825L3.58208 22.127L3.52441 22.2841C5.87359 26.8574 10.699 29.9998 16.2863 29.9998Z" fill="#34A853" />
                            <path d="M8.15964 18.769C7.85806 17.8979 7.68352 16.9645 7.68352 16.0001C7.68352 15.0356 7.85806 14.1023 8.14377 13.2312L8.13578 13.0456L3.67083 9.64746L3.52475 9.71556C2.55654 11.6134 2.00098 13.7445 2.00098 16.0001C2.00098 18.2556 2.55654 20.3867 3.52475 22.2845L8.15964 18.769Z" fill="#FBBC05" />
                            <path d="M16.2864 7.4133C18.9689 7.4133 20.7784 8.54885 21.8102 9.4978L25.8419 5.64C23.3658 3.38445 20.1435 2 16.2864 2C10.699 2 5.8736 5.1422 3.52441 9.71549L8.14345 13.2311C9.30229 9.85555 12.5086 7.4133 16.2864 7.4133Z" fill="#EB4335" />
                        </svg>
                        <span style="margin-left: 10px; color: #fff; font-size: 16px; font-weight: 500;">Continue with Google</span>
                    </a>
                </div>

                <div class="with_link">
                    <a href="#" id="with_link">
                        <svg width="30px" height="30px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none">
                            <path fill="#1877F2" d="M15 8a7 7 0 00-7-7 7 7 0 00-1.094 13.915v-4.892H5.13V8h1.777V6.458c0-1.754 1.045-2.724 2.644-2.724.766 0 1.567.137 1.567.137v1.723h-.883c-.87 0-1.14.54-1.14 1.093V8h1.941l-.31 2.023H9.094v4.892A7.001 7.001 0 0015 8z" />
                            <path fill="#ffffff" d="M10.725 10.023L11.035 8H9.094V6.687c0-.553.27-1.093 1.14-1.093h.883V3.87s-.801-.137-1.567-.137c-1.6 0-2.644.97-2.644 2.724V8H5.13v2.023h1.777v4.892a7.037 7.037 0 002.188 0v-4.892h1.63z" />
                        </svg>
                        <span style="margin-left: 10px; color: #fff; font-size: 16px; font-weight: 500;">Continue with Facebook</span>

                    </a>
                </div>

</form>


            <!-- sign up page sec -->
            <form method="post" autocomplete="false" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" id="sign_up_page" class="signup_tab_data <?= ($tab_sign_active == false) ? "sign_active" : "" ?>">

                <h1>Register Now</h1>

                <input type="text" placeholder="Please enter your full name" name="full_name" value="<?= $_POST['full_name'] ?? "" ?>" required>
                <input type="email" placeholder="Email" value="<?= $_POST['email'] ?? "" ?>" name="email" required>
                <input type="password" placeholder="Password" value="<?= $_POST['password'] ?? "" ?>" name="password" required>

                <p style="font-size: 16px; line-height: 23px; color: #ccc; width: 100%; max-width: 90%;">
                    <input style="width: fit-content;padding: 5px;" type="checkbox" required name="terms_and_cond_val" id="">
                    I agree to accept all the <a href="#" style="color: #56aaff;">terms & conditions</a> .
                </p>
                <input type="submit" name="mir_ehtesham_signup" value="Create an account">
                <div class="or_line">
                    <span></span> OR <span></span>
                </div>


                <div class="with_link">
                    <a href='<?php echo $login_url; ?>' id="with_link">
                        <svg width="30px" height="30px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.0014 16.3109C30.0014 15.1598 29.9061 14.3198 29.6998 13.4487H16.2871V18.6442H24.1601C24.0014 19.9354 23.1442 21.8798 21.2394 23.1864L21.2127 23.3604L25.4536 26.58L25.7474 26.6087C28.4458 24.1665 30.0014 20.5731 30.0014 16.3109Z" fill="#4285F4" />
                            <path d="M16.2863 29.9998C20.1434 29.9998 23.3814 28.7553 25.7466 26.6086L21.2386 23.1863C20.0323 24.0108 18.4132 24.5863 16.2863 24.5863C12.5086 24.5863 9.30225 22.1441 8.15929 18.7686L7.99176 18.7825L3.58208 22.127L3.52441 22.2841C5.87359 26.8574 10.699 29.9998 16.2863 29.9998Z" fill="#34A853" />
                            <path d="M8.15964 18.769C7.85806 17.8979 7.68352 16.9645 7.68352 16.0001C7.68352 15.0356 7.85806 14.1023 8.14377 13.2312L8.13578 13.0456L3.67083 9.64746L3.52475 9.71556C2.55654 11.6134 2.00098 13.7445 2.00098 16.0001C2.00098 18.2556 2.55654 20.3867 3.52475 22.2845L8.15964 18.769Z" fill="#FBBC05" />
                            <path d="M16.2864 7.4133C18.9689 7.4133 20.7784 8.54885 21.8102 9.4978L25.8419 5.64C23.3658 3.38445 20.1435 2 16.2864 2C10.699 2 5.8736 5.1422 3.52441 9.71549L8.14345 13.2311C9.30229 9.85555 12.5086 7.4133 16.2864 7.4133Z" fill="#EB4335" />
                        </svg>
                        <span style="margin-left: 10px; color: #fff; font-size: 16px; font-weight: 500;">Continue with Google</span>
                    </a>
                </div>

                <div class="with_link">
                    <a href="#" id="with_link">
                        <svg width="30px" height="30px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none">
                            <path fill="#1877F2" d="M15 8a7 7 0 00-7-7 7 7 0 00-1.094 13.915v-4.892H5.13V8h1.777V6.458c0-1.754 1.045-2.724 2.644-2.724.766 0 1.567.137 1.567.137v1.723h-.883c-.87 0-1.14.54-1.14 1.093V8h1.941l-.31 2.023H9.094v4.892A7.001 7.001 0 0015 8z" />
                            <path fill="#ffffff" d="M10.725 10.023L11.035 8H9.094V6.687c0-.553.27-1.093 1.14-1.093h.883V3.87s-.801-.137-1.567-.137c-1.6 0-2.644.97-2.644 2.724V8H5.13v2.023h1.777v4.892a7.037 7.037 0 002.188 0v-4.892h1.63z" />
                        </svg>
                        <span style="margin-left: 10px; color: #fff; font-size: 16px; font-weight: 500;">Continue with Facebook</span>
                    </a>
                </div>
            </form>
        </div>





    </div>
    </div>



    <script src="static/js/Js.js"></script>
    <script>
        $(document).ready(function() {
            $("#Pageloader").css("display", "none");

            const $tabLinks = $('.signup_Tab_link');
            const $tabPanes = $('.signup_tab_data');

            $tabLinks.on('click', function(event) {
                event.preventDefault(); // prevent default link behavior

                // remove active class from all links and panes
                $tabLinks.removeClass('sign_active');
                $tabPanes.removeClass('sign_active');

                // add active class to clicked link and corresponding pane
                $(this).addClass('sign_active');
                $($(this).attr('href')).addClass('sign_active');
            });

            $(".close-alert").on("click", () => {
                $(".alert_box").addClass("alert-hide");
            });
        });
    </script>

</body>

</html>