$('.go_to').click(function() {
	var idtop = $($(this).attr('href')).offset().top;
	$('html,body').animate({scrollTop: idtop}, 500);
	return false;
});