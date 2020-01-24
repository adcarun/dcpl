function showGroups() 
{ 
	$('#UserName').blur(function(){ 
	var UserName = $( "#UserName" ).val();
    $.ajax({
			url: "ajax-show-groups.php",
			type: "POST",
			data: {UserName : UserName},
			success: function(result)
			{ 
				$("#GroupId").html(result);
			}
		});
	});
} // End of function checkTitle()

function showCountryCode()
{ 
	$("#CountryId").change(function(){ 
		var CountryId = $("#CountryId").val();
		$.ajax({
			url:"ajax-country-code.php",
			type:"POST",
			data:{ CountryId : CountryId},
			success:function(result1)
			{
				$("#PostalCode").val(result1);
			}
		});
	});
} // End of function showCountryCode()

function showVisitors()
{
	$("#VisitorNo").change(function(){
		var VisitorNo = $("#VisitorNo").val();
		$.ajax({
			url:"ajax-show-visior.php",
			type:"POST",
			data:{VisitorNo:VisitorNo},
			success:function(result)
			{
				$("#visitors").html(result);
			}
		});
	});
}