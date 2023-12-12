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
    <link rel="stylesheet" href="css/editor.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>


    <?php include "dashboard_header.php" ?>
    <!-- editor for blog post -->
    <div class="editor_banner">
        <input type="file" accept="image/*" name="" id="banner_upload" hidden>
        <label for="banner_upload" class="banner_upload_btn">
            <i class="fa fa-upload" aria-hidden="true"></i>
        </label>
    </div>

    <div class="editor_title">
        <textarea name="" class="title_title" type="text" placeholder="Blog Title Here..."></textarea>
        <textarea name="" class="para_writing" type="text" placeholder="Start writing Here..."></textarea>
    </div>

    <div class="blogs_btns_option">
        <button class="btn dark publish_btn">Publish</button>
        <input type="file" name="" accept="image/*" id="image_upload" hidden>
        <label for="image_upload" class="btn grey upload_btn">Upload Image</label>
    </div>



    <?php
    include "dashboard_footer.php";
    ?>