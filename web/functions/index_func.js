$(document).ready(function(){
	$('#login_handler').click(function(){
		var login_serialize=$('#login_form').serialize();
		alert(login_serialize);
	});
});
