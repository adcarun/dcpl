<?php
	include("./phpincludes/header_inc.php");
	$obj=new GenericClass("tbl_enquiry");
	//print_r($_POST);
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>VI Schools | Manage Enquiry / Reports</title>

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
		.double-scroll {
                width: 100%;
            }
		</style>	
		<script src="./js/jquery-1.10.1.min.js"></script>
		<script src="./js/jquery.checkboxes.js"></script>
		<script type="text/javascript">
	$(document).ready(function() {
	   //$('.double-scroll').doubleScroll();
	   //$('#sample2').doubleScroll({resetOnWindowResize: true});
	   $('#table4').checkboxes('range', true);		
	});
	
</script>
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
						//print_r($_POST['srch_Name']);
						//print_r($_POST);
					//	print_r($_SESSION);
						if($_SESSION['objLogin']->AccessLevel=="Admin"){
							$cond=" Where Id != 0 "; 
						}
						else
						{
							$cond=" Where Id != 0 and (Type IS NULL or Type!=38) and  AssignedTo = ".$_SESSION['objLogin']->Id; 	
						}
						
						/*if($_POST['srch_Company']!="")
							$cond.=" AND CId = '".htmlspecialchars(addslashes($_POST['srch_Company']))."' ";
						
						if($_POST['srch_Region']!="")
							$cond.=" AND Region = '".htmlspecialchars(addslashes($_POST['srch_Region']))."' ";
						*/
						//print_r($_POST);
						
						if($_POST['Id']==""){
					//	if(isset($_POST['srch_Name']) && isset($_POST['srch_Name1']) && $_POST['srch_Name1']!="" && $_POST['srch_Name']=="Array"){
						if(isset($_POST['srch_Name']) && $_POST['srch_Name']!=""){
							//$name=implode(",",$_POST['srch_Name']);
							$cond.=" AND Id = ".htmlspecialchars(addslashes($_POST['srch_Name']));
						}/*else if(isset($_POST['srch_Name1']) && $_POST['srch_Name1']=="" && isset($_POST['srch_Name'])){							
							$cond.=" AND Id = ".htmlspecialchars(addslashes($_POST['srch_Name']));
						}else if(isset($_POST['srch_Name1']) && $_POST['srch_Name1']!=""  && isset($_POST['srch_Name'])){							
							$cond.=" AND Id = ".htmlspecialchars(addslashes($_POST['srch_Name']));
						}*/		
						}else if($_SESSION['objLogin']->AccessLevel=="Admin"  && $_POST['Id']!=""){
							$cond.=" AND Id IN (".htmlspecialchars(addslashes($_POST['Id'])).") OR Id NOT IN (".htmlspecialchars(addslashes($_POST['Id'])).")";
						}
						if($_POST['srch_Type']!="")
							$cond.=" AND Type = '".htmlspecialchars(addslashes($_POST['srch_Type']))."' ";
							
						if($_POST['srch_Source']!="")
							$cond.=" AND Source = '".htmlspecialchars(addslashes($_POST['srch_Source']))."' ";
							
						if($_POST['srch_Status']!="")
							$cond.=" AND Status = '".htmlspecialchars(addslashes($_POST['srch_Status']))."' ";
						if($_POST['Id']==""){	
						//if(isset($_POST['srch_ProductNew']) && isset($_POST['srch_Product']) && $_POST['srch_ProductNew']!="" && $_POST['srch_Product']=="Array"){
						if(isset($_POST['srch_Product']) && $_POST['srch_Product']!=""){
							//$prod=implode(",",$_POST['srch_ProductNew']);
							$cond.=" AND Course = ".htmlspecialchars(addslashes($_POST['srch_Product']));
						}/*else if(isset($_POST['srch_ProductNew']) && $_POST['srch_ProductNew']=="" && isset($_POST['srch_Product'])){							
							$cond.=" AND Course = ".htmlspecialchars(addslashes($_POST['srch_Product']));
						}*/
						}else if($_SESSION['objLogin']->AccessLevel=="Admin" && $_POST['Id']!=""){
							//$cond.=" AND Id =".htmlspecialchars(addslashes($_POST['Id']));
							$cond.=" AND Id IN (".htmlspecialchars(addslashes($_POST['Id'])).") OR Id NOT IN (".htmlspecialchars(addslashes($_POST['Id'])).")";
						}
						
						/*if($_POST['srch_Product']!=""){
							$cond.=" AND Course = ".htmlspecialchars(addslashes($_POST['srch_Product']));
						}*/	
						if($_POST['srch_Product1']!=""){
							$cond.=" AND Course = ".htmlspecialchars(addslashes($_POST['srch_Product1']));
						}	
							
						if($_POST['srch_AssignedTo']!="")
							$cond.=" AND AssignedTo = '".htmlspecialchars(addslashes($_POST['srch_AssignedTo']))."' ";
						
						if($_POST['srch_Priority']!="")
							$cond.=" AND Priority = '".htmlspecialchars(addslashes($_POST['srch_Priority']))."' ";
						
						if($_POST['srch_Feed_From_Date']!="")
							$cond.=" AND RegTime >= '".htmlspecialchars(addslashes(trim($_POST['srch_Feed_From_Date']." 00:00:00")))."' ";
							
						if($_POST['srch_Feed_To_Date']!="")
							$cond.=" AND RegTime <= '".htmlspecialchars(addslashes(trim($_POST['srch_Feed_To_Date']." 23:59:59")))."' ";
						
						if($_POST['srch_Phone']!="")
							$cond.=" AND (Phone like '%".htmlspecialchars(addslashes($_POST['srch_Phone']))."%' OR  Whatsapp like '%".htmlspecialchars(addslashes($_POST['srch_Phone']))."%') ";						
						//	echo $cond;
						//	exit();
						
						//if($_POST['srch_Amount_From']!="" && $_POST['srch_Amount_To']!="")
						//	$cond.=" AND (Amount >= '".htmlspecialchars(addslashes(trim($_POST['srch_Amount_From'])))."' and Amount <= '".htmlspecialchars(addslashes(trim($_POST['srch_Amount_To'])))."') ";
							
						set_management("tbl_enquiry", $cond, "RegTime", "desc", 15);
						
						$toPass=str_replace('Where'," ",$cond)."  ORDER BY ".$sortbyColumn." ".$sortbyOrder." LIMIT ".($page_size*($page_no-1) .  ", " . $page_size);
						$arrData=$obj->getData($toPass);
						//echo count($arrData);
						?>
                	<div id="page-content">
                    <!-- Navigation info -->
                    <ul id="nav-info" class="clearfix">
                        <li><a href="dashboard.php?I=1"><i class="icon-home"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">Manage Enquiry / Reports</a></li>
                    </ul>
                    <!-- END Navigation info -->
