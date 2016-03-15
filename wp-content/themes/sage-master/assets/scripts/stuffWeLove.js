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
  
    $('.stuff-we-love').find('.main').prepend(
        '<h3>' + this.gsx$date.$t + '</h3>' +
        '<ul>' + articlesString + '</ul>' + 
        '<p><h4>Videos:</h4> ' + this.gsx$videos.$t + '</p>' +
        '<p><h4>Dance Party Tune:</h4> ' + this.gsx$song.$t + '</p>' +
        '<p><h4>Quote:</h4> ' + this.gsx$quote.$t + '</p>' + '<hr />'
      );
  });
 
 });

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