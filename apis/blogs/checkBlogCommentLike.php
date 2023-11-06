<?php
header("Content-Type:application/json");
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:POST");
header("Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Origin,Access-Control-Allow-Methods,Authorization,X-Requested-With");
include "../../admin/config.php";

//================================================
// Check Like On Blog comments
//================================================



$data = json_decode(file_get_contents("php://input"), true);

$commentID = $data['comment'];
$userID = $data['user'];

$check_like = "SELECT * FROM `blog_comments_likes` WHERE user_id={$userID} AND comment_id={$commentID}";
$check_like_result = mysqli_query($conn, $check_like) or die("Query failed");

if (mysqli_num_rows($check_like_result) > 0) {
    echo json_encode(
        array(
            "status" => true
            )
    );
} else {
    echo json_encode(
        array(
            "status" => false
            )
    );
}



//================================================
// Check Like On Blog comments
//================================================
?>