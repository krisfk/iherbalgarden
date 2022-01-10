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

            <?php echo get_template_part('education-menu');?>

        </div>

        <div class="col-lg-7 col-md-7 col-sm-7 col-12 ">

            <h2>專家教路</h2>

            <div class="mt-3">導師視訊遙距教學，輔助並檢討參與團隊的進程，釋除所遇疑難
            </div>

            <?php
            session_start();
            $args = array('p' => $_SESSION['school_id'], 'post_type' => 'school');
            $school = new WP_Query($args);
            if($school->have_posts())
            {
                $school->the_post();
                $watched_posts = get_field('watched_posts');
            }
            
            ?>

            <div class="row mt-5">


                <div class="col-6">

                    <h5>補習班</h5>
                    <div class="row">


                        <?php
                            $args=array(
                                'posts_per_page' => -1, 
                                'post_type' => 'post',
                                'cat' => 5,
                            );
                            $query = new WP_Query( $args );
                                    
                            if ( $query->have_posts() ) {   
                                  
                             while ( $query->have_posts() ) {
                         
                                $query->the_post();
                                ?>
                        <div class="col-lg-6 col-sm-12 col-md-12 col-12 mb-3">
                            <a href="<?php echo get_permalink();?>" class="post-a">
                                <img src="<?php echo wp_get_attachment_image_src(get_field('cover_image'),'full')[0];?>"
                                    alt="" class="w-100">
                                <div claskjs="mt-2"><?php echo get_the_title();?></div>
                                <?php
                                    $post_id = get_the_ID();
                                    $pieces = explode(",", $watched_posts);
                                    if (in_array($post_id, $pieces)) {
                                        ?>
                                <div class="watched">已觀看</div>
                                <?php
                                    }
                                    ?>
                            </a>
                        </div>
                        <?php
                             }
                            }
                            
                            ?>

                    </div>
                </div>
                <div class="col-6">
                    <h5>答客問</h5>
                    <div class="row">

                        <?php
                            $args=array(
                                'posts_per_page' => -1, 
                                'post_type' => 'post',
                                'cat' => 6,
                            );
                            $query = new WP_Query( $args );
                                    
                            if ( $query->have_posts() ) {   
                                  
                             while ( $query->have_posts() ) {
                         
                                $query->the_post();
                                ?>
                        <div class="col-lg-6 col-sm-12 col-md-12 col-12  mb-3">
                            <a href="<?php echo get_permalink();?>" class="post-a">
                                <img src="<?php echo wp_get_attachment_image_src(get_field('cover_image'),'full')[0];?>"
                                    alt="" class="w-100">
                                <div claskjs="mt-2"><?php echo get_the_title();?></div>
                                <?php
                                    $post_id = get_the_ID();
                                    $pieces = explode(",", $watched_posts);
                                    if (in_array($post_id, $pieces)) {
                                        ?>
                                <div class="watched">已觀看</div>
                                <?php
                                    }
                                    ?>
                            </a>
                        </div>
                        <?php
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
        $('.education').addClass('active');

        $('.sm-education-2').addClass('active');

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