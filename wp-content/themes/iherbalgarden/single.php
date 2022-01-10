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
$current_post_id = get_the_ID();
// echo $current_post_id;
session_start();
?>
<?php

// echo get_field('access');
if(get_field('access'))
{
    // echo 1;
    if(!$_SESSION['school_id'])
    {
        ?>
<script type="text/javascript">
show_dialog('這內容只限學校登入帳號瀏覽');

window.location = "<?php echo get_site_url();?>/activity-login";
</script>
<?php
   
    }
    // echo 'for school user only';
}
// else
// {
//     // echo 'for all school';

// }
?>

<div class="container mt-0">

    <?php// echo get_template_part('about-menu');;?>

    <div class="row justify-content-center">

        <div class="col-lg-3 col-md-12 col-sm-12 col-12 ">

            <?php echo get_template_part('education-menu');?>

        </div>

        <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">

            <!-- <h2>種植心得</h2> -->
            <?php
           
$postcat = get_the_category( get_the_ID() );

$cat_id = $postcat[0]->term_id;

// echo $cat_id;
// echo $postcat[0]->term_id;
// echo $postcat[0]->ID;
// if ( ! empty( $postcat ) ) {
//     echo esc_html( $postcat[0]->ID );   
// }
?>
            <a href="<?php echo get_site_url(0);?>/education<?php echo ($cat_id==5 || $cat_id==6) ? '-2':''; ?><?php echo ($cat_id==3 || $cat_id==4) ? '#post':''; ?>"
                class="prev-page-btn mt-0 mb-3">上一頁</a>


            <div class="row align-items-center mb-2">
                <div class="col-7">
                    <h2 class="mt-3 d-inline-block"><?php echo get_the_title();?></h2>
                </div>
                <div class="col-5"> <span class="post-category-name">
                        <!-- 教授影片 -->
                        <?php echo get_the_category( get_the_ID() )[0]->name;?>
                    </span>
                </div>
            </div>


            <img class="w-100" src="<?php echo wp_get_attachment_image_src(get_field('cover_image'),'full')[0];?>"
                alt="">
            <div class="mt-3">

                <?php echo get_the_content();?>

            </div>

            <?php

$args = array('p' => $_SESSION['school_id'], 'post_type' => 'school');
$school = new WP_Query($args);
if($school->have_posts())
{
    $school->the_post();
    $watched_posts = get_field('watched_posts');
    echo $watched_posts;
}

                                  $watched=false;

                          $pieces = explode(",", $watched_posts);
                                    if (in_array($current_post_id, $pieces)) {
                                       $watched=true;
                                    //    echo 11;
                                    }
                                    ?>

            <div class="text-center mt-4">已完成觀看可按 <a href="javascript:void(0);"
                    class="seen-btn <?php echo $watched ? 'active' :'';?>">已觀看<?php echo $watched ? '&#10003;' :'';?></a>
            </div>
            <div><?php
		
		// if($_POST)
		// {
		// 	echo 111;
		// }
		?></div>
            <?php
// echo 111;
// echo do_shortcode("[wpdiscuz_comments]");
// comments_template();
if ( comments_open() || get_comments_number() ) {
    comments_template();
}
// echo get_the_content();
			?>
        </div>


    </div>
</div>
<?php 


// echo $_SESSION['school_id'];
$post_id= get_the_ID();
// echo 9;
?>
<script type="text/javascript">
$(function() {

    $('#commentform input').addClass('form-control');
    $('#commentform textarea').addClass('form-control');


    $('.seen-btn').click(function() {

        if (!$(this).hasClass('active')) {
            $(this).addClass('active');

            $(this).html($(this).html() + '&#10003;');

            // $('.like-btn').click(function() {
            $.post("<?php echo get_site_url();?>/wp-json/api/watch-post", {
                    post_id: <?php echo $current_post_id;?>
                    // ,
                    // login_pw: $('#login-pw').val()
                })
                .done(function(data) {}
                    // }


                )

            // &# 10004;
        }

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