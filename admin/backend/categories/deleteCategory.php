<?php
include "../../config.php";
include_once("../audit/insertion.php");
if (isset($_POST['delete'])) {

   
    $name = $_POST['name'];
    $id = $_POST['delete'];
    $id = explode('delete', $id);
    $id = end($id);

    //audit query
 
   

    try {
        $query = "DELETE FROM categories WHERE c_id={$id}";

        if (mysqli_query($conn, $query)) {
            if(mysqli_affected_rows($conn)>=1){
                // insert audit trail
                if(isset($_SESSION['admin_logged_in_id']) && isset($_SESSION['admin_logged_in_name'])){
                      insertAudit($conn,$_SESSION['admin_logged_in_name']." has deleted a category named(".$name.")");
                }

                echo 1;
            }else{
                echo 0;
            }
        }
    } catch (\Throwable $th) {
        if ($th != "") {
            echo 0;
        }
    }




}

?>