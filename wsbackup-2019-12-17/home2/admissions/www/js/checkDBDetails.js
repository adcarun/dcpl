// JavaScript function to check whether tittle is already esists or not
function CheckTitle()
{ 
	$('#Title').blur(function(){
		var Title = $('#Title').val();
		$.ajax({
			type:"POST",
			url:"./check-title.php?Title="+Title,
			success: function(titleMsg)
			{ 
				if(titleMsg=='Title already exists, Please enter another one')
				{
					$('#TitleError').html(titleMsg);
					$('#Title').focus();
					return false;
					
				}
				else
				{
					$("#TitleError").html('');
					return true;
				}
			}
		});
	});
	
	
}