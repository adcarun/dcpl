<?php
	include("./phpincludes/header_inc.php");
	$obj=new GenericClass("tbl_follow_up");
	
	?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>VI Schools | Today's Follow Up</title>

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
							$cond=" Where Id != 0 and NextUpdateDate = '".date('Y-m-d')."' "; 
						}
						else
						{
							$cond=" Where Id != 0 and NextUpdateDate = '".date('Y-m-d')."' and UserId = ".$_SESSION['objLogin']->Id; 	
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
							$cond.=" AND UserId = '".htmlspecialchars(addslashes($_POST['srch_AssignedTo']))."' ";
							
						if($_POST['srch_Feed_From_Date']!="")
							$cond.=" AND RegTime >= '".htmlspecialchars(addslashes(trim($_POST['srch_Feed_From_Date']." 00:00:00")))."' ";
							
						if($_POST['srch_Feed_To_Date']!="")
							$cond.=" AND RegTime <= '".htmlspecialchars(addslashes(trim($_POST['srch_Feed_To_Date']." 23:59:59")))."' ";
						
						set_management("tbl_follow_up", $cond, "RegTime", "desc", 15);
						
						$toPass=str_replace('Where'," ",$cond)."  ORDER BY ".$sortbyColumn." ".$sortbyOrder." LIMIT ".($page_size*($page_no-1) .  ", " . $page_size);
						$arrData=$obj->getData($toPass);
						
						?>
                	<div id="page-content">
                    <!-- Navigation info -->
                    <ul id="nav-info" class="clearfix">
                        <li><a href="dashboard.php?I=1"><i class="icon-home"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">Today's Follow Up</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Row Classes -->
                    <h3 class="page-header">Today's Follow Up</h3>
                    	<h5 class="form-box-header">Note :<br>
							<ul class="icons-ul">
							 <?php if($_SESSION['objLogin']->AccessLevel=="Admin"){?>	
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>Here administrator can view Today's Follow Up.</small></li>
							<?php }else{ ?>
								<li><i class="icon-li icon-arrow-right text-black"></i><small>Here Executive can view Today's Follow Up.</small></li>
							<?php } ?>	
                            </ul>
                        </h5>
                        <?php if($_SESSION['objLogin']->AccessLevel=="Admin"){?>
                         <div class="form-box-header formBoxHeader">
                         <div class="row" style="padding:0 0 10px 0">
                        <div class="col-md-6">
                        <b>Search On :</b>
						</div>
                        </div>
                         
					<div class="row" style="padding:0 0 10px 0">
                        <div class="col-md-4">
                        	<div class="col-md-5">Assigned To</div>
                        	<div class="col-md-7">
                            	<select class="select-chosen" name="srch_AssignedTo" id="srch_AssignedTo">
                                    <option value="">Select</option>
                                    <?php
                                        $objAssignTo=new GenericClass("tbl_manager");
                                        $arrAssignTo=$objAssignTo->getDatalimited("Id,Name"," where DisplayStatus = 'Active' and AccessLevel != 'Admin' ",false);
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
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit" onClick="return checkFields(this);">Search</button>
                                <button class="btn btn-success" type="button" onClick="clearSearch(this.form, ['srch_AssignedTo']);">Show all</button>
                            </div>
                        </div>
                     </div>     
                  </div>
                  <?php } ?>      
                        
                        
							<?php 
                            if(isset($_SESSION['Sucess']) && $_SESSION['Sucess']!="")
                            {
                            ?>
                            <div class="alert alert-success"  style="margin-top:190px;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <b><?php echo $_SESSION['Sucess']; unset($_SESSION['Sucess']); ?></b>
                            </div>
                            <?php
                            }
							
							if(isset($_SESSION['DeleteSucess']) && $_SESSION['DeleteSucess']!="")
                            {
                            ?>
                            <div class="alert alert-success"  style="margin-top:190px;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <b><?php echo "Enquiry deleted successfully"; unset($_SESSION['DeleteSucess']); ?></b>
                            </div>
                            <?php
                            }
                            if(isset($_SESSION['Error']) && $_SESSION['Error']!="")
                            {
                            ?>
                            <div class="alert alert-danger"  style="margin-top:190px;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <b><?php echo $_SESSION['Error']; unset($_SESSION['Error']); ?></b>
                            </div>
                            <?php
                            }
                            ?>
                        </h5>
                        <a href="javascript:void(0);" class="btn label-info" style="margin-top:10px;"><span style="padding:10px 0 0 0px;"><span class="label">Total </span><span class="badge badge-inverse"><?=$num;?></span><span class="label">Records Found </span></span></a>
                       <div style="width:100%; ">
                   <table class="table table-borderless table-hover" style="margin-top:10px;">
                        <thead>
                            <tr class="danger">
                            	
                                <th class="text-center hidden-xs hidden-sm">No</th>
                                <th class=""<?php //put_sorting('Course','Course')?>>School</th>
								<th class=""<?php //put_sorting('RegTime','Enquiry Date')?>>Follow Up Date</th>
                                <th class=""<?php //put_sorting('Name','Name')?>>Name</th>
								<th class=""<?php //put_sorting('Phone','Phone')?>>Assigned To</th>
								<th class=""<?php //put_sorting('Phone','Phone')?>>Attended On</th>
								<th class=""<?php //put_sorting('Type','Type')?>>Type</th>                                
                                <th class=""<?php //put_sorting('Status','Status')?>>Status</th>
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
								$totPagesNo =  $page_no;
								$totPages = $pages;
								$counter=$page_size*($page_no-1)+1;
								$newCounter = count($arrData);
								$i=0;
								$c=0;
								
								$objEnq=new GenericClass("tbl_enquiry");
                                $objUser=new GenericClass("tbl_manager");
											
											
								if(is_array($arrData))
								foreach ($arrData as $key => $value) 
								{
									if(($i%2)==0)
										$class = "active";
									else
										$class = "";
								
								$arrEnquiry=$objEnq->getDatalimited("*"," where Id = ".$arrData[$key]['EnqId'],false);
								$arrUser=$objUser->getDatalimited("*"," where Id = ".$arrData[$key]['UserId'],false);
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
                                        <td class=""><?=$ProductList[$arrEnquiry[0]['Course']];?></td>
										<td class=""><?=date('j M Y',strtotime($arrData[$key]['NextUpdateDate']));?></td>
										<td class=""><a href="javascript:EditRecord('<?= $arrEnquiry[0]['Id'] ?>', './view-enquiry.php?I=4&ref=todays');" data-toggle="tooltip" title="View Enquiry" ><?=$arrEnquiry[0]['Name'];?></a></td>
										<td class=""><?=$arrUser[0]['Name'];?></td>
										<td class=""><?=date('j M Y',strtotime($arrData[$key]['RegTime']));?></td>
                                        <td class=""><?=$RegionList[$arrEnquiry[0]['Type']];?></td>
                                        
                                        <?/*<td class="">
											<?php 
												if($arrEnquiry[0]['UpdateTime']!='' && $arrEnquiry[0]['UpdateTime']!='0000-00-00 00:00:00')
													echo date('d-m-Y',strtotime($arrEnquiry[0]['UpdateTime']));
												else
													echo "-";
											?></td>*/?>
                                        <td class="">
											<?php
												if($arrEnquiry[0]['Status']==21)
													$class = "primary";
												else if($arrEnquiry[0]['Status']==24)
													$class = "inverse";
												else if($arrEnquiry[0]['Status']==26)
													$class = "info";
												else if($arrEnquiry[0]['Status']==27)
													$class = "warning";
												else if($arrEnquiry[0]['Status']==29)
													$class = "success";
												else if($arrEnquiry[0]['Status']==30)
													$class = "danger";			
											?>
											<span class="label label-<?=$class?>"><?=$EnqStatusList[$arrEnquiry[0]['Status']];?></span>
                                        </td>
                                        <?php //if($_SESSION['objLogin']->AccessLevel=="Executive"){ ?>
                                        <td class="">
                                            <div class="btn-group">
                                            	<a href="javascript:EditRecord('<?= $arrData[$key]['EnqId'] ?>', './enquiry-follow.php?I=8&ref=todays');" data-toggle="tooltip" title="Follow up" class="btn btn-xs btn-primary"><i class="icon-book"></i></a>
												<?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
												<a href="javascript:EditRecord('<?= $arrData[$key]['Id'] ?>', './edit-followup.php?I=8&ref=todays');" data-toggle="tooltip" title="Edit Follow up" class="btn btn-xs btn-success"><i class="icon-pencil"></i></a>
												<?php } ?>
                                            </div>
                                        </td>
                                        <?php //} ?>
                                    </tr>
                            <?php
								$i++;
								$c++;
			  					} // End of foreach ($arrData as $key => $value) 
								else
								{
								?>
									<tr class="active">
										<td align="center" valign="middle" colspan="10"><b>No Records Found</b></td>
                                    </tr>
								<?php	
								}
								?>
                           </tbody>
                    </table>
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
    <script type="text/javascript">
		function checkFields(frm)
		{ 
			if(document.frm.TransactionDateFrom.value > document.frm.TransactionDateTo.value)	
			{
				alert("Reminder to date should be greater than From date");
				document.frm.TransactionDateTo.focus();
				return false;
			}
			return true;
		}
	</script>
</html>