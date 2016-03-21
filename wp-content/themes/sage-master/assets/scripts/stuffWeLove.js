$(document).ready(function() {
  var spreadsheetID = "1_5-Gsf_mss7iCN2uchFxpiNntjio3ZIxlarCuQSv3Ys";
  // Make sure it is public or set to Anyone with link can view 
  var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";
 
  $.getJSON(url, function(data) {
    var entry = data.feed.entry;
    var count = entry.length;

    $(entry).each(function(){
      count--;
      function returnList(jsonList) {
        var sortedList = '[{' + jsonList.replace(/name:|name:" "/g,'"name":')
                                        .replace(/link:|" "link:|" "link:" "|link:" "/g,'"link":')
                                        .replace(/" "name|," "name/g,'"},{"name') + '}]';

        var listArray = $.parseJSON(sortedList);
        var listToString = '';
        for(var i = 0; i < listArray.length; i++) {
          listToString  =  listToString + '<li><a href="' + listArray[i].link + '" target="_blank">' +
          listArray[i].name + '</a></li>';
        }
        return listToString;
      }
      var articlesWeLove =  this.gsx$articles.$t ? '<h4>Articles</h4><ul>' + returnList(this.gsx$articles.$t) + '</ul>' : '';
      var podcastsWeLove = this.gsx$podcasts.$t ?'<h4>Podcasts</h4><ul>' + returnList(this.gsx$podcasts.$t) + '</ul>' : '';
      var videosWeLove = this.gsx$videos.$t ?'<h4>Videos</h4><ul>' + returnList(this.gsx$videos.$t) + '</ul>' : '';
      var quote = this.gsx$quote.$t ? '<h6 class="quote">“' + this.gsx$quote.$t +
        '”<span class="quoteAuthor">- ' + this.gsx$quoteauthor.$t + '</span></h6>' : '';
      var dancePartyTune = this.gsx$song.$t ? '<div class="songBox"><h4 class="songHeader"><i class="fa fa-music"></i> Dance Party tune of the week <i class="fa fa-music"></i></h4><p class="song">' + 
          this.gsx$song.$t + '</p><div class="songTriangle"></div></div>' : '';

      if(this.gsx$month.$t) {
        $('.stuff-we-love').find('.stuffWeLove').append('<h2>' + this.gsx$month.$t + '</h2>');
      } else {
        $('.stuff-we-love').find('.stuffWeLove').append(
          '<div class="stuff"><h3><i class="fa fa-heart-o stuffIcon"></i> ' + 
          this.gsx$date.$t + '</h3><div class="content">' + 
          articlesWeLove + podcastsWeLove + videosWeLove + dancePartyTune + quote + '</div></div>'
        );

        if (count < 1) {
          setTimeout(function() {
          $('.stuff').first().find('.content').slideToggle(300); 
          $('.stuff').first().find('.stuffIcon').toggleClass('fa-heart').toggleClass('fa-heart-o'); 
          },400);
        }
      }
    });
    attachClick();
  });

  function attachClick() {
    $('.stuff h3').click(function(e) {
      e.stopPropagation();

      $(this).parents('.stuff').find('.content').slideToggle(300);
      $(this).parents('.stuff').find('.stuffIcon').toggleClass('fa-heart').toggleClass('fa-heart-o');
    });
  }

});