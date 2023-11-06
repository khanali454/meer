<?php
header("Content-Type:application/json");
header("Access-Control-Allow-Origin:*");
include "../../admin/config.php";

//================================================
// LOAD BLOGS
//================================================


$data = json_decode(file_get_contents("php://input"), true);


$start = $data['start'];


$loadBlogQuery = "SELECT *,DATE_FORMAT(last_updated,'%d %b, %Y') as last_updated FROM `blogs` b INNER JOIN `users` u ON b.blog_publisher=u.user_id WHERE b.blog_status='active' ORDER BY blog_id DESC LIMIT $start,2";
$loadBlogQueryResult = mysqli_query($conn, $loadBlogQuery) or die("Query failed");
if (mysqli_num_rows($loadBlogQueryResult) > 0) {
    echo json_encode(mysqli_fetch_all($loadBlogQueryResult, MYSQLI_ASSOC));
} else {
    echo json_encode(array(
        "status" => false,
        "msg" => "No blog was found"
    ));
}




//================================================
// LOAD BLOGS
//================================================
?>