<a href="add-enquiry.php?I=4" class="btn btn-success" style="margin-top:10px; margin-right:10px; float:right;"><i class="icon-plus"></i> Add New Enquiry</a>
                    <!-- Row Classes -->
                    <h3 class="page-header">Manage Enquiry / Reports</h3>
                    	<h5 class="form-box-header">Note :<br>
							<ul class="icons-ul">
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>
								<?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>Here administrator can Manage Enquiry / Reports.
								<?php }else{ ?>
								Here Executive can Manage Enquiry / Reports.
								<?php } ?>
								</small></li>
                            </ul>
                        </h5>
                        
                         <div class="form-box-header formBoxHeader">
                         <div class="row" style="padding:0 0 10px 0">
                        <div class="col-md-6">
                        <b>Search On :</b>
						</div>
                        </div>
                         
					<div class="row" style="padding:0 0 10px 0">
					<?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
						<div class="col-md-4">
                        	<div class="col-md-5">
                        		<label class="control-label" for="example-input-small">School</label>
                       		</div>
                            <div class="col-md-7">
                            <select class="select-chosen" name="srch_Product" id="srch_Product" >
                                <option value="">Select</option>
                                <?php
                                    $objProject=new GenericClass("tbl_ongoing_projects");
                                    $arrProject=$objProject->getDatalimited("Id,Name"," where DisplayStatus = 'Publish' order by Name ASC ",false);
                                    foreach($arrProject as $Project)
                                    {
										
										if($_POST['srch_Product']=='Array'){
											$projectnameid=$_POST['srch_ProductNew'].",";
										}else{
											for($j=0;$j<count($_POST['srch_Product']);$j++){ if($_POST['srch_Product'][$j]==$Project['Id']){
											$projectnameid.=$Project['Id'].",";
										}
										}
										}
										
									if($_POST['srch_Product']=='Array'){
									$pname=explode(",",$_POST['srch_ProductNew']);
									
								//	print_r($pname);	
								?>
								<option value="<?=$Project['Id']?>"<?php for($i=0;$i<count($pname);$i++){ if($pname[$i]==$Project['Id']){echo "selected"; } }?>><?=$Project['Name']?></option>	
								<?php	
									}else{
									?>		
								           <option value="<?=$Project['Id']?>"<?php for($i=0;$i<count($_POST['srch_Product']);$i++){ if($_POST['srch_Product'][$i]==$Project['Id']){echo "selected"; } } if($_POST['srch_Product1']==$Project['Id']){echo "selected"; }?>><?=$Project['Name']?></option>
                                        <?php	
									}	
                                    }
                                ?>
                            </select>
							
							<input type="hidden" name="srch_ProductNew" id="srch_ProductNew" value="<?php echo rtrim($projectnameid,','); ?>" />
                            </div>
                        </div>
					<?php } ?>
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
						
						<div class="col-md-4">
                            <div class="col-md-5">
                            	<label for="example-select" class="control-label">Priority</label>
                            </div>
                            <div class="col-md-7">
                            	<select class="select-chosen" name="srch_Priority" id="srch_Priority">
                                    <option value="">Select</option>
                                    <option value="High"<?php if($_POST['srch_Priority']=='High'){echo 'selected';}?>>High</option>
                                    <option value="Normal"<?php if($_POST['srch_Priority']=='Normal'){echo 'selected';}?>>Normal</option>
                                    <option value="Low"<?php if($_POST['srch_Priority']=='Low'){echo 'selected';}?>>Low</option>                                    
                                </select>
                            </div>
                        </div>
						
                        
                      <?/* */?>
                      </div>     
                        <div class="row" style="padding:0 0 10px 0">
						<?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
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
						<?php } ?>
						<div class="col-md-4">
                        <div class="col-md-5">
                        <label class="control-label" for="example-input-small">Type :</label>
                        </div>
                        <div class="col-md-7">
                        <select class="select-chosen" name="srch_Type" id="srch_Type">
                            <option value="">Select</option>
                            <?php
								$objType=new GenericClass("tbl_site_codes");
								$arrType=$objType->getDatalimited("*"," where Category = 'Enquiry Type'",false);
								foreach($arrType as $Type)
								{
									?>
                                    	<option value="<?=$Type['Id']?>"<?php if($_POST['srch_Type']==$Type['Id']){echo "selected"; }?>><?=$Type['Key']?></option>
                                    <?php	
								}
							?>
                        </select>
                        </div>
                        </div>
						
						<div class="col-md-4">
                        <div class="col-md-5">
                        <label class="control-label" for="example-input-small">Name :</label>
                        </div>
                        <div class="col-md-7">
						<?php //print_r($_POST); ?>
                      <?/*  <input type="text" id="srch_Name" name="srch_Name" class="form-control input-sm" maxlength='20' value="<?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($_POST['srch_Name']))); ?>">*/?>
						 <select class="select-chosen" name="srch_Name" id="srch_Name">
                            <option value="">Select</option>
                            <?php
								$name=implode(",",$_POST['srch_Name']);
								$objEnquirer=new GenericClass("tbl_enquiry");
								if($_SESSION['objLogin']->AccessLevel=="Admin"){
									$arrEnquirer=$objEnquirer->getDatalimited("*"," where Id != 0",false);
								}else{
									$arrEnquirer=$objEnquirer->getDatalimited("*"," where Id != 0 and AssignedTo=".$_SESSION['objLogin']->Id,false);
								}
								
								foreach($arrEnquirer as $enquirer)
								{
									if($_POST['srch_Name']=='Array'){
										$enqnameid=$_POST['srch_Name1'].",";
									}else{
									for($j=0;$j<count($_POST['srch_Name']);$j++){ if($_POST['srch_Name'][$j]==$enquirer['Id']){
										$enqnameid.=$enquirer['Id'].",";
									}
									}
									}
									if($_POST['srch_Name']=='Array'){
									$name=explode(",",$_POST['srch_Name1']);
									
								//	print_r($name);	
								?>
								<option value="<?=$enquirer['Id']?>"<?php for($i=0;$i<count($name);$i++){ if($name[$i]==$enquirer['Id']){echo "selected"; } }?>><?=$enquirer['Name']?></option>	
								<?php	
									}else{
									?>
                                    	<option value="<?=$enquirer['Id']?>"<?php if($_POST['srch_Name']==$enquirer['Id']){echo "selected"; } ?>><?=$enquirer['Name']?></option>
                                    <?php	
									}
								}
							?>
                        </select>
							<input type="hidden" name="srch_Name1" id="srch_Name1" value="<?php echo $_POST['srch_Name']; ?>" />
							<!--<input type="hidden" name="srch_Name1" id="srch_Name1" value="<?php echo rtrim($enqnameid,','); ?>" />-->
                        </div>
                        
						</div>
                        
                        
                    </div>
                    <div class="row" style="padding:0 0 10px 0">
                        
						<div class="col-md-4">
                                <div class="col-md-5">
                                <label class="control-label" for="example-input-small">Enquiry Date (From) :</label>
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
                        		<label for="example-select" class="control-label">Enquiry Date (To) :</label>
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
                        <label class="control-label" for="example-input-small">Phone No. :</label>
                        </div>
                        <div class="col-md-7">
                        <input type="text" id="srch_Phone" name="srch_Phone" class="form-control input-sm" maxlength='20' value="<?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($_POST['srch_Phone']))); ?>">
                        </div>
                        </div>
                        
                    </div>
					<div class="row" style="padding:0 0 10px 0">
						<div class="col-md-4">
                        <div class="col-md-5">
                        <label class="control-label" for="example-input-small">Source :</label>
                        </div>
                        <div class="col-md-7">
                        <select class="select-chosen" name="srch_Source" id="srch_Source">
                            <option value="">Select</option>
                            <?php
								$objSource=new GenericClass("tbl_source");
								$arrSource=$objSource->getDatalimited("Id,Title"," where DisplayStatus='Active' ",false);
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
                       <br/>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit" onClick="return checkFields(this);">Search</button>
                               <!-- <button class="btn btn-success" type="button" onClick="clearSearch(this.form, ['srch_Name','srch_Source','srch_Type','TransactionDateFrom','TransactionDateTo','srch_Status','srch_Product','srch_AssignedTo','srch_Priority','srch_Phone']);">Show all</button>-->
							   <button class="btn btn-success" type="button" onClick="window.location.href='./manage-enquiry.php?I=4'">Show all</button>
                            </div>
                        </div>
                    </div>   
                        
                        
					  </div>
                        <br/>
                        
                        
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
                        
                        
                        <?php if($_SESSION['objLogin']->AccessLevel=="Admin"){
						
						?>
						<input type="submit" value='Assign To Executive' class="btn btn-success" style="margin-top:10px;" formaction='assignToExecutive.php'>
						
                        <a href="downloadExcel.php?con=<?=$cond?>" class="btn btn-success" style="margin-top:10px; margin-right:10px; float:right;"><i class="glyphicon-download_alt"></i> &nbsp; Download in Excel</a><?php }else{ ?>
							<a href="downloadExcel.php?con=<?=$cond?>" class="btn btn-success" style="margin-top:10px; margin-right:10px; float:right;"><i class="glyphicon-download_alt"></i> &nbsp; Download in Excel</a>
						<?php } ?>
                        
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
									
									$objCompany1=new GenericClass("tbl_company");
									$objfollowup=new GenericClass("tbl_follow_up");
									
								$totPagesNo =  $page_no;
								$totPages = $pages;
								$counter=$page_size*($page_no-1)+1;
								$newCounter = count($arrData);
								$i=0;
								$c=0;
						?>
						<?php 
						if(count($arrData)>0)
						{
							$pages = $totPages;
				  			$page_no = $totPagesNo;
              				include_once('./phpincludes/pagination.php');
						}
						put_hidden();
					?>
						
                       <div style="overflow:auto; width:100%;" class="double-scroll" >
                    <table class="table table-borderless table-hover" style="margin-top:10px;" id="table4" data-toggle="checkboxes" data-range="true">
                    
                        <thead>
                            <tr class="danger">
							<?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
                            	<th title="" data-toggle="tooltip" class="cell-small text-center" data-original-title="Toggle all!"><input type="checkbox" name="check1-all" id="check1-all">&nbsp;Notify</th>
							<?php } ?>	
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
								                                
                                <!--<th class=""<?php //put_sorting('Source','Source')?></th>-->
								<!--<th class="">Other Source(If Any)</th>
                                <th class=""<?php //put_sorting('RegTime','Enquiry Date')?></th>
                                <th class=""<?php// put_sorting('UpdateTime','Update Date')?></th>-->
                                
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
										<?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
                                        <td class="text-center"><input type="checkbox" name="SendMail[]" value="<?= $arrData[$key]['Id'];?>"></td>
										<?php } ?>
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
                                            	
                                                <a href="javascript:EditRecord('<?= $arrData[$key]['Id'] ?>', './enquiry-follow.php?I=4');" data-toggle="tooltip" title="Follow up" class="btn btn-xs btn-primary"><i class="icon-book"></i></a>
                        					
                                                
                                                <a href="javascript:EditRecord('<?= $arrData[$key]['Id'] ?>', './view-enquiry.php?I=4');" data-toggle="tooltip" title="View Enquiry" class="btn btn-xs btn-success"><i class="icon-info-sign"></i></a>
                                            	<!--<a href="javascript:EditRecord('<?= $arrData[$key]['Id'] ?>', './edit-enquiry.php?I=4');" data-toggle="tooltip" title="Edit Enquiry" class="btn btn-xs btn-success"><i class="icon-pencil"></i></a>-->
                                                <?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
                                                <a href="javascript:DeleteRecordNewImage('<?= $arrData[$key]['Id'] ?>','tbl_enquiry','manage-enquiry.php?I=4','Are you sure, you really want to delete this record ?', './delete_record_page_project.php','');" data-toggle="tooltip" title="Delete Enquiry" class="btn btn-xs btn-danger"><i class="icon-remove"></i></a> 
												<?php } ?>
												<a href="javascript:EditRecord('<?= $arrData[$key]['Id'] ?>', './add-reminder-enquiry.php?I=2');" data-toggle="tooltip" title="Set Reminder" class="btn btn-xs btn-info"><i class="icon-bell"></i></a>
                                            </div>
                                        </td>
										<td class=""><a href="javascript:EditRecord('<?= $arrData[$key]['Id'] ?>', './edit-enquiry.php?I=4');" data-toggle="tooltip" title="Edit Enquiry" ><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['Name'])));?></a></td>
										<td class=""><?=$arrData[$key]['childname'];?></td>
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
	<script type="text/javascript" src="./js/jquery.doubleScroll.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function() {
	   $('.double-scroll').doubleScroll();
	   //$('#sample2').doubleScroll({resetOnWindowResize: true});
	   //$('#table4').checkboxes('range', true);	
	// $("").css({ "width": "200px" });
		$("#srch_Name_chzn").chosen({ width: '200px' })	 
	});
	
</script>
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