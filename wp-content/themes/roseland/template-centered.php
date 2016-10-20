<?php 
/*
Template Name: Centered
*/ 
?>
<?php get_header(); the_post(); ?>

<?php get_template_part('content/elements/post', 'banner'); ?>

<div class="sq-container">

	<section <?php post_class('sq-page-centered sq-boxed'); ?>>
		
		<?php get_template_part( 'content/content', 'page' ); ?>

	</section><!-- .sq-page-centered -->

</div>
	
<?php get_footer(); ?>
