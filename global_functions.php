<?php
include "config-db.php";


function getAppConfiguration(){
    global $conn;
    $sql = "SELECT * FROM `general_settings`";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        return $result->fetch_assoc();
    }else{
        return 0;
    }
}
