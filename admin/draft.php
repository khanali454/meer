<?php
if (isset($_GET['draft']) && in_array($_GET['draft'], ['posts', 'blogs', 'articles'])) {
    $draft_type = $_GET['draft'];
    if ($draft_type == "posts") {
        $draft_heading = "All Draft Posts";
        // $draft_array_data = load_draft_array_data($draft_type);
    } else if ($draft_type == "blogs") {
        $draft_heading = "All Draft Blogs";
        // $draft_array_data = load_draft_array_data($draft_type);
    } else if ($draft_type == "articles") {
        $draft_heading = "All Draft Articles";
        // $draft_array_data = load_draft_array_data($draft_type);
    }
} else {
    $draft_array_data = false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $draft_heading ?? "Drafts" ?></title>

    <!-- css link -->

    <link rel="stylesheet" href="css/user_profile.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/creater.css">
    <link rel="stylesheet" href="css/loading_animation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php include "dashboard_header.php" ?>





    <div class="_profile_heading_">Draft Stats</div>
    <div class="_websites_stats_container _users_stats">

        <!--stat box -->
        <div class="_stat_box published_space_card">
            <div class="_stat_box_top">
                <div class="stat_box_top_left">
                    <i class="fa-solid fa-file-pen"></i>
                </div>
                <div class="stat_box_top_right">
                    <div class="_stat_count"><?= CountDraftBlogs() ?></div>
                    <div class="_stat_count_name">Draft Blogs</div>
                </div>
            </div>
            <a href="blogs.php">
                <div class="_stat_box_bottom">
                    <div class="_stat_count_type_name">View</div>
                    <i class="fa-solid fa-circle-arrow-right"></i>
                </div>
            </a>
        </div>
        <!-- stat box end -->

        <!--stat box -->
        <div class="_stat_box published_space_card">
            <div class="_stat_box_top">
                <div class="stat_box_top_left">
                    <i class="fa-solid fa-file-pen"></i>
                </div>
                <div class="stat_box_top_right">
                    <div class="_stat_count"><?= CountDrfatArticles() ?></div>
                    <div class="_stat_count_name">Draft Articles</div>
                </div>
            </div>
            <a href="articles.php">
                <div class="_stat_box_bottom">
                    <div class="_stat_count_type_name">View</div>
                    <i class="fa-solid fa-circle-arrow-right"></i>
                </div>
            </a>
        </div>
        <!-- stat box end -->



        <!--stat box -->
        <div class="_stat_box published_space_card">
            <div class="_stat_box_top">
                <div class="stat_box_top_left">
                    <i class="fa-solid fa-file-pen"></i>
                </div>
                <div class="stat_box_top_right">
                    <div class="_stat_count">110</div>
                    <div class="_stat_count_name">Draft Posts</div>
                </div>
            </div>
            <a href="">
                <div class="_stat_box_bottom">
                    <div class="_stat_count_type_name">View</div>
                    <i class="fa-solid fa-circle-arrow-right"></i>
                </div>
            </a>
        </div>
        <!-- stat box end -->

    </div>

    <div class="_container_posts_ _profile_heading_ ">
        <div class="_profile_heading_">
            <?= $draft_heading ?? "Drafts" ?>
        </div>
        <select name="" id="draft_filter">
            <option value="posts">Filter By</option>
            <option value="posts">Draft Posts</option>
            <option value="posts">Draft Articles</option>
            <option value="posts">Draft Blogs</option>
        </select>
    </div>
    <div class="_table_container_">
        <table class="_table_is" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CATEGORIES NAME</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Posts</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>

                <?php if ($draft_array_data === false) { ?>
                    <tr>
                        <td colspan="7" style="text-align:center;color:red;">
                            Nothing is in draft yet.
                        </td>
                    </tr>
                <?php } else { ?>

                    <tr>
                        <td>1</td>
                        <td>khan khosa</td>
                        <td>description</td>
                        <td>JAN 7, 2023</td>
                        <td>blogs</td>
                        <td><button class="_user_edit_btn">Edit</button></td>
                        <td><button class="_user_delete_btn">Delete</button></td>
                    </tr>

                <?php } ?>



            </tbody>
        </table>

    </div>




    <?php
    include "dashboard_footer.php";
    ?>