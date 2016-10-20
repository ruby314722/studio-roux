<?php 

class sq_recent_posts extends WP_Widget {

	function __construct() {
		parent::__construct( 'sq_recent_posts', __('SQ Recent Posts', 'sq'), array( 'description' => __('Display latest posts with featured image', 'sq')));
	}

	//Widget output
	function widget( $args, $instance ) {
	
		if(empty($instance['title'])) :
			$title = __('Recent Posts', 'sq');
		else :
			$title = apply_filters( 'widget_title', $instance['title'] );	
		endif;
		
		if(empty($instance['posts_to_show'])) :
			$posts_to_show = 4;
		else :
			$posts_to_show = $instance['posts_to_show'];
		endif;
			
			echo $args['before_widget'];
			if ( ! empty( $title ) ) :
			echo $args['before_title'] . $title . $args['after_title'];
			endif;
			?>
				<ul>
					<?php
					$the_query = new WP_Query('showposts='.$posts_to_show.'&orderby=post_date&order=desc&ignore_sticky_posts=1');	
					
					while ($the_query->have_posts()) : $the_query->the_post(); ?>
										
					<li class="sq-widget-latest">				
							<?php if(has_post_thumbnail()) : ?>
							<div class="sq-widget-latest-left">							
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('sq-recent-post-widget'); ?></a>
							</div><!-- .sq-latest-post-image -->
							<?php endif; ?>
							<div class="sq-widget-latest-right">
								<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><h5><?php the_title(); ?></h5></a>
								<span class="sq-post-date"><?php the_time(get_option( 'date_format' ));?></span>
							</div><!-- .sq-latest-post-content -->
					</li>
					
					<?php endwhile; ?>
				</ul>	
				
			<?php
			echo $args['after_widget'];
	
	}
	
	
	//Widget form
	function form($field){
		
		if ( isset( $field[ 'title' ] ) ) :
			$title = $field[ 'title' ];
		else :
			$title = __('Recent Posts', 'sq');
		endif;
		
		if(!isset($field['posts_to_show'])) :
			$posts_to_show = '4';
		else :
			$posts_to_show = $field['posts_to_show'];
		endif;
	?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'sq'); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>  
		    <label for="<?php echo $this->get_field_id( 'posts_to_show' ); ?>"><?php _e('Posts to display:', 'sq'); ?></label>  
		    <input id="<?php echo $this->get_field_id( 'posts_to_show' ); ?>" name="<?php echo $this->get_field_name( 'posts_to_show' ); ?>" value="<?php echo esc_attr($posts_to_show); ?>"  />  
		</p>  
	<?php 
	}
		
	
	//Update widget 
	function update( $new_setting, $old_setting ) {
		$setting = array();
		$setting['title'] = ( ! empty( $new_setting['title'] ) ) ? strip_tags( $new_setting['title'] ) : '';
		$setting['posts_to_show'] = ( ! empty( $new_setting['posts_to_show'] ) ) ? strip_tags( $new_setting['posts_to_show'] ) : '';
		return $setting;
	}
	
}