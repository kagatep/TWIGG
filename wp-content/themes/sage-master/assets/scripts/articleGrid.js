$(document).ready(function() { 

	// var $children = $('body.category').find('.article');
	// for(var i = 0, l = $children.length; i < l; i += 3) {
	//     $children.slice(i, i+3).wrapAll('<div class="categoryRow row"></div>');
	// }

	$('.categoryRow').each(function() {
		if($(this).find('.format-video').length > 0) {
			$(this).find('.article').removeClass('col-sm-4 col-md-4');
			$(this).find('.article').addClass('col-sm-3 col-md-3');
			$(this).find('.format-video').first().parents('.article').addClass('col-sm-6 col-md-6');
		} 
		// else {
		// 	$(this).find('article').addClass('col-sm-4 col-md-4');
		// }
	});


});