<?php
	include("./phpincludes/header_inc.php");
	$obj=new GenericClass("tbl_enquiry");
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>VI Schools | Monthwise Quotations / Reports</title>

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
							$cond=" Where Id != 0 and Amount !=''"; 
							
						}
						else
						{
							$cond=" Where Id != 0 and AssignedTo = ".$_SESSION['objLogin']->Id; 	
						}
						/*if($_POST['srch_Company']!="")
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
							$cond.=" AND Priority = '".htmlspecialchars(addslashes($_POST['srch_Priority']))."' ";*/
						
						if($_POST['srch_Region']!="")
							$cond.=" AND Region = '".htmlspecialchars(addslashes($_POST['srch_Region']))."' ";
							
						if($_POST['srch_Feed_From_Date']!="")
							$cond.=" AND RegTime >= '".htmlspecialchars(addslashes(trim($_POST['srch_Feed_From_Date']." 00:00:00")))."' ";
							
						if($_POST['srch_Feed_To_Date']!="")
							$cond.=" AND RegTime <= '".htmlspecialchars(addslashes(trim($_POST['srch_Feed_To_Date']." 23:59:59")))."' ";
						
						/*if($_POST['srch_Amount_From']!="" && $_POST['srch_Amount_To']!="")
							$cond.=" AND (Amount >= '".htmlspecialchars(addslashes(trim($_POST['srch_Amount_From'])))."' and Amount <= '".htmlspecialchars(addslashes(trim($_POST['srch_Amount_To'])))."') ";*/
							
						set_management("tbl_enquiry", $cond, "RegTime", "desc", 15);
						
						$toPass=str_replace('Where'," ",$cond)."  ORDER BY ".$sortbyColumn." ".$sortbyOrder." LIMIT ".($page_size*($page_no-1) .  ", " . $page_size);
						$arrData=$obj->getData($toPass);
						
						?>
                	<div id="page-content">
                    <!-- Navigation info -->
                    <ul id="nav-info" class="clearfix">
                        <li><a href="dashboard.php?I=1"><i class="icon-home"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">Monthwise Quotations</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Row Classes -->
                    <h3 class="page-header">Monthwise Quotations</h3>
                    	
                        
                         <div class="form-box-header formBoxHeader">
                         <div class="row" style="padding:0 0 10px 0">
                        <div class="col-md-6">
                        <b>Search On :</b>
						</div>
                        </div>
                         
					<div class="row" style="padding:0 0 10px 0">
                        <div class="col-md-4">
<?php ?>                        
                        </div>
                        <?php ?>
                      </div>  
                      
                      <div class="col-md-12">
                        <div class="col-md-2">
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
                        <div class="row" style="padding:0 0 10px 0">
                        <div class="col-md-4">
                       
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit" onClick="return checkFields(this);">Search</button>
                                <button class="btn btn-success" type="button" onClick="clearSearch(this.form, ['srch_Region','TransactionDateFrom','TransactionDateTo']);">Show all</button>
                            </div>
                        </div>
                    </div>   
                       </div> 
                        
					  </div>
                        <?php ?>
                    </div>
                    <?php ?>
                        
                        
                        
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
												if($arrData[$key]['UpdateTime']!='' && $arrData[$key]['UpdateTime']!='0000-00-00 00:00:00')
													echo date('d-m-Y',strtotime($arrData[$key]['UpdateTime']));
												else
													echo "-";
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