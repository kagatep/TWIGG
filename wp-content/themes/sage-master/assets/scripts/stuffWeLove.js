$(document).ready(function() {
//https://docs.google.com/spreadsheets/d/1_5-Gsf_mss7iCN2uchFxpiNntjio3ZIxlarCuQSv3Ys/pubhtml?gid=0&single=true
var spreadsheetID = "1_5-Gsf_mss7iCN2uchFxpiNntjio3ZIxlarCuQSv3Ys";

 // Make sure it is public or set to Anyone with link can view 
 var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";
 
 $.getJSON(url, function(data) {


  var entry = data.feed.entry;

  $(entry).each(function(){
    // Column names are name, age, etc.
    //$('.results').prepend('<h2>'+this.gsx$name.$t+'</h2><p>'+this.gsx$age.$t+'</p>');
    var articles = '[{' + this.gsx$articles.$t.replace(/name:/g,'"name":')
                                           .replace(/link:/g,'"link":')
                                           .replace(/" "name/g,'"},{"name') + 
    '}]';

    var articlesArray = $.parseJSON(articles);
    var articlesString = '';
    for(var i = 0; i < articlesArray.length; i++) {
      articlesString  =  articlesString + '<li><a href="' + articlesArray[i].link + '" target="_blank">' +
      articlesArray[i].name + '</a></li>';
    }

    var articlesWeLove = '<h4>Articles</h4><ul>' + articlesString + '</ul>';
    $('.stuff-we-love').find('.main').prepend(
      '<div class="stuff"><h3><i class="fa fa-heart-o"></i> ' + 
      this.gsx$date.$t + '</h3><div class="content">' + 
      articlesWeLove + '<hr /></div></div>'
    );
  });
  attachClick();
});

 function attachClick() {
  $('.stuff').click(function(e) {
    e.stopPropagation();


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
}

$('.stuff').first().click();
});