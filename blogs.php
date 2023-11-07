<!-- db connection -->
<?php
include "include_in_all.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="static/css/index.css">
    <link rel="stylesheet" href="static/css/nav_bar_menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins:wght@200&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="static/css/all_blogs_pag.css">
    <link rel="stylesheet" href="static/css/index.css">
    <link rel="stylesheet" href="static/css/index.css.map">
    <link rel="stylesheet" href="static/css/index.scss">


    <!-- include loading anim css  -->
    <?php include "loading-css.php"; ?>
</head>

<body>

    <div class="loading_container" id="Pageloader"><span class="loader"></span></div>

    
    <!-- @include header -->
    <?php include "header.php"; ?>

    <!-- all blogs page -->

    <div class="all_blogs_page">
        <div class="all_blogs_container">

            <div class="all_blogs_heading_sec">
                <div class="all_blogs_heading_line"></div>
                <h2>Blogs</h2>
            </div>

            <!-- all blogs cards  -->
            <div class="all_blogs_cards" id="blogs"></div>
            <div class="loading_container" id="loader" style='display:flex; width:98%; padding-bottom:60px;'>
                <span class="loader" style="width:25px;height:25px;"></span>
            </div>
            <!-- all blogs cards  -->
        </div>
    </div>



    <!-- jquery file -->
    <script src="static/js/Js.js"></script>

    <script>
        $(document).ready(function() {
            $("#Pageloader").css("display", "none");

            var baseURL = "http://msamt.com/meer/";

            var starting = 0;
            var isReq = false;
            var isEmpty = false;


            // load comments
            function loadBlogs(startis) {
                var data = {
                    start: startis
                }

                data = JSON.stringify(data);
                $.ajax({
                    url: baseURL + "apis/blogs/loadBlogs.php",
                    method: "POST",
                    data: data,
                    beforeSend: function() {
                        $("#loader").css("display", "flex");
                        isReq = true;
                    },
                    success: function(resp) {
                        console.log(resp);
                        isReq = false;
                        $("#loader").css("display", "none");
                        if (resp.status == false) {
                            isEmpty = true;
                            if (startis == 0) {
                                $("#blogs").html(`<h3 style="text-align:center;background: rgba(255,255,255,0.2);margin:20px 0;color:#fff;padding:10px; width:100%;">${resp.msg}</h3>`);
                            } else {
                                $("#blogs").append(`<div class="all_blogs_card_container">
                                <div class="all_blogs_card_content_sec">
                                    <div class="all_blogs_card_para">
                                        <p style="padding:10px;text-align:center;">
                                            No more
                                        </p>
                                    </div>
                                </div>
                            </div>`);
                            }
                        } else {
                            $.each(resp, function(key, val) {
                                $("#blogs").append(`
                                <div class="all_blogs_card_container">
                        <div class="all_blogs_card_content_sec">
                            <div class="all_blogs_card_title">
                                <h2>${val.blog_title}</h2>
                            </div>
                            <div class="all_blogs_card_para">
                                <p>${val.blog_content}</p>
                            </div>
                        </div>
                        <div class="all_blogs_profile_img_sec">
                            <div class="all_blogs_card_profile">
                                <div class="__profile__pic"><img src="${val.user_profileimg}" alt="${val.user_username} proofile"></div>
                                <div class="user-details___">
                                    <h4>${val.user_fullname}</h4>
                                    <h6>@${val.user_username}</h6>
                                </div>
                            </div>
                            <div class="all_blogs_card_img">
                                <img src="uploads/feature-images/${val.blog_cover_img}" alt="">
                            </div>
                        </div>
    
                        <div class="all_blogs_date_btn">
                            <div class="date_blogs_card">
                                <p>${val.last_updated}</p>
                            </div>
                            <div class="readmore_blogs_card_btn">
                                <a href="blog.php?blog=${val.blog_id}">Click Here</a>
                            </div>
                        </div>
                        <div class="card_break_line"></div>
                    </div>`);
                            });

                            starting += 2;
                        }
                    }
                });
                console.log("called");
            }

            loadBlogs(0);

            window.addEventListener('scroll', () => {
                const {
                    scrollTop,
                    scrollHeight,
                    clientHeight
                } = document.documentElement;
                
                console.log(isEmpty);
                console.log(isReq);
                if (scrollTop + clientHeight >= scrollHeight - 5 && (isEmpty==false && isReq==false)) {
                    loadBlogs(starting);
                }
            }, {
                passive: true
            });


        });
    </script>
    <script>
        var navbar = document.getElementById("nav");
        var links = document.getElementById("links");
        navbar.addEventListener("click", () => {
            var classlists = navbar.classList;
            if (classlists[0] == "close" || classlists[1] == "close") {
                links.style.transform = "translateX(-105%)";
                navbar.classList.remove("close");
            } else {
                links.style.transform = "translateX(0%)";
                navbar.classList.add("close");
            }
        });
    </script>
    <script>
        const modeselect = document.getElementById("modeselect");

        modeselect.addEventListener('change', () => {
            // theme of website
            document.body.classList.toggle('dark');
        });
    </script>
</body>

</html>