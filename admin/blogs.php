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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
<?php include "dashboard_header.php" ?>






                <div class="_profile_heading_">  </div>
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
                               <a href="editor.html"><div class="_stat_count_name" style="color: #fff;">Add New Blogs</div></a> 
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
                        echo "<pre>";
                        print_r(loadBlogs(1,1));
                        ?>
                    </div>
                    <div class="_suspend_btn">Suspend</div>
                </div>

                <div class="_table_container_ _next_post_table">
                    <table class="_table_is" border="1">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Tags</th>
                                <th>Discription</th>
                                <th>Date & time</th>
                                <th>Views</th>
                                <th>Comments</th>
                                <th>Likes</th>
                                <th>Img</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td>Naveed,khosa,etc</td>
                                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae soluta odio exercitationem molestias sit maiores.</td>
                                <td>24/05/2033</td>
                                <th>4</th>
                                <th>6</th>
                                <th>5</th>
                                <th>Img</th>
                                <td><button class="_user_edit_btn">Edit</button></td>
                                <td><button class="_user_delete_btn">Delete</button></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- CONTENT -->
          

<?php
include "dashboard_footer.php";
?>