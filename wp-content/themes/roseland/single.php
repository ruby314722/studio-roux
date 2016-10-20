<?php get_header(); ?>

<div class="sq-container <?php if(get_post_meta($post->ID, 'sq_disable_single_post_sidebar', true) == 1) : ?>sq-post-single-no-sidebar<?php endif;?> ">



<?php if(get_post_meta($post->ID, 'sq_disable_single_post_sidebar', true) != 1) : ?>

	<div class="sq-content">
		
<?php endif; ?>

<?php if(get_post_meta($post->ID, 'sq_center_single_post', true) == 1) : ?>
	<div class="sq-page-centered sq-single-post-centered">
<?php endif; ?>
		
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content/loop/post', 'single' ); ?>
			
			<?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>

		<?php endwhile; ?>
		
<?php if(get_post_meta($post->ID, 'sq_center_single_post', true) == 1) : ?>
	</div>
<?php endif; ?>		
			
	
<?php if(get_post_meta($post->ID, 'sq_disable_single_post_sidebar', true) != 1) : ?>	

	</div><!-- .sq-content -->

	<?php get_sidebar(); ?>

<?php endif; ?>

</div><!-- .sq-container -->

<?php get_footer(); ?>
