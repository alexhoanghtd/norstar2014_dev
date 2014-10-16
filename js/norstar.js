$(document).ready(function(){
	$(function(){
		$('.ah-popup-link').click(function(){
			var target = $(this).attr('popup-target');
			$('.ah-popup[popup-data="'+target+'"]').fadeIn();
		});
		$('.ah-close-popup').click(function(){
			$(this).parent().parent().fadeOut();
		});
	});
});