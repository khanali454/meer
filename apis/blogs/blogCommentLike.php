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
    
    $CommentID = $data['comment'];
    $userID = $data['user'];
    
    $check_like = "SELECT * FROM `blog_comments_likes` WHERE user_id={$userID} AND comment_id={$CommentID}";
    $check_like_result = mysqli_query($conn,$check_like) or die("Query failed");

    if(mysqli_num_rows($check_like_result) > 0){
        // remove like
        $comment_like_query = "DELETE FROM `blog_comments_likes` WHERE user_id = {$userID} AND comment_id = {$CommentID};";
        $comment_like_update = "UPDATE `blog_comments` SET `likes`=`likes`-1 WHERE comment_id = {$CommentID};";
        $msg = "Like removed successfully.";
    }else{
        $msg = "Like added successfully.";
        $comment_like_query = "INSERT INTO `blog_comments_likes`(`user_id`, `comment_id`, `liked_at`) VALUES ({$userID},{$CommentID},'{$current_datetime}');";
        $comment_like_update = "UPDATE `blog_comments` SET `likes`=`likes`+1 WHERE comment_id = {$CommentID};";
    }
    
   
    
        mysqli_query($conn,$comment_like_query) or die("Query failed");

        if(mysqli_affected_rows($conn)>0){
            mysqli_query($conn,$comment_like_update);
            if(mysqli_affected_rows($conn)>0){
                echo json_encode(array(
                    "status"=>true,
                    "msg"=>$msg
                    )
                );
            }
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