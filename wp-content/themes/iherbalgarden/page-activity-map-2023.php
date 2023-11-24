<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>

<div class="map-container position-relative mx-auto">

    <h2 class="text-center map-title">2023/24 百草園地圖

        <?php

if(!is_user_logged_in())
{

?>
        <!-- <div class="green-dot-line"></div>
        <a href="<?php echo get_site_url();?>/activity-login"
            class="school-login-btn-2 mt-lg-4 mt-md-0 mt-sm-0 mt-0 mb-lg-0 mb-md-5 mb-sm-5 mb-5 ">



            <img src="https://iherbalgarden.com/wp-content/themes/iherbalgarden/assets/images/school-login-btn.png"
                alt="">
        </a> -->
        <?php
}
        ?>

    </h2>

    <div class="position-relative  desktop-map-div">
        <a href="<?php echo get_site_url();?>/school-intro/?sch=836&y=2023" class="pin-btn pin-btn-1">
            油蔴地天主教小學（海泓道）

            <div class="green-tri"></div>
        </a>
        <a href="<?php echo get_site_url();?>/school-intro/?sch=837&y=2023" class="pin-btn pin-btn-2">
            九龍塘學校（小學部）

            <div class="green-tri"></div>
        </a>


        <a href="<?php echo get_site_url();?>/school-intro/?sch=838&y=2023" class="pin-btn pin-btn-3">
            天主教柏德學校

            <div class="green-tri"></div>
        </a>


        <a href="<?php echo get_site_url();?>/school-intro/?sch=839&y=2023" class="pin-btn pin-btn-4">
            嶺南大學香港同學會小學
            <div class="green-tri"></div>
        </a>




        <a href="<?php echo get_site_url();?>/school-intro/?sch=840&y=2023" class="pin-btn pin-btn-5">
            聖公會聖多馬小學
            <div class="green-tri"></div>
        </a>


        <a href="<?php echo get_site_url();?>/school-intro/?sch=841&y=2023" class="pin-btn pin-btn-6">
            聖公會基福小學
            <div class="green-tri"></div>
        </a>


        <a href="<?php echo get_site_url();?>/school-intro/?sch=842&y=2023" class="pin-btn pin-btn-7">
            中華傳道會呂明才小學
            <div class="green-tri"></div>
        </a>
        <a href="<?php echo get_site_url();?>/school-intro/?sch=843&y=2023" class="pin-btn pin-btn-8">
            香港仔聖伯多祿天主教小學
            <div class="green-tri"></div>
        </a>

        <a href="<?php echo get_site_url();?>/school-intro/?sch=844&y=2023" class="pin-btn pin-btn-9">
            香港南區官立小學
            <div class="green-tri"></div>
        </a>

        <a href="<?php echo get_site_url();?>/school-intro/?sch=845&y=2023" class="pin-btn pin-btn-10">
            香港中國婦女會丘佐榮學校
            <div class="green-tri"></div>
        </a>








        <a href="<?php echo get_site_url();?>//activity-sharing-2/" class="pin-btn pin-btn-11 blue-green">
            觀賞藥園

            <div class="green-tri blue-green"></div>
        </a>




        <a href="<?php echo get_site_url();?>/activity-map/" class="pin-btn pin-btn-12 blue-green">
            2021/22百草園

            <div class="green-tri blue-green"></div>
        </a>





        <img class="w-100" src="<?php echo get_site_url();?>/wp-content/themes/iherbalgarden/assets/images/island.png"
            alt="">
    </div>

    <div class="container mobile-map">
        <div class="row gx-3">

            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=812" class="map-a"><img class="w-100"
                        src="<?php echo get_site_url();?>/wp-content/uploads/2023/11/map-pcs-1new.jpg" alt=""></a>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=808" class="map-a">
                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2023/11/map-pcs-2new.jpg"
                        alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=810" class="map-a">

                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2023/11/map-pcs-3new.jpg"
                        alt="">
                </a>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=815" class="map-a">
                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2023/11/map-pcs-4new.jpg"
                        alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=813" class="map-a">

                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2023/11/map-pcs-5new.jpg"
                        alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=807" class="map-a">
                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2023/11/map-pcs-6new.jpg"
                        alt=""></a>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=809" class="map-a">
                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2023/11/map-pcs-7new.jpg"
                        alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=811" class="map-a">
                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2023/11/map-pcs-8new.jpg"
                        alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=814" class="map-a">
                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2023/11/map-pcs-9new.jpg"
                        alt=""></a>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=816" class="map-a">
                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2023/11/map-pcs-10new.jpg"
                        alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/activity-sharing/" class="map-a">
                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2023/11/map-pcs-11new.jpg"
                        alt=""></a>
            </div>
            <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/activity-sharing/" class="map-a">
                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2023/11/map-pcs-12new.jpg"
                        alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/activity-sharing/" class="map-a">
                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2023/11/map-pcs-13new.jpg"
                        alt=""></a>
            </div> -->






        </div>
    </div>

    <script type="text/javascript">
    $(function() {

        $('.activity-map ').addClass('active');
    })
    </script>


    <?php
// if ( have_posts() ) {

// 	// Load posts loop.
// 	while ( have_posts() ) {
// 		the_post();

// 		get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
// 	}

// 	// Previous/next page navigation.
// 	twenty_twenty_one_the_posts_navigation();

// } else {

// 	// If no content, include the "No posts found" template.
// 	get_template_part( 'template-parts/content/content-none' );

// }

get_footer();