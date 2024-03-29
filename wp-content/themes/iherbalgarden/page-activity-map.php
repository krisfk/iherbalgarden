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

    <h2 class="text-center map-title">2021/22 百草園地圖

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
        <a href="<?php echo get_site_url();?>/school-intro/?sch=812" class="pin-btn pin-btn-1">
            東華三院李東海小學

            <div class="green-tri"></div>
        </a>
        <a href="<?php echo get_site_url();?>/school-intro/?sch=808" class="pin-btn pin-btn-2">
            潮陽百欣小學

            <div class="green-tri"></div>
        </a>
        <a href="<?php echo get_site_url();?>/school-intro/?sch=810" class="pin-btn pin-btn-3">
            大角嘴天主教小學

            <div class="green-tri"></div>
        </a>
        <a href="<?php echo get_site_url();?>/school-intro/?sch=815" class="pin-btn pin-btn-4">
            聖公會奉基小學

            <div class="green-tri"></div>
        </a>

        <a href="<?php echo get_site_url();?>/school-intro/?sch=807" class="pin-btn pin-btn-5">
            聖文德天主教小學

            <div class="green-tri"></div>
        </a>
        <a href="<?php echo get_site_url();?>/school-intro/?sch=816" class="pin-btn pin-btn-6">
            慈幼葉漢千禧小學

            <div class="green-tri"></div>
        </a>
        <a href="<?php echo get_site_url();?>/school-intro/?sch=813" class="pin-btn pin-btn-7">
            嗇色園主辦可信小學

            <div class="green-tri"></div>
        </a>
        <a href="<?php echo get_site_url();?>/school-intro/?sch=809" class="pin-btn pin-btn-8">
            新界婦孺福利會梁省德小學

            <div class="green-tri"></div>
        </a>
        <a href="<?php echo get_site_url();?>/school-intro/?sch=811" class="pin-btn pin-btn-9">
            保良局田家炳小學

            <div class="green-tri"></div>
        </a>

        <a href="<?php echo get_site_url();?>/school-intro/?sch=814" class="pin-btn pin-btn-10">
            香港浸會大學附屬小學 <br>
            王錦輝中小學(小學部)

            <div class="green-tri"></div>
        </a>



        <!-- <a href="<?php echo get_site_url();?>//activity-sharing-2/" class="pin-btn pin-btn-11 blue-green">
            觀賞藥園

            <div class="green-tri blue-green"></div>
        </a> -->

        <!-- <?php echo get_site_url();?>/activity-map/ -->
        <a href="<?php echo get_site_url();?>/activity-map-2023/" class="pin-btn pin-btn-11 blue-green">
            2023/24百草園

            <div class="green-tri blue-green"></div>
        </a>



        <a href="<?php echo get_site_url();?>/activity-sharing-2/" class="pin-btn pin-btn-12 orange">
            觀賞藥園

            <div class="green-tri blue-green"></div>
        </a>





        <img class="w-100" src="<?php echo get_site_url();?>/wp-content/themes/iherbalgarden/assets/images/island.png"
            alt="">
    </div>

    <div class="container mobile-map">
        <div class="row gx-3">

            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=812" class="map-a"><img class="w-100"
                        src="<?php echo get_site_url();?>/wp-content/uploads/2021/12/map-pcs-1.jpg" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=808" class="map-a">
                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2021/12/map-pcs-2.jpg"
                        alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=810" class="map-a">

                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2021/12/map-pcs-3.jpg"
                        alt="">
                </a>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=815" class="map-a">
                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2021/12/map-pcs-4.jpg"
                        alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=813" class="map-a">

                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2021/12/map-pcs-5.jpg"
                        alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=807" class="map-a">
                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2021/12/map-pcs-6.jpg"
                        alt=""></a>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=809" class="map-a">
                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2021/12/map-pcs-7.jpg"
                        alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=811" class="map-a">
                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2021/12/map-pcs-8.jpg"
                        alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=814" class="map-a">
                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2021/12/map-pcs-9.jpg"
                        alt=""></a>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/school-intro/?sch=816" class="map-a">
                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2021/12/map-pcs-10.jpg"
                        alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/activity-map-2023/" class="map-a">
                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2023/11/map-pcs-11.jpg"
                        alt=""></a>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-6 col-6  mb-3">
                <a href="<?php echo get_site_url();?>/activity-sharing-2/" class="map-a">
                    <img class="w-100" src="<?php echo get_site_url();?>/wp-content/uploads/2023/11/map-pcs-12.jpg"
                        alt=""></a>
            </div>


            <!-- http://64.227.13.14/iherbalgarden/wp-content/uploads/2023/11/map-pcs-11.jpg -->




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