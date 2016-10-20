<?php if(!is_front_page() && !is_home() && !is_single()) : ?>
	
		<div id="sq-title-container">
		<?php if(!is_home() && !is_front_page() && !is_search() && !is_archive() & !is_404()) :?>	
				<h2 class="sq-page-title"><?php the_title(); ?></h2>
		<?php elseif(is_404()) : ?>
				<h2 class="sq-page-title"><?php _e('404', 'sq'); ?></h2>
		<?php elseif(is_archive()) : ?>
				<?php if (is_category()) : ?>
					<h2 class="sq-page-title"><?php single_cat_title(); ?></h2>
					<p><?php _e('Category', 'sq'); ?></p>
				<?php elseif( is_tag() ) : ?>
					<h2 class="sq-page-title"><?php single_tag_title(); ?></h2>
					<p><?php _e('Tag', 'sq'); ?></p>
				<?php elseif (is_day()) : ?>
					<h2 class="sq-page-title"><?php the_time(get_option( 'date_format' ));?></h2>
					<p><?php _e('Archive', 'sq'); ?></p>
				<?php elseif (is_month()) : ?>
					<h2 class="sq-page-title"><?php _e('Archive for ', 'sq'); ?><?php the_time(get_option( 'date_format' ));?></h2>
					<p><?php _e('Archive', 'sq'); ?></p>
				<?php elseif (is_year()) : ?>
					<h2 class="sq-page-title"><?php _e('Archive for ', 'sq'); ?><?php the_time(get_option( 'date_format' ));?></h2>
					<p><?php _e('Archive', 'sq'); ?></p>
				<?php elseif (is_author()) : ?>
					<h2 class="sq-page-title"><?php the_author(); ?><?php _e('\'s', 'sq'); ?></h2>
					<p><?php _e('Posts', 'sq'); ?></p>
				<?php elseif(isset($_GET['paged']) && !empty($_GET['paged'])) : ?>
					<h2 class="sq-page-title"><?php _e('Blog Archives', 'sq'); ?></h2>
				<?php endif; ?>
		<?php elseif(is_search()) : ?>
			<h2 class="sq-page-title"><?php _e('Results for "', 'sq'); ?><?php the_search_query(); ?><?php _e('"', 'sq'); ?></h2>
		<?php endif ?>
		</div>	
	
<?php endif ?>