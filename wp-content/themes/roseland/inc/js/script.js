/* Featured Content Slider
*********************************************************/

jQuery('.sq-slider').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  slidesToShow: 1,
  slidesToScroll: 1,
  speed: 1000,
  dots: false,
  arrows: true,
  draggable: false,
  focusOnSelect: true,
  fade: true,
});

jQuery('.sq-slider').fadeIn(600, function(){
	jQuery('.sq-slider-container').removeClass('sq-slider-loading');
});

jQuery(document).ready(function() {

	/* Post Gallery
	*********************************************************/
	  
	jQuery('.sq-post-gallery').slick({
	  dots: false,
	  arrows: true,	  
	  infinite: true,
	  speed: 500,
	  fade: true,
	  cssEase: 'linear',
	});	
	

	/* Show Menu
	*********************************************************/
	
	jQuery('#sq-toggle-menu').click(function() {
		jQuery('#sq-hamburger-menu').addClass('sq-animated');
		jQuery('.sq-overlay').fadeIn(400);	
	});
	
	jQuery('#sq-close-menu, .sq-overlay').click(function() {
		jQuery('#sq-hamburger-menu').removeClass('sq-animated');
		jQuery('.sq-overlay').fadeOut(400);	
	});	


	/* Mobile Nav
	*********************************************************/

	jQuery("#sq-hamburger-menu li").has("ul").prepend('<span class="sq-sub-menu"><i class="fa fa-angle-down"></i></span>');
	jQuery('.sq-sub-menu').click(function() {
		jQuery(this).find('i').toggleClass(' fa-angle-down');
		jQuery(this).find('i').addClass(' fa-angle-up');
		jQuery(this).parent().find('ul:first').slideToggle(300);
	});
	

	/* Toggle Search
	*********************************************************/
	
	jQuery('#sq-toggle-search').click(function(){
		
		jQuery('#sq-header .sq-search-form').toggleClass('sq-animated');				
		jQuery(this).toggleClass('fa-times');		
		jQuery('#sq-header.sq-header-option-3 #sq-main-menu').toggleClass('sq-hide');		
		
	});
	

	/* Menu
	*********************************************************/	
	
	jQuery('#sq-header #sq-main-menu').find('.menu-item.menu-item-has-children').each(function(){
        
            jQuery(this).hover(function(){
                       
                jQuery(this).find(' > .sub-menu').addClass('sq-animate');
                
            }, function(){
                
                jQuery(this).find(' > .sub-menu').removeClass('sq-animate');
                
            });
        
    });
    	
    	
	/* Scroll To Top
	*********************************************************/
	
	jQuery('#sq-back-top').click(function () {
		jQuery('body,html').animate({
			scrollTop: 0
		}, 800);
	});
	    	
	
	
});





		


