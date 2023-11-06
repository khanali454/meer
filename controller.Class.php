<?php
require_once 'vendor/autoload.php';
require_once 'config.php';

// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);
  
    // get profile info
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    $userinfo = [
      'user_email' => $google_account_info['email'],
      'first_name' => $google_account_info['givenName'],
      'last_name' => $google_account_info['familyName'],
      'gender' => $google_account_info['gender'],
      'user_fullname' => $google_account_info['name'],
      'user_profileimg' => $google_account_info['picture'],
      'verifiedEmail' => $google_account_info['verifiedEmail'],
      'token' => $google_account_info['id'],
    ];
  
    // checking if user is already exists in database
    $sql = "SELECT * FROM users WHERE user_email ='{$userinfo['user_email']}'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      // user is exists
      $userinfo = mysqli_fetch_assoc($result);
      $token = $userinfo['user_token'];
    } else {
      // user is not exists
      $user_username = explode("@",$userinfo['user_email'])[0];
      $sql = "INSERT INTO users (user_email, user_gender, user_fullname, user_profileimg, email_verified, user_token,user_username) VALUES ('{$userinfo['user_email']}', '{$userinfo['gender']}', '{$userinfo['user_fullname']}', '{$userinfo['user_profileimg']}', '{$userinfo['verifiedEmail']}', '{$userinfo['token']}','{$user_username}')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        $token = $userinfo['token'];
      } else {
        echo "User is not created";
        die();
      }
    }
  
    // save user data into session
    $_SESSION['user_token'] = $token;
  } else {
    if (!isset($_SESSION['user_token'])) {
      header("Location: signup.php");
      die();
    }
  
    // checking if user is already exists in database
    $sql = "SELECT * FROM users WHERE user_token ='{$_SESSION['user_token']}'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      // user is exists
      $userinfo = mysqli_fetch_assoc($result);
    }
  }
?>