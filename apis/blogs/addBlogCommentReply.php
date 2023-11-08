<?php
header("Content-Type:application/json");
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:POST");
header("Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Origin,Access-Control-Allow-Methods,Authorization,X-Requested-With");
include "../../admin/config.php";

//================================================
// add COMMENTS reply On Blog Post
//================================================


    $data = json_decode(file_get_contents("php://input"),true);
    
    $comment_to_bereplied = $data['comment_to_bereplied'];
    $userID = $data['user'];
    $commentMsg = mysqli_real_escape_string($conn,$data['comment']);
    
    
    $blog_comment_reply_query = "INSERT INTO `blog_comments_replies`(`reply_to_comment`,`reply_by`, `replied_msg`,`replied_at`) VALUES ({$comment_to_bereplied},{$userID},'{$commentMsg}','{$current_datetime}');";
    
        mysqli_query($conn,$blog_comment_reply_query) or die("Query failed");

        if(mysqli_affected_rows($conn)>0){
            mysqli_query($conn,"UPDATE `blog_comments` SET `replies`=`replies`+1 WHERE comment_id = {$comment_to_bereplied};");
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
// add COMMENTS reply On Blog Post
//================================================
