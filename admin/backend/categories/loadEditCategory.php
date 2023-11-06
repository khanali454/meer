<?php
include "../../config.php";
if (isset($_POST['c_id'])) {
    
    $category_id = $_POST['c_id'];
    $category_id = explode("edit",$category_id);
    $category_id = end($category_id);


    try {
        $query = "SELECT * FROM categories WHERE c_id={$category_id}";

        if ($result = mysqli_query($conn, $query)) {

            if (mysqli_num_rows($result) > 0) {
               $row=mysqli_fetch_assoc($result);
               
              $output_object = array(
                'c_id' => $row['c_id'],
                'c_name' => $row['c_name'],
                'c_desc' => $row['c_desc'],
              );
               echo json_encode($output_object);
            } else {
                    $output_object = array(
                        'data' => "No category was found.",
                        'error' => true
                      );
                      echo json_encode($output_object);
            }
        }
    } catch (\Throwable $th) {
        if ($th != "") {
            echo json_encode(array(
                'data' => "Something went wrong",
                'error' => true
            ));
        }
    }




}

?>