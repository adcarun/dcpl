<?php
	include("./phpincludes/header_inc.php");
	$obj=new GenericClass("tbl_reminders");
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>VI Schools | Manage Reminder</title>

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
                    <input type="hidden" name="id" value="" />
                    <input type="hidden" name="corr_tablename" value="" />
                    <input type="hidden" name="col_name" value="" />
                    <?php 
						if($_SESSION['objLogin']->AccessLevel=="Admin"){
							$cond=" Where Id != 0 "; 
						}
						else
						{
							$cond=" Where Id != 0 and UserId = ".$_SESSION['objLogin']->Id; 	
						}
						if($_POST['srch_Title']!="")
							$cond.=" AND Title like '%".htmlspecialchars(addslashes($_POST['srch_Title']))."%' ";
						
						if($_POST['srch_Feed_From_Date']!="")
							$cond.=" AND ReminderDate >= '".htmlspecialchars(addslashes(trim($_POST['srch_Feed_From_Date'])))."' ";
							
						if($_POST['srch_Feed_To_Date']!="")
							$cond.=" AND ReminderDate <= '".htmlspecialchars(addslashes(trim($_POST['srch_Feed_To_Date'])))."' ";
						
						if($_POST['srch_Rfrom']!="")
							$cond.=" AND ReminderTime >= '".htmlspecialchars(addslashes(trim($_POST['srch_Rfrom'])))."' ";
							
						if($_POST['srch_RTo']!="")
							$cond.=" AND ReminderTime <= '".htmlspecialchars(addslashes(trim($_POST['srch_RTo'])))."' ";						
						
						set_management("tbl_reminders", $cond, "RegTime", "desc", 15);
						
						$toPass=str_replace('Where'," ",$cond)."  ORDER BY ".$sortbyColumn." ".$sortbyOrder." LIMIT ".($page_size*($page_no-1) .  ", " . $page_size);
						$arrData=$obj->getData($toPass);
						
						?>
                	<div id="page-content">
                    <!-- Navigation info -->
                    <ul id="nav-info" class="clearfix">
                        <li><a href="dashboard.php?I=1"><i class="icon-home"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">Manage Reminder</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Row Classes -->
                    <h3 class="page-header">Manage Reminder</h3>
                    	<h5 class="form-box-header">Note :<br>
							<ul class="icons-ul">
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>
								<?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
								Here administrator can Manage Reminder.</small></li>
								<?php }else{ ?>
								Here Executive can Manage Reminder.
								<?php } ?>
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
                        <label class="control-label" for="example-input-small">Title :</label>
                        </div>
                        <div class="col-md-7">
                        <input type="text" id="srch_Title" name="srch_Title" class="form-control input-sm" maxlength='20' value="<?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($_POST['srch_Title']))); ?>">
                        </div>
                        
						</div>
                        <div class="col-md-4">
                                <div class="col-md-5">
                                <label class="control-label" for="example-input-small">Reminder Date :</label>
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
                        		<label for="example-select" class="control-label">Reminder Date :</label>
                        	</div>
                        	<div class="col-md-7">
                        		<div class="input-group date input-datepicker " data-date="<?=date('d/m/Y');?>" data-date-format="yyyy-mm-dd">
                            		<span class="input-group-addon"><i class="icon-calendar icon-fixed-width"></i></span>
                                	<input type="text" id="TransactionDateTo" name="srch_Feed_To_Date" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($_POST['srch_Feed_To_Date'])));?>" class="form-control" readonly style="width:110px;" placeholder="To" >
                            	</div>
                        	</div>
                        </div>
                    </div>   
                        
					<div class="row" style="padding:0 0 10px 0">
					
						<div class="col-md-4">
                                <div class="col-md-5">
                                <label class="control-label" for="example-input-small">Reminder Time :</label>
                                </div>
                                <div class="col-md-7">
                                   <input type="text" id="srch_Rfrom" name="srch_Rfrom" class="form-control input-sm" maxlength='20' value="<?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($_POST['srch_Rfrom']))); ?>">
                        	</div>
                        </div>
                        
                        <div class="col-md-4">
                        	<div class="col-md-5">
                        		<label for="example-select" class="control-label">Reminder Time :</label>
                        	</div>
                        	<div class="col-md-7">
                        		<input type="text" id="srch_RTo" name="srch_RTo" class="form-control input-sm" maxlength='20' value="<?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($_POST['srch_RTo']))); ?>">
                        	</div>
                        </div>
					
                        <div class="col-md-4">
                        	<div class="col-md-5">
                        		<label class="control-label" for="example-input-small">&nbsp;</label>
                       		</div>
                            <div class="col-md-7">&nbsp;</div>
                        </div>
                        <div class="col-md-4">
                        	<div class="col-md-5">&nbsp;</div>
                        	<div class="col-md-7">&nbsp;</div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit" onClick="return checkFields(this);">Search</button>
                                <button class="btn btn-success" type="button" onClick="clearSearch(this.form, ['srch_Title','TransactionDateFrom','TransactionDateTo','srch_Rfrom','srch_RTo']);">Show all</button>
                            </div>
                        </div>
                    </div>
                        
                        
                        
					  </div>
                        
                        
                        
							<?php 
                            if(isset($_SESSION['Sucess']) && $_SESSION['Sucess']!="")
                            {
                            ?>
                            <div class="alert alert-success"  style="margin-top:150px;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <b><?php echo $_SESSION['Sucess']; unset($_SESSION['Sucess']); ?></b>
                            </div>
                            <?php
                            }
							
							if(isset($_SESSION['DeleteSucess']) && $_SESSION['DeleteSucess']!="")
                            {
                            ?>
                            <div class="alert alert-success"  style="margin-top:150px;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <b><?php echo "Reminder deleted successfully"; unset($_SESSION['DeleteSucess']); ?></b>
                            </div>
                            <?php
                            }
                            if(isset($_SESSION['Error']) && $_SESSION['Error']!="")
                            {
                            ?>
                            <div class="alert alert-danger"  style="margin-top:150px;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <b><?php echo $_SESSION['Error']; unset($_SESSION['Error']); ?></b>
                            </div>
                            <?php
                            }
                            ?>
                        </h5>
                        <a href="javascript:void(0);" class="btn label-info" style="margin-top:10px;"><span style="padding:10px 0 0 0px;"><span class="label">Total </span><span class="badge badge-inverse"><?=$num;?></span><span class="label">Records Found </span></span></a>
                        
                        <a href="add-reminder.php?I=2" class="btn btn-success" style="margin-top:10px; margin-right:10px; float:right;"><i class="icon-plus"></i> Add New Reminder</a>
                       <div style="width:100%; ">
                    <table class="table table-borderless table-hover" style="margin-top:10px;">
                        <thead>
                            <tr class="danger">
                            	
                                <th class="text-center hidden-xs hidden-sm">No</th>
								<th class=""<?php //put_sorting('Title','Title')?>>Name</th>	
                                <th class=""<?php //put_sorting('Title','Title')?>>Title</th>
                                <th class=""<?php //put_sorting('ReminderDate','Date')?>>Reminder Date</th>
								<th class=""<?php //put_sorting('ReminderDate','Date')?>>Reminder Time</th>
                                <th class="">Actions</th>
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
										<td class="">
										<?php
                                    	$objEnquiry=new GenericClass("tbl_enquiry");
										$ArrEnquiry=$objEnquiry->getDatalimited("Id,Name"," where Id = ".$arrData[$key]['EnquiryId'],false);
										//print_r($ArrEnquiry);
										?>
											<a href="javascript:EditRecord('<?= $ArrEnquiry[0]['Id'] ?>', './view-enquiry.php?I=4');" data-toggle="tooltip" title="View Enquiry" >
										<?php echo $ArrEnquiry[0]['Name'];
										?>
										</a>	
										</td>
                                        <td class=""><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['Title'])));?></td>
                                        <td class=""><?=date('d M Y',strtotime($arrData[$key]['ReminderDate']));?></td>
										<td class=""><?=date('h:i a',strtotime($arrData[$key]['ReminderTime']));?></td>
                                        <td class="">
                                            <div class="btn-group">
                                            	<a href="javascript:EditRecord('<?= $arrData[$key]['Id'] ?>', './view-reminder.php?I=2');" data-toggle="tooltip" title="View Reminder" class="btn btn-xs btn-success"><i class="icon-info-sign"></i></a>
                                            	<a href="javascript:EditRecord('<?= $arrData[$key]['Id'] ?>', './add-reminder.php?I=2');" data-toggle="tooltip" title="Edit Reminder" class="btn btn-xs btn-success"><i class="icon-pencil"></i></a>
                                                <a href="javascript:DeleteRecordNewImage('<?= $arrData[$key]['Id'] ?>','tbl_reminders','manage-reminder.php?I=2','Are you sure, you really want to delete this record ?', './delete_record_page_project.php','');" data-toggle="tooltip" title="Delete Reminder" class="btn btn-xs btn-danger"><i class="icon-remove"></i></a> 
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
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script> 
	<script>
    jQuery('#srch_Rfrom').datetimepicker({
        format: 'HH:mm:ss'
    });
	jQuery('#srch_RTo').datetimepicker({
        format: 'HH:mm:ss'
    });
</script>
</html>