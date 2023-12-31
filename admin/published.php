<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Published</title>

    <!-- css link -->

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/user_profile.css">
    <link rel="stylesheet" href="css/published.css">
    <link rel="stylesheet" href="css/loading_animation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php include "dashboard_header.php" ?>



    <div class="_profile_heading_">Published</div>
    <div class="_websites_stats_container published_websites_stats_container">


        <!--stat box -->
        <div class="_stat_box published_space_card">
            <div class="_stat_box_top">
                <div class="stat_box_top_left">
                    <i class="fa-solid fa-file-pen"></i>
                </div>
                <div class="stat_box_top_right">
                    <div class="_stat_count"><?= CountPublishedBlogs() ?></div>
                    <div class="_stat_count_name">Total Blogs</div>
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
                    <div class="_stat_count"><?= CountPublishedArticles() ?></div>
                    <div class="_stat_count_name">Total Articles</div>
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
                    <div class="_stat_count_name">Total Posts</div>
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







    <!-- CONTENT -->

    <?php
    include "dashboard_footer.php";
    ?>