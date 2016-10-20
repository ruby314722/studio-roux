<?php
require_once('recent-posts.php');
require_once('recent-comments.php');
require_once('connect.php');

function sq_widgets() {
	register_widget('sq_recent_posts');
	register_widget('sq_recent_comments');
	register_widget('sq_connect');
}
add_action( 'widgets_init', 'sq_widgets' );