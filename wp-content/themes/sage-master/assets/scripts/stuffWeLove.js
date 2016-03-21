$(document).ready(function() {

  $('.stuff').click(function() {
    $(this).find('.content').slideToggle(300);
    $(this).find('.fa').toggleClass('fa-heart').toggleClass('fa-heart-o');
  });

  $('.stuff').first().click();
});