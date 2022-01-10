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

            <?php echo get_template_part('activity-sharing-menu');?>

        </div>

        <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">

            <h2>活動時間表
            </h2>

            <?php 
session_start();?>
            <div class="mt-3">

                <a class="this-school-btn"
                    href="<?php echo get_site_url();?>/school-intro/?sch=<?php echo $_SESSION['school_id'];?>">本學校簡介</a>
                <?php


$args = array('p' => $_SESSION['school_id'], 'post_type' => 'school');
$school = new WP_Query($args);

if($school->have_posts())
{
    $school->the_post();
    // echo get_field('activity_time_table');
    // $watched_posts = get_field('watched_posts');
    // if()
    // {

    // }
    echo '<div>';
    echo get_field('activity_time_table') ? get_field('activity_time_table') : '資料稍後更新⋯';
    echo '</div>';
}

?>
                <!-- 資料稍後更新⋯ -->
            </div>







        </div>
    </div>

    <script type="text/javascript">
    $(function() {
        $('.activity-map ').addClass('active');


        $('.activity-sharing').addClass('active');
        $('.sm-activity-sharing-school-admin').addClass('active');
    })
    </script>

    <?php echo get_template_part('check-login-access');?>


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