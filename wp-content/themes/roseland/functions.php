<?php

/* Theme Setup
*********************************************************/
function sq_theme_setup() {
		
		// Content width
		if (!isset( $content_width)) : 
			$content_width = 1080; 
		endif;
	
		// Text domain for translation
	    load_theme_textdomain( 'sq', get_template_directory() . '/languages' );
	
		// Theme supports
		add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
		add_theme_support('post-formats', array( 'gallery', 'video', 'audio' ) );
		add_theme_support('custom-background', apply_filters( 'sq_custom_background_args', array('default-color' => 'ffffff', 'default-image' => '')));
		add_theme_support( 'post-thumbnails', array( 'post' ) );
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag' );
	
		// Image sizes
		add_image_size('sq-post',1140, 9999 ,true);
		add_image_size('sq-post-grid', 760, 530 ,true);
		add_image_size('sq-post-list',640, 490 ,true);
		add_image_size('sq-post-list-circle',640, 640,true);
		add_image_size('sq-post-related',500, 350 ,true);
		add_image_size('sq-slider',1140, 540 ,true);
		add_image_size('sq-recent-post-widget',70, 70 ,true);
		
		// Register menus
		register_nav_menus(array(
			'main' => __( 'Main Menu', 'sq' ),
		));

}
add_action( 'after_setup_theme', 'sq_theme_setup' );


/* Post Video, Audio, Gallery, Thumbnail
***************************************************/
function sq_post_thumbnail($sq_image_size) {
	
		global $post;

		// If the post format is set to  "Video". 
		if(has_post_format('video')) : ?>
			
			<div class="sq-video-container">
				<?php $sq_video_embed = get_post_meta( $post->ID, '_format_video_embed', true ); 
				if(wp_oembed_get( $sq_video_embed )) : 				
					echo wp_oembed_get( $sq_video_embed ); 
				else :				
					echo $sq_video_embed; 			
				endif; ?>
			</div>
		
		<?php // If the post format is set to  "Audio". 		
		elseif(has_post_format('audio')) :
			
			$sq_audio_embed = get_post_meta( $post->ID, '_format_audio_embed', true );
			if(wp_oembed_get( $sq_audio_embed )) : 			
				echo wp_oembed_get( $sq_audio_embed ); 
			else :				
				echo $sq_audio_embed;			
		    endif; 
	
		// If the post format is set to  "Gallery". 	
		elseif(has_post_format('gallery')) : 	
			
			$sq_gallery_images = get_post_meta( $post->ID, '_format_gallery_images', true ); 		
			if($sq_gallery_images) : ?>
			<div class="sq-post-gallery">
					<?php foreach($sq_gallery_images as $sq_image_src) { 					
						 
						$sq_image_src = wp_get_attachment_image_src( $sq_image_src, $sq_image_size ); ?> 
						<div><img src="<?php echo esc_url($sq_image_src[0]); ?>" alt="" /></div>						
					<?php } ?>
			</div><!-- .sq-post-gallery -->
			<?php endif; 
								
		else :
		
			// If the post has a featured image.
			if(has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($sq_image_size); ?></a>
			<?php endif;
			
		endif;

}


/* Post Excerpt
*********************************************************/

// Increase the word count of excerpts
function sq_excerpt_length( $length ) {
	return 200;
}
add_filter( 'excerpt_length', 'sq_excerpt_length', 999 );


function sq_excerpt($excerpt_limit){
	
	global $post;
	
	$excerpt = get_the_excerpt();
	
	// Does the post have a manual excerpt
	if (!has_excerpt( $post->ID ) ) : 
	
		$words = explode(' ', $excerpt, ($excerpt_limit + 1));
		
		if(count($words) > $excerpt_limit) :
			array_pop($words);
		endif;
		
		return wpautop(implode(' ', $words) . '...');
	
	else : 

		return wpautop(get_the_excerpt());
	
	endif;
	
}


/* Comment List
***************************************************/
function sq_comment_list( $comment, $args, $depth ) {
	
	global $comment, $post; ?>	
			
		<li id="div-comment-<?php comment_ID(); ?>" class="sq-comment <?php if( $comment->user_id === $post->post_author ) : ?>bypostauthor<?php endif; ?>" data-id="comment-<?php comment_ID(); ?>">
		
				<div class="sq-comment-avatar">
					<?php echo get_avatar( $comment, 80 ); ?>
				</div><!-- .comment-avatar -->		
				
				<div class="sq-comment-content">
					
					<span class="sq-comment-reply">
						<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'], 'add_below' => 'div-comment'))); ?>
					</span><!-- .comment-reply -->																	
					
					<p class="sq-comment-author-link"><?php comment_author_link(); ?></p>
					
					<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>" class="sq-comment-date" title="<?php echo __('comment permalink', 'sq'); ?>"><span class="post-date"><?php echo get_comment_date(); ?></span></a>	
					
					<?php if ( '0' == $comment->comment_approved ) : ?>
						&bull; <span class="sq-comment-awaiting-moderation"><?php echo __( 'Your comment is awaiting moderation.', 'sq' ); ?></span>
					<?php endif; ?>						
					
					<?php comment_text(); ?>
								
				</div><!-- .comment-content -->
							
		</li><!-- .sq-comment -->
		
	<?php
}

/* Styles and Scripts
***************************************************/
function sq_scripts() {
	
	wp_enqueue_script('jquery');
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) : wp_enqueue_script( 'comment-reply' ); endif;	
	wp_enqueue_script('sq-slider', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js', array(), '', true );
	wp_enqueue_script('sq-retina', get_template_directory_uri() . '/inc/js/retina.min.js', array(), '', true );
	wp_enqueue_script('sq-script', get_template_directory_uri() . '/inc/js/script.js', array(), '', true );
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Vidaloka|Source+Sans+Pro|Varela|Playfair+Display:400italic');	
	wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
	wp_enqueue_style('sq-slider', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css');
	wp_enqueue_style('sq-normalize', get_template_directory_uri() . '/inc/css/normalize.css');
	wp_enqueue_style('sq-style', get_stylesheet_uri());

	
}
add_action( 'wp_enqueue_scripts', 'sq_scripts' );


/* Load styles into the editor
***************************************************/
function sq_add_editor_styles() {
    add_editor_style( 'style.css' );
}
add_action( 'admin_init', 'sq_add_editor_styles' );


require get_template_directory() . '/inc/updater/updater.php';
require get_template_directory() . '/inc/plugin-activation/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/plugin-activation/plugin-activation.php';
require get_template_directory() . '/inc/widgets/widget-areas.php';
require get_template_directory() . '/inc/widgets/widgets.php';
require get_template_directory() . '/inc/meta-field/meta-fields.php';
require get_template_directory() . '/inc/customizer/customizer.php';
