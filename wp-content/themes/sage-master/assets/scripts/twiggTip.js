$(document).ready(function() {

	var $twiggTip = $('.twiggTips').find('p'),
		$activeTip = $('.twiggTips').find('.active');

	$twiggTip.first().addClass('active');
	
	$('<span>TWIGG tip #<span class="number"></span></span><hr />').prependTo($twiggTip);

	$twiggTip.each(function() {
		var i = $(this).index() + 1;
		$(this).find('.number').text(i);
	});

	setInterval(function () {
		var pIndex = Math.floor(Math.random() * $twiggTip.length);
		$('.twiggTips').find('.active').removeClass('active');
		$('.twiggTips').find('p').eq(pIndex).addClass('active');
	}, 6000);
	
	var $author = $('.bottomLeft .authorAvatar');
	$author.first().addClass('active');

	setInterval(function () {
		var pIndex = Math.floor(Math.random() * $author.length);
		$('.bottomLeft').find('.active').removeClass('active');
		$('.bottomLeft .authorAvatar').eq(pIndex).addClass('active');
	}, 1000);
});