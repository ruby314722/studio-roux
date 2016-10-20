<form action="<?php echo site_url(); ?>" class="sq-search-form <?php if(get_theme_mod('sq_alternative_header')) : ?> sq-alternative-header<?php endif; ?>" method="get">
	<label class="screen-reader-text" for="s"><?php _e('Search...', 'sq'); ?></label>
    <input type="search" class="s" name="s" placeholder="<?php _e('Type to search...', 'sq'); ?>" required />
    <button type="submit" class="sq-search-submit" value=""><i class="fa fa-search"></i></button>
</form><!-- .sq-search-form -->