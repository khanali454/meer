<?php

session_start();
unset($_SESSION['user_id']);
unset($_SESSION['logged_for']);
unset($_SESSION['logged_with']);
session_destroy();
header("Location: signup.php");