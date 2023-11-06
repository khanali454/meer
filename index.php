<?php
include "global_functions.php";
$app = getAppConfiguration();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $app['site_title']; ?></title>
    <link rel="icon" type="image/png" href="static/favicon/<?= $app['site_favicon'] ?>">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/nav_bar_menu.css">
    <!-- ========== css-styling files ============= -->
    <link rel="stylesheet" href="static/css/index.css">
    <!-- ========== css-styling files ============= -->

    <!-- ========== Landing page css-styling files ============= -->
    <link rel="stylesheet" href="static/css/home-landing-sec.css">
    <!-- ==========Landing page css-styling files ============= -->

    <!-- ========== css-styling files ============= -->
    <link rel="stylesheet" href="static/css/Featured-post.css">
    <!-- ========== css-styling files ============= -->
    <!-- footer css link -->
    <link rel="stylesheet" href="static/css/footer.css">

    <!-- ========== article homecard file ============= -->
    <link rel="stylesheet" href="static/css/articlecard.css">
    <!-- ========== article Post homecard file ============= -->
    <!-- ========== Services home card css-styling files ============= -->
    <link rel="stylesheet" href="static/css/service-card-sec.css">
    <!-- ========== Services home card css-styling files ============= -->

    <!-- ========== post home card css-styling files ============= -->
    <link rel="stylesheet" href="static/css/home_post_card.css">
    <!-- ========== post home card css-styling files ============= -->

    <link rel="stylesheet" href="static/css/blogs_card.css">
    <link rel="stylesheet" href="static/css/included.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins:wght@200&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>



    <main class="_main_container">

        <!-- @include header -->
        <?php include "header.php"; ?>


        <!-- Landing section strat -->
        <div class="landing-page-container">
            <div class="landing-page-img" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1500">
                <img src="static/images/10780311_19198948-removebg.png" alt="Image">
            </div>



            <div class="landing-page-main-sec">

                <div class="landing-page-sec-one">
                    <h1 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"><span style="color: hsl(34, 97%, 64%);">CREATE MIND,</span> CREATE WORKS</h1>
                    <h3 data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">We Are Digital Agency
                    </h3>

                    <button onclick="window.location.href='signup.php';" data-aos-easing="linear" data-aos-duration="1500" data-aos="fade-up">GETTING STARTED</button>

                </div>


            </div>

        </div>

        <!-- Landing section end -->


        <!-- ========== Featured Post homecard  -starting ============= -->


        <div class="featured-home-post-card-container">
            <h1>Latest Updates!</h1>
            <h4>CHECK OUT SOME OF THE POSTS FROM THE AUTHER</h4>

            <div class="featured-home-post-card-main-sec">
                <div class="featured-home-post-card-sec-one">
                    <img src="static/images/app/<?= $app['mir_ehtesham_logo'] ?>" alt="logo">
                    <p class="featured-date-sec">Jan 7,2023</p>
                    <h2>Featured Posts</h2>

                </div>
                <div class="featured-home-post-card-sec-two">
                    <p class="featured-date-sec">Jan 7,2023</p>
                    <h1>Hello World</h1>
                    <p>Lorem ipsum dolor sit Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat porro
                        neque fugit deleniti id facilis omnis veritatis reprehenderit! Voluptatum, exercitationem
                        maiores, fuga voluptate veniam sint reprehenderit magni veritatis minima nihil enim? Quas quod
                        error nobis adipisci exercitationem fugiat aut itaque praesentium, laudantium earum esse
                        doloremque quidem rerum omnis Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor
                        neque sunt, quia quod amet magnam nostrum necessitatibus perferendis ad velit sequi veritatis
                        deleniti voluptas, facilis nesciunt quidem nisi accusamus tempora. voluptates! Odit. amet
                        consectetur adipisicing elit. Aspernatur iusto adipisci molestiae reprehenderit autem
                        necessitatibus labore nostrum minima maiores culpa.</p>
                    <button onclick="window.location.href='featured_page.html';">Read more</button>



                </div>
            </div>


        </div>
        <!-- ========== Featured Post homecard  ending ============= -->


        <div class="homecard-sec-container">
            <div class="post_by_mirethi">
                <img src="static/images/app/<?= $app['somiacis_logo'] ?>" alt="logo">
                <!-- <h6>Posts</h6>
            <p>By</p>
            <span>Mirehti</span> -->
            </div>
            <div class="postcard-sec-container-one">
                <div class="postcard-sec-container-line"></div>
                <h2>Recommended Posts</h2>
            </div>


            <!-- ========== posts-container-ending ============= -->
            <div class="_posts_container">
                <div class="_posts">




                    <div class="_post_card" data-aos-duration="3000" data-aos="fade-up">
                        <a class="_post_img" href="#">
                            <img src="https://cdn.pixabay.com/photo/2021/05/22/10/11/fishing-boat-6273132__340.jpg" alt="">
                        </a>

                        <div class="_post_info">
                            <div class="_date_time">
                                14 NOV 2022 - 12:30 PM IST
                            </div>
                            <div class="_info_top">

                                <div class="_info_top_left">
                                    <svg width="22" height="22" fill="white" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    </svg>
                                </div>
                                <div class="_info_top_right">
                                    <div class="_profile_data">
                                        <div class="_user_info">
                                            <div class="_user_name">
                                                Naveed Ullah
                                            </div>
                                            <div class="_user_username">
                                                @naveedkhan786
                                            </div>
                                        </div>
                                        <div class="_user_profile">
                                            <img src="static/images/profile/p1.jpeg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="_post_content">
                                <div class="_post_heading">
                                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias sapiente numquam illum est. Facilis repudiandae ipsum a soluta illo, consectetur sapiente, earum, ea et dolorem laboriosam sequi velit praesentium at.
                                </div>
                                <div class="_content">
                                 Aqeel ipsum dolor sit, amet consectetur adipisicing elit. Libero pariatur at laboriosam voluptatibus tempore magni fugit voluptatum praesentium. Officia architecto dolores veniam. Quasi temporibus repellat perspiciatis itaque perferendis debitis voluptatibus alias error minima earum cupiditate saepe vitae veritatis tenetur dicta quam dolorum tempora, nam eius repellendus quos? Nemo maiores sequi nulla vel porro nisi debitis unde repudiandae sed enim aperiam omnis, voluptas ducimus error nostrum cum quae consequatur aliquid quaerat at tempora, est exercitationem aspernatur voluptatum! Omnis laudantium vel, blanditiis ducimus voluptate reiciendis alias iusto fugiat itaque quibusdam enim, velit reprehenderit! Dolorum, iste! Natus error voluptatem hic eos numquam voluptatibus saepe repudiandae assumenda illo eum minima officiis, veritatis iure, esse ex a! Similique repudiandae vitae adipisci maxime aspernatur nisi facere, atque minus explicabo sint culpa maiores magni ullam praesentium dolorum quasi aliquam voluptatum ipsam at sed, itaque non. Quae, voluptates voluptas harum voluptate repellat architecto perferendis earum ipsam illo et iure vel fugiat, placeat quasi! Explicabo, fugiat? Assumenda blanditiis cumque ex maxime distinctio ipsa harum modi nesciunt! Odit voluptatem suscipit eum quasi necessitatibus atque aspernatur accusamus quae vitae officia voluptates aut eius, rem fuga consequatur nisi quibusdam, porro esse commodi ducimus? Distinctio, veniam quos fugiat minima nobis aspernatur voluptatem corporis, facilis ut doloremque natus aliquam omnis modi molestias similique nulla numquam repellendus quisquam enim odio voluptates quibusdam! Omnis, provident quod! Voluptas, maxime quia laudantium, tempore obcaecati vitae est amet itaque tenetur, dolorem neque quidem voluptatum ratione totam sed pariatur atque deserunt voluptate at distinctio porro earum nihil quae. Odit alias cumque ipsam unde architecto consequatur quae accusantium officiis, quaerat consectetur sequi optio vero nihil et temporibus nostrum aperiam distinctio animi ullam delectus dolorem explicabo, neque praesentium? Voluptatum iure quis id expedita blanditiis nisi explicabo labore possimus laboriosam temporibus facere architecto dolores obcaecati ipsam adipisci quisquam minima velit suscipit facilis, odio quia sequi! Ab quo dolorum, excepturi nobis velit dolore vel, eius minima itaque ad laudantium numquam quibusdam consequuntur voluptas vero totam blanditiis ducimus expedita unde atque sit. Nam hic labore itaque aspernatur harum atque cumque, nobis tempora ducimus excepturi, non saepe asperiores quis iure voluptatum accusantium laboriosam amet perferendis nemo. Minus maiores officia, beatae dolorum corrupti fugit necessitatibus atque vel nulla veritatis, ipsam aperiam deserunt aliquam quod architecto consequuntur eum officiis? Deserunt, vero, saepe ab, esse numquam libero odit distinctio at sed totam optio iste dicta sint reiciendis neque ipsa. Quae recusandae, modi unde saepe quam iusto quidem quia adipisci?
                                </div>
                            </div>
                            <hr>
                            <div class="_info_bottom">

                                <div class="_left_btn_s">

                                    <div class="_btn_s view_count">
                                        <svg width="25" height="23" fill="gray" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                        </svg>
                                        <span>22</span>
                                    </div>




                                    <div class="_btn_s _comment_count">
                                        <svg width="25" height="18" fill="gray" class="bi bi-chat-square" viewBox="0 0 16 16">
                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                        </svg>
                                        <span>232</span>
                                    </div>

                                </div>

                                <div class="_btn_s _like_count">
                                    <span>22</span>
                                    <svg width="25" height="18" fill="gray" class="bi bi-heart" viewBox="0 0 16 16">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                    </svg>
                                </div>



                            </div>

                        </div>

                    </div>





                    <div class="_post_card" data-aos-duration="3000" data-aos="fade-up">
                        <a class="_post_img" href="#">
                            <img src="https://cdn.pixabay.com/photo/2020/03/11/23/24/lamp-post-4923527__340.jpg" alt="">
                        </a>

                        <div class="_post_info">
                            <div class="_date_time">
                                14 NOV 2022 - 12:30 PM IST
                            </div>
                            <div class="_info_top">

                                <div class="_info_top_left">
                                    <svg width="22" height="22" fill="white" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    </svg>
                                </div>
                                <div class="_info_top_right">
                                    <div class="_profile_data">
                                        <div class="_user_info">
                                            <div class="_user_name">
                                                Mir Ehtesham
                                            </div>
                                            <div class="_user_username">
                                                @mirehti
                                            </div>
                                        </div>
                                        <div class="_user_profile">
                                            <img src="https://cdn.pixabay.com/photo/2015/03/03/08/55/portrait-657116__340.jpg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="_post_content">
                                <div class="_post_heading">
                                    Today is Raining here
                                </div>
                                <div class="_content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quia
                                    perferendis dicta! Quidem sint nulla, nesciunt soluta praesentium possimus eius
                                    magni exercitationem! Eum, harum blanditiis perspiciatis accusantium nesciunt
                                    eligendi ut!
                                </div>
                            </div>
                            <hr>
                            <div class="_info_bottom">

                                <div class="_left_btn_s">

                                    <div class="_btn_s view_count">
                                        <svg width="25" height="23" fill="gray" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                        </svg>
                                        <span>22</span>
                                    </div>




                                    <div class="_btn_s _comment_count">
                                        <svg width="25" height="18" fill="gray" class="bi bi-chat-square" viewBox="0 0 16 16">
                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                        </svg>
                                        <span>232</span>
                                    </div>

                                </div>

                                <div class="_btn_s _like_count">
                                    <span>22</span>
                                    <svg width="25" height="18" fill="gray" class="bi bi-heart" viewBox="0 0 16 16">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                    </svg>
                                </div>



                            </div>

                        </div>

                    </div>





                    <div class="_post_card" data-aos-duration="3000" data-aos="fade-up">
                        <a class="_post_img" href="#">
                            <img src="https://cdn.pixabay.com/photo/2022/01/23/19/40/northern-hawk-owl-6961772__340.jpg" alt="">
                        </a>

                        <div class="_post_info">
                            <div class="_date_time">
                                14 NOV 2022 - 12:30 PM IST
                            </div>
                            <div class="_info_top">

                                <div class="_info_top_left">
                                    <svg width="22" height="22" fill="white" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    </svg>
                                </div>
                                <div class="_info_top_right">
                                    <div class="_profile_data">
                                        <div class="_user_info">
                                            <div class="_user_name">
                                                Aqeel Khan
                                            </div>
                                            <div class="_user_username">
                                                @khanali786
                                            </div>
                                        </div>
                                        <div class="_user_profile">
                                            <img src="https://cdn.pixabay.com/photo/2014/10/06/17/30/child-476507__340.jpg" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="_post_content">
                                <div class="_post_heading">
                                    Please do hard work
                                </div>
                                <div class="_content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quia
                                    perferendis dicta! Quidem sint nulla, nesciunt soluta praesentium possimus eius
                                    magni exercitationem! Eum, harum blanditiis perspiciatis accusantium nesciunt
                                    eligendi ut!
                                </div>
                            </div>
                            <hr>
                            <div class="_info_bottom">

                                <div class="_left_btn_s">

                                    <div class="_btn_s view_count">
                                        <svg width="25" height="23" fill="gray" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                        </svg>
                                        <span>22</span>
                                    </div>




                                    <div class="_btn_s _comment_count">
                                        <svg width="25" height="18" fill="gray" class="bi bi-chat-square" viewBox="0 0 16 16">
                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                        </svg>
                                        <span>232</span>
                                    </div>

                                </div>

                                <div class="_btn_s _like_count">
                                    <span>22</span>
                                    <svg width="25" height="18" fill="gray" class="bi bi-heart" viewBox="0 0 16 16">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                    </svg>
                                </div>



                            </div>

                        </div>

                    </div>






                </div>

                <div class="home_btn">
                    <button data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" onclick="window.location.href='Feeds_page.php';">Click Here</button>
                </div>

            </div>

            <!-- ========== posts-container-ending ============= -->

        </div>

        <!-- ========== Article  homecard  start ============= -->

        <div class="articlecard-sec-container">
            <!-- <div class="article_by_mirethi">
        <img src="static/somiacis-logo-zip-file/png/logo-no-background.png" alt="">
        <h6>Articles</h6>
        <p>By</p>
        <span>Mirehti</span>
    </div> -->
            <div class="articlecard-sec-container-one">
                <div class="articlecard-sec-container-line"></div>
                <h2>Fueatured Articles</h2>
            </div>

            <div class="article_cards_main_section">



                <div class="tweet-wrap-container" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="tweet-header">
                        <!-- <div class="date_artcile_card">
              
            </div> -->

                        <!-- <img src="static/images/profile1.png" alt="" class="avator"> -->

                        <div class="tweet-header-info">
                            <!-- Naveed khosa<span>@naveedkhosa</span> -->
                            <p> If you're tired of using outline styles for secondary buttons, a soft solid background
                                based on the text color can be a great alternative.you're he tbe a great alternative.
                            </p>
                            <span>07 JAN, 2023</span>
                        </div>
                        <div class="tweet-img-wrap">
                            <img src="static/images/profile1.png" alt="" class="tweet-img">
                        </div>
                    </div>
                </div>



                <div class="tweet-wrap-container" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="tweet-header">
                        <!-- <div class="date_artcile_card">
              
            </div> -->

                        <!-- <img src="static/images/profile1.png" alt="" class="avator"> -->

                        <div class="tweet-header-info">
                            <!-- Naveed khosa<span>@naveedkhosa</span> -->
                            <p> If you're tired of using outline styles for secondary buttons, a soft solid background
                                based on the text color can be a great alternative.you're he tbe a great alternative.
                            </p>
                            <span>07 JAN, 2023</span>
                        </div>
                        <div class="tweet-img-wrap">
                            <img src="static/images/profile1.png" alt="" class="tweet-img">
                        </div>
                    </div>
                </div>




                <div class="home_btn">
                    <button data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" onclick="window.location.href='all-articles-page.html';">Click Here</button>
                </div>

            </div>

        </div>

        <!-- ========== Article  homecard  ending ============= -->

        <!-- blog card start  -->

        <div class="blog_homecard-sec-container">
            <!-- <div class="blog_by_mirethi">
            <img src="static/somiacis-logo-zip-file/png/logo-no-background.png" alt="">
            <h6>Blogs</h6>
            <p>By</p>
            <span>Mirehti</span>
        </div> -->
            <div class="blog_homecard-sec-container-one">
                <div class="blogcard-sec-container-line"></div>
                <h2>Recent Blogs</h2>
            </div>


            <div class="blogs-wrap-container">
                <div class="blog-card-header">

                    <div class="blogs-card-header-info">
                        <h3>5 remote work myths to leve behinde in 2020.</h3>
                        <p> If you're tired of using outline styles for secondary buttons, a soft solid background based
                            on the text color can be a great alternative.</p>

                    </div>

                </div>
                <div class="blog-img-wrap">
                    <div class="home_btn  btn_home">
                        <button onclick="window.location.href='all_blogs_page.html';">Click Here</button>
                    </div>
                    <img src="static/images/profile1.jpg" alt="" class="blogs-img">
                </div>

            </div>
        </div>
        <!-- blog card end  -->
        <!-- ========== Services-home-card-Start ============= -->

        <div class="services-sec-container">
            <div class="services-sec-container-one">
                <div class="services-sec-container-line"></div>
                <h2>SERVICES</h2>
            </div>
            <div class="services-sec-container-two-main">
                <div class="services-sec-container-two">

                    <div class="serices-sec-card-one" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <svg height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#66FCF1" d="M469.3 19.3l23.4 23.4c25 25 25 65.5 0 90.5l-56.4 56.4L322.3 75.7l56.4-56.4c25-25 65.5-25 90.5 0zM44.9 353.2L299.7 98.3 413.7 212.3 158.8 467.1c-6.7 6.7-15.1 11.6-24.2 14.2l-104 29.7c-8.4 2.4-17.4 .1-23.6-6.1s-8.5-15.2-6.1-23.6l29.7-104c2.6-9.2 7.5-17.5 14.2-24.2zM249.4 103.4L103.4 249.4 16 161.9c-18.7-18.7-18.7-49.1 0-67.9L94.1 16c18.7-18.7 49.1-18.7 67.9 0l19.8 19.8c-.3 .3-.7 .6-1 .9l-64 64c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l64-64c.3-.3 .6-.7 .9-1l45.1 45.1zM408.6 262.6l45.1 45.1c-.3 .3-.7 .6-1 .9l-64 64c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l64-64c.3-.3 .6-.7 .9-1L496 350.1c18.7 18.7 18.7 49.1 0 67.9L417.9 496c-18.7 18.7-49.1 18.7-67.9 0l-87.4-87.4L408.6 262.6z" />
                        </svg>
                        <h2>UI Design</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima natus recusandae quidem .</p>
                    </div>

                    <div class="serices-sec-card-one" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                        <svg height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path fill="#66FCF1" d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V428.7c-2.7 1.1-5.4 2-8.2 2.7l-60.1 15c-3 .7-6 1.2-9 1.4c-.9 .1-1.8 .2-2.7 .2H240c-6.1 0-11.6-3.4-14.3-8.8l-8.8-17.7c-1.7-3.4-5.1-5.5-8.8-5.5s-7.2 2.1-8.8 5.5l-8.8 17.7c-2.9 5.9-9.2 9.4-15.7 8.8s-12.1-5.1-13.9-11.3L144 381l-9.8 32.8c-6.1 20.3-24.8 34.2-46 34.2H80c-8.8 0-16-7.2-16-16s7.2-16 16-16h8.2c7.1 0 13.3-4.6 15.3-11.4l14.9-49.5c3.4-11.3 13.8-19.1 25.6-19.1s22.2 7.8 25.6 19.1l11.6 38.6c7.4-6.2 16.8-9.7 26.8-9.7c15.9 0 30.4 9 37.5 23.2l4.4 8.8h8.9c-3.1-8.8-3.7-18.4-1.4-27.8l15-60.1c2.8-11.3 8.6-21.5 16.8-29.7L384 203.6V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM549.8 139.7c-15.6-15.6-40.9-15.6-56.6 0l-29.4 29.4 71 71 29.4-29.4c15.6-15.6 15.6-40.9 0-56.6l-14.4-14.4zM311.9 321c-4.1 4.1-7 9.2-8.4 14.9l-15 60.1c-1.4 5.5 .2 11.2 4.2 15.2s9.7 5.6 15.2 4.2l60.1-15c5.6-1.4 10.8-4.3 14.9-8.4L512.1 262.7l-71-71L311.9 321z" />
                        </svg>
                        <h2>Content Writing</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima natus recusandae quidem .</p>
                    </div>

                    <div class="serices-sec-card-one" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <svg height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path fill="#66FCF1" d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3L562.7 256l-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z" />
                        </svg>
                        <h2>Web Development</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima natus recusandae quidem .</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== Services-home-card-end ============= -->

        <?php include "footer.php"; ?>

    </main>
    <script>
        AOS.init();
    </script>

    <script>
        const modeselect = document.getElementById("modeselect");

        modeselect.addEventListener('change', () => {
            // theme of website
            document.body.classList.toggle('dark');
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
</body>

</html>