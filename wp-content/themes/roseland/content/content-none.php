
<div class="sq-boxed">

<?php if(is_home() && current_user_can( 'publish_posts' )) : ?>

	<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'sq' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

<?php elseif(is_search()) : ?>

	<header class="sq-page-header">
			<h3><?php _e('Nothing Found', 'sq'); ?></h3>
	</header><!-- .sq-page-header -->
	
	<p><?php _e('Sorry, but nothing was found. Please try again with some different keywords.', 'sq'); ?></p>
	<?php get_search_form(); ?>

<?php else : ?>

	<h2><?php _e('404', 'sq'); ?></h2>

	<p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'sq'); ?></p>
	<?php get_search_form(); ?>

<?php endif; ?>

</div>