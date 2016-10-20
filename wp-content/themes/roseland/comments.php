<?php if(comments_open() && get_comments_number()) : ?>
	
	<div id="comments" class="comments sq-boxed">
		
		<h4 class="sq-section-title"><?php _e('Comments', 'sq'); ?></h4>
		
		<ol>		
			<?php wp_list_comments( array( 'style' => 'ol', 'short_ping' => true, 'avatar_size' => 42, 'callback' => 'sq_comment_list' ) ); ?>		
		</ol>
	
	</div><!-- #comments  -->
	
	<?php if(get_comment_pages_count() > 1 && get_option( 'page_comments' )) : ?>

		<nav class="sq-pagination sq-comment-pagination">
			<?php previous_comments_link(__('Older Comments', 'sq')); ?>
			<?php next_comments_link(__('Newer Comments', 'sq')); ?>
		</nav><!-- .nav-links -->
		
	<?php endif;  ?>

<?php endif; ?>

<?php if(comments_open()) : ?>

	<div id="sq-comment-form" class="sq-comment-form sq-boxed">
		<h3 class="sq-section-title"><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>
		<?php comment_form(array( 'title_reply'=> __('', 'sq'))); ?>
	</div>
	
<?php endif; ?>