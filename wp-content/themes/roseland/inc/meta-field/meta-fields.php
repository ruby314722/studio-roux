<?php
function sq_add_meta_box() {

	$screens = array( 'post', 'page' );
	foreach ( $screens as $screen ) {
		add_meta_box( 'sq_sectionid', __( 'Post Options', 'sq' ), 'sq_meta_box_content', $screen, 'side', 'high');
	}
	
}
add_action( 'add_meta_boxes', 'sq_add_meta_box' );

function sq_meta_box_content( $post ) {
	
	global $post_type;

	wp_nonce_field( 'sq_save_data', 'sq_meta_box_nonce' );

	$sq_featured_value = get_post_meta( $post->ID, 'sq_featured', true );
	$sq_disable_featured_content_value = get_post_meta( $post->ID, 'sq_disable_single_post_featured_content', true );
	$sq_disable_single_post_sidebar_value = get_post_meta( $post->ID, 'sq_disable_single_post_sidebar', true );
	$sq_center_single_post_value = get_post_meta( $post->ID, 'sq_center_single_post', true );	
	
	//Add to featured content slider
	echo '<p><b><label>' . __('In Featured Slider? ', 'sq') . '</label></b>';
	echo '<select id="sq_featured" name="sq_featured" />';	
		     echo'<option  value="0"'; if(esc_attr( $sq_featured_value ) == 0) : echo'selected'; endif; echo'>' . __('No', 'sq') . '</option>';
		     echo'<option value="1"'; if(esc_attr( $sq_featured_value ) == 1) : echo'selected'; endif; echo'>' . __('Yes', 'sq') . '</option>';		
	echo '</select></p>';
	echo '<p for="sq_featured"><i>';
	_e( 'Select "Yes" above to display this post / page in the featured slider.', 'sq' );
	echo '</i></p> ';
	
		
	if( 'post' == $post_type ) : 
	
		echo '<hr/>';
	
		//Add to featured content slider
		echo '<p><b><label>' . __('Disable Featured Content? ', 'sq') . '</label></b>';
		echo '<select id="sq_disable_single_post_featured_content" name="sq_disable_single_post_featured_content" />';	
			     echo'<option  value="0"'; if(esc_attr( $sq_disable_featured_content_value ) == 0) : echo'selected'; endif; echo'>' . __('No', 'sq') . '</option>';
			     echo'<option value="1"'; if(esc_attr( $sq_disable_featured_content_value ) == 1) : echo'selected'; endif; echo'>' . __('Yes', 'sq') . '</option>';		
		echo '</select></p>';
		echo '<p for="sq_disable_single_post_featured_content"><i>';
		_e( 'Disable the featured content for this post on the single post page.', 'sq' );
		echo '</i></p> ';
		
		//Disable Sidebar
		echo '<p><b><label>' . __('Disable Sidebar? ', 'sq') . '</label></b>';
		echo '<select id="sq_disable_single_post_sidebar" name="sq_disable_single_post_sidebar" />';	
			     echo'<option  value="0"'; if(esc_attr( $sq_disable_single_post_sidebar_value ) == 0) : echo'selected'; endif; echo'>' . __('No', 'sq') . '</option>';
			     echo'<option value="1"'; if(esc_attr( $sq_disable_single_post_sidebar_value ) == 1) : echo'selected'; endif; echo'>' . __('Yes', 'sq') . '</option>';		
		echo '</select></p>';
		echo '<p for="sq_disable_single_post_sidebar"><i>';
		_e( 'Disable sidebar for this post', 'sq' );
		echo '</i></p> ';
		
		//Center Single Post
		echo '<p><b><label>' . __('Center Post? ', 'sq') . '</label></b>';
		echo '<select id="sq_center_single_post" name="sq_center_single_post" />';	
			     echo'<option  value="0"'; if(esc_attr( $sq_center_single_post_value ) == 0) : echo'selected'; endif; echo'>' . __('No', 'sq') . '</option>';
			     echo'<option value="1"'; if(esc_attr( $sq_center_single_post_value ) == 1) : echo'selected'; endif; echo'>' . __('Yes', 'sq') . '</option>';		
		echo '</select></p>';
		echo '<p for="sq_center_single_post"><i>';
		_e( 'Disable sidebar for this post', 'sq' );
		echo '</i></p> ';	

	endif;
	
	
}

function sq_save_data( $post_id ) {

	if ( ! isset( $_POST['sq_meta_box_nonce'] ) ) : return; endif;

	if ( ! wp_verify_nonce( $_POST['sq_meta_box_nonce'], 'sq_save_data' ) ) : 
		return; 
	endif;

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) : 
		return; 
	endif;

	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) :
		if ( ! current_user_can( 'edit_page', $post_id ) ) : 
			return; 
		endif;
	else :
		if ( ! current_user_can( 'edit_post', $post_id ) ) : 
			return; 
		endif;
	endif;


	$sq_featured_data = sanitize_text_field( $_POST['sq_featured'] );
	$sq_disable_featured_content_data = sanitize_text_field( $_POST['sq_disable_single_post_featured_content'] );
	$sq_disable_single_post_sidebar_data = sanitize_text_field( $_POST['sq_disable_single_post_sidebar'] );
	$sq_center_single_post_data = sanitize_text_field( $_POST['sq_center_single_post'] );
	
	update_post_meta( $post_id, 'sq_featured', $sq_featured_data );
	update_post_meta( $post_id, 'sq_disable_single_post_featured_content', $sq_disable_featured_content_data );
	update_post_meta( $post_id, 'sq_disable_single_post_sidebar', $sq_disable_single_post_sidebar_data );
	update_post_meta( $post_id, 'sq_center_single_post', $sq_center_single_post_data );
	
	
}
add_action( 'save_post', 'sq_save_data' );