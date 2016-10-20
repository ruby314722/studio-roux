<div id="sq-author-card" class="sq-boxed">
	
	<div class="sq-author-avatar">
		<?php echo get_avatar(get_the_author_meta('ID'), 120); ?>
	</div><!-- .sq-author-avatar -->

	<div class="sq-author-bio">
		<h4><?php _e('More about ', 'sq'); ?><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></h4>
		<p><?php the_author_meta('user_description'); ?></p>
	</div><!-- .sq-author-bio -->
	
</div><!-- #sq-author-card -->