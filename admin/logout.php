<?php
include "config.php";
if(isset($_SESSION['admin_logged_in_id'])){
   unset($_SESSION['admin_logged_in_id']);
}
header("Location:index.php");

?>