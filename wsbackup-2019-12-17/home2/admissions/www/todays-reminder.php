<?php
	include("./phpincludes/header_inc.php");
	$obj=new GenericClass("tbl_reminders");
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>VI Schools | Today's Reminder</title>

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
						if($_SESSION['objLogin']->AccessLevel=="Admin")
							$cond=" Where Id != 0 and ReminderDate = '".date('Y-m-d')."' "; 	
						else
							$cond=" Where Id != 0 and ReminderDate = '".date('Y-m-d')."' and UserId = ".$_SESSION['objLogin']->Id; 	
						if($_POST['srch_Title']!="")
							$cond.=" AND Title like '%".htmlspecialchars(addslashes($_POST['srch_Title']))."%' ";
						
						if($_POST['srch_AssignedTo']!="")
							$cond.=" AND UserId = '".htmlspecialchars(addslashes($_POST['srch_AssignedTo']))."' ";
						
						if($_POST['srch_Feed_From_Date']!="")
							$cond.=" AND ReminderDate >= '".htmlspecialchars(addslashes(trim($_POST['srch_Feed_From_Date'])))."' ";
							
						if($_POST['srch_Feed_To_Date']!="")
							$cond.=" AND ReminderDate <= '".htmlspecialchars(addslashes(trim($_POST['srch_Feed_To_Date'])))."' ";
						
						set_management("tbl_reminders", $cond, "RegTime", "desc", 15);
						
						$toPass=str_replace('Where'," ",$cond)."  ORDER BY ".$sortbyColumn." ".$sortbyOrder." LIMIT ".($page_size*($page_no-1) .  ", " . $page_size);
						$arrData=$obj->getData($toPass);
						
						?>
                	<div id="page-content">
                    <!-- Navigation info -->
                    <ul id="nav-info" class="clearfix">
                        <li><a href="dashboard.php?I=1"><i class="icon-home"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">Today's Reminder</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Row Classes -->
                    <h3 class="page-header">Today's Reminder</h3>
                    	<h5 class="form-box-header">Note :<br>
							<ul class="icons-ul">
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>
								<?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
								Here administrator can view Today's Reminder.
								<?php }else{ ?>
									Here Executive can view Today's Reminder.
								<?php } ?>
								</small></li>
                                <?php
									/*$objReminder=new GenericClass("tbl_reminders");
									if($_SESSION['objLogin']->AccessLevel=="Admin")
										$ArrReminder=$objReminder->getDatalimited("Id,Title"," where ReminderDate = '".date('Y-m-d')."' ",false);
									else
										$ArrReminder=$objReminder->getDatalimited("Id,Title"," where ReminderDate = '".date('Y-m-d')."' and UserId = ".$_SESSION['objLogin']->Id,false);
										foreach($ArrReminder as $Reminder)
										{
											$ReminderList .= ucfirst($Reminder['Title'])." | ";
                                        }
										if($ReminderList!='')
										{
											echo "<marquee style='color:#F00;' scrolldelay='150'>".substr($ReminderList,0,-2)."</marquee>";
                                        }*/
									?>
                                	
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
                        <?php 
							if($_SESSION['objLogin']->AccessLevel=="Admin"){
						?>
                        <div class="col-md-4">
                                <div class="col-md-5">
                                	<label class="control-label" for="example-input-small">Name</label>
                                </div>
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
                        <?php
							}
						else
						{
							?>
                            	<div class="col-md-4">
                                	<div class="col-md-5">&nbsp;</div>
                                	<div class="col-md-7">&nbsp;</div>
                        		</div>
                            <?php	
						}
						?>
                        
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit" onClick="return checkFields(this);">Search</button>
                                <?php 
								if($_SESSION['objLogin']->AccessLevel=="Admin"){
								?>
                                	<button class="btn btn-success" type="button" onClick="clearSearch(this.form, ['srch_Title','srch_AssignedTo']);">Show all</button>
                                <?php 
								}
								else
								{ ?>
									<button class="btn btn-success" type="button" onClick="clearSearch(this.form, ['srch_Title']);">Show all</button>
								<?php }
								?>
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
                        
                       <div style="width:100%; ">
                    <table class="table table-borderless table-hover" style="margin-top:10px;">
                        <thead>
                            <tr class="danger">
                            	
                                <th class="text-center hidden-xs hidden-sm">No</th>
                                <th class=""<?php //put_sorting('ReminderDate','Date')?>>Reminder Date</th>
								<th class=""<?php //put_sorting('ReminderDate','Date')?>>Reminder Time</th>
								<?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
                                	<th class=""<?php //put_sorting('UserId','Name')?>>Name</th>
                                <?php } ?> 
								<th class=""<?php //put_sorting('Title','Title')?>>Title</th>	
								<?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
                                	<th class=""<?php //put_sorting('UserId','Name')?>>Executive</th>
                                <?php } ?> 
								<?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
                                <th class="">Actions</th>
								<?php }else{ ?>
								<th class="">Description</th>	
								<?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php 
								// Assigned To details
									$result = '';
									$result = mysql_query("select Id,Name from tbl_manager");
									while($rs = mysql_fetch_assoc($result))
									{
										$AssignedToList[$rs['Id']]	= $rs['Name'];	
									}
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
										<td class=""><?=date('j M Y',strtotime($arrData[$key]['ReminderDate']));?></td>
										<td class=""><?=date('h:i a',strtotime($arrData[$key]['ReminderTime']));?></td>
                                        <td class=""><?php
											$resultEnq = mysql_query("select Id,Name from tbl_enquiry where Id=".$arrData[$key]['EnquiryId']);
											$rowEnq=mysql_fetch_row($resultEnq);
											echo $rowEnq[1]; 
										?></td>
										<td class=""><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['Title'])));?></td>
                                        <?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
                                        	<td class=""><?=$AssignedToList[$arrData[$key]['UserId']];?></td>
                                        <?php } ?>
                                        
										 <?php if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
                                        <td class="">
                                            <div class="btn-group">
                                            	<a href="javascript:EditRecord('<?= $arrData[$key]['Id'] ?>', './view-reminder.php?I=6');" data-toggle="tooltip" title="View Reminder" class="btn btn-xs btn-success"><i class="icon-info-sign"></i></a>
                                            	<?php /*?><a href="javascript:EditRecord('<?= $arrData[$key]['Id'] ?>', './add-reminder.php?I=6');" data-toggle="tooltip" title="Edit Reminder" class="btn btn-xs btn-success"><i class="icon-pencil"></i></a>
                                                <a href="javascript:DeleteRecordNewImage('<?= $arrData[$key]['Id'] ?>','tbl_reminders','manage-reminder.php?I=6','Are you sure, you really want to delete this record ?', './delete_record_page_project.php','');" data-toggle="tooltip" title="Delete Reminder" class="btn btn-xs btn-danger"><i class="icon-remove"></i></a> <?php */?>
                                            </div>
                                        </td>
										<?php }else{ ?>
											<td class=""><?=$AssignedToList[$arrData[$key]['Description']];?></td>
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
</html>