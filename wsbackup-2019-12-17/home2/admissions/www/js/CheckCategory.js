$(document).ready(function()
 { alert("hi");
 	$('#transl2').onBlur(function()
	{ alert("in function");
 		var categoryTitle = $('#transl2').val(); // here we are taking country id of the selected one.
 		$.ajax({
 		type: "POST",
 		url: "./check-category.php?CatName="+categoryTitle, //here we are calling our user controller and get_cities method with the country_id
 		success: function(msg) //we're calling the response json array 'cities'
 		{
			if(msg=='true')
			{
				alert("Category title is already exist, Please enter another one");
				document.frm.CatName.focus();
				return false;
			}
		}
 	});
  });
 });