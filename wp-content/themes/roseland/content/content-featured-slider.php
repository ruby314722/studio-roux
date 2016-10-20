<?php 
  $sq_featured_slider_args = array( 'post_type'  => array('post', 'page'), 'posts_per_page' => -1, 'post__not_in' => get_option('sticky_posts'), 'meta_query' => array( array( 'key' => 'sq_featured', 'value' => 1, 'compare' => 'IN', ), ));
  $sq_featured_slider_query = new WP_Query($sq_featured_slider_args);
?>
<?php if($sq_featured_slider_query->have_posts()) : ?>

<div class="sq-slider-container sq-slider-loading sq-container">

	<div class="sq-slider">

		<?php while ($sq_featured_slider_query->have_posts()) : $sq_featured_slider_query->the_post(); ?>
		
			<?php get_template_part('content/loop/post', 'featured'); ?>

		<?php endwhile;?>
		
	</div><!-- .sq-slider -->

</div>
	
<?php endif; ?>
<?php wp_reset_postdata(); ?>
