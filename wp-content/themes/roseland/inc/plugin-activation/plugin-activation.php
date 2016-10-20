<?php

/* Plugin Activation
*********************************************************/
function sq_plugin_activation() {
	
	$plugins = array(

		array(
			'name'               => 'Vafpress Post Formats UI Develop',
			'slug'               => 'vafpress-post-formats-ui-develop',
			'source'             => get_stylesheet_directory() . '/inc/plugin-activation/plugins/vafpress-post-formats-ui-develop.zip',
			'required'           => true,
			'version'            => '', 
			'force_activation'   => true, 
			'force_deactivation' => false, 
			'external_url'       => '', 
			'is_callable'        => '', 
		),
		array(
			'name'               => 'Mailchimp for Wordpress', 
			'slug'               => 'mailchimp-for-wp',
			'source'             => 'https://downloads.wordpress.org/plugin/mailchimp-for-wp.2.3.8.zip',
			'required'           => false, 
			'version'            => '', 
			'force_activation'   => false, 
			'force_deactivation' => false, 
			'external_url'       => '', 
			'is_callable'        => '', 
		),
		array(
			'name'               => 'WP Instagram Widget', 
			'slug'               => 'wp-instagram-widget',
			'source'             => 'https://downloads.wordpress.org/plugin/wp-instagram-widget.zip', 
			'required'           => false,
			'version'            => '', 
			'force_activation'   => false, 
			'force_deactivation' => false, 
			'external_url'       => '', 
			'is_callable'        => '', 
		),
		array(
			'name'               => 'Facebook Pagelike Widget', 
			'slug'               => 'facebook-pagelike-widget',
			'source'             => 'https://downloads.wordpress.org/plugin/facebook-pagelike-widget.zip', 
			'required'           => false,
			'version'            => '', 
			'force_activation'   => false, 
			'force_deactivation' => false, 
			'external_url'       => '', 
			'is_callable'        => '', 
		),
		array(
			'name'               => 'Recent Tweets Widget', 
			'slug'               => 'recent-tweets-widget',
			'source'             => 'https://downloads.wordpress.org/plugin/recent-tweets-widget.1.6.4.zip', 
			'required'           => false,
			'version'            => '', 
			'force_activation'   => false, 
			'force_deactivation' => false, 
			'external_url'       => '', 
			'is_callable'        => '', 
		),	
		array(
			'name'               => 'Contact Form 7', 
			'slug'               => 'contact-form-7',
			'source'             => 'https://downloads.wordpress.org/plugin/contact-form-7.4.3.1.zip', 
			'required'           => false,
			'version'            => '', 
			'force_activation'   => false, 
			'force_deactivation' => false, 
			'external_url'       => '', 
			'is_callable'        => '', 
		),				
		array(
			'name'               => 'Sculpture Qode Columns', 
			'slug'               => 'sculpture-qode-columns',
			'source'             => get_stylesheet_directory() . '/inc/plugin-activation/plugins/sculpture-qode-columns.zip', 
			'required'           => false,
			'version'            => '', 
			'force_activation'   => false, 
			'force_deactivation' => false, 
			'external_url'       => '', 
			'is_callable'        => '', 
		),
		

	);
	
	$config = array(
		'id'           => 'tgmpa',                
		'default_path' => '',                      
		'menu'         => 'tgmpa-install-plugins', 
		'parent_slug'  => 'themes.php',            
		'capability'   => 'edit_theme_options',    
		'has_notices'  => true,                    
		'dismissable'  => true,                    
		'dismiss_msg'  => '',                      
		'is_automatic' => false,                   
		'message'      => '',                      

	);

	tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'sq_plugin_activation');
