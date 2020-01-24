<?php
	if($_POST['id']=='')
	{
		header("location:manage-enquiry.php?I=4");
		exit();
	}
	include("./phpincludes/header_inc.php");
	$obj=new GenericClass("tbl_enquiry");
	$arrData=$obj->getData(" Id = ".$_POST['id']);
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <!--<script src="./js/checkDBDetails.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>   
    <script src="./js/jquery.validate.js"></script>
	<script src="./js/all-script.js"></script>	
    <script src="./js/ajax-check.js"></script>	
	<script src="./js/framework.js"></script>	
 	<script>
		$(document).ready(function(){
			validateData();
		});
	</script>
    <style>	
	#Enquiry label.error {
		color:red;
		font-size:12px;
		font-weight:normal;
	}
	</style>
	<?php if($_SESSION['objLogin']->AccessLevel!="Admin"){ ?>
	<script>
  	$(document).ready(function() {
		jQuery.validator.addMethod("emailValidation", function(value, element) 
		{
    		return this.optional(element) || /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/i.test(value);
		}, "Please enter valid email id");	
		
		jQuery.validator.addMethod("lettersonly", function(value, element) 
		{
    		return this.optional(element) || /^[a-z\s]+$/i.test(value);
		}, "Only alphabetical characters");	
		
		jQuery.validator.addMethod("alphanumeric", function(value, element) {
    		return this.optional(element) || /^[a-zA-Z0-9 ]+$/i.test(value);
		}, "Please enter only alphanumeric characters");	
		
		jQuery.validator.addMethod("dateCompaire", function(value, element) {
			var startdatevalue = $('#TodaysDate').val();	
			return Date.parse(startdatevalue) >= Date.parse(value);
		}, "Enquiry Date should be less than Today's Date.");
		
		$("#Enquiry").validate({ 
		rules: { 
			Course:{
				required:true,
			},			
			Name:{
				required:true,
				lettersonly: true
			},
			Occupation:{
				required:true,
			},
			City:{
				required:true,
				lettersonly: true
			},	
			Phone:{
				required:true,
				number : true,
				minlength:10
			},
			Whatsapp:{
				required:true,
				number : true,
				minlength:10
			},
			Email:{
				required:true,
				emailValidation:true,
			},
			/*Visitdate:{
				required:true,
				dateCompaire:true,
			},
			Reason:{
				required:true,
			},*/
			CouselorsComments:{
				required:true,
			},
			Furtheraction:{
				required:true,
			},
			Type:{
				required:true,
			},			
			Source:{
				required:true,
			},
			Priority:{
				required:true,
			},
			Status:{
				required:true,
			},
			AssignedTo:{
				required:true,
			},
			RegTime:{
				required:true,
				dateCompaire:true,
			},
			EnqTime:{
				required:true,
				//dateCompaire:true,
			},
		},
			messages: {
				Name: {
					required : "This field is required",
					lettersonly : "Please enter only alphabets",
				},
				City: {
					required : "This field is required",
					lettersonly : "Please enter only alphabets",
				},
				Phone:{
					number: "Please enter only digits",
					minlength: "Please enter at-least 10 digits.",
				},
				Whatsapp:{
					number: "Please enter only digits",
					minlength: "Please enter at-least 10 digits.",
				},
			},
		});
	});
	function removeValidationRemote(field)
	{ 
		$('#'+field).rules('remove','remote');
	}
	
	function removeReadonly(val)
	{
		//alert(val);
		if(val==6){
			document.getElementById('OtherSource').removeAttribute('readonly');
		}else{
			document.getElementById('OtherSource').readOnly = true;
		}
	}
	
	
	
  </script>
  <?php }else{ ?>
  <script>
  	$(document).ready(function() {
		jQuery.validator.addMethod("emailValidation", function(value, element) 
		{
    		return this.optional(element) || /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/i.test(value);
		}, "Please enter valid email id");	
		
		jQuery.validator.addMethod("lettersonly", function(value, element) 
		{
    		return this.optional(element) || /^[a-z\s]+$/i.test(value);
		}, "Only alphabetical characters");	
		
		jQuery.validator.addMethod("alphanumeric", function(value, element) {
    		return this.optional(element) || /^[a-zA-Z0-9 ]+$/i.test(value);
		}, "Please enter only alphanumeric characters");	
		
		jQuery.validator.addMethod("dateCompaire", function(value, element) {
			var startdatevalue = $('#TodaysDate').val();	
			return Date.parse(startdatevalue) >= Date.parse(value);
		}, "Enquiry Date should be less than Today's Date.");
		
		$("#Enquiry").validate({ 
		rules: { 
			Course:{
				required:true,
			},			
			Name:{
				required:true,
				lettersonly: true
			},
			Occupation:{
				required:true,
			},
			City:{
				//required:true,
				lettersonly: true
			},	
			Phone:{
				required:true,
				number : true,
				minlength:10
			},
			Whatsapp:{
				//required:true,
				number : true,
				minlength:10
			},
			Email:{
				//required:true,
				emailValidation:true,
			},
			/*Visitdate:{
				required:true,
				dateCompaire:true,
			},
			Reason:{
				required:true,
			},*/
			CouselorsComments:{
				required:true,
			},
			/*Furtheraction:{
				required:true,
			},*/
			Type:{
				required:true,
			},			
			Source:{
				required:true,
			},
			Priority:{
				required:true,
			},
			Status:{
				required:true,
			},
			AssignedTo:{
				required:true,
			},
			RegTime:{
				required:true,
				dateCompaire:true,
			},
			EnqTime:{
				required:true,
				//dateCompaire:true,
			},
		},
			messages: {
				Name: {
					required : "This field is required",
					lettersonly : "Please enter only alphabets",
				},
				City: {
					//required : "This field is required",
					lettersonly : "Please enter only alphabets",
				},
				Phone:{
					number: "Please enter only digits",
					minlength: "Please enter at-least 10 digits.",
				},
				Whatsapp:{
					number: "Please enter only digits",
					minlength: "Please enter at-least 10 digits.",
				},
			},
		});
	});
	function removeValidationRemote(field)
	{ 
		$('#'+field).rules('remove','remote');
	}
	
	function removeReadonly(val)
	{
		//alert(val);
		if(val==6){
			document.getElementById('OtherSource').removeAttribute('readonly');
		}else{
			document.getElementById('OtherSource').readOnly = true;
		}
	}
  </script>
  <?php } ?>
  <script>
	/*function removeCompulsion(val)
	{
		//alert(val);
		if(val==17){
		}
	}*/
  </script>
  
        <meta charset="utf-8">

        <title>VI Schools | Edit Enquiry</title>

        <meta name="description" content="uAdmin is a Professional, Responsive and Flat Admin Template created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- The roboto font is included from Google Web Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic">

        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Related styles of various javascript plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Load a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (Browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support them) -->
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script> 


  
    </head>

    <!-- Add the class .fixed to <body> for a fixed layout on large resolutions (min: 1200px) -->
    <!-- <body class="fixed"> -->
    <body>
        <!-- Page Container -->
        <div id="page-container">
            <!-- Header -->
            <!-- Add the class .navbar-fixed-top or .navbar-fixed-bottom for a fixed header on top or bottom respectively -->
            <!-- <header class="navbar navbar-inverse navbar-fixed-top"> -->
            <!-- <header class="navbar navbar-inverse navbar-fixed-bottom"> -->
            <header class="navbar navbar-inverse">
                <!-- Mobile Navigation, Shows up  on smaller screens -->
                <ul class="navbar-nav-custom pull-right hidden-md hidden-lg">
                    <li class="divider-vertical"></li>
                    <li>
                        <!-- It is set to open and close the main navigation on smaller screens. The class .navbar-main-collapse was added to aside#page-sidebar -->
                        <a href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-main-collapse">
                            <i class="icon-reorder"></i>
                        </a>
                    </li>
                </ul>
                <!-- END Mobile Navigation -->

                <!-- Logo -->
                <?php include("./includes/logo.php"); ?>

                <!-- Loading Indicator, Used for demostrating how loading of widgets could happen, check main.js - uiDemo() -->
                

                <!-- Header Widgets -->
                <!-- You can create the widgets you want by replicating the following. Each one exists in a <li> element -->
                <ul id="widgets" class="navbar-nav-custom pull-right">
                    <!-- Just a divider -->
                    <!-- RSS Widget -->
                    <!-- Add .dropdown-left-responsive class to align the dropdown menu left (so its visible on mobile) -->
                    
                    <!-- END RSS Widget -->

                    <!-- Twitter Widget -->
                    <!-- Add .dropdown-left-responsive class to align the dropdown menu left (so its visible on mobile) -->
                    
                    <!-- END Twitter Widget -->

                    <!-- Messages Widget -->
                    <!-- Add .dropdown-left-responsive class to align the dropdown menu left (so its visible on mobile) -->
                    
                    <!-- END Messages Widget -->

                   <!-- Notifications Widget -->
                    <!-- Add .dropdown-center-responsive class to align the dropdown menu center (so its visible on mobile) -->
                   
                    <!-- END Notifications Widget -->

                    <!-- User Menu -->
                    	<?php include("./includes/header.php"); ?>
                    <!-- END User Menu -->
                </ul>
                <!-- END Header Widgets -->
            </header>
            <!-- END Header -->

            <!-- Inner Container -->
            <div id="inner-container">
                <!-- Sidebar -->
                <aside id="page-sidebar" class="collapse navbar-collapse navbar-main-collapse">
                    <!-- Sidebar search -->
                    
                    <!-- END Sidebar search -->

                    <!-- Primary Navigation -->
                    <?php
						include("./includes/super-admin-left-panel.php");
					?>
                    <!-- END Primary Navigation -->
					
                </aside>
                <!-- END Sidebar -->

                <!-- Page Content -->
                <div id="page-content">
                    <!-- Navigation info -->
                    <ul id="nav-info" class="clearfix">
                        <li><a href="dashboard.php?I=1"><i class="icon-home"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">Edit Enquiry</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Text Inputs -->
                    <form name="frm" method="post" id="Enquiry" onReset="this.CId.focus();" action="add-enquiry-action.php" enctype="multipart/form-data" class="form-horizontal form-box">
                    	<input type="hidden" name="Id" id="EId" value="<?= $_POST['id'] ?>" />                    	
						<?php putContext(); ?>
                        <?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
						<h4 class="form-box-header">Edit Enquiry</h4>
                        
                        <h5 class="form-box-header">Note :<br>
							<ul class="icons-ul">
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>Here administrator can Edit Enquiry.</small></li>								
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>Enquiry shall be forwarded to a right executive for further follow up</small></li>
								
                        	</ul>
                        </h5>
						<?php }else{ ?>
						<h4 class="form-box-header">Edit Enquiry</h4>
                        
                        <h5 class="form-box-header">Note :<br>
							<ul class="icons-ul">
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>Here Executive shall edit enquiry.</small></li>								
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>Executive can forward enquiry to other executive or admin for relevant follow up. </small></li>
								
                        	</ul>
                        </h5>	
						<?php } ?>
						
                        <div class="form-box-content">
						 <div class="row">
						  <div class="col-md-6">	
							<div class="form-group">
                              <div class="row">      
								<label class="control-label col-md-4" for="masked_phone">Name :<span style="color:red">*</span></label>
							<div class="col-md-8">
								<input type="text" id="Name"  name="Name" class="form-control" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Name'])));?>"> 
							</div>
						</div>
						  </div>
						  </div>
						  
						  <div class="col-md-6">	
							<div class="form-group">
                              <div class="row">      
								<label class="control-label col-md-4" for="masked_phone">Child Name : </label>
							<div class="col-md-8">
								<input type="text" id="childname"  name="childname" class="form-control" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['childname'])));?>"> 
							</div>
						</div>
						  </div>
						  </div>
						 
							
						  <div class="col-md-6">	
							<div class="form-group">
                				<div class="row"> 
                                <label class="control-label col-md-4" for="masked_phone">Enquiry Date :<span style="color:red">*</span></label>
                                <div class="col-md-8">
                                	<div>
                            			<div class="input-group date input-datepicker" data-date="<?=date('d/m/Y');?>" data-date-format="yyyy-mm-dd">
                                			<span class="input-group-addon"><i class="icon-calendar icon-fixed-width"></i></span>
                                			<input type="text" id="RegTime" name="RegTime" value="<?php if($arrData[0]['RegTime']!=''){ echo date('j M Y',strtotime($arrData[0]['RegTime']));}else{ echo date('j F Y'); }?>" class="form-control" readonly>
                            			</div>
                            		</div>
                                </div>
