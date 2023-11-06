<?php
header("Content-Type:application/json");
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:POST");
header("Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Origin,Access-Control-Allow-Methods,Authorization,X-Requested-With");
include "../../admin/config.php";

//================================================
// add COMMENTS On Blog Post
//================================================



$data = json_decode(file_get_contents("php://input"), true);

$BlogID = $data['blog'];
$userID = $data['user'];

$check_like = "SELECT * FROM `blog_likes` WHERE user_id={$userID} AND blog_id={$BlogID}";
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
// add COMMENTS On Blog Post
//================================================
?>