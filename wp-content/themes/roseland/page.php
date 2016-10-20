<?php get_header(); ?>

<?php get_template_part('content/elements/post', 'banner'); ?>

<div class="sq-container">

	<section <?php post_class('sq-content sq-boxed'); ?>>
			
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content/content', 'page' ); ?>							

			<?php endwhile; ?>
			
	</section><!-- .sq-content -->

<?php get_sidebar('page'); ?>

</div><!-- .sq-container -->

<?php get_footer(); ?>
