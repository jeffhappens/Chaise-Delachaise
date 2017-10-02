$(function() {
	$(window).on('scroll', function() {
		console.log($(this).scrollTop());

		if($(this).scrollTop() > 150) {
			$('header').addClass('offset');
			$('.menu-categories').addClass('fixed');
		}
		else {
			$('header').removeClass('offset');
			$('.menu-categories').removeClass('fixed');
		}
	});
});