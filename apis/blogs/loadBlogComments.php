<?php
header("Content-Type:application/json");
header("Access-Control-Allow-Origin:*");
include "../../admin/config.php";

//================================================
// LOAD BLOG COMMENTS
//================================================



    $data = json_decode(file_get_contents("php://input"),true);
    
    $loadedBlogID = $data['id'];
    $start = $data['start'];
    
    
    $blog_comments_query = "SELECT * FROM blog_comments INNER JOIN users ON blog_comments.user_id=users.user_id WHERE blog_id={$loadedBlogID} ORDER BY comment_id DESC LIMIT $start,5";
    
    $blog_comments_query_result = mysqli_query($conn, $blog_comments_query) or die("Query failed");

    if(mysqli_num_rows($blog_comments_query_result) > 0){
        echo json_encode(mysqli_fetch_all($blog_comments_query_result,MYSQLI_ASSOC));
    }else{
        echo json_encode(array(
          "status"=>false,
          "msg"=>"No Comments"
        ));
    }


    
    

//================================================
// LOAD BLOG COMMENTS
//================================================
?>