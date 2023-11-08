<?php
session_start();
$db_user = "u478333117_meer_m";
$db_password="12345678Meer";
$db_name="u478333117_meer_m";
// time config
date_default_timezone_set("Asia/Kolkata");
$current_datetime = date('Y-m-d H:i:s');

$conn = mysqli_connect("localhost",$db_user,$db_password,$db_name);


?>