<?php
header("Content-Type:application/json");
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:POST");
header("Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Origin,Access-Control-Allow-Methods,Authorization,X-Requested-With");
include "../../admin/config.php";

//================================================
// add COMMENTS On Blog Post
//================================================



    $data = json_decode(file_get_contents("php://input"),true);
    
    $BlogID = $data['blog'];
    $userID = $data['user'];
    $commentMsg = mysqli_real_escape_string($conn,$data['comment']);
    
    
    $blog_comments_query = "INSERT INTO `blog_comments`(`user_id`, `blog_id`, `comment`, `commented_at`) VALUES ({$userID},{$BlogID},'{$commentMsg}','{$current_datetime}');";
    
        mysqli_query($conn,$blog_comments_query) or die("Query failed");

        if(mysqli_affected_rows($conn)>0){
            echo json_encode(array(
                "status"=>true,
                "insertedID"=>mysqli_insert_id($conn)
                )
            );
        }else{
            echo json_encode(array(
                "status"=>false,
                "msg"=>"An unexpected error has occurred"
            ));
        }
    


    
    

//================================================
// add COMMENTS On Blog Post
//================================================
?>