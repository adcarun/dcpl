<?php
	include("./phpincludes/header_inc.php");
	//include("./phpincludes/headings.php");
	$obj=new GenericClass("enquiry_details");
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>VI Schools | Manage Enquiry</title>

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

                 <ul id="widgets" class="navbar-nav-custom pull-right">
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
                    <?php
						include("./includes/super-admin-left-panel.php");
					?>
                </aside>
                <!-- END Sidebar -->

                <!-- Page Content -->
                <form name="frm" method="post">
                    <input type="hidden" name="property_id" value="" />
                    <input type="hidden" name="status" value="" />
                    <input type="hidden" name="ret_page" value="" />
                    <input type="hidden" name="table_name" value="" />
                    <input type="hidden" name="delimgname" value="" />
                    <input type="hidden" name="Info_type" value="" />
                    <input type="hidden" name="id" value="" />
                    <input type="hidden" name="corr_tablename" value="" />
                    <input type="hidden" name="col_name" value="" />
                    <?php  
						$cond=" Where EnqId != 0 and Phone = '".$_GET['Mobile']."' "; 
						if($_POST['srch_Course']!="")
							$cond.=" AND Course = '".htmlspecialchars(addslashes($_POST['srch_Course']))."' ";
						
						if($_POST['srch_Collage']!="")
							$cond.=" AND CollegeId = '".htmlspecialchars(addslashes($_POST['srch_Collage']))."' ";
						
						if($_POST['srch_Source']!="")
							$cond.=" AND SourceId = '".htmlspecialchars(addslashes($_POST['srch_Source']))."' ";
							
						if($_POST['srch_Status']!="")
							$cond.=" AND Status = '".htmlspecialchars(addslashes($_POST['srch_Status']))."' ";
							
						if($_POST['srch_Program']!="")
							$cond.=" AND ProgramId = '".htmlspecialchars(addslashes($_POST['srch_Program']))."' ";
							
						if($_POST['srch_AssignedTo']!="")
							$cond.=" AND AssignedTo = '".htmlspecialchars(addslashes($_POST['srch_AssignedTo']))."' ";
						
						if($_POST['srch_Priority']!="")
							$cond.=" AND Priority = '".htmlspecialchars(addslashes($_POST['srch_Priority']))."' ";
						
						if($_POST['srch_Feed_From_Date']!="")
							$cond.=" AND RegTime >= '".htmlspecialchars(addslashes(trim($_POST['srch_Feed_From_Date']." 00:00:00")))."' ";
							
						if($_POST['srch_Feed_To_Date']!="")
							$cond.=" AND RegTime <= '".htmlspecialchars(addslashes(trim($_POST['srch_Feed_To_Date']." 23:59:59")))."' ";
						
						if($_POST['srch_Name']!="")
							$cond.=" AND Name like '%".htmlspecialchars(addslashes($_POST['srch_Name']))."%' ";
						
						if($_POST['srch_Email']!="")
							$cond.=" AND Email like '%".htmlspecialchars(addslashes($_POST['srch_Email']))."%' ";
						
						if($_POST['srch_PhoneNo']!="")
							$cond.=" AND Mobile = '".htmlspecialchars(addslashes($_POST['srch_PhoneNo']))."' ";
						
						if($_POST['srch_City']!="")
							$cond.=" AND City = '".htmlspecialchars(addslashes($_POST['srch_City']))."' ";
						
						if($_POST['srch_Pincode']!="")
							$cond.=" AND PinCode = '".htmlspecialchars(addslashes($_POST['srch_Pincode']))."' ";
						
						if($_POST['srch_Amount_From']!="" && $_POST['srch_Amount_To']!="")
							$cond.=" AND (Amount >= '".htmlspecialchars(addslashes(trim($_POST['srch_Amount_From'])))."' and Amount <= '".htmlspecialchars(addslashes(trim($_POST['srch_Amount_To'])))."') ";
						
						set_management("enquiry_details", $cond, "RegTime", "desc", 15);
						
						$toPass=str_replace('Where'," ",$cond)."  ORDER BY ".$sortbyColumn." ".$sortbyOrder." LIMIT ".($page_size*($page_no-1) .  ", " . $page_size);
						//echo $toPass;
						$arrData=$obj->getData($toPass);
						//print_r($arrData);
						?>
                	<div id="page-content">
                    <!-- Navigation info -->
                    <ul id="nav-info" class="clearfix">
                        <li><a href="dashboard.php?I=1"><i class="icon-home"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">View Enquiry</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Row Classes -->
                    <h3 class="page-header">View Enquiry</h3>
                    	<h5 class="form-box-header">Note :<br>
							<ul class="icons-ul">
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>Here administrator can View Enquiry.</small></li>
                            </ul>
                        </h5>
                        
                         
                        	<?php 
                            if(isset($_SESSION['Sucess']) && $_SESSION['Sucess']!="")
                            {
                            ?>
                            <div class="alert alert-success"  style="margin-top:10px;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <b><?php echo $_SESSION['Sucess']; unset($_SESSION['Sucess']); ?></b>
                            </div>
                            <?php
                            }
							
							if(isset($_SESSION['DeleteSucess']) && $_SESSION['DeleteSucess']!="")
                            {
                            ?>
                            <div class="alert alert-success"  style="margin-top:10px;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <b><?php echo "Enquiry deleted successfully"; unset($_SESSION['DeleteSucess']); ?></b>
                            </div>
                            <?php
                            }
                            if(isset($_SESSION['Error']) && $_SESSION['Error']!="")
                            {
                            ?>
                            <div class="alert alert-danger"  style="margin-top:10px;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <b><?php echo $_SESSION['Error']; unset($_SESSION['Error']); ?></b>
                            </div>
                            <?php
                            }
                            ?>
                        </h5>
                        <a href="javascript:void(0);" class="btn label-info" style="margin-top:10px;"><span style="padding:10px 0 0 0px;"><span class="label">Total </span><span class="badge badge-inverse"><?=$num;?></span><span class="label">Records Found </span></span></a>
                        <span style="float:right"><a href="./duplicate-enquirers-mobile.php?I=15" class="btn label-info" style="margin-top:10px;">Back</a></span>
                       <div style="overflow:auto; width:100%;">
                    <table class="table table-borderless table-hover" style="margin-top:10px;">
                    
                        <thead>
                            <tr class="danger">
                            	<th class="text-center hidden-xs hidden-sm">No</th>
								<th class="">Actions</th>
								<th class=""<?php //put_sorting('Name','Name')?>>Name</th>
								<th class=""<?php //put_sorting('Name','Name')?>>Child Name</th>
                                <th class=""<?php //put_sorting('Course','Course')?>>School</th>
                               <!-- <th class=""<?php //put_sorting('ReferredBy','ReferredBy')?></th>-->                                
								<th class=""<?php //put_sorting('Name','Name')?>>Date</th>
                                <th class="">Message</th>
                                <th class=""<?php //put_sorting('Status','Status')?>>Status</th>
                                <th class=""<?php //put_sorting('Type','Type')?>>Type</th>
								<th class=""<?php //put_sorting('Priority','Priority')?>>Priority</th>
								<?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
                                <th class=""<?php //put_sorting('AssignedTo','Assigned To')?>>Assigned To</th>
								<th class=""<?php //put_sorting('AssignedTo','Assigned To')?>>Added By</th>
								<?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php
								// Product details
									
								if(is_array($arrData))
								foreach ($arrData as $key => $value) 
								{
									if(($i%2)==0)
										$class = "active";
									else
										$class = "";
							?>
                                    <tr class="<?=$class?>">
										<td class="text-center hidden-xs hidden-sm"><?php //echo $counter;
											if($counter==1)
											{
												echo $num--;
											}
											else
											{
												$newCounter = (15 * ($totPagesNo-1));
												$nc = $num - $newCounter;
												echo $nc-$c;
											}
										?></td>
										<td class="">
                                            <div class="btn-group">
                                            	
                                                <a href="javascript:EditRecord('<?= $arrData[$key]['EnqId'] ?>', './enquiry-follow.php?I=4');" data-toggle="tooltip" title="Follow up" class="btn btn-xs btn-primary"><i class="icon-book"></i></a>
                        					
                                                
                                                <a href="javascript:EditRecord('<?= $arrData[$key]['EnqId'] ?>', './view-enquiry.php?I=4');" data-toggle="tooltip" title="View Enquiry" class="btn btn-xs btn-success"><i class="icon-info-sign"></i></a>
                                            	<!--<a href="javascript:EditRecord('<?= $arrData[$key]['Id'] ?>', './edit-enquiry.php?I=4');" data-toggle="tooltip" title="Edit Enquiry" class="btn btn-xs btn-success"><i class="icon-pencil"></i></a>-->
                                                <?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
                                                <a href="javascript:DeleteRecordNewImage('<?= $arrData[$key]['EnqId'] ?>','tbl_enquiry','manage-enquiry.php?I=4','Are you sure, you really want to delete this record ?', './delete_record_page_project.php','');" data-toggle="tooltip" title="Delete Enquiry" class="btn btn-xs btn-danger"><i class="icon-remove"></i></a> 
												<?php } ?>
												<a href="javascript:EditRecord('<?= $arrData[$key]['EnqId'] ?>', './add-reminder-enquiry.php?I=2');" data-toggle="tooltip" title="Set Reminder" class="btn btn-xs btn-info"><i class="icon-bell"></i></a>
                                            </div>
                                        </td>
										<td class=""><a href="javascript:EditRecord('<?= $arrData[$key]['EnqId'] ?>', './edit-enquiry.php?I=4');" data-toggle="tooltip" title="Edit Enquiry" ><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['Name'])));?></a></td>
										<td class=""><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['childname'])));?></td>
                                        <td class=""><?=$ProductList[$arrData[$key]['Course']];?></td>
                                        <!--<td class=""><?//=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['ReferredBy'])));?></td>-->                                        
										<td class=""><?=date('j-M-Y',strtotime($arrData[$key]['RegTime']));?></td>
                                        <td class=""><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['Message'])));?></td>
                                        <td class="">
											<?php
												if($arrData[$key]['Status']==21)
													$class = "primary";
												else if($arrData[$key]['Status']==24)
													$class = "inverse";
												else if($arrData[$key]['Status']==26)
													$class = "info";
												else if($arrData[$key]['Status']==27)
													$class = "warning";
												else if($arrData[$key]['Status']==29)
													$class = "p1done";	
												else if($arrData[$key]['Status']==30)
													$class = "success";
												else if($arrData[$key]['Status']==31)
													$class = "danger";	
												else if($arrData[$key]['Status']==32)
													$class = "completed";													
											?>
											<span class="label label-<?=$class?>"><?=$EnqStatusList[$arrData[$key]['Status']];?></span>
                                        </td>
										 <td class="">
										 <?php if($RegionList[$arrData[$key]['Type']]=='Interested and sure (Hot)'){ ?><span class="label label-danger">
											<?php }?>
										 <?=$RegionList[$arrData[$key]['Type']];?>
										 <?php if($arrData[$key]['Priority']=='High'){ ?></span><?php } ?>
										 </td>
                                        <?/*<td class=""><?=$SourceList[$arrData[$key]['Source']];?></td>
                                        <td class=""><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['OtherSource'])));?></td>
                                        <td class=""><?=date('d-m-Y',strtotime($arrData[$key]['RegTime']));?></td>
                                        <td class="">
											<?php if($arrData[$key]['UpdateTime']!='0000-00-00 00:00:00'){ echo date('d-m-Y',strtotime($arrData[$key]['UpdateTime'])); }else{ echo "-"; } ?>
											<?php 
												
											/*	$followup=$objfollowup->getDatalimited("RegTime"," where CompanyId = ".$arrData[$key]['CId'],false);
												if($followup[0]['RegTime']!="")
												
													echo date('d-m-Y',strtotime($followup[0]['RegTime'])); 
												else 
												echo "-";*/
															
															
															
												/*if($arrData[$key]['UpdateTime']!='' && $arrData[$key]['UpdateTime']!='0000-00-00 00:00:00')
													echo date('d-m-Y',strtotime($arrData[$key]['UpdateTime']));
												else
													echo "-";*/
											?>
                                        <?/*</td>*/?>
                                        <td class="">
											<?php if($arrData[$key]['Priority']=='High'){ ?><span class="label label-danger">
											<?php }?>
											<?php
												if($arrData[$key]['Priority']=='High')
													echo $Priority = "High";
												else if($arrData[$key]['Priority']=='Normal')
													echo $Priority = "Normal";
												else if($arrData[$key]['Priority']=='Low')
													echo $Priority = "Low";												
											?>
											<?php if($arrData[$key]['Priority']=='High'){ ?></span><?php } ?>
										</td>
										<?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
                                        <td class=""><?php
											if($arrData[$key]['AssignedTo']!=0)
												echo $AssignedToList[$arrData[$key]['AssignedTo']];
											else
												echo "-";
											?></td>
										 <td class=""><?php
											$resultBy = mysql_query("select Id,Name from tbl_manager where Id=".$arrData[$key]['Added_by']);	
											if(count($resultBy) > 0){
												$rowBy=mysql_fetch_row($resultBy);
												echo $rowBy[1];
											}	
											else{
												echo "-";
											}	
											?></td>	
										<?php } ?>
                                        
                                       
                                        
                                    </tr>
                            <?php
								$i++;
								$c++;
			  					} // End of foreach ($arrData as $key => $value) 
								else
								{
								?>
									<tr class="active">
									<?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
										<td align="center" valign="middle" colspan="16"><b>No Records Found</b></td>
									<?php }else{ ?>
										<td align="center" valign="middle" colspan="13"><b>No Records Found</b></td>
									<?php } ?>
                                    </tr>
								<?php	
								}
								?>
                           </tbody>
                    </table>
                    </div>
                    <?php 
						if(count($arrData)>0)
						{
							$pages = $totPages;
				  			$page_no = $totPagesNo;
              				include_once('./phpincludes/pagination.php');
						}
						put_hidden();
					?>
                    <!-- END Borderless -->
                </div>
                </form>
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
        
        <?php include("./includes/userProfile.php"); ?>
    </body>
    <script src="./js/framework.js" language="javascript"></script>
    
</html>