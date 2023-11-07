<?php
session_start();
include "global_functions.php";
$app = getAppConfiguration();
$logged_in_user_id = $_SESSION['logged_id'];

?>