<?php
require_once 'vendor/autoload.php';
require_once 'config.php';
function getUserIpAddr(){
  if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      //ip from share internet
      $ip = $_SERVER['HTTP_CLIENT_IP'];
  }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      //ip pass from proxy
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }else{
      $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

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
      $logged_id = $userinfo['user_id']; // logged in already so get id
    } else {
      // user is not exists
      $user_username = explode("@",$userinfo['user_email'])[0];
      $client_ip = getUserIpAddr();

      $sql = "INSERT INTO users (user_email, user_gender, user_fullname, user_profileimg, email_verified, user_token,user_username,user_ipaddress) VALUES ('{$userinfo['user_email']}', '{$userinfo['gender']}', '{$userinfo['user_fullname']}', '{$userinfo['user_profileimg']}', '{$userinfo['verifiedEmail']}', '{$userinfo['token']}','{$user_username}','{$client_ip}')";
      
      if ($result =  mysqli_query($conn, $sql)) {
        $token = $userinfo['token'];
        $logged_id = mysqli_insert_id($conn);
      } else {
        echo "User is not created";
        die();
      }
    }
  
    // save user data into session
    $_SESSION['user_token'] = $token;
    $_SESSION['logged_id'] = $logged_id;
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
