<li>
<article id="post-<?php the_ID(); ?>" <?php post_class('sq-post'); ?>>
		
	<header class="sq-post-header sq-boxed <?php if(!has_post_thumbnail()) : ?>sq-no-thumbnail<?php endif; ?>">
			
		<h2 class="sq-post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>			
	
		<p class="sq-post-meta"><span class="sq-post-date"><?php the_time( get_option('date_format') ); ?></span>
		<span class="sq-post-categories"><?php the_category(', '); ?></span></p>
	
	</header><!-- .sq-post-header -->
	
	<?php sq_post_thumbnail('sq-post-grid'); ?>

	<div class="sq-post-content sq-entry sq-boxed">
				
		<?php echo sq_excerpt(28); ?>
	
	<footer class="sq-post-footer">
	
		<a href="<?php the_permalink(); ?>" class="sq-read-more sq-button"><?php _e('Read More', 'sq'); ?></a>
		
	</footer><!-- .sq-post-footer -->
	
	</div>
	
							
</article>
</li>