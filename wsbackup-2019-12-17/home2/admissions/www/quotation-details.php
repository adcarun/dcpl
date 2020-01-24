<?php
	include("./phpincludes/header_inc.php");
	//$obj=new GenericClass("tbl_follow_up");
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>VI Schools | Quotations Details/ Reports</title>

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
						/*/*if($_SESSION['objLogin']->AccessLevel=="Admin"){
							$cond=" Where Id != 0 and Amount !=''"; 
							echo "$cond";
														
						}
						else
						{*/
							//$cond=" Where Id != 0 group by EnqId ";
						//}
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
							
						/*set_management("tbl_follow_up", $cond, "Amount", "desc", 10);
						
						$toPass=str_replace('Where'," ",$cond)."  ORDER BY ".$sortbyColumn." ".$sortbyOrder." LIMIT ".($page_size*($page_no-1) .  ", " . $page_size);
						//echo $toPass;
						$arrData=$obj->getData($toPass);*/
				
						?>
                	<div id="page-content">
                    <!-- Navigation info -->
                    <ul id="nav-info" class="clearfix">
                        <li><a href="dashboard.php?I=1"><i class="icon-home"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">Quotation Details</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Row Classes -->
                    <h3 class="page-header">Quotations Details of <?php echo htmlspecialchars_decode(htmlspecialchars_decode(stripslashes(base64_decode($_GET['CName']))));?></h3>
                    	
                                                
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
                        
                        <?php if($_SESSION['objLogin']->AccessLevel=="Admin"){?>
                        <a href="downloadExcel-quotationdetails.php?enqid=<?=$_GET['enqid']?>" class="btn btn-success" style="margin-top:10px; margin-right:10px; float:right;"><i class="glyphicon-download_alt"></i> &nbsp; Download in Excel</a><?php } ?>
                        
                       <div style="overflow:auto; width:100%;">
                    <table class="table table-borderless table-hover" style="margin-top:10px;">
                    
                        <thead>
                            <tr class="danger">
                            	
                                <th class="text-center hidden-xs hidden-sm">No</th>
                                <th class=""<?php put_sorting('Todays Update','Todays Update')?></th>
                                <th class=""<?php put_sorting('Next Follow Up Date','Next Follow Up Date')?></th>
                                <th class=""<?php put_sorting('Amount','Amount')?></th>
                                <th class=""<?php put_sorting('File','File')?></th>
                             </tr>
                        </thead>
                        <tbody>
                        	<?php
								
									
									//$objenquiry=new GenericClass("tbl_enquiry");
									$objcompany=new GenericClass("enquiry_details");
										
                           // echo count($arrData);
						 
									$objfollowup=new GenericClass("tbl_follow_up");
		
							/*$Arrobjfollowup=$objfollowup->getDatalimited("*", DISTINCT ("EnqId"), " where CompanyId  = ".$_GET['enqid']." group by EnqId order by Id desc",true);*/
									
									$Arrobjfollowup=$objfollowup->getDatalimited("DISTINCT (EnqId)"," where CompanyId =".$_GET['enqid']." ",false);
									
									/*echo "$Arrobjfollowup";
									exit;*/
									$counter=1;
									$i=0;
									foreach ($Arrobjfollowup as $followup)
									{
										
									if(($i%2)==0)
										$class = "active";
									else
										$class = "";
							?>
                                    <tr class="<?=$class?>">
                                        
                                        <td class="text-center hidden-xs hidden-sm"><?php echo $counter++; ?></td>
                                        	
											<?php /*$ArrRegistration=$objenquiry->getDatalimited("CId"," where Id = ".$objfollowup['EnqId'],false);
                                        	$Arrcompany=$objcompany->getDatalimited("CName"," where EnqId = ".$objfollowup['EnqId'],false);*/
											$followup=$objfollowup->getDatalimited("Amount,TodaysUpdate,NextUpdateDate,File"," where EnqId = ".$followup['EnqId']. " order by Id desc LIMIT 0,1",false);
											?> 

										
                                           <td class=""><?php echo $followup[0]['TodaysUpdate']; ?></td>
                                           <td class=""><?php echo $followup[0]['NextUpdateDate']; ?></td>
                                           <td class=""><?php echo $followup[0]['Amount']; ?></td>
                                           
                                           <td>  <?php if($followup[0]['File']==''){echo "-"; }else {?><a href="<?=$followup[0]['File'];?>" target="_blank" data-toggle="tooltip" title="Click to View File"><b>View</b></a><?php } ?></td>                                    
                                   </tr>
                            <?php
								
								$i++;
			  					} // End of foreach ($arrData as $key => $value) 
								
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