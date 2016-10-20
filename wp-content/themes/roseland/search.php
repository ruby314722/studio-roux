<?php get_header(); ?>

<div class="sq-container">

<?php // If sidebar is not disabled ?>
<?php if(!get_theme_mod('sq_display_sidebar') ) :   ?>
	<main class="sq-content">	
<?php endif;  ?>
		
		<?php if(get_theme_mod('sq_archive_style') == 'grid' || get_theme_mod('sq_archive_style') == 'full_width_then_grid') : ?>
			<ul class="sq-post-grid">
		<?php endif; ?>

		<?php // If there are posts to display ?>
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>			
	
			<?php // Selecting the template part for the blog style chosen in the customizer. ?>
			<?php if(get_theme_mod('sq_archive_style') == 'full_width_then_grid') : 
						if( $wp_query->current_post == 0 && !is_paged() ) :
							get_template_part('content/loop/post', 'regular');
						else :
							get_template_part('content/loop/post', 'grid');
						endif;
					elseif(get_theme_mod('sq_archive_style') == 'list') : 
							get_template_part( 'content/loop/post', 'list' );
					elseif(get_theme_mod('sq_archive_style') == 'list-circle') : 
							get_template_part( 'content/loop/post-list', 'circle' );							 			
					elseif(get_theme_mod('sq_archive_style') == 'grid') : 
							get_template_part( 'content/loop/post', 'grid' ); 
					else :
							get_template_part( 'content/loop/post', 'regular' );
					endif; ?>

			<?php endwhile; ?>
			
		<?php else : ?>
	
			<?php // No posts to display. ?>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		
		<?php if(get_theme_mod('sq_archive_style') == 'grid' ||get_theme_mod('sq_archive_style') == 'full_width_then_grid') : ?>
			</ul><!-- .sq-post-grid -->
		<?php endif; ?>
		
		<?php get_template_part('content/elements/post', 'pagination'); ?>

<?php // If sidebar is not disabled  ?>
<?php if(!get_theme_mod('sq_display_sidebar') ) :  ?>
	</main><!-- .sq-content -->
<?php endif; ?>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
