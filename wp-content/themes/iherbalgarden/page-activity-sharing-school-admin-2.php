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

            <h2>上載報告
            </h2>


            <div class="mt-3 position-relative">

                <div class="upload-wait">

                    <div class="txt"> 上載中，請耐心很久，不要把瀏覽器關掉。
                    </div>
                </div>

                <?php
                $args = array('p' => $school_id, 'post_type' => 'school');
                $school = new WP_Query($args);
                if($school->have_posts())
                {
                    $school->the_post();

                    $mid_report_id = get_field('school_mid_report');
                    $mid_report_approval=get_field('mid_report_approval');
                    $final_report_id = get_field('school_final_report');
                    $final_report_approval=get_field('final_report_approval');
                    $school_name =get_field('school_name');
                // echo     wp_get_attachment_url($mid_report_id);

                }
                ?>
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <div class="mb-2">中期報告：</div>

                        <div class="preview-div" style="<?php echo !$mid_report_id ? 'display:none;':''; ?>">
                            <table>
                                <tr>
                                    <td><img class="preview-img" src="<?php 
                                            
                                           
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
                                            
                                            // echo wp_get_attachment_url($mid_report_id);
                                            
                                            
                                            
                                            
                                            
                                            ?>" alt=""></td>
                                    <td>
                                        <?php 
                                        if(!$mid_report_approval && $mid_report_id){
                                       ?>
                                        <span class="ms-3">(審批中⋯)</span>

                                        <?php
                                        }
                                        else
                                        {
                                            ?>
                                        <span class="ms-3">(刊登中⋯)</span>
                                        <?php
                                        }
                                            ?>
                                        <a href="javascript:void(0);" class="change-report-btn">更改報告</a>
                                    </td>
                                </tr>
                            </table>

                        </div>
                        <div class="input-div" style="<?php echo  $mid_report_id ? 'display:none;':'' ?>"><input
                                type="file" name="file_upload" id="file_upload" accept=".jpg,.pdf,.mp4">
                        </div>


                    </div>
                    <div class="mb-3">
                        <div class="mb-2">總報告：</div>

                        <div class="preview-div" style="<?php echo !$final_report_id ? 'display:none;':''; ?>">
                            <table>
                                <tr>
                                    <td><img class="preview-img" src="<?php 
                                            
                                            
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
                                            
                                            // echo wp_get_attachment_url($final_report_id);
                                            
                                            
                                            
                                            ?>" alt=""></td>
                                    <td>
                                        <?php 
                                        if(!$final_report_approval && $final_report_id){
                                       ?>
                                        <span class="ms-3">(審批中⋯)</span>

                                        <?php
                                        }
                                        else
                                        {
                                            ?>
                                        <span class="ms-3">(刊登中⋯)</span>
                                        <?php
                                        }
                                            ?>

                                        <a href="javascript:void(0);" class="change-report-btn">更改報告</a>
                                    </td>
                                </tr>
                            </table>

                        </div>
                        <div class="input-div" style="<?php echo  $final_report_id ? 'display:none;':'' ?>"><input
                                type="file" name="file_upload2" id="file_upload2" accept=".jpg,.pdf,.mp4"></div>
                    </div>

                    <div class="mb-5">
                        **報告格式為jpg/pdf/mp4 <br>報告檔案大小上限為 20MB
                    </div>

                    <div class=""><input type="submit" value="上載檔案" name="submit"></div>

                </form>

            </div>

            <?php
            
            session_start();
            $school_id = $_SESSION['school_id'];
           
            
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
    
                update_field( 'school_mid_report', $upload_id, $school_id );
                update_field( 'mid_report_approval', false, $school_id );


                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
                //File 2
                // echo $_FILES["file_upload2"]['size'];
                // print_r($_FILES["file_upload2"]);
                if($_FILES["file_upload2"]['size'])
                {

                $wordpress_upload_dir2 = wp_upload_dir();

                $new_file_path2 = $wordpress_upload_dir2['path'] . '/' . $_FILES["file_upload2"]["name"];

                    $j=0;
                while( file_exists( $new_file_path2 ) ) {
                    $j++;
                    $new_file_path2 = $wordpress_upload_dir2['path'] . '/' . $j . '_' . $_FILES["file_upload2"]["name"];
                }
                
                if (move_uploaded_file($_FILES["file_upload2"]["tmp_name"], $new_file_path2)) {
           
                    $upload_id2 = wp_insert_attachment( array(
                    'guid'           => $new_file_path2, 
                    'post_mime_type' => 'image/*',
                    'post_title'     => preg_replace( '/\.[^.]+$/', '', $_FILES["file_upload2"]["name"] ),
                    'post_content'   => '',
                    'post_status'    => 'inherit'
                ), $new_file_path2 );
                 require_once( ABSPATH . 'wp-admin/includes/image.php' );
            
                 wp_update_attachment_metadata( $upload_id2, wp_generate_attachment_metadata( $upload_id2, $new_file_path2 ) );
    
                update_field( 'school_final_report', $upload_id2, $school_id );
                update_field( 'final_report_approval', false, $school_id );

             
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }

                


         
            
            }





               // update_field( 'school_final_report', $upload_id, $school_id );
      
      
                // update_field( 'school_mid_report_thumbnail', $upload_id, $school_id );




           
            // echo 
            // if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file)) {
            //     echo "The file ". basename( $_FILES["file_upload"]["name"]). " has been uploaded.";
            //     update_field( 'file_upload', $target_file, $post_id );
            // } else {
            //     echo "Sorry, there was an error uploading your file.";
            // }
            
            ?>

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

        $('.sm-activity-sharing-school-admin-2').addClass('active');


        $('.change-report-btn').click(function() {
            $(this).closest('.preview-div').next('.input-div').fadeIn(0);
            $(this).closest('.preview-div').fadeOut(0)
        })
        $('form').submit(function() {
            $('.upload-wait').fadeIn(0);

        })
        $('#file_upload').on('change', function() {
            var size = this.files[0].size / 1024 / 1024;
            if (size > 20) {
                show_dialog('報告檔案大小上限為 20MB');

                $(this).val('');
            }
            // console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
        });

        $('#file_upload2').on('change', function() {
            var size = this.files[0].size / 1024 / 1024;
            if (size > 20) {
                show_dialog('報告檔案大小上限為 20MB');

                $(this).val('');
            }
            // console.log('This file size is: ' + this.files[0].size / 1024 / 1024 + "MiB");
        });




    })
    </script>
    <?php echo get_template_part('check-login-access');?>

    <?php

    if($_POST)
    {
        // echo 999;
        ?>
    <script type="text/javascript">
    $(function() {
        show_dialog('完成上載報告，正等候審批。');
    })
    </script>
    <?php

    wp_mail( 'iherbalgarden@gmail.com', '百草園學校上載報告提示', $school_name.'更新了報告，報告需要被審批才能被刊登。<br/>可按這裡查閱<br/>'.get_site_url().'/wp-admin/post.php?post='.$school_id.'&action=edit' );


        header("Refresh: 1;"); 
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

get_footer();