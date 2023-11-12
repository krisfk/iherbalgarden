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



<div class="container mt-0">
    <!-- fdsf -->

    <div>


        <table class="mx-auto">
            <tr>
                <td> <img class="girl" src="<?php echo get_template_directory_uri();?>/assets/images/girl.png" alt="">
                </td>
                <td>

                    <div class="mt-3">
                        <h2 class="home-slogan">
                            教育在乎學習、實踐、交流； <br>
                            學習重在問題、探索、經驗。</h2>
                    </div>
                </td>
            </tr>
        </table>
        <!-- <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-4 col-sm-4 col-4  text-end">
                <img class="girl" src="<?php echo get_template_directory_uri();?>/assets/images/girl.png" alt="">

            </div>
            <div class="col-lg-3 col-md-8 col-sm-8 col-8 ">

                <h4 class="">
                
                </h4>
                <div class="mt-3">
                    <h2 class="home-slogan">
                        教育在乎學習、實踐、交流； <br>
                        學習重在問題、探索、經驗。</h2>
                </div>

            </div>
        </div> -->


        <div class="mt-lg-5 mt-md-4 mt-sm-4 mt-4  text-center">
            <!-- <h4>參與本活動的小學：</h4> -->
            <!-- <a href="<?php echo get_site_url();?>/activity-map" class="entry-btn">

                <img class="" src="<?php echo get_template_directory_uri();?>/assets/images/school-login-home-btn.png"
                    alt="">


            </a> -->

            <div>
                <a href="<?php echo get_site_url();?>/activity-map-2023" class="entry-btn">

                    <img class="school-login-home-btn"
                        src="<?php echo get_template_directory_uri();?>/assets/images/school-login-home-btn-1.png"
                        alt="">


                </a>
            </div>
            <div>
                <a href="<?php echo get_site_url();?>/activity-map" class="entry-btn">

                    <img class="school-login-home-btn"
                        src="<?php echo get_template_directory_uri();?>/assets/images/school-login-home-btn-2.png"
                        alt="">


                </a>

            </div>

        </div>
    </div>

</div>

<img class="home-island" class="w-100" src="<?php echo get_template_directory_uri();?>/assets/images/island.gif" alt="">


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