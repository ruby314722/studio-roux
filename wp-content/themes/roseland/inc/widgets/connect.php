<?php 

class sq_connect extends WP_Widget {

	function __construct() {
		parent::__construct( 'sq_connect', __('SQ Connect', 'sq'), array( 'description' => __('Display the connect widget', 'sq')));
	}

	//Widget output
	function widget( $args, $instance ) {
		
		if(empty($instance['title'])) :
			$title = __('Connect', 'sq');
		else :
			$title = apply_filters( 'widget_title', $instance['title'] );	
		endif;
		
		$sq_customize_option = get_option('sq_customizer_options');
	
			echo $args['before_widget'];
			if ( ! empty( $title ) ) :
			echo $args['before_title'] . $title . $args['after_title'];
			endif;
	
				?>
				
				<aside class="sq-widget-content">
					<ul class="sq-connect-social-links">
							<?php if(get_theme_mod('sq_social_facebook')) : ?>
							<li class="sq-facebook"><a href="<?php echo get_theme_mod('sq_social_facebook'); ?>" class="fa fa-facebook" target="_BLANK"></a></li><!--facebook-->
							<?php endif; ?>
							<?php if(get_theme_mod('sq_social_twitter')) : ?>
							<li class="sq-twitter"><a href="<?php echo get_theme_mod('sq_social_twitter'); ?>" class="fa fa-twitter" target="_BLANK"></a></li><!--twitter-->
							<?php endif; ?>
							<?php if(get_theme_mod('sq_social_google')) : ?>
							<li class="sq-google"><a href="<?php echo get_theme_mod('sq_social_google'); ?>" class="fa fa-google-plus" target="_BLANK"></a></li><!--google plus-->
							<?php endif; ?>
							<?php if(get_theme_mod('sq_social_linkedin')) : ?>
							<li class="sq-linkedin"><a href="<?php echo get_theme_mod('sq_social_linkedin'); ?>" class="fa fa-linkedin" target="_BLANK"></a></li><!--linkedin-->
							<?php endif; ?>
							<?php if(get_theme_mod('sq_social_pintrest')) : ?>
							<li class="sq-pintrest"><a href="<?php echo get_theme_mod('sq_social_pintrest'); ?>" class="fa fa-pinterest" target="_BLANK"></a></li><!--Pintrest-->
							<?php endif; ?>
							<?php if(get_theme_mod('sq_social_flickr')) : ?>
							<li class="sq-flickr"><a href="<?php echo get_theme_mod('sq_social_flickr'); ?>" class="fa fa-flickr" target="_BLANK"></a></li><!--flickr-->
							<?php endif; ?>
							<?php if(get_theme_mod('sq_social_youtube')) : ?>
							<li class="sq-youtube"><a href="<?php echo get_theme_mod('sq_social_youtube'); ?>" class="fa fa-youtube-play" target="_BLANK"></a></li><!--youtube-->
							<?php endif; ?>
							<?php if(get_theme_mod('sq_social_vimeo')) : ?>
							<li  class="sq-vimeo"><a href="<?php echo get_theme_mod('sq_social_vimeo'); ?>" class="fa fa-vimeo-square" target="_BLANK"></a></li><!--vimeo-->
							<?php endif; ?>
							<?php if(get_theme_mod('sq_social_dribbble')) : ?>
							<li  class="sq-dribbble"><a href="<?php echo get_theme_mod('sq_social_dribbble'); ?>" class="fa fa-dribbble" target="_BLANK"></a></li><!--dribbble-->
							<?php endif; ?>
							<?php if(get_theme_mod('sq_social_instagram')) : ?>
							<li class="sq-instagram"><a href="<?php echo get_theme_mod('sq_social_instagram'); ?>" class="fa fa-instagram" target="_BLANK"></a></li><!--instagram-->
							<?php endif; ?>
							<?php if(get_theme_mod('sq_social_rss')) : ?>
							<li class="sq-rss"><a href="<?php echo get_theme_mod('sq_social_rss'); ?>" class="fa fa-rss" target="_BLANK"></a></li><!--rss-->
							<?php endif; ?>
					</ul><!-- .sq-connect-social-links -->
				</aside><!-- .sq-widget-content -->
				
				<?php 
				
			echo $args['after_widget'];		
	}

	//Widget form 
	function form($field) {	
		if ( isset( $field[ 'title' ] ) ) :
			$title = $field[ 'title' ];
		else :
			$title = __('Connect', 'sq');
		endif;
	?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'sq'); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
	<?php 
	}
		
}