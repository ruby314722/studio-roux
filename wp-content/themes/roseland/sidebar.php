<?php
if ( !is_active_sidebar( 'sidebar-1' ) ) : return; endif; ?>

<aside class="sq-sidebar">
	
	<?php if(get_theme_mod('sq_enable_about_me_widget')) : ?>
		<?php get_template_part('content/elements/about', 'me'); ?>
	<?php endif; ?>
	
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	
</aside><!-- .sq-sidebar -->
