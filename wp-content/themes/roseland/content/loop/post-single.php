<article id="sq-post-<?php the_ID(); ?>" <?php post_class('sq-post-single'); ?>>
	
	
	<header class="sq-post-header sq-boxed <?php if(!has_post_thumbnail() || get_post_meta($post->ID,'sq_disable_single_post_featured_content', true) == 1) : ?>sq-no-thumbnail<?php endif; ?>">
			
		<h2 class="sq-post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>	
		
		<p class="sq-post-meta"><span class="sq-post-date"><?php the_time( get_option('date_format') ); ?></span>
		<span class="sq-post-categories"><?php the_category(', '); ?></span></p>	
	
	</header><!-- .sq-post-header -->

	<?php if(get_post_meta($post->ID,'sq_disable_single_post_featured_content', true) != 1) : ?>
		
		<?php if(has_post_thumbnail() || has_post_format('video') || has_post_format('audio') || has_post_format('gallery')) : ?>
						
				<?php sq_post_thumbnail('sq-post'); ?>				

		<?php endif; ?>
	
	<?php endif; ?>	

	<div class="sq-post-content sq-entry sq-boxed">

		<?php the_content(); ?>		
		
		<footer class="sq-post-footer">
			
			<?php if(has_tag()) : ?>
				<div id="sq-post-tags">
					<?php the_tags('', '', ''); ?>
				</div>
			<?php endif; ?>
			
			<ul class="sq-post-meta">
				<li class="sq-post-author"><?php _e('By ', 'sq'); ?><?php the_author_posts_link(); ?></li>			
				<li><?php get_template_part('content/elements/sharing', 'icons'); ?></li>
				<li><?php comments_popup_link( __( '0 Comments', 'sq' ), __( '1 Comment', 'sq' ), __( '% Comments', 'sq' ) ); ?></li>
			</ul><!-- .sq-post-meta -->	
			
		</footer><!-- .sq-post-footer -->		
	
	</div><!-- .sq-post-content -->
						
</article><!-- .sq-post -->

<?php get_template_part('content/elements/post', 'pagination'); ?>

<?php // If the author card is not disabled. ?>
<?php if(!get_theme_mod('sq_disable_author_card')) :  ?>
	<?php get_template_part('content/elements/author', 'card'); ?>
<?php endif; ?>

<?php // If the related posts are not disabled. ?>
<?php if(!get_theme_mod('sq_disable_related_posts')) : ?>
	<?php get_template_part('content/content', 'related-posts'); ?>
<?php endif; ?>