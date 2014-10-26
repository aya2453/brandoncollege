/* ==========================================================
  Base Default JavaScript
  -- Table of Contents --
*/


//Header Menu
var ww = document.body.clientWidth;

$(document).ready(function() {
	$(".globalnav li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})
	
	$(".menu-button").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".globalnav").toggle();
	});
	adjustMenu();
})

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 768) {
		$(".menu-button").css("display", "inline-block");
		if (!$(".menu-button").hasClass("active")) {
			$(".globalnav").hide();
		} else {
			$(".globalnav").show();
		}
		$(".globalnav li").unbind('mouseenter mouseleave');
		$(".globalnav li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
	} 
	else if (ww >= 768) {
		$(".menu-button").css("display", "none");
		$(".globalnav").show();
		$(".globalnav li").removeClass("hover");
		$(".globalnav li a").unbind('click');
		$(".globalnav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	$(this).toggleClass('hover');
		});
	}
}


// Testimonials
$(document).ready(function(){
  $('.testimonials-slider-wrap').bxSlider();
});