</div>
                                <input type="hidden" name="TodaysDate" id="TodaysDate" value="<?=date('Y-m-d');?>">
                            </div>
						  </div>
						  
						   <div class="col-md-6">	
							<div class="form-group">
                              <div class="row">      
								<label class="control-label col-md-4" for="masked_phone">Enq. Time :<span style="color:red">*</span></label>
							<div class="col-md-8">
								<input class="form-control" type="text" id="time" name="EnqTime" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['EnqTime'])));?>" /> 
							</div>
						</div>
						  </div>
						  </div>
						  
						  <div class="col-md-6" > 
						  <div class="form-group">
							<div class="row"> 
								<label class="control-label col-md-4" for="masked_phone">Message/Query :</label>
							<div class="col-md-8">
							<textarea name="Message" id="Message" class="form-control"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Message'])));?></textarea>								
						  </div>
						</div>
						  </div>
						 </div>
							<div class="col-md-6">	
						  <div class="form-group">
								<div class="row"> 
								<label class="control-label col-md-4" for="masked_phone">Email Id :<?php if($_SESSION['objLogin']->AccessLevel!="Admin"){ ?><span style="color:red">*</span><?php } ?></label>
						  <div class="col-md-8">
								<input type="text" id="Email"  name="Email"  value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Email'])));?>" class="form-control"> 
						  </div>
