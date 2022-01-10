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





    <div class="container mt-0">


        <div class="row justify-content-center">

            <div class="col-lg-3 col-md-12 col-sm-12 col-12 ">

                <?php echo get_template_part('games-menu');?>

            </div>

            <div class="col-lg-7 col-md-12 col-sm-12 col-12  ">
                <?php echo get_the_content();?>
                <!-- 
                    <h2>你懂得分辨五味嗎？
                </h2>

                <div class="mt-3">

                    <iframe src="https://wordwall.net/embed/77c4bac1a2014ddabf8b4f5391dbc694?themeId=2&templateId=2"
                        width="740" height="740" frameborder="0" allowfullscreen></iframe>

                </div>
             -->







            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(function() {

        $('.games').addClass('active');
        $('.sm-games').addClass('active');


    })
    </script>
    <?php



get_footer();