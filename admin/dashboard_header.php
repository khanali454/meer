<?php
include "config.php";
$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);


if (!isset($_SESSION['admin_logged_in_id'])) {
    header("Location:index.php");
}

function CountAllUsers()
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_role` = 'user';")) {
        return mysqli_num_rows($result);
    }
}

function CountActiveUsers()
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_role` = 'user' AND  `status` = 'active';")) {
        return mysqli_num_rows($result);
    }
}

function countSuspendedUsers()
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_role` = 'user' AND  `status` = 'suspended';")) {
        return mysqli_num_rows($result);
    }
}

function countVerifiedUsers()
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_role` = 'user' AND  `user_class` = 'verified';")) {
        return mysqli_num_rows($result);
    }
}

function countVerifiedActiveUsers()
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_role` = 'user' AND  `status` = 'active' AND `user_class` = 'verified';")) {
        return mysqli_num_rows($result);
    }
}

function countVerifiedSuspendedUsers()
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_role` = 'user' AND  `status` = 'suspended' AND `user_class` = 'verified';")) {
        return mysqli_num_rows($result);
    }
}

function CountAllCreators()
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_role` = 'creator';")) {
        return mysqli_num_rows($result);
    }
}

function CountActiveCreators()
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_role` = 'creator' AND  `status` = 'active';")) {
        return mysqli_num_rows($result);
    }
}


function CountSuspendedCreators()
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_role` = 'creator' AND  `status` = 'suspended';")) {
        return mysqli_num_rows($result);
    }
}

function countVerifiedCreators()
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_role` = 'creator' AND `user_class` = 'verified';")) {
        return mysqli_num_rows($result);
    }
}

function countVerifiedActiveCreators()
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_role` = 'creator' AND  `status` = 'active' AND `user_class` = 'verified';")) {
        return mysqli_num_rows($result);
    }
}

function countVerifiedSuspendedCreators()
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_role` = 'creator' AND  `status` = 'suspended' AND `user_class` = 'verified';")) {
        return mysqli_num_rows($result);
    }
}


function CountAllBlogs()
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `blogs`;")) {
        return mysqli_num_rows($result);
    }
}

function CountAllArticles()
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `articles`;")) {
        return mysqli_num_rows($result);
    }
}

function countAllCategories()
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `categories`;")) {
        return mysqli_num_rows($result);
    }
}

// published data
function CountPublishedArticles()
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `articles` WHERE article_status='active';")) {
        return mysqli_num_rows($result);
    }
}

function CountPublishedBlogs()
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `blogs` WHERE blog_status='active';")) {
        return mysqli_num_rows($result);
    }
}



// draft data
function CountDrfatArticles()
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `articles` WHERE article_status='draft';")) {
        return mysqli_num_rows($result);
    }
}

function CountDraftBlogs()
{
    global $conn;
    if ($result = mysqli_query($conn, "SELECT * FROM `blogs` WHERE blog_status='draft';")) {
        return mysqli_num_rows($result);
    }
}


// users
function loadUsers($start = 0, $limit = 7,$where_clause="", $order_by = "")
{
    global $conn;
    $sql = "SELECT * FROM users WHERE user_role='user'";
    if($where_clause != ""){
        $sql .= " AND " . $where_clause;
    }
    if ($order_by != "") {
        $sql .= " ORDER BY " . $order_by;
    }
    $sql .= " LIMIT $start,$limit";

    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            return [
                "records"=> mysqli_fetch_all($result,MYSQLI_ASSOC),
                "total"=> mysqli_num_rows($result),
            ];
        } else {
            return 0;
        }
    } else {
        return false;
    }
}


// print pagination
function printPagination($page_url,$current_page,$pages)
{
    $resulted_output = "<div class='pagination__container'><ul class='pagination__'>";
    if( $current_page > 1){
        $resulted_output .="<li><a href='{$page_url}?page=".($current_page-1)."'>Prev</a></li>";
    }

    for ($page = 1; $page <= $pages; $page++) {
      
        if($current_page==$page){
            $resulted_output .="<li class='active'><a href='{$page_url}?page={$page}'>{$page}</a></li>";
        }else{
            $resulted_output .="<li><a href='{$page_url}?page={$page}'>{$page}</a></li>";
        }
    
    }
    if( $current_page < $pages){
        $resulted_output .="<li><a href='{$page_url}?page=".($current_page+1)."'>Next</a></li>";
    }

    $resulted_output .= "</ul></div>";
    return $resulted_output;
}


// load blogs

function loadBlogs($start = 0, $limit = 7, $order_by = "")
{
    global $conn;
    $sql = "SELECT *,DATE_FORMAT(last_updated,'%d %b, %Y') as last_updated FROM `blogs` b INNER JOIN `users` u ON b.blog_publisher=u.user_id";
    if ($order_by != "") {
        $sql .= " ORDER BY " . $order_by;
    }
    $sql .= " LIMIT $start,$limit";

    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            return 0;
        }
    } else {
        return false;
    }
}


// load blogs

?>


