<?php
	
	include("./phpincludes/header_inc.php");
	$obj=new GenericClass("tbl_enquiry");
	$arrData=$obj->getData(" Id = ".$_POST['id']);
	//print_r($arrData);
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
 	<script>
		$(document).ready(function(){
			validateData();
		});
	</script>
    <style>	
	#Reminder label.error {
		color:red;
		font-size:12px;
		font-weight:normal;
	}
	</style>
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
			return Date.parse(startdatevalue) < Date.parse(value);
		}, "Reminder Date should be greater than Previous Dates.");
		
		jQuery("#Reminder").validate({ 
		rules: {
			EnquiryId:
			{
				required:true
			},
			Title:
			{
				required:true,
				alphanumeric:true
			},
			Description:
			{
				required:true,
			},
			ReminderDate:
			{
				required:true,
				dateCompaire:true
			},
			ReminderTime:
			{
				required:true
			},
		},
			messages: {
				Title: {
					required : "This field is required",
					alphanumeric : "Please enter valid name",
				}
			},
		});
	});
  </script>
        <meta charset="utf-8">

        <title>VI Schools | Add / Edit Reminder</title>

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
                        <li class="active"><a href="javascript:void(0)">Add / Edit Reminder</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Text Inputs -->
                    <form name="frm" method="post" id="Reminder" onReset="this.Name.focus();" action="add-reminder-enquiry-action.php" enctype="multipart/form-data" class="form-horizontal form-box">
                    	
                        <h4 class="form-box-header">Add / Edit Reminder</h4>
                        
                        <h5 class="form-box-header">Note :<br>
							<ul class="icons-ul">
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>Here administrator can Add / Edit Reminder.</small></li>
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>All Fields are Mandatory</small></li>
                        	</ul>
                        </h5>
                        <div class="form-box-content">
                            <!-- Input Sizes -->
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Enquiry :</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="EnquiryId" id="EnquiryId">
                                        <option value="">Select</option>
                                        <?php
                                           // $objSource=new GenericClass("tbl_source");
                                           // $arrSource=$objSource->getDatalimited("Id,Title"," ",false);
                                            foreach($arrData as $enquiry)
                                            {
											//	print_r($enquiry);
                                                ?>
                                                    <option value="<?php echo $enquiry['Id']; ?>" selected><?php echo $enquiry['Name']; ?></option>
                                                <?php	
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
							<div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Title :</label>
                                <div class="col-md-4">
                                    <input type="text" name="Title" id="Title" value="" maxlength="50" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Description :</label>
                                <div class="col-md-4">
                                	<textarea name="Description" id="Description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Date :</label>
                                <div class="col-md-8">
                                <div class="input-group date input-datepicker " data-date="<?=date('d/m/Y');?>" data-date-format="yyyy-mm-dd">
                                        <span class="input-group-addon"><i class="icon-calendar icon-fixed-width"></i></span>
                                        <input type="text" id="TransactionDateFrom" name="ReminderDate" value="" class="form-control" readonly style="width:110px;">
                                    </div>
                                </div>
                                <input type="hidden" name="TodaysDate" id="TodaysDate" value="<?=date('Y-m-d',strtotime("-1 days"));?>">
                            </div>
							 <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Reminder Time :</label>
                                <div class="col-md-4">
                                	<input class="form-control" type="text" id="time" name="ReminderTime"/>
                                </div>
                            </div>
							
                            <div class="form-group form-actions">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="submit" class="btn btn-success" title="Save All Data" data-toggle="tooltip"><i class="icon-save"></i> Submit</button>
                                    <?php //if ($_POST['id']=="") { ?>
                                    <button type="reset" class="btn btn-danger" title="Reset All Fields" data-toggle="tooltip"><i class="icon-repeat"></i> Reset</button>
                                    <?php //} ?>
                                    <button type="button" class="btn btn-danger" onClick="document.location='./manage-reminder.php?I=2'" title="Go back to Manage Reminder" data-toggle="tooltip"><i class="icon-remove"></i> Go back to Manage Reminder</button>
                                </div>
                            </div>
                            <!-- END Input Sizes -->
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
		minDate : moment()
    });
</script>


  
    </body>
	
        
    	
		<!--/*<script language="javascript" src="./js/common.js"></script>
        <script language="javascript" src="./js/javascriptcheck.js"></script>
        <script type="text/javascript" src="./js/EmployeeValidation.js"></script>
        <script type="text/javascript" src="./js/CheckEmployeeEmail.js"></script>*/-->
</html>