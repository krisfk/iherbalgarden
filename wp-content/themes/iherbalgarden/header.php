<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>



    <div class="dialog-lightbox">
        <div class="dialog-lightbox-bg"></div>
        <div class="dialog">
            <div class="cross"></div>

            <div class="dialog-title">
                <h2 class="deep-green mt-3">訊息</h2>
            </div>
            <div class="dialog-content mb-3">txt txt</div>
        </div>
    </div>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content">
            <?php esc_html_e( 'Skip to content', 'iherbalgarden' ); ?></a>

        <?php //get_template_part( 'template-parts/header/site-header' ); ?>

        <div id="content" class="site-content">
            <div class="top-div">
                <div id="primary" class="content-area">
                    <button class="mobile-menu-btn"
                        onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))"
                        aria-label="Main Menu" aria-expanded="false">
                        <svg width="50" height="50" viewBox="0 0 100 100">
                            <path class="line line1"
                                d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058">
                            </path>
                            <path class="line line2" d="M 20,50 H 80"></path>
                            <path class="line line3"
                                d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942">
                            </path>
                        </svg>
                    </button>
                    <main id="main" class="site-main" role="main">

                        <div class="text-center pt-3">
                            <a href="<?php echo get_site_url();?>" class="logo-a">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="">

                            </a>

                        </div>
                        <div class="container position-relative">




                            <ul class="top-menu-ul-outer-ul">

                                <ul class=" top-menu-ul">

                                    <li class="mb-4 mt-0 mobile-logo-a">
                                        <a href="<?php echo get_site_url();?>" class="logo-a">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png"
                                                alt="">

                                        </a>

                                    </li>
                                    <?php
                                    $main_menu = wp_get_menu_array('main menu');
foreach ($main_menu as $menu_item) {

$url = $menu_item['url'];
$title = $menu_item['title'];
$class = $menu_item['class'];

$temp_arr=explode(get_site_url(),$url);
$slug=str_replace('/en/','',$temp_arr[1]);
$slug=str_replace('/cn/','',$slug);
$slug=str_replace('/','',$slug);


if(count($menu_item['children']))
{
  
    echo '<li><a class="level-1 parent '.$class.'" href="'.$url.'">'.$title;
    ?>
                                    <img class="arrow"
                                        src="<?php echo get_template_directory_uri();?>/assets/images/white-arrow-enter.png"
                                        alt="">

                                    <?php
    echo'</a>';

 
    echo '<ul class="mobile-menu-submenu">';
?>

                                    <?php
    
    foreach ($menu_item['children'] as $sub_menu_item) 
    {
        $sub_url = $sub_menu_item['url'];
        $sub_title = $sub_menu_item['title'];
        
        $sub_temp_arr=explode(get_site_url(),$sub_url);
        $sub_slug=str_replace('/en/','',$sub_temp_arr[1]);
        $sub_slug=str_replace('/cn/','',$sub_slug);
        $sub_slug=str_replace('/','',$sub_slug);
        echo'<li><a class="'.$sub_slug.'" href="'.$sub_url.'">'.$sub_title.'</a></li>';
    }
    echo '</ul>';

}
else
{
echo '<li><a class="level-1 '.$slug.' '.$class.'" href="'.$url.'">'.$title.'</a>';

}
echo'</li>';


}



?>



                                </ul>
                        </div>

                        <!-- <a href="#" class="mobile-menu-btn float-end"> -->

                        <a id="nav-icon3" href="#" class="mobile-menu-btn float-end">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        <!-- </a> -->





                        </ul>
                        </ul>
                </div>

                <div class="top-line"></div>
            </div>

            <?php
            
            if(is_user_logged_in())
            {

                $current_user_id =  get_current_user_id() ;
                $userdata = get_userdata( $current_user_id );
                $user_nickname = $userdata-> nickname;

                // echo $nickname;
                ?>

            <div class="container mb-2 msg-container">
                <div class="row justify-content-center text-center">
                    <div class="col-10 mb-4">你好，<?php echo $user_nickname;?>的同學！ <a href="javascript:void(0);"
                            class="school-logout-btn">登出</a>
                        <a class="activity-manage-btn ms-2"
                            href="<?php echo get_site_url();?>/activity-sharing-school-admin">活動管理</a>
                    </div>
                </div>
            </div>

            <?php
            }
            else
            {
                ?>

            <!-- <img class="w-100" src="<?php echo get_template_directory_uri();?>/assets/images/island.png" alt=""> -->


            <div class="mb-lg-5 mb-md-4 mb-sm-4 mb-4 empty-space"></div>


            <?php
            }
            ?>


            <script type="text/javascript">
            function show_dialog(msg) {
                $('.dialog-lightbox').fadeIn(200);

                $('.dialog-content').html(msg);


            }
            $(function() {

                $('.cross,.dialog-lightbox-bg').click(function() {
                    $('.dialog-lightbox').fadeOut(200);
                })

                $('.mobile-menu-btn').click(function() {

                    if ($(this).hasClass('opened')) {

                        $('.top-menu-ul-outer-ul').fadeIn(200);
                        $(this).addClass('opened');


                    } else {
                        // alert(70);
                        $('.top-menu-ul-outer-ul').fadeOut(200);
                        $(this).removeClass('opened');

                    }


                })
                // $('.mobile-menu-btn.opened').click(function() {
                // $('.top-menu-ul-outer-ul').fadeOut(0);
                // $(this).removeClass('opened');

                // })

                $('.school-logout-btn').click(function() {

                    $.post("<?php echo get_site_url();?>/wp-json/api/school-logout")
                        .done(function(data) {
                            console.log(data);
                            if (data.status == 1) {
                                show_dialog(data.msg);

                                window.location =
                                    "<?php echo get_site_url();?>/activity-map-2023/";
                            }


                        });
                })

            })
            </script>