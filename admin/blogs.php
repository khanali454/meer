<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>

    <!-- css link -->

    <link rel="stylesheet" href="css/user_profile.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/blogs.css">

    <link rel="stylesheet" href="css/loading_animation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php include "dashboard_header.php" ?>






    <div class="_profile_heading_"> </div>
    <div class="_websites_stats_container _users_stats">
        <!--stat box -->
        <div class="_stat_box">
            <div class="_stat_box_top">
                <div class="stat_box_top_left">
                    <i class="fa-solid fa-blog"></i>
                </div>
                <div class="stat_box_top_right">
                    <div class="_stat_count"><?= CountAllBlogs() ?></div>
                    <div class="_stat_count_name">Total Blogs</div>
                </div>
            </div>
        </div>
        <div class="_stat_box">
            <div class="_stat_box_top  blogs_stat_box_top">
                <div class="stat_box_top_left" style="cursor: pointer;">
                    <a href="editor.html"><i class="fa-solid fa-circle-plus"></i></a>
                </div>
                <div class="stat_box_top_right">
                    <a href="editor.html">
                        <div class="_stat_count_name" style="color: #fff;">Add New Blogs</div>
                    </a>
                </div>
            </div>
        </div>
        <!-- stat box end -->
    </div>

    <!-- <div class="_profile_heading_">Profile Details</div> -->
    <!-- <div class="_table_container_">
                    <table class="_table_is" border="1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>FULL NAME</th>
                                <th>EMAIL</th>
                                <th>IP</th>
                                <th>Location</th>
                                <th>CLASS</th>
                                <th>Password</th>
                                <th>Created At</th>
                                <th>Cover img</th>
                                <th>Profile img</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>khan khosa</td>
                                <td>khankhosa@gmail.com</td>
                                <td>180.10.10.10</td>
                                <td>Dera ghazi khan</td>
                                <td>verified</td>
                                <td>K123@sgff</td>
                                <td>JAN 7, 2023</td>
                                <td>
                                    <div class="_cover_img_">
                                        <img src="#" alt="">
                                    </div>
                                </td>
                                <td>
                                    <div class="_profile_img_">
                                        <img src="#" alt="">
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div> -->


    <div class="_container_posts_">
        <div class="_profile_heading_">
            Blogs
            <?php
            // echo "<pre>";
            // print_r(loadBlogs(0,2,"blog_id DESC"));
            ?>
        </div>
        <div class="_suspend_btn">Suspend</div>
    </div>

    <?php
    $limit = 5;
    $current_page = 1;
    $start = 0;

    if (isset($_GET["page"]) && !empty($_GET['page'])) {
        $current_page = $_GET["page"];
        $start = ($current_page - 1) * $limit;
    }
    if (isset($_GET["search"]) && !empty($_GET["search"])) {
        $search = "b.blog_title LIKE '%" . $_GET["title"] . "%' OR u.user_fullname LIKE '%" . $_GET["search"] . "%'";
        $users = loadBlogs($start, "no_limit", $search);
    } else {
        $search = "";
        $blogs = loadBlogs($start, $limit, $search);
    }


    $total_blogs = CountAllBlogs();
    $total_pages = ceil($total_blogs / $limit);
    ?>

    <div class="search_filter_container">
        <form class="search_box_container" method="get" action="<?= $_SERVER['PHP_SELF'] ?>">
            <input type="search" required value="<?= $_GET['search'] ?? "" ?>" placeholder="Search by title or publisher name" name="search">
            <button type="submit">Search</button>
        </form>
    </div>

    <p style="padding:10px 0;color:rgba(255,255,255,0.46);width:100%;">
        <?php if (isset($_GET['search'])) { ?>
            Showing Search Results - <a href="blogs.php" style="color: #E80000;">cancel search</a>
        <?php } else { ?>
            Showing <?= $start + 1 ?> to <?= (($start + $limit) > $total_blogs) ? $total_blogs : ($start + $limit) ?> of <?= $total_blogs ?> blogs
        <?php } ?>
    </p>

    <div class="_table_container_ _next_post_table">
        <table class="_table_is" border="1">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Publisher</th>
                    <th>Blog Category</th>
                    <th>Tags</th>
                    <th>Last Updated</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($blogs == 0) { ?>
                    <tr>
                        <td colspan="6">No record was found</td>
                    </tr>
                <?php } else { ?>


                    <?php foreach ($blogs as $blog) { ?>
                        <tr>
                            <td><?= $blog['blog_title'] ?></td>
                            <td><?= $blog['user_fullname'] ?></td>
                            <td><?= blogCategoryName($blog['blog_category']) ?></td>
                            <td><?= loadBlogTages($blog['blog_id']) ?></td>
                            <td><?= $blog['last_updated'] ?></td>
                            <td>
                                <button class="_user_edit_btn">Edit</button>
                                <button class="_user_delete_btn">Delete</button>
                            </td>
                        </tr>
                <?php }
                }  ?>

            </tbody>
        </table>
    </div>
    <!-- pagination -->
    <?php
    if (!isset($_GET['search'])) {
        echo printPagination("blogs.php", $current_page, $total_pages);
    }
    ?>
    <!-- CONTENT -->



    <?php
    include "dashboard_footer.php";
    ?>