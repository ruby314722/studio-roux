<?php
require get_template_directory() . '/inc/customizer/customizer-fonts.php';
	
function sq_customize_options( $wp_customize ){
	
	global $googlefonts, $fontSizes;
		
	$wp_customize->remove_section( 'title_tagline');
	$wp_customize->remove_section( 'static_front_page');
	$wp_customize->remove_section( 'colors');		
	$wp_customize->remove_panel( 'widgets');
	

	/* FONT PANEL
	**************************************************/	
	$wp_customize->add_panel( 'sq_fonts', array(
	    'title' => __( 'Fonts', 'sq' ),
	    'description' => __('', 'sq'),
	    'priority'			=> 1
		) 
	);	
	/* BODY FONTS */
	$wp_customize->add_section( 'sq_body_font',  array(
			'title'       => __( 'Body Fonts', 'sq' ),
			'priority'    => 1,
			'panel' => 'sq_fonts'
		)
	);
	//Body Font Family
	$wp_customize->add_setting(  'sq_body_font_family', array(
			'default'    =>  __('Source Sans Pro', 'sq'),
		)
	);
	$wp_customize->add_control( 'sq_body_font_family', array(
			'label'     => __('Body Font', 'sq'),
			'section'   => 'sq_body_font',
			'settings'   => 'sq_body_font_family',
			'type'      => 'select',
			'choices'    => $googlefonts
		)
	);
	//Body Font Size
	$wp_customize->add_setting( 'sq_body_font_size', array(
			'default'    =>  __('14px', 'sq'),
		)
	);
	$wp_customize->add_control('sq_body_font_size', array(
			'label'     => __('Body Font Size', 'sq'),
			'section'   => 'sq_body_font',
			'settings'   => 'sq_body_font_size',
			'type'      => 'select',
			'choices'    => $fontSizes		
		)
	);	
	/* HEADER FONTS */	
	$wp_customize->add_section( 'sq_header_fonts',  array(
			'title'       => __( 'Header/Title Fonts', 'sq' ),
			'priority'    => 1,
			'panel' => 'sq_fonts'
		)
	);	
	//Title Font Family H1
	$wp_customize->add_setting(  'sq_header_1_font_family', array(
			'default'    =>  __('Vidaloka', 'sq'),
		)
	);
	$wp_customize->add_control( 'sq_header_1_font_family', array(
			'label'     => __('Header 1 Font Family', 'sq'),
			'section'   => 'sq_header_fonts',
			'settings'   => 'sq_header_1_font_family',
			'type'      => 'select',
			'choices'    => $googlefonts
		)
	);
	//Title Font Size H1
	$wp_customize->add_setting( 'sq_header_1_font_size', array(
			'default'    =>  __('26px', 'sq'),
		)
	);
	$wp_customize->add_control('sq_header_1_font_size', array(
			'label'     => __('Header 1 Font Size', 'sq'),
			'section'   => 'sq_header_fonts',
			'settings'   => 'sq_header_1_font_size',
			'type'      => 'select',
			'choices'    => $fontSizes		
		)
	);
	//Title Font Family H2
	$wp_customize->add_setting(  'sq_header_2_font_family', array(
			'default'    =>  __('Vidaloka', 'sq'),
		)
	);
	$wp_customize->add_control( 'sq_header_2_font_family', array(
			'label'     => __('Header 2 Font Family', 'sq'),
			'section'   => 'sq_header_fonts',
			'settings'   => 'sq_header_2_font_family',
			'type'      => 'select',
			'choices'    => $googlefonts
		)
	);
	//Title Font Size H2
	$wp_customize->add_setting( 'sq_header_2_font_size', array(
			'default'    =>  __('22px', 'sq'),
		)
	);
	$wp_customize->add_control('sq_header_2_font_size', array(
			'label'     => __('Header 2 Font Size', 'sq'),
			'section'   => 'sq_header_fonts',
			'settings'   => 'sq_header_2_font_size',
			'type'      => 'select',
			'choices'    => $fontSizes		
		)
	);	
	//Title Font Family H3
	$wp_customize->add_setting(  'sq_header_3_font_family', array(
			'default'    =>  __('Vidaloka', 'sq'),
		)
	);
	$wp_customize->add_control( 'sq_header_3_font_family', array(
			'label'     => __('Header 3 Font Family', 'sq'),
			'section'   => 'sq_header_fonts',
			'settings'   => 'sq_header_3_font_family',
			'type'      => 'select',
			'choices'    => $googlefonts
		)
	);
	//Title Font Size H3
	$wp_customize->add_setting( 'sq_header_3_font_size', array(
			'default'    =>  __('20px', 'sq'),
		)
	);
	$wp_customize->add_control('sq_header_3_font_size', array(
			'label'     => __('Header 3 Font Size', 'sq'),
			'section'   => 'sq_header_fonts',
			'settings'   => 'sq_header_3_font_size',
			'type'      => 'select',
			'choices'    => $fontSizes		
		)
	);
	//Title Font Family H4
	$wp_customize->add_setting(  'sq_header_4_font_family', array(
			'default'    =>  __('Vidaloka', 'sq'),
		)
	);
	$wp_customize->add_control( 'sq_header_4_font_family', array(
			'label'     => __('Header 4 Font Family', 'sq'),
			'section'   => 'sq_header_fonts',
			'settings'   => 'sq_header_4_font_family',
			'type'      => 'select',
			'choices'    => $googlefonts
		)
	);
	//Title Font Size H4
	$wp_customize->add_setting( 'sq_header_4_font_size', array(
			'default'    =>  __('18px', 'sq'),
		)
	);
	$wp_customize->add_control('sq_header_4_font_size', array(
			'label'     => __('Header 4 Font Size', 'sq'),
			'section'   => 'sq_header_fonts',
			'settings'   => 'sq_header_4_font_size',
			'type'      => 'select',
			'choices'    => $fontSizes		
		)
	);					
	//Title Font Family H5
	$wp_customize->add_setting(  'sq_header_5_font_family', array(
			'default'    =>  __('Vidaloka', 'sq'),
		)
	);
	$wp_customize->add_control( 'sq_header_5_font_family', array(
			'label'     => __('Header 5 Font Family', 'sq'),
			'section'   => 'sq_header_fonts',
			'settings'   => 'sq_header_5_font_family',
			'type'      => 'select',
			'choices'    => $googlefonts
		)
	);
	//Title Font Size H5
	$wp_customize->add_setting( 'sq_header_5_font_size', array(
			'default'    =>  __('16px', 'sq'),
		)
	);
	$wp_customize->add_control('sq_header_5_font_size', array(
			'label'     => __('Header 5 Font Size', 'sq'),
			'section'   => 'sq_header_fonts',
			'settings'   => 'sq_header_5_font_size',
			'type'      => 'select',
			'choices'    => $fontSizes		
		)
	);	
	//Title Font Family H6
	$wp_customize->add_setting(  'sq_header_6_font_family', array(
			'default'    =>  __('Vidaloka', 'sq'),
		)
	);
	$wp_customize->add_control( 'sq_header_6_font_family', array(
			'label'     => __('Header 6 Font Family', 'sq'),
			'section'   => 'sq_header_fonts',
			'settings'   => 'sq_header_6_font_family',
			'type'      => 'select',
			'choices'    => $googlefonts
		)
	);
	//Title Font Size H6
	$wp_customize->add_setting( 'sq_header_6_font_size', array(
			'default'    =>  __('14px', 'sq'),
		)
	);
	$wp_customize->add_control('sq_header_6_font_size', array(
			'label'     => __('Header 6 Font Size', 'sq'),
			'section'   => 'sq_header_fonts',
			'settings'   => 'sq_header_6_font_size',
			'type'      => 'select',
			'choices'    => $fontSizes		
		)
	);	
	/* LIST FONTS */	
	$wp_customize->add_section( 'sq_list_fonts',  array(
			'title'       => __( 'List Fonts', 'sq' ),
			'priority'    => 1,
			'panel' => 'sq_fonts'
		)
	);	
	//List Font Family UL
	$wp_customize->add_setting(  'sq_list_ul_font_family', array(
			'default'    =>  __('Source Sans Pro', 'sq'),
		)
	);
	$wp_customize->add_control( 'sq_list_ul_font_family', array(
			'label'     => __('Unordered List (UL) Font Family', 'sq'),
			'section'   => 'sq_list_fonts',
			'settings'   => 'sq_list_ul_font_family',
			'type'      => 'select',
			'choices'    => $googlefonts
		)
	);
	//List Font Size UL
	$wp_customize->add_setting( 'sq_list_ul_font_size', array(
			'default'    =>  __('14px', 'sq'),
		)
	);
	$wp_customize->add_control('sq_list_ul_font_size', array(
			'label'     => __('Unordered List (UL) Font Size', 'sq'),
			'section'   => 'sq_list_fonts',
			'settings'   => 'sq_list_ul_font_size',
			'type'      => 'select',
			'choices'    => $fontSizes		
		)
	);			
	//List Font Family OL
	$wp_customize->add_setting(  'sq_list_ol_font_family', array(
			'default'    =>  __('Source Sans Pro', 'sq'),
		)
	);
	$wp_customize->add_control( 'sq_list_ol_font_family', array(
			'label'     => __('Ordered List (OL) Font Family', 'sq'),
			'section'   => 'sq_list_fonts',
			'settings'   => 'sq_list_ol_font_family',
			'type'      => 'select',
			'choices'    => $googlefonts
		)
	);
	//List Font Size OL
	$wp_customize->add_setting( 'sq_list_ol_font_size', array(
			'default'    =>  __('14px', 'sq'),
		)
	);
	$wp_customize->add_control('sq_list_ol_font_size', array(
			'label'     => __('Ordered List (OL) Font Size', 'sq'),
			'section'   => 'sq_list_fonts',
			'settings'   => 'sq_list_ol_font_size',
			'type'      => 'select',
			'choices'    => $fontSizes		
		)
	);
	/* MENU FONTS */	
	$wp_customize->add_section( 'sq_menu_fonts',  array(
			'title'       => __( 'Menu Font', 'sq' ),
			'priority'    => 1,
			'panel' => 'sq_fonts'
		)
	);
	//Menu Font Family
	$wp_customize->add_setting(  'sq_menu_font_family', array(
			'default'    =>  __('Source Sans Pro', 'sq'),
		)
	);
	$wp_customize->add_control( 'sq_menu_font_family', array(
			'label'     => __('Menu Font Family', 'sq'),
			'section'   => 'sq_menu_fonts',
			'settings'   => 'sq_menu_font_family',
			'type'      => 'select',
			'choices'    => $googlefonts
		)
	);	
	//Menu Font Size
	$wp_customize->add_setting( 'sq_menu_font_size', array(
			'default'    =>  __('12px', 'sq'),
		)
	);
	$wp_customize->add_control('sq_menu_font_size', array(
			'label'     => __('Menu Font Size', 'sq'),
			'section'   => 'sq_menu_fonts',
			'settings'   => 'sq_menu_font_size',
			'type'      => 'select',
			'choices'    => $fontSizes		
		)
	);		


	/* SITE NAME FONT */	
	$wp_customize->add_section( 'sq_site_name_font',  array(
			'title'       => __( 'Site Name Font', 'sq' ),
			'priority'    => 1,
			'panel' => 'sq_fonts'
		)
	);
	//Site Name Font
	$wp_customize->add_setting(  'sq_site_name_font_family', array(
			'default'    =>  __('Vidaloka', 'sq'),
		)
	);
	$wp_customize->add_control( 'sq_site_name_font_family', array(
			'label'     => __('Post Meta Font Family', 'sq'),
			'section'   => 'sq_site_name_font',
			'settings'   => 'sq_site_name_font_family',
			'type'      => 'select',
			'choices'    => $googlefonts
		)
	);
	//Site Name Size	
	$wp_customize->add_setting( 'sq_site_name_font_size', array(
			'default'    =>  __('44px', 'sq'),
		)
	);
	$wp_customize->add_control('sq_site_name_font_size', array(
			'label'     => __('Post Meta Font Size', 'sq'),
			'section'   => 'sq_site_name_font',
			'settings'   => 'sq_site_name_font_size',
			'type'      => 'select',
			'choices'    => $fontSizes		
		)
	);	




	/* MISC POST FONTS */	
	$wp_customize->add_section( 'sq_misc_blog_fonts',  array(
			'title'       => __( 'Misc. Blog Fonts', 'sq' ),
			'priority'    => 1,
			'panel' => 'sq_fonts'
		)
	);
	//Post Meta Font
	$wp_customize->add_setting(  'sq_post_meta_font_family', array(
			'default'    =>  __('Source Sans Pro', 'sq'),
		)
	);
	$wp_customize->add_control( 'sq_post_meta_font_family', array(
			'label'     => __('Post Meta Font Family', 'sq'),
			'section'   => 'sq_misc_blog_fonts',
			'settings'   => 'sq_post_meta_font_family',
			'type'      => 'select',
			'choices'    => $googlefonts
		)
	);	
	//Post Meta Size
	$wp_customize->add_setting( 'sq_post_meta_font_size', array(
			'default'    =>  __('11px', 'sq'),
		)
	);
	$wp_customize->add_control('sq_post_meta_font_size', array(
			'label'     => __('Post Meta Font Size', 'sq'),
			'section'   => 'sq_misc_blog_fonts',
			'settings'   => 'sq_post_meta_font_size',
			'type'      => 'select',
			'choices'    => $fontSizes		
		)
	);
						

	
	/* COLOR PANEL
	**************************************************/		
	$wp_customize->add_section( 'sq_colors', array(
	    'title' => __( 'Colors', 'sq' ),
	    'description' => __('', 'sq'),
	    'priority'			=> 2
		) 
	);		
	// Primary Color
	$wp_customize->add_setting( 'sq_primary_color', array(
			'default'   		=> '#7fb5bc',
			'transport'  		=> 'refresh',	
		)
	);
	$wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'sq_primary_color', array(
			'label'     		=> __( 'Primary Color', 'sq' ),
			'description'		=> __( 'Change the primary color, used for category links, menu highlighting and author links', 'sq' ),
			'section'   		=> 'sq_colors',
			'settings'  		=> 'sq_primary_color',
			)
		)
	);
	// Background Color
	$wp_customize->add_setting( 'sq_background_color', array(
			'default'   		=> '#F8F8F8',
			'transport'  		=> 'refresh',	
		)
	);
	$wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'sq_background_color', array(
			'label'     		=> __( 'Background Color', 'sq' ),
			'description'		=> __( 'Change the background color', 'sq' ),
			'section'   		=> 'sq_colors',
			'settings'  		=> 'sq_background_color',
			)
		)
	);
	// Menu Link Color
	$wp_customize->add_setting( 'sq_menu_link_color', array(
			'default'   		=> '#767676',
			'transport'  		=> 'refresh',	
		)
	);
	$wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'sq_menu_link_color', array(
			'label'     		=> __( 'Menu Link Color', 'sq' ),
			'description'		=> __( 'Change the menu link color', 'sq' ),
			'section'   		=> 'sq_colors',
			'settings'  		=> 'sq_menu_link_color',
			)
		)
	);				
	// Link Color	
	$wp_customize->add_setting( 'sq_link_color', array(
			'default'    		=> '#2e2e2e',
			'transport'  		=>  'refresh',				
		)
	);
	$wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'sq_link_color', array(
			'label'      		=> __('Link Color', 'sq' ),
			'description'		=> __( 'Change the color of links in your content.', 'sq' ),
			'section'    		=> 'sq_colors',
			'settings'   		=> 'sq_link_color',
			)
		)
	);
	//Widget Title Color
	$wp_customize->add_setting( 'sq_widget_title_color', array(
			'default'    		=> '#4D4D4D',
			'transport'  		=>  'refresh',				
		)
	);
	$wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'sq_widget_title_color', array(
			'label'      		=> __('Widget Title Color', 'sq' ),
			'description'		=> __( 'Change the background color of your widget titles', 'sq' ),
			'section'    		=> 'sq_colors',
			'settings'   		=> 'sq_widget_title_color',
			)
		)
	);	

	/* HEADER PANEL
	**************************************************/		
	$wp_customize->add_panel( 'sq_header', array(
	    'title' => __( 'Header', 'sq' ),
	    'description' => __('', 'sq'),
	    'priority'			=> 3
		) 
	);
	/* Header Display Options
	***************************************************/		
	$wp_customize->add_section(  'sq_header_display_options',  array(
			'title'      		=> __( 'Header Display Options', 'sq' ),				
			'description'		=> __('', 'sq'),
			'priority'			=> 1,
			'panel'				=> 'sq_header'
		)
	);
	// Display Header Search?
	$wp_customize->add_setting( 'sq_header_option', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',
			
		)
	);
	$wp_customize->add_control( 'sq_header_option', array(
			'label'      		=> __('Use alternative header?', 'sq'),
			'section'    		=> 'sq_header_display_options',
			'settings'   		=> 'sq_header_option',
			'type'       		=> 'select',
			'choices'   		=> array(
				'sq-header-option-1'  => __('Header Option 1 (Default)', 'sq'),
				'sq-header-option-2'  => __('Header Option 2', 'sq'),
				'sq-header-option-3'  => __('Header Option 3', 'sq'),
				'sq-header-option-4'  => __('Header Option 4', 'sq'),

			)			
		)
	);
	// Display Header Social Icons?
	$wp_customize->add_setting( 'sq_disable_header_social_icons', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',
			
		)
	);
	$wp_customize->add_control( 'sq_disable_header_social_icons', array(
			'label'      		=> __('Disable header social icons?', 'sq'),
			'section'    		=> 'sq_header_display_options',
			'settings'   		=> 'sq_disable_header_social_icons',
			'type'       		=> 'checkbox',
		)
	);
	// Display Header Search?
	$wp_customize->add_setting( 'sq_disable_header_search', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',
			
		)
	);
	$wp_customize->add_control( 'sq_disable_header_search', array(
			'label'      		=> __('Disable header search?', 'sq'),
			'section'    		=> 'sq_header_display_options',
			'settings'   		=> 'sq_disable_header_search',
			'type'       		=> 'checkbox',
		)
	);
	/* Logo and Favicon
	***************************************************/
	$wp_customize->add_section(  'sq_logo_favicon',  array(
			'title'      		=> __( 'Logo & Favicon', 'sq' ),				
			'description'		=> __('', 'sq'),
			'priority'			=> 2,
			'panel'				=> 'sq_header'
		)
	);
	// Logo
	$wp_customize->add_setting( 'sq_logo', array(
			'transport'  		=>  'refresh',
			
		)
	);
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'sq_logo', array(
			'label'     		=> __( 'Logo', 'sq' ),
			'section'    		=> 'sq_logo_favicon',
			'settings'   		=> 'sq_logo',
			)
		)
	);
	// Favicon
	$wp_customize->add_setting( 'sq_favicon', array(
			'transport'  		=>  'refresh',
			
		)
	);
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'sq_favicon', array(
			'label'     		=> __( 'Favicon', 'sq' ),
			'section'    		=> 'sq_logo_favicon',
			'settings'   		=> 'sq_favicon',
			)
		)
	);
	/* SLIDER PANEL
	************************************************/		
	$wp_customize->add_section( 'sq_slider', array(
	    'title' => __( 'Slider', 'sq' ),
	    'description' => __('', 'sq'),
	    'priority'			=> 4
		) 
	);		
	//Disable Slider
	$wp_customize->add_setting( 'sq_disable_slider', array(
			'default'    		=> false,
			'transport'  		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_disable_slider', array(
			'label'      		=> __('Disable Slider?', 'sq'),
			'section'    		=> 'sq_slider',
			'settings'  		=> 'sq_disable_slider',
			'type'       		=> 'checkbox',
		)
	);	

	/* Content Boxes Panel
	***************************************************/
	$wp_customize->add_panel( 'sq_content_boxes', array(
	    'title' => 'Content Boxes',
	    'description' => '',
	    'priority'			=> 5
	    
	) );		
	$wp_customize->add_section( 'sq_content_box_displaying', array(
			'title'      		=> __('Content Box Displaying', 'sq'),
			'panel'				=> 'sq_content_boxes'
		)
	);
	//Display Content Boxes
	$wp_customize->add_setting( 'sq_display_content_boxes', array(
			'default'   		=> false,
			'transport' 		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_display_featured_categories', array(
			'label'     		=> __('Disable Content Boxes?', 'sq'),
			'section'   		=> 'sq_content_box_displaying',
			'settings'  		=> 'sq_display_content_boxes',
			'type'      		=> 'checkbox',
		)
	);
	$wp_customize->add_section( 'sq_content_box_one', array(
			'title'      		=> __('Content Box One', 'sq'),
			'panel'				=> 'sq_content_boxes'
		)
	);
	//Content Box Image
	$wp_customize->add_setting( 'sq_content_box_one_image', array(
			'transport'  		=>  'refresh',				
		)
	);
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'sq_content_box_one_image', array(
			'label'      		=> __('Content Box One Image', 'sq' ),
			'section'    		=> 'sq_content_box_one',
			'settings'   		=> 'sq_content_box_one_image',
			)
		)
	);
	// Content Box Title
	$wp_customize->add_setting( 'sq_content_box_one_title', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_content_box_one_title', array(
			'label'      		=> __('Content Box One Title', 'sq'),
			'section'    		=> 'sq_content_box_one',
			'settings'   		=> 'sq_content_box_one_title',
			'type'       		=> 'text',
		)
	);
	// Content Box Sub Title
	$wp_customize->add_setting( 'sq_content_box_one_sub_title', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_content_box_one_sub_title', array(
			'label'      		=> __('Content Box One Sub Title', 'sq'),
			'section'    		=> 'sq_content_box_one',
			'settings'   		=> 'sq_content_box_one_sub_title',
			'type'       		=> 'text',
		)
	);	
	// Content Box Link
	$wp_customize->add_setting( 'sq_content_box_one_link', array(
			'default'    		=> '',
			'transport' 		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_content_box_one_link', array(
			'label'      		=> __('Content Box One Link', 'sq'),
			'section'    		=> 'sq_content_box_one',
			'settings'   		=> 'sq_content_box_one_link',
			'type'       		=> 'text',
		)
	);
	//Open in new tab?
	$wp_customize->add_setting( 'sq_content_box_one_new_tab', array(
			'default'   		=> false,
			'transport' 		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_content_box_one_new_tab', array(
			'label'     		=> __('Open in new tab?', 'sq'),
			'section'   		=> 'sq_content_box_one',
			'settings'  		=> 'sq_content_box_one_new_tab',
			'type'      		=> 'checkbox',
		)
	);		
	$wp_customize->add_section( 'sq_content_box_two', array(
			'title'      		=> __('Content Box Two', 'sq'),
			'panel'				=> 'sq_content_boxes'
		)
	);
	//Content Box Image
	$wp_customize->add_setting( 'sq_content_box_two_image', array(
			'transport'  		=> 'refresh',				
		)
	);
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'sq_content_box_two_image', array(
			'label'      		=> __('Content Box Two Image', 'sq' ),
			'section'    		=> 'sq_content_box_two',
			'settings'   		=> 'sq_content_box_two_image',
			)
		)
	);
	// Content Box Title
	$wp_customize->add_setting( 'sq_content_box_two_title', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_content_box_two_title', array(
			'label'      		=> __('Content Box Two Title', 'sq'),
			'section'    		=> 'sq_content_box_two',
			'settings'   		=> 'sq_content_box_two_title',
			'type'       		=> 'text',
		)
	);
	// Content Box Sub Title
	$wp_customize->add_setting( 'sq_content_box_two_sub_title', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_content_box_two_sub_title', array(
			'label'      		=> __('Content Box Two Sub Title', 'sq'),
			'section'    		=> 'sq_content_box_two',
			'settings'   		=> 'sq_content_box_two_sub_title',
			'type'       		=> 'text',
		)
	);	
	// Content Box Link
	$wp_customize->add_setting( 'sq_content_box_two_link', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',			
		)
	);
	$wp_customize->add_control( 'sq_content_box_two_link', array(
			'label'      		=> __('Content Box Two Link', 'sq'),
			'section'    		=> 'sq_content_box_two',
			'settings'   		=> 'sq_content_box_two_link',
			'type'       		=> 'text',
		)
	);
	//Open in new tab?
	$wp_customize->add_setting( 'sq_content_box_two_new_tab', array(
			'default'   		=> false,
			'transport' 		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_content_box_two_new_tab', array(
			'label'     		=> __('Open in new tab?', 'sq'),
			'section'   		=> 'sq_content_box_two',
			'settings'  		=> 'sq_content_box_two_new_tab',
			'type'      		=> 'checkbox',
		)
	);	
	$wp_customize->add_section( 'sq_content_box_three', array(
			'title'      		=> __('Content Box Three', 'sq'),
			'panel'				=> 'sq_content_boxes'
		)
	);
	//Content Box Image
	$wp_customize->add_setting( 'sq_content_box_three_image', array(
			'transport'  		=>  'refresh',				
		)
	);
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'sq_content_box_three_image', array(
			 'label'     		=> __('Content Box Three Image', 'sq' ),
			 'section'   		=> 'sq_content_box_three',
			 'settings'  		=> 'sq_content_box_three_image',
			)
		)
	);
	// Content Box Title
	$wp_customize->add_setting( 'sq_content_box_three_title', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_content_box_three_title', array(
			'label'      		=> __('Content Box Three Title', 'sq'),
			'section'    		=> 'sq_content_box_three',
			'settings'   		=> 'sq_content_box_three_title',
			'type'       		=> 'text',
		)
	);
	// Content Box Sub Title
	$wp_customize->add_setting( 'sq_content_box_three_sub_title', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_content_box_three_sub_title', array(
			'label'      		=> __('Content Box Three Sub Title', 'sq'),
			'section'    		=> 'sq_content_box_three',
			'settings'   		=> 'sq_content_box_three_sub_title',
			'type'       		=> 'text',
		)
	);		
	// Content Box Link
	$wp_customize->add_setting( 'sq_content_box_three_link', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',			
		)
	);
	$wp_customize->add_control( 'sq_content_box_three_link', array(
			'label'      		=> __('Content Box Three Link', 'sq'),
			'section'    		=> 'sq_content_box_three',
			'settings'   		=> 'sq_content_box_three_link',
			'type'       		=> 'text',
		)
	);
	//Open in new tab?
	$wp_customize->add_setting( 'sq_content_box_three_new_tab', array(
			'default'   		=> false,
			'transport' 		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_content_box_three_new_tab', array(
			'label'     		=> __('Open in new tab?', 'sq'),
			'section'   		=> 'sq_content_box_three',
			'settings'  		=> 'sq_content_box_three_new_tab',
			'type'      		=> 'checkbox',
		)
	);	
	
	/* BLOG PANEL
	************************************************/		
	$wp_customize->add_panel( 'sq_blog', array(
	    'title' => __( 'Blog', 'sq' ),
	    'description' => __('', 'sq'),
	    'priority'			=> 6
		) 
	);	
	/* General Blog Display Options
	***************************************************/	
	$wp_customize->add_section( 'sq_general_blog_options', array(
			'title'     		=> __('General Blog Options', 'sq'),
			'priority'			=> 2,
			'panel' => 'sq_blog',			
		)
	);
	//Blog Style
	$wp_customize->add_setting( 'sq_blog_style', array(
			'default'   		=> 'default',
			'transport' 		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_blog_style', array(
			'label'     		=> __('Blog Post Style', 'sq'),
			'description'		=> 'Change the style the blog listing page uses.',
			'section'   		=> 'sq_general_blog_options',
			'settings'  		=> 'sq_blog_style',
			'type'      		=> 'select',
			'choices'   		=> array(
				'default'     		=> __('Default', 'sq'),
				'list'      		=> __('List', 'sq'),
				'list-circle'      	=> __('List (Circle)', 'sq'),
				'grid'        		=> __('Grid', 'sq'),
				'full_width_then_grid'   => __('Full Width > Grid', 'sq'),
			)
		)
	);
	//Archive Style
	$wp_customize->add_setting( 'sq_archive_style', array(
			'default'   		=> 'default',
			'transport' 		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_archive_style', array(
			'label'     		=> __('Archive Post Style', 'sq'),
			'description'		=> 'Change the style the archive listing page uses.',
			'section'   		=> 'sq_general_blog_options',
			'settings'  		=> 'sq_archive_style',
			'type'      		=> 'select',
			'choices'   		=> array(
				'default'     		=> __('Default', 'sq'),
				'list'      		=> __('List', 'sq'),
				'list-circle'      	=> __('List (Circle)', 'sq'),
				'grid'        		=> __('Grid', 'sq'),
				'full_width_then_grid'   => __('Full Width > Grid', 'sq'),
			)
		)
	);
	//Search Style
	$wp_customize->add_setting( 'sq_search_style', array(
			'default'   		=> 'default',
			'transport' 		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_search_style', array(
			'label'     		=> __('Search Post Style', 'sq'),
			'description'		=> 'Change the style the search listing page uses.',
			'section'   		=> 'sq_general_blog_options',
			'settings'  		=> 'sq_search_style',
			'type'      		=> 'select',
			'choices'   		=> array(
				'default'     		=> __('Default', 'sq'),
				'list'      		=> __('List', 'sq'),
				'list-circle'      	=> __('List (Circle)', 'sq'),
				'grid'        		=> __('Grid', 'sq'),
				'full_width_then_grid'   => __('Full Width > Grid', 'sq'),
			)
		)
	);
	//Disable Read More Button
	$wp_customize->add_setting( 'sq_disable_read_more', array(
			'default'   		=> false,
			'transport' 		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_disable_read_more', array(
			'label'     		=> __('Disable Read More Button?', 'sq'),
			'section'   		=> 'sq_general_blog_options',
			'settings'  		=> 'sq_disable_read_more',
			'type'      		=> 'checkbox',
		)
	);
	//Disable Sidebar
	$wp_customize->add_setting( 'sq_disable_sidebar', array(
			'default'   		=> false,
			'transport' 		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_disable_sidebar', array(
			'label'     		=> __('Disable Blog Sidebar?', 'sq'),
			'section'   		=> 'sq_general_blog_options',
			'settings'  		=> 'sq_disable_sidebar',
			'type'      		=> 'checkbox',
		)
	);
	//Sidebar Position
	$wp_customize->add_setting( 'sq_blog_sidebar_position', array(
			'default'   		=> false,
			'transport' 		=> 'refresh',
		)
	);
	$wp_customize->add_control( 'sq_blog_sidebar_position', array(
			'label'     		=> __('Display Blog Sidebar on Left', 'sq'),
			'section'   		=> 'sq_general_blog_options',
			'settings'  		=> 'sq_blog_sidebar_position',
			'type'      		=> 'checkbox',
		)
	);			
	/* Single Post Display Options
	***************************************************/		
	$wp_customize->add_section(  'sq_single_post',  array(
			'title'      		=> __( 'Global Single Post Options', 'sq' ),				
			'description'		=> __('', 'sq'),
			'priority'			=> 2,
			'panel'				=> 'sq_blog'
		)
	);
	// Disable single post pagination
	$wp_customize->add_setting( 'sq_disable_single_post_pagination', array(
			'default'   		=> false,
			'transport' 		=> 'refresh',
		)
	);
	$wp_customize->add_control( 'sq_disable_single_post_pagination', array(
			'label'     		=> __('Disable single post pagination?', 'sq'),
			'section'   		=> 'sq_single_post',
			'settings'  		=> 'sq_disable_single_post_pagination',
			'type'      		=> 'checkbox',
		)
	);						
	// Disable Author Card
	$wp_customize->add_setting( 'sq_disable_author_card', array(
			'default'   		=> false,
			'transport' 		=> 'refresh',
		)
	);
	$wp_customize->add_control( 'sq_disable_author_card', array(
			'label'     		=> __('Disable author card?', 'sq'),
			'section'   		=> 'sq_single_post',
			'settings'  		=> 'sq_disable_author_card',
			'type'      		=> 'checkbox',
		)
	);	
	// Disable Related Posts
	$wp_customize->add_setting( 'sq_disable_related_posts', array(
			'default'   		=> false,
			'transport' 		=> 'refresh',
		)
	);
	$wp_customize->add_control( 'sq_disable_related_posts', array(
			'label'     		=> __('Disable related posts?', 'sq'),
			'section'   		=> 'sq_single_post',
			'settings'  		=> 'sq_disable_related_posts',
			'type'      		=> 'checkbox',
		)
	);		
	
	/* SOCIAL ICON PANEL
	************************************************/
	$wp_customize->add_section( 'sq_social_links', array(
			'title'      		=> __('Social Links', 'sq'),
			'description'		=> __('Below you can link to your social networking accounts. Please ensure you include the full URL including "http://"', 'sq'),
 			'priority'			=> 7
		)
	);
	// Dribble
	$wp_customize->add_setting( 'sq_social_dribbble', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',	
		)
	);
	$wp_customize->add_control( 'sq_social_dribbble', array(
			'label'      		=> __('Dribbble', 'sq'),
			'section'   		=> 'sq_social_links',
			'settings'   		=> 'sq_social_dribbble',
			'type'       		=> 'text',
		)
	);
	// Facebook
	$wp_customize->add_setting( 'sq_social_facebook', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',	
		)
	);
	$wp_customize->add_control( 'sq_social_facebook', array(
			'label'      		=> __('Facebook', 'sq'),
			'section'   		=> 'sq_social_links',
			'settings'   		=> 'sq_social_facebook',
			'type'       		=> 'text',
		)
	);
	// Flickr
	$wp_customize->add_setting( 'sq_social_flickr', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_social_flickr', array(
			'label'      		=> __('Flickr', 'sq'),
			'section'    		=> 'sq_social_links',
			'settings'   		=> 'sq_social_flickr',
			'type'       		=> 'text',
		)
	);
	// Google
	$wp_customize->add_setting( 'sq_social_google', array(
			'default'   		=> '',
			'transport'  		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_social_google', array(
			'label'      		=> __('Google Plus', 'sq'),
			'section'    		=> 'sq_social_links',
			'settings'   		=> 'sq_social_google',
			'type'       		=> 'text',
		)
	);
	// Instagram
	$wp_customize->add_setting( 'sq_social_instagram', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_social_instagram', array(
			'label'      		=> __('Instagram', 'sq'),
			'section'    		=> 'sq_social_links',
			'settings'   		=> 'sq_social_instagram',
			'type'       		=> 'text',
		)
	);
	// Linkedin
	$wp_customize->add_setting( 'sq_social_linkedin', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_social_linkedin', array(
			'label'      		=> __('Linkedin', 'sq'),
			'section'    		=> 'sq_social_links',
			'settings'   		=> 'sq_social_linkedin',
			'type'       		=> 'text',
		)
	);
	// Pintrest
	$wp_customize->add_setting( 'sq_social_pintrest', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_social_pintrest', array(
			'label'      		=> __('Pintrest', 'sq'),
			'section'   		=> 'sq_social_links',
			'settings'   		=> 'sq_social_pintrest',
			'type'       		=> 'text',
		)
	);
	// RSS
	$wp_customize->add_setting( 'sq_social_rss', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_social_rss', array(
			'label'      		=> __('RSS', 'sq'),
			'section'    		=> 'sq_social_links',
			'settings'   		=> 'sq_social_rss',
			'type'       		=> 'text',
		)
	);
	// Twitter
	$wp_customize->add_setting( 'sq_social_twitter', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_social_twitter', array(
			'label'      		=> __('Twitter', 'sq'),
			'section'    		=> 'sq_social_links',
			'settings'   		=> 'sq_social_twitter',
			'type'       		=> 'text',
		)
	);
	// Vimeo
	$wp_customize->add_setting( 'sq_social_vimeo', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_social_vimeo', array(
			'label'      		=> __('Vimeo', 'sq'),
			'section'    		=> 'sq_social_links',
			'settings'   		=> 'sq_social_vimeo',
			'type'       		=> 'text',
		)
	);
	// Youtube
	$wp_customize->add_setting( 'sq_social_youtube', array(
			'default'    		=> '',
			'transport'  		=> 'refresh',				
		)
	);
	$wp_customize->add_control( 'sq_social_youtube', array(
			'label'      		=> __('Youtube', 'sq'),
			'section'    		=> 'sq_social_links',
			'settings'   		=> 'sq_social_youtube',
			'type'       		=> 'text',
		)
	);		

	/* FOOTER OPTIONS
	************************************************/

	$wp_customize->add_section( 'sq_footer_options', array(
			'title'      		=> __('Footer Options', 'sq'),
			'priority'			=> 8
		)
	);		
	//Footer Credits
	$wp_customize->add_setting( 'sq_footer_subscribe', array(
			'default'   		=> false,
			'transport' 		=> 'refresh',
		)
	);
	$wp_customize->add_control( 'sq_footer_subscribe', array(
			'label'     		=> __('Enable Footer Subscribe Form?', 'sq'),
			'section'   		=> 'sq_footer_options',
			'settings'  		=> 'sq_footer_subscribe',
			'type'      		=> 'checkbox',
		)
	);
	//Footer Instagram
	$wp_customize->add_setting( 'sq_footer_instagram', array(
			'default'   		=> false,
			'transport' 		=> 'refresh',
		)
	);
	$wp_customize->add_control( 'sq_footer_instagram', array(
			'label'     		=> __('Disable Footer Instagram?', 'sq'),
			'section'   		=> 'sq_footer_options',
			'settings'  		=> 'sq_footer_instagram',
			'type'      		=> 'checkbox',
		)
	);	
	//Footer Credits
	$wp_customize->add_setting( 'sq_footer_credits', array(
			'default'   		=> false,
			'transport' 		=> 'refresh',
		)
	);
	$wp_customize->add_control( 'sq_footer_credits', array(
			'label'     		=> __('Disable Footer Credits?', 'sq'),
			'section'   		=> 'sq_footer_options',
			'settings'  		=> 'sq_footer_credits',
			'type'      		=> 'checkbox',
		)
	);	
	
	/* MISC. OPTIONS
	************************************************/
	$wp_customize->add_panel( 'sq_misc_options', array(
	    'title' => __( 'Misc. Options', 'sq' ),
	    'description' => __('', 'sq'),
	    'priority'			=> 9
		) 
	);				
	$wp_customize->add_section( 'sq_about_me_widget', array(
			'title'      		=> __('About Me Widget', 'sq'),
			'panel'   			=> 'sq_misc_options'
		)
	);			
	//Disable about me widget?
	$wp_customize->add_setting( 'sq_enable_about_me_widget', array(
			'default'   		=> false,
			'transport' 		=> 'refresh',
		)
	);
	$wp_customize->add_control( 'sq_enable_about_me_widget', array(
			'label'     		=> __('Enable About Me Widget?', 'sq'),
			'section'   		=> 'sq_about_me_widget',
			'settings'  		=> 'sq_enable_about_me_widget',
			'type'      		=> 'checkbox',
		)
	);
	//Disable about me widget?
	$wp_customize->add_setting( 'sq_about_me_widget_title', array(
			'default'   		=> __('About me','sq'),
			'transport' 		=> 'refresh',
		)
	);
	$wp_customize->add_control( 'sq_about_me_widget_title', array(
			'label'     		=> __('About Me Widget Title', 'sq'),
			'section'   		=> 'sq_about_me_widget',
			'settings'  		=> 'sq_about_me_widget_title',
			'type'      		=> 'text',
		)
	);				
	// About Me Image
	$wp_customize->add_setting( 'sq_about_me_widget_image', array(
			'default'    		=> '',
			'transport'  		=>  'refresh',			
		)
	);
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'sq_about_me_widget_image', array(
			'label'     		=> __( 'Image', 'sq' ),
			'section'    		=> 'sq_about_me_widget',
			'settings'   		=> 'sq_about_me_widget_image',
			)
		)
	);
	// About Me Name
	$wp_customize->add_setting( 'sq_about_me_widget_name', array(
			'transport'  		=> 'refresh',	
		)
	);
	$wp_customize->add_control( 'sq_about_me_widget_name', array(
			'label'      		=> __('Name', 'sq'),
			'section'    		=> 'sq_about_me_widget',
			'settings'   		=> 'sq_about_me_widget_name',
			'type'       		=> 'text',
		)
	);
	// Bio
	$wp_customize->add_setting( 'sq_about_me_widget_bio', array(			
			'transport'  		=> 'refresh',	
		)
	);
	$wp_customize->add_control( 'sq_about_me_widget_bio', array(
			'label'      		=> __('Bio', 'sq'),
			'section'    		=> 'sq_about_me_widget',
			'settings'   		=> 'sq_about_me_widget_bio',
			'type'       		=> 'textarea',
		)
	);		
	//About me widget link?
	$wp_customize->add_setting( 'sq_about_me_widget_link', array(
			'default'   		=> __('','sq'),
			'transport' 		=> 'refresh',
		)
	);
	$wp_customize->add_control( 'sq_about_me_widget_link', array(
			'label'     		=> __('About Me Widget Link', 'sq'),
			'section'   		=> 'sq_about_me_widget',
			'settings'  		=> 'sq_about_me_widget_link',
			'type'      		=> 'text',
		)
	);
	//About me widget link text?
	$wp_customize->add_setting( 'sq_about_me_widget_link_text', array(
			'default'   		=> __('Find out more','sq'),
			'transport' 		=> 'refresh',
		)
	);
	$wp_customize->add_control( 'sq_about_me_widget_link_text', array(
			'label'     		=> __('About Me Widget Link Text', 'sq'),
			'section'   		=> 'sq_about_me_widget',
			'settings'  		=> 'sq_about_me_widget_link_text',
			'type'      		=> 'text',
		)
	);					
	
	$wp_customize->add_section( 'sq_footer_credits', array(
			'title'      		=> __('Footer Credits', 'sq'),
			'panel'   			=> 'sq_misc_options'
		)
	);							
			
}
add_action( 'customize_register', 'sq_customize_options' );

require get_template_directory() . '/inc/customizer/customizer-css.php';