$(document).ready(function() {

  $('.stuff').click(function() {

    // $('.stuff').find('.content').addClass('hide');
    // $('.main').find('.fa').addClass('fa-heart-o').removeClass('fa-heart');

    //$(this).find('.content').removeClass('hide');
    $(this).find('.content').slideToggle(300);
    $(this).find('.fa').toggleClass('fa-heart').toggleClass('fa-heart-o');

  //   setTimeout(function() {
		// $(this).find('.content').removeClass('hide').removeAttr('style');
  //   	$(this).find('.fa').addClass('fa-heart').removeClass('fa-heart-o');
  //   },400);
    						
  });

  
    $('.stuff').first().click();
});