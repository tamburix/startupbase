jQuery(document).ready(function ($) {

	/*if($('#slider').length > 0) {
		$('#slider').nivoSlider({
	        effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
	        slices: 15, // For slice animations
	        boxCols: 8, // For box animations
	        boxRows: 4, // For box animations
	        animSpeed: 500, // Slide transition speed
	        pauseTime: 3000, // How long each slide will show
	        startSlide: 0, // Set starting Slide (0 index)
	        directionNav: false, // Next & Prev navigation
	        controlNav: false, // 1,2,3... navigation
	        controlNavThumbs: false, // Use thumbnails for Control Nav
	        pauseOnHover: false, // Stop animation while hovering
	        manualAdvance: false, // Force manual transitions
	        randomStart: false // Start on a random slide
	    });
	}*/

	if($('.colorbox').length > 0) {
		$('.colorbox').colorbox({rel:'gallery'});
	}

	$('#menu ul li.children').hover(function(){
		$(this).toggleClass('hover');
	});

	$('#gallery ul li:nth-child(3n+3)').addClass('last-in-row');

/*--- Every List classes First and Last ---*/

	$('ul').each(function(){
		$(this).find('li').first().addClass('first');
		$(this).find('li').last().addClass('last');
	});

/*--- Custom Select ---*/

	$('select').change(function() {
		var selectedOption = $(this).children('option:selected').text();
		$(this).siblings('.take-text').text(selectedOption);
	}).trigger('change');

/*--- Custom Radio ---*/

	/*$('.custom-radio').on('click', function() {
		$(this).siblings('input[type="radio"]').trigger('click');
		$(this).parent().parent().parent().find('.custom-radio').removeClass('checked');
		$(this).parent().parent().parent().find('input[type="radio"]').removeAttr("checked");
		$(this).addClass('checked');
		if ($('.custom-radio').hasClass('checked')) {
			$(this).siblings('input[type="radio"]').attr("checked", "checked");
		}
	});

	$('.radio-wrap label').on('click', function() {
		$(this).siblings('.custom-radio').trigger('click');
	});*/

});