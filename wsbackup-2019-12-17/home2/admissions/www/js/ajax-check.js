function checkTitle() 
{
	$('#Title').blur(function(){
	var Title = $( "#Title" ).val();
    $.ajax({
			url: "ajax-check-title.php",
			type: "POST",
			data: {Title : Title},
			success: function(result)
			{
				if(result=='false')
				{
					$("#diverror").html('Title already exists, Please enter another one');
					$('#Title').focus();
					return false;
				}
				else
				{
					$("#diverror").html('');	
				}
    		}
		});
	});
} // End of function checkTitle()

function checkCountry()
{
	// Check country name
	$('#CouName').blur(function(){
	var CouName = $( "#CouName" ).val();
    $.ajax({
			url: "ajax-check-country-name.php",
			type: "POST",
			data: {CouName : CouName},
			success: function(result)
			{
				if(result=='false')
				{
					$("#diverror").html('Country Name already exists, Please enter another one');
					$('#CouName').focus();
					return false;
				}
				else
				{
					$("#diverror").html('');	
				}
    		}
		});
	});
	
	// Check country Code
	$('#CouCode').blur(function(){
	var CouCode = $( "#CouCode" ).val();
    $.ajax({
			url: "ajax-check-country-code.php",
			type: "POST",
			data: {CouCode : CouCode},
			success: function(result)
			{
				if(result=='false')
				{
					$("#diverror1").html('Country Code already exists, Please enter another one');
					$('#CouCode').focus();
					return false;
				}
				else
				{
					$("#diverror1").html('');	
				}
    		}
		});
	});
} // End of function checkCountry()

// Tax Code start
	function checkTax()
	{
		$('#TaxCode').blur(function(){
		var TaxCode = $( "#TaxCode" ).val();
		$.ajax({
				url: "ajax-check-tax-code.php",
				type: "POST",
				data: {TaxCode : TaxCode},
				success: function(result)
				{
					if(result=='false')
					{
						$("#diverror").html('Tax Code already exists, Please enter another one');
						$('#TaxCode').focus();
						return false;
					}
					else
					{
						$("#diverror").html('');	
					}
				}
			});
		});
	}
// Tax Code end	

// Guide Port start
	function checkGuidePort()
	{
		$('#GuidePortNo').blur(function(){
		var GuidePortNo = $( "#GuidePortNo" ).val();
		$.ajax({
				url: "ajax-check-guide-port.php",
				type: "POST",
				data: {GuidePortNo : GuidePortNo},
				success: function(result)
				{
					if(result=='false')
					{
						$("#diverror").html('Guide Port already exists, Please enter another one');
						$('#GuidePortNo').focus();
						return false;
					}
					else
					{
						$("#diverror").html('');	
					}
				}
			});
		});
	}
// Guide Port end	

// Quote start
	function checkQuote()
	{
		$('#Quote').blur(function(){
		var Quote = $( "#Quote" ).val();
		$.ajax({
				url: "ajax-check-quote.php",
				type: "POST",
				data: {Quote : Quote},
				success: function(result)
				{
					if(result=='false')
					{
						$("#diverror").html('Quote already exists, Please enter another one');
						$('#Quote').focus();
						return false;
					}
					else
					{
						$("#diverror").html('');	
					}
				}
			});
		});
	}
// Quote end	
	
		//alert("in function");
/*jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Only alphabetical characters");	

		$("#AddRecordForm").validate({ 
			rules: { 
				Title:
				{
					required:true,
					lettersonly: true,
					/*remote: {
						url: "ajax-check-title.php",
						type: "post",
						data: {
						Title: function() {
							return $( "#Title" ).val();
							}
						},
					 },*
				},
				DisplayStatus:
				{
					required:true,
					lettersonly: true
				},
				Email: {
					required: true,
					email: true
				},
				Telephone: {
					required:true,
					number:true,
					minlength:9,
					maxlength:10
					
				},
               
				Message: {
						required:true
				},
                
				spamcode:{
						required:true,
						equalTo:'#spamcodehidden'
               },
			   // Login
			   UserName:{
					required:true,
					lettersonly:true
				},
				Password:{
					required:true	
				},
			},
			messages: {
				Title: {
					required : "This field is required",
					lettersonly : "Please enter valid name",
					remote:"Title already exist!"
				},
				DisplayStatus:{
					required : "This field is required",
					},
				Email: {
				         required : "Please enter your email",
						 email : "Please enter your valid email"
				},
				Telephone: {
					required : "Please enter your phone number",
					number : "Please enter a valid phone number",
					minlength : "Min length of phone number is 9",
					maxlength : "Max length of phone number is 10"
				},
               
				Message: {
					required : "Please enter your Comment",
				},
									                                          
				spamcode:{
					required:"Please enter spamcode",
					equalTo:"Please enter valid spamcode",
                    //maxlength:"Max length of phone number is 5"
					
				},
			},
			
			/* errorClass: 'help-block',
                        errorElement: 'span',
                        errorPlacement: function(error, e) {
                            e.parents('li').append(error);
                        },
                        highlight: function(e) {
                            $(e).closest('.form-group .col-md-5').removeClass('has-success has-error').addClass('has-error');
                            $(e).closest('.help-block').remove();
                        },
                        success: function(e) {
                            // You can remove the .addClass('has-success') part if you don't want the inputs to get green after success!
                            e.closest('.form-group .col-md-5').removeClass('has-success has-error').addClass('has-success');
                            e.closest('.help-block').remove();
                        },	
						*/
						
						/*submitHandler: function(){ 
							successdata = CheckTitle();
							alert(successdata);
						},*
		});
		
		// Login form start 
		$("#LoginForm").validate({ 
			rules: { 
				UserName:{
					required:true,
					lettersonly:true
				},
				Password:{
					required:true	
				},
				SpamCode:{
						required:true,
						equalTo:'#SpamCodeHidden'
               },
			},
			messages: {
				UserName: {
					required : "This field is required",
					lettersonly : "Please enter valid User Name",
				},
				Password:{
					required : "This field is required",
				},
				SpamCode:{
					required:"This field is required",
					equalTo:"Please enter valid Spam Code",
                },
			},
		});	
		// Login form end
}

*/