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
$school_id = $_SESSION['school_id'];



?>


<div class="container mt-0">

    <?php// echo get_template_part('about-menu');;?>

    <div class="row justify-content-center">


        <div class="col-lg-3 col-md-12 col-sm-12 col-12 ">

            <?php echo get_template_part('activity-sharing-menu');?>

        </div>

        <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">

            <h2>
                更新心得分享

            </h2>


            <div class="mt-3 position-relative">
                <div class="upload-wait">

                    <div class="txt"> 上載中，請耐心很久，不要把瀏覽器關掉。
                    </div>
                </div>
                <!-- 資料稍後更新⋯ -->

                <?php
                $args = array('p' => $school_id, 'post_type' => 'school');
                $school = new WP_Query($args);
                if($school->have_posts())
                {
                    $school->the_post();

                    $conclude_img_id = get_field('conclude_image');
                    $school_name=get_field('school_name');
                    
                    // $final_report_id = get_field('school_final_report');
                        
                    // echo     wp_get_attachment_url($mid_report_id);

                }
                ?>
                <?php
                 if(get_field('conclusion') &&  !get_field('conclusion_approval'))
                 {
                  ?>
                <div class="mb-3">(內容審批中⋯)</div>

                <?php   
                 }
                ?>

                <form action="" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <div class="mb-2">圖片：</div>

                        <div class="preview-div" style="<?php echo !$conclude_img_id ? 'display:none;':''; ?>">
                            <table>
                                <tr>
                                    <td><img class="preview2-img" src="<?php 
                                            
                                           
                                            // $file_src = wp_get_attachment_url($conclude_img_id);
                                            // $pieces = explode(".", $file_src);
                                            // if($pieces[sizeof($pieces)-1]=='mp4')
                                            // {
                                            //     echo get_template_directory_uri().'/assets/images/mp4-file.png';
                                            // }
                                            // else
                                            // if($pieces[sizeof($pieces)-1]=='pdf')
                                            // {
                                            //     echo get_template_directory_uri().'/assets/images/pdf-file.png';
                                            // }
                                            // else{
                                                echo wp_get_attachment_url($conclude_img_id);
                                            // }
                                            
                                            
                                            
                                            
                                            
                                            
                                            ?>" alt=""></td>
                                    <td>
                                        <a href="javascript:void(0);" class="change-report-btn">更改圖片</a>
                                    </td>
                                </tr>
                            </table>

                        </div>
                        <div class="input-div" style="<?php echo  $conclude_img_id ? 'display:none;':'' ?>"><input
                                type="file" name="file_upload" id="file_upload" accept=".jpg">
                        </div>
                        <div class=" mt-3">
                            **報告格式為jpg <br>報告檔案大小上限為 2MB
                        </div>

                        <div class="mt-4">
                            <div class="mb-2">心得分享：</div>


                            <textarea name="conclusion_content" id="conclusion-content" class="form-control" cols="30"
                                rows="10"><?php if($_POST['conclusion_content'])
                                {
                                    echo $_POST['conclusion_content'];
                                }
                                else
                                {
                                    echo get_field('conclusion');
                                }
                                ?></textarea>
                        </div>


                        <div class="mt-3"><input type="submit" value="更新" name="submit" class=""></div>


                </form>
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
    $(function() {
        $('.activity-map ').addClass('active');

        $('.activity-sharing').addClass('active');
        $('.sm-activity-sharing-school-admin-3').addClass('active');



        $('.change-report-btn').click(function() {
            $(this).closest('.preview-div').next('.input-div').fadeIn(0);
            $(this).closest('.preview-div').fadeOut(0)
        })

        $('#file_upload').on('change', function() {
            var size = this.files[0].size / 1024 / 1024;
            if (size > 2) {
                show_dialog('報告檔案大小上限為 20MB');

                $(this).val('');
            }
            // console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
        });
        $('form').submit(function() {
            $('.upload-wait').fadeIn(0);

        })


    })
    </script>
    <?php echo get_template_part('check-login-access');?>

    <?php

   
if($_POST)
{
    update_field( 'conclusion_approval', false, $school_id );

    update_field( 'conclusion', $_POST['conclusion_content'], $school_id );
}


if(!empty($_FILES))
{
    // print_r($_FILES);

    //File 1
    if($_FILES["file_upload"]['size'])
    {
    $wordpress_upload_dir = wp_upload_dir();

    $new_file_path = $wordpress_upload_dir['path'] . '/' . $_FILES["file_upload"]["name"];

        $i=0;
    while( file_exists( $new_file_path ) ) {
        $i++;
        $new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $_FILES["file_upload"]["name"];
    }
    
    if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $new_file_path)) {

        $upload_id = wp_insert_attachment( array(
        'guid'           => $new_file_path, 
        'post_mime_type' => 'image/*',
        //$_FILES["file_upload"]["tmp_name"],
        'post_title'     => preg_replace( '/\.[^.]+$/', '', $_FILES["file_upload"]["name"] ),
        'post_content'   => '',
        'post_status'    => 'inherit'
    ), $new_file_path );
     require_once( ABSPATH . 'wp-admin/includes/image.php' );

     wp_update_attachment_metadata( $upload_id, wp_generate_attachment_metadata( $upload_id, $new_file_path ) );
    //  conclude Image

    update_field( 'conclude_image', $upload_id, $school_id );
    
    // conclusion_content
 
    } else {
        echo "Sorry, there was an error uploading your file.";
    }


    
    
}



    




}

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
if($_POST)
{
    ?>
    <script type="text/javascript">
    $(function() {
        show_dialog('成功提交更新總結及分享，正等候審批。');
    })
    </script>
    <?php
    // wp_mail( 'krisfk@gmail.com', 'subject', 'msg' );

    wp_mail( 'iherbalgarden@gmail.com', '百草園學校更新心得分享提示', $school_name.'更新了心得分享，內容需要被審批才能被刊登。<br/>可按這裡查閱<br/>'.get_site_url().'/wp-admin/post.php?post='.$school_id.'&action=edit' );

    
    header("Refresh: 1;"); 

}
get_footer();