  <!-- Footer start  -->
        <!-- Site footer -->
        <footer class="site-footer">
            <div class="container_footer">
                <div class="row_footer">
                    <div class="col-1 _header_container navbar">
                        <div class="_logo" style="height: fit-content; margin-bottom: 30px;">
                            <img src="static/images/app/<?=$app['mir_ehtesham_logo'] ?>" alt="">
                            <!-- MIReHTESHAM  -->
                        </div>
                        <p class="text-justify">
                            <?= $app['footer_about'] ?>
                        </p>
                    </div>

                    <div class="col-2">
                        <h6>Categories</h6>
                        <ul class="footer-links">

                            <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
                            <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
                            <li><a href="http://scanfcode.com/category/android/">Android</a></li>
                            <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
                        </ul>
                    </div>

                    <div class="col-3">
                        <h6>Quick Links</h6>
                        <ul class="footer-links">
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>

                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Sitemap</a></li>
                        </ul>
                    </div>
                    <div class="col-7">


                    </div>
                </div>

            </div>
            <hr>
            <div class="container_footer container_footer_width">
                <div class="row_footer row_section_two">
                    <div class="col-4">
                        <p class="copyright-text">Copyright &copy; <?= $app['copy_right_text'] ?>
                        </p>
                    </div>

                    <div class="col-5">
                        <ul class="social-icons">
                            <li><a class="facebook" href="<?= $app['facebook_url'] ?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="<?= $app['twitter_url'] ?>"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="dribbble" href="<?= $app['instagram_url'] ?>"><i class="fa fa-instagram"></i></a></li>
                            <li><a class="linkedin" href="<?= $app['linkedin_url'] ?>"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer end -->

        <script>
            async function loadCategories() {
                var result = await fetch("http://msamt.com/meer/apis/categories/loadCategories.php");
                var result = await result.json();

                console.log(result);
                
            }
            loadCategories();
        </script>