</div>
						  </div>
						</div>
						  
						
						  <div class="col-md-6">
                            <div class="form-group">
 
  							<div class="row"> 
                                <label class="control-label col-md-4" for="masked_phone">Interested In School :<span style="color:red">*</span></label>
                                <div class="col-md-8">
                                    <?php /*?><select class="select-chosen" name="CId" id="CId"><?php */?>
                                    <select class="form-control" name="Course" id="Course">
                                        <option value="">Select</option>
                                        <?php
                                            $objCourse=new GenericClass("tbl_ongoing_projects");
											$ArrCourse=$objCourse->getDatalimited("*"," where DisplayStatus='Publish' order by Name asc ",false);
                                            foreach($ArrCourse as $Course)
                                            {
                                                ?>
                                                    <option value="<?=$Course['Id']?>"<?php if($arrData[0]['Course']==$Course['Id']){echo "selected"; }?>><?=$Course['Name']?></option>
                                                <?php	
                                            }
                                        ?>
                                    </select>
                                </div>
							</div>
                            </div>
						  </div>
						  
						  <div class="col-md-6">	
						  <div class="form-group">
 							<div class="row"> 
								<label class="control-label col-md-4" for="masked_phone">Phone Number :<span style="color:red">*</span></label>
						  <div class="col-md-8">
								<input type="text" id="Phone"  name="Phone" maxlength="10" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Phone'])));?>" class="form-control"> 
						  </div>
