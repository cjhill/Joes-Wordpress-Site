jQuery(document).ready(function($) {
	
	// Make navigation appear anywhere in the page
	var navOffset = $("nav").offset().top;

	$(window).scroll(function(){

		var scrollPos = $(window).scrollTop();
		var aboutOffset = $("#about").offset().top;

		if(scrollPos >= aboutOffset - 80) {
			$("nav").fadeIn("slow", function() {
			    $(this).addClass("addColor");
			});
		} else {
			$("nav").removeClass("addColor");
		}

	});


	// Make the nav slider slide
	var navButton = $('.menu_btn');
	var slideNavBox = $('#slide_out_nav');

	navButton.click(function(){
		slideNavBox.toggleClass('hide_nav');
	});

	
});