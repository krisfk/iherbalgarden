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

    <?php// echo get_template_part('about-menu');;?>

    <div class="row justify-content-center">

        <div class="col-lg-3 col-md-12 col-sm-12 col-12 ">

            <?php echo get_template_part('about-menu');?>

        </div>

        <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">
            <?php echo get_the_content();?>

            <!-- <h2>支持團體</h2>

            <div class="mt-4">

                <div class="row align-items-center gx-0">
                    <div class="col-4">
                        <a href="https://cmedforall.org" target="_blank"><img class="w-100"
                                src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/12/SUPPORT_LOGO_1.png"
                                alt=""></a>

                    </div>
                    <div class="col-4">

                        <div><img class="w-100"
                                src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/12/SUPPORT_LOGO_2.png"
                                alt=""></div>
                    </div>

                    <div class="col-4">
                        <div><img class="w-100"
                                src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/12/SUPPORT_LOGO_3.png"
                                alt=""></d>
                        </div>
                    </div>
                </div>
              



            </div> -->

        </div>

    </div>
</div>
<script type="text/javascript">
$(function() {

    $('.about').addClass('active');
    $('.sm-about-2').addClass('active');

    // $('.about-2').addClass('active');

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