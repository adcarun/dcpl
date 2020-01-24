<?php
	include("./phpincludes/header_inc.php");
	$obj=new GenericClass("vitvll_admission");
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
	
        <meta charset="utf-8">

        <title>VI Schools | View Admission form</title>

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
       <style>	
	#AddPackage label.error {
		color:red;
	}
	</style> 
        
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
                        <li><a href="javascript:void(0)"><i class="icon-home"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">View Admission form</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Text Inputs -->
                    <form name="frm" method="post" id="AddPackage" onReset="this.PName.focus();" action="add-package-action.php" enctype="multipart/form-data" class="form-horizontal form-box">
                    	<input type="hidden" name="Id" value="<?= $_POST['id'] ?>" />
                        <h4 class="form-box-header">View Admission form</h4>
                        
                        <h5 class="form-box-header">Note :<br>
							<ul class="icons-ul">
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>Here administrator can View Admission form.</small></li>
                            </ul>
                        </h5>
                        <div class="form-box-content">
                        <h4 class="form-box-sub-header">Payment Details</h4>
                            <!-- Input Sizes -->
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Admission form Id :</label>
                                <div class="col-md-3">
                                    <?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Id'])));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Amount :</label>
                                <div class="col-md-5">
                                    <?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Amount'])));?>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Tracking id :</label>
                                <div class="col-md-3">
                                	<?php
										if($arrData[0]['TrackingId']=='')
											echo " - ";
										else 
											echo $arrData[0]['TrackingId'];
									?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Bank Ref. No : </span></label>
                                <div class="col-md-3">
                                	<?php
										if($arrData[0]['BankRefNo']=='')
											echo " - ";
										else 
											echo htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['BankRefNo'])));
									?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Payment Mode :</label>
                                <div class="col-md-3">
                                	<?php
										if($arrData[0]['PaymentMode']=='')
											echo " - ";
										else 
											echo htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['PaymentMode'])));
									?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Card Name :</label>
                                <div class="col-md-3">
                                	<?php
										if($arrData[0]['CardName']=='')
											echo " - ";
										else 
											echo htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['CardName'])));
									?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Payment Status :</label>
                                <div class="col-md-3">
                                	<?php
										if($arrData[0]['PaymentStatus']=='')
											echo "Pending";
										else 
											echo htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['PaymentStatus'])));
									?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Status Message :</label>
                                <div class="col-md-3">
                                	<?php
										echo htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['StatusMessage'])));
									?>
                                </div>
                            </div>
                            <h4 class="form-box-sub-header">User Details</h4>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Course applied for :</label>
                                <div class="col-md-3">
                                    <?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['CourseAppliedFor'])));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Name of the Candidate :</label>
                                <div class="col-md-3">
                                    <?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['CandidateName'])));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Phone Number :</label>
                                <div class="col-md-3">
                                    <?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['PhoneNumber'])));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Phone Number (Alternet) :</label>
                                <div class="col-md-3">
                                    <?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['PhoneNumberAlternet'])));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Email :</label>
                                <div class="col-md-3">
                                	<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Email'])));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Qualification (Current Academic Status) :</label>
                                <div class="col-md-3">
                                    <?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Qualification'])));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Engineering Discipline :</label>
                                <div class="col-md-3">
                                    <?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['EngineeringDiscipline'])));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Preferred Batch :</label>
                                <div class="col-md-3">
                                    <?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['PreferredBatch'])));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Amount :</label>
                                <div class="col-md-3">
                                    <?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Amount'])));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Admission Date :</label>
                                <div class="col-md-3">
                                	<?=date("d, M Y h:i, a", strtotime($arrData[0]['RegDate']));?>
                                </div>
                            </div>
                            
                           <div class="form-group form-actions">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="button" class="btn btn-danger" onClick="document.location='./manage-admission.php?I=1'" title="Go back to Manage Admission" data-toggle="tooltip"><i class="icon-remove"></i> Go back to Manage Admission</button>
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