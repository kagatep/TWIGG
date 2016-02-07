$(document).ready(function() {
	$('.home-slider').slick({
		nextArrow: $('.next'),
		prevArrow: $('.prev'),
		dots: true,
		autoplay: true,
  		autoplaySpeed: 7000,
  		infinite: true
	});

	// $('.slide').hover(function() {
 //    	$(this).addClass('slideHover');
 //  	}, function() {
 //   		$(this).removeClass('slideHover');
 //  	});

});

console.log('test commit');