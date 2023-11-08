<?php
include "include_in_all.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs Page</title>
    <!-- ========== css-styling files ============= -->
    <link rel="stylesheet" href="static/css/index.css">
    <!-- ========== css-styling files ============= -->

    <link rel="stylesheet" href="static/css/index.css">
    <link rel="stylesheet" href="static/css/nav_bar_menu.css">
    <link rel="stylesheet" href="static/css/blogs-view-page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- include loading anim css  -->
    <?php include "loading-css.php"; ?>
</head>

<body>



    <!-- @include header -->
    <?php include "header.php"; ?>


    <?php


    //================================================
    // LOAD BLOG
    //================================================
    if (isset($_GET['blog'])) {
        $blogID = $_GET['blog'];
        if (empty($blogID)) {
            $blogID = 0;
        }
    }


    ?>







    <div class="blog-view-container">
        <div class="blog-view-main-section" id="blogContainer">
        </div>
    </div>




    <!--
    //================================================
    // loaded Blog
    //================================================ 
    -->


    <!-- jquery file -->
    <script src="static/js/Js.js"></script>

    <script>
        $(document).ready(function() {
            var baseURL = "http://msamt.com/meer/";

            // time formatter
            function timeAgo(date) {
                const seconds = Math.floor((new Date() - new Date(date)) / 1000);

                if (seconds < 10) return 'just now';
                if (seconds < 60) {
                    return seconds + ' seconds ago';
                }

                if (seconds < 2 * 60) {
                    return 'a minute ago';
                }

                if (seconds < 60 * 60) {
                    return Math.floor(seconds / 60) + ' minutes ago';
                }

                if (seconds < 2 * 60 * 60) {
                    return 'an hour ago';
                }

                if (seconds < 86400) {
                    return Math.floor(seconds / 3600) + ' hours ago';
                }

                if (seconds < 2 * 86400) {
                    return 'a day ago';
                }

                if (seconds < 2592000) {
                    return Math.floor(seconds / 86400) + ' days ago';
                }

                if (seconds < 2 * 2592000) {
                    return 'a month ago';
                }

                if (seconds < 31536000) {
                    return Math.floor(seconds / 2592000) + ' months ago';
                }

                if (seconds < 2 * 31536000) {
                    return 'a year ago';
                }

                if (seconds > 31536000) {
                    return Math.floor(seconds / 31536000) + ' years ago';
                }







                // if (interval > 1) {
                //     return interval + ' minutes ago';
                // }

                // let interval = Math.floor(seconds / 31536000);
                // if (interval > 1) {
                //     return interval + ' years ago';
                // }

                // interval = Math.floor(seconds / 2592000);
                // if (interval > 1) {
                //     return interval + ' months ago';
                // }

                // interval = Math.floor(seconds / 86400);
                // if (interval > 1) {
                //     return interval + ' days ago';
                // }

                // interval = Math.floor(seconds / 3600);
                // if (interval > 1) {
                //     return interval + ' hours ago';
                // }

                // interval = Math.floor(seconds / 60);
                // if (interval > 1) {
                //     return interval + ' minutes ago';
                // }

                // if (seconds < 10) return 'just now';

                // return Math.floor(seconds) + ' seconds ago';
            }

            // number formatter
            function formatNumber(num, precision = 2) {
                const map = [{
                        suffix: 'T',
                        threshold: 1e12
                    },
                    {
                        suffix: 'B',
                        threshold: 1e9
                    },
                    {
                        suffix: 'M',
                        threshold: 1e6
                    },
                    {
                        suffix: 'K',
                        threshold: 1e3
                    },
                    {
                        suffix: '',
                        threshold: 1
                    },
                ];

                const found = map.find((x) => Math.abs(num) >= x.threshold);
                if (found) {
                    const formatted = (num / found.threshold).toFixed(precision) + found.suffix;
                    return formatted;
                }

                return num;
            }



            // load Blog
            function loadBlog() {
                $(".comments").html("");
                var bdata = {
                    blog: <?php echo $blogID; ?>
                }

                bdata = JSON.stringify(bdata);
                $.ajax({
                    url: baseURL + "apis/blogs/loadSingleBlog.php",
                    method: "POST",
                    data: bdata,
                    beforeSend: function() {
                        $("#blogContainer").html(`<div class="loading_container"><span class="loader"></span></div>`);
                    },
                    success: function(resp) {
                        if (resp.status == false) {
                            $("#blogContainer").html(
                                `<h3 style="margin:20px 0;text-align:center;color:#fff;padding:10px; width:100%;">${resp.msg}</h3>`
                            );
                        } else {
                            var respv = resp[0];

                            $("#blogContainer").html(`
                            <div class="blog-view-profile-date-section">
                            <div class="blog-view-only-profile-sec">
                                <div class="__profile__pic">
                                    <img loading="lazy" src="${respv.user_profileimg}" alt="">
                                </div>
                                <div class="user-detail">
                                    <h4>
                                        ${respv.user_fullname}
                                        </4>
                                        <p>
                                            @${respv.user_username}
                                        </p>
                                </div>
                            </div>
                            <p class="blog-view-date">
                                ${respv.last_updated}
                            </p>
                        </div>
                        <div class="main-title-img-blog-view-section">
                            <h1>
                                ${respv.blog_title}
                            </h1>
                            
                                 <img loading="lazy" src="uploads/feature-images/${respv.blog_cover_img}" alt="">
                         
                        </div>
                        <div class="blog-view-para-paratitle-section">
                        ${respv.blog_content}
                        </div>

                        <div class="blog-view-line"></div>
                        <div class="blog-view-reaction-btn-sec">
                            <button id="likeBtn"  data-blog="${respv.blog_id}">
                                <svg viewBox="0 0 512 512">
                                    <path
                                        d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z" />
                                </svg>
                                Like
                            </button>
                            <button id="ReplyBtn">
                                <svg viewBox="0 0 512 512">
                                    <path
                                        d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z" />
                                </svg>Reply</button>
                            <button>
                                <svg viewBox="0 0 448 512">
                                    <path
                                        d="M352 224c53 0 96-43 96-96s-43-96-96-96s-96 43-96 96c0 4 .2 8 .7 11.9l-94.1 47C145.4 170.2 121.9 160 96 160c-53 0-96 43-96 96s43 96 96 96c25.9 0 49.4-10.2 66.6-26.9l94.1 47c-.5 3.9-.7 7.8-.7 11.9c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-25.9 0-49.4 10.2-66.6 26.9l-94.1-47c.5-3.9 .7-7.8 .7-11.9s-.2-8-.7-11.9l94.1-47C302.6 213.8 326.1 224 352 224z" />
                                </svg> Share
                            </button>
                        </div>
                        <div class="blog-view-comment-main-sec">
                            <h3>Comments</h3>
                        </div>
                        
                        <div class="blog-view-write-commont-bord" style="flex-direction:column;align-items:start;">
                            <div id="reply_box_" style="width:90%;background:#ffffff70;display:none;padding:10px;border-radius:3px;">
                                <p style="margin-bottom:4px;display:flex;align-items:center;justify-content:space-between;">
                                <span>Replying to <b id="ReplyingToUsername">Naveed U.</b></span>
                                <i class="fa fa-window-close" style="margin-left:7px;cursor:pointer;" id="close_reply_box_" aria-hidden="true"></i>
                                </p>
                                <p id="ReplyingToCommentContent" data-commentID="1" data-mentionedUser="Naveed U." style="background:#e5e5e5;border-radius:3px;padding:10px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                Fantastic read! Your perspective on this subject is truly enlightening. Looking forward to more of your insightful posts!
                                </p>
                            </div>
                            <div style="width:100%;display:flex;align-items:center;margin-top:10px;">
                                <input type="text" data-blog="${respv.blog_id}"
                                    placeholder="Write a comment" id="commentMSG">
                                <svg height="2em" viewBox="0 0 512 512" id="addComment">
                                    <path fill="green"
                                        d="M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376V479.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z" />
                                </svg>
                            </div>
                        </div>
                        <div class="blog-view-line"></div>


                        <!-- this is the comment section start -->
                        <div id="commentsData" style="width:85%;height:330px;padding-bottom:30px; overflow-y:auto; display:flex;flex-direction:column;align-items:center;">

                        <div class="comments"  style="width:98%;display:flex;flex-direction:column;align-items:center;">
                        
                        </div>
                        <div class="loading_container" id="loaderComment" style='display:flex; width:98%; paddding-bottom:60px;'>
                           <span class="loader" style="width:25px;height:25px;"></span>
                        </div>
                   

                        </div>
                        
                        <!-- this is the comment section end -->
                            `);
                        }
                    }
                });
            }

            loadBlog();


            // like blog button / add like
            $(document).on("click", "#likeBtn", function() {
                $("#likeBtn").toggleClass("active");
                var blog = $(this).attr('data-blog');
                var add_like_data = {
                    blog: blog,
                    user: <?= $logged_in_user_id ?? 0; ?>
                };

                add_like_data = JSON.stringify(add_like_data);

                $.ajax({
                    url: baseURL + "apis/blogs/addBlogLike.php",
                    method: "POST",
                    data: add_like_data,
                    success: function(resp) {
                        if (resp.status == true) {
                            //  update blog like
                            checkUserLike();
                        } else {
                            alert(resp.msg);
                        }
                    }
                });
            });



            // checkUserLike();
            function checkUserLike() {
                var data_check = {
                    user: <?= $logged_in_user_id ?? 0; ?>,
                    blog: <?= $blogID; ?>
                }

                data_check = JSON.stringify(data_check);
                $.ajax({
                    url: baseURL + "apis/blogs/checkBlogLike.php",
                    method: "POST",
                    data: data_check,
                    success: function(resp) {
                        if (resp.status == true) {
                            $("#likeBtn").addClass("active");
                        } else if (resp.status == false) {
                            $("#likeBtn").removeClass("active");
                        }
                    }
                });
            }

            checkUserLike();





            // reply to blog/comment to blog button / addEventListener

            $(document).on("click", "#ReplyBtn", function() {
                $("#commentMSG").focus();
            });



            // add new comment on blog POST
            $(document).on("click", "#addComment", function() {
                var commentMsg = $("#commentMSG").val();


                // check if replying to a comment 
                const ReplyingToCommentContent = document.getElementById("ReplyingToCommentContent");
                if (document.getElementById("reply_box_").style.display == "none") {
                    alert("comment");
                } else {
                    alert("reply");
                }

                return false;

                var blogIS = $("#commentMSG").attr('data-blog');
                if (commentMsg == "") {
                    $("#commentMSG").focus();
                } else {
                    $("#commentMSG").blur();

                    var comment_req_data = {
                        blog: blogIS,
                        user: <?= $logged_in_user_id ?? 0; ?>,
                        comment: commentMsg
                    };

                    comment_req_data = JSON.stringify(comment_req_data);


                    $.ajax({
                        url: baseURL + "apis/blogs/addBlogComment.php",
                        method: "POST",
                        data: comment_req_data,
                        success: function(resp) {

                            if (resp.status == true) {
                                $("#commentMSG").val("");
                                starting = 0;
                                $(".comments").html("");
                                isEmpty = false;
                                isReq = false;
                                // comment added
                                loadComments(starting);

                            } else {
                                alert(resp.msg);
                            }
                        },
                        error: function(xhr, error_str) {
                            alert(xhr.statusText);
                        }
                    });



                }
            });


            // load comment replies
            function loadCommentReplies(container) {
                var comment = container.split("replyto")[1];
                var comment_data = {
                    comment_is: comment
                };

                comment_data = JSON.stringify(comment_data);

                $.ajax({
                    url: baseURL + "apis/blogs/loadBlogCommentsReplies.php",
                    method: "POST",
                    data: comment_data,
                    success: function(resp) {
                        if (resp.status == false) {
                            // leave for now
                        } else {
                            $.each(resp, function(key, val) {
                                $("#" + container).append(`
                          <div class="blog-view-comment-show">
                                                <div class="blog-view-profile-pic-sec">
                                                    <img loading="lazy" src="${val.user_profileimg}" alt="${val.user_username} profile">
                                                </div>
                                                <div class="blog-view-comment-para-detail">
                                                    <h5>${val.user_fullname}</h5>
                                                    <p>${val.replied_msg}</p>
                                                    <div class="blog-view-comment-reaction-sec">
                                                        <div class="blog-view-comment-date-time">
                                                            <p>${timeAgo(val.replied_at)}</p>
                                                        </div>

                                                        <div class="blog-view-comment-like-count"  data-reply="${val.reply_id}" id="likeToReply">
                                                            <svg viewBox="0 0 512 512" class="dark">
                                                                <path
                                                                    d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z" />
                                                            </svg>
                                                            <p>${formatNumber(val.reply_likes, 1)}</p>
                                                        </div>

                                                        <div class="blog-view-comment-count" data-comment="${val.reply_to_comment}" id="replyToReply">
                                                            <svg viewBox="0 0 512 512" class="dark">
                                                                <path
                                                                    d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z" />
                                                            </svg>
                                                            <p>${formatNumber(val.reply_replies, 1)}</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                          `);
                            });
                        }
                    }
                });


            }


            // like/Unlike comment by logged in user
            $(document).on("click", ".likeComment", function() {
                var comment = $(this).attr('data-comment');
                $("#comment_active" + comment).toggleClass("comment_active");
                if ($("#comment_active" + comment).hasClass("comment_active")) {
                    $("#CommentlikeCount" + comment).html(formatNumber(parseInt($("#CommentlikeCount" + comment).html()) + 1, 1))
                } else {
                    $("#CommentlikeCount" + comment).html(formatNumber(parseInt($("#CommentlikeCount" + comment).html()) - 1, 1))
                }
                var commentlikedata = {
                    comment: comment,
                    user: <?= $logged_in_user_id ?? 0; ?>
                };

                commentlikedata = JSON.stringify(commentlikedata);

                $.ajax({
                    url: baseURL + "apis/blogs/blogCommentLike.php",
                    method: "POST",
                    data: commentlikedata,
                    success: function(resp) {
                        if (resp.status == true) {
                            //  update comment like
                            checkUserCommentLike(comment, "comment_active" + comment);
                            countLikesOnComment(comment);
                        } else {
                            alert("Something went wrong.");
                        }
                    }
                });
            });
            // like/Unlike comment by logged in user


            // count likes on a comment
            function countLikesOnComment(commentID) {
                var comment_data = {
                    comment: commentID,
                };

                comment_data = JSON.stringify(comment_data);

                $.ajax({
                    url: baseURL + "apis/blogs/countLikesOnComment.php",
                    method: "POST",
                    data: comment_data,
                    success: function(resp) {
                        if (resp.status == true) {
                            //  update comment like
                            $("#CommentlikeCount" + commentID).html(formatNumber(resp.likes, 1));
                        } else {
                            alert(resp.msg);
                        }
                    }
                });
            }



            // check if logged in user has liked a specific comment
            // checkUserCommentLike();
            function checkUserCommentLike(comment_id, element_id) {
                var data1_check = {
                    user: <?= $logged_in_user_id ?? 0; ?>,
                    comment: comment_id
                }

                data1_check = JSON.stringify(data1_check);
                $.ajax({
                    url: baseURL + "apis/blogs/checkBlogCommentLike.php",
                    method: "POST",
                    data: data1_check,
                    success: function(resp) {
                        if (resp.status == true) {
                            $("#" + element_id).addClass("comment_active");
                        } else if (resp.status == false) {
                            $("#" + element_id).removeClass("comment_active");
                        }
                    }
                });
            }
            // check if logged in user has liked a specific comment




            var starting = 0;
            var isReq = false;
            var isEmpty = false;


            // load comments
            function loadComments(startis) {


                var data = {
                    id: <?php echo $blogID; ?>,
                    start: startis
                }

                data = JSON.stringify(data);
                $.ajax({
                    url: baseURL + "apis/blogs/loadBlogComments.php",
                    method: "POST",
                    data: data,
                    beforeSend: function() {
                        $("#loaderComment").css("display", "flex");
                        isReq = true;
                    },
                    success: function(resp) {
                        isReq = false;
                        $("#loaderComment").css("display", "none");
                        if (resp.status == false) {
                            isEmpty = true;
                            $(".comments").append(`<div class="blog-view-comment-show-sec">
                                <div class="blog-view-comment-show"
                                    style="color:#777;width:100%; padding:10px 0;font-size:22px;font-family:sans-serif;display:flex;justify-content:center;">
                                   ${resp.msg}
                                </div>
                            </div>`);
                        } else {
                            $.each(resp, function(key, val) {
                                $(".comments").append(`
                                    <div class="blog-view-comment-show-sec">
                                        <div class="blog-view-comment-show">
                                            <div class="blog-view-profile-pic-sec">
                                                <img loading="lazy" src="${val.user_profileimg}" alt="${val.user_username} profile">
                                            </div>
                                            <div class="blog-view-comment-para-detail">
                                                <h5>${val.user_fullname}</h5>
                                                <p>${val.comment}</p>
                                                <div class="blog-view-comment-reaction-sec">
                                                    <div class="blog-view-comment-date-time">
                                                        <p>${timeAgo(val.commented_at)}</p>
                                                    </div>

                                                    <div class="blog-view-comment-like-count" id="comment_active${val.comment_id}">
                                                        <svg viewBox="0 0 512 512" class="dark likeComment" data-comment="${val.comment_id}">
                                                            <path
                                                                d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z" />
                                                        </svg>
                                                        &nbsp;<p id="CommentlikeCount${val.comment_id}">${formatNumber(val.likes, 1)}</p>
                                                    </div>
                                                    &nbsp;
                                                    <div class="blog-view-comment-count">
                                                        <svg viewBox="0 0 512 512" class="dark addReplyToComment" data-parentcomment="${val.comment_id}" data-mentionable="${val.user_fullname}" data-replytocommentcontent="${val.comment}" >
                                                            <path 
                                                                d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z" />
                                                        </svg>
                                                        &nbsp;<p>${formatNumber(val.replies, 1)}</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>



                                        <!-- comment reply section start -->
                                        <div class="blog-view-Reply-comment-show-sec" id="replyto${val.comment_id}"></div>
                                        <!-- comment reply section end -->
                                    </div>
                        `);
                                checkUserCommentLike(val.comment_id, "comment_active" + val.comment_id);
                                loadCommentReplies("replyto" + val.comment_id);
                            });

                            starting += 5;
                        }
                    }
                });
            }

            loadComments(starting);



            // load more comments - lazy loading
            document.addEventListener('scroll', function(event) {
                if (event.target.id === 'commentsData' && isEmpty == false && isReq == false) {
                    if (Math.ceil(document.getElementById("commentsData").scrollTop + document.getElementById("commentsData").offsetHeight) >= document.getElementById("commentsData").scrollHeight) {
                        loadComments(starting);
                    } else {
                        // console.log("no");
                    }
                }
            }, true);



            // add reply to comment

            $(document).on("click", ".addReplyToComment", function() {
                $("#reply_box_").hide();
                var parentCommentID = $(this).attr("data-parentcomment");
                var mentionAbleUserName = $(this).attr("data-mentionable");
                var parentCommentContent = $(this).attr("data-replytocommentcontent");
                $("#ReplyingToUsername").html(mentionAbleUserName);
                $("#ReplyingToCommentContent").html(parentCommentContent);
                $("#ReplyingToCommentContent").attr("data-commentID", parentCommentID);


                $("#reply_box_").slideDown();


            });
            $(document).on("click", "#close_reply_box_", function() {
                $("#reply_box_").slideUp();
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