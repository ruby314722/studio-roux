<article id="post-<?php the_ID(); ?>" <?php post_class('sq-post sq-post-list sq-post-list-circle sq-boxed'); ?>>

	<?php if(has_post_thumbnail()) : ?>
		<header class="sq-post-header">
			<?php sq_post_thumbnail('sq-post-list-circle'); ?>
		</header><!-- .sq-post-header -->
	<?php endif; ?>

	<div class="sq-post-content sq-entry <?php if(!has_post_thumbnail()) : ?>sq-no-thumbnail<?php endif; ?>">
		
		<h2 class="sq-post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>	
	
		<p class="sq-post-meta"><span class="sq-post-date"><?php the_time( get_option('date_format') ); ?></span>
		<span class="sq-post-categories"><?php the_category(', '); ?></span></p>

		<?php echo sq_excerpt(38); ?>	
	
		<footer class="sq-post-footer">
			
			<div class="sq-post-meta">
			
				<?php get_template_part('content/elements/sharing', 'icons'); ?>
				
				<?php if(!get_theme_mod('sq_disable_read_more') ) : ?>
					<a href="<?php the_permalink(); ?>" class="sq-read-more sq-button"><?php _e('Read More', 'sq'); ?></a>
				<?php endif; ?>
			
			</div>
			
		</footer><!-- .sq-post-footer -->
	
	</div>
										
</article>