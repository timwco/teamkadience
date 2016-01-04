$(document).ready(function(){


	$('#paypalForm').hide();
	$('.paypal a').click(function(){
		$('#paypalForm').slideToggle();
		$('html,body').animate({scrollTop: 500}, 900);
		return false;
	});
	$('.asSubmit').click(function(){
		$('.sending').show();
	});





});