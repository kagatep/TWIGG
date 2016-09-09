var twiggApp = angular.module('twiggApp', [])
	.controller('mainCtrl', function($scope) {

	$scope.scrollToSection = function(section) {
		var sectionTop = $(section).offset().top - ($('.headerWrap').height()+ 50);
		$('body,html').animate({
			scrollTop: sectionTop
		}, 500, 'swing');
	};

});
$(document).ready(function() {
	if(window.location.hash === '#submithowto') {
		$('h4 a').removeClass('active');
		$('h4 a[data-tab="submitHowTo"]').addClass('active');

		$('.contactDiv').removeClass('hide');
		$('.contactDiv[data-tab="contact"]').addClass('hide');
	}

	$('body.contactus').find('h4 a.tab').click(function() {
		$('h4 a').removeClass('active');
		$(this).addClass('active');

		//$('.contactDiv').addClass('hide');
		$('.contactDiv').fadeOut(150);
		$('.contactDiv[data-tab="' + $(this).data('tab') + '"]').fadeIn(150).removeClass('hide');
	});

	//temp
	var $caitlyn = $('body.about-us').find('.CAITLYN');
	$caitlyn.prependTo($caitlyn.parent());

	var $aboutUs = $('body.about-us');
	var $teamTWIGG = $aboutUs.find('.teamTWIGG .row');

	var editors = ['.caitlin-cohen','.lauren-montgomery','.rachel-wiegardt-egel','.cydney-gottlieb',
					'.maria-zhou','.avi-khosravyani','.aurora-burgos','.elena-cherine'];

	for(var i = 0; i < editors.length; i++) {
		$(editors[i]).appendTo($teamTWIGG);
	}

	$('.accordionTab').hide();
	$('.accordionTrigger').click(function() {
		$(this).toggleClass('active');
		$(this).next('.accordionTab').slideToggle();

		var tab = $(this).data('opentab');
		$('.accordionTab[data-tab="' + tab + '"]').slideToggle();
	});

	jQuery(function() {
	  jQuery.scrollDepth();
	});
});