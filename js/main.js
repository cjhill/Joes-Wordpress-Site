jQuery(document).ready(function($) {

    // Make navigation appear anywhere in the page

    $(window).scroll(function() {

        var scrollPos = $(window).scrollTop();

        if (scrollPos >= 130) {

            $("nav").addClass("addColor");
            $("nav").removeClass("navigation");


        } else {
        	$("nav").addClass("navigation");
            $("nav").removeClass("addColor");

        }

    });


    // Make the nav slider slide
    var navButton = $('.two .group');
    var slideNavBox = $('#slide_out_nav');

    navButton.click(function() {
        slideNavBox.toggleClass('hide_nav');
    });


});


// $(".to_the_top").css("visibility", "visible");