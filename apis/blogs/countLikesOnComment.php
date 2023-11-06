<?php
header("Content-Type:application/json");
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:POST");
header("Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Origin,Access-Control-Allow-Methods,Authorization,X-Requested-With");
include "../../admin/config.php";

//================================================
// Count Like On Blog comments
//================================================



$data = json_decode(file_get_contents("php://input"), true);

$commentID = $data['comment'];

$check_like = "SELECT * FROM `blog_comments_likes` WHERE comment_id={$commentID}";
$check_like_result = mysqli_query($conn, $check_like) or die("Query failed");


    echo json_encode(
        array(
            "likes" =>mysqli_num_rows($check_like_result) ,
            "status" => true
            )
    );




//================================================
// Count Like On Blog comments
//================================================
?>