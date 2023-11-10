<?php
require_once 'config.php';
require_once 'controller.Class.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
       <!----======== CSS ======== -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="static/css/test.css">
       <link rel="stylesheet" href="static/css/User_Profile_page.css">
       <!----===== Boxicons CSS ===== -->
       <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
       
    <link rel="stylesheet" href="static/css/secondary-navbar-header.css">
    <link rel="stylesheet" href="static/css/home_post_card.css">
    <link rel="stylesheet" href="static/css/Feeds_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title></title>
</head>
<body>

    <div class="secondary-navbar-header-main-container">
        <div class="seconadry-header-main-sec" >
            <nav class="sidebar close">
                <header>
                    <div class="image-text">
                        <span class="image">
                            <!--<img src="logo.png" alt="">-->
                        </span>
                    </div>
                
            

                 
                </header>
        
                <div class="menu-bar" >
                    <div class="menu">
        
                    
        
                        <ul class="menu-links">
                            <li class="nav-link">
                                <a href="secondary-navbar-header.php">
                                    <i class='bx bx-user-circle icon'></i>
                                    <span class="text nav-text">Profile</span>
                                </a>
                            </li>
        
                            <li class="nav-link">
                                <a href="coming_soon_page.html">
                                    <i class='bx bx-line-chart icon'></i>
                                    <span class="text nav-text">Rank/Level</span>
                                </a>
                            </li>
        
                            <li class="nav-link">
                                <a href="coming_soon_page.html">
                                    <i class='bx bxs-badge-dollar icon' ></i>
                                    <span class="text nav-text">Subscription</span>
                                </a>
                            </li>

                            <li class="nav-link">
                                <a href="apply_writing_article_page.html">
                                  <i class='bx bxs-spreadsheet icon'></i>
                                    <span class="text nav-text">Apply for writing article</span>
                                </a>
                            </li>
        
                            <li class="nav-link">
                                <a href="verification_center.html">
                                    <i class='bx bxs-badge-check icon'></i>
                                    <span class="text nav-text">Request verification</span>
                                </a>
                            </li>
        
                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-support  icon'></i>
                                    <span class="text nav-text">Help & Support</span>
                                </a>
                            </li>

                            <li class="nav-link">
                                <a href="Privacy_policy.html">
                                    <i class='bx bxs-lock icon' ></i>
                                    <span class="text nav-text">Privacy Policy</span>
                                </a>
                            </li>
        
                            <li class="nav-link">
                                <a href="Privacy_policy.html">
                                    <i class='bx bxs-book icon'></i>
                                    <span class="text nav-text">Terms &  Policies</span>
                                </a>
                            </li>

                            <li class="nav-link">
                                <a href="settings_page.html">
                                   <i class='bx bx-cog icon'></i>
                                    <span class="text nav-text">Settings</span>
                                </a>
                            </li>
        
                        </ul>
                    </div>
        
                    <div class="bottom-content active">
                        <li class="active">
                            <a href="logout.php">
                                <i class='bx bx-log-out icon active' ></i>
                                <span class="text nav-text">Logout</span>
                            </a>
                        </li>
        
                        <!-- <li class="mode">
                            <div class="sun-moon">
                                <i class='bx bx-moon icon moon'></i>
                                <i class='bx bx-sun icon sun'></i>
                            </div>
                            <span class="mode-text text">Dark mode</span>
        
                            <div class="toggle-switch">
                                <span class="switch"></span>
                            </div>
                        </li> -->
                        
                    </div>
                </div>
        
            </nav>
    <div class="nav-logo-profile-search">
        
            <div class="logo" style="color: white;">
                   <i class='bx bx-chevrons-right toggle'></i>
                <h2>LOGO</h2>
            </div>
        <div class="search-profile-box" >

            <div class="box" >
                <input type="checkbox" id="check">
                <div class="background"></div>
                <div class="search-box">
                  <input type="text" placeholder="Type here...">
                  <label for="check" class="icon">
                    <i class="fas fa-search"></i>
                  </label>
                </div>
            </div>

            <div class="secondary-profile" >
                <a href=""><img src="<?= $userinfo['user_profileimg'] ?>" alt=""></a>
            </div>
          </div>
        </div>
          
        </div>
    </div>


    <!-- Feed card  -->


        
    <div class="homecard-sec-container">
        <!-- <div class="post_by_mirethi">
            <img src="static/somiacis-logo-zip-file/png/logo-no-background.png" alt="">
            <h6>Posts</h6>
            <p>By</p>
            <span>Mirehti</span>
        </div> -->
        <div class="postcard-sec-container-one">
            <div class="postcard-sec-container-line"></div>
            <h2>Feeds</h2>
        </div>

    <!-- fix manue start -->
        <div class="bottom_fix_nav_container">
            <div class="bottom_fix_nav_block">
                <div class="icon_fix messanger_fix activefix ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256.55 8C116.52 8 8 110.34 8 248.57c0 72.3 29.71 134.78 78.07 177.94 8.35 7.51 6.63 11.86 8.05 58.23A19.92 19.92 0 0 0 122 502.31c52.91-23.3 53.59-25.14 62.56-22.7C337.85 521.8 504 423.7 504 248.57 504 110.34 396.59 8 256.55 8zm149.24 185.13l-73 115.57a37.37 37.37 0 0 1-53.91 9.93l-58.08-43.47a15 15 0 0 0-18 0l-78.37 59.44c-10.46 7.93-24.16-4.6-17.11-15.67l73-115.57a37.36 37.36 0 0 1 53.91-9.93l58.06 43.46a15 15 0 0 0 18 0l78.41-59.38c10.44-7.98 24.14 4.54 17.09 15.62z"/></svg>
               </div>

               <div class="icon_fix bell_fix">
                <a href="Notification-page.html" onclick="event.preventDefault(); setTimeout(function() { window.location.href = 'Notification-page.html'; }, 1000); this.classList.add('clicked');">
  
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 548 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"/></svg></a>
          
            </div>

                <div class="icon_fix home_fix ">
                    <a href="Feeds_page.php" onclick="event.preventDefault(); setTimeout(function() { window.location.href = 'Feeds_page.php'; }, 1000); this.classList.add('clicked');">
 
                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 612"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M543.8 287.6c17 0 32-14 32-32.1c1-9-3-17-11-24L512 185V64c0-17.7-14.3-32-32-32H448c-17.7 0-32 14.3-32 32v36.7L309.5 7c-6-5-14-7-21-7s-15 1-22 8L10 231.5c-7 7-10 15-10 24c0 18 14 32.1 32 32.1h32v69.7c-.1 .9-.1 1.8-.1 2.8V472c0 22.1 17.9 40 40 40h16c1.2 0 2.4-.1 3.6-.2c1.5 .1 3 .2 4.5 .2H160h24c22.1 0 40-17.9 40-40V448 384c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v64 24c0 22.1 17.9 40 40 40h24 32.5c1.4 0 2.8 0 4.2-.1c1.1 .1 2.2 .1 3.3 .1h16c22.1 0 40-17.9 40-40V455.8c.3-2.6 .5-5.3 .5-8.1l-.7-160.2h32z"/></svg>
                    </a>
          
            </div>
                <div class="icon_fix hsh_fix">
