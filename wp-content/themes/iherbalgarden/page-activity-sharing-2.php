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

<div class="bg-wrapper position-relative">

    <img class="island-bg" class="w-100" src="<?php echo get_template_directory_uri();?>/assets/images/island.png"
        alt="">
    <div class="container mt-0">

        <?php// echo get_template_part('about-menu');;?>

        <div class="row justify-content-center">

            <div class="col-lg-3 col-md-12 col-sm-12 col-12  ">

                <?php echo get_template_part('activity-sharing-menu');?>

            </div>

            <div class="col-lg-7 col-md-12 col-sm-12 col-12  white-tran-bg">

                <h2>觀賞藥園
                </h2>

                <ul class="right-content-top-menu-ul">
                    <li> <a href="javascript:void(0);" class="active  education-a "> 觀賞藥園</a></li>

                    <li> <a href="javascript:void(0);" class=" education-a "> 媒體報導</a></li>
                    <li><a href="javascript:void(0);" class="education-a">放眼遠方</a>

                </ul>

                <div class="sub-section sub-section-1 mt-3">
                    <?php echo get_field('content_1');?>

                </div>
                <div class="sub-section sub-section-2 mt-3">

                    <?php echo get_field('content_2');?>

                </div>


                <div class="sub-section sub-section-3 mt-3">




                    <?php echo get_field('content_3');?>


                </div>

                <!-- <div class="mt-3">


                </div> -->
                <!-- <h4 class="mt-4 deep-green">報導連結</h4>

                <div class="mt-3">
                    <ul class="link-list">
                        <li><a href="#">報導標題報導標題報導標題報導標題報導標題
                            </a> </li>
                        <li><a href="#">報導標題報導標題報導標題報導標題報導標題
                            </a> </li>
                        <li><a href="#">報導標題報導標題報導標題報導標題報導標題
                            </a> </li>
                        <li><a href="#">報導標題報導標題報導標題報導標題報導標題
                            </a> </li>
                    </ul>
                </div>


                <h4 class="mt-5 deep-green">專題介紹 (觀摩)
                </h4>

                <div class="row mt-3">

                    <div class="col-3"><img class="w-100"
                            src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/11/Asset-8@2x-1.png" alt="">
                    </div>

                    <div class="col-9">海外藥園的文字介紹 海外藥園的文字介紹海外藥園的文字介紹 海外藥園的文字介紹海外藥園的文字介紹 海外藥園的文字介紹海外藥園的文字介紹
                        海外藥園的文字介紹海外藥園的文字介紹
                        海外藥園的文字介紹海外藥園的文字介紹 海外藥園的文字介紹海外藥園的文字介紹

                        <div class="mt-3">
                            <a href="#" class="view-vt-btn">檢視 Virtual Tour</a>
                        </div>
                    </div>

                </div>


                <h4 class="mt-4 deep-green">其他藥園連結</h4>

                <div class="mt-3">
                    <ul class="link-list">
                        <li><a href="#">藥園名
                            </a> </li>
                        <li><a href="#">藥園名
                            </a> </li>
                        <li><a href="#">藥園名
                            </a> </li>
                        <li><a href="#">藥園名
                            </a> </li>
                    </ul>
                </div> -->







            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(function() {



        $('.activity-map ').addClass('active');


        $('.activity-sharing').addClass('active');
        $('.sm-activity-sharing-2').addClass('active');


        $('.education-a').click(function() {
            var idx = $(this).parent('li').index() + 1;

            if (idx == 2) {
                $('.subsubmenu-ul').fadeIn(0);
            } else {
                $('.subsubmenu-ul').fadeOut(0);
            }
            $('.sub-section').fadeOut(0);
            $('.sub-section.sub-section-' + idx).fadeIn(0);
            $('.education-a').removeClass('active');
            $(this).addClass('active');
        })
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