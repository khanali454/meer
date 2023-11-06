<?php
$logged_in_user_id = 6;
?>

<header class="_header">
    <div class="_header_container navbar">
        <div class="_logo">
            <img src="static/images/app/<?=$app['mir_ehtesham_logo'] ?>" alt="logo">
            <!-- MIReHTESHAM                     -->
        </div>
        <div class="_nav_menu">
            <div>

                <input type="checkbox" class="_dark_mode_box" id="modeselect">
                <label for="modeselect" class="label_mode_select">
                    <i class="fas fa-moon"></i>
                    <i class="fas fa-sun"></i>
                    <div class="boll"></div>
                </label>
            </div>
            <div class="bar-spinner" id="nav">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="links" id="links">
                <li>
                    <a href="index.php">Home</a>
                </li>

                <li>
                    <a href="featured_page.html">Featured</a>
                    <!-- <ul class="_sub_menu">
                        <li>
                            <a href="#sublink">Posts</a>
                        </li>
                        <li>
                            <a href="#sublink">Articles</a>
                        </li>
                        <li>
                            <a href="#sublink">Tweets</a>
                        </li>
                    </ul> -->
                </li>

                <li>
                    <a href="blogs.php">Blog</a>
                </li>

                <li>
                    <a href="services_page.html">Services</a>
                </li>

                <li>
                    <a href="Copy-Right-policy.html">Privacy</a>
                </li>


                <li>
                    <a href="about-us.php">About</a>
                </li>

                <li>
                    <a href="contact-us.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</header>

