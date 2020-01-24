<?php
	
	include("./phpincludes/header_inc.php");
	$obj=new GenericClass("tbl_manager");
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
 	<script>
		$(document).ready(function(){
			validateData();
		});
	</script>
    <style>	
	#User label.error {
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
		
	
		$("#User").validate({ 
		rules: { 
			Name:
			{
				required:true,
				lettersonly: true
			},
			Email:
			{
				required:true,
				emailValidation:true,
				/*remote:{
					url:"ajax-check-user-email.php",
					type:"post",
					data:{
					Email:function(){
							return $("#Email").val();
						},
					},
				},*/
			},
			ContactNumber:
			{
				required:true,
				number : true,
				minlength:10
			},
			Password: 
			{
				required:true
			},
			AccessLevel: 
			{
				required:true
			},
			DisplayStatus: 
			{
				required:true
			},
		},
			messages: {
				Name: {
					required : "This field is required",
					lettersonly : "Please enter valid name",
				},
				Email:{
					remote : "Email id already exists, Please enter another on"
				},
				ContactNumber:{
					number: "Please enter digits only",
					minlength: "Please enter at-least 10 digits.",
				},
			},
		});
	});
function removeValidationRemote(field)
{ 
	$('#'+field).rules('remove','remote');
}
  </script>
        <meta charset="utf-8">

        <title>VI Schools | Add / Edit User</title>

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
                        <li class="active"><a href="javascript:void(0)">Add / Edit User</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Text Inputs -->
                    <form name="frm" method="post" id="User" onReset="this.Name.focus();" action="add-user-action.php" enctype="multipart/form-data" class="form-horizontal form-box" autocomplete="false">
                    	<input type="hidden" name="Id" value="<?= $_POST['id'] ?>" />
                        <h4 class="form-box-header">Add / Edit User</h4>
                        
                        <h5 class="form-box-header">Note :<br>
							<ul class="icons-ul">
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>Here administrator can Add / Edit User.</small></li>
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>All Fields are Mandatory</small></li>
                        	</ul>
                        </h5>
                        <div class="form-box-content">
                            <!-- Input Sizes -->
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Name :</label>
                                <div class="col-md-4">
                                    <input type="text" name="Name" id="Name" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Name'])));?>" maxlength="50" class="form-control" autocomplete="false">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Email :</label>
                                <div class="col-md-4">
                                    <input type="text" name="Email" id="Email" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Email'])));?>" maxlength="50" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Mobile Number :</label>
                                <div class="col-md-4">
                                    <input type="text" name="ContactNumber" id="ContactNumber" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['ContactNumber'])));?>" maxlength="10" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Password :</label>
                                <div class="col-md-4">
                                    <input type="password" name="Password" id="Password" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Password'])));?>"  class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Access Level :</label>
                                <div class="col-md-3">
                                	<?php 
									if($_POST['id']!="")
									{
									?>
                                		<!--<input type="hidden" name="AccessLevel" value="<?//=$arrData[0]['AccessLevel']?>">-->
										<select name="AccessLevel" id="AccessLevel" class="form-control">
                                    		<option value="Admin" <?php if($arrData[0]['AccessLevel'] == 'Admin') echo "selected"; ?>>Admin</option>
                                        	<option value="Executive" <?php if($arrData[0]['AccessLevel'] == 'Executive') echo "selected"; ?>>Executive</option>
                                    	</select>
                                    	<?//=$arrData[0]['AccessLevel']?>
                                        <?php
									} 
									else
									{
                                		?>
                                        <select name="AccessLevel" id="AccessLevel" class="form-control">
                                    		<option value="">Select</option>
                                        	<option value="Admin" <?php if($arrData[0]['AccessLevel'] == 'Admin') echo "selected"; ?>>Admin</option>
                                        	<option value="Executive" <?php if($arrData[0]['AccessLevel'] == 'Executive') echo "selected"; ?>>Executive</option>
                                    	</select>
										<?php 
									}
									?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Status :</label>
                                <div class="col-md-3">
                                	<select name="DisplayStatus" id="DisplayStatus" class="form-control">
                                    	<option value="">Select</option>
                                        <option value="Active" <?php if(htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['DisplayStatus']))) == 'Active') echo "selected"; ?>>Active</option>
                                        <option value="Deactive" <?php if(htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['DisplayStatus']))) == 'Deactive') echo "selected"; ?>>Deactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-actions">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="submit" class="btn btn-success" title="Save All Data" data-toggle="tooltip" <?php if(isset($_POST['id'])){ ?> onClick="removeValidationRemote('Email');"  <?php } ?>><i class="icon-save"></i> Submit</button>
                                    <?php if ($_POST['id']=="") { ?>
                                    <button type="reset" class="btn btn-danger" title="Reset All Fields" data-toggle="tooltip"><i class="icon-repeat"></i> Reset</button>
                                    <?php } ?>
                                    <button type="button" class="btn btn-danger" onClick="document.location='./manage-user.php?I=3'" title="Go back to Manage User" data-toggle="tooltip"><i class="icon-remove"></i> Go back to Manage User</button>
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
        
        
    


  
    </body>
	
        
    	
		<!--/*<script language="javascript" src="./js/common.js"></script>
        <script language="javascript" src="./js/javascriptcheck.js"></script>
        <script type="text/javascript" src="./js/EmployeeValidation.js"></script>
        <script type="text/javascript" src="./js/CheckEmployeeEmail.js"></script>*/-->
</html>