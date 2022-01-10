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
            <!-- <h2>目的和主辦單位</h2>


            <h3 class="mt-4">目的</h3>
            <div>本計劃以中醫藥文化為題，讓同學透過種植中草藥，從而接觸和認識博大精深的中醫藥文化。過程中，我
                們會融會互動學習、探索、實踐，運用網絡能量，讓大眾得以分享成員所學、所知、所感。
                當中包括：
            </div>
            <ul>
                <li>介紹中醫藥基本知識和植物藥的概念</li>
                <li>由醫師、藥師、園藝師、策展人，配合課堂與實踐，讓大家透過參與、體驗、觀摩、匯報和展示，投
                    入完整的學習進程，發揮遊藝與學習的互動力量</li>
                <li>以數字化、網絡化的新展示空間，展現大家的學習成果和交流體會，同時向大眾鋪建廣闊而具接觸力
                    的信息平台
                </li>
            </ul>

            <h3 class="mt-4">主辦單位介紹</h3>
            <div class="mt-4">
                    <h5 class="text-decoration-underline">
                <a class="deep-green font-weight-bold" href="https://www.cccfoundation.com.hk/" target="_blank">

                        中華文化傳播基金</a></h5>
                
            </div>
            <div>本機構為非牟利機構
                (稅務檔案號碼：91/15508)
                ，宗旨主要為中國傳統文化注入時代元素和表現手法，演繹當中現
                代價值，達致普及推廣。曾推動「中醫藥繪本教育圖書系列」及「小小華佗的誕生」展藝活動，均獲香港特區政府啓
                動的「中醫藥發展基金」資助。
            </div>


        </div> -->

        </div>
    </div>
    <script type="text/javascript">
    $(function() {

        $('.about').addClass('active');
        $('.sm-about').addClass('active');

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