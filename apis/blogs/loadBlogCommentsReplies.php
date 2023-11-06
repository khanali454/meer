<?php
header("Content-Type:application/json");
header("Access-Control-Allow-Origin:*");
include "../../admin/config.php";

//================================================
// LOAD BLOG COMMENTS'Replies
//================================================



    $data = json_decode(file_get_contents("php://input"),true);
    
    $commentID = $data['comment_is'];
    
    
    $blog_comments_replies_query = "SELECT * FROM `blog_comments_replies` INNER JOIN users ON blog_comments_replies.reply_by=users.user_id WHERE blog_comments_replies.reply_to_comment={$commentID} ORDER BY reply_id DESC;";
    
    $blog_comments_replies_query_result = mysqli_query($conn, $blog_comments_replies_query) or die("Query failed");

    if(mysqli_num_rows($blog_comments_replies_query_result) > 0){
        echo json_encode(mysqli_fetch_all($blog_comments_replies_query_result,MYSQLI_ASSOC));
    }else{
        echo json_encode(array(
          "status"=>false,
          "msg"=>"No Replies"
        ));
    }


    
    

//================================================
// LOAD BLOG COMMENTS'Replies
//================================================
?>