<?php
include "../../config.php";
include_once("../audit/insertion.php");
if (isset($_POST['name'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $desc = mysqli_real_escape_string($conn, $_POST['desc']);
    $dataPopupState = $_POST['dataPopupState'];

    if ($name != "") {
        if ($desc != "") {

            if ($dataPopupState == "add") {
                // try to check if duplicate
                try {
                    $query = "SELECT * FROM categories WHERE c_name='{$name}'";

                    if ($result = mysqli_query($conn, $query)) {

                        if (mysqli_num_rows($result) > 0) {
                            echo "dup_name";
                        } else {
                            $sql = "INSERT INTO categories(`c_name`,`c_desc`,`c_items`) VALUES('{$name}','{$desc}',0)";
                            if (mysqli_query($conn, $sql)) {
                                if (mysqli_insert_id($conn)) {

                                    if (isset($_SESSION['admin_logged_in_id']) && isset($_SESSION['admin_logged_in_name'])) {
                                        insertAudit($conn, $_SESSION['admin_logged_in_name'] . " has inserted a new category named(" . $name . ")");
                                    }
                                    echo "inserted";
                                } else {
                                    echo "Something went wrong. Please try again later";
                                }
                            } else {
                                echo "Something went wrong. Please try again later";
                            }
                        }
                    }
                } catch (\Throwable $th) {
                    if ($th != "") {
                        echo "Something went wrong. Please try again later";
                    }
                }

            } else if ($dataPopupState == "update") {
                //   update data
                if (isset($_POST['c_id'])) {
                    $cid = $_POST['c_id'];

                    $cid = explode('update', $cid);
                    $cid = end($cid);

                    $update_query = "UPDATE categories SET c_name='{$name}',c_desc='{$desc}' WHERE c_id={$cid}";
                    if(mysqli_query($conn,$update_query)){
                        insertAudit($conn, $_SESSION['admin_logged_in_name'] . " has made some changes in a category( id: ".$cid.", name: ". $name . ")");
                        echo "updated";
                    }else{
                        echo "Something went wrong. Please try again later";
                    }





                }
                
             


            } else {
                echo "Something went wrong. Please try again later";
            }

        } else {
            echo "empty_desc";
        }
    } else {
        echo "empty_name";
    }





}

?>