"use strict";

// global variables
var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
var winW,winH;

function pageCalculations() {
    winW = $(window).width();
    winH = $(window).height();
}



function HeaderHeightMarginTop(){
	// alert("Hello! I am an alert box!!");
    // if($('#blogpage').length){
        var headerHeight = $('.header--navbar').outerHeight() + 'px';
		var headerInnerHeight = $('.header--navbar').innerHeight() + 'px';

        $('#blogpage').css({
            'margin-top' : headerHeight
        });
        $('#banner').css({
            'margin-top' : headerInnerHeight
        });
    // }
}


// DOM ready function
jQuery(document).on('ready', function () {

    (function ($) {
        

    })(jQuery);

});

// Window load function
jQuery(window).on('load', function () {
    (function ($) {
        // owlCarouselHome();
        HeaderHeightMarginTop();
   })(jQuery);
  });