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
<style type="text/css">
.school-login-btn {
    display: none;
}
</style>
<div class="container mt-0">

    <?php// echo get_template_part('about-menu');;?>

    <div class="row justify-content-center">

        <div class="col-lg-3 col-md-12 col-sm-12 col-12 ">

            <?php echo get_template_part('activity-sharing-menu');?>

        </div>

        <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">

            <h2>學校登入
            </h2>


            <table class="mt-4">
                <tr>
                    <td class="pb-2"><input placeholder="登入名稱" type="text" class="form-control" id="login-name"></td>

                </tr>
                <tr>
                    <td class="pb-2"><input placeholder="密碼" type="password" class="form-control" id="login-pw"></td>

                </tr>
                <tr>


                    <td class="text-end">

                        <a href="<?php echo get_site_url();?>/activity-forgetpw" class="forgot-pw-a me-2">忘記密碼</a>
                        <input class="login-form-submit-btn form-control" type="submit" value="登入">

                    </td>
                </tr>
            </table>

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
    $(function() {
        // var login_name = $('#login-name').val();
        // var login_pw = $('#login-pw').val();


        $('.activity-sharing').addClass('active');



        $('.login-form-submit-btn').click(function() {


            $.post("<?php echo get_site_url();?>/wp-json/api/school-login", {
                    login_name: $('#login-name').val(),
                    login_pw: $('#login-pw').val()
                })
                .done(function(data) {
                    console.log(data);
                    if (data.status == 1) {

                        show_dialog(data.msg);
                        window.location =
                            "<?php echo get_site_url();?>/activity-sharing-school-admin/";

                    }
                    if (data.status == -1) {
                        show_dialog(data.msg);

                    }

                });
        });

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