<?php // If the sharing icons are not disabled. ?>
<?php if(!get_theme_mod('sq_disable_single_post_sharing_icons')) :  ?>

<ul class="sq-post-sharing-buttons">
	
	<?php $sq_the_title = str_replace(' ', '%20', get_the_title());	?>
	<?php $sq_the_permalink = str_replace(' ', '%20', get_the_permalink());	?>
							
	<li><a href="http://twitter.com/home&quest;status=<?php echo $sq_the_title; ?>&plus;<?php the_permalink(); ?>" class="sq-twitter" onclick="window.open(this.href, 'mywin','left=50,top=50,width=800,height=500,toolbar=0'); return false;"><i class="fa fa-twitter" ></i></a></li>
	<li><a href="http://www.facebook.com/share.php&quest;u=<?php echo $sq_the_permalink; ?>/&amp;title=<?php echo $sq_the_title; ?>" class="sq-facebook" onclick="window.open(this.href, 'mywin','left=50,top=50,width=800,height=500,toolbar=0'); return false;"><i class="fa fa-facebook"></i></a></li>
	<li><a href="https://www.linkedin.com/shareArticle&quest;mini=true&amp;url=<?php echo $sq_the_permalink; ?>&amp;title=<?php echo $sq_the_title; ?>&amp;summary=&amp;source=<?php home_url(); ?>" class="sq-linkedin" onclick="window.open(this.href, 'mywin','left=50,top=50,width=800,height=500,toolbar=0'); return false;"><i class="fa fa-linkedin"></i></a></li>
	<li><a href="https://plus.google.com/share&quest;url=<?php echo $sq_the_permalink; ?>" class="sq-google-plus" onclick="window.open(this.href, 'mywin','left=50,top=50,width=800,height=500,toolbar=0'); return false;"><i class="fa fa-google-plus"></i></a></li>
</ul> 

<?php endif; ?>