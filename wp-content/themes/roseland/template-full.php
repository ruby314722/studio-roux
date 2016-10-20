<?php 
/*
Template Name: Full Width
*/
?>
<?php get_header(); the_post(); ?>	

<?php get_template_part('content/elements/post', 'banner'); ?>

<div class="sq-container">	

	<section <?php post_class('sq-page-full sq-boxed'); ?>>
		
		<?php get_template_part( 'content/content', 'page' ); ?>
		
	</section>

</div>
	
<?php get_footer(); ?>
