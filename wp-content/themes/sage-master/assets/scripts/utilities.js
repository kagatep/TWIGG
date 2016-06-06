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


	var caitlin = $('body.about-us').find('.caitlin-cohen');
	var lauren = $('body.about-us').find('.lauren-montgomery');
	var rachel = $('body.about-us').find('.rachel-wiegardt-egel');
	var cydney = $('body.about-us').find('.cydney-gottlieb');
	var maria = $('body.about-us').find('.maria-zhou');
	var avi = $('body.about-us').find('.avi-khosravyani');
	var aurora = $('body.about-us').find('.aurora-burgos');
	
	
	aurora.prependTo(aurora.parent());
	avi.prependTo(avi.parent());
	cydney.prependTo(cydney.parent());
	maria.prependTo(maria.parent());
	rachel.prependTo(rachel.parent());
	lauren.prependTo(lauren.parent());
	caitlin.prependTo(caitlin.parent());

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