</div>
						  </div>
						</div> 
						<div class="col-md-6"> 	
						  <div class="form-group">
							<div class="row"> 
								<label class="control-label col-md-4" for="masked_phone">WhatsApp Number :<?php if($_SESSION['objLogin']->AccessLevel!="Admin"){ ?><span style="color:red">*</span><?php } ?></label>
						  <div class="col-md-8">
								<input type="text" id="Whatsapp"  name="Whatsapp" maxlength="10" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Whatsapp'])));?>" class="form-control"> 
						  </div>
</div>
						  </div>
						</div>
						
						  <div class="col-md-6">
						  <div class="form-group">
   							<div class="row"> 
								<label class="control-label col-md-4" for="masked_phone">Current location (City) :<?php if($_SESSION['objLogin']->AccessLevel!="Admin"){ ?><span style="color:red">*</span><?php } ?></label>
							<div class="col-md-8">
								<input type="text" id="City"  name="City" class="form-control" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['City'])));?>"> 
							</div>
</div>
							</div>
						 </div>	
						 
						 <div class="col-md-6">	
							<div class="form-group">
  								<div class="row"> 
                                <label class="control-label col-md-4" for="masked_phone">Enquiry Status :<span style="color:red">*</span></label>
                                <div class="col-md-8">
                                	<select class="form-control" name="Status" id="Status">
                                        <option value="">Select</option>
                                        <?php
                                            $objStatus=new GenericClass("tbl_site_codes");
                                            $arrStatus=$objStatus->getDatalimited("Id,Value"," where Category = 'Enquiry Status' order by Id asc ",false);
                                            foreach($arrStatus as $Status)
                                            {
                                                ?>
                                                    <option value="<?=$Status['Id']?>"<?php if($arrData[0]['Status']==$Status['Id']){echo "selected"; }?>><?=$Status['Value']?></option>
                                                <?php	
                                            }
                                        ?>
                                    </select>
                                </div>
</div>
                            </div>
						</div>
						 
						 <div class="col-md-6">	
						   <div class="form-group">
  								<div class="row"> 
                                <label class="control-label col-md-4" for="masked_phone">Type Of Enquiry :<span style="color:red">*</span></label>
                                <div class="col-md-8">
                                	<select class="form-control" name="Type" id="Type"  onchange="removeCompulsion(this.value)">
                                        <option value="">Select</option>
                                        <?php
                                            $objType=new GenericClass("tbl_site_codes");
                                            $arrType=$objType->getDatalimited("Id,Value"," where Category = 'Enquiry Type' order by Id asc ",false);
                                            foreach($arrType as $Type)
                                            {
                                                ?>
                                                    <option value="<?=$Type['Id']?>"<?php if($arrData[0]['Type']==$Type['Id']){echo "selected"; }?>><?=$Type['Value']?></option>
                                                <?php	
                                            }
                                        ?>
                                    </select>
                                </div>
