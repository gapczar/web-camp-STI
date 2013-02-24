$(document).ready(function(){
	$('#login_handler').click(function(){
		var login_serialize=$('#login_form').serialize();
		$.post("/index_ajax.php",login_serialize,function(data){});
	});
	$('#registration_handler').click(function(){
		var registration_serialize=$('#register_form').serialize();
		$.post("/index_ajax.php",registration_serialize,function(data){alert(data);});
	});
});
