//@codekit-prepend "gravityforms.js"
//@codekit-prepend "jquery.placeholders.2.1.1.min.js"
//@codekit-prepend "jquery.json-1.3.js"
//@codekit-prepend "jquery.localscroll-1.2.7-min.js"
//@codekit-prepend "jquery.scrollTo-1.4.3.1-min.js"
//@codekit-prepend "modal.js"
//@codekit-prepend "transition.js"
//@codekit-prepend "jquery.flexslider-min.js"

function isMobile() {
    return (
    (navigator.userAgent.match(/Android/i)) ||
    (navigator.userAgent.match(/webOS/i)) ||
    (navigator.userAgent.match(/iPhone/i)) ||
    (navigator.userAgent.match(/iPod/i)) ||
    (navigator.userAgent.match(/iPad/i)) ||
    (navigator.userAgent.match(/BlackBerry/))
    );
}


/* Navigation */
var showSidebar = function() {
	jQuery('body').removeClass("active-nav").toggleClass("active-sidebar");
	jQuery('.menu-button').removeClass("active-button");					
	jQuery('.sidebar-button').toggleClass("active-button");
}

var showMenu = function() {
	jQuery('body').removeClass("active-sidebar").toggleClass("active-nav");
	jQuery('.sidebar-button').removeClass("active-button");				
	jQuery('.menu-button').toggleClass("active-button");	
}

// add/remove classes everytime the window resize event fires
jQuery(window).resize(function(){
	var off_canvas_nav_display = jQuery('.off-canvas-navigation').css('display');
	var menu_button_display = jQuery('.menu-button').css('display');
	if (off_canvas_nav_display === 'block') {			
		jQuery("body").removeClass("three-column").addClass("small-screen");				
	} 
	if (off_canvas_nav_display === 'none') {
		jQuery("body").removeClass("active-sidebar active-nav small-screen")
			.addClass("three-column");			
	}	
	
});	

jQuery(document).ready(function(jQuery) {
		// Toggle for nav menu
		jQuery('.menu-button').click(function(e) {
			e.preventDefault();
			showMenu();							
		});	
		// Toggle for sidebar
		jQuery('.sidebar-button').click(function(e) {
			e.preventDefault();
			showSidebar();									
		});							
});

/* Flexslider */
jQuery(document).ready(function(jQuery) {
    jQuery('.flexslider').flexslider();
});


    jQuery(window).scroll(function() {
    	var scrollPosition = jQuery(this).scrollTop();
		if (scrollPosition >= '400'){
			jQuery('body').addClass('scrolled');
		} else {
			jQuery('body').removeClass('scrolled');
		}
          jQuery('.case-study-hero').css({
            //'margin-top' : -(scrollPosition/2)+"px",
            //'opacity' : 1-(scrollPosition/300),
            //'transform' : 'rotate:('+ 1-(scrollPosition/300) + ')'
          });
	}); 
