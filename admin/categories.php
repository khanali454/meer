<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>

    <!-- css link -->
    <link rel="stylesheet" href="css/categories.css">
    <link rel="stylesheet" href="css/user_profile.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/creater.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <?php include "common_styles.php"; ?>

</head>

<body>
    <?php include "dashboard_header.php" ?>





    <div class="_profile_heading_"> Categories </div>
    <div class="_websites_stats_container _users_stats">
        <!--stat box -->
        <div class="_stat_box">
            <div class="_stat_box_top">
                <div class="stat_box_top_left">
                    <i class="fa-solid fa-tags"></i>
                </div>
                <div class="stat_box_top_right">
                    <div class="_stat_count" id="category_count">07</div>
                    <div class="_stat_count_name">Total Categories</div>
                </div>
            </div>
        </div>
        <!-- stat box end -->
    </div>

    <div class="_container_posts_ _profile_heading_ ">
        <div class="_profile_heading_">
            Categories
        </div>
        <div class="_create_new_btn _create_new_btn_pop" id="_open_btn_pop"> <button id="open-btn">Add New</button>
        </div>
    </div>
    <div class="_table_container_">
        <table class="_table_is" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>Description</th>
                    <th>Last Updated</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody id=loaded_data>



            </tbody>
        </table>

    </div>

    <!-- CONTENT -->
    <div id="popup-container" data-popup-state="add">
        <form id="popup-content" method="post" action="">
            <h2 id="heading-content">
                Add Category
                <span class="close-icon" id="open-close">&times;</span>
            </h2>

            <div class="categori_content">
                <label for="">Name</label>
                <input type="text" placeholder="category name" name="" id="c_name">
                <label for="">Description</label>
                <textarea name="" id="c_desc" cols="20" rows="10" placeholder="Short description"></textarea>
                <input type="submit" value="Save" id=add_category_btn>
            </div>

        </form>
    </div>



    <!-- overlay -->
    <div class="over_lay"
        style="display:none;position: fixed; top: 0px;left: 0px;width: 100%;height: 100%;background: rgba(0,0,0,0.2);z-index: 100000;"
        id="overlay"></div>



    <?php
    include "dashboard_footer.php";
    ?>

    <script src="js/Js.js"></script>
    <script src="backend/categories/js/eventListener.js"></script>
    <script src="backend/categories/js/loadCategory.js"></script>
    <script src="backend/categories/js/deleteCategory.js"></script>
    <script src="backend/categories/js/insertCategory.js"></script>