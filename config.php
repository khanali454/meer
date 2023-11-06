
<?php

require_once 'vendor/autoload.php';

session_start();

// init configuration
$clientID = '1056815932095-n6t0bdf55g4vculgas20sqgpsvj16nq0.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://msamt.com/meer/Feeds_page.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// login URL
$login_url = $client->createAuthUrl();
// Connect to database
$db_user = "u478333117_meer_m";
$db_password="12345678Meer";
$db_name="u478333117_meer_m";

$conn = mysqli_connect("localhost",$db_user,$db_password,$db_name);
