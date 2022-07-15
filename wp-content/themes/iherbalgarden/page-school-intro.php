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
session_start();

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

            <div class="col-lg-7 col-md-12 col-sm-12 col-12  white-tran-bg school-right-content">
                <!-- <div class="col-7"> -->

                <!-- <h2>參與小學
            </h2> -->


                <a href="<?php echo get_site_url();?>/activity-sharing" class="prev-page-btn mt-0 mb-3">上一頁</a>
                <?php

$school_id = $_GET['sch'];
$args = array('p' => $school_id, 'post_type' => 'school');
$school = new WP_Query($args);
if($school->have_posts())
{
    $school->the_post();

    $school_name = get_field('school_name');
    $school_intro = get_field('school_intro');
    $school_logo_url = wp_get_attachment_image_src(get_field('school_logo'),'full')[0];
}

?>

                <div class="row mt-3">

                    <?php
if($school_logo_url)
{
    ?>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12 "><img class="school-logo"
                            src="<?php echo $school_logo_url;?>" alt=""></div>

                    <?php
}


?>

                    <div class="col-lg-9 col-md-9 col-sm-12 col-12 ">
                        <h4 class="deep-green mb-4 mt-2"><?php echo get_field('school_name');?></h4>


                        <h4>學校簡介：</h4>
                        <?php echo get_field('school_intro');?>


                        <h4 class="mt-4">園地全屏幕公展：</h4>
                        <div>
                            <?php 
                            if(get_field('visual_tour_link'))
                            {
                                ?>
                            <a target="_blank" href="<?php echo get_field('visual_tour_link');?>"
                                class="deep-green"><?php echo get_field('visual_tour_link');?></a>
                            <?php
                            }
                            else
                            {
                                ?>
                            資料稍後更新⋯
                            <?php
                            }
                            ?>

                        </div>

                    </div>


                </div>


                <h4 class="mt-5 deep-green">活動報告</h4>


                <?php
              $mid_report_id = get_field('school_mid_report');
              $mid_report_approval = get_field('mid_report_approval');

              $final_report_id = get_field('school_final_report');
              $final_report_approval = get_field('final_report_approval');
           
            //   if(!$mid_report_approval)
            //   {
            //       echo 'fdsafa';
            //   }

              if((!$mid_report_id  &&  !$final_report_id) || (!$mid_report_approval && !$final_report_approval) )
              {
                  echo '<div class="mt-3">這學校暫時未有上載報告。</div>';
              }
            ?>

                <div class="row mt-3 align-items-center" style="">

                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-4 "
                        style="<?php echo ((!$mid_report_id  &&  !$final_report_id) || (!$mid_report_approval && !$final_report_approval) ) ?'display:none;':'';?>">


                        <table>
                            <?php
                            // if(($mid_report_id && $mid_report_approval) || ($final_report_id && $final_report_approval))
                            if(($mid_report_id && $mid_report_approval))
                            {
                            ?>
                            <tr>
                                <td class="pb-2">


                                    <img class="report-thumbnail me-3" src="<?php
                                        
                                        $file_src = wp_get_attachment_url($mid_report_id);
                                        $pieces = explode(".", $file_src);
                                        if($pieces[sizeof($pieces)-1]=='mp4')
                                        {
                                            echo get_template_directory_uri().'/assets/images/mp4-file.png';
                                        }
                                        else
                                        if($pieces[sizeof($pieces)-1]=='pdf')
                                        {
                                            echo get_template_directory_uri().'/assets/images/pdf-file.png';
                                        }
                                        else{
                                            echo wp_get_attachment_url($mid_report_id);
                                        }
                                        

                                        
                                        
                                        ;?>" alt="">
                                    <a target="_blank" href="<?php echo wp_get_attachment_url($mid_report_id);?>"
                                        class="download-btn">下載/閱覽 中期報告</a>


                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                            <?php
                            if($final_report_id && $final_report_approval)
                            {
                            ?>
                            <tr>
                                <td> <img class="report-thumbnail me-3" src="<?php
                                        
                                        $file_src = wp_get_attachment_url($final_report_id);
                                        $pieces = explode(".", $file_src);
                                        if($pieces[sizeof($pieces)-1]=='mp4')
                                        {
                                            echo get_template_directory_uri().'/assets/images/mp4-file.png';
                                        }
                                        else
                                        if($pieces[sizeof($pieces)-1]=='pdf')
                                        {
                                            echo get_template_directory_uri().'/assets/images/pdf-file.png';
                                        }
                                        else{
                                            echo wp_get_attachment_url($final_report_id);
                                        }
                                        

                                        
                                        
                                        ;?>" alt="">
                                    <a target="_blank" href="<?php echo wp_get_attachment_url($final_report_id);?>"
                                        class="download-btn">下載/閱覽 總報告</a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>

                        <!-- <img class="w-100"
                        src="http://64.227.13.14/iherbalgarden/wp-content/uploads/2021/11/Asset-6@2x-1.png" alt=""> -->

                    </div>
                    <!-- 
                <div class="col-3">

                </div> -->
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-4">

                        <table style="display:none;">
                            <tr>
                                <td>
                                    <div class="">
                                        如你喜歡這活動報告可按下面LIKE按鈕：
                                    </div>
                                    <div class="d-inline-block mt-2 position-relative"> <a href="javascript:void(0);"
                                            class="like-btn mt-1">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/like-btn.png"
                                                alt="">
                                        </a>
                                        <?php //echo $school_id;
                                        ?>
                                        <?php
                                        
                                        
                                        // $_SESSION['like'.$school_id] = array('count' => 1, 'registered' => time());

                                        // if ((time() - $_SESSION['example']['registered']) > (60 * 30)) {
                                        //     unset($_SESSION['example']);
                                        // }
                                        ?>
                                        <div class="like-num">

                                            <?php
                                    echo get_field('like_count');
                                    // $args = array('p' => $school_id, 'post_type' => 'school');

                                    // $school = new WP_Query($args);
                                    
                                    // $count=0;
                                    // if($school->have_posts())
                                    // {
                                    //     $school->the_post();
                                    //     // $like_record = get_sub_field('like_record');

                                    //     if( have_rows('like_record') ){

                                    //         while( have_rows('like_record') ) { 
                                    //                     the_row();

                                    //                     // if(get_sub_field('ip')==$userIP && get_sub_field('like_date')==date('d/m/Y'))
                                    //                 // {
                                    //                     $count++;
                                    //                 // }
                                    //     }
                                    // }
                                    // }

                                    // if($school_id==88)
                                    // {
                                    //     echo 6815+$count;
                                    // }
                                    // else
                                    // {
                                    //     echo $count;
                                    // }
?>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </div>

                </div>


                <h4 class="mt-4 deep-green">心得分享 </h4>

                <?php 
if (get_field('conclusion') &&get_field('conclusion_approval'))
{
?>
                <?php
if(wp_get_attachment_image_src(get_field('conclude_image'),'full')[0])
{
    ?>
                <div class="mt-2">
                    <img class="conclude-img"
                        src="<?php echo wp_get_attachment_image_src(get_field('conclude_image'),'full')[0];?>" alt="">
                </div>
                <?php
}
?>

                <div class="mt-2">

                    <?php echo get_field('conclusion');?>
                </div>
                <?php
}
else
{
    ?>
                <div class="mt-3 mb-4">
                    這學校暫時未更新內容。
                </div>
                <?php
}

?>


                <div class="row mt-4">

                    <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-6 "> -->
                    <div class="col-12 ">

                        <h4>負責老師：</h4>
                        <div> <?php echo get_field('school_teacher');?></div>

                    </div>
                    <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-6 ">
                        <h4>參與學生名單：</h4>
                        <div><?php echo get_field('school_students');?></div>

                    </div> -->
                </div>









                <!-- <div class="mt-3">導師視訊遙距教學，輔助並檢討參與團隊的進程，釋除所遇疑難
            </div> -->





            </div>
        </div>
    </div>

    <script type="text/javascript">
    $(function() {


        $('.activity-map ').addClass('active');


        $('.sm-activity-sharing').addClass('active');


        $('.like-btn').click(function() {

            var new_count = Number($('.like-num').html()) + 1;

            // $('.like-num').html(new_count);


            $.post("<?php echo get_site_url();?>/wp-json/api/like-school", {
                    school_id: <?php echo $school_id;?>,
                    count: new_count

                    // ,
                    // login_pw: $('#login-pw').val()
                })
                .done(function(data) {
                    console.log(data);
                    if (data.status == 1) {

                        $('.like-num').html(Number($('.like-num').html()) + 1);



                    }
                    if (data.status == -1) {

                        show_dialog(data.msg);


                    }

                });
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