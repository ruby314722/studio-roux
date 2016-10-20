<div id="sq-content-box-container" class="sq-container">
			
			<?php // If content box one has a title and image. ?>
			<?php if(get_theme_mod('sq_content_box_one_title') || get_theme_mod('sq_content_box_one_image')) : ?>
			<article <?php post_class('sq-content-box'); ?> >
				<a href="<?php echo get_theme_mod('sq_content_box_one_link'); ?>" <?php if(get_theme_mod('sq_content_box_one_new_tab')) : echo 'target="_blank"'; endif;?>>  
					<div class="sq-content-box-header" style="background-image: url(<?php echo get_theme_mod('sq_content_box_one_image'); ?>);">										
					</div><!-- .sq-content-box-header -->
					<div class="sq-content-box-content sq-boxed">
						<h3><?php echo get_theme_mod('sq_content_box_one_title'); ?></h3>
						<p><?php echo get_theme_mod('sq_content_box_one_sub_title'); ?></p>
					</div><!-- .sq-content-box-content -->	
				</a>
			</article><!-- .sq-content-box -->
			<?php endif; ?>
			
			<?php // If content box two has a title and image. ?>
			<?php if(get_theme_mod('sq_content_box_two_title') || get_theme_mod('sq_content_box_two_image')) : ?>
			<article <?php post_class('sq-content-box'); ?> >
				<a href="<?php echo get_theme_mod('sq_content_box_two_link'); ?>" <?php if(get_theme_mod('sq_content_box_two_new_tab')) : echo 'target="_blank"'; endif;?>>
					<div class="sq-content-box-header" style="background-image: url(<?php echo get_theme_mod('sq_content_box_two_image'); ?>);">					
					</div><!-- .sq-content-box-header -->
					<div class="sq-content-box-content sq-boxed">						
						<h3><?php echo get_theme_mod('sq_content_box_two_title'); ?></h3>
						<p><?php echo get_theme_mod('sq_content_box_two_sub_title'); ?></p>
					</div><!-- .sq-content-box-content -->
				</a>
			</article><!-- .sq-content-box -->
			<?php endif; ?>
			
			<?php // If content box three has a title and image. ?>
			<?php if(get_theme_mod('sq_content_box_three_title') || get_theme_mod('sq_content_box_three_image')) : ?>
			<article <?php post_class('sq-content-box'); ?> >
				<a href="<?php echo get_theme_mod('sq_content_box_three_link'); ?>" <?php if(get_theme_mod('sq_content_box_three_new_tab')) : echo 'target="_blank"'; endif;?>>  
					<div class="sq-content-box-header" style="background-image: url(<?php echo get_theme_mod('sq_content_box_three_image'); ?>);">					    
					</div><!-- .sq-content-box-header -->
					<div class="sq-content-box-content sq-boxed">				
						<h3><?php echo get_theme_mod('sq_content_box_three_title'); ?></h3>
						<p><?php echo get_theme_mod('sq_content_box_three_sub_title'); ?></p>				
					</div><!-- .sq-content-box-content -->					
				</a>
			</article><!-- .sq-content-box -->
			<?php endif; ?>	

</div><!-- #sq-content-box-container -->