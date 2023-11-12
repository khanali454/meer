<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

    <!-- css link -->

    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/loading_animation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
<?php include "dashboard_header.php" ?>









                <div class="_websites_stats_container _users_stats">

                    <!--stat box -->
                    <div class="_stat_box">
                        <div class="_stat_box_top">
                            <div class="stat_box_top_left">
                                <i class="fa-solid fa-users-line"></i>
                            </div>
                            <div class="stat_box_top_right">
                                <div class="_stat_count"><?= CountAllUsers() ?></div>
                                <div class="_stat_count_name">Total Users</div>
                            </div>
                        </div>
                    </div>
                    <!-- stat box end -->

                      <!--stat box -->
                      <div class="_stat_box">
                        <div class="_stat_box_top">
                            <div class="stat_box_top_left">
                                <i class="fa-solid fa-users-line"></i>
                            </div>
                            <div class="stat_box_top_right">
                                <div class="_stat_count"><?= CountActiveUsers() ?></div>
                                <div class="_stat_count_name">Active Users</div>
                            </div>
                        </div>
                    </div>
                    <!-- stat box end -->

                    
                    <!--stat box -->
                    <div class="_stat_box">
                        <div class="_stat_box_top">
                            <div class="stat_box_top_left">
                                <i class="fa-solid fa-users-line"></i>
                            </div>
                            <div class="stat_box_top_right">
                                <div class="_stat_count"><?= countSuspendedUsers() ?></div>
                                <div class="_stat_count_name">Suspended users</div>
                            </div>
                        </div>
                    </div>
                    <!-- stat box end -->

                    <!--stat box -->
                    <div class="_stat_box">
                        <div class="_stat_box_top">
                            <div class="stat_box_top_left">
                                <i class="fa-solid fa-users-line"></i>
                            </div>
                            <div class="stat_box_top_right">
                                <div class="_stat_count"><?= countVerifiedUsers() ?></div>
                                <div class="_stat_count_name">Verified users</div>
                            </div>
                        </div>
                    </div>
                    <!-- stat box end -->



                </div>

                <div class="_table_container_">
                    <table class="_table_is" border="1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>FULL NAME</th>
                                <th>EMAIL</th>
                                <th>CLASS</th>
                                <th>SEE DATA</th>
                                <th>SUSPEND</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $limit = 7;
                            $current_page = 1;
                            $start = 1;
                            
                            // if(isset($_GET["page"]) && !empty($_GET['page'])){
                            //     $current_page = $_GET["page"];
                            //     $start = $start*$current_page + $limit;
                            // }
                            $users = loadUsers($start,$limit);
                            $total_users = CountAllUsers();
                            $total_pages = ceil($total_users / $limit);
                            echo "<br>users : ". $total_users;
                            echo "<br>pages : ". $total_pages;
                            echo "<br><pre>";
                            print_r($users);

                            

                            ?>

                            <tr>
                                <td>1</td>
                                <td>khan khosa</td>
                                <td>khankhosa@gmail.com</td>
                                <td>verified</td>
                                <td><a href="user_profile.php" class="_user_edit_btn">View</a></td>
                                <td><button class="_user_delete_btn">Delete</button></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Khan</td>
                                <td>naveedkhosa512@gmail.com</td>
                                <td>Classic</td>
                                <td><button class="_user_edit_btn">View</button></td>
                                <td><button class="_user_delete_btn">Delete</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Naveed</td>
                                <td>yameenkhan040@gmail.com</td>
                                <td>Verified</td>
                                <td><button  class="_user_edit_btn">View</button></td>
                                <td><button class="_user_delete_btn">Delete</button></td>
                            </tr>

                        </tbody>
                    </table>

                </div>

                <!-- CONTENT -->


<?php
include "dashboard_footer.php";
?>