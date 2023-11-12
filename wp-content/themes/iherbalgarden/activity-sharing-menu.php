<?php

if(is_user_logged_in())
{
?>

<div class="side-submenu mb-3 white-tran-bg">

    <h2>活動管理</h2>
    <ul class="">
        <li><a href="<?php echo get_site_url();?>/activity-sharing-school-admin"
                class="sm-activity-sharing-school-admin">活動時間表</a></li>
        <li><a href="<?php echo get_site_url();?>/activity-sharing-school-admin-4"
                class="sm-activity-sharing-school-admin-4">訊息箱</a></li>

        <li><a href="<?php echo get_site_url();?>/activity-sharing-school-admin-2"
                class="sm-activity-sharing-school-admin-2">上載報告</a></li>
        <li><a href="<?php echo get_site_url();?>/activity-sharing-school-admin-3"
                class="sm-activity-sharing-school-admin-3">更新心得分享</a></li>
    </ul>



</div>
<?php
}

?>


<div class="side-submenu white-tran-bg">


    <h2>百草園</h2>
    <ul class="">


        <li><a href="<?php echo get_site_url();?>/activity-map-2" class="sm-activity-map">2023/24百草園地圖</a></li>

        <li><a href="<?php echo get_site_url();?>/activity-sharing-2" class="sm-activity-sharing">2023/24參與學校</a></li>

        <li><a href="<?php echo get_site_url();?>/activity-map" class="sm-activity-map">2021/22百草園地圖</a></li>

        <li><a href="<?php echo get_site_url();?>/activity-sharing" class="sm-activity-sharing">2021/22參與學校</a></li>




        <li><a href="<?php echo get_site_url();?>/activity-sharing-2" class="sm-activity-sharing-2">觀賞藥園
            </a></li>
    </ul>

</div>
<?php

if(!is_user_logged_in())
{
?>

<a href="<?php echo get_site_url();?>/activity-login"
    class="school-login-btn mt-lg-4 mt-md-0 mt-sm-0 mt-0 mb-lg-0 mb-md-5 mb-sm-5 mb-5 ">
    <img src="<?php echo get_template_directory_uri();?>/assets/images/school-login-btn.png" alt="">
</a>
<?php
}
?>