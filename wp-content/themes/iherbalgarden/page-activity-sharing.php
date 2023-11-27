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

            <div class="col-lg-3 col-md-12 col-sm-12 col-12 ">

                <?php echo get_template_part('activity-sharing-menu');?>

            </div>

            <div class="col-lg-7 col-md-12 col-sm-12 col-12  white-tran-bg">

                <h2>參與學校
                </h2>

                <div class="mt-3">

                    <div class="row school-logo-list">


                        <?php
                
                $args = array(
                    'post_type' => 'school',    //custom post type
                    'posts_per_page' => -1       // get all posts
                 );
        
                   $query = new WP_Query( $args );
        
                   if ( $query->have_posts() ) {   

                    // Start looping over the query results.
                
                    while ( $query->have_posts() ) {
                
                       $query->the_post();
                
                       ?>
                        <div class="col-3 mb-3">
                            <a href="<?php echo get_site_url();?>/school-intro?sch=<?php echo get_the_ID();?>"><img
                                    class="w-100"
                                    src="<?php echo wp_get_attachment_image_src(get_field('school_logo'),'full')[0];?>"
                                    alt="">
                                <div class="text-center mt-2"><?php echo get_field('school_name');?></div>
                            </a>
                        </div>
                        <?php
                       
                    //    echo 
                    //    wp_get_attachment_image_src(get_field('school_logo'),'full')[0];
                    //    echo 1;
                    //    echo( get_the_title() );
                
                    }
                
                }

        ?>



                    </div>


                </div>







            </div>
        </div>
    </div>

    <script type="text/javascript">
    $(function() {

        $('.activity-map ').addClass('active');



        $('.activity-sharing').addClass('active');


        <?php
        
        if($_GET['y']=='2023')
        {
?>
        $('.sm-activity-sharing-2023').addClass('active');

        <?php
        }
        

        if($_GET['y']=='2021')
        {
            ?>
        $('.sm-activity-sharing').addClass('active');

        <?php
                   
        }

        ?>

    })
    </script>
    <?php



get_footer();