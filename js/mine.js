$(document).ready(function(){
		$('e_edit_submit').click(function(){
				var email_1 = $('#email_1').val();
				var email_2 =$('#email_2').val();
				if(emil_1==''||email_2=='')
				{
					
					$('#error_message').html("All fields are required");
					
				}else{
					
					$('#error_message'),html('');
					$.ajax({
						url:"/php/loginproc.php",
						method:"POST",
						data:{name:name,message:message},
						success:function(data){
							$("form").trigger("reset");
							$('#success_message').fadeIn().html(data);
							setTimeout(function(){
								$('#success_message').fadeOut("Slow");
							},2000);
							
							
						}
					});
				}
		}
			
}