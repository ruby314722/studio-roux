<?php 
function sq_customizer_output_css(){ ?>
	
	<style type="text/css">											
		
		<?php if(get_theme_mod('sq_blog_sidebar_position')) : ?>
			.sq-sidebar { 
					float: left; 
			}
			.sq-content { 
					float:right; 				
			}
		<?php else : ?>
			.sq-sidebar{ 
					float: right; 
			}
			.sq-content { 
					float:left; 
			}
		<?php endif; ?>
		
		
		a {
		    color: <?php echo get_theme_mod('sq_link_color'); ?>;
		}	
		
		#sq-header {
		    background-color: <?php echo get_theme_mod('sq_header_color'); ?>;
		}
		
		#sq-header #sq-main-menu a,
		#sq-header #sq-main-menu ul > li.menu-item-has-children,
		#sq-header #sq-main-menu ul > li.page_item_has_children,
		#sq-toggle-mobile-nav {
		    color: <?php echo get_theme_mod('sq_menu_link_color'); ?>;
		}
		
		#sq-header #sq-main-menu .current_page_item > a,
		#sq-header #sq-main-menu .current-menu-parent > a,
		#sq-header #sq-main-menu .current-menu-item > a,
		#sq-header #sq-main-menu .current_page_ancestor > a {
		    color: <?php echo get_theme_mod('sq_primary_color'); ?>;
		}			
		
		.sq-post-categories a {
			color: <?php echo get_theme_mod('sq_primary_color'); ?>;
		}
		
		.sq-post-meta .sq-post-author a {
			color: <?php echo get_theme_mod('sq_primary_color'); ?>;
		}
		
		.sq-widget-title {
			background: <?php echo get_theme_mod('sq_widget_title_color'); ?>;
		}

  	</style>

    <?php
}
add_action( 'wp_head', 'sq_customizer_output_css' );