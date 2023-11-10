<?php
include "include_in_all.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

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

    <link rel="stylesheet" href="static/css/index.css">
    <link rel="stylesheet" href="static/css/services_page.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins:wght@200&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>


    <!-- @include header -->
    <?php include "header.php" ?>

    <div class="services_page_contsiner">
        <div class="services_page_main_sec">

            <div class="services_page_sec">
                <h3>Our<span> Services</span> </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit repellat doloremque deserunt explicabo sed totam, a reprehenderit reiciendis fuga mollitia.</p>
            </div>

            <div class="services_page_block_card_sec">

                <div class="services_page_block_card">
                    <img src="static/images/7176410_3572691-removebg-preview.png" alt="">
                    <h4>Graphic</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, illo.</p>
                </div>

                <div class="services_page_block_card">
                    <img src="static/images/10276612_4421964-removebg-preview.png" alt="">
                    <h4>Web Development</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, illo.</p>
                </div>

                <div class="services_page_block_card">
                    <img src="static/images/7176410_3572691-removebg-preview.png" alt="">
                    <h4>Content Writing</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, illo.</p>
                </div>

            </div>
        </div>
    </div>

    <!-- @include footer -->
    <?php include "footer.php" ?>

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