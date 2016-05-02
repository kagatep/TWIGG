$(document).ready(function() {
	$('.searchBar .search-form').addClass('hide');
	
	$('.desktopMenu').click(function() {
		if($('.headerDropdown').hasClass('open')) {
			$('.headerDropdown').removeClass('open');
		} else {
			$('.headerDropdown').addClass('open');
		}
	});

	$('.mobileMenu').click(function() {
		$('.menuOverlay').toggleClass('closedMenu');
		$(this).toggleClass('fa-bars').toggleClass('fa-times');
	});
	
	$('.js-backToTop').click(function(e){
		e.preventDefault();
		$('body,html').animate({
			scrollTop: 0
		}, 500, 'swing');
	});

	$('.searchIcon').click(function() {
		$('.searchBar').toggleClass('open');
		$('.searchBar .search-form').toggleClass('hide');
		$(this).toggleClass('fa-search').toggleClass('fa-times');
	});
});

$(window).scroll(function() {
	if($(window).scrollTop() > $('header').height()) {
		$('.left').addClass('scrolled');
	} else {
		$('.left').removeClass('scrolled');
		$('.headerDropdown').removeClass('open');
	}

	if($(window).scrollTop() > ($('header').height() + 250)) {
		if(!($('.bubble1').addClass('popIn'))) {
			$('.bubble1').addClass('popIn');
		}
	} else {
		$('.bubble1').removeClass('popIn');
		//$('.slideDownMenu').removeClass('opened');
	}

	if($(window).scrollTop() > ($('header').height() + 750)) {
		if(!($('.bubble2').addClass('popIn'))) {
			$('.bubble2').addClass('popIn');
		}
	} else {
		$('.bubble2').removeClass('popIn');
	}

	if($(window).scrollTop() + $(window).height() > $(document).height() - 800) {
		$('.bubble').removeClass('popIn');
	} else {
		//$('.bubble').removeClass('popIn');
	}
});