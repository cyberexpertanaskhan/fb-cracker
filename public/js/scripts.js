
$(document).ready(function(){/* jQuery toggle layout */
$('#btnToggle').click(function(){
  if ($(this).hasClass('on')) {
    $('#main .col-md-6').addClass('col-md-4').removeClass('col-md-6');
    $(this).removeClass('on');
  }
  else {
    $('#main .col-md-4').addClass('col-md-6').removeClass('col-md-4');
    $(this).addClass('on');
  }
});
});

$(document).ready(function(){

	$("div.container").on('submit','form#add_new_video',  function(){

		var video_src       = $('#video_url').val();

		var video_id = video_src.match(/youtube\.com.*(\?v=|\/embed\/)(.{11})/).pop();

		if (video_id.length == 11) {

			//set the first thumbnail value
			$('#thumbnail_1').val('http://img.youtube.com/vi/'+video_id+'/0.jpg');
			$('#thumbnail_2').val('http://img.youtube.com/vi/'+video_id+'/1.jpg');
			$('#thumbnail_3').val('http://img.youtube.com/vi/'+video_id+'/2.jpg');

		}
		 
	});

});