<?php
header("Content-Type:application/json");
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:POST");
header("Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Origin,Access-Control-Allow-Methods,Authorization,X-Requested-With");
include "../../admin/config.php";

//================================================
// add/remove Like On Blog Post
//================================================



    $data = json_decode(file_get_contents("php://input"),true);
    
    $BlogID = $data['blog'];
    $userID = $data['user'];
    
    $check_like = "SELECT * FROM `blog_likes` WHERE user_id={$userID} AND blog_id={$BlogID}";
    $check_like_result = mysqli_query($conn,$check_like) or die("Query failed");

    if(mysqli_num_rows($check_like_result) > 0){
        // remove like
        $blog_add_like_query = "DELETE FROM `blog_likes` WHERE user_id = {$userID} AND blog_id = {$BlogID};";
        $msg = "Like removed successfully.";
    }else{
        $msg = "Like added successfully.";
        $blog_add_like_query = "INSERT INTO `blog_likes`(`user_id`, `blog_id`, `liked_at`) VALUES ({$userID},{$BlogID},CURRENT_TIMESTAMP());";
    }
    
   
    
        mysqli_query($conn,$blog_add_like_query) or die("Query failed");

        if(mysqli_affected_rows($conn)>0){
            echo json_encode(array(
                "status"=>true,
                "msg"=>$msg
                )
            );
        }else{
            echo json_encode(array(
                "status"=>false,
                "msg"=>"An unexpected error has occurred"
            ));
        }
    


    
    

//================================================
// add/remove Like On Blog Post
//================================================
?>