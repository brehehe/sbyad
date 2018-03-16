var b = jQuery(".main-header-wrapper").offset().top;
jQuery(window).on("load scroll", function () {
	var c = jQuery(this).scrollTop();
	console.log("b = " + b);
	console.log("c = " + c);
	if (c > b) {
		// jos
		// jQuery("#main-header-wrapper").removeClass('bgtrp');
		// jQuery("#main-header-wrapper").addClass('bgorg');
		jQuery("#main-header-wrapper").css({background: '#333'})
	} else {
		// jQuery("#main-header-wrapper").removeClass('bgorg');
		// jQuery("#main-header-wrapper").addClass('bgtrp');
		jQuery("#main-header-wrapper").css({background: 'transparent'})
	}
})