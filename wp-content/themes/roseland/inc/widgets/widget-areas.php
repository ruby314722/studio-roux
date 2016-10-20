<?php 

/* Register widgets
***************************************************/
function sq_widgets_init() {

	// Blog sidebar
	register_sidebar( array(
		'name'          => __('Sidebar', 'sq' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<article id="%1$s" class="sq-widget %2$s">',
		'after_widget'  => '</article>',
		'before_title'  => '<h3 class="sq-widget-title">',
		'after_title'   => '</h3>',
	) );

	// Page sidebar
	register_sidebar( array(
		'name'          => __('Page Sidebar', 'sq' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<article id="%1$s" class="sq-widget %2$s">',
		'after_widget'  => '</article>',
		'before_title'  => '<h3 class="sq-widget-title">',
		'after_title'   => '</h3>',
	) );
	
	// Footer Instagram
	register_sidebar( array(
		'name'          => __('Instagram (Footer)', 'sq' ),
		'id'            => 'footer-instagram',
		'description'   => '',
		'before_widget' => '<article id="%1$s" class="sq-widget %2$s">',
		'after_widget'  => '</article>',
		'before_title'  => '<h5 class="sq-instagram-widget-title">',
		'after_title'   => '</h5>',
	) );
	
	// Footer Column 1
	register_sidebar( array(
		'name'          => __('Footer Column 1', 'sq' ),
		'id'            => 'footer-column-1',
		'description'   => '',
		'before_widget' => '<article id="%1$s" class="sq-widget %2$s">',
		'after_widget'  => '</article>',
		'before_title'  => '<h5 class="sq-widget-title">',
		'after_title'   => '</h5>',
	) );

	// Footer Column 2
	register_sidebar( array(
		'name'          => __('Footer Column 2', 'sq' ),
		'id'            => 'footer-column-2',
		'description'   => '',
		'before_widget' => '<article id="%1$s" class="sq-widget %2$s">',
		'after_widget'  => '</article>',
		'before_title'  => '<h5 class="sq-widget-title">',
		'after_title'   => '</h5>',
	) );

	// Footer Column 3
	register_sidebar( array(
		'name'          => __('Footer Column 3', 'sq' ),
		'id'            => 'footer-column-3',
		'description'   => '',
		'before_widget' => '<article id="%1$s" class="sq-widget %2$s">',
		'after_widget'  => '</article>',
		'before_title'  => '<h5 class="sq-widget-title">',
		'after_title'   => '</h5>',
	) );
				
	
	
}
add_action( 'widgets_init', 'sq_widgets_init' );