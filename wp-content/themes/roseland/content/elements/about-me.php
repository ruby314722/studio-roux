<article class="sq-about-me-widget">			
	
	<?php if(get_theme_mod('sq_about_me_widget_title')) : ?>
		<h3 class="sq-widget-title"><?php echo get_theme_mod('sq_about_me_widget_title', 'About me'); ?></h3>
	<?php endif; ?>
	
	<?php if(get_theme_mod('sq_about_me_widget_image')) : ?>
			<p id="sq-about-me-widget-image"><a href="<?php echo get_theme_mod('sq_about_me_widget_link'); ?>"><img src="<?php echo get_theme_mod('sq_about_me_widget_image'); ?>" alt="about-me"></a></p>
	<?php endif; ?>
		
	<div id="sq-about-me-widget-content">
		
		<?php if(get_theme_mod('sq_about_me_widget_name')) : ?>
			<p id="sq-about-me-widget-name"><?php echo get_theme_mod('sq_about_me_widget_name'); ?></p>
		<?php endif; ?>
		
		<?php if(get_theme_mod('sq_about_me_widget_bio')) : ?>
			<p id="sq-about-me-widget-bio"><?php echo get_theme_mod('sq_about_me_widget_bio'); ?></p>
		<?php endif; ?>
		
		<?php if(get_theme_mod('sq_about_me_widget_link')) : ?>
			<a href="<?php echo get_theme_mod('sq_about_me_widget_link'); ?>" id="sq-about-me-widget-link" class="sq-button"><?php echo get_theme_mod('sq_about_me_widget_link_text', 'Find out more'); ?></a>
		<?php endif; ?>
			
	</div>

</article>