</div>
                            </div>
						  </div>
						  
						  <div class="col-md-6">	
                            <div class="form-group">
								<div class="row"> 
                                <label class="control-label col-md-4" for="masked_phone">Priority :<span style="color:red">*</span></label>
                                <div class="col-md-8">
                                	<select class="form-control" name="Priority" id="Priority">
                                        <option value="">Select</option>
										<option value="Low"<?php if($arrData[0]['Priority']=='Low'){echo "selected"; }?>>Low</option>
										<option value="Normal"<?php if($arrData[0]['Priority']=='Normal'){echo "selected"; }?>>Normal</option>
										<option value="High"<?php if($arrData[0]['Priority']=='High'){echo "selected"; }?>>High</option> 	
                                    </select>
                                </div>
</div>
                            </div>
                         </div>
						 <?php /*
						 <div class="col-md-6">	
						  <div class="form-group">
							<div class="row"> 
                                <label class="control-label col-md-4" for="masked_phone">Highest Qualification :</label>
                                <div class="col-md-8">
                                	<select class="form-control" name="Qualification" id="Qualification">
                                        <option value="">Select</option>
										<option value="Diploma Civil"<?php if($arrData[0]['Qualification']=='Diploma Civil'){echo "selected"; }?>>Diploma Civil</option>
                                        <option value="BE Civil"<?php if($arrData[0]['Qualification']=='BE Civil'){echo "selected"; }?>>BE Civil</option>                                        
                                        <option value="PG"<?php if($arrData[0]['Qualification']=='PG'){echo "selected"; }?>>PG</option>
										<option value="TE/SE appearing"<?php if($arrData[0]['Qualification']=='TE/SE appearing'){echo "selected"; }?>>TE/SE appearing</option>
										<option value="BE appearing"<?php if($arrData[0]['Qualification']=='BE appearing'){echo "selected"; }?>>BE appearing</option>
										<option value="BE / B Tech Civil completed"<?php if($arrData[0]['Qualification']=='BE / B Tech Civil completed'){echo "selected"; }?>>BE / B Tech Civil completed</option>
										<option value="Other"<?php if($arrData[0]['Qualification']=='Other'){echo "selected"; }?>>Other</option>
									</select>
                                </div>
</div>
                            </div>
						</div>
						
						<div class="col-md-6">	
							<div class="form-group">
 								<div class="row"> 
								<label class="control-label col-md-4" for="masked_phone">Experience (in months, if any) :</label>
						  <div class="col-md-8">
								<input type="text" id="Experience"  name="Experience" maxlength="10" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Experience'])));?>" class="form-control"> 
						  </div>
							</div>
						  </div>
						</div> 
						
						<div class="col-md-6">	
							<div class="form-group">
								<div class="row"> 
                                <label class="control-label col-md-4" for="masked_phone">Occupation :<span style="color:red">*</span></label>
                                <div class="col-md-8">
                                	<select class="form-control" name="Occupation" id="Occupation">
                                        <option value="">Select</option>
                                        <option value="BE Fresher"<?php if($arrData[0]['Occupation']=='BE Fresher'){echo "selected"; }?>>BE Fresher</option>
										<option value="BE student"<?php if($arrData[0]['Occupation']=='BE student'){echo "selected"; }?>>BE student</option>
                                         <option value="SE student"<?php if($arrData[0]['Occupation']=='SE student'){echo "selected"; }?>>SE student</option>
										 <option value="ME/ MTech student"<?php if($arrData[0]['Occupation']=='ME/ MTech student'){echo "selected"; }?>>ME/ MTech student</option>
										<option value="ME/ MTech fresher"<?php if($arrData[0]['Occupation']=='ME/ MTech fresher'){echo "selected"; }?>>ME/ MTech fresher</option>
										<option value="TE student"<?php if($arrData[0]['Occupation']=='TE student'){echo "selected"; }?>>TE student</option>
                                        <option value="Working professional"<?php if($arrData[0]['Occupation']=='Working professional'){echo "selected"; }?>>Working professional</option>
										<option value="Professor / HOD / T&P"<?php if($arrData[0]['Occupation']=='Professor / HOD / T&P'){echo "selected"; }?>>Professor / HOD / T&P</option>
										<option value="Corporate official"<?php if($arrData[0]['Occupation']=='Corporate official'){echo "selected"; }?>>Corporate official</option>
										<option value="Other"<?php if($arrData[0]['Occupation']=='Other'){echo "selected"; }?>>Other</option>
										<option value="Other"<?php if($arrData[0]['Occupation']=='Not known'){echo "selected"; }?>>Not known</option>
									</select>
                                </div>
</div>
                            </div>
						  </div>
						  
						  <div class="col-md-6">	
						 <div class="form-group">
                           <div class="row"> 
								<label class="control-label col-md-4" for="masked_phone">Passing year of BE or highest qualification :</label>
						  <div class="col-md-8">
								<input type="text" id="PassingYear"  name="PassingYear" maxlength="4" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['PassingYear'])));?>" class="form-control"> 
						  </div>
</div>
						  </div>
						</div>
						
						<div class="col-md-6">	
							<div class="form-group">
 								<div class="row"> 
								<label class="control-label col-md-4" for="masked_phone">Reason to undergo training at Infini
 : </label>
							<div class="col-md-8">
							<!--<textarea name="Reason" id="Reason" class="form-control"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Reason'])));?></textarea>								-->
								<select class="form-control" name="Reason" id="Reason">
                                        <option value="">Select</option>
										<option value="Higher qualification / PG"<?php if($arrData[0]['Reason']=='Higher qualification / PG'){echo "selected"; }?>>Higher qualification / PG</option>
                                        <option value="Enhancing skills"<?php if($arrData[0]['Reason']=='Enhancing skills'){echo "selected"; }?>>Enhancing skills</option>                                        
                                        <option value="Increment / Promotion"<?php if($arrData[0]['Reason']=='Increment / Promotion'){echo "selected"; }?>>Increment / Promotion</option>
										<option value="Going abroad"<?php if($arrData[0]['Reason']=='Going abroad'){echo "selected"; }?>>Going abroad</option>
										<option value="Job / Placement"<?php if($arrData[0]['Reason']=='Job / Placement'){echo "selected"; }?>>Job / Placement</option>
										<option value="Not sure"<?php if($arrData[0]['Reason']=='Not sure'){echo "selected"; }?>>Not sure</option>
										<option value="Other"<?php if($arrData[0]['Reason']=='Other'){echo "selected"; }?>>Other</option>
									</select>
						  </div>
</div>
						  </div>
						 </div>
						 */?>
						 <div class="col-md-6">
							<div class="form-group">
								<div class="row"> 
                                <label class="control-label col-md-4" for="masked_phone">Visit to School (date)
 :</label>
                                <div class="col-md-8">
                                	<div class="col-md-8">
                            			<div class="input-group date input-datepicker" data-date="<?=date('d/m/Y');?>" data-date-format="yyyy-mm-dd">
                                			<span class="input-group-addon"><i class="icon-calendar icon-fixed-width"></i></span>
                                			<input type="text" id="Visitdate" name="Visitdate" value="<?php if($arrData[0]['Visitdate']!=''){ echo date('j M Y',strtotime($arrData[0]['Visitdate']));}?>" class="form-control" readonly style="margin-left:35px;">
                            			</div>
                            		</div>
                                </div>
