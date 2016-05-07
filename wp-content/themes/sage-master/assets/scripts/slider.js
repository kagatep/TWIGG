$(document).ready(function() {
	var $homeSlider = $('.home-slider');
	$homeSlider.slick({
		nextArrow: $('.next'),
		prevArrow: $('.prev'),
		dots: true,
		autoplay: false,
  		autoplaySpeed: 7000,
  		infinite: true
	});

	if($('.home-slider .slick-active').find('video').length) {
		$('.home-slider .slick-active').find('video').get(0).play();
	}

	$homeSlider.on('afterChange', function(event, slick, currentSlide, nextSlide){
	    $('.home-slider .slick-slide').find('video').get(0).pause();

	    if($('.home-slider .slick-active').find('video').length) {
	    	$('.home-slider .slick-active').find('video').get(0).play();
	    }
	});

	// $('.slide').hover(function() {
 //    	$(this).addClass('slideHover');
 //  	}, function() {
 //   		$(this).removeClass('slideHover');
 //  	});

	$('.wolf-tweet-list').slick({
		nextArrow: $('.next'),
		prevArrow: $('.prev'),
		autoplay: false
	});
});