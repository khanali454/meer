<?php
include "../../config.php";
if (isset($_POST['loadC'])) {
    $output = "";

    try {
        $query = "SELECT *,date_format(last_updated,'%d %M, %Y - %h:%i %p') as last_updated FROM categories ORDER BY c_name ASC";

        if ($result = mysqli_query($conn, $query)) {

            if (mysqli_num_rows($result) > 0) {
               while($row=mysqli_fetch_assoc($result)){
                $output .='<tr>
                <td>'.$row['c_id'].'</td>
                <td>'.$row['c_name'].'</td>
                <td>'.$row['c_desc'].'</td>
                <td>'.$row['last_updated'].'</td>
                <td><button class="_user_edit_btn" data-name="'.$row['c_name'].'" id="edit'.$row['c_id'].'">Edit</button></td>
                <td><button class="_user_delete_btn" data-name="'.$row['c_name'].'" id="delete'.$row['c_id'].'">Delete</button></td>
            </tr>';
               }
              $output_object = array(
                'data' => $output,
                'records' => mysqli_num_rows($result)
              );
               echo json_encode($output_object);
            } else {
                    $output_object = array(
                        'data' => "<tr><td colspan=6 style='padding:20px 0;'>No category was found.</td></tr>",
                        'records' => mysqli_num_rows($result)
                      );
                      echo json_encode($output_object);
            }
        }
    } catch (\Throwable $th) {
        if ($th != "") {
            echo json_encode(array(
                'data' => "<tr><td colspan=6 style='padding:20px 0;'>
                Something went wrong. Please <button onclick='loadCategories()' style='background:none;color:#fff;text-decoration:underline;outline:none;border:none;cursor:pointer;'>try again</button>
                </td></tr>",
                'error' => true
            ));
        }
    }




}

?>