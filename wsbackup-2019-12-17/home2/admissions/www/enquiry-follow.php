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
 	<script>
		$(document).ready(function(){
			validateData();
		});
	</script>
    <style>	
	#FollowUp label.error {
		color:red;
		font-size:12px;
		font-weight:normal;
	}
	</style>
	<script>
  	$(document).ready(function() {
		jQuery.validator.addMethod("pdf", function(value, element) {
			return this.optional(element) || /^([a-zA-Z0-9\s_\\.\-:])+(.pdf|.PDF|.doc|.DOC|.jpg|JPG|.png|.PNG|.bmp|.BMP)$/i.test(value);
		}, "Select PDF or DOC or JPG or PNG or BMP file only");	

		jQuery.validator.addMethod("dateCompaire", function(value, element) {
			var startdatevalue = $('#TodaysDate').val();	
			return Date.parse(startdatevalue) < Date.parse(value);
		}, "Next Follow Date should be greater than or Equal to Today's Date.");
		
		jQuery.validator.addMethod("digits", function(value, element) {
			return this.optional(element) || /^([0-9])+$/i.test(value);
		}, "enter digits only");	
		
		$("#FollowUp").validate({ 
		rules: { 
			TodaysUpdate:
			{
				required:true,
			},
			NextUpdateDate:
			{
				required:true,
				dateCompaire:true,
			},			
			File:
			{
				pdf:true,
			},
		},
			messages: {
				
			},
		});
	});
  </script>
        <meta charset="utf-8">

        <title>VI Schools | Enquiry Follow up</title>

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
                        <li class="active"><a href="javascript:void(0)">View / Add Follow up</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Text Inputs -->
                    
                    	<input type="hidden" name="Id" value="<?= $_POST['id'] ?>" />
                        <h4 class="form-box-header">View / Add Follow up</h4>
                        
                        <h5 class="form-box-header">Note :<br>
							<ul class="icons-ul">
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>Here administrator can View / Add Follow up.</small></li>
                            </ul>
                        </h5>
                        <?php 
                            if(isset($_SESSION['Sucess']) && $_SESSION['Sucess']!="")
                            {
                            ?>
                            <div class="alert alert-success"  style="margin-top:13px;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <b><?php echo $_SESSION['Sucess']; unset($_SESSION['Sucess']); ?></b>
                            </div>
                            <?php
                            }
							
							if(isset($_SESSION['DeleteSucess']) && $_SESSION['DeleteSucess']!="")
                            {
                            ?>
                            <div class="alert alert-success"  style="margin-top:13px;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <b><?php echo $_SESSION['DeleteSucess'];  unset($_SESSION['DeleteSucess']); ?></b>
                            </div>
                            <?php
                            }
							?>
                        
                        <div class="row">
                        <div class="col-md-6 push">
                        	<h4 style="margin-left:10px;">Enquiry Details</h4>
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
                                        <td>Referred By</td>
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
                                        <td>Passing Year</td>
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
                                        <td><?php if($arrData[0]['Visitdate']!=''){ echo date('j M Y',strtotime($arrData[0]['Visitdate'])); }else{ echo "-"; } ?></td>
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
                                    </tr> */ ?>
                                    <tr>
                                        <td>Type</td>
                                        <td><?php
										$objStatus1=new GenericClass("tbl_site_codes");
                                        $arrStatus1=$objStatus1->getDatalimited("Value"," where Id = ".$arrData[0]['Status'],false);
										echo htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrStatus1[0]['Value'])));
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
                                        <td>Priority</td>
                                        <td><?=$arrData[0]['Priority']?></td>
                                    </tr>
									 <tr>
                                        <td>Message</td>
                                        <td><?=$arrData[0]['Message']?></td>
                                    </tr>
									<?php /* <tr>
                                        <td>Fees Discount</td>
                                        <td><?=$arrData[0]['FeesDiscount']?></td>
                                    </tr>
									<tr>
                                        <td>Fees Paid</td>
                                        <td><?=$arrData[0]['FeesPaid']?></td>
                                    </tr>
									<tr>
                                        <td>Fees Balance</td>
                                        <td><?=$arrData[0]['FeesBalance']?></td>
                                    </tr> */ ?>
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
                                        <td>Enquiry Date</td>
                                        <td><?=date('j M Y',strtotime($arrData[0]['RegTime']))?></td>
                                    </tr>
                                     <tr>
                                        <td>Enquiry Time</td>
                                        <td><?=$arrData[0]['EnqTime']?></td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                        
                        <h4>Today's Follow Up Details</h4>                     
                        	<form name="frm" id="FollowUp" method="post" action="enquiry-follow-action.php?I=<?=$_GET['I']?>" onReset="this.TodaysUpdate.focus();" enctype="multipart/form-data">
							<?php putContext(); ?>
                            <div class="table-resposive" style="overflow:auto">
							
                            <table id="example-datatables3" class="table table-striped table-bordered table-hover" style="margin:20px 0px 0px -10px;">
                                <tbody>
                                	<tr>
                                        <td width="30%">
                                        Today's Update <span style="color:#F00;">*</span>
                                        </td>
                                        <td width="30%">
                                        <div class="col-md-8">
                                        <textarea style="width:250px; height:200px!important" name="TodaysUpdate" id="TodaysUpdate" class="form-control"></textarea>
                                        <input type="hidden" name="Id" value="<?=$_POST['id']?>" />
										<input type="hidden" name="id" value="<?=$_POST['id']?>" />
										
                                         </div>
                                        </div>
                                    </tr>
                                    <tr>
                                        <td>Next Follow Up Date <span style="color:#F00;">*</span></td>
                                        <td>
                                        <div class="col-md-8">
                                        <div class="input-group date input-datepicker" data-date="<?=date('d/m/Y');?>" data-date-format="yyyy-mm-dd">
                                			<span class="input-group-addon"><i class="icon-calendar icon-fixed-width"></i></span>
                                   			<input type="text" id="NextUpdateDate" name="NextUpdateDate" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['NextUpdateDate'])));?>" class="form-control" readonly>
                                		</div>
                                        </div>
                                    </tr>
                                    <input type="hidden" name="TodaysDate" id="TodaysDate" value="<?=date('Y-m-d', strtotime($date .' -1 day'));?>">
									<tr>
                                        <td>File </td>
                                        <td>
                                        <div class="col-md-8">
                                        	<input class="form-control example-input-grid2" type="file" name="File" id="File">
                                           <span style="color:#F00"><small>Only PDF, DOC, JPG, PNG, BMP allowed</small> </span>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center">
										<!--<a href="javascript:EditRecord('<?= $_POST['id'] ?>', './edit-enquiry.php?I=4');" data-toggle="tooltip" title="Edit Enquiry" class="btn btn-xs btn-success"><i class="icon-pencil"></i> Edit Enquiry</a>-->
										<button type="button" class="btn btn-primary" onClick="javascript:EditRecord('<?= $_POST['id'] ?>', './edit-enquiry.php?I=4');" title="Edit Enquiry" data-toggle="tooltip"><i class="icon-pencil"></i> Edit Enquiry</button>
                                        <button type="submit" class="btn btn-success" title="Save All Data" data-toggle="tooltip"><i class="icon-save"></i> Submit</button>
                                        <button type="reset" class="btn btn-danger" title="Reset All Fields" data-toggle="tooltip"><i class="icon-repeat"></i> Reset</button>
                                        <?php if($_GET['I']==8 || $_GET['I']==12 || $_GET['I']==13){?>
                                   			<!--<button type="button" class="btn btn-danger" onClick="document.location='./todays-followup.php?I=8'" title="Go back to Manage Today's Follow Up" data-toggle="tooltip"><i class="icon-remove"></i> Manage Today's Follow Up</button>-->
                                   			<!--<button type="button" class="btn btn-danger" onClick="javascript:history.back();" title="Go back to Manage Today's Follow Up" data-toggle="tooltip"><i class="icon-remove"></i> Manage Follow Up</button>-->
											<?php if($_GET['ref']=='manage') { ?>
                                   			<button type="button" class="btn btn-danger" onClick="goBack(this.form, './manage-followup.php?I=12');" title="Go back to Manage Today's Follow Up" data-toggle="tooltip"><i class="icon-remove"></i> Manage Follow Up</button>
											<?php }else if($_GET['ref']=='todays'){ ?>
											<button type="button" class="btn btn-danger" onClick="goBack(this.form, './todays-followup.php?I=8');" title="Go back to Todays Follow Up" data-toggle="tooltip"><i class="icon-remove"></i> Go back to Manage Todays Follow Up</button>
											<?php }else if($_GET['ref']=='prev'){ ?>
											<button type="button" class="btn btn-danger" onClick="goBack(this.form, './previous-followup.php?I=13');" title="Go back to Previous Follow Up" data-toggle="tooltip"><i class="icon-remove"></i> Go back to Manage Previous Follow Up</button>
											<?php }else{ ?>
											<button type="button" class="btn btn-danger" onClick="goBack(this.form, './manage-followup.php?I=12');" title="Go back to Manage Follow Up" data-toggle="tooltip"><i class="icon-remove"></i> Go back to Manage Follow Up</button>
											<?php } ?>	
                                        <?php } 
										else
										{ ?>
                                        	<!--<button type="button" class="btn btn-danger" onClick="document.location='./manage-enquiry.php?I=4'" title="Go back to Manage Enquiry" data-toggle="tooltip"><i class="icon-remove"></i> Go back to Manage Enquiry</button>-->
                                        	<button type="button" class="btn btn-danger" onClick="goBack(this.form, './manage-enquiry.php?I=4');" title="Go back to Manage Enquiry" data-toggle="tooltip"><i class="icon-remove"></i> Go back to Manage Enquiry</button>
										<?php }	?>
                                        </td>
                                    </tr>
                                </tbody>
                            	</table>
                                </div>
                            </form> 
                        
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
																	//print_r($FollowUp);
																	?>
																	
																		<div class="panel panel-default">
																			<div class="panel-heading">
																				<h4 class="panel-title" style="font-size:13px;">
                                                                                	<a href="#faq1_q<?=$i?>" data-parent="#faq1" data-toggle="collapse" class="accordion-toggle" style="float:left;"><?=$i?>)</a>
																					
																					<a href="#faq1_q<?=$i?>" data-parent="#faq1" data-toggle="collapse" class="accordion-toggle" style="float:right; margin-left:20px">View</a>
																					<?php if($_SESSION['objLogin']->AccessLevel=="Admin"){	 ?>
																					<a href="edit-followup.php?I=12&fid=<?php echo base64_encode($FollowUp['Id']); ?>&enqid=<?php echo base64_encode($_POST['id']); ?>"  style="float:right;">Edit</a> 
																					<?php } ?>
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
                                                                                            <a href="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($FollowUp['File'])));?>" target="_blank" data-toggle="tooltip" title="Click to View File"><b>View</b></a>
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
        <script src="./js/framework.js" language="javascript"></script>
        
    </body>
		<!--/*<script language="javascript" src="./js/common.js"></script>
        <script language="javascript" src="./js/javascriptcheck.js"></script>
        <script type="text/javascript" src="./js/EmployeeValidation.js"></script>
        <script type="text/javascript" src="./js/CheckEmployeeEmail.js"></script>*/-->
</html>