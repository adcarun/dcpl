<?php
	include("./phpincludes/header_inc.php");
	//include("./phpincludes/headings.php");
	$obj=new GenericClass("enquiry_details");
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]--><head>
        <meta charset="utf-8">

        <title> VI SChools | Duplicate Enquiry Mobile</title>

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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic">

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
						$cond=" Where EnqId != 0 and Phone!='' ";
						
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
						
						if($_POST['srch_Mobile']!="")
							$cond.=" AND Phone like '%".htmlspecialchars(addslashes($_POST['srch_Mobile']))."%' ";
						
						if($_POST['srch_PhoneNo']!="")
							$cond.=" AND Phone = '".htmlspecialchars(addslashes($_POST['srch_PhoneNo']))."' ";
						
						if($_POST['srch_City']!="")
							$cond.=" AND City = '".htmlspecialchars(addslashes($_POST['srch_City']))."' ";
						
						if($_POST['srch_Pincode']!="")
							$cond.=" AND PinCode = '".htmlspecialchars(addslashes($_POST['srch_Pincode']))."' ";
						
						$cond.=" group by Phone having count(*) >= 2";
						set_management("enquiry_details", $cond, "Phone", "desc", 15);
						
						$toPass=str_replace('Where'," ",$cond)."  ORDER BY ".$sortbyColumn." ".$sortbyOrder." LIMIT ".($page_size*($page_no-1) .  ", " . $page_size);
						//echo $toPass;
						$arrData=$obj->getDataRestricted("count(*) as TotalRec,Phone",$toPass);
						
						$objTotalEnq=new GenericClass("enquiry_details");
						$arrTotal=$objTotalEnq->getDatalimited("count(*) as TotalRec"," group by Phone having count(*) >= 2 ",false);
						foreach($arrTotal as $rectotal)
						{
							$RTotal = $RTotal+$rectotal['TotalRec'];
						}
						?>
                	<div id="page-content">
                    <!-- Navigation info -->
                    <ul id="nav-info" class="clearfix">
                        <li><a href="dashboard.php?I=1"><i class="icon-home"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">Duplicate Enquiry (Mobile)</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Row Classes -->
                    <h3 class="page-header">Duplicate Enquiry (Mobile)</h3>
                    	<h5 class="form-box-header">Note :<br>
							<ul class="icons-ul">
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>Here administrator can view Duplicate Enquiry (Mobile).</small></li>
                            </ul>
                        </h5>
                        
                         <?php /*?><div class="form-box-header formBoxHeader">
                         <div class="row" style="padding:0 0 10px 0">
                        <div class="col-md-6">
                        <b>Search On :</b>
						</div>
                        </div>
                    
                    
                    <div class="row" style="padding:0 0 10px 0">
                        <div class="col-md-4">
                        <div class="col-md-5">
                        <label class="control-label" for="example-input-small">Email :</label>
                        </div>
                        <div class="col-md-7">
                        	<input type="text" id="srch_Email" name="srch_Email" maxlength="50" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($_POST['srch_Email'])));?>" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="col-md-5">
                        <label class="control-label" for="example-input-small">&nbsp;</label>
                        </div>
                        <div class="col-md-7">&nbsp;</div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit" onClick="return checkFields(this);">Search</button>
                                <button class="btn btn-success" type="button" onClick="clearSearch(this.form, ['srch_Email']);">Show all</button>
                            </div>
                        </div>
                      </div>
                      </div><?php */?>
                        	<?php 
                            if(isset($_SESSION['Sucess']) && $_SESSION['Sucess']!="")
                            {
                            ?>
                            <div class="alert alert-success"  style="margin-top:280px;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <b><?php echo $_SESSION['Sucess']; unset($_SESSION['Sucess']); ?></b>
                            </div>
                            <?php
                            }
							
							if(isset($_SESSION['DeleteSucess']) && $_SESSION['DeleteSucess']!="")
                            {
                            ?>
                            <div class="alert alert-success"  style="margin-top:280px;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <b><?php echo "Enquiry deleted successfully"; unset($_SESSION['DeleteSucess']); ?></b>
                            </div>
                            <?php
                            }
                            if(isset($_SESSION['Error']) && $_SESSION['Error']!="")
                            {
                            ?>
                            <div class="alert alert-danger"  style="margin-top:280px;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <b><?php echo $_SESSION['Error']; unset($_SESSION['Error']); ?></b>
                            </div>
                            <?php
                            }
                            ?>
                        </h5>
                        <a href="javascript:void(0);" class="btn label-info" style="margin-top:10px;"><span style="padding:10px 0 0 0px;"><span class="label">Total </span><span class="badge badge-inverse"><?=($RTotal-$arrTotal[0]['TotalRec']);?></span> <span class="label">unique </span> <span class="badge badge-inverse"><?=$num;?></span> <span class="label">Records Found </span></span></a>
                       <?php /*?><div style="overflow:auto; width:100%;">
                    <table class="table table-borderless table-hover" style="margin-top:10px;">
                    
                        <thead>
                            <tr class="danger">
                            	<th class="text-center hidden-xs hidden-sm">No</th>
                                <th class=""<?php put_sorting('Email','Email')?></th>
                                <th class=""<?php put_sorting('count','Count')?></th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php
								
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
                                        <td class=""><a href="./view-duplicate-enquirers.php?Email=<?=$arrData[$key]['Email']?>&I=14" data-toggle="tooltip" title="View Details"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['Email'])));?></a></td>
                                        <?php
											$arrEnqTotal=$objTotalEnq->getDatalimited("count(*) as TotalRec"," where Email = '".$arrData[$key]['Email']."' ",false);
										?>
                                        <td class=""><?=$arrEnqTotal[0]['TotalRec'];?></a></td>
                                        
                                    </tr>
                            <?php
								$i++;
								$c++;
			  					} // End of foreach ($arrData as $key => $value) 
								else
								{
								?>
									<tr class="active">
										<td align="center" valign="middle" colspan="15"><b>No Records Found</b></td>
                                    </tr>
								<?php	
								}
								?>
                           </tbody>
                    </table>
                    </div><?php */?>
                    <?php 
						/*if(count($arrData)>0)
						{
							$pages = $totPages;
				  			$page_no = $totPagesNo;
              				include_once('./phpincludes/pagination.php');
						}
						put_hidden();*/
					?>
                    <!-- END Borderless -->
                    <?php
						$objTotalEnq=new GenericClass("enquiry_details");
						if($_SESSION['objLogin']->AccessLevel=="Admin"){
						$arrTotal=$objTotalEnq->getDatalimited("count(*) as TotalRec,Phone"," where Phone!='' group by Phone having count(*) >= 2 ",false);
						}else{
						$arrTotal=$objTotalEnq->getDatalimited("count(*) as TotalRec,Phone"," where Phone!='' and AssignedTo=".$_SESSION['objLogin']->Id." group by Phone having count(*) >= 2 ",false);	
						}
						foreach($arrTotal as $rectotal)
						{
							$RTotal = $RTotal+$rectotal['TotalRec'];
						}
					?>
                    <table id="example-datatables" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="cell-small text-center hidden-xs hidden-sm">#</th>
                                <th><i class="icon-user"></i> Mobile</th>
                                <th class="hidden-xs hidden-sm hidden-md"><i class="icon-envelope-alt"></i> Count</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
						$cnt=1;
						foreach($arrTotal as $rectotal)
						{
							?>
                            <tr>
                                <td class="text-center hidden-xs hidden-sm"><?=$cnt?></td>
                                <td><a href="./view-duplicate-enquirers-mobile.php?Mobile=<?=$rectotal['Phone']?>&I=15" data-toggle="tooltip" title="View Details"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($rectotal['Phone'])));?></a></td>
                                <td class="hidden-xs hidden-sm hidden-md"><?=$rectotal['TotalRec']?></td>
                            </tr>
                           <?php
						   $cnt++;
						}
						?>
                        </tbody>
                    </table>
                </div>
                
                
                
                </form>
                
                <?php
					/*$objTotalEnq=new GenericClass("enquiry_details");
					$arrTotal=$objTotalEnq->getDatalimited("count(*) as TotalRec,Mobile"," group by Mobile having count(*) >= 2 ",false);
					foreach($arrTotal as $rectotal)
					{
						$RTotal = $RTotal+$rectotal['TotalRec'];
					}*/
				?>
                
                
                
                
                
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(unescape('%3Cscript src="js/vendor/jquery-1.9.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js -->
        <script src="js/vendor/bootstrap.min.js"></script>

        <!-- Jquery plugins and custom javascript code -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    <script>
            $(function() {
                /* Initialize Datatables */
                $('#example-datatables').dataTable({"aoColumnDefs": [{"bSortable": false, "aTargets": [0]}]});
				$('#example-datatables2').dataTable();
                $('#example-datatables3').dataTable();
                $('.dataTables_filter input').addClass('form-control newsearch').attr('placeholder', 'Search');
            });
        </script>
        
    <style>
			.newsearch{padding-left:40px;}
		</style>
</html>