<?php 

class sq_recent_comments extends WP_Widget {
	
	function __construct() {
		parent::__construct( 'sq_recent_comments', __('SQ Recent Comments', 'sq'), array( 'description' => __('Displays latest comments with author avatar', 'sq')) );
	}
	
	//Widget output
	function widget( $args, $instance ) {
		
		if(empty($instance['title'])) :
			$title = __( 'Recent Comments', 'sq' );
		else :
			$title = apply_filters( 'widget_title', $instance['title'] );	
		endif;
		
		if(empty($instance['comments_to_show'])) :
			$comments_to_show = 4;
		else :
			$comments_to_show = $instance['comments_to_show'];
		endif;
			
			echo $args['before_widget'];
			
			if ( ! empty( $title ) ) :
			echo $args['before_title'] . $title . $args['after_title'];
			endif;
			
				$comment_loop_args = array(
				  'number' => $comments_to_show,
				  'status' => 'approve',
				);
				
				$comments_query = new WP_Comment_Query;
				$comments = $comments_query->query( $comment_loop_args );
				?>
				<ul>
					<?php
					if ( $comments ) :
						foreach ( $comments as $comment ) {
					?>
					<li class="sq-widget-latest">				
							<div class="sq-widget-latest-left sq-widget-latest-comment-avatar">
								<a href="<?php echo get_permalink($comment->comment_post_ID); ?>#comment-<?php echo $comment->comment_ID; ?>"><?php echo get_avatar($comment->comment_author_email , 60); ?></a>
							</div><!-- .sq-latest-comment-avatar -->
							<div class="sq-widget-latest-right">
								<p class="sq-widget-latest-comment-author"><?php echo $comment->comment_author . __(' commented on:', 'sq'); ?></p>
								<a href="<?php echo get_permalink($comment->comment_post_ID); ?>#comment-<?php echo $comment->comment_ID; ?>"><h5><?php echo get_the_title($comment->comment_post_ID); ?></h5></a>
							</div><!-- .sq-latest-comment-content -->
					</li>
					
					<?php
						}
					else : ?>
						<li>No comments found</li>
					<?php 	
					endif;
					?>
				</ul>
				<?php
	
			echo $args['after_widget'];
	}
	
	//Widget form
	function form($field) {
		
		if ( isset( $field[ 'title' ] ) ) :
			$title = $field[ 'title' ];
		else :
			$title = __('Recent Comments', 'sq');
		endif;
		if(!isset($field['comments_to_show'])) :
			$posts_to_show = '4';
		else :
			$posts_to_show = $field['comments_to_show'];
		endif;
	?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'sq'); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>  
		    <label for="<?php echo $this->get_field_id( 'comments_to_show' ); ?>"><?php _e('Comments to display:', 'sq'); ?></label>  
		    <input id="<?php echo $this->get_field_id( 'comments_to_show' ); ?>" name="<?php echo $this->get_field_name( 'comments_to_show' ); ?>" value="<?php echo esc_attr($posts_to_show); ?>" style="wisqh:20%;" />  
		</p>  
	<?php 
	}
		
	
	//Update widget  
	function update( $new_setting, $old_setting ) {
		$setting = array();
		$setting['title'] = ( ! empty( $new_setting['title'] ) ) ? strip_tags( $new_setting['title'] ) : '';
		$setting['comments_to_show'] = ( ! empty( $new_setting['comments_to_show'] ) ) ? strip_tags( $new_setting['comments_to_show'] ) : '';
		return $setting;
	}
	
}