<?php
if(!is_user_logged_in())
{
  wp_redirect(get_site_url().'/activity-sharing');  
}
?>