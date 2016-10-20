<?php if(is_single()) : ?>

	<?php if(!get_theme_mod('sq_disable_single_post_pagination')) : ?>
	
		<div class="sq-pagination">
			<?php previous_post_link('%link', 'Previous Post'); ?>
			<?php next_post_link('%link','Next Post'); ?>
		</div>
	
	<?php endif; ?>

<?php else : ?>

	<nav class="sq-post-pagination">	
		<div class="sq-older"><?php next_posts_link(__('Older Posts', 'sq')); ?></div>
		<div class="sq-newer"><?php previous_posts_link(__('Newer Posts', 'sq')); ?></div>	
	</nav>
<?php endif; ?>