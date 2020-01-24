function validateData() {

		//alert("in function");
jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Only alphabetical characters");	

jQuery.validator.addMethod("alphanumeric", function(value, element) {
    return this.optional(element) || /^[a-zA-Z0-9 ]+$/i.test(value);
}, "Only alphanumeric characters");	

jQuery.validator.addMethod("phoneNo", function(value, element) {
    return this.optional(element) || /^[0-9 ]+$/i.test(value);
}, "Only alphanumeric characters");	


jQuery.validator.addMethod("numericfraction", function(value, element) {
    return this.optional(element) || /^[0-9]\d*(\.\d+)?$/i.test(value);
}, "Only numeric or fraction values");	

jQuery.validator.addMethod("photo", function(value, element) {
	return this.optional(element) || /^([a-zA-Z0-9\s_\\.\-:])+(.png|.jpg|.gif)$/i.test(value);
}, "select an image file only");	

jQuery.validator.addMethod("pdf", function(value, element) {
	return this.optional(element) || /^([a-zA-Z0-9\s_\\.\-:])+(.pdf|.PDF)$/i.test(value);
}, "Select PDF file only");	


jQuery.validator.addMethod("greaterThan", function(value, element, params) {
    if (!/Invalid|NaN/.test(new Date(value))) {
        return new Date(value) < new Date($(params).val());
    }
	return isNaN(value) && isNaN($(params).val()) || (Number(value) < Number($(params).val())); 
},"Date of Birth Must be less than Today's Date.");

jQuery.validator.addMethod("require_from_group", function (value, element, options) {
        var numberRequired = options[0];
        var selector = options[1];
		//var selector = options[2];
        var fields = $(selector, element.form);
        var filled_fields = fields.filter(function () {
            // it's more clear to compare with empty string
            return $(this).val() != "";
        });
        var empty_fields = fields.not(filled_fields);
        // we will mark only first empty field as invalid
        if (filled_fields.length < numberRequired && empty_fields[0] == element) {
            return false;
        }
        return true;
        // {0} below is the 0th item in the options field
    }, jQuery.format("Please enter either Phone No / Mobile No / Email."));

    
		// Login form start 
		$("#LoginForm").validate({ 
			rules: { 
				UserName:{
					required:true,
					email: true
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
				},
				Password:{
					required : "This field is required",
				},
				SpamCode:{
					required:"This field is required",
					equalTo:"Please enter correct answer",
                },
			},
		});	
		// Login form end
		
		// Forgot password start
			$("#ForgotPass").validate({ 
			rules: { 
				UserName:{
					required:true,
					email: true
				},
				SpamCode:{
						required:true,
						equalTo:'#SpamCodeHidden'
               },
			},
			messages: {
				UserName: {
					required : "This field is required",
				},
				SpamCode:{
					required:"This field is required",
					equalTo:"Please enter correct answer",
                },
			},
		});	
		// Forgot password end
		
		
		
		// Package start
		$("#AddPackage").validate({ 
			rules: { 
				PName:
				{
					required:true,
					lettersonly: true,
					remote: {
						url: "ajax-check-package.php",
						type: "post",
						data: {
						PName: function() {
							return $( "#PName" ).val();
							},
						},
					 },
				},
				Itinerary:{
					required:true,
					pdf:true
				},
				DisplayStatus:
				{
					required:true,
					lettersonly: true
				},
			},
			messages: {
				PName: {
					required : "This field is required",
					lettersonly : "Please enter valid name",
					remote:"Package Name already exist!"
				},
				DisplayStatus:{
					required : "This field is required",
					},
				},
			
		});
		// Charges form start
			$("#AddChargesForm").validate({ 
			rules: { 
				Charges:{
					required:true,
					number:true
				},
			},
			messages: {
				Charges: {
					required : "This field is required",
					number : "Please use numeric values for charges",
				},
			},
		});	
		// Chnarges form end
		
		
		
		
		
		
		
		
		
		
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
		
		
			$("#AddCategoryForm").validate({				
			rules: {
				Section:{
					required:true,
				},
				Category:
				{
					required:true,
					lettersonly: true,
					remote: {
						url: "ajax-check-category.php",
						type: "post",
						data: {
						Category: function() {
							//return $( "#Category" ).val();
							 return $('#AddCategoryForm :input[name="Category"]').val();
							}
						},
					 },
				},
				DisplayStatus:
				{
					required:true,
					lettersonly: true
				},				
			},
			onkeyup: false,
			messages: {
				Section:{
					required:"This field is required",
				},
				Category: {
					required : "This field is required",
					lettersonly : "Please enter valid name",
					//remote:"Category already exist!"
					remote: jQuery.validator.format("Category already exist!.")
				},
				DisplayStatus:{
					required : "This field is required",
					},
			},			
		});
		//Category Form End
		
		
		
				$("#AddSubCategoryForm").validate({				
			rules: {
				Section:{
					required:true,
				},
				Category:
				{
					required:true,
				},
				Subcategory:{
					required:true,
					lettersonly: true,
					remote: {
						url: "ajax-check-subcategory.php",
						type: "post",
						data: {
						Subcategory: function() {
							//return $( "#Category" ).val();
							 return $('#AddSubCategoryForm :input[name="Subcategory"]').val();
							}
						},
					 },
				},
				DisplayStatus:
				{
					required:true,
					lettersonly: true
				},				
			},
			onkeyup: false,
			messages: {
				Section:{
					required:"This field is required",
				},
				Category: {
					required : "Select Valid Category",					
				},
				Subcategory: {
					required : "This field is required",
					lettersonly : "Please enter valid name",
					//remote:"Category already exist!"
					remote: jQuery.validator.format("SubCategory already exist!.")
				},
				DisplayStatus:{
					required : "This field is required",
					},
			},			
		});
		//SubCategory Form End
		
		
			$("#AddVisitorCategoryForm").validate({				
			rules: {
				Visitor_type:
				{
					required:true,
					lettersonly: true,
					remote: {
						url: "ajax-check-visitorcategory.php",
						type: "post",
						data: {
						Visitor_type: function() {
							//return $( "#Category" ).val();
							 return $('#AddVisitorCategoryForm :input[name="Visitor_type"]').val();
							}
						},
					 },
				},
				Charges:
				{
					required:true,
					number: true
				},
				DisplayStatus:
				{
					required:true,
					lettersonly: true
				},				
			},
			onkeyup: false,
			messages: {
				Visitor_type: {
					required : "This field is required",
					lettersonly : "Please enter valid name",
					//remote:"Category already exist!"
					remote: jQuery.validator.format("Visitor type already exist!.")
				},
				Charges:{
					required : "This field is required",
					},
				DisplayStatus:{
					required : "This field is required",
					},
			},			
		});
		//Visitor Type Form End
		
		
			$("#AddKeywordForm").validate({				
			rules: {
				Keyword1:
				{
					required:true,
					lettersonly: true,
					remote: {
						url: "ajax-check-keyword.php",
						type: "post",
						data: {
						Keyword1: function() {
							//return $( "#Category" ).val();
							 return $('#AddKeywordForm :input[name="Keyword1"]').val();
							}
						},
					 },
				},
				DisplayStatus:
				{
					required:true,
					lettersonly: true
				},				
			},
			onkeyup: false,
			messages: {
				Keyword1: {
					required : "This field is required",
					lettersonly : "Please enter valid name",
					//remote:"Category already exist!"
					remote: jQuery.validator.format("Keyword already exist!.")
				},
				DisplayStatus:{
					required : "This field is required",
					},
			},			
		});
		//Keyword Form End
		
		// Souvenir Tag form start
		$("#AddTagForm").validate({ 
			rules: { 
				TagName:{
					required:true,
					lettersonly: true,
					//alphanumeric:true,
					remote:{
						url:"ajax-check-souvenir-tag.php",
						type:"post",
						data:{
							TagName:function(){ 
								return $('#TagName').val();
							},
						},
					},
				},
				/*TagDesc:{
					required:true,
				},*/
				DisplayStatus:
				{
					required:true,
				},
			},
			messages: {
				TagName: {
					required : "This field is required",
					lettersonly : "Please enter valid Tag Name",
					remote : "Tag Name already exists, Please enter another on",
				},
			},
		});	
		// Souvenir Tag form end
		
		// Souvenir Item start
			$("#AddSouvenirItemForm").validate({ 
			rules: { 
				Name:{
					required:true,
					lettersonly: true
				},
				Code:{
					required:true,
					alphanumeric:true,
					remote:{
						url:"ajax-check-souvenir-code.php",
						type:"post",
						data:{
							Code:function(){ 
								return $('#Code').val();
							},
						},
					},
				},
				SImage1:{
					required:true,
					photo:true
				},
				SImage2:{
					photo:true
				},
				SImage3:{
					photo:true
				},
				IDesc:{
					required:true,
				},
				MaxRPrice:
				{
					required:true,
					number: true
				},
				"Taxes[]":{
					required:true,	
				},
				"Tags[]":{
					required:true,	
				},
				Cota :{
					required:true,
					number:true
				},
				DisplayStatus:
				{
					required:true
				},
			},
			messages: {
				TagName: {
					required : "This field is required",
					lettersonly : "Please enter valid Tag Name",
					remote : "Tag Name already exists, Please enter another on",
					},
				Code :{
					remote : "Item Code already exists, Please enter another on",	
					},
				SImage1:{
					required : "This field is required",
					photo : "Please select an image file only",
					},
				SImage2:{
					photo : "Please select an image file only",
					},	
				SImage3:{
					photo : "Please select an image file only",
					},	
				"Taxes[]":{
					required: "You must check at least 1 check box",
					},
				"Tags[]":{
					required: "You must check at least 1 check box",
					},
				},
			});	
		// Souvenir Item end
		
		
		
		// Update Password form start 
		$("#UpdatePasswordForm").validate({ 
			rules: { 
				NewPassword:{
					required:true
				},
				ConfirmNewPassword:{
					required:true,
					equalTo:'#NewPassword'
				},
				SpamCode:{
					required:true,
					equalTo:'#SpamCodeHidden'
               },
			},
			messages: {
				NewPassword: {
					required : "This field is required",
				},
				ConfirmNewPassword:{
					required:"This field is required",
					equalTo:"New password and confirm password should be matched",
				},
				SpamCode:{
					required:"This field is required",
					equalTo:"Please enter valid Captcha Code",
                },
			},
		});	
		// Update Password form end
		
		// Change Password form start 
		$("#ChangePasswordForm").validate({ 
			rules: { 
				OldPassword:{
					required:true
				},
				NewPassword:{
					required:true
				},
				ConfirmNewPassword:{
					required:true,
					equalTo:'#NewPassword'
				},
			},
			messages: {
				OldPassword:{
					required:"This field is required",
				},
				NewPassword: {
					required : "This field is required",
				},
				ConfirmNewPassword:{
					required:"This field is required",
					equalTo:"New password and confirm password should be matched",
				},
			},
		});	
		// Change Password form end
		
		// User Group form start
			$("#AddUserGroupForm").validate({				
			rules: {
				GroupName:{
					required:true,
					lettersonly: true,
					remote: {
						url: "ajax-check-group-name.php",
						type: "post",
						data: {
						GroupName: function() {
							return $( "#GroupName" ).val();
							// return $('#AddKeywordForm :input[name="Keyword1"]').val();
							},
						},
					 },
				},
				Description:{
					required:true	
				},
				DisplayStatus:
				{
					required:true,
					lettersonly: true
				},
				"Modules[]":{
					required:true,
				},
			},
			messages: {
				GroupName: {
					required : "This field is required",
					lettersonly : "Please enter valid name",
					remote:"Group Name already exist!"
					//remote: jQuery.validator.format("Keyword already exist!.")
				},
				DisplayStatus:{
					required : "This field is required",
				},
				"Modules[]":{
					required: "You must check at least 1 check box",
					},
			},			
		});
		// User group end
		
		// User Start
			$('#AddUserForm').validate({				
			rules: {
				Name:{
					required:true,
					lettersonly: true,
					remote: {
						url: "ajax-check-user-name.php",
						type: "post",
						data: {
						Name: function() {
							return $( "#Name" ).val();
							// return $('#AddKeywordForm :input[name="Keyword1"]').val();
							},
						},
					 },
				},
				Password:{
					required:true
				},
				CPassword:{
					required:true,
					equalTo:'#Password'
				},
				QuestionId:{
					required:true	
				},
				Answer:{
					required:true,
				},
				Status:
				{
					required:true,
				},
				"Groups[]":{
					required:true,
				},
			},
			messages: {
				Name: {
					required : "This field is required",
					lettersonly : "Please enter valid name",
					remote:"Name already exist!"
					//remote: jQuery.validator.format("Keyword already exist!.")
				},
				CPassword:{
					equalTo:"Password and confirm password should be matched",
				},
				Status:{
					required : "This field is required",
				},
				"Groups[]":{
					required: "You must check at least 1 check box",
					},
			},			
		});
		// User End
		
		// Visitor form start
			
			$('#AddVisitorForm').validate({				
			rules: {
				/*TitleId:{
					required:true
				},
				FName:{
					required:true,
					lettersonly: true
				},
				MName:{
					required:true,
					lettersonly: true
				},
				LName:{
					required:true,
					lettersonly: true
				},
				DOB:{
					required:true,
					greaterThan: "#TodaysDate"
				},
				GuidePortNo:{
					required:true
				},*/
				
			//  First visitor strat
				TitleId1:{
					required:true
				},
				FName1:{
					required:true,
					lettersonly: true
				},
				MName1:{
					required:true,
					lettersonly: true
				},
				LName1:{
					required:true,
					lettersonly: true
				},
				DOB1:{
					required:true,
					greaterThan: "#TodaysDate1"
				},
				GuidePortNo1:{
					required:true
				},
			// First visior end
				
			//  Second visitor strat
				TitleId2:{
					required:true
				},
				FName2:{
					required:true,
					lettersonly: true
				},
				MName2:{
					required:true,
					lettersonly: true
				},
				LName2:{
					required:true,
					lettersonly: true
				},
				DOB2:{
					required:true,
					greaterThan: "#TodaysDate2"
				},
				GuidePortNo2:{
					required:true
				},
			// Second visior end	
			
			//  Third visitor strat
				TitleId3:{
					required:true
				},
				FName3:{
					required:true,
					lettersonly: true
				},
				MName3:{
					required:true,
					lettersonly: true
				},
				LName3:{
					required:true,
					lettersonly: true
				},
				DOB3:{
					required:true,
					greaterThan: "#TodaysDate3"
				},
				GuidePortNo3:{
					required:true
				},
			// Third visior end
			
			//  Fourth visitor strat
				TitleId4:{
					required:true
				},
				FName4:{
					required:true,
					lettersonly: true
				},
				MName4:{
					required:true,
					lettersonly: true
				},
				LName4:{
					required:true,
					lettersonly: true
				},
				DOB4:{
					required:true,
					greaterThan: "#TodaysDate4"
				},
				GuidePortNo4:{
					required:true
				},
			// Fourth visior end
			
			//  Fifth visitor strat
				TitleId5:{
					required:true
				},
				FName5:{
					required:true,
					lettersonly: true
				},
				MName5:{
					required:true,
					lettersonly: true
				},
				LName5:{
					required:true,
					lettersonly: true
				},
				DOB5:{
					required:true,
					greaterThan: "#TodaysDate5"
				},
				GuidePortNo5:{
					required:true
				},
			// Fifth visior end
			
			//  Sixth visitor strat
				TitleId6:{
					required:true
				},
				FName6:{
					required:true,
					lettersonly: true
				},
				MName6:{
					required:true,
					lettersonly: true
				},
				LName6:{
					required:true,
					lettersonly: true
				},
				DOB6:{
					required:true,
					greaterThan: "#TodaysDate6"
				},
				GuidePortNo6:{
					required:true
				},
			// Sixth visior end
			
			//  Seven visitor strat
				TitleId7:{
					required:true
				},
				FName7:{
					required:true,
					lettersonly: true
				},
				MName7:{
					required:true,
					lettersonly: true
				},
				LName7:{
					required:true,
					lettersonly: true
				},
				DOB7:{
					required:true,
					greaterThan: "#TodaysDate7"
				},
				GuidePortNo7:{
					required:true
				},
			// Seven visior end
			
			//  Eight visitor strat
				TitleId8:{
					required:true
				},
				FName8:{
					required:true,
					lettersonly: true
				},
				MName8:{
					required:true,
					lettersonly: true
				},
				LName8:{
					required:true,
					lettersonly: true
				},
				DOB8:{
					required:true,
					greaterThan: "#TodaysDate8"
				},
				GuidePortNo8:{
					required:true
				},
			// Eight visior end
			
			//  Nine visitor strat
				TitleId9:{
					required:true
				},
				FName9:{
					required:true,
					lettersonly: true
				},
				MName9:{
					required:true,
					lettersonly: true
				},
				LName9:{
					required:true,
					lettersonly: true
				},
				DOB9:{
					required:true,
					greaterThan: "#TodaysDate9"
				},
				GuidePortNo9:{
					required:true
				},
			// Nine visior end
			
			//  Ten visitor strat
				TitleId10:{
					required:true
				},
				FName10:{
					required:true,
					lettersonly: true
				},
				MName10:{
					required:true,
					lettersonly: true
				},
				LName10:{
					required:true,
					lettersonly: true
				},
				DOB10:{
					required:true,
					greaterThan: "#TodaysDate10"
				},
				GuidePortNo10:{
					required:true
				},
			// Ten visior end
				groups: {
            		names: "PhoneNo MobileNo Email"
        		},
        		//rules: {
            		PhoneNo: {
                		require_from_group: [1, ".send"],
						phoneNo:true,
						minlength: 12
            		},
            		MobileNo: {
                		require_from_group: [1, ".send"],
						number:true,
						minlength: 9,
						maxlength: 15
            		},
					Email: {
						require_from_group: [1, ".send"],
						email: true
					},
				//},
				Address1:{
					required:true	
				},
				Address2:{
					required:true	
				},
				CountryId:{
					required:true	
				},
				PostalCode:{
					required:true,
					number:true
				},
				VisitorCatId:{
					required:true,
				},
				ActiveStatus:{
					required:true
				},
			},
			messages: {
				Name: {
					required : "This field is required",
					lettersonly : "Please enter valid name",
				},
			},			
		});
		// Visitor form end
		
		// Edit Visitor Form start
			$('#EditVisitorForm').validate({				
			rules: {
				TitleId:{
					required:true
				},
				FName:{
					required:true,
					lettersonly: true
				},
				MName:{
					required:true,
					lettersonly: true
				},
				LName:{
					required:true,
					lettersonly: true
				},
				DOB:{
					required:true,
					greaterThan: "#TodaysDate"
				},
				Address1:{
					required:true	
				},
				Address2:{
					required:true	
				},
				CountryId:{
					required:true	
				},
				PostalCode:{
					required:true,
					number: true
				},
				groups: {
            		names: "PhoneNo MobileNo Email"
        		},
				PhoneNo: {
					require_from_group: [1, ".send"],
					phoneNo:true,
					minlength: 12
				},
				MobileNo: {
					require_from_group: [1, ".send"],
					number:true,
					minlength: 9,
					maxlength: 15
				},
				Email: {
					require_from_group: [1, ".send"],
					email: true
				},
				VisitorCatId:{
					required:true,
				},
				ActiveStatus:{
					required:true
				},
			},
			messages: {
				Name: {
					required : "This field is required",
					lettersonly : "Please enter valid name",
				},
			},			
		});
		// Edit visitor form end
		
		// Edit duplicate chinmaya id
			$("#EditChinmayaIdForm").validate({ 
			rules: { 
				ChinmayaId:{
					required:true,
					alphanumeric:true,
					remote:{
						url:"ajax-check-chinmaya-id.php",
						type:"post",
						data:{
							ChinmayaId:function(){
							return $('#ChinmayaId').val();		
							},
						},
					},
				},
			},
			messages: {
				ChinmayaId: {
					required : "This field is required",
					alphanumeric : "Please enter valid Country chinmaya id",
					remote : "Chinmaya Id already exists, Please enter another on",
				},
			},
		});	
		// Edit duplicate chinmaya id
		
		// Assign Guide Port start
			$("#AssignGuidePort").validate({ 
			rules: { 
				GuidePortNo:{
					required:true
				},
			},
			messages: {
				GuidePortNo:{
					required:"This field is required",
				},
				},
			});	
		// Assign Guide port End
		
		// View / edit cart start
			$("#EditViewCartForm").validate({ 
			rules: { 
				ReturnEntry:{
					required:true
				},
			},
			messages: {
				ReturnEntry:{
					required:"This field is required",
				},
				},
			});	
		// View / edit cart end
		
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
function removeBothValidations(field1,field2)
{ 
	$('#'+field1).rules('remove','required');
	$('#'+field2).rules('remove','remote');
} 
 function getCategory(elem1)
 {
	//alert(elem1);
	  $.ajax({
			url: "getCategory.php",
			type: "POST",
			data: {Section : elem1},
			success: function(result)
			{
				//alert(result);
				//$('#divCategory').innerHTML(result);
				$('#divCategory').html(result);
    		}
		});
 }
