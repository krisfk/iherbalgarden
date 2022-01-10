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

            <h2>訊息箱

            </h2>


            <div class="mb-3">
                **訊息箱檔案上載大小上限為 4MB

            </div>
            <div　class="mt-3">
                <?php
                echo do_shortcode('[front-end-pm]');
                ?>
                <!-- 資料稍後更新⋯ -->

            </div>

            <!-- <h5 class="mt-4">報導連結</h5> -->
            <!-- 
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
            </div> -->
            <!-- <div class="mt-3">導師視訊遙距教學，輔助並檢討參與團隊的進程，釋除所遇疑難
            </div> -->





        </div>
    </div>

    <script type="text/javascript">
    <?php 
        session_start();
       $school_account_id =  $_SESSION['school_account_id'];
        
 
 ?>


    $(function() {
        $('.activity-map ').addClass('active');


        $('.activity-sharing').addClass('active');

        $('.sm-activity-sharing-school-admin-4').addClass('active');



        <?php
      
    //   echo $school_account_id; 
      if($school_account_id)
        {
            ?>
        $('#fep-menu-directory').fadeOut(0)

        $('.fep-form-field.fep-form-field-fep_pro_to,#fep-menu-settings').fadeOut(0);
        $('#message_title').focus();

        setTimeout(() => {
            $('#fep_mr_to').val(1);
        }, 2000);

        <?php
        }
       
       ?>



        // $('#fep_mr_to').val(1);
        // $('.fep-form-field.fep-form-field-fep_pro_to').fadeOut(0);
        // $('#fep_mr_to').addClass('form-control');
        $('#message_title').addClass('form-control');
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