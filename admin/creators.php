<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creators</title>

    <!-- css link -->

    <link rel="stylesheet" href="css/user_profile.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/creater.css">
    <link rel="stylesheet" href="css/loading_animation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
<?php include "dashboard_header.php" ?>






                <div class="_profile_heading_">Creators</div>
                <div class="_websites_stats_container _users_stats">
                    <!--stat box -->
                    <div class="_stat_box">
                        <div class="_stat_box_top">
                            <div class="stat_box_top_left">
                                <i class="fa-solid fa-user-group"></i>
                            </div>
                            <div class="stat_box_top_right">
                                <div class="_stat_count"><?=CountAllCreators() ?></div>
                                <div class="_stat_count_name">Total Creators</div>
                            </div>
                        </div>
                    </div>
                    <!-- stat box end -->

                    <!--stat box -->
                    <div class="_stat_box">
                        <div class="_stat_box_top">
                            <div class="stat_box_top_left">
                                <i class="fa-solid fa-user-group"></i>
                            </div>
                            <div class="stat_box_top_right">
                                <div class="_stat_count"><?=countVerifiedCreators() ?></div>
                                <div class="_stat_count_name">Verified Creators</div>
                            </div>
                        </div>
                    </div>
                    <!-- stat box end -->

                </div>

                <div class="_container_posts_ _profile_heading_ ">
                    <div class="_profile_heading_">
                        All Creators 
                    </div>
                    <div class="_create_new_btn">Add new creator</div>
                </div>
                <div class="_table_container_">
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
                                <th>EDIT</th>
                                <th>DELETE</th>
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
                                <td><button class="_user_edit_btn">Edit</button></td>
                                <td><button class="_user_delete_btn">Delete</button></td>
                            </tr>

                        </tbody>
                    </table>

                </div>

<!-- 
                <div class="_container_posts_">
                    <div class="_profile_heading_">
                        Posts 
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>Naveed</td>
                                <td>yameenkhan040@gmail.com</td>
                                <td>Verified</td>
                                <td><button class="_user_edit_btn">Edit</button></td>
                                <td><button class="_user_delete_btn">Delete</button></td>
                            </tr>

                        </tbody>
                    </table>
                </div> -->
                <!-- CONTENT -->



<?php
include "dashboard_footer.php";
?>