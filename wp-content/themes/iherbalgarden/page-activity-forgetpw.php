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

            <h2>忘記密碼
            </h2>

            <?php
            if($_POST)
            {
                $email  = $_POST['email'];
                $found=false;

                if($email=='kwokngawai@ycps.edu.hk')
                {
                    $found=true;
                    $school_name='油蔴地天主教小學(海泓道)';
                    $login_username="ycpshwr-admin";
                    $password="2nxzq7";
                }
                
                if($email=='wtyip@ktsps.edu.hk')
                {
                    $found=true;
                    $school_name='九龍塘學校(小學部)';
                    $login_username="ktsps-admin";
                    $password="wKgAxr";
                }
                
                if($email=='heidiyylam@yahoo.com.hk')
                {
                    $found=true;
                    $school_name='天主教柏德學校';
                    $login_username="bpcs-admin";
                    $password="tzp8bu";
                }
                if($email=='lslui@luaaps.edu.hk')
                {
                    $found=true;
                    $school_name='嶺南大學香港同學會小學';
                    $login_username="luaaps-admin";
                    $password="WgSpBS";
                }
                if($email=='llh@skhstthomas.edu.hk')
                {
                    $found=true;
                    $school_name='聖公會聖多馬小學';
                    $login_username="sttps-admin";
                    $password="pPU8cr";
                }
                if($email=='ccy1@keifook.edu.hk')
                {
                    $found=true;
                    $school_name='聖公會基福小學';
                    $login_username="kfps-admin";
                    $password="2fAFWR";
                }
                if($email=='pmshim@cneclmc.edu.hk')
                {
                    $found=true;
                    $school_name='中華傳道會呂明才小學';
                    $login_username="lmcps-admin";
                    $password="w7XRLf";
                }


                if($email=='aspcps_whl@aspcps.edu.hk')
                {
                    $found=true;
                    $school_name='香港仔聖伯多祿天主教小學';
                    $login_username="ascps-admin";
                    $password="LUrTZk";
                }


                if($email=='wms@hksdgps.onmicrosoft.com')
                {
                    $found=true;
                    $school_name='香港南區官立小學';
                    $login_username="sdgps-admin";
                    $password="3RDxzQ";
                }
                if($email=='hkechanc@hkcwc-htyps.edu.hk')
                {
                    $found=true;
                    $school_name='香港中國婦女會丘佐榮學校';
                    $login_username="htyps-admin";
                    $password="3RDxzQ";
                }
             

                //
                if($email=='krisfk@gmail.com')
                {
                    $found=true;
                    $school_name='xxx小學';
                    $login_username="xxx";
                    $password="yyy";
                }

                if($email=='mfkwok@sbcps.edu.hk')
                {
                    $found=true;
                    $school_name='聖文德天主教小學';
                    $login_username="sbcps-admin";
                    $password="LUrTZk";
                }
                if($email=='tsysun@syh.edu.hk')
                {
                    $found=true;
                    $school_name='慈幼葉漢千禧小學';
                    $login_username="syh-admin";
                    $password="2nxzq7";
                }

                if($email=='ngwaichoi@gmail.com')
                {
                    $found=true;
                    $school_name='潮陽百欣小學';
                    $login_username="cypy-admin";
                    $password="2fAFWR";
                }

                if($email=='chankw@taipolst.edu.hk')
                {
                    $found=true;
                    $school_name='新界婦孺福利會梁省德';
                    $login_username="taipolst-admin";
                    $password="tzp8bu";
                }

                
                if($email=='mktai@tktcps.edu.hk')
                {
                    $found=true;
                    $school_name='大角嘴天主教小學';
                    $login_username="tktcps-admin";
                    $password="3RDxzQ";
                }

                
                if($email=='plktkpcsh@gmail.com')
                {
                    $found=true;
                    $school_name='保良局田家炳小學';
                    $login_username="plktkp-admin";
                    $password="WgSpBS";
                }

                     
                if($email=='amynyp@yahoo.com.hk')
                {
                    $found=true;
                    $school_name='東華三院李東海小學';
                    $login_username="twghlthlp-admin";
                    $password="pPU8cr";
                }

                        
                if($email=='lfh@hoshun.edu.hk')
                {
                    $found=true;
                    $school_name='嗇色園主辦可信學校';
                    $login_username="hoshun-admin";
                    $password="wKgAxr";
                }

                           
                if($email=='rwytai@hkbuas.edu.hk')
                {
                    $found=true;
                    $school_name='香港浸會大學附屬學校王錦輝中小學';
                    $login_username="hkbuas-admin";
                    $password="w7XRLf";
                }

                if($email=='lauwc@fungkei.edu.hk')
                {
                    $found=true;
                    $school_name='聖公會奉基小學';
                    $login_username="fungkei-admin";
                    $password="zkxWVN";
                }
                
                if($found)
                {
                 ?>
            <script type="text/javascript">
            $(function() {

                show_dialog('登入資料已發送到這個電郵。');

            })
            </script>
            <?php
                    wp_mail( $email, '百草園登入資料', $school_name.'的登入資料如下：<br>login username: '.$login_username.'<br/>password: '.$password );   
                }
                else
                {
                    ?>

            <script type="text/javascript">
            $(function() {

                // show_dialog('登入資料已發送到這個電郵。');
                show_dialog('學校電郵輸入不正確。');


            })
            </script>
            <?php
                   
                }

           }
            
            ?>

            <form action="" method="post">
                <table class="mt-4">
                    <tr>
                        <td class="pb-2"><input name="email" placeholder="請輸入學校電郵" type="text" class="form-control"
                                id="email"></td>
                    </tr>

                    <tr>


                        <td class="text-end">

                            <input class="login-form-submit-btn form-control" type="submit" value="遞交">

                        </td>
                    </tr>
                </table>
            </form>





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