<?php
include "include_in_all.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins:wght@200&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="static/css/index.css">
    <link rel="stylesheet" href="static/css/nav_bar_menu.css">
    <link rel="stylesheet" href="static/css/contact-us_page.css">
    <link rel="stylesheet" href="static/css/all_blogs_pag.css">
    <link rel="stylesheet" href="static/css/index.css">
    <link rel="stylesheet" href="static/css/index.css.map">
    <link rel="stylesheet" href="static/css/index.scss">
</head>

<body>



    <!-- @include header -->
    <?php include "header.php"; ?>

    <div class="contact_us_page_container">
        <div class="contact_us_page_section">

            <div class="contact_us_page_heading_img_bloak">
                <img src="static/images/contact.webp" alt="">
            </div>
            <div class="contac_us_page_heading_and_line">
                <div class="contact_us_heading_line"></div>
                <div class="contact_us_heading">
                    <h2>Contact Us</h2>
                </div>

            </div>
        </div>
    </div>

    <form action="">
        <div class="contact_form_container">
            <div class="contact_form_main_sec">
                <div class="contac_block_names">
                    <div class="contact_fullnames_blocks">
                        <label for="fullname">Full Name</label>
                        <input type="text">
                    </div>

                    <div class="contact_fullnames_blocks">
                        <label for="fullname">Parentage</label>
                        <input type="text">
                    </div>
                </div>

                <div class="contac_block_email_no">
                    <div class="contact_email_blocks">
                        <label for="fullname">Email Address</label>
                        <div class="contact_number_input_blocks">
                            <input type="text">
                            <input type="submit">
                            <input type="tel" name="" id="">

                        </div>
                    </div>
                    <div class="contact_number_blocks">
                        <label for="fullname">Phone Number</label>
                        <div class="contact_number_input_blocks">
                            <input type="text">
                            <input type="submit">
                            <input type="tel" name="" id="">

                        </div>

                    </div>

                </div>
                <div class="address_contact_block">
                    <label for="">Address</label>
                    <input type="text">

                </div>

                <div class="contac_block_names">
                    <div class="contact_selectcountry_blocks">
                        <label for="fullname">Country</label>
                        <select name="" id="">
                            <option value="">Afg</option>
                            <option value="">Pak</option>
                            <option value="">ind</option>
                        </select>
                    </div>

                    <div class="contact_selectcountry_blocks">
                        <label for="fullname">Province</label>
                        <select name="" id="">
                            <option value="">Afg</option>
                            <option value="">Pak</option>
                            <option value="">ind</option>
                        </select>

                    </div>
                </div>


                <div class="contac_block_names">
                    <div class="contact_selectcountry_blocks">
                        <label for="fullname">City</label>
                        <select name="" id="">
                            <option value="">Afg</option>
                            <option value="">Pak</option>
                            <option value="">ind</option>
                        </select>
                    </div>

                    <div class="contact_selectcountry_blocks">
                        <label for="fullname">Landmark</label>
                        <input type="text">

                    </div>
                </div>


                <div class="contac_block_names">
                    <div class="contact_selectcountry_blocks">
                        <label for="fullname">Area</label>
                        <select name="" id="">
                            <option value="">Afg</option>
                            <option value="">Pak</option>
                            <option value="">ind</option>
                        </select>
                    </div>

                    <div class="contact_selectcountry_blocks">
                        <label for="fullname">Somiacis/Scrbolibers username</label>
                        <input type="text">

                    </div>
                </div>



                <div class="contact_selectcountry_blocks">
                    <label for="fullname">Why are You Writting Us</label>
                    <select name="" id="">
                        <optgroup label="About:">
                            <option value="Somiacis">Somiacis</option>
                            <option value="Scribolibere">Scribolibere</option>
                            <option value="Blog">Blog</option>
                            <option value="News">News</option>
                        </optgroup>
                        <option value="Feedback">Feedback</option>
                        <option value="Suggestion">Suggestion</option>
                        <option value="Complaint">Complaint</option>
                        <option value="Claiming Rights">Claiming Rights</option>
                        <option value="Writing Content(Blogs, Scribolibere & News)">Writing Content(Blogs, Scribolibere & News)</option>
                        <option value="Other Queries">Other Queries</option>
                    </select>
                </div>

                <div class="contact_selectcountry_blocks">
                    <label for="fullname">Message</label>
                    <input type="text">

                </div>

                <div class="contact_us_submit_main_btn">
                    <input type="submit">

                </div>





            </div>
        </div>
    </form>
    <div class="contact_us_get_touch_sec">
        <div class="contact_us_heading_gettouch">
            GET IN TOUCH WITH US
        </div>
        <div class="contact_us_link_phone_social_msg_sec">

            <div class="contact_us_touch_phone">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                </svg>
                <h5>Phone Number</h5>
                <a href="tel:<?= $app['phone_number'] ?>"><?= $app['phone_number'] ?></a>
            </div>
            <div class="boder-lineuzair"></div>

            <div class="contact_us_touch_phone">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                </svg>
                <h5>Social</h5>

                <div class="contact_us_ul_list">
                    <div class="twitter-uzair">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                        </svg>
                        <a href="<?= $app['facebook_url'] ?>">Facebook</a>
                    </div>
                    <div class="twitter-uzair">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                        <a href="<?= $app['instagram_url'] ?>">Instagram</a>
                    </div>
                    <div class="twitter-uzair">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                        </svg>
                        <a href="<?= $app['twitter_url'] ?>">Twitter</a>
                    </div>


                </div>


            </div>
            <div class="boder-lineuzair"></div>

            <div class="contact_us_touch_phone">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M215.4 96H144 107.8 96v8.8V144v40.4 89L.2 202.5c1.6-18.1 10.9-34.9 25.7-45.8L48 140.3V96c0-26.5 21.5-48 48-48h76.6l49.9-36.9C232.2 3.9 243.9 0 256 0s23.8 3.9 33.5 11L339.4 48H416c26.5 0 48 21.5 48 48v44.3l22.1 16.4c14.8 10.9 24.1 27.7 25.7 45.8L416 273.4v-89V144 104.8 96H404.2 368 296.6 215.4zM0 448V242.1L217.6 403.3c11.1 8.2 24.6 12.7 38.4 12.7s27.3-4.4 38.4-12.7L512 242.1V448v0c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64v0zM176 160H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                </svg>
                <h5>Send Message</h5>
                <a href="mailto:<?= $app['support_email'] ?>"><?= $app['support_email'] ?></a>
            </div>


        </div>
    </div>



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