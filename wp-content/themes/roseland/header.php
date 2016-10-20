<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<?php // If favicon is set ?>
	<?php if(get_theme_mod('sq_favicon')) : ?>
		<link rel="shortcut icon" href="<?php echo get_theme_mod('sq_favicon'); ?>" />
	<?php endif; ?>	
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
	
</head>

<body <?php body_class('sq-body'); ?>>	

<?php // Hamburger menu (alternative header and responsive) ?>															
<?php get_template_part('content/elements/header', 'hamburger'); ?>
		
<header id="sq-header" class="<?php if(get_theme_mod('sq_header_option')) : echo get_theme_mod('sq_header_option'); endif; ?><?php if(get_theme_mod('sq_disable_slider') && is_front_page() && is_home() ) : ?>sq-header-slider-disabled<?php endif; ?>">			
			
		<?php if(get_theme_mod('sq_header_option') != 'sq-header-option-2' && get_theme_mod('sq_header_option') != 'sq-header-option-3' && get_theme_mod('sq_header_option') != 'sq-header-option-4' ) : ?>		
			<?php if(!get_theme_mod('sq_alternative_header') ) : ?>
				<nav id="sq-main-menu" <?php if(get_theme_mod('sq_disable_header_search')) : ?>class="sq-header-search-disabled"<?php endif; ?>>
					<div><?php wp_nav_menu( array( 'theme_location' => 'main') ); ?></div>
				</nav><!-- #sq-site-nav -->					
			<?php endif; ?>		
		<?php endif; ?>																		
						
		<div class="sq-container">
						
			<div id="sq-site-logo">
					
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-site-name="<?php bloginfo('name'); ?>" data-site-description="<?php bloginfo('description'); ?>">		
					<?php // If logo is set ?>
					<?php if(get_theme_mod('sq_logo')) : ?>
						<figure><img src="<?php echo get_theme_mod('sq_logo'); ?>" alt="logo" /></figure>							
					<?php else : ?>
						<h1 id="sq-site-name"><?php bloginfo( 'name' ); ?></h1>
					<?php endif; ?>								
				</a>
						
			</div><!-- sq-site-logo -->
			
			<?php if(get_theme_mod('sq_header_option') != 'sq-header-option-3' &&  get_theme_mod('sq_header_option') != 'sq-header-option-4') : ?>
				
				<?php if(!get_theme_mod('sq_disable_header_social_icons')) : ?>
					<?php get_template_part('content/elements/social', 'icons'); ?>
				<?php endif; ?>				
				
			<?php endif; ?>
														
			<div id="sq-toggle-menu" class="sq-hamburger-icon <?php if(get_theme_mod('sq_disable_header_search')) : ?>sq-header-search-disabled<?php endif; ?>">
				<i></i>
				<i></i>
				<i></i>
			</div><!-- #sq-toggle-menu -->
			
			<?php if(!get_theme_mod('sq_disable_header_search') ) : ?>				
				<?php if(get_theme_mod('sq_header_option') != 'sq-header-option-4' ) : ?>
					<i id="sq-toggle-search" class="fa fa-search"></i>
				<?php endif; ?>
				<?php get_search_form(); ?>																					
			<?php endif; ?>
			
			<?php if(get_theme_mod('sq_header_option') == 'sq-header-option-3' ) : ?>		
				<?php if(!get_theme_mod('sq_alternative_header') ) : ?>
					<nav id="sq-main-menu" <?php if(get_theme_mod('sq_disable_header_search')) : ?>class="sq-header-search-disabled"<?php endif; ?>>
						<div><?php wp_nav_menu( array( 'theme_location' => 'main') ); ?></div>
					</nav><!-- #sq-site-nav -->					
				<?php endif; ?>		
			<?php endif; ?>				
							
		</div><!-- .sq-container -->
		
		<?php if(get_theme_mod('sq_header_option') != 'sq-header-option-1' && get_theme_mod('sq_header_option') != 'sq-header-option-3' && get_theme_mod('sq_header_option') != 'sq-header-option-4' && get_theme_mod('sq_header_option') == 'sq-header-option-2'  ) : ?>		
			<?php if(!get_theme_mod('sq_alternative_header') ) : ?>
				<nav id="sq-main-menu" <?php if(get_theme_mod('sq_disable_header_search')) : ?>class="sq-header-search-disabled"<?php endif; ?>>
					<div><?php wp_nav_menu( array( 'theme_location' => 'main') ); ?></div>
				</nav><!-- #sq-site-nav -->	
			<?php endif; ?>		
		<?php endif; ?>				
		
</header><!-- #sq-header -->

<?php get_template_part('content/elements/page', 'title'); ?>	
			
<div id="sq-content-container" class="<?php if(get_theme_mod('sq_disable_sidebar')) :  ?>sq-no-sidebar<?php endif; ?>">	
	
<?php if(is_front_page() || is_home() ) : ?>
	<?php if(!get_theme_mod('sq_disable_slider')) : ?>
			<?php get_template_part('content/content', 'featured-slider'); ?>
	<?php endif; ?>
	
	<?php if(!get_theme_mod('sq_display_content_boxes')) : ?> 
			<?php get_template_part('content/content', 'boxes'); ?> 
	<?php endif; ?>
	
<?php endif; ?>	