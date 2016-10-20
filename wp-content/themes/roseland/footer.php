
	</div><!-- #sq-content-container-->
		
	<div id="sq-footer-container">
	
		
		<footer id="sq-footer" class="sq-container">												
			
			<?php if(get_theme_mod('sq_footer_subscribe')) : ?>
				<?php echo do_shortcode('[mc4wp_form]'); ?>	
			<?php endif; ?>
			
			<?php if(!get_theme_mod('sq_footer_instagram')) : ?>
				<div id="sq-footer-instagram">
					<?php dynamic_sidebar( 'footer-instagram' ); ?>
				</div><!-- #sq-footer-instagram -->	
			<?php endif; ?>							

			<div id="sq-lower-footer">	
				
					<p id="sq-copyright"><?php echo '&copy; ' . get_bloginfo('name') . ', ' . date('Y'); ?>
					
					<?php // If the footer credits option is not disabled. ?>	
					<?php if(!get_theme_mod('sq_footer_credits')) : ?>
						&nbsp;<a href="http://sculptureqode.com"><span id="sq-footer-credit">&#124;&nbsp;<?php _e(' Created with &nbsp;', 'sq'); ?><i class="fa fa-heart"></i><?php _e('&nbsp; by Sculpture Qode', 'sq'); ?></span></a>
					<?php endif; ?>
					
					</p><!-- #sq-copyright -->				
					
					<i id="sq-back-top" class="fa fa-angle-double-up"></i>
			
			</div>
		
		</footer><!-- #sq-footer -->
		
		
	</div><!-- #sq-footer-container -->	

<?php wp_footer(); ?>

</body>
</html>