</div>
                                <!--<input type="hidden" name="TodaysDate" id="TodaysDate" value="<?=date('Y-m-d');?>">-->
                            </div>
						</div>
						 
						 
						
					
						
						<div class="col-md-6">	
                            <div class="form-group">
                                <div class="row"> 
								<label class="control-label col-md-4" for="masked_phone">Referred by (if any) :</label>
							<div class="col-md-8">
								<input type="text" id="ReferredBy"  name="ReferredBy" class="form-control" value="<?php if($arrData[0]['ReferredBy']!=''){ echo $arrData[0]['ReferredBy'];}?>"> 
							</div>
</div>
							</div>
						  </div>	
						  
						   <div class="col-md-6"> 	
							<div class="form-group">
								<div class="row"> 
                                <label class="control-label col-md-4" for="masked_phone">Source :<span style="color:red">*</span></label>
                                <div class="col-md-8">
                                	<select class="form-control" name="Source" id="Source" onchange="removeReadonly(this.value)">
                                        <option value="">Select</option>
                                        <?php
                                            $objSource=new GenericClass("tbl_source");
                                            $arrSource=$objSource->getDatalimited("Id,Title"," ",false);
                                            foreach($arrSource as $Source)
                                            {
                                                ?>
                                                    <option value="<?=$Source['Id']?>"<?php if($arrData[0]['Source']==$Source['Id']){echo "selected"; }?>><?=$Source['Title']?></option>
                                                <?php	
                                            }
                                        ?>
                                    </select>
                        	</div></div>
                            </div>
						   </div>
						   <div class="col-md-6">	
							<div class="form-group">
								<div class="row"> 
								<label class="control-label col-md-4" for="masked_phone">Other Source :</label>
							<div class="col-md-8">
								<input type="text" id="OtherSource"  name="OtherSource" class="form-control" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['OtherSource'])));?>" <?php if($arrData[0]['Source']!=6){ ?>readonly<?php } ?>> 
							</div>
