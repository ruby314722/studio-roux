<?php 
$sq_featured_thumb_url_data = wp_get_attachment_image_src(get_post_thumbnail_id(), 'sq-slider', true);
$sq_featured_thumb_url = $sq_featured_thumb_url_data[0];	
?>
<div <?php post_class(); ?> >
   
   <div class="sq-slide-img" style="background-image: url(<?php echo $sq_featured_thumb_url; ?>);"></div>
   
   <div class="sq-slider-content-container">				 
		
		<div class="sq-slider-content">
			
			<h1 class="sq-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			
			<?php if(get_post_type() != 'page') : ?>
				<p class="sq-post-meta"><span class="sq-post-date"><?php the_time( get_option('date_format') ); ?></span>
				<span class="sq-post-categories"><?php the_category(', '); ?></span></p>
			<?php endif; ?>	
			
			<?php if(!get_theme_mod('sq_disable_read_more') ) : ?>
				<a href="<?php the_permalink(); ?>" class="sq-button"><?php _e('Read More', 'sq'); ?></a>
			<?php endif; ?>	

			
		</div><!-- #sq-slider-content -->
		
	</div><!-- #sq-slider-content-container -->
		
</div>