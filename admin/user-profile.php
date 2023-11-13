<?php include "dashboard_header.php";
if (isset($_GET['user']) && !empty(trim($_GET['user']))) {
    $user_id = mysqli_real_escape_string($conn, trim($_GET['user']));
} else {
    $user_id = 0;
}
$user = loadUsers(0, "no_limit", "user_id=" . $user_id);
$user_row = $user[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - <?= $user_row['user_fullname'] ?></title>

    <!-- css link -->

    <link rel="stylesheet" href="css/user_profile.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php include "common_styles.php"; ?>
</head>

<body>



    <div class="_profile_heading_"><?= $user_row['user_fullname'] ?></div>
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
                    <th>Created At</th>
                    <th>Cover img</th>
                    <th>Profile img</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td><?= $user_row['user_id'] ?></td>
                    <td><?= $user_row['user_fullname'] ?></td>
                    <td><?= $user_row['user_email'] ?></td>
                    <td><?= $user_row['user_ipaddress'] ?></td>
                    <td><?= $user_row['user_location'] ?></td>
                    <td><?= $user_row['user_class'] ?></td>
                    <td><?= $user_row['user_createdat'] ?></td>
                    <td>
                        <div class="_cover_img_">
                            <?php if (!empty($user_row['user_coverimg'])) { ?>
                                <img src="<?= $user_row['user_coverimg'] ?>" alt="cover">
                            <?php } else { ?>
                                NA
                            <?php } ?>
                        </div>
                    </td>
                    <td>
                        <div class="_cover_img_ __profile_">
                            <img src="<?= $user_row['user_profileimg'] ?>" alt="profile">
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


    <?php
    include "dashboard_footer.php";
    ?>