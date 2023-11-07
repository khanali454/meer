<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- css link -->

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/loading_animation.css">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    
            
                <?php include "dashboard_header.php" ?>
                <div class="_welcome_message">
                    <i class="fa-solid fa-bullhorn"></i> Welcome to your dashboard!..
                </div>

                <div class="_websites_stats_container">


                    <!--stat box -->
                    <div class="_stat_box">
                        <div class="_stat_box_top">
                            <div class="stat_box_top_left">
                                <i class="fa-solid fa-users-line"></i>
                            </div>
                            <div class="stat_box_top_right">
                                <div class="_stat_count"><?= CountActiveUsers() ?></div>
                                <div class="_stat_count_name">Users</div>
                            </div>
                        </div>
                        <a href="users.html">
                           <div  class="_stat_box_bottom " >
                            <div class="_stat_count_type_name" >View</div>
                            <i class="fa-solid fa-circle-arrow-right"></i>
                           </div>
                        </a>
                        
                    </div>
                    <!-- stat box end -->

                    <!--stat box -->
                    <div class="_stat_box">
                        <div class="_stat_box_top">
                            <div class="stat_box_top_left">
                                <i class="fa-solid fa-user-group"></i>
                            </div>
                            <div class="stat_box_top_right">
                                <div class="_stat_count">100</div>
                                <div class="_stat_count_name">creators</div>
                            </div>
                        </div>
                        <a href="creaters.html">
                        <div class="_stat_box_bottom">
                            <div class="_stat_count_type_name">View</div>
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                        </a>
                    </div>
                    <!-- stat box end -->

                    <!--stat box -->
                    <div class="_stat_box">
                        <div class="_stat_box_top">
                            <div class="stat_box_top_left">
                                <i class="fa-solid fa-blog"></i>
                            </div>
                            <div class="stat_box_top_right">
                                <div class="_stat_count">0</div>
                                <div class="_stat_count_name">Blogs</div>
                            </div>
                        </div>
                        <a href="blogs.html">
                        <div class="_stat_box_bottom">
                            <div class="_stat_count_type_name">View</div>
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                        </a>
                    </div>
                    <!-- stat box end -->

                    <!--stat box -->
                    <div class="_stat_box">
                        <div class="_stat_box_top">
                            <div class="stat_box_top_left">
                                <i class="fa-solid fa-pen"></i>
                            </div>
                            <div class="stat_box_top_right">
                                <div class="_stat_count">11</div>
                                <div class="_stat_count_name">Articles</div>
                            </div>
                        </div>
                        <a href="articls.html">
                        <div class="_stat_box_bottom">
                            <div class="_stat_count_type_name">View</div>
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                         </a>
                    </div>
                    <!-- stat box end -->

                </div>


                <div class="_websites_stats_container _container_2">

                    <!--stat box -->
                    <div class="_stat_box">
                        <div class="_stat_box_top">
                            <div class="stat_box_top_left">
                                <i class="fa-solid fa-file-pen"></i>
                            </div>
                            <div class="stat_box_top_right">
                                <div class="_stat_count">110</div>
                                <div class="_stat_count_name">Requests</div>
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

                    <!--stat box -->
                    <div class="_stat_box">
                        <div class="_stat_box_top">
                            <div class="stat_box_top_left">
                                <i class="fa-solid fa-gauge-high"></i>
                            </div>
                            <div class="stat_box_top_right">
                                <div class="_stat_count">100</div>
                                <div class="_stat_count_name">Posts</div>
                            </div>
                        </div>
                        <a href="published.html">
                        <div class="_stat_box_bottom">
                            <div class="_stat_count_type_name">View</div>
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                         </a>
                    </div>
                    <!-- stat box end -->

                    <!--stat box -->
                    <div class="_stat_box">
                        <div class="_stat_box_top">
                            <div class="stat_box_top_left">
                                <i class="fa-solid fa-tags"></i>
                            </div>
                            <div class="stat_box_top_right">
                                <div class="_stat_count">100</div>
                                <div class="_stat_count_name">Categories</div>
                            </div>
                        </div>
                        <a href="categories.html">
                        <div class="_stat_box_bottom">
                            <div class="_stat_count_type_name">View</div>
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                        </a>
                    </div>
                    <!-- stat box end -->

                    <!--stat box -->
                    <div class="_stat_box">
                        <div class="_stat_box_top">
                            <div class="stat_box_top_left">
                                <i class="fa-solid fa-align-left"></i>
                            </div>
                            <div class="stat_box_top_right">
                                <div class="_stat_count">0</div>
                                <div class="_stat_count_name">Drafts</div>
                            </div>
                        </div>
                        <a href="draft.html">
                        <div class="_stat_box_bottom">
                            <div class="_stat_count_type_name">View</div>
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                        </a>
                    </div>
                    <!-- stat box end -->
                </div>





                <div class="_websites_stats_container _container_3">
                    <!--stat box -->
                    <div class="_stat_box">
                        <div class="_stat_box_top">
                            <div class="stat_box_top_left">
                                <i class="fa-solid fa-square-check"></i>
                            </div>
                            <div class="stat_box_top_right">
                                <div class="_stat_count">110</div>
                                <div class="_stat_count_name">Published</div>
                            </div>
                        </div>
                        <a href="published.html">
                        <div class="_stat_box_bottom">
                            <div class="_stat_count_type_name">View</div>
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                        </a>
                    </div>
                    <!-- stat box end -->
                </div>













<?php
include "dashboard_footer.php";
?>