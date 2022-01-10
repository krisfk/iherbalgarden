<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
// echo get_the_content();

?>

<div class="container mt-0">

    <?php// echo get_template_part('about-menu');;?>

    <div class="row justify-content-center">

        <div class="col-lg-3 col-md-12 col-sm-12 col-12 ">

            <?php echo get_template_part('education-menu');?>

        </div>

        <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">

            <h2>學有所成</h2>

            <ul class="right-content-top-menu-ul">
                <li> <a href="javascript:void(0);" class="active education-a "> 活動手冊</a></li>
                <li><a href="javascript:void(0);" class="education-a">醫藥．園藝</a>

                    <ul class="subsubmenu-ul">
                        <li><a href="javascript:void(0);"> 醫</a></li>
                        <li><a href="javascript:void(0);"> 藥</a></li>
                        <li><a href="javascript:void(0);"> 園藝</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="education-a">入門小貼士</a></li>
            </ul>

            <div class="sub-section sub-section-2 mt-5">



                <?php echo get_the_content();?>

                <!-- 
                <img id="big-title-1" class="w-100 mb-5"
                    src="http://64.227.13.14/iherbalgarden/wp-content/themes/iherbalgarden/assets/images/big-title-1.png"
                    alt="">

                <h2 class="text-center ">
                    人和大自然的規律
                </h2>

                <div class="row mt-5">

                    <div class="col-12 mb-5">


                        <img class="education-img"
                            src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/11/sun-g.jpg" alt="">

                        <div class="mt-4">
                            人與大自然是遵循相同的規律 <br> <br>

                            中醫把身體視為一個整體的系統，是互相關聯的；外在環境也是一個有規律系統，身體必需配合大自然的規律，讓身體與環境得以平衡，達至健康。
                        </div>
                    </div>
                    <div class="col-12">
                        <h2 class="mb-3  deep-green  text-center">
                            病的三個階段: 未病、病、康復</h2>
                        <img class="education-img"
                            src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/11/3-sick.jpg" alt="">


                        <div class="mt-4">

                            <table>
                                <tr>
                                    <td>一）</td>
                                    <td>未病，要強身健體，維護
                                        日常生活健康</td>
                                </tr>
                                <tr>
                                    <td>二）</td>
                                    <td>病，身體系統失去平衡，
                                        便是生病，需經由中醫師
                                        處方治療</td>
                                </tr>
                                <tr>
                                    <td>三）</td>
                                    <td>康復，病癒後，必需讓身
                                        體好好保養，進食一些補
                                        品，讓身體復原</td>
                                </tr>
                            </table>


                        </div>
                    </div>
                </div>


                <div class="text-center mb-5 mt-5">
                    <a href="javascript:void(0);" class="d-inline-block w-75 tips-banner-img">
                        <img class="w-100"
                            src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/11/Asset_CnMed.png" alt="">

                    </a>
                </div>



                <img id="big-title-2" class="w-100 mb-5"
                    src="http://64.227.13.14/iherbalgarden/wp-content/themes/iherbalgarden/assets/images/big-title-2.png"
                    alt="">

                <h2 class="text-center">
                    藥食同源
                </h2>

                <h5 class="text-center  mt-0">萬物就在我們四周，因為醫理治療成為藥
                </h5>

                <div class="row mt-4">

                    <div class="col-4"><img class="w-100"
                            src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/11/food-1.jpg" alt="">
                        <div class="mt-2 text-center">本質</div>
                    </div>
                    <div class="col-4"><img class="w-100"
                            src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/11/food-2.jpg" alt="">
                        <div class="mt-2 text-center"> 生活應用</div>
                    </div>
                    <div class="col-4"><img class="w-100"
                            src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/11/food-3.jpg" alt="">
                        <div class="mt-2 text-center"> 醫理應用</div>
                    </div>
                </div>
                <h2 class="text-center mt-5">
                    中藥的主要來源 </h2>

                <div class="row mt-0">
                    <div class="col-12">
                        <h5 class="text-center mb-3 mt-0">中藥以植物為主，佔80%或以上，所以一般稱「中草藥」，另有動物及礦物藥。</h5>
                        <img class="w-100" src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/12/many.jpg"
                            alt="">
                    </div>


                </div>

                <h2 class="text-center mt-5">
                    四氣五味 </h2>
                <div class="row mt-4">


                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <h4 class="deep-green">藥的性質有四氣之分</h4>

                        温、熱、寒、涼，合稱四氣，使用時需配合人的體質，取得平衡與配合。

                        <div class="mt-4"><img class="w-100"
                                src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/12/arrange.jpg" alt="">
                        </div>

                        <h4 class="deep-green mt-4">中草藥只有苦味嗎？</h4>

                        其實中藥可分為五味，酸、苦、甘、辛、鹹，另外亦可補加淡、澀味作細分。味道不同，作用亦有不同，一款中草藥兼含多種味，治療範圍亦會更廣。
                        <div class="mt-4"><img class="w-100"
                                src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/11/five-smell.jpg"
                                alt="">
                        </div>

                    </div>
                </div>

                <h2 class="text-center mt-5">
                    配伍 </h2>

                <div class="mt-4">
                    <ul>
                        <li>單味藥藥力有限，適應面較窄，當病情較重或較複雜時，需要將多味藥組合使
                            用</li>
                        <li>某些藥有副作用或毒性，需配合其他藥加以制約</li>
                    </ul>
                </div>




                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 ">
                        <img class="w-100" src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/12/team-1.png"
                            alt="">
                        <div class="text-center mt-2">主要治療藥物</div>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 ">
                        <img class="w-100" src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/12/team-2.png"
                            alt="">
                        <div class="text-center mt-2">輔助君藥</div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 ">
                        <img class="w-100" src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/12/team-3.png"
                            alt="">
                        <div class="text-center mt-2">加強治療作用，消除或減弱毒性的藥物</div>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 ">
                        <img class="w-100" src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/12/team-4.png"
                            alt="">
                        <div class="text-center mt-2">具有調和作用</div>

                    </div>
                </div>


                <div class="text-center mb-5 mt-5">
                    <a href="javascript:void(0);" class="d-inline-block w-75 tips-banner-img">
                        <img class="w-100"
                            src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/11/Asset_CnHerbal.png"
                            alt="">
                    </a>
                </div>

                <img id="big-title-3" class="w-100 mb-5 mt-5"
                    src="http://64.227.13.14/iherbalgarden/wp-content/themes/iherbalgarden/assets/images/big-title-3.png"
                    alt="">
                <div class="text-left">
                    <img src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/12/right-choice-title.jpg"
                        alt="">
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-4">
                        <h2>
                            對的環境 </h2>
                        <ul class="tick-ul">

                            <li>
                                地點的決定
                            </li>
                            <li>
                                日照的時間
                            </li>
                            <li>
                                通風的效果
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-4">
                        <h2>
                            對的管理 </h2>
                        <ul class="tick-ul">

                            <li>
                                澆水
                            </li>
                            <li>
                                施肥
                            </li>
                            <li>
                                修剪
                            </li>
                            <li>
                                季節
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-4">
                        <h2>
                            對的植物 </h2>
                        <ul class="tick-ul">

                            <li>
                                特性
                            </li>
                            <li>
                                種類
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-4">
                        <h2>
                            對的心態 </h2>
                        <ul class="tick-ul">

                            <li>
                                對生命和大自然感恩
                            </li>
                            <li>
                                了解生活的規律
                            </li>
                            <li>
                                明白人有不同，各有所需
                            </li>

                        </ul>
                    </div>

                </div>


                <div class="text-left">
                    <img src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/12/right-choice-title-2.jpg"
                        alt="">
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-4">
                        <ul class="tick-ul-2">

                            <li>
                                美化園圃，美化視覺
                            </li>
                            <li>
                                避免顏色太多，顯得雜亂
                            </li>
                            <li>
                                設計小亮點，加強趣味
                            </li>
                            <li>簡易配搭，襯托空間感</li>
                            <li>豐富垂直景觀，增加層次</li>
                        </ul>

                    </div>


                </div> -->






            </div>


            <div class="sub-section sub-section-1 mt-5">
                <div class="row align-items-center mt-4 leaflets-row">


                    <?php
                
                $args = array(
                    'post_type' => 'leaflet',    //custom post type
                    'posts_per_page' => -1       // get all posts
                 );
        
                   $query = new WP_Query( $args );
        
                   if ( $query->have_posts() ) {   

                    // Start looping over the query results.
                
                    while ( $query->have_posts() ) {
                
                       $query->the_post();

                    $leaflet_file_id= get_field('leaflet_file');
                       $file_src = wp_get_attachment_url($leaflet_file_id);

                       

                       ?>
                    <div class="col-3 mb-3">

                        <a class="leaflet-a" href="<?php echo $file_src;?>" target="_blank">
                            <img class="w-100"
                                src="<?php echo wp_get_attachment_image_src(get_field('leaflet_image_file'),'full')[0];?>"
                                alt="">
                            <div class="text-center mt-3 text-decoration-underline "><?php echo get_the_title();?></div>
                        </a>

                    </div>
                    <!-- <div class="col-3 mb-3"> <a target="_blank" href="<?php echo $file_src;?>">下載小冊子</a>
                    </div> -->

                    <?php
                    }
                }
                ?>



                </div>

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
            <div class="sub-section sub-section-3 mt-5">

                <div class="row tips-row">
                    <div class="col-6">
                        <h4 class="deep-green"> 中醫小貼士</h4>
                        <div class="row mt-3">

                            <?php
                            $args=array(
                                'posts_per_page' => -1, 
                                'post_type' => 'post',
                                'cat' => 3,
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
                        <h4 class="deep-green"> 中藥小貼士</h4>
                        <div class="row mt-3">

                            <?php
                            $args=array(
                                'posts_per_page' => -1, 
                                'post_type' => 'post',
                                'cat' => 4,
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
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript">
    $(function() {


        $('.education').addClass('active');

        $('.sm-education').addClass('active');


        $('.tips-banner-img').click(function() {

            $('.education-a').eq(2).click();

        })


        $('.subsubmenu-ul a').click(function() {

            var idx = $(this).parent('li').index() + 1;

            $("html, body").animate({
                scrollTop: $('#big-title-' + idx).offset().top - 20
            }, 500);




        })

        $('.education-a').click(function() {
            var idx = $(this).parent('li').index() + 1;

            if (idx == 2) {
                $('.subsubmenu-ul').fadeIn(0);
            } else {
                $('.subsubmenu-ul').fadeOut(0);
            }
            $('.sub-section').fadeOut(0);
            $('.sub-section.sub-section-' + idx).fadeIn(0);
            $('.education-a').removeClass('active');
            $(this).addClass('active');
        })

        var hash = location.hash;
        if (hash == '#post') {
            $('.education-a').eq(2).click();

        }

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