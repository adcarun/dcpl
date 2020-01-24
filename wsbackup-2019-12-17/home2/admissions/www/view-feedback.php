<?php
	include("./phpincludes/header_inc.php");
	if($_SESSION['objLogin']->AccessLevel!="Super Admin")
	{
		session_destroy();
		header("location:index.php");
		exit();
	}
	$obj=new GenericClass("id_feedback");
	$arrData=$obj->getData(" Id = ".$_REQUEST['id']);
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    	
        <meta charset="utf-8">

        <title>VI Schools | View Feedback</title>

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
                        <li><a href="manage-quran.php?I=1"><i class="icon-home"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">View Feedback</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Text Inputs -->
                    <form name="frm" method="post" onReset="this.Weight.focus();" action="" enctype="multipart/form-data" class="form-horizontal form-box">
                    	<input type="hidden" name="Id" value="<?= $_REQUEST['id'] ?>" />
                        <h4 class="form-box-header">View Feedback</h4>
                        
                        <h5 class="form-box-header">Note :<br>
							<ul class="icons-ul">
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>Here administrator can view Feedback.</small></li>
                            </ul>
                        </h5>
                        <div id='translControl' class="DisplayNone">
                            <input type='hidden' id="transl1"/>
                        </div>
                        <div class="form-box-content">
                            <!-- Input Sizes -->
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Name :</label>
                                <div class="col-md-8">
                                <?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Name'])));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Email :</label>
                                <div class="col-md-8">
                                <?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Email'])));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Phone :</label>
                                <div class="col-md-3">
                                <?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Phone'])));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-input-small">Comment :</label>
                                <div class="col-md-4">
                                	<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Comment'])));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-input-small">Feedback Date :</label>
                                <div class="col-md-4">
                                	<?=date('d-m-Y',strtotime($arrData[0]['RegDate']));?>
                                </div>
                            </div>
                            <div class="form-group form-actions">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="button" class="btn btn-danger" onClick="document.location='./manage-feedback.php?I=8'" title="Go back to Manage Feedback" data-toggle="tooltip"><i class="icon-remove"></i> Go back to Manage Feedback</button>
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

       <?php 
	   	include("./includes/userProfile.php"); 
		include("./includes/MarathiEditor.php");
	   ?>
        <!-- Javascript code only for this page -->
    </body>
		<script language="javascript" src="./js/common.js"></script>
        <script language="javascript" src="./js/javascriptcheck.js"></script>
        <script type="text/javascript" src="./js/vRegValidation.js"></script>
</html>