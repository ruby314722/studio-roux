<?php
global $post;
$sq_related_posts = wp_get_object_terms( $post->ID, 'category', array('fields' => 'ids') );
$sq_related_posts_args = array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 3, 'orderby' => 'rand', 'tax_query' => array( array( 'taxonomy' => 'category', 'field' => 'id', 'terms' => $sq_related_posts )), 'post__not_in' => array ($post->ID), );
$sq_related_posts_query = new WP_Query( $sq_related_posts_args ); ?>
	
	<?php if(!empty($sq_related_posts)) : ?>

		<?php //If there are related posts ?>
		<?php if ($sq_related_posts_query->have_posts()) :?>

			<section class="sq-related-posts sq-boxed">
			
				<h4 class="sq-section-title"><?php _e('Related Posts', 'sq'); ?></h4>	
				
					<?php while ( $sq_related_posts_query->have_posts() ) : $sq_related_posts_query->the_post(); ?>		
		
						<?php get_template_part('content/loop/post', 'related'); ?>
		
					<?php endwhile; ?>
			
			</section><!-- .sq-related-posts-->
			
		<?php endif; ?>
		
	<?php endif;?>

<?php wp_reset_postdata(); ?>