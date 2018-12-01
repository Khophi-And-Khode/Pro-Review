$().ready(function() {
	$('body').fadeIn(1000);
	$('.populate-here').on('mouseover', '.blog-info', function() {
		$(this).animate({'opacity' : '1'}, 300);
	});
	$('.populate-here').on('mouseleave','.blog-info', function() {
		$(this).animate({'opacity' : '0'}, 300);
	});
	$('a').on('click', function(e) {
		e.preventDefault();
		var url = $(this).attr('href');
		if(url.indexOf('#')<0) {
			$('body').fadeOut( function() {
				window.location.href = url;
			});
		}
	});
});