$(document).ready(function() {
	// 2. This code loads the IFrame Player API code asynchronously.
	var tag = document.createElement('script');

	tag.src = "https://www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	window.onYouTubeIframeAPIReady = function() {
		v.getVideos();
	};
	var $videosTout = $('.videosTout');
	v = {
		player : {},
		ytVideos : {},
		getVideos : function() {
			$.get( "https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UCyjqwZ8HbZae5ApdZfxdL8w&order=date&type=video&videoSyndicated=true&key=AIzaSyD6cFSzL0H9iigVC6Lc_wKSoW0_sza4eoo", function( data ) {
				v.ytVideos = data.items;
			})
			.done(function(data) {
				//console.log(v.ytVideos[0]);

				$videosTout.find('h3').text(v.ytVideos[0].snippet.title);
				$videosTout.find('p').text(v.ytVideos[0].snippet.description);

				v.createVideoIframe(v.ytVideos[0].id.videoId);
				v.displayNextVideos(v.ytVideos);

			});
		},
		createVideoIframe : function(videoId) {
			v.player = new YT.Player('latestVideo', {
				height: '390',
				width: '640',
				videoId: videoId,
				events: {
				 	'onReady': onPlayerReady,
				    //'onStateChange': onPlayerStateChange
				  }
			});
			
			function onPlayerReady(event) {
		        event.target.playVideo();
		        event.target.mute();
		    }
		},
		displayNextVideos : function(videos) {
			console.log(videos);
			var nextVideos = $('.nextVideo');
			for (var i = 1; i < (nextVideos.length + 1); i++) {
				var $nextVideo = nextVideos.eq(i - 1);

				$nextVideo.append('<a href="https://youtu.be/' + videos[i].id.videoId +
					'" target="_blank"><img src="' + videos[i].snippet.thumbnails.high.url +
					'"></a>');
			}

		}
	}
	
});