$(document).ready(function() {
	$('a[href^="#modal-"]').on('click', function(event){
		event.preventDefault();
		var id=$(this).attr("href");
		$(id).fadeIn(300).css('display','flex');
		$('section, footer').css('filter', 'blur(5px)');
		var video_src = $(this).data("srcvideo");
		if($(this).data("video") == "vimeo"){
			$("#video-popup").replaceWith("<iframe src='https://player.vimeo.com/video/"+ video_src +"?autoplay=1&title=0&byline=0&portrait=0&badge=0' id='video-popup' width='100%' height='100%' frameborder='0' allow='autoplay; fullscreen; picture-in-picture; xr-spatial-tracking; clipboard-write'></iframe>");
		}else if($(this).data('video') == 'youtube'){
		$("#video-popup").replaceWith("<iframe id='video-popup' width='100%' height='100%' src='https://www.youtube.com/embed/"+ video_src +"?autoplay=1&title=0&byline=0&portrait=0&badge=0' frameborder='0' webkitallowfullscreen mozallowfullscreen  allow='autoplay; fullscreen; picture-in-picture; xr-spatial-tracking; clipboard-write'></iframe>");
			}
			});
		$('.modal-overlay').on("click",function(){
			$(this).fadeOut(300);
			$("#video-popup").replaceWith("<div id='video-popup'></div>");
			$('section, footer').css('filter', 'none');
		});

		$('div.close-button').on("click",function(){
			$('[id ^= modal]').fadeOut(300);
			$("#video-popup").replaceWith("<div id='video-popup'></div>");
			$('section, footer').css('filter', 'none');
		});

		$('.modal-content').on('click', function( e ) {
				e.stopPropagation();
		});

});