</div>
							</div>
						   </div>
						 <?php /*
						 <div class="col-md-6">	
						  <div class="form-group">
							<div class="row"> 
								<label class="control-label col-md-4" for="masked_phone">Company name where working / Institute name :</label>
						  <div class="col-md-8">
								<input type="text" id="Companyname"  name="Companyname" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Companyname'])));?>" class="form-control"> 
						  </div>
</div>
						  </div>
						</div>
						
						<div class="col-md-6">	
						  <div class="form-group">
							<div class="row"> 
								<label class="control-label col-md-4" for="masked_phone">Position (Post) :</label>
						  <div class="col-md-8">
								<input type="text" id="Position"  name="Position" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Position'])));?>" class="form-control"> 
						  </div>
</div>
						  </div>
						</div>
						
						 <div class="col-md-6">
						  <div class="form-group">
							<div class="row"> 
                                <label class="control-label col-md-4" for="masked_phone">Training period (Tentative month/ batch) :</label>
                                <div class="col-md-8">
                                	<input type="text" id="Trainingperiod"  name="Trainingperiod" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Trainingperiod'])));?>" class="form-control"> 
                                </div>
</div>
                            </div>
						 </div>
						 <div class="col-md-6">	
							<div class="form-group">
								<div class="row"> 
                                <label class="control-label col-md-4" for="masked_phone">Preferred slot of training :</label>
                                <div class="col-md-8">
                                	<select class="form-control" name="PreferredSlot" id="PreferredSlot">
                                        <option value="">Select</option>
										<option value="PGP-Full time"<?php if($arrData[0]['PreferredSlot']=='PGP-Full time'){echo "selected"; }?>>PGP-Full time</option>
										<option value="Morning 8.00 to 9.30"<?php if($arrData[0]['PreferredSlot']=='Morning 8.00 to 9.30'){echo "selected"; }?>>Morning 8.00 to 9.30</option>
										<option value="10.00 to 12:00"<?php if($arrData[0]['PreferredSlot']=='10.00 to 12:00'){echo "selected"; }?>>10.00 to 12:00</option>
										<option value="1:00 to 3:00 pm"<?php if($arrData[0]['PreferredSlot']=='1:00 to 3:00 pm'){echo "selected"; }?>>1:00 to 3:00 pm</option>
										<option value="4:00 to 6:00 pm"<?php if($arrData[0]['PreferredSlot']=='4:00 to 6:00 pm'){echo "selected"; }?>>4:00 to 6:00 pm</option>
										<option value="Evening 7:00 to 8:30"<?php if($arrData[0]['PreferredSlot']=='Evening 7:00 to 8:30'){echo "selected"; }?>>Evening 7:00 to 8:30</option>
										<option value="Sunday full time"<?php if($arrData[0]['PreferredSlot']=='Sunday full time'){echo "selected"; }?>>Sunday full time</option>
										 <option value="Saturday & Sunday"<?php if($arrData[0]['PreferredSlot']=='Saturday & Sunday'){echo "selected"; }?>>Saturday & Sunday</option>	
                                    </select>
                                </div>
</div>
                            </div>
                          </div>
						
						<div class="col-md-6" > 
						  <div class="form-group">
							<div class="row"> 
								<label class="control-label col-md-4" for="masked_phone">Fees & Discount proposed :<span style="color:red">*</span></label>
							<div class="col-md-8">
							<input type="text" id="FeesDiscount"  name="FeesDiscount" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['FeesDiscount'])));?>" class="form-control">
						   </div>
						</div>
						  </div>
						 </div>
						 						
						<div class="col-md-6" > 
						  <div class="form-group">
							<div class="row"> 
								<label class="control-label col-md-4" for="masked_phone">Fees Paid :</label>
							<div class="col-md-8">
							<input type="text" id="FeesPaid"  name="FeesPaid" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['FeesPaid'])));?>" class="form-control">
						   </div>
						</div>
						  </div>
						 </div>
						
						 <div class="col-md-6" > 
						  <div class="form-group">
							<div class="row"> 
								<label class="control-label col-md-4" for="masked_phone">Fees Balance :</label>
							<div class="col-md-8">
							<input type="text" id="FeesBalance"  name="FeesBalance" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['FeesBalance'])));?>" class="form-control">
						   </div>
						</div>
						  </div>
						 </div>
						<div class="col-md-6" > 
						  <div class="form-group">
							<div class="row"> 
								<label class="control-label col-md-4" for="masked_phone">Mode :</label>
							<div class="col-md-8">
								<select class="form-control" name="Mode" id="Mode">
                                        <option value="">Select</option>
										<option value="Classroom training"<?php if($arrData[0]['Mode']=='Classroom training'){echo "selected"; }?>>Classroom training</option>
										<option value="Online"<?php if($arrData[0]['Mode']=='Online'){echo "selected"; }?>>Online</option>
								</select>								
						  </div>
						  </div>
						  </div>
						 </div>
						 */ ?>
						<div class="col-md-6" > 
						  <div class="form-group">
							<div class="row"> 
								<label class="control-label col-md-4" for="masked_phone">Counsellor's Comment :<span style="color:red">*</span></label>
							<div class="col-md-8">
							<textarea name="CouselorsComments" id="CouselorsComments" class="form-control"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['CouselorsComments'])));?></textarea>								
						  </div>
						</div>
						  </div>
						 </div>
						 <?php /*
						 <div class="col-md-6" > 
						  <div class="form-group">
							<div class="row"> 
								<label class="control-label col-md-4" for="masked_phone">Location Of Training : </label>
							<div class="col-md-8">
							<textarea name="LocationTraining" id="LocationTraining" class="form-control"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['LocationTraining'])));?></textarea>								
						  </div>
						</div>
						  </div>
						 </div>
						
						<div class="col-md-6">	
							<div class="form-group">
								<div class="row"> 
								<label class="control-label col-md-4" for="masked_phone">Further Action :<span style="color:red">*</span></label>
							<div class="col-md-8">
							<textarea name="Furtheraction" id="Furtheraction" class="form-control"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Furtheraction'])));?></textarea>								
						  </div>
</div>
						  </div>
                        </div>
						*/?>
							<?php
							//if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
							<div class="col-md-6">	
                            <div class="form-group">
								<div class="row"> 
                                <label class="control-label col-md-4" for="masked_phone">Forwarded To :<span style="color:red">*</span></label>
                                <div class="col-md-8">
                                	<select class="form-control" name="AssignedTo" id="AssignedTo">
                                        <option value="">Select</option>
                                        <?php
                                            $objAssignTo=new GenericClass("tbl_manager");
                                            $arrAssignTo=$objAssignTo->getDatalimited("Id,Name"," where DisplayStatus = 'Active' ",false);
                                            foreach($arrAssignTo as $AssignTo)
                                            {
                                                ?>
                                                    <option value="<?=$AssignTo['Id']?>"<?php if($arrData[0]['AssignedTo']==$AssignTo['Id']){echo "selected"; }?>><?=$AssignTo['Name']?></option>
                                                <?php	
                                            }
                                        ?>
                                    </select>
                        	</div>
