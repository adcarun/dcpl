<?php
	include("./phpincludes/header_inc.php");
	/*if($_SESSION['objLogin']->AccessLevel!="Admin")
	{
		header("location:./dashboard-user.php?I=11");
		exit();
	}*/
	$obj=new GenericClass("enquiry");
	
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>VI Schools | Dashboard</title>

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
    <body onLoad="javascript:document.frm.srch_Ticket_Id.focus();">
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
                    <input type="hidden" name="srch_Product" value="" />
                    <input type="hidden" name="srch_Product1" value="" />
                    <input type="hidden" name="srch_Status" value="" />
                    <input type="hidden" name="corr_tablename" value="" />
                    <input type="hidden" name="col_name" value="" />
                    
                	<div id="page-content">
                    <!-- Navigation info -->
                    <ul id="nav-info" class="clearfix">
                        <li><a href="dashboard.php?I=1"><i class="icon-home"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">School wise Dashboard</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Row Classes -->
                    <?php /*?><h3 class="page-header">Manage Enquiry</h3>
                    	<h5 class="form-box-header">Note :<br>
							<ul class="icons-ul">
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>Here administrator can Manage Enquiry.</small></li>
                            </ul>
                        </h5><?php */?>
                        <!-- Mini Price Tables -->
                    <h2 class="page-header text-center">School wise Dashboard</h2>
					<?php
						/*$TodayCondition = " RegDate between '".date('Y-m-d 00:00:00')."' and '".date('Y-m-d 23:59:59')."'";
						$YesterdayCondition = " RegDate between '".date('Y-m-d 00:00:00',strtotime("-1 day"))."' and '".date('Y-m-d 23:59:59',strtotime("-1 day"))."'";
						$ThisWeekCondition = " RegDate between '".date('Y-m-d 00:00:00')."' and '".date('Y-m-d 23:59:59',strtotime("-7 day"))."' ";
						$CurrentMonthCondition = " RegDate between '".date('Y-m-01 00:00:00')."' and '".date('Y-m-t 23:59:59')."'";*/
						/*$objAdmission=new GenericClass("vitvll_admission");
						$objContactus=new GenericClass("vitvll_contactus");
						
					// Admissions
						$ArrAdmissionSuccess=$objAdmission->getDatalimited("count(*) as AdmissionSuccess"," where PaymentStatus = 'Success' ",false);
						$ArrAdmissionSuccessAmount=$objAdmission->getDatalimited("sum(Amount) as SuccessAmount"," where PaymentStatus = 'Success' ",false);
						$ArrAdmissionFailure=$objAdmission->getDatalimited("count(*) as AdmissionFailure"," where PaymentStatus = 'Failure' ",false);
						$ArrAdmissionAborted=$objAdmission->getDatalimited("count(*) as AdmissionAborted"," where PaymentStatus = 'Aborted' ",false);
						$ArrAdmissionPending=$objAdmission->getDatalimited("count(*) as AdmissionPending"," where PaymentStatus = 'Pending' ",false);
						//$ArrNoOfUsersLandFacebook=$objBannerHits->getDatalimited("HitCount as NoOfUsersLandFacebook"," ",false);
						$ArrAdmissionTotal=$objAdmission->getDatalimited("count(*) as AdmissionTotal"," ",false);
					
					// Startup Registration
						$objStartupRegi=new GenericClass("vitvll_startup_regi");
						$ArrStartupRegiSuccess=$objStartupRegi->getDatalimited("count(*) as AdmissionSuccess"," where PaymentStatus = 'Success' ",false);
						$ArrStartupRegiSuccessAmount=$objStartupRegi->getDatalimited("sum(Amount) as SuccessAmount"," where PaymentStatus = 'Success' ",false);
						$ArrStartupRegiFailure=$objStartupRegi->getDatalimited("count(*) as AdmissionFailure"," where PaymentStatus = 'Failure' ",false);
						$ArrStartupRegiAborted=$objStartupRegi->getDatalimited("count(*) as AdmissionAborted"," where PaymentStatus = 'Aborted' ",false);
						$ArrStartupRegiPending=$objStartupRegi->getDatalimited("count(*) as AdmissionPending"," where PaymentStatus = 'Pending' ",false);
						$ArrStartupRegiTotal=$objStartupRegi->getDatalimited("count(*) as AdmissionTotal"," ",false);
					
					// Student Registration
						$objStudentRegi=new GenericClass("vitvll_student_regi");
						$ArrStudentRegiSuccess=$objStudentRegi->getDatalimited("count(*) as AdmissionSuccess"," where PaymentStatus = 'Success' ",false);
						$ArrStudentRegiSuccessAmount=$objStudentRegi->getDatalimited("sum(Amount) as SuccessAmount"," where PaymentStatus = 'Success' ",false);
						$ArrStudentRegiFailure=$objStudentRegi->getDatalimited("count(*) as AdmissionFailure"," where PaymentStatus = 'Failure' ",false);
						$ArrStudentRegiAborted=$objStudentRegi->getDatalimited("count(*) as AdmissionAborted"," where PaymentStatus = 'Aborted' ",false);
						$ArrStudentRegiPending=$objStudentRegi->getDatalimited("count(*) as AdmissionPending"," where PaymentStatus = 'Pending' ",false);
						$ArrStudentRegiTotal=$objStudentRegi->getDatalimited("count(*) as AdmissionTotal"," ",false);
					
					// Contact Us
						$ArrContactUsToday=$objContactus->getDatalimited("count(*) as Today"," where $TodayCondition ",false);
						$ArrContactUsYesterday=$objContactus->getDatalimited("count(*) as Yesterday"," where $YesterdayCondition ",false);
						$ArrContactUsThisweek=$objContactus->getDatalimited("count(*) as ThisWeek"," where $ThisWeekCondition ",false);
						$ArrContactUsCurrentMonth=$objContactus->getDatalimited("count(*) as CurrentMonth"," where $CurrentMonthCondition ",false);
						$ArrContactUsTotal=$objContactus->getDatalimited("count(*) as Total"," ",false);*/
						
					// Total
						/*$ArrAdmissionTodayTotal=$objAdmission->getDatalimited("count(*) as TodayAdmissionTotal"," where $TodayCondition ",false);
						$ArrAdmissionYesterdayTotal=$objAdmission->getDatalimited("count(*) as YesterdayAdmissionTotal"," where $YesterdayCondition ",false);
						$ArrAdmissionCurrentMonthTotal=$objAdmission->getDatalimited("count(*) as CurrentMonthAdmissionTotal"," where $CurrentMonthCondition ",false);
						$ArrAdmissionTotalTotal=$objAdmission->getDatalimited("count(*) as TotalAdmissionTotal","  ",false);
						$ArrNoOfUsersLandTotal=$objBannerHits->getDatalimited("sum(HitCount) as NoOfUsersLandTotal","  ",false);
						$ArrNoOfAdmissionSubmissionsTotal=$objAdmission->getDatalimited("count(*) as NoOfAdmissionSubmissionsTotal"," ",false);*/
					?>
					
					<div class="price-tables">
                        <!-- Basic Plan -->
                        <?php
                            $objSiteCodes=new GenericClass("tbl_site_codes");
                            $objTotalCnt=new GenericClass("enquiry_details");
                            $objProduct=new GenericClass("tbl_ongoing_projects");
                           /* if($_SESSION['objLogin']->AccessLevel=="College Principal" || $_SESSION['objLogin']->AccessLevel=="Collage Executive"){
                                $ArrProducts=$objProduct->getDatalimited("*"," Where Id != 0 and Id not in(1,2,3,7) order by Name asc ",false);    
                            }
                            else if($_SESSION['objLogin']->AccessLevel=="Prtishthan Executives" || $_SESSION['objLogin']->AccessLevel=="Prtishthan Admin"){
                                $ArrProducts=$objProduct->getDatalimited("*"," Where Id != 0 and Id in(1,2,3,7) order by Name asc ",false);
                            }
                            else{*/
                                $ArrProducts=$objProduct->getDatalimited("*"," order by Name asc ",false);
                            //}
                            $i=1;
                            
                            
                                // For % calculation start
                                    $TotalRecCnt=$objTotalCnt->getDatalimited("COUNT(EnqId) AS TotalCnt"," WHERE SourceId != '' ",false);    
                                // For % calculation end
                                ?>
                                    <div class="plan">
                                        <h3 class="plan-header">All Schools</h3>
                                        <ul class="icons-ul">
                                            <?php
                                                $ArrSiteCodes=$objSiteCodes->getDatalimited("*"," where Category = 'Enquiry Status' ORDER BY Id asc ",false);
                                                foreach($ArrSiteCodes as $SiteCodes)
                                                {
                                                    if($SiteCodes['Key']=='Canceled')
                                                        $class = "inverse";
                                                    else if($SiteCodes['Key']=='Undecided')
                                                        $class = "warning";
                                                    else if($SiteCodes['Key']=='Confirmed')
                                                        $class = "success";
                                                    else if($SiteCodes['Key']=='Positive')
                                                        $class = "info";
                                                    else if($SiteCodes['Key']=='Fresh')
                                                        $class = "default";
                                                    else if($SiteCodes['Key']=='Not Eligible')
                                                        $class = "primary-new";
                                                    ?>
                                                        <li>
                                                            <a href="javascript:ViewEnquiryDetailsAllFaculty('<?=$SiteCodes['Id']?>','./manage-enquiry.php?I=4');" data-toggle="tooltip" title="Click to view details">
                                                                <span class="campaignBadge badge badge-<?=$class?>">
                                                                    <?php
                                                                    if($_SESSION['objLogin']->AccessLevel=="Executive"){
                                                                        
                                                                           $ArrCnt=$objTotalCnt->getDatalimited("COUNT(EnqId) AS cnt"," WHERE Status = '".$SiteCodes['Id']."' and CourseId = ".$Products['Id'],false);
                                                                    }
                                                                    else
                                                                    {
                                                                        $ArrCnt=$objTotalCnt->getDatalimited("COUNT(EnqId) AS cnt"," WHERE Status = '".$SiteCodes['Id']."' ",false);    
                                                                    }
                                                                    $rowTotal = $rowTotal + $ArrCnt[0]['cnt'];
                                                                    echo $ArrCnt[0]['cnt'];
                                                                    ?>
                                                                </span>
                                                            </a>
                                                            <span class="campaignName"><?=$SiteCodes['Key']?></span>
                                                            <span class="campaignPerc">
                                                            <?php
                                                                // % calculation start
                                                                    echo "<span class='label label-".$class."'>".round(($ArrCnt[0]['cnt'] / $TotalRecCnt[0]['TotalCnt']) * 100)." %"; echo "</span>";
                                                                // % calculation end
                                                            ?>
                                                            </span>
                                                        </li>
                                                    <?php    
                                                }
                                            ?>
                                        </ul>
                                        <h1><?php echo $rowTotal; $rowTotal = ''; ?> <small>Total</small></h1>
                                        
                                    </div>
                                <?php
                                
                            unset($SiteCodes);
                            unset($TotalRecCnt);
                            unset($rowTotal);
                            unset($objSiteCodes);
                            unset($objTotalCnt);
                            unset($objProduct);
                            
                            
                            
                        ?>
                    </div>
					
					
                    <div class="price-tables">
                        <!-- Basic Plan -->
                        <?php
							$objSiteCodes=new GenericClass("tbl_site_codes");
							$objTotalCnt=new GenericClass("enquiry_details");
							$objProduct=new GenericClass("tbl_ongoing_projects");
							$ArrProducts=$objProduct->getDatalimited("*"," order by Name asc ",false);
							$i=1;
							foreach($ArrProducts as $Products)
							{
								//if($Products['Id']!='28' && $Products['Id']!='27' && $Products['Id']!='32' && $Products['Id']!='29' && $Products['Id']!='30'){
								?>
                                	<div class="plan">
                                        <h3 class="plan-header"><?=$Products['Name']?></h3>
                                        <ul class="icons-ul">
                                        	<?php
												$ArrSiteCodes=$objSiteCodes->getDatalimited("*"," where Category = 'Enquiry Status' ORDER BY `Id` ",false);
												foreach($ArrSiteCodes as $SiteCodes)
												{
													/*if($SiteCodes['Key']=='Fees received (Enrolled)')
														$class = "success";
													else if($SiteCodes['Key']=='Course completed')
														$class = "completed";	
													else if($SiteCodes['Key']=='Received Enquiry')
														$class = "primary";
													else if($SiteCodes['Key']=='Form received')
														$class = "warning";
													else if($SiteCodes['Key']=='Follow up in progress')
														$class = "info";
													else if($SiteCodes['Key']=='PI 1 over')
														$class = "inverse";	
													else if($SiteCodes['Key']=='PI 2 done')
														$class = "p1done";			
													else if($SiteCodes['Key']=='Cancelled')
														$class = "danger";*/
													if($SiteCodes['Key']=='Canceled')
                                                        $class = "inverse";
                                                    else if($SiteCodes['Key']=='Undecided')
                                                        $class = "warning";
                                                    else if($SiteCodes['Key']=='Confirmed')
                                                        $class = "success";
                                                    else if($SiteCodes['Key']=='Positive')
                                                        $class = "info";
                                                    else if($SiteCodes['Key']=='Fresh')
                                                        $class = "default";
                                                    else if($SiteCodes['Key']=='Not Eligible')
                                                        $class = "primary-new";
													else if($SiteCodes['Key']=='Not Interested')
                                                       $class = "danger";
													?>
                                                    	<li>
                                                            <a href="javascript:ViewEnquiryDetails('<?=$Products['Id']?>','<?=$SiteCodes['Id']?>','./manage-enquiry.php?I=4');" data-toggle="tooltip" title="Click to view details">
                                                            	<span class="badge badge-<?=$class?>">
                                                                	<?php
																	if($_SESSION['objLogin']->AccessLevel=="Admin"){
																		$ArrCnt=$objTotalCnt->getDatalimited("COUNT(EnqId) AS cnt"," WHERE CourseId = ".$Products['Id']." AND Status = '".$SiteCodes['Id']."' ",false);
																	}else{
																		$ArrCnt=$objTotalCnt->getDatalimited("COUNT(EnqId) AS cnt"," WHERE CourseId = ".$Products['Id']." AND Status = '".$SiteCodes['Id']."' and AssignedTo='".$_SESSION['objLogin']->Id."' ",false);
																	}
                                                                    $rowTotal = $rowTotal + $ArrCnt[0]['cnt'];
                                                                    echo $ArrCnt[0]['cnt'];
                                                                	?>
                                                            	</span>
                                                            </a>
															<span class="campaignName"><?=$SiteCodes['Key']?></span>
                                                            <span class="campaignPerc">
                                                            <?php
                                                                // % calculation start
                                                                    echo "<span class='label label-".$class."'>".round(($ArrCnt[0]['cnt'] / $rowTotal) * 100)." %"; echo "</span>";
                                                                // % calculation end
                                                            ?>
                                                            </span>	
                                                        	
                                                        </li>
                                                    <?php	
												}
											?>
                                        </ul>
                                        <h1><?php echo $rowTotal; $rowTotal = ''; ?> <small>Total</small></h1>
                                        <a href="javascript:EnquiryDetails1('<?=$Products['Id']?>', './manage-enquiry.php?I=4');" class="btn btn-warning"><i class="icon-chevron-right"></i> View Details</a>
                                    </div>
                                <?php
									//}
								/*if($i==3)
									echo "</div><div class='price-tables'>";*/
								$i++;
							}
						?>
                    </div>
                    <!-- END Mini Price Tables -->
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
				alert("Admission to date should be greater than From date");
				document.frm.TransactionDateTo.focus();
				return false;
			}
			return true;
		}
	</script>
</html>