<div class="cercle_hash">
    <a href="hashtag.html" onclick="event.preventDefault(); setTimeout(function() { window.location.href = 'hashtag.html'; }, 1000); this.classList.add('clicked');">
       #                                    </a>
</div>
</div>
<div class="icon_fix mic_fix">
    <a href="spaces.html" onclick="event.preventDefault(); setTimeout(function() { window.location.href = 'spaces.html'; }, 1000); this.classList.add('clicked');">
        
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 518 999"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M192 0C139 0 96 43 96 96V256c0 53 43 96 96 96s96-43 96-96V96c0-53-43-96-96-96zM64 216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 89.1 66.2 162.7 152 174.4V464H120c-13.3 0-24 10.7-24 24s10.7 24 24 24h72 72c13.3 0 24-10.7 24-24s-10.7-24-24-24H216V430.4c85.8-11.7 152-85.3 152-174.4V216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 70.7-57.3 128-128 128s-128-57.3-128-128V216z"/></svg>

    </a>
</div>

            </div>
        </div>

        <!-- fix menu end -->
        <!-- ========== posts-container-ending ============= -->
        <div class="_posts_container" style=" overflow: hidden; margin-bottom: 55px;" >
            
            <!-- user profile section -->
            <div class="user_profile_container">
                <div class="user_profile_main_sec">
        
                    <div class="user_profile_content">
                        <h3>Naveed khosa</h3>
                        
                        <div class="user_profile_back_pic">
                            <img src="static/images/elevate.jpg" alt="">
        
                            <div class="icon_upload_back_pic" >
                               
                                <div class="user_profile_pic">
                                    <img src="<?= $userinfo['user_profileimg'] ?>" alt="">
                                    <div class="icon_upload_profile_pic">
                                        <label for="back_img_upload">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M149.1 64.8L138.7 96H64C28.7 96 0 124.7 0 160V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H373.3L362.9 64.8C356.4 45.2 338.1 32 317.4 32H194.6c-20.7 0-39 13.2-45.5 32.8zM256 192a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/></svg>
                
                                        </label>
                                        <input type="file" id="back_img_upload">
                                    </div>
                                </div>
        
                                <label for="profile_img_upload">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M149.1 64.8L138.7 96H64C28.7 96 0 124.7 0 160V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H373.3L362.9 64.8C356.4 45.2 338.1 32 317.4 32H194.6c-20.7 0-39 13.2-45.5 32.8zM256 192a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/></svg>
                                </label>
        
                                <input type="file" id="profile_img_upload">               
                            </div>
                        </div>
        
                
        
                        <div class="user_profile_name_username">
                        <h3> <?= $userinfo['user_fullname'] ?></h3>
                            <h5>@naveedullah</h5>

                            <div class="counting_follow">
                             <a href="Follower_following.html"> 4k<span>Followers</span></a>  
                             <a href="Follower_following.html"> 893<span>Following</span></a>  
                            </div>

                        </div>

                        
                <div class="add_post_edit_details_btn">
                    <div class="add_post_btn">
                        <button onclick="window.location.href='Create-post-page.html';"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg> Add a post</button>

                    </div>

                    <div class="Edit_details_btn">
                        <button onclick="window.location.href='edit_all_details.html';">Edit Details</button>

                    </div>
                </div>
                <img src="" alt="">

                <div class="break_line"></div>

                <div class="user_profile_post_about" >
                  <div class="user_profile_btn ">
                    <label class="user_btn_active" id="posts_btn_up" for="user_posts">Posts</label>
                    <label  id="about_btn_up" for="user_about">About</label>
                   </div>
                   <input type="radio" checked name="posts" id="user_posts" data-label="posts_btn_up" onclick="user_btn_active(this);">
                   <div class="user_profile_posts">
                   

        <!-- ========== posts-container-ending ============= -->
        <div class="My_posts_container break_line_user_unfo">
            <!-- <div class="break_line_user_unfo"></div> -->

            <div class="_posts">
                
                
                

                <div class="_post_card">
                    <a class="_post_img" href="#">
                        <img src="https://cdn.pixabay.com/photo/2021/05/22/10/11/fishing-boat-6273132__340.jpg" alt="">
                    </a>
                    
                    <div class="_post_info">

                        
                        <div class="_date_time">

                            <div class="_btn_s view_count">
                                <svg width="25" height="23" fill="gray" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                </svg>
                                <span>22</span>
                            </div>
                            <div class="card_date_time">
                                14 NOV 2022 - 12:30 PM IST
                            </div>
                          
                         
                        </div>
                        <div class="_info_top">
                            
                            <div class="_info_top_left">
                                <svg  width="22" height="22" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                  </svg>
                            </div>
                            <div class="_info_top_right">
                                <div class="_profile_data">
                                    <div class="_user_info">
                                        <div class="_user_name">
                                         <?= $userinfo['user_fullname'] ?>
                                        </div>
                                        <div class="_user_username">
                                            @naveedkhan786
                                        </div>
                                    </div>
                                    <div class="_user_profile">
                                        <img src="<?= $userinfo['user_profileimg'] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="_post_content">
                            <div class="_post_heading">
                              The life is too hard
                            </div>
                            <div class="_content">
                                Lorem sint nulla, nesciunt soluta praesentium possimus eius magni exercitationem! Eum, harum blanditiis perspiciatis accusantium nesciunt eligendi ut!
                            </div>
                        </div>
                        <hr>
                        <div class="_info_bottom">
                            
                            <div class="_left_btn_s">
                                
                                <div class="_btn_s view_count">
                                    <svg  width="25" height="18" fill="gray"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M119.4 44.1c23.3-3.9 46.8-1.9 68.6 5.3l49.8 77.5-75.4 75.4c-1.5 1.5-2.4 3.6-2.3 5.8s1 4.2 2.6 5.7l112 104c2.9 2.7 7.4 2.9 10.5 .3s3.8-7 1.7-10.4l-60.4-98.1 90.7-75.6c2.6-2.1 3.5-5.7 2.4-8.8L296.8 61.8c28.5-16.7 62.4-23.2 95.7-17.6C461.5 55.6 512 115.2 512 185.1v5.8c0 41.5-17.2 81.2-47.6 109.5L283.7 469.1c-7.5 7-17.4 10.9-27.7 10.9s-20.2-3.9-27.7-10.9L47.6 300.4C17.2 272.1 0 232.4 0 190.9v-5.8c0-69.9 50.5-129.5 119.4-141z"/></svg>
                                    <span>22</span>
                                </div>
                                
                                
                                
                                
                                <div class="_btn_s _comment_count" onclick="window.location = 'comments_page.html'">
                                    <svg  width="25" height="18" fill="gray"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M272 416c17.7 0 32-14.3 32-32s-14.3-32-32-32H160c-17.7 0-32-14.3-32-32V192h32c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-64-64c-12.5-12.5-32.8-12.5-45.3 0l-64 64c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8l32 0 0 128c0 53 43 96 96 96H272zM304 96c-17.7 0-32 14.3-32 32s14.3 32 32 32l112 0c17.7 0 32 14.3 32 32l0 128H416c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l64 64c12.5 12.5 32.8 12.5 45.3 0l64-64c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8l-32 0V192c0-53-43-96-96-96L304 96z"/></svg>
                                    <span>232</span>
                                </div>
                                
                                
                                
                           
                                
                            </div>
                                 
                            <div class="_btn_s _comment_count " onclick="window.location = 'comments_page.html'">
                                <svg  width="25" height="18" fill="gray" class="bi bi-chat-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                </svg>
                                <span>232</span>
                            </div>
                            
                            <div class="_btn_s _like_count">
                                <span>22</span>
                                <svg width="25" height="18" fill="gray" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                </svg>
                            </div>
                            
                            
                            
                        </div>
                        
                    </div>
                    
                </div>
                
                                
                

                
                
                
                
            </div>
            
        </div>
        <!-- ========== posts-container-ending ============= -->
      
                            </div>
                            <input type="radio" name="posts" id="user_about" data-label="about_btn_up" onclick="user_btn_active(this);">
                            <div class="user_profile_about">

                                       <!-- Bio info section start -->
                                       <div class="break_line_user_unfo"></div>

                                       <div class="user_profile_contact_info">
                                         
                                           <div class="contact_info_btn_heading">
                                               Bio
                                               <a href="edit-contact-info-page.html">Edit</a>
       
                                           </div>
       
                                          
       
                                           <div class="user_info_phone_mail">
                                               <div class="user_info_icon_number">
                                                   <!-- <div class="user_info_icon"> -->
                                                       <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.<path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg> -->
                                                   <!-- </div> -->
                                                   <div class="user_info_content_mobile">
                                                       
                                                       <p><a href="#">"وكفى بالله وليًّا وكفى بالله نصيرًا"</a></p>     
                       
       
                                                   </div>
                                               </div>
       
                                           </div>
       
                                      
                                       </div>
       
                                         <!-- bio info section end -->
       
       
                                         

                                  <!-- contact info section start -->
                                <div class="break_line_user_unfo"></div>

                                <div class="user_profile_contact_info">
                                  
                                    <div class="contact_info_btn_heading">
                                        Contact info
                                        <a href="edit-contact-info-page.html">Edit</a>

                                    </div>

                                   

                                    <div class="user_info_phone_mail">
                                        <div class="user_info_icon_number">
                                            <div class="user_info_icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                                            </div>
                                            <div class="user_info_content_mobile">
                                                Mobile
                                                <p><a href="tel:03429086788">03429086788</a></p>     
                

                                            </div>
                                        </div>

                                        <div class="break_line_user_unfo2"></div>

                                        <div class="user_info_icon_mail">
                                            <div class="user_info_icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>                                            </div>
                                            <div class="user_info_content_email">
                                                Mail
                                                <p><a href="mailto:happijoya@gmail.com"><?= $userinfo['user_email'] ?></a></p>
                                             
                                            </div>
                                        </div>

                                    </div>

                               
                                </div>

                                  <!-- contact info section end -->


                                  
                                  
                                  <!-- Basic info section start -->
                                <div class="break_line_user_unfo"></div>

                                <div class="user_profile_contact_info">
                                  
                                    <div class="contact_info_btn_heading">
                                        Basic info
                                        <a href="edit_basic_info.html">Edit</a>

                                    </div>

                                   

                                    <div class="user_info_phone_mail">
                                        <div class="user_info_icon_number">
                                            <div class="user_info_icon">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>                                            </div>
                                            <div class="user_info_content_mobile">
                                                Gender
                                                <p><a href="#"><?= $userinfo['gender'] ?></a></p>     
                

                                            </div>
                                        </div>

                                        <div class="break_line_user_unfo2"></div>

                                        <div class="user_info_icon_mail">
                                            <div class="user_info_icon">
                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M86.4 5.5L61.8 47.6C58 54.1 56 61.6 56 69.2V72c0 22.1 17.9 40 40 40s40-17.9 40-40V69.2c0-7.6-2-15-5.8-21.6L105.6 5.5C103.6 2.1 100 0 96 0s-7.6 2.1-9.6 5.5zm128 0L189.8 47.6c-3.8 6.5-5.8 14-5.8 21.6V72c0 22.1 17.9 40 40 40s40-17.9 40-40V69.2c0-7.6-2-15-5.8-21.6L233.6 5.5C231.6 2.1 228 0 224 0s-7.6 2.1-9.6 5.5zM317.8 47.6c-3.8 6.5-5.8 14-5.8 21.6V72c0 22.1 17.9 40 40 40s40-17.9 40-40V69.2c0-7.6-2-15-5.8-21.6L361.6 5.5C359.6 2.1 356 0 352 0s-7.6 2.1-9.6 5.5L317.8 47.6zM128 176c0-17.7-14.3-32-32-32s-32 14.3-32 32v48c-35.3 0-64 28.7-64 64v71c8.3 5.2 18.1 9 28.8 9c13.5 0 27.2-6.1 38.4-13.4c5.4-3.5 9.9-7.1 13-9.7c1.5-1.3 2.7-2.4 3.5-3.1c.4-.4 .7-.6 .8-.8l.1-.1 0 0 0 0s0 0 0 0s0 0 0 0c3.1-3.2 7.4-4.9 11.9-4.8s8.6 2.1 11.6 5.4l0 0 0 0 .1 .1c.1 .1 .4 .4 .7 .7c.7 .7 1.7 1.7 3.1 3c2.8 2.6 6.8 6.1 11.8 9.5c10.2 7.1 23 13.1 36.3 13.1s26.1-6 36.3-13.1c5-3.5 9-6.9 11.8-9.5c1.4-1.3 2.4-2.3 3.1-3c.3-.3 .6-.6 .7-.7l.1-.1c3-3.5 7.4-5.4 12-5.4s9 2 12 5.4l.1 .1c.1 .1 .4 .4 .7 .7c.7 .7 1.7 1.7 3.1 3c2.8 2.6 6.8 6.1 11.8 9.5c10.2 7.1 23 13.1 36.3 13.1s26.1-6 36.3-13.1c5-3.5 9-6.9 11.8-9.5c1.4-1.3 2.4-2.3 3.1-3c.3-.3 .6-.6 .7-.7l.1-.1c2.9-3.4 7.1-5.3 11.6-5.4s8.7 1.6 11.9 4.8l0 0 0 0 0 0 .1 .1c.2 .2 .4 .4 .8 .8c.8 .7 1.9 1.8 3.5 3.1c3.1 2.6 7.5 6.2 13 9.7c11.2 7.3 24.9 13.4 38.4 13.4c10.7 0 20.5-3.9 28.8-9V288c0-35.3-28.7-64-64-64V176c0-17.7-14.3-32-32-32s-32 14.3-32 32v48H256V176c0-17.7-14.3-32-32-32s-32 14.3-32 32v48H128V176zM448 394.6c-8.5 3.3-18.2 5.4-28.8 5.4c-22.5 0-42.4-9.9-55.8-18.6c-4.1-2.7-7.8-5.4-10.9-7.8c-2.8 2.4-6.1 5-9.8 7.5C329.8 390 310.6 400 288 400s-41.8-10-54.6-18.9c-3.5-2.4-6.7-4.9-9.4-7.2c-2.7 2.3-5.9 4.7-9.4 7.2C201.8 390 182.6 400 160 400s-41.8-10-54.6-18.9c-3.7-2.6-7-5.2-9.8-7.5c-3.1 2.4-6.8 5.1-10.9 7.8C71.2 390.1 51.3 400 28.8 400c-10.6 0-20.3-2.2-28.8-5.4V480c0 17.7 14.3 32 32 32H416c17.7 0 32-14.3 32-32V394.6z"/></svg>                                            </div>
                                            <div class="user_info_content_email">
                                                Birthday
                                                <p><a href="#">March 3, 2000</a></p>
                                             
                                            </div>
                                        </div>

                                    </div>

                               
                                </div>

                                  <!-- Basic info section end -->

                                         <!-- Follower info section start -->
                                <div class="break_line_user_unfo"></div>

                                <div class="user_profile_contact_info">
                                  
                                    <div class="contact_info_btn_heading">
                                        Followers
                                        <a href="Follower_following.html">See all</a>

                                    </div>

                                   

                                    <div class="user_info_phone_mail">
                                        <div class="user_info_icon_number">
                                            <div class="user_info_icon">
                                                <img src="static/images/profile2.jpg" alt="">
                                            </div>
                                            <div class="user_info_content_mobile">
                                            
                                                <p><a href="tel:03429086788">Dr. Israr Ahmad</a></p>     
                

                                            </div>
                                        </div>

                                        <div class="break_line_user_unfo2"></div>

                                        <div class="user_info_icon_number">
                                            <div class="user_info_icon">
                                                <img src="static/images/comingsoon.jpg" alt="">
                                            </div>
                                            <div class="user_info_content_mobile">
                                            
                                                <p><a href="tel:03429086788">Shahid anwar LLC</a></p>     
                

                                            </div>
                                        </div>
                                        
                                        <div class="break_line_user_unfo2"></div>

                                        <div class="user_info_icon_number">
                                            <div class="user_info_icon">
                                                <img src="static/images/verification center.png" alt="">
                                            </div>
                                            <div class="user_info_content_mobile">
                                            
                                                <p><a href="tel:03429086788">DeSi Robocop</a></p>     
                

                                            </div>
                                        </div>

                                    </div>

                               
                                </div>

                                  <!-- follower info section end -->

                                         <!-- Following info section start -->
                                <div class="break_line_user_unfo"></div>

                                <div class="user_profile_contact_info">
                                  
                                    <div class="contact_info_btn_heading">
                                        Following
                                        <a href="Follower_following.html">See all</a>

                                    </div>

                                   

                                    <div class="user_info_phone_mail">
                                        <div class="user_info_icon_number">
                                            <div class="user_info_icon">
                                                <img src="static/images/profile1.png" alt="">
                                            </div>
                                            <div class="user_info_content_mobile">
                                            
                                                <p><a href="tel:03429086788">Dr. Israr Ahmad</a></p>     
                

                                            </div>
                                        </div>

                                        <div class="break_line_user_unfo2"></div>

                                        <div class="user_info_icon_number">
                                            <div class="user_info_icon">
                                                <img src="static/images/Ellipse 5.png" alt="">
                                            </div>
                                            <div class="user_info_content_mobile">
                                            
                                                <p><a href="tel:03429086788">Shahid anwar LLC</a></p>     
                

                                            </div>
                                        </div>
                                        
                                        <div class="break_line_user_unfo2"></div>

                                        <div class="user_info_icon_number">
                                            <div class="user_info_icon">
                                                <img src="static/images/profile.jpg" alt="">
                                            </div>
                                            <div class="user_info_content_mobile">
                                            
                                                <p><a href="tel:03429086788">DeSi Robocop</a></p>     
                

                                            </div>
                                        </div>

                                    </div>

                               
                                </div>

                                  <!-- following info section end -->


                            </div>
                            

                            <!-- <input type="radio" value="">
                            <label for="">About</label> -->
                </div>
                   
              


        
                    </div>
                </div>
            </div>
            <!-- user profile section end -->


            <div class="_posts">
                
                
                

                <div class="_post_card">
                    <a class="_post_img" href="#">
                        <img src="https://cdn.pixabay.com/photo/2021/05/22/10/11/fishing-boat-6273132__340.jpg" alt="">
                    </a>
                    
                    <div class="_post_info">
                        <div class="_date_time">

                            <div class="_btn_s view_count">
                                <svg width="25" height="23" fill="gray" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                </svg>
                                <span>22</span>
                            </div>
                            <div class="card_date_time">
                                14 NOV 2022 - 12:30 PM IST
                            </div>
                          
                         
                        </div>
                        <div class="_info_top">
                            
                            <div class="_info_top_left">
                                <svg  width="22" height="22" fill="white" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                  </svg>
                            </div>
                            <div class="_info_top_right">
                                <div class="_profile_data">
                                    <div class="_user_info">
                                        <div class="_user_name">
                                        <?= $userinfo['user_fullname'] ?>
                                        </div>
                                        <div class="_user_username">
                                            @naveedkhan786
                                        </div>
                                    </div>
                                    <div class="_user_profile">
                                        <img src="<?= $userinfo['user_profileimg'] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="_post_content">
                            <div class="_post_heading">
                              The life is too hard
                            </div>
                            <div class="_content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quia perferendis dicta! Quidem sint nulla, nesciunt soluta praesentium possimus eius magni exercitationem! Eum, harum blanditiis perspiciatis accusantium nesciunt eligendi ut!
                            </div>
                        </div>
                        <hr>
                        <div class="_info_bottom">
                            
                            <div class="_left_btn_s">
                                
                                <div class="_btn_s view_count">
                                    <svg  width="25" height="18" fill="gray"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M119.4 44.1c23.3-3.9 46.8-1.9 68.6 5.3l49.8 77.5-75.4 75.4c-1.5 1.5-2.4 3.6-2.3 5.8s1 4.2 2.6 5.7l112 104c2.9 2.7 7.4 2.9 10.5 .3s3.8-7 1.7-10.4l-60.4-98.1 90.7-75.6c2.6-2.1 3.5-5.7 2.4-8.8L296.8 61.8c28.5-16.7 62.4-23.2 95.7-17.6C461.5 55.6 512 115.2 512 185.1v5.8c0 41.5-17.2 81.2-47.6 109.5L283.7 469.1c-7.5 7-17.4 10.9-27.7 10.9s-20.2-3.9-27.7-10.9L47.6 300.4C17.2 272.1 0 232.4 0 190.9v-5.8c0-69.9 50.5-129.5 119.4-141z"/></svg>
                                    <span>22</span>
                                </div>
                                
                                
                                
                                
                                <div class="_btn_s _comment_count">
                                    <svg  width="25" height="18" fill="gray"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M272 416c17.7 0 32-14.3 32-32s-14.3-32-32-32H160c-17.7 0-32-14.3-32-32V192h32c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-64-64c-12.5-12.5-32.8-12.5-45.3 0l-64 64c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8l32 0 0 128c0 53 43 96 96 96H272zM304 96c-17.7 0-32 14.3-32 32s14.3 32 32 32l112 0c17.7 0 32 14.3 32 32l0 128H416c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l64 64c12.5 12.5 32.8 12.5 45.3 0l64-64c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8l-32 0V192c0-53-43-96-96-96L304 96z"/></svg>
                                    <span>232</span>
                                </div>
                                
                                
                                
                           
                                
                            </div>
                                 
                            <div class="_btn_s _comment_count" onclick="window.location = 'comments_page.html'">
                                <svg  width="25" height="18" fill="gray" class="bi bi-chat-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                </svg>
                                <span>232</span>
                            </div>
                            
                            <div class="_btn_s _like_count">
                                <span>22</span>
                                <svg width="25" height="18" fill="gray" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                </svg>
                            </div>
                            
                            
                            
                        </div>
                        
                    </div>
                    
                </div>
                
                
                
                

                <div class="_post_card">
                    <a class="_post_img" href="#">
                        <img src="https://cdn.pixabay.com/photo/2020/03/11/23/24/lamp-post-4923527__340.jpg" alt="">
                    </a>
                    
                    <div class="_post_info">
                        <div class="_date_time">

                            <div class="_btn_s view_count">
                                <svg width="25" height="23" fill="gray" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                </svg>
                                <span>22</span>
                            </div>
                            <div class="card_date_time">
                                14 NOV 2022 - 12:30 PM IST
                            </div>
                          
                         
                        </div>
                        <div class="_info_top">
                            
                            <div class="_info_top_left">
                                <svg  width="22" height="22" fill="white" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                  </svg>
                            </div>
                            <div class="_info_top_right">
                                <div class="_profile_data">
                                    <div class="_user_info">
                                        <div class="_user_name">
                                        <?= $userinfo['user_fullname'] ?>
                                        </div>
                                        <div class="_user_username">
                                            @mirehti
                                        </div>
                                    </div>
                                    <div class="_user_profile">
                                        <img src="<?= $userinfo['user_profileimg'] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="_post_content">
                            <div class="_post_heading">
                              Today is Raining here
                            </div>
                            <div class="_content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quia perferendis dicta! Quidem sint nulla, nesciunt soluta praesentium possimus eius magni exercitationem! Eum, harum blanditiis perspiciatis accusantium nesciunt eligendi ut!
                            </div>
                        </div>
                        <hr>
                        <div class="_info_bottom">
                            
                            <div class="_left_btn_s">
                                
                                <div class="_btn_s view_count">
                                    <svg  width="25" height="18" fill="gray"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M119.4 44.1c23.3-3.9 46.8-1.9 68.6 5.3l49.8 77.5-75.4 75.4c-1.5 1.5-2.4 3.6-2.3 5.8s1 4.2 2.6 5.7l112 104c2.9 2.7 7.4 2.9 10.5 .3s3.8-7 1.7-10.4l-60.4-98.1 90.7-75.6c2.6-2.1 3.5-5.7 2.4-8.8L296.8 61.8c28.5-16.7 62.4-23.2 95.7-17.6C461.5 55.6 512 115.2 512 185.1v5.8c0 41.5-17.2 81.2-47.6 109.5L283.7 469.1c-7.5 7-17.4 10.9-27.7 10.9s-20.2-3.9-27.7-10.9L47.6 300.4C17.2 272.1 0 232.4 0 190.9v-5.8c0-69.9 50.5-129.5 119.4-141z"/></svg>
                                    <span>22</span>
                                </div>
                                
                                
                                
                                
                                <div class="_btn_s _comment_count" onclick="window.location = 'comments_page.html'">
                                    <svg  width="25" height="18" fill="gray"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M272 416c17.7 0 32-14.3 32-32s-14.3-32-32-32H160c-17.7 0-32-14.3-32-32V192h32c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-64-64c-12.5-12.5-32.8-12.5-45.3 0l-64 64c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8l32 0 0 128c0 53 43 96 96 96H272zM304 96c-17.7 0-32 14.3-32 32s14.3 32 32 32l112 0c17.7 0 32 14.3 32 32l0 128H416c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l64 64c12.5 12.5 32.8 12.5 45.3 0l64-64c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8l-32 0V192c0-53-43-96-96-96L304 96z"/></svg>
                                    <span>232</span>
                                </div>
                                
                                
                                
                           
                                
                            </div>
                                 
                            <div class="_btn_s _comment_count" onclick="window.location = 'comments_page.html'">
                                <svg  width="25" height="18" fill="gray" class="bi bi-chat-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                </svg>
                                <span>232</span>
                            </div>

                            <div class="_btn_s _like_count">
                                <span>22</span>
                                <svg width="25" height="18" fill="gray" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                </svg>
                            </div>
                            
                            
                            
                        </div>
                        
                    </div>
                    
                </div>
                
                
                
                

                <div class="_post_card">
                    <a class="_post_img" href="#">
                        <img src="https://cdn.pixabay.com/photo/2022/01/23/19/40/northern-hawk-owl-6961772__340.jpg" alt="">
                    </a>
                    
                    <div class="_post_info">
                        <div class="_date_time">

                            <div class="_btn_s view_count">
                                <svg width="25" height="23" fill="gray" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                </svg>
                                <span>22</span>
                            </div>
                            <div class="card_date_time">
                                14 NOV 2022 - 12:30 PM IST
                            </div>
                          
                         
                        </div>
                        <div class="_info_top">
                            
                            <div class="_info_top_left">
                                <svg  width="22" height="22" fill="white" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                  </svg>
                            </div>
                            <div class="_info_top_right">
                                <div class="_profile_data">
                                    <div class="_user_info">
                                        <div class="_user_name">
                                        <?= $userinfo['user_fullname'] ?>
                                        </div>
                                        <div class="_user_username">
                                            @khanali786
                                        </div>
                                    </div>
                                    <div class="_user_profile">
                                        <img src="<?= $userinfo['user_profileimg'] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="_post_content">
                            <div class="_post_heading">
                              Please do hard work
                            </div>
                            <div class="_content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quia perferendis dicta! Quidem sint nulla, nesciunt soluta praesentium possimus eius magni exercitationem! Eum, harum blanditiis perspiciatis accusantium nesciunt eligendi ut!
                            </div>
                        </div>
                        <hr>
                        <div class="_info_bottom">
                            
                            <div class="_left_btn_s">
                                
                                <div class="_btn_s view_count">
                                    <svg  width="25" height="18" fill="gray"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M119.4 44.1c23.3-3.9 46.8-1.9 68.6 5.3l49.8 77.5-75.4 75.4c-1.5 1.5-2.4 3.6-2.3 5.8s1 4.2 2.6 5.7l112 104c2.9 2.7 7.4 2.9 10.5 .3s3.8-7 1.7-10.4l-60.4-98.1 90.7-75.6c2.6-2.1 3.5-5.7 2.4-8.8L296.8 61.8c28.5-16.7 62.4-23.2 95.7-17.6C461.5 55.6 512 115.2 512 185.1v5.8c0 41.5-17.2 81.2-47.6 109.5L283.7 469.1c-7.5 7-17.4 10.9-27.7 10.9s-20.2-3.9-27.7-10.9L47.6 300.4C17.2 272.1 0 232.4 0 190.9v-5.8c0-69.9 50.5-129.5 119.4-141z"/></svg>
                                    <span>22</span>
                                </div>
                                
                                
                                
                                
                                <div class="_btn_s _comment_count" onclick="window.location = 'comments_page.html'">
                                    <svg  width="25" height="18" fill="gray"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M272 416c17.7 0 32-14.3 32-32s-14.3-32-32-32H160c-17.7 0-32-14.3-32-32V192h32c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-64-64c-12.5-12.5-32.8-12.5-45.3 0l-64 64c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8l32 0 0 128c0 53 43 96 96 96H272zM304 96c-17.7 0-32 14.3-32 32s14.3 32 32 32l112 0c17.7 0 32 14.3 32 32l0 128H416c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l64 64c12.5 12.5 32.8 12.5 45.3 0l64-64c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8l-32 0V192c0-53-43-96-96-96L304 96z"/></svg>
                                    <span>232</span>
                                </div>
                                
                            </div>
                            
                                
                            <div class="_btn_s _comment_count" onclick="window.location = 'comments_page.html'">
                                <svg  width="25" height="18" fill="gray" class="bi bi-chat-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                </svg>
                                <span>232</span>
                            </div>
                            
                            <div class="_btn_s _like_count">
                                <span>22</span>
                                <svg width="25" height="18" fill="gray" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                </svg>
                            </div>
                            
                            
                            
                        </div>
                        
                    </div>
                    
                </div>
                
                
                
                
                
                
            </div>
            
      
            
        </div>
        
        <!-- ========== posts-container-ending ============= -->
        
    </div>


    <!-- feed cards end -->
    <script src="static/js/Js.js"></script>
    <script>
        $(document).ready(function(e) {
            e.preventDefault();
        $(".icon_fix").click(function() {
            $(this).addClass("activefix").siblings().removeClass("activefix");
       
          });
        });
        </script>
    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})



modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>



<script src="static/js/Js.js"></script>
<script>
    $(document).ready(function(e) {
        e.preventDefault();
    $(".icon_fix").click(function() {
        $(this).addClass("activefix").siblings().removeClass("activefix");
   
      });
    });
    </script>
    <script>
        function user_btn_active(e){
         var id1 = "posts_btn_up";
         var id2 = "about_btn_up";
         var id1_elem = document.getElementById(id1);
         var id2_elem = document.getElementById(id2);
    
        var id = e.getAttribute("data-label");
         if(id==id1){
             id2_elem.classList.remove("user_btn_active");
             id1_elem.classList.add("user_btn_active");
         }else if(id==id2){
             id1_elem.classList.remove("user_btn_active");
             id2_elem.classList.add("user_btn_active"); 
         }    
        }
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