</div>
                            </div>
							</div>
                            <?php //} ?>
							</div>
							<div class="row">
                            <div class="col-md-12">	
                            <div class="form-group form-actions">
								<div class="row">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="submit" class="btn btn-success" title="Save All Data" data-toggle="tooltip" <?php if(isset($_POST['id'])){ ?> onClick="removeValidationRemote('CPersonEmail');"  <?php } ?>><i class="icon-save"></i> Submit</button>
                                    <?php if ($_POST['id']=="") { ?>
                                    <button type="reset" class="btn btn-danger" title="Reset All Fields" data-toggle="tooltip"><i class="icon-repeat"></i> Reset</button>
                                    <?php } ?>
                                   <button type="button" class="btn btn-danger" onClick="goBacknew(this.form, './manage-enquiry.php?I=4');" title="Go back to Manage Enquiry" data-toggle="tooltip"><i class="icon-remove"></i> Go back to Manage Enquiry</button>
								   <button type="submit" class="btn btn-success" title="Save & Redirect" data-toggle="tooltip" <?php if(isset($_POST['id'])){ ?> onClick="removeValidationRemote('CPersonEmail');"  <?php } ?> name="cmdfollowup"value="followup"><i class="icon-save"></i> Save & Set Follow up</button>
                                </div>
                            </div>
							</div>
							</div>
                            <!-- END Input Sizes -->
						   </div>	
						</div>
                    </form>
                    <!-- END Text Inputs -->
				</div>
                <!-- END Page Content -->

                <!-- Footer -->
                	<?php include("./includes/footer.php");	?>                
                <!-- END Footer -->
            </div>
            <!-- END Inner Container -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, check main.js - scrollToTop() -->
        

        <!-- User Modal Settings, appears when clicking on 'User Settings' link found on user dropdown menu (header, top right) -->
        
        <!-- END User Modal Settings -->

        <!-- Excanvas for canvas support on IE8 -->
        <!--[if lte IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

        <!-- Get Jquery library from Google but if something goes wrong get Jquery from local file - Remove 'http:' if you have SSL -->
        
        <?php include("./includes/userProfile.php"); ?>
        <!-- Javascript code only for this page -->
        
        
    

<script>
    jQuery('#time').datetimepicker({
        format: 'HH:mm:ss',
		//minDate : moment()
		
    });
</script>
  
    </body>
	
        
    	
		<!--/*<script language="javascript" src="./js/common.js"></script>
        <script language="javascript" src="./js/javascriptcheck.js"></script>
        <script type="text/javascript" src="./js/EmployeeValidation.js"></script>
        <script type="text/javascript" src="./js/CheckEmployeeEmail.js"></script>*/-->
</html>