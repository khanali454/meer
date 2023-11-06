<?php


function insertAudit($conn,$audit_activity){

    try {
        if(isset($_SESSION['admin_logged_in_id']) && isset($_SESSION['admin_logged_in_name'])){
            $sql_audit="INSERT INTO `audit_trails`(`user`, `activity`, `date_time`) VALUES ({$_SESSION['admin_logged_in_id']},'{$audit_activity}',current_timestamp())";
            
            if(mysqli_query($conn,$sql_audit)){
                return true;
            }
        }
    } catch (\Throwable $th) {
       return false;
    }
     
}



?>