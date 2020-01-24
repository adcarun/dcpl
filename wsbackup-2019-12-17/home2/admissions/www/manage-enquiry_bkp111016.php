<?php
	include("./phpincludes/header_inc.php");
	$obj=new GenericClass("tbl_enquiry");
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>MESSUNG | Manage Enquiry / Reports</title>

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
						if($_SESSION['objLogin']->AccessLevel=="Admin"){
							$cond=" Where Id != 0 "; 
						}
						else
						{
							$cond=" Where Id != 0 and AssignedTo = ".$_SESSION['objLogin']->Id; 	
						}
						if($_POST['srch_Company']!="")
							$cond.=" AND CId = '".htmlspecialchars(addslashes($_POST['srch_Company']))."' ";
						
						if($_POST['srch_Region']!="")
							$cond.=" AND Region = '".htmlspecialchars(addslashes($_POST['srch_Region']))."' ";
						
						if($_POST['srch_Source']!="")
							$cond.=" AND Source = '".htmlspecialchars(addslashes($_POST['srch_Source']))."' ";
							
						if($_POST['srch_Status']!="")
							$cond.=" AND Status = '".htmlspecialchars(addslashes($_POST['srch_Status']))."' ";
							
						if($_POST['srch_Product']!="")
							$cond.=" AND Product = '".htmlspecialchars(addslashes($_POST['srch_Product']))."' ";
							
						if($_POST['srch_AssignedTo']!="")
							$cond.=" AND AssignedTo = '".htmlspecialchars(addslashes($_POST['srch_AssignedTo']))."' ";
						
						if($_POST['srch_Priority']!="")
							$cond.=" AND Priority = '".htmlspecialchars(addslashes($_POST['srch_Priority']))."' ";
						
						if($_POST['srch_Feed_From_Date']!="")
							$cond.=" AND RegTime >= '".htmlspecialchars(addslashes(trim($_POST['srch_Feed_From_Date']." 00:00:00")))."' ";
							
						if($_POST['srch_Feed_To_Date']!="")
							$cond.=" AND RegTime <= '".htmlspecialchars(addslashes(trim($_POST['srch_Feed_To_Date']." 23:59:59")))."' ";
						
						if($_POST['srch_Amount_From']!="" && $_POST['srch_Amount_To']!="")
							$cond.=" AND (Amount >= '".htmlspecialchars(addslashes(trim($_POST['srch_Amount_From'])))."' and Amount <= '".htmlspecialchars(addslashes(trim($_POST['srch_Amount_To'])))."') ";
							
						set_management("tbl_enquiry", $cond, "RegTime", "desc", 15);
						
						$toPass=str_replace('Where'," ",$cond)."  ORDER BY ".$sortbyColumn." ".$sortbyOrder." LIMIT ".($page_size*($page_no-1) .  ", " . $page_size);
						$arrData=$obj->getData($toPass);
						
						?>
                	<div id="page-content">
                    <!-- Navigation info -->
                    <ul id="nav-info" class="clearfix">
                        <li><a href="dashboard.php?I=1"><i class="icon-home"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">Manage Enquiry / Reports</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Row Classes -->
                    <h3 class="page-header">Manage Enquiry / Reports</h3>
                    	<h5 class="form-box-header">Note :<br>
							<ul class="icons-ul">
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>Here administrator can Manage Enquiry / Reports.</small></li>
                            </ul>
                        </h5>
                        
                         <div class="form-box-header formBoxHeader">
                         <div class="row" style="padding:0 0 10px 0">
                        <div class="col-md-6">
                        <b>Search On :</b>
						</div>
                        </div>
                         
					<div class="row" style="padding:0 0 10px 0">
                        <div class="col-md-4">
                        <div class="col-md-5">
                        <label class="control-label" for="example-input-small">Company :</label>
                        </div>
                        <div class="col-md-7">
                        <select class="select-chosen" name="srch_Company" id="srch_Company">
                            <option value="">Select</option>
                            <?php
								$objCompany=new GenericClass("tbl_company");
								$arrCompany=$objCompany->getDatalimited("Id,CName"," where CDisplayStatus = 'Active'",false);
								foreach($arrCompany as $Company)
								{
									?>
                                    	<option value="<?=$Company['Id']?>"<?php if($_POST['srch_Company']==$Company['Id']){echo "selected"; }?>><?=$Company['CName']?></option>
                                    <?php	
								}
							?>
                        </select>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="col-md-5">
                        <label class="control-label" for="example-input-small">Region :</label>
                        </div>
                        <div class="col-md-7">
                        <select class="select-chosen" name="srch_Region" id="srch_Region">
                            <option value="">Select</option>
                            <?php
								$objRegion=new GenericClass("tbl_region");
								$arrRegion=$objRegion->getDatalimited("Id,Title"," ",false);
								foreach($arrRegion as $Region)
								{
									?>
                                    	<option value="<?=$Region['Id']?>"<?php if($_POST['srch_Region']==$Region['Id']){echo "selected"; }?>><?=$Region['Title']?></option>
                                    <?php	
								}
							?>
                        </select>
                        </div>
                        </div>
                        
                        <div class="col-md-4">
                        <div class="col-md-5">
                        <label class="control-label" for="example-input-small">Source :</label>
                        </div>
                        <div class="col-md-7">
                        <select class="select-chosen" name="srch_Source" id="srch_Source">
                            <option value="">Select</option>
                            <?php
								$objSource=new GenericClass("tbl_source");
								$arrSource=$objSource->getDatalimited("Id,Title"," ",false);
								foreach($arrSource as $Source)
								{
									?>
                                    	<option value="<?=$Source['Id']?>"<?php if($_POST['srch_Source']==$Source['Id']){echo "selected"; }?>><?=$Source['Title']?></option>
                                    <?php	
								}
							?>
                        </select>
                        </div>
                        </div>
                      </div>     
                        <div class="row" style="padding:0 0 10px 0">
                        <div class="col-md-4">
                                <div class="col-md-5">
                                <label class="control-label" for="example-input-small">Enquiry Date :</label>
                                </div>
                                <div class="col-md-7">
                                    <div class="input-group date input-datepicker " data-date="<?=date('d/m/Y');?>" data-date-format="yyyy-mm-dd">
                                        <span class="input-group-addon"><i class="icon-calendar icon-fixed-width"></i></span>
                                        <input type="text" id="TransactionDateFrom" name="srch_Feed_From_Date" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($_POST['srch_Feed_From_Date'])));?>" class="form-control" readonly style="width:110px;" placeholder="From" >
                                    </div>
                        	</div>
                        </div>
                        <div class="col-md-4">
                        	<div class="col-md-5">
                        		<label for="example-select" class="control-label">Enquiry Date :</label>
                        	</div>
                        	<div class="col-md-7">
                        		<div class="input-group date input-datepicker " data-date="<?=date('d/m/Y');?>" data-date-format="yyyy-mm-dd">
                            		<span class="input-group-addon"><i class="icon-calendar icon-fixed-width"></i></span>
                                	<input type="text" id="TransactionDateTo" name="srch_Feed_To_Date" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($_POST['srch_Feed_To_Date'])));?>" class="form-control" readonly style="width:110px;" placeholder="To" >
                            	</div>
                        	</div>
                        </div>
                        <div class="col-md-4">
                        <div class="col-md-5">
                        <label class="control-label" for="example-input-small">Enquiry Status :</label>
                        </div>
                        <div class="col-md-7">
                        <select class="select-chosen" name="srch_Status" id="srch_Status">
                            <option value="">Select</option>
                            <?php
								$objStatus=new GenericClass("tbl_site_codes");
								$arrStatus=$objStatus->getDatalimited("*"," where Category = 'Enquiry Status'",false);
								foreach($arrStatus as $Status)
								{
									?>
                                    	<option value="<?=$Status['Id']?>"<?php if($_POST['srch_Status']==$Status['Id']){echo "selected"; }?>><?=$Status['Key']?></option>
                                    <?php	
								}
							?>
                         </select>
                        </div>
                        </div>
                    </div>
                    <div class="row" style="padding:0 0 10px 0">
                        <div class="col-md-4">
                        	<div class="col-md-5">
                        		<label class="control-label" for="example-input-small">Product</label>
                       		</div>
                            <div class="col-md-7">
                            <select class="select-chosen" name="srch_Product" id="srch_Product">
                                <option value="">Select</option>
                                <?php
                                    $objProject=new GenericClass("tbl_ongoing_projects");
                                    $arrProject=$objProject->getDatalimited("Id,Name"," ",false);
                                    foreach($arrProject as $Project)
                                    {
                                        ?>
                                            <option value="<?=$Project['Id']?>"<?php if($_POST['srch_Product']==$Project['Id']){echo "selected"; }?>><?=$Project['Name']?></option>
                                        <?php	
                                    }
                                ?>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                        	<div class="col-md-5">Assigned To</div>
                        	<div class="col-md-7">
                            	<select class="select-chosen" name="srch_AssignedTo" id="srch_AssignedTo">
                                        <option value="">Select</option>
                                        <?php
                                            $objAssignTo=new GenericClass("tbl_manager");
                                            $arrAssignTo=$objAssignTo->getDatalimited("Id,Name"," where DisplayStatus = 'Active' ",false);
                                            foreach($arrAssignTo as $AssignTo)
                                            {
                                                ?>
                                                    <option value="<?=$AssignTo['Id']?>"<?php if($_POST['srch_AssignedTo']==$AssignTo['Id']){echo "selected"; }?>><?=$AssignTo['Name']?></option>
                                                <?php	
                                            }
                                        ?>
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-5">
                            	<label for="example-select" class="control-label">Priority</label>
                            </div>
                            <div class="col-md-7">
                            	<select class="select-chosen" name="srch_Priority" id="srch_Priority">
                                    <option value="">Select</option>
                                    <option value="High"<?php if($_POST['srch_Priority']=='High'){echo 'selected';}?>>High</option>
                                    <option value="Medium"<?php if($_POST['srch_Priority']=='Medium'){echo 'selected';}?>>Medium</option>
                                    <option value="Low"<?php if($_POST['srch_Priority']=='Low'){echo 'selected';}?>>Low</option>
                                    <option value="At PO Level"<?php if($_POST['srch_Priority']=='At PO Level'){echo 'selected';}?>>At PO Level</option>
                                </select>
                            </div>
                        </div>
                    </div>
                     <div class="row" style="padding:0 0 10px 0">
                        <div class="col-md-4">
                        	<div class="col-md-5">
                        		<label class="control-label" for="example-input-small">Amount</label>
                       		</div>
                            <div class="col-md-7">
                            	<input type="text" id="srch_Amount_From" name="srch_Amount_From" class="form-control input-sm" maxlength='20' value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($_POST['srch_Amount_From']))); ?>" placeholder="From">
                            </div>
                        </div>
                        <div class="col-md-4">
                        	<div class="col-md-5">Amount</div>
                        	<div class="col-md-7">
                            	<input type="text" id="srch_Amount_To" name="srch_Amount_To" class="form-control input-sm" maxlength='20' value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($_POST['srch_Amount_To']))); ?>" placeholder="To">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit" onClick="return checkFields(this);">Search</button>
                                <button class="btn btn-success" type="button" onClick="clearSearch(this.form, ['srch_Company','srch_Region','srch_Source','TransactionDateFrom','TransactionDateTo','srch_Status','srch_Product','srch_AssignedTo','srch_Amount_From','srch_Amount_To','srch_Priority']);">Show all</button>
                            </div>
                        </div>
                    </div>   
                        
                        
					  </div>
                        
                        
                        
							<?php 
                            if(isset($_SESSION['Sucess']) && $_SESSION['Sucess']!="")
                            {
                            ?>
                            <div class="alert alert-success"  style="margin-top:230px;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <b><?php echo $_SESSION['Sucess']; unset($_SESSION['Sucess']); ?></b>
                            </div>
                            <?php
                            }
							
							if(isset($_SESSION['DeleteSucess']) && $_SESSION['DeleteSucess']!="")
                            {
                            ?>
                            <div class="alert alert-success"  style="margin-top:230px;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <b><?php echo "Enquiry deleted successfully"; unset($_SESSION['DeleteSucess']); ?></b>
                            </div>
                            <?php
                            }
                            if(isset($_SESSION['Error']) && $_SESSION['Error']!="")
                            {
                            ?>
                            <div class="alert alert-danger"  style="margin-top:230px;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <b><?php echo $_SESSION['Error']; unset($_SESSION['Error']); ?></b>
                            </div>
                            <?php
                            }
                            ?>
                        </h5>
                        <a href="javascript:void(0);" class="btn label-info" style="margin-top:10px;"><span style="padding:10px 0 0 0px;"><span class="label">Total </span><span class="badge badge-inverse"><?=$num;?></span><span class="label">Records Found </span></span></a>
                        
                        
                        <?php if($_SESSION['objLogin']->AccessLevel=="Admin"){?>
                        <a href="downloadExcel.php?con=<?=$cond?>" class="btn btn-success" style="margin-top:10px; margin-right:10px; float:right;"><i class="glyphicon-download_alt"></i> &nbsp; Download in Excel</a><?php } ?>
                        <a href="add-enquiry.php?I=4" class="btn btn-success" style="margin-top:10px; margin-right:10px; float:right;"><i class="icon-plus"></i> Add New Enquiry</a>
                        
                       <div style="overflow:auto; width:100%;">
                    <table class="table table-borderless table-hover" style="margin-top:10px;">
                    
                        <thead>
                            <tr class="danger">
                            	
                                <th class="text-center hidden-xs hidden-sm">No</th>
                                <th class=""<?php put_sorting('Product','Product')?></th>
                                <th class=""<?php put_sorting('CId','Company Name')?></th>
                                <th class=""<?php put_sorting('CPersonName','Person Name')?></th>
                                <th class=""<?php put_sorting('CPersonEmail','Email')?></th>
                                <th class=""<?php put_sorting('Region','Region')?></th>
                                <th class=""<?php put_sorting('Source','Source')?></th>
                                <th class=""<?php put_sorting('RegTime','Enquiry Date')?></th>
                                <th class=""<?php put_sorting('UpdateTime','Update Date')?></th>
                                <th class=""<?php put_sorting('Amount','Amount')?></th>
                                <th class=""<?php put_sorting('Status','Status')?></th>
                                <th class=""<?php put_sorting('Priority','Priority')?></th>
                                <th class=""<?php put_sorting('AssignedTo','Assigned To')?></th>
                                <th class="">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php
								// Product details
									$result = mysql_query("select Id,Name from tbl_ongoing_projects");
									while($rs = mysql_fetch_assoc($result))
									{
										$ProductList[$rs['Id']]	= $rs['Name'];
									}
								// Company details
									$result = '';
									$result = mysql_query("select Id,CName from tbl_company where CDisplayStatus = 'Active'");
									while($rs = mysql_fetch_assoc($result))
									{
										$CompanyList[$rs['Id']]	= $rs['CName'];
									}
								// Region details
									$result = '';
									$result = mysql_query("select Id,Title from tbl_region");
									while($rs = mysql_fetch_assoc($result))
									{
										$RegionList[$rs['Id']]	= $rs['Title'];	
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
									
									$objCompany1=new GenericClass("tbl_company");
									$objfollowup=new GenericClass("tbl_follow_up");
									
								$totPagesNo =  $page_no;
								$totPages = $pages;
								$counter=$page_size*($page_no-1)+1;
								$newCounter = count($arrData);
								$i=0;
								$c=0;
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
                                        <td class=""><?=$ProductList[$arrData[$key]['Product']];?></td>
                                        <td class=""><?=$CompanyList[$arrData[$key]['CId']];?></td>
                                        <td class=""><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['CPersonName'])));?></td>
                                        <td class=""><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['CPersonEmail'])));?></td>
                                        <td class=""><?=$RegionList[$arrData[$key]['Region']];?></td>
                                        <td class=""><?=$SourceList[$arrData[$key]['Source']];?></td>
                                        <td class=""><?=date('d-m-Y',strtotime($arrData[$key]['RegTime']));?></td>
                                        <td class="">
											<?php 
												
												$followup=$objfollowup->getDatalimited("RegTime"," where CompanyId = ".$arrData[$key]['CId'],false);
												if($followup[0]['RegTime']!="")
												
													echo date('d-m-Y',strtotime($followup[0]['RegTime'])); 
												else 
												echo "-";
															
															
															
												/*if($arrData[$key]['UpdateTime']!='' && $arrData[$key]['UpdateTime']!='0000-00-00 00:00:00')
													echo date('d-m-Y',strtotime($arrData[$key]['UpdateTime']));
												else
													echo "-";*/
											?>
                                        </td>
                                        <td class="">
											<?php 
												if($arrData[$key]['Amount']!='')
													echo htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['Amount'])));
												else
													echo "-";
											?>
										</td>
                                        <td class="">
											<?php
												if($arrData[$key]['Status']==21)
													$class = "inverse";
												else if($arrData[$key]['Status']==24)
													$class = "info";
												else if($arrData[$key]['Status']==26)
													$class = "success";
												else if($arrData[$key]['Status']==27)
													$class = "danger";
											?>
											<span class="label label-<?=$class?>"><?=$EnqStatusList[$arrData[$key]['Status']];?></span>
                                        </td>
                                        <td class="">
											<?php
												if($arrData[$key]['Priority']=='High')
													echo $Priority = "High";
												else if($arrData[$key]['Priority']=='Medium')
													echo $Priority = "Medium";
												else if($arrData[$key]['Priority']=='Low')
													echo $Priority = "Low";
												else if($arrData[$key]['Priority']=='At PO Level')
													echo $Priority = "At PO Level";
											?>
										</td>
                                        <td class=""><?php
											if($arrData[$key]['AssignedTo']!=0)
												echo $AssignedToList[$arrData[$key]['AssignedTo']];
											else
												echo "-";
											?></td>
                                        <td class="">
                                            <div class="btn-group">
                                            	
                                                <a href="javascript:EditRecord('<?= $arrData[$key]['Id'] ?>', './enquiry-follow.php?I=4');" data-toggle="tooltip" title="Follow up" class="btn btn-xs btn-primary"><i class="icon-book"></i></a>
                                               
                            						<a href="#example-modal<?=$i?>" class="btn btn-xs btn-info" data-toggle="modal" title="Print Enquiry"><i class="glyphicon-print"></i></a>
													<!-- Modal itself -->
                                                    <div id="example-modal<?=$i?>" class="modal">
                                                        <!-- Modal Dialog -->
                                                        <div class="modal-dialog">
                                                            <!-- Modal Content -->
                                                            <div class="modal-content">
                                                                <?php 
                                                                    // Content start which used in print
                                                                ?>
                                                                    <div id="<?=$i?>" style="display:none; text-align:center;">
                                                                        <div style="background: #f6f6f6 none repeat scroll 0 0; padding-bottom: 0; border-bottom: 1px solid #e5e5e5; min-height: 16.4286px; text-align: center;">
                                                                            <h3 style="font-family: Roboto,'Helvetica Neue',Helvetica,Arial,sans-serif; font-weight: bold; line-height: 40px; text-align: center; margin-bottom:10px;">MESSUNG</h3>
                                                                            <table id="example-datatables2" cellspacing="0" cellpadding="0" style="margin:0 auto; border:0; ">
                                                                                <tbody>
                                                                                    <tr>			
                                                                                        <td colspan="2" align="center"  style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><img src="http://messung2.dcpl.co.in/img/logo.jpg"></td>
                                                                                    </tr>
                                                                                    <tr>			
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">Product</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?=$ProductList[$arrData[$key]['Product']];?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;">Company Name</td>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?php
                                                                                            $objCompany1=$objCompany->getDatalimited("*"," where Id = ".$arrData[$key]['CId'],false);
                                                                                            echo htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($objCompany1[0]['CName'])));?>
                                                                                       </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">Company Division</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><?=$objCompany1[0]['CDivision']?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">Company Address</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><?=$objCompany1[0]['CAddress']?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;">Company Phone </td>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?=$objCompany1[0]['CPhoneNo']?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">Contact Person Name</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['CPersonName'])));?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;">Contact Person Mobile</td>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['CPersonMobile'])));?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">Contact Person Email</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['CPersonEmail'])));?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;">Description</td>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['Description'])));?></td>
                                                                                    </tr>
                                                                                    <tr>			
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">Region</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><?=$RegionList[$arrData[$key]['Region']];?></td>
                                                                                    </tr>
                                                                                    <tr>			
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;">Source</td>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?=$SourceList[$arrData[$key]['Source']];?></td>
                                                                                    </tr>
                                                                                    <tr>			
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">Priority</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><?=$arrData[$key]['Priority']?></td>
                                                                                    </tr>
                                                                                    <tr>			
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;">Enquiry Status</td>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?=$EnqStatusList[$arrData[$key]['Status']]?></td>
                                                                                    </tr>
                                                                                    <tr>			
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;">Assigned To</td>
                                                                                        <td style="background-color:hsl(0, 0%, 98%); border: 1px solid #ccc; padding: 0 5px; margin:0;"><?php if($arrData[$key]['AssignedTo']!=0)
                                                                                                echo $AssignedToList[$arrData[$key]['AssignedTo']];
                                                                                            else
                                                                                                echo "-";?>
                                                                                         </td>
                                                                                    </tr>
                                                                                    <tr>			
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;">Enquiry Date</td>
                                                                                        <td style="background-color:#fff; border: 1px solid #ccc; padding: 0 5px;  margin:0;"><?=date('d-m-Y',strtotime($arrData[$key]['RegTime']));?></td>
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
                                                                    <h3>MESSUNG</h3>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <table id="example-datatables2" class="table table-striped table-bordered table-hover" style="margin:20px 0px 0px 10px;">
                                                                        <tbody>
                                                                            <tr>			
                                                                                <td>Product</td>
                                                                                <td><?=$ProductList[$arrData[$key]['Product']];?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Company Name</td>
                                                                                <td><?php
                                                                                    $objCompany1=$objCompany->getDatalimited("*"," where Id = ".$arrData[$key]['CId'],false);
                                                                                    echo htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($objCompany1[0]['CName'])));?>
                                                                               </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Company Address</td>
                                                                                <td><?=$objCompany1[0]['CAddress']?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Company Phone </td>
                                                                                <td><?=$objCompany1[0]['CPhoneNo']?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Company Division</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['CDivision'])));?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Contact Person Name</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['CPersonName'])));?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Contact Person Mobile</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['CPersonMobile'])));?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Contact Person Email</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['CPersonEmail'])));?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Description</td>
                                                                                <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['Description'])));?></td>
                                                                            </tr>
                                                                            <tr>			
                                                                                <td>Region</td>
                                                                                <td><?=$RegionList[$arrData[$key]['Region']];?></td>
                                                                            </tr>
                                                                            <tr>			
                                                                                <td>Source</td>
                                                                                <td><?=$SourceList[$arrData[$key]['Source']];?></td>
                                                                            </tr>
                                                                            <tr>			
                                                                                <td>Priority</td>
                                                                                <td><?=$arrData[$key]['Priority']?></td>
                                                                            </tr>
                                                                            <tr>			
                                                                                <td>Enquiry Status</td>
                                                                                <td><?=$EnqStatusList[$arrData[$key]['Status']]?></td>
                                                                            </tr>
                                                                            <tr>			
                                                                                <td>Assigned To</td>
                                                                                <td><?php if($arrData[$key]['AssignedTo']!=0)
                                                                                        echo $AssignedToList[$arrData[$key]['AssignedTo']];
                                                                                    else
                                                                                        echo "-";?>
                                                                                 </td>
                                                                            </tr>
                                                                            <tr>			
                                                                                <td>Enquiry Date</td>
                                                                                <td><?=date('d-m-Y',strtotime($arrData[$key]['RegTime']));?></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                
                                                                
                                                                <?php
                                                                    // Content end which used To display
                                                                ?>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                    <button class="btn btn-success"  onclick="printSelection(document.getElementById('<?php echo $i?>'));return false">Print</button>
                                                                </div>
                                                                
                                                            </div>
                                                            <!-- END Modal Content -->
                                                        </div>
                                                        <!-- END Modal Dialog -->
                                                    </div>
                                            <!-- END Modal itself -->
                        					
                                                
                                                <a href="javascript:EditRecord('<?= $arrData[$key]['Id'] ?>', './view-enquiry.php?I=4');" data-toggle="tooltip" title="View Enquiry" class="btn btn-xs btn-success"><i class="icon-info-sign"></i></a>
                                            	<a href="javascript:EditRecord('<?= $arrData[$key]['Id'] ?>', './edit-enquiry.php?I=4');" data-toggle="tooltip" title="Edit Enquiry" class="btn btn-xs btn-success"><i class="icon-pencil"></i></a>
                                                <?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
                                                <a href="javascript:DeleteRecordNewImage('<?= $arrData[$key]['Id'] ?>','tbl_enquiry','manage-enquiry.php?I=4','Are you sure, you really want to delete this record ?', './delete_record_page_project.php','');" data-toggle="tooltip" title="Delete Enquiry" class="btn btn-xs btn-danger"><i class="icon-remove"></i></a> 
												<?php } ?>
                                            </div>
                                        </td>
                                    </tr>
                            <?php
								$i++;
								$c++;
			  					} // End of foreach ($arrData as $key => $value) 
								else
								{
								?>
									<tr class="active">
										<td align="center" valign="middle" colspan="14"><b>No Records Found</b></td>
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
    <script src="./js/framework.js" language="javascript"></script>
    <script type="text/javascript">
		function checkFields(frm)
		{ 
			if(document.frm.TransactionDateFrom.value > document.frm.TransactionDateTo.value)	
			{
				alert("Reminder to date should be greater than From date");
				document.frm.TransactionDateTo.focus();
				return false;
			}
			if(document.frm.srch_Amount_From.value!='' && document.frm.srch_Amount_To.value!='')
			{
				if(parseInt(document.frm.srch_Amount_From.value) >= parseInt(document.frm.srch_Amount_To.value))	
				{
					alert("Amount to should be greater than amount from");
					document.frm.srch_Amount_To.focus();
					return false;
				}
			}
			return true;
		}
	</script>
</html>