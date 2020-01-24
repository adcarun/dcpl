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
	
        <meta charset="utf-8">

        <title>VI Schools | View Enquiry</title>

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
                        <li class="active"><a href="javascript:void(0)">View Enquiry</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Text Inputs -->
                    <form name="frm" method="post" id="Enquiry" onReset="this.CId.focus();" action="add-enquiry-action.php" enctype="multipart/form-data" class="form-horizontal form-box">
						<?php putContext(); ?>					
                    	<input type="hidden" name="Id" value="<?= $_POST['id'] ?>" id="EId" />
						<h4 class="form-box-header">View Enquiry</h4>
                        
                        <h5 class="form-box-header">Note :<br>
							<ul class="icons-ul">
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>Here administrator can View Enquiry.</small></li>
								
                            </ul>
                        </h5>
                        <div class="row">
                        <div class="col-md-6 push">
                        	<h4 style="margin-left:10px;">Enquiry Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="#example-modal<?=$_POST['id']?>" class="btn btn-xs btn-info" data-toggle="modal" title="Print Enquiry"><i class="glyphicon-print"></i> Print</a>
							</h4>
							<?php 
								$result = mysql_query("select Id,Name from tbl_ongoing_projects");
									while($rs = mysql_fetch_assoc($result))
									{
										$ProductList[$rs['Id']]	= $rs['Name'];
									}
								// Type details
									$result = '';
									$result = mysql_query("select Id,Value from tbl_site_codes where Category = 'Enquiry Type'");
									while($rs = mysql_fetch_assoc($result))
									{
										$RegionList[$rs['Id']]	= $rs['Value'];	
									}
								// Source details
									$result = '';
									$result = mysql_query("select Id,Title from tbl_source");
									while($rs = mysql_fetch_assoc($result))
									{
										$SourceList[$rs['Id']]	= $rs['Title'];	
									}
								// Assigned To details
									$result = '';
									$result = mysql_query("select Id,Name from tbl_manager");
									while($rs = mysql_fetch_assoc($result))
									{
										$AssignedToList[$rs['Id']]	= $rs['Name'];	
									}
								// Enq Status To details
									$result = '';
									$result = mysql_query("select Id,Value from tbl_site_codes where Category = 'Enquiry Status'");
									while($rs = mysql_fetch_assoc($result))
									{
										$EnqStatusList[$rs['Id']]	= $rs['Value'];	
									}
								?>	
							
                           <div class="table-resposive" style="overflow:auto">
                            <table id="example-datatables2" class="table table-striped table-bordered table-hover" style="margin:20px 0px 0px 10px;">
                                <tbody>
                                	<tr>			
                                        <td>School</td>
                                        <td><?php
                                    	$objProduct=new GenericClass("tbl_ongoing_projects");
										$ArrProducts=$objProduct->getDatalimited("Name"," where Id = ".$arrData[0]['Course'],false);
										echo $ArrProducts[0]['Name'];
									?></td>
                                    </tr>
                                    <tr>
                                        <td>ReferredBy</td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['ReferredBy'])));?></td>
                                    </tr>
									<tr>
                                        <td>Name</td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Name'])));?></td>
                                    </tr>
									<tr>
                                        <td>Child Name</td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['childname'])));?></td>
                                    </tr>
									<?php /*<tr>
                                        <td>Occupation</td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Occupation'])));?></td>
                                    </tr> */ ?>
									<tr>
                                        <td>Location</td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['City'])));?></td>
                                    </tr>
									<tr>
                                        <td>Phone</td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Phone'])));?></td>
                                    </tr>
									<tr>
                                        <td>Whatsapp</td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Whatsapp'])));?></td>
                                    </tr>
									<tr>
                                        <td>Email</td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Email'])));?></td>
                                    </tr>
									<?php /*<tr>
                                        <td>Qualification</td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Qualification'])));?></td>
                                    </tr>
									<tr>
                                        <td>PassingYear</td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['PassingYear'])));?></td>
                                    </tr>
									<tr>
                                        <td>Experience</td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Experience'])));?></td>
                                    </tr>
									<tr>
                                        <td>Position</td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Position'])));?></td>
                                    </tr>
									<tr>
                                        <td>Company Name</td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Companyname'])));?></td>
                                    </tr>*/ ?>
									<tr>
                                        <td>Visit Date</td>
                                        <td><?php if($arrData[0]['Visitdate']!=""){ echo date('j M Y',strtotime($arrData[0]['Visitdate'])); } ?></td>
                                    </tr>
									<?php /*<tr>
                                        <td>Reason</td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Reason'])));?></td>
                                    </tr> */ ?>
									<tr>
                                        <td>Counsellor's Comments</td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['CouselorsComments'])));?></td>
                                    </tr>
									<?php /* <tr>
                                        <td>Training period (Tentative month/ batch)</td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Trainingperiod'])));?></td>
                                    </tr>
									<tr>
                                        <td>Preferred slot of training</td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['PreferredSlot'])));?></td>
                                    </tr>
									<tr>
                                        <td>Further Action</td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Furtheraction'])));?></td>
                                    </tr> */ ?>
                                    <tr>
                                        <td>Type</td>
                                        <td><?php if($arrData[0]['Type']!=""){
										$objType=new GenericClass("tbl_site_codes");
                                        $arrType=$objType->getDatalimited("Value"," where Id = ".$arrData[0]['Type'],false);
										echo htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrType[0]['Value'])));
										}else{
											echo "NA";	
										}
									?></td>
                                    </tr>
                                    <tr>
                                        <td>Source</td>
                                        <td><?php
										$objSource=new GenericClass("tbl_source");
                                        $arrSource=$objSource->getDatalimited("Title"," where Id = ".$arrData[0]['Source'],false);
										echo htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrSource[0]['Title'])));
									?></td>
                                    </tr>
									<tr>
                                        <td>Other Source Details(If Any)</td>
                                        <td><?php
										echo htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['OtherSource'])));
									?></td>
                                    </tr>
									
                                    <tr>
                                        <td>Priority</td>
                                        <td><?=$arrData[0]['Priority']?></td>
                                    </tr>
                                    <tr>
                                        <td>Enquiry Status</td>
                                        <td><?php
										$objStatus=new GenericClass("tbl_site_codes");
                                        $arrStatus=$objStatus->getDatalimited("Value"," where Id = ".$arrData[0]['Status'],false);
										echo htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrStatus[0]['Value'])));
									?></td>
                                    </tr>
                                    <tr>
                                        <td>Assigned To</td>
                                        <td><?php
										$objAssignedTo=new GenericClass("tbl_manager");
                                        $arrAssignedTo=$objAssignedTo->getDatalimited("Name"," where Id = ".$arrData[0]['AssignedTo'],false);
										echo htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrAssignedTo[0]['Name'])));
									?></td>
                                    </tr>
                                    <tr>
                                        <td>Enq Date</td>
                                        <td><?=date('j M Y',strtotime($arrData[0]['RegTime']))?></td>
                                    </tr>
                                    <tr>
                                    	<td colspan="2">
											<?php if($_GET['ref']=='manage') { ?>	
                                        	<button type="button" class="btn btn-danger" onClick="goBack(this.form, './manage-followup.php?I=12');" title="Go back to Manage Follow Up" data-toggle="tooltip"><i class="icon-remove"></i> Go back to Manage Follow Up</button>
											<?php }else if($_GET['ref']=='todays'){ ?>
											<button type="button" class="btn btn-danger" onClick="goBack(this.form, './todays-followup.php?I=8');" title="Go back to Todays Follow Up" data-toggle="tooltip"><i class="icon-remove"></i> Go back to Manage Todays Follow Up</button>
											<?php }else if($_GET['ref']=='prev'){ ?>
											<button type="button" class="btn btn-danger" onClick="goBack(this.form, './previous-followup.php?I=13');" title="Go back to Previous Follow Up" data-toggle="tooltip"><i class="icon-remove"></i> Go back to Manage Previous Follow Up</button>
											<?php }else{ ?>
                                    		<button type="button" class="btn btn-danger" onclick="goBacknew(this.form, './manage-enquiry.php?I=4');" title="Go back to Manage Enquiry" data-toggle="tooltip"><i class="icon-remove"></i> Go back to Manage Enquiry</button>
											<?php } ?>
                                    		<!--<button type="button" class="btn btn-danger" onClick="document.location='./manage-enquiry.php?I=4'" title="Go back to Manage Enquiry" data-toggle="tooltip"><i class="icon-remove"></i> Go back to Manage Enquiry</button>-->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <h4>Follow Up Details</h4>
                        	<div class="table-resposive" style="overflow:auto">
                            <table id="example-datatables3" class="table table-striped table-bordered table-hover" style="margin:20px 0px 0px -10px;">
                                    <tr>
                                        <td colspan="2" align="center">
                                            <div class="tab-content tab-content-default">
                                <!-- First Tab - General -->
                                                <div class="tab-pane active" id="faq1-section">
                                                    <div class="panel-group" id="faq1">
                                                        <?php
															$obj=new GenericClass("tbl_follow_up");
															$arrFollowUp=$obj->getDatalimited("*"," where EnqId = ".$_POST['id']."  order by Id desc ",false);
															if(count($arrFollowUp)>0)
															{
																$i=1;
																foreach($arrFollowUp as $FollowUp)
																{
																	?>
																		<div class="panel panel-default">
																			<div class="panel-heading">
																				<h4 class="panel-title" style="font-size:13px;">
                                                                                	<a href="#faq1_q<?=$i?>" data-parent="#faq1" data-toggle="collapse" class="accordion-toggle" style="float:left;"><?=$i?>)</a>
																					<a href="#faq1_q<?=$i?>" data-parent="#faq1" data-toggle="collapse" class="accordion-toggle" style="float:right;">View</a> 
																					Follow Up Date <?php echo date('d-m-Y',strtotime(htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($FollowUp['RegTime'])))));?> 
																				</h4>
																			</div>
																			<div class="panel-collapse collapse" id="faq1_q<?=$i?>">
																				<div class="panel-body">
																					<table id="example-datatables3" class="table table-striped table-bordered table-hover" style="margin:20px 0px 0px -10px;">
																					<tbody>
																						<tr>
																							<td>Today's Update</td>
																							<td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($FollowUp['TodaysUpdate'])));?></td>
																						</tr>
																						<tr>
																							<td>Next Follow Up Date</td>
																							<td><?php echo date('d-m-Y',strtotime(htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($FollowUp['NextUpdateDate'])))));?></td>
																						</tr>		
																						<tr>
																							<td>File</td>
																							<td>
                                                                                            	<?php 
																									if($FollowUp['File']==''){
																										echo "-"; }
																									else {
																								?>
                                                                                            <a href="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($FollowUp['File'])));?>" target="_blank" data-toggle="tooltip" title="Click to View PDF"><b>View</b></a>
                                                                                            <?php } ?>
                                                                                            </td>
																						</tr>
																					</tbody>
																					</table>
																				</div>
																			</div>
																		</div>
																	<?php	
																	$i++;
																} // End of foreach($arr_invoice as $invoice)
															} // End of if(count($arr_invoice)>0)
															else
															{
																echo "No record found";
															}
                                                        ?>
                                                  </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            
                            </div>
                            
                           
                        </div>
                    </div>
                        
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
        
        
   <div id="example-modal<?=$_POST['id']?>" class="modal">
                                                        <!-- Modal Dialog -->
                                                        <div class="modal-dialog">
                                                            <!-- Modal Content -->
                                                            <div class="modal-content">
                                                                <?php 
                                                                    // Content start which used in print
                                                                ?>
                                                                    <div id="<?=$_POST['id']?>" style="display:none; text-align:center;">
                                                                        <div style="background: #f6f6f6 none repeat scroll 0 0; padding-bottom: 0; border-bottom: 1px solid #e5e5e5; min-height: 16.4286px; text-align: center;">
                                                                            <h3 style="font-family: Roboto,'Helvetica Neue',Helvetica,Arial,sans-serif; font-weight: bold; line-height: 40px; text-align: center; margin-bottom:10px;">VI Schools</h3>
                                                                            <table id="example-datatables2" cellspacing="0" cellpadding="0" style="margin:0 auto; border:0; ">
                                                                                <tbody>
                                                                                    <tr>			
                                                                                        <td colspan="2" align="center"  style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><img src="http://localhost/vischools/admissions/img/logo.jpg"></td>
                                                                                    </tr>
                                                                                    <tr>			
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">School</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?=$ProductList[$arrData[0]['Course']];?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;">Referred By </td>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['ReferredBy'])));?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">Name</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Name'])));?></td>
                                                                                    </tr>
                                                                                    <?php /*<tr>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;">Occupation</td>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Occupation'])));?></td>
                                                                                    </tr>*/ ?>
                                                                                    <tr>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">City</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['City'])));?></td>
                                                                                    </tr>
																					 <tr>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;">Phone</td>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Phone'])));?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;">Whatsapp</td>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Whatsapp'])));?></td>
                                                                                    </tr>
																					<tr>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">Email</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Email'])));?></td>
                                                                                    </tr>
																					<?php /* <tr>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;">Qualification</td>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Qualification'])));?></td>
                                                                                    </tr>
																					<tr>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">PassingYear</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['PassingYear'])));?></td>
                                                                                    </tr>
																					<tr>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;">Experience</td>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Experience'])));?></td>
                                                                                    </tr>
																					<tr>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">Company Name</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Companyname'])));?></td>
                                                                                    </tr>*/ ?>
                                                                                   <tr>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;">Visit date</td>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?php if($arrData[0]['Visitdate']!=""){ echo date('j M Y',strtotime($arrData[0]['Visitdate'])); }?></td>
                                                                                    </tr>
																					<?php /*<tr>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">Reason</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Reason'])));?></td>
                                                                                    </tr> */ ?>
                                                                                   <tr>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;">Counsellor's Comments</td>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['CouselorsComments'])));?></td>
                                                                                    </tr>
																					<?php /* <tr>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">Training period (Tentative month/ batch)</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Trainingperiod'])));?></td>
                                                                                    </tr>
																					<tr>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;">Preferred slot of training</td>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['PreferredSlot'])));?></td>
                                                                                    </tr>
																					<tr>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">Further action</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Furtheraction'])));?></td>
                                                                                    </tr>*/ ?>
                                                                                   <tr>			
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">Type</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><?=$RegionList[$arrData[0]['Type']];?></td>
                                                                                    </tr>
                                                                                    <tr>			
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;">Source</td>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?=$SourceList[$arrData[0]['Source']];?></td>
                                                                                    </tr>
																					<tr>			
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">Other Source</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><?=$arrData[0]['OtherSource']?></td>
                                                                                    </tr>
                                                                                    <tr>			
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;">Enquiry Status</td>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?=$EnqStatusList[$arrData[0]['Status']]?></td>
                                                                                    </tr>
                                                                                    <tr>			
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">Assigned To</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><?php if($arrData[0]['AssignedTo']!=0)
                                                                                                echo $AssignedToList[$arrData[0]['AssignedTo']];
                                                                                            else
                                                                                                echo "-";?>
                                                                                         </td>
                                                                                    </tr>
                                                                                    <tr>			
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;">Enquiry Date</td>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?=date('j M Y',strtotime($arrData[0]['RegTime']));?></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                                    
                                                                        </div>
                                                                    </div>
                                                                <?php	
                                                                    // Content end which used in print
                                                                ?>
                                                                
                                                                <?php
                                                                    // Content start which used To display
                                                                ?>
                                                                <div class="modal-header">
                                                                    <h3>VI Schools<br/><img src="img/logo.jpg"></h3>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <table id="example-datatables2" class="table table-striped table-bordered table-hover" style="margin:20px 0px 0px 10px;">
                                                                        <tbody>
                                                                            <tr>			
                                                                                <td>School</td>
                                                                                <td><?=$ProductList[$arrData[0]['Course']];?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>ReferredBy</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['ReferredBy'])));?></td>
                                                                            </tr>
                                                                           <tr>
                                                                                <td>Name</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Name'])));?></td>
                                                                            </tr>
																			<?php /* <tr>
                                                                                <td>Occupation</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Occupation'])));?></td>
                                                                            </tr> */ ?>
																			<tr>
                                                                                <td>City</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['City'])));?></td>
                                                                            </tr>
																			<tr>
                                                                                <td>Phone</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Phone'])));?></td>
                                                                            </tr>
																			<tr>
                                                                                <td>Whatsapp</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Whatsapp'])));?></td>
                                                                            </tr>
																			<tr>
                                                                                <td>Email</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Email'])));?></td>
                                                                            </tr>
																			<?php /* <tr>
                                                                                <td>Qualification</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Qualification'])));?></td>
                                                                            </tr>
																			<tr>
                                                                                <td>PassingYear</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['PassingYear'])));?></td>
                                                                            </tr>
																			<tr>
                                                                                <td>Experience</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Experience'])));?></td>
                                                                            </tr>
																			<tr>
                                                                                <td>Position</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Position'])));?></td>
                                                                            </tr>
																			<tr>
                                                                                <td>Company Name</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Companyname'])));?></td>
                                                                            </tr> */ ?>
																			<tr>
                                                                                <td>Visit Date</td>
                                                                                <td><?php if($arrData[0]['Visitdate']!=""){ echo date('j M Y',strtotime($arrData[0]['Visitdate'])); }?></td>
                                                                            </tr>
																			<?php /* <tr>
                                                                                <td>Reason</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Reason'])));?></td>
                                                                            </tr> */ ?>
																			<tr>
                                                                                <td>Counsellor's Comments</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['CouselorsComments'])));?></td>
                                                                            </tr>
																			<?php /* <tr>
																				<td>Training period (Tentative month/ batch)</td>
																				<td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Trainingperiod'])));?></td>
																			</tr>
																			<tr>
																				<td>Preferred slot of training</td>
																				<td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['PreferredSlot'])));?></td>
																			</tr>
																			<tr>
                                                                                <td>Further Action</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Furtheraction'])));?></td>
                                                                            </tr>	*/ ?>					
                                                                            <tr>			
                                                                                <td>Type</td>
                                                                                <td><?=$RegionList[$arrData[0]['Type']];?></td>
                                                                            </tr>
                                                                            <tr>			
                                                                                <td>Source</td>
                                                                                <td><?=$SourceList[$arrData[0]['Source']];?></td>
                                                                            </tr>
																			 <tr>			
                                                                                <td>Other Source</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['OtherSource'])));?></td>
                                                                            </tr>
                                                                            <tr>			
                                                                                <td>Priority</td>
                                                                                <td><?=$arrData[0]['Priority']?></td>
                                                                            </tr>
                                                                            <tr>			
                                                                                <td>Enquiry Status</td>
                                                                                <td><?=$EnqStatusList[$arrData[0]['Status']]?></td>
                                                                            </tr>
                                                                            <tr>			
                                                                                <td>Assigned To</td>
                                                                                <td><?php if($arrData[0]['AssignedTo']!=0)
                                                                                        echo $AssignedToList[$arrData[0]['AssignedTo']];
                                                                                    else
                                                                                        echo "-";?>
                                                                                 </td>
                                                                            </tr>
                                                                            <tr>			
                                                                                <td>Enquiry Date</td>
                                                                                <td><?=date('j M Y',strtotime($arrData[0]['RegTime']));?></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                
                                                                
                                                                <?php
                                                                    // Content end which used To display
                                                                ?>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                    <button class="btn btn-success"  onclick="printSelection(document.getElementById('<?php echo $_POST['id']; ?>'));return false">Print</button>
                                                                </div>
                                                                
                                                            </div>
                                                            <!-- END Modal Content -->
                                                        </div>
                                                        <!-- END Modal Dialog -->
                                                    </div>
                                            <!-- END Modal itself --> 


  <script type="text/javascript">
		function printSelection(node){
		
		  var content=node.innerHTML
		  var pwin=window.open('./prasad-print.php','print_content','width=500,height=200');
		
		  pwin.document.open();
		  pwin.document.write('<html><body onload="window.print()">'+content+'</body></html>');
		  pwin.document.close();
		}
	</script>
    </body>
	
        
    	
		<!--/*<script language="javascript" src="./js/common.js"></script>
        <script language="javascript" src="./js/javascriptcheck.js"></script>
        <script type="text/javascript" src="./js/EmployeeValidation.js"></script>
        <script type="text/javascript" src="./js/CheckEmployeeEmail.js"></script>*/-->
</html>