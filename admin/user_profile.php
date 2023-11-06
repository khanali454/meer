<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Naveed Ullah</title>

    <!-- css link -->

    <link rel="stylesheet" href="css/user_profile.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
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

                    <li>
                        <a href="index.html">
                            <i class="fa-solid fa-gauge-high"></i>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>

                    <li class="__active">
                        <a href="users.html">
                            <i class="fa-solid fa-users-line"></i>
                            <span class="text">Users</span>
                        </a>
                    </li>

                    <li>
                        <a href="creaters.html">
                            <i class="fa-solid fa-user-group"></i>
                            <span class="text">Creators</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa-solid fa-file-pen"></i>
                            <span class="text">Requests</span>
                        </a>
                    </li>

                    <li>
                        <a href="blogs.html">
                            <i class="fa-solid fa-blog"></i>
                            <span class="text">Blogs</span>
                        </a>
                    </li>

                    <li>
                        <a href="articls.html">
                            <i class="fa-solid fa-pen"></i>
                            <span class="text">Articles</span>
                        </a>
                    </li>

                    <li>
                        <a href="published.html">
                            <i class="fa-solid fa-gauge-high"></i>
                            <span class="text">Posts</span>
                        </a>
                    </li>

                    <li>
                        <a href="draft.html">
                            <i class="fa-solid fa-align-left"></i>
                            <span class="text">Drafts</span>
                        </a>
                    </li>

                    <li>
                        <a href="published.html">
                            <i class="fa-solid fa-square-check"></i>
                            <span class="text">Published</span>
                        </a>
                    </li>

                    <li>
                        <a href="categories.html">
                            <i class="fa-solid fa-tags"></i>
                            <span class="text">Categories</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa-solid fa-chart-column"></i>
                            <span class="text">web stats</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa-solid fa-palette"></i>
                            <span class="text">web theme</span>
                        </a>
                    </li>


                </ul>
            </div>
            <div class="_bottom_right">
                <!-- CONTENT -->
                <div class="_greeting">Slam Admin !</div>
                <div class="_breadcrumb">
                    Dashboard
                    <hr> Users
                </div>






                <div class="_profile_heading_">Naveed Ullah</div>
                <div class="_websites_stats_container _users_stats">
                    <!--stat box -->
                    <div class="_stat_box">
                        <div class="_stat_box_top">
                            <div class="stat_box_top_left">
                                <i class="fa-solid fa-gauge-high"></i>
                            </div>
                            <div class="stat_box_top_right">
                                <div class="_stat_count">07</div>
                                <div class="_stat_count_name">Total Posts</div>
                            </div>
                        </div>
                    </div>
                    <!-- stat box end -->
                </div>

                <div class="_profile_heading_">Profile Details</div>
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

                </div>


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
                                <td>1</td>
                                <td>4</td>
                                <td>5</td>
                                <!-- <td><button class="_user_edit_btn">View</button></td>
                                <td><button class="_user_delete_btn">Delete</button></td> -->
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- CONTENT -->
            </div>
        </div>
    </div>


    <script>
        document.getElementById("btn_for_sidebar").addEventListener("click", (e) => {
            e.preventDefault();
            console.log(document.querySelector("._bottom_left").style.left);
            document.querySelector("._bottom_left").classList.toggle("move_it");
        });
    </script>
</body>

</html>
