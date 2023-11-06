<?php
include "../../config.php";
if(isset($_POST['email'])){
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    // check credentials
    $sql = "SELECT * FROM admin WHERE email='{$email}' AND password='{$password}'";
    if($result = mysqli_query($conn,$sql)){
      if(mysqli_num_rows($result)>0){
        
        $row=mysqli_fetch_assoc($result);
        if($email==$row['email'] && $password==$row['password']){
            $_SESSION['admin_logged_in_id'] = $row['admin_id'];
            $_SESSION['admin_logged_in_name'] = $row['username'];

            if(isset($_SESSION['admin_logged_in_id'])){
                    echo "ok";
            }else{
                echo 0;
            }
        }else{
         echo "not_found";
        }
      }else{
       echo "not_found";
      }
    }else{
        echo 0;
    }
}

?>