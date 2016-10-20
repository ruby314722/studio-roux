<?php
/**
 * Easy Digital Downloads Theme Updater Notice
 */

// Display the notice
function sq_display_notice(){
	
    $user_id = get_current_user_id();
    if ( ! get_user_meta($user_id, 'sq_license_ignore_notice') ) :
        echo '<div id="message" class="updated fade"><p>';
        echo ('<b>Activate your license</b>: Don\'t forget to activate your license to receive theme updates. <a href="'.site_url('/wp-admin/admin.php?page=sq-license').'">Activate now</a>');
        echo "</p>";
        echo "<p><strong><a class=\"dismiss-notice\" href=\"admin.php?page=sq-license&sq_notice_ignore=0\" target=\"_parent\">Dismiss this notice</a></strong></p></div>";
    endif;
    
}
add_action('admin_notices', 'sq_display_notice');

// Dismiss notice
function sq_notice_dismiss() {
  
    if ( isset($_GET['sq_notice_ignore']) && '0' == $_GET['sq_notice_ignore'] ) :
        $user_id = get_current_user_id();
        add_user_meta($user_id, 'sq_license_ignore_notice', 'true', true);
        if (wp_get_referer()) :
            wp_safe_redirect(wp_get_referer());
        else :
            wp_safe_redirect(home_url());
        endif;
    endif;
    
}
add_action('admin_init', 'sq_notice_dismiss');