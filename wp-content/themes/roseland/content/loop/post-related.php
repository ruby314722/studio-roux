<article id="post-<?php the_ID(); ?>" <?php post_class('sq-post sq-related-post'); ?>>
		
	<header class="sq-post-header">

		<?php sq_post_thumbnail('sq-post-related'); ?>

	</header><!-- .sq-post-header -->
	
	<footer class="sq-post-footer">
		
		<h5 class="sq-post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h5>	
		
		<p class="sq-post-date"><?php the_time( get_option('date_format') ); ?></p>
		
	</footer><!-- .sq-post-footer -->
	
</article><!-- .sq-related-post -->