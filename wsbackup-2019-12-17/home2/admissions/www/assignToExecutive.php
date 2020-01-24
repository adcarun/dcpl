<?php
	
	include("./phpincludes/header_inc.php");
	//print_r($_SESSION);
	//$LoginId=$_SESSION['objLogin']->Id;
	//$obj=new GenericClass("tbl_notifications");
	if(empty($_POST['SendMail']))
	{
		header("Location:./manage-enquiry.php?I=4");
		$_SESSION['Sucess']="Please select at least one Applicant.";
		exit;
	}
	//$arrData=$obj->getData(" Id = ".$_POST['id']);
	
	//$Mailer1 = explode(".",'./mailer/75961439462681.html');
	//print_r($Mailer1);
	//echo $Mailer='/home/websites/sendmail.olivetreetrading.org/www'.$Mailer1[1].".".$Mailer1[2];
	
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <!--<script src="./js/checkDBDetails.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>   
    <script src="./js/jquery.validate.js"></script>
	<script src="./js/all-script.js"></script>	
	<script src="./js/bootstrap-datepicker.js"></script>
 	<script>
		$(document).ready(function(){
			validateData();
		});
	</script>
		<meta charset="utf-8">

        <title>Infini Solutions | Manage Enquiry / Reports</title>

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
	#AddCategoryForm label.error {
		color:red;
	}
	</style> 
		
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
		
        <script src="./ckeditor/ckeditor.js"></script>
		
		
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
                        <li class="active"><a href="javascript:void(0)">Assign Enquires To Executives</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Text Inputs -->
                    <form role="form" id="AddSessionForm" method="post" autocomplete="off" action="assignToExectivefinal.php" class="form-horizontal form-box" enctype="multipart/form-data">
        <?
			//print_r($_REQUEST);
			$filer_val=array_filter($_POST['SendMail'], 'ctype_digit');		
			$Mailids=implode(',',$filer_val);
			$obj=new GenericClass("tbl_enquiry");
			$arrData=$obj->getDataLimited('Name'," where Id IN(".$Mailids.")",false);
			foreach($arrData as $data){
				$emailid[]=$data['Name'];			
			}	
			$Emails=implode(',',$emailid);
		?>
		<input type="hidden" name="Id" value="<?= $Mailids; ?>" />
        <h4 class="form-box-header">Assign Enquires To Executives</h4>
        <h5 class="form-box-header">Note :<br>
          <ul class="icons-ul">
            <li><i class="icon-li icon-arrow-right text-black"></i><small>Here administrator can Assign Enquires To Executives.</small></li>
            <li><i class="icon-li icon-arrow-right text-black"></i><small>Fields marked with <span style="color:#F00;">*</span> are Mandatory</small></li>
          </ul>
        </h5>
        <div class="form-box-content"> 
			 <div class="form-group">
            <label class="control-label col-md-3" for="example-input-small">Total Select Enquries <span style="color:#F00;">*</span> :</label>
            <div class="col-md-5">
			<b><?= count($_POST['SendMail']);?></b>
            </div>
          </div>  
		   <div class="form-group">
            <label class="control-label col-md-3" for="example-input-small">Select Name <span style="color:#F00;">*</span> :</label>
            <div class="col-md-5">
        <textarea class="form-control" readonly><?= $Emails?></textarea>
            </div>
          </div>  
		    <?/* <div class="form-group">
            <label class="control-label col-md-3" for="example-input-small">Notifications<span style="color:#F00;">*</span> :</label>
            <div class="col-md-5">          
            <!--<select required="" title="Please select Category" class="form-control" name="Mailer">
                  <option value="">Select Notification</option>
                 <? 				
				 $obj=new GenericClass('tbl_notifications');
				 $arrMailer=$obj->getDataLimited('*',' where Status="Active" order by Created_date',false);				 
				 foreach($arrMailer as $mailer){				 				 
					echo "<option value='".$mailer['Id']."'";
					echo ">".$mailer['Title']."</option>";
				 }
				 ?>
                </select>    -->
				<textarea class="form-control" name="Mailer"></textarea>
            </div>
		
          </div>*/
		  //print_r();
		  //exit();
		  ?>
		  <div class="form-group">
             <label class="control-label col-md-3" for="masked_phone">Select Executive :<span style="color:#F00;">*</span></label>
             <div class="col-md-5">
                  <select class="select-chosen" name="AssignedTo" id="AssignedTo">
                                        <option value="">Select</option>
                                        <?php
                                            $objAssignTo=new GenericClass("tbl_manager");
                                            $arrAssignTo=$objAssignTo->getDatalimited("Id,Name"," where DisplayStatus = 'Active' AND Id!='".$_SESSION['objLogin']->Id."'",false);
                                            foreach($arrAssignTo as $AssignTo)
                                            {
                                                ?>
                                                    <option value="<?=$AssignTo['Id']?>"<?php if($_POST['AssignedTo']==$AssignTo['Id']){echo "selected"; }?>><?=$AssignTo['Name']?></option>
                                                <?php	
                                            }
                                        ?>
                                    </select>                  
							
              </div>
           </div>
		  
		 
         
          <div class="form-group form-actions">
            <div class="col-md-10 col-md-offset-2">
              <button data-toggle="tooltip" title="" class="btn btn-success" type="submit" data-original-title="Save All Data" ><i class="icon-save"></i> Submit</button>
                            <button data-toggle="tooltip" title="" onclick="document.location='./manage-enquiry.php?I=4'" class="btn btn-danger" type="button" data-original-title="Go back to View List of Enquiries"><i class="icon-remove"></i> Go back to View List of Enquires	</button>
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
    	
         <script>
			$('.datepicker').datepicker();
			
			
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			//CKEDITOR.replace('Short_description');
			CKEDITOR.replace( 'Answer', {
				extraPlugins: 'imageuploader'
			});
			
			function checkdate()
			{
				//var today = new Date();
				date = new Date();

				var day = ('0' + date.getDate()).slice(-2);
				var month = ('0' + (date.getMonth() + 1)).slice(-2);
				var year = date.getFullYear();

				today= year + '-' + month + '-' + day;
			//	alert(today);
				//alert(document.getElementById('SessionDate').value);
				
				var dat = document.getElementById('SessionDate').value;
				var yourdate = dat.split("/").reverse();
				var tmp = yourdate[2];
				yourdate[2] = yourdate[1];
				yourdate[1] = tmp;
				yourdate = yourdate.join("-");
				
				//alert(yourdate);
				
				if(yourdate < today){
					alert("date should not be previous date");
					document.getElementById('SessionDate').focus();
					return false;
				}
				return true;
			}
		</script>
		
		<script>
    jQuery('#SessionTimeFrom').datetimepicker({
        format: 'HH:mm A',
		//minDate : moment()
		
    });
	jQuery('#SessionTimeTo').datetimepicker({
        format: 'HH:mm A',
		//minDate : moment()
		
    });
</script>
    	
		<!--/*<script language="javascript" src="./js/common.js"></script>
        <script language="javascript" src="./js/javascriptcheck.js"></script>
        <script type="text/javascript" src="./js/EmployeeValidation.js"></script>
        <script type="text/javascript" src="./js/CheckEmployeeEmail.js"></script>*/-->
</html>