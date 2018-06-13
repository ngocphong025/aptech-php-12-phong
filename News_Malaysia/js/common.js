$(document).ready(function(){
	$('.click-show').click(function(){
		$(this).css({
			'-webkit-transform': 'translateX(-265px)',
    		'transform': 'translateX(-265px)'
		});
		$('.click-hide').css({
			'right': '265px'
		});
		$('.tm-menu').removeClass('mn-opacity');
		$('.tm-menu').addClass('mn-show');
		$('#wrapper').addClass('ac-menu');
	});

	$('.click-hide').click(function(){
		$(this).css({
			'right':'15px'
		});
		$('.click-show').css({
			'-webkit-transform': 'translateX(-50%)',
    			'transform': 'translateX(-50%)'
		});
		$('.mn-ic-sm.active').css('opacity','1');
		$('.tm-menu').removeClass('mn-show');
		$('.tm-menu').addClass('mn-opacity');
		$('#wrapper').removeClass('ac-menu');
	});


	if($(window).width() <= 990){
		$('.tm-menu ul.menu > li').click(function(e){
			$('.tm-menu ul.menu li .tm-sub').height(0);
			var sub_hg = $(this).find('ul').height();
			$(this).find('.tm-sub').css('height', sub_hg);
			e.stopPropagation();
		});
	}

	$(document).on('click', '.start-video', function () {
	    $(this).hide();
	    $("#player").show();
	    $("#thumbnail_container").hide();
	    player.playVideo();
	});
});


