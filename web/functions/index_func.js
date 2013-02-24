$(document).ready(function(){
	init_loaders();
	$('#login_handler').click(function(){

			$('#login_loader').show();
			$('#login_handler_btn').hide();
			var login_serialize=$('#login_form').serialize();
			var checker=check_form('#login_form');
			$.post("/index_ajax.php",login_serialize,function(data){
				var data1=$.trim(data);
				if(data1!="error"){	
					setTimeout(function(){
							$('#login_handler_btn').show();
							$('#login_loader').hide();
					},2000);
				}else{
							window.location.href='index.php'
							$('#login_handler_btn').show();
							$('#login_loader').hide();
				}
			});

	});

	$('#registration_handler').click(function(){
			$('#regi_loader').show();
			$('#registration_handler').hide();
			var registration_serialize=$('#register_form').serialize();
			var checker=check_form('#register_form');
			if(checker){
				$.post("/index_ajax.php",registration_serialize,function(data){
					var data1=$.trim(data);
					alert(data);
					if(data1.length==0){
						window.location.href="index.php";
					}else{
						alert("ERROR");
					}
					setTimeout(function(){
						$('#regi_loader').hide();
						$('#registration_handler').show();
					},2000);	
				});
			}else{
				alert("Incorrect registration details.");
				$('#regi_loader').hide();
				$('#registration_handler').show();
			}
	});
});



function init_loaders(){
	$('#login_loader').hide();
	$('#regi_loader').hide();
}

function check_form(obj){
	var boool=true;
	$(obj).find('input').each(function(i,e){
		var tmp=$.trim($(e).val());
		var ident=$.trim($(e).attr('rel'));
		if(tmp.length!=0){
			if((ident=='cpassw')||(ident=='cpass')){
					var p1=$.trim($('#id_reg_pass').val());
					var p2=$.trim($('#id_reg_cpass').val());
					if(p1!=p2){
							boool=false;
					}else{}
			}
		}else{
			$(e).css("border","2px solid red");
							boool=false;
		}
	});
	return boool;
}
