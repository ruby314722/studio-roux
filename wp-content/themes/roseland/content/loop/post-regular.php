<article id="post-<?php the_ID(); ?>" <?php post_class('sq-post'); ?>>
	
	<header class="sq-post-header sq-boxed <?php if(!has_post_thumbnail()) : ?>sq-no-thumbnail<?php endif; ?>">
			
		<h2 class="sq-post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>	
		
		<p class="sq-post-meta">
			<span class="sq-post-date"><?php the_time( get_option('date_format') ); ?></span>
			<span class="sq-post-categories"><?php the_category(', '); ?></span>
		</p>	
	
	</header><!-- .sq-post-header -->
	
	<?php sq_post_thumbnail('sq-post'); ?>

	<div class="sq-post-content sq-entry sq-boxed">			

		<?php echo sq_excerpt(110); ?>		
	
		<footer class="sq-post-footer">
			
			<?php if(!get_theme_mod('sq_disable_read_more') ) : ?>
				<a href="<?php the_permalink(); ?>" class="sq-read-more sq-button"><?php _e('Read More', 'sq'); ?></a>
			<?php endif; ?>
			
			<ul class="sq-post-meta">
				<li class="sq-post-author"><?php _e('By ', 'sq'); ?><?php the_author_posts_link(); ?></li>							
				<li><?php get_template_part('content/elements/sharing', 'icons'); ?></li>
				<li><?php comments_popup_link( __( '0 Comments', 'sq' ), __( '1 Comment', 'sq' ), __( '% Comments', 'sq' ) ); ?></li>
			</ul><!-- .sq-post-meta -->
			
		</footer><!-- .sq-post-footer -->
	
	</div>	
						
</article><!-- .sq-post -->