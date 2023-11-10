<?php
header("Content-Type:application/json");
header("Access-Control-Allow-Origin:*");
include "../../admin/config.php";

//================================================
// LOAD CATEGORIES
//================================================


$loadQuery = "SELECT *,DATE_FORMAT(last_updated,'%d %b, %Y') as last_updated FROM `categories`";

$loadQueryResult = mysqli_query($conn, $loadQuery) or die("Query failed");
if (mysqli_num_rows($loadQueryResult) > 0) {
    echo json_encode(mysqli_fetch_all($loadQueryResult, MYSQLI_ASSOC));
} else {
    echo json_encode(array(
        "status" => false,
        "msg" => "No category was found"
    ));
}

//================================================
// LOAD CATEGORIES
//================================================