<div class="_dashboard">
    <div class="_top">
        <div class="_top_logo">Admin</div>
        <ul class="right_nav">
            <li>
                <a href="#">
                    <i class="fa-solid fa-envelope"></i>
                    <span>Messages</span>
                    <i class="fa-solid fa-chevron-down doosra" style="font-size: 14px;"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-bell"></i>
                    <span>Alerts</span>
                    <i class="fa-solid fa-chevron-down doosra" style="font-size: 14px;"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-user"></i>
                    <span>Admin</span>
                    <i class="fa-solid fa-chevron-down doosra" style="font-size: 14px;"></i>
                </a>
            </li>

            <li>
                <a href="" id="btn_for_sidebar">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="_bottom">
        <div class="_bottom_left">
            <ul class="_side_bar">


                <!-- menu item -->
                <?php if ($curPageName == "dashboard.php") { ?>
                    <li class="__active">
                        <a href="dashboard.php">
                            <i class="fa-solid fa-gauge-high"></i>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="dashboard.php">
                            <i class="fa-solid fa-gauge-high"></i>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>
                <?php } ?>




                <!-- menu item -->
                <?php if ($curPageName == "users.php") { ?>
                    <li class="__active">
                        <a href="users.php">
                            <i class="fa-solid fa-users-line"></i>
                            <span class="text">Users</span>
                        </a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="users.php">
                            <i class="fa-solid fa-users-line"></i>
                            <span class="text">Users</span>
                        </a>
                    </li>
                <?php } ?>




                <!-- menu item -->
                <?php if ($curPageName == "creators.php") { ?>
                    <li class="__active">
                        <a href="creators.php">
                            <i class="fa-solid fa-user-group"></i>
                            <span class="text">Creators</span>
                        </a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="creators.php">
                            <i class="fa-solid fa-user-group"></i>
                            <span class="text">Creators</span>
                        </a>
                    </li>
                <?php } ?>




                <!-- menu item -->
                <?php if ($curPageName == "requests.php") { ?>
                    <li class="__active">
                        <a href="requests.php">
                            <i class="fa-solid fa-file-pen"></i>
                            <span class="text">Requests</span>
                        </a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="requests.php">
                            <i class="fa-solid fa-file-pen"></i>
                            <span class="text">Requests</span>
                        </a>
                    </li>
                <?php } ?>




                <!-- menu item -->
                <?php if ($curPageName == "blogs.php") { ?>
                    <li class="__active">
                        <a href="blogs.php">
                            <i class="fa-solid fa-blog"></i>
                            <span class="text">Blogs</span>
                        </a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="blogs.php">
                            <i class="fa-solid fa-blog"></i>
                            <span class="text">Blogs</span>
                        </a>
                    </li>
                <?php } ?>




                <!-- menu item -->
                <?php if ($curPageName == "articles.php") { ?>
                    <li class="__active">
                        <a href="articles.php">
                            <i class="fa-solid fa-pen"></i>
                            <span class="text">Articles</span>
                        </a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="articles.php">
                            <i class="fa-solid fa-pen"></i>
                            <span class="text">Articles</span>
                        </a>
                    </li>
                <?php } ?>




                <!-- menu item -->
                <?php if ($curPageName == "posts.php") { ?>
                    <li class="__active">
                        <a href="posts.php">
                            <i class="fa-solid fa-gauge-high"></i>
                            <span class="text">Posts</span>
                        </a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="posts.php">
                            <i class="fa-solid fa-gauge-high"></i>
                            <span class="text">Posts</span>
                        </a>
                    </li>
                <?php } ?>




                <!-- menu item -->
                <?php if ($curPageName == "draft.php") { ?>
                    <li class="__active">
                        <a href="draft.php">
                            <i class="fa-solid fa-align-left"></i>
                            <span class="text">Drafts</span>
                        </a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="draft.php">
                            <i class="fa-solid fa-align-left"></i>
                            <span class="text">Drafts</span>
                        </a>
                    </li>
                <?php } ?>




                <!-- menu item -->
                <?php if ($curPageName == "published.php") { ?>
                    <li class="__active">
                        <a href="published.php">
                            <i class="fa-solid fa-square-check"></i>
                            <span class="text">Published</span>
                        </a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="published.php">
                            <i class="fa-solid fa-square-check"></i>
                            <span class="text">Published</span>
                        </a>
                    </li>
                <?php } ?>




                <!-- menu item -->
                <?php if ($curPageName == "categories.php") { ?>
                    <li class="__active">
                        <a href="categories.php">
                            <i class="fa-solid fa-tags"></i>
                            <span class="text">Categories</span>
                        </a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="categories.php">
                            <i class="fa-solid fa-tags"></i>
                            <span class="text">Categories</span>
                        </a>
                    </li>
                <?php } ?>


                <!-- menu item -->
                <?php if ($curPageName == "stats.php") { ?>
                    <li class="__active">
                        <a href="stats.php">
                            <i class="fa-solid fa-chart-column"></i>
                            <span class="text">web stats</span>
                        </a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="stats.php">
                            <i class="fa-solid fa-chart-column"></i>
                            <span class="text">web stats</span>
                        </a>
                    </li>
                <?php } ?>



                <!-- menu item -->
                <?php if ($curPageName == "theme.php") { ?>
                    <li class="__active">
                        <a href="theme.php">
                            <i class="fa-solid fa-palette"></i>
                            <span class="text">web theme</span>
                        </a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="theme.php">
                            <i class="fa-solid fa-palette"></i>
                            <span class="text">web theme</span>
                        </a>
                    </li>
                <?php } ?>

                <li>
                    <a href="logout.php">
                        <i class="fa-solid fa-power-off"></i>
                        <span class="text">Logout</span></a>
                </li>

            </ul>
        </div>

        <!-- CONTENT -->
        <div class="_bottom_right">
            <div class="_greeting">Slam Admin !</div>
            <div class="_breadcrumb">
                Dashboard
                <hr> <?php if (explode(".", $curPageName)[0] != "dashboard") {
                            echo explode(".", $curPageName)[0];
                        } ?>
            </div>