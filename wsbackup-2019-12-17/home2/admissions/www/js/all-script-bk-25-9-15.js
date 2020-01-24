function validateData() {

		//alert("in function");
jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Only alphabetical characters");	

jQuery.validator.addMethod("alphanumeric", function(value, element) {
    return this.optional(element) || /^[a-zA-Z0-9 ]+$/i.test(value);
}, "Only alphanumeric characters");	


jQuery.validator.addMethod("numericfraction", function(value, element) {
    return this.optional(element) || /^[0-9]\d*(\.\d+)?$/i.test(value);
}, "Only numeric or fraction values");	

jQuery.validator.addMethod("photo", function(value, element) {
	return this.optional(element) || /^([a-zA-Z0-9\s_\\.\-:])+(.png|.jpg|.gif)$/i.test(value);
}, "select an image file only");	



		$("#AddRecordForm").validate({ 
			rules: { 
				Title:
				{
					required:true,
					lettersonly: true,
					remote: {
						url: "ajax-check-title.php",
						type: "post",
						data: {
						Title: function() {
							return $( "#Title" ).val();
							},
						},
					 },
				},
				DisplayStatus:
				{
					required:true,
					lettersonly: true
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
						},*/
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
		
		// Country form start 
		$("#AddCountryForm").validate({ 
			rules: { 
				CouName:{
					required:true,
					lettersonly:true,
					remote:{
						url:"ajax-check-country-name.php",
						type:"post",
						data:{
							CouName:function(){
							return $('#CouName').val();		
							},
						},
					},
				},
				CouCode:{
					required:true,
					number:true,
					remote:{
						url:"ajax-check-country-code.php",
						type:"post",
						data:{
							CouCode:function(){
								return $('#CouCode').val();
							},
						},
					},
				},
				DisplayStatus:
				{
					required:true,
				},
			},
			messages: {
				CouName: {
					required : "This field is required",
					lettersonly : "Please enter valid Country Name",
					remote : "Country name already exists, Please enter another on",
				},
				CouCode:{
					required : "This field is required",
					number : "Please enter a valid Country Code",
					remote : "Country code already exists, Please enter another on",
				},
			},
		});	
		// Country form end
		
		// Tax Code form start 
		$("#AddTaxCodeForm").validate({ 
			rules: { 
				TaxCode:{
					required:true,
					alphanumeric:true,
					remote:{
						url:"ajax-check-tax-code.php",
						type:"post",
						data:{
							TaxCode:function(){ 
								return $('#TaxCode').val();
							},
						},
					},
				},
				/*TaxDesc:{
					required:true,
				},*/
				TaxPer:{
					required:true,
					numericfraction:true
				},
				DisplayStatus:
				{
					required:true,
				},
			},
			messages: {
				TaxCode: {
					required : "This field is required",
					alphanumeric : "Please use alphanumeric values for Tax Code",
					remote : "Tax Code already exists, Please enter another on",
				},
				TaxPer:{
					required : "This field is required",
					numericfraction : "Please use Only numeric or fraction values",
				},
			},
		});	
		// Tax Code form end
		
		// Guide Port form start 
		$("#AddGuidePortForm").validate({ 
			rules: { 
				GuidePortNo:{
					required:true,
					number:true,
					remote:{
						url:"ajax-check-guide-port.php",
						type:"post",
						data:{
							GuidePortNo:function(){
								return $('#GuidePortNo').val();
							},
						},
					},
				},
				DisplayStatus:
				{
					required:true,
				},
			},
			messages: {
				GuidePortNo: {
					required : "This field is required",
					number : "Please enter only number",
					remote : "Guide Port No already exists, Please enter another on"
				},
			},
		});	
		// Guide Port form end
		
		// Quote form start 
		$("#AddQuoteForm").validate({ 
			rules: { 
				Quote:{
					required:true,
					remote:{
						url:"ajax-check-quote.php",
						type:"post",
						data:{
							Quote:function(){
								return $('#Quote').val();
							},	
						}
					},
				},
				DisplayStatus:
				{
					required:true,
				},
			},
			messages: {
				Quote: {
					required : "This field is required",
					remote : "Quote already exists, Please enter another on"
				},
			},
		});	
		// Quote form end
		
		// Prasad Photo form start 
		$("#AddPrasadPhotoForm").validate({ 
			rules: { 
				PName:{
					required:true,
					alphanumeric:true
				},
				PPhoto:{
					required:true,
					photo:true
				},
				DisplayStatus:
				{
					required:true,
				},
			},
			messages: {
				PName: {
					required : "This field is required",
					alphanumeric : "Please use alphanumeric values for Photo Name",
				},
				PPhoto : {
					required : "This field is required",
					photo : "Please select an image file only",
				},
			},
		});	
		// Prasad Photo form end
}

function removeValidation(field)
{ 
	$('#'+field).rules('remove','required');
}
function removeMultipleValidations(field1,field2)
{ 
	$('#'+field1).rules('remove','remote');
	$('#'+field2).rules('remove','remote');
}
function removeValidationRemote(field)
{ 
	$('#'+field).rules('remove','remote');
}

