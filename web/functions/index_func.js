$(document).ready(function(){
	$('#login_handler').click(function(){
		var login_serialize=$('#login_form').serialize();
		$.post();
	});
	$('#registration_handler').click(function(){
		var registration_serialize=$('#register_form').serialize();
		alert(registration_serialize);
	});
});
