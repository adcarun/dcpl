<?php
	include("./phpincludes/header_inc.php");
	if($_SESSION['objLogin']->AccessLevel!="Super Admin")
	{
		session_destroy();
		header("location:index.php");
		exit();
	}
	$obj=new GenericClass("id_category");
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>VI Schools | Manage Photo Gallery</title>

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
    <body onLoad="javascript:document.frm.srch_Company.focus();" >
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

                <!-- Loading Indicator, Used for demostrating how loading of widgets could happen, check main.js - uiDemo() -->
                

                <!-- Header Widgets -->
                <!-- You can create the widgets you want by replicating the following. Each one exists in a <li> element -->
                <ul id="widgets" class="navbar-nav-custom pull-right">
                    <!-- Just a divider -->
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
                    <!-- Sidebar search -->
                    
                    <!-- END Sidebar search -->

                    <!-- Primary Navigation -->
                    <?php
							include("./includes/super-admin-left-panel.php");
						?>
                    <!-- END Primary Navigation -->
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
						$cond=" Where Id != 0  "; 
						if($_POST['srch-Category']!="")
							$cond.=" AND CatName like '%".htmlspecialchars(addslashes(trim($_POST['srch-Category'])))."%' ";
						
						if($_POST['srch-Status']!="")
							$cond.=" AND CatDisStatus = '".htmlspecialchars(addslashes(trim($_POST['srch-Status'])))."' ";
						
						set_management("id_category", $cond, "CatRegDate", "desc", 10);
						
						$toPass=str_replace('Where'," ",$cond)."  ORDER BY ".$sortbyColumn." ".$sortbyOrder." LIMIT ".($page_size*($page_no-1) .  ", " . $page_size);
						$arrData=$obj->getData($toPass);
						
						?>
                	<div id="page-content">
                    <!-- Navigation info -->
                    <ul id="nav-info" class="clearfix">
                        <li><a href="manage-quran.php?I=1"><i class="icon-home"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">Photo Gallery Category</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Row Classes -->
                    <h4 class="page-header">Photo Gallery Category</h4>
                    
                    <h5 class="form-box-header ">
                    <div class="clearfix"></div>
						Note :
							<div class="clearfix"></div>
								<ul class="icons-ul">
                            		<li><i class="icon-li icon-arrow-right text-black"></i><small>Here administrator can Manage Photo Gallery Category.</small></li>
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
                        			<label class="control-label " for="example-input-small">Category :</label>
                        		</div>
                        		<div class="col-md-7">
                        			<input type="text" id="transl2" name="srch-Category" class="form-control input-sm" maxlength='20' value="<?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($_POST['srch-Category']))); ?>">
                        		</div>
                        	</div>
                            <div class="col-md-4">
                                <div class="col-md-5">
                                	<label for="example-select" class="control-label">Status :</label>
                                </div>
                                <div class="col-md-7">
                                	<select class="form-control" name="srch-Status" id="srch-Status" >
                                        <option value="">Select</option>
                                        <option value="P" <?php if($_POST['srch-Status'] == "P") echo "selected"; ?>>Publish</option>
                                        <option value="D" <?php if($_POST['srch-Status'] == "D") echo "selected"; ?>>Draft</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                            	<div class="col-md-5">
                            		<label class="control-label " for="example-input-small">&nbsp;</label>
                            	</div>
                            	<div class="col-md-7">
                             		<button class="btn btn-success" type="submit">Search</button>
                                	<button class="btn btn-success" type="button" onClick="clearSearch(this.form, ['transl2','srch-Status']);">Show all</button>
                            	</div>
                            </div>
                        </div>
					</div>
                    <div id='translControl' class="DisplayNone">
                        <input type='hidden' id="transl1"/>
                    </div>   
                    <?php 
						if(isset($_SESSION['Sucess']) && $_SESSION['Sucess']!="")
						{
						?>
							<div class="alert alert-success" style="margin-top:120px;">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<b><?php echo $_SESSION['Sucess']; unset($_SESSION['Sucess']); ?></b>
							</div>
						<?php
						}
						if(isset($_SESSION['Error']) && $_SESSION['Error']!="")
						{
						?>
							<div class="alert alert-danger" style="margin-top:120px;">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<b><?php echo $_SESSION['Error']; unset($_SESSION['Error']); ?></b>
							</div>
						<?php
						}
                    ?>
                    <a href="add-photo-category.php?I=2" class="btn btn-success" style="margin-top:10px;"><i class="icon-plus"></i> Add Category</a>
                    <table class="table table-borderless table-hover" style="margin-top:20px;">
                        <thead>
                            <tr class="danger">
                            	<th class="cell-small text-center"><i class="icon-bolt"></i>Actions</th>
                                <th class="cell-small">No</th>
                                <th class="cell-small"<?php put_sorting('CatWeight','Weight')?></th>
                                <th<?php put_sorting('id','Category Name')?></th>
                                <th>Photo</th>
                                <th class="cell-small"<?php put_sorting('CatDisStatus','Status')?></th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php 
								$totPagesNo =  $page_no;
								$totPages = $pages;
								$counter=$page_size*($page_no-1)+1;
								$i=0;
								if(is_array($arrData))
								foreach ($arrData as $key => $value) 
								{
									if(($i%2)==0)
										$class = "active";
									else
										$class = "";
							?>
                                    <tr class="<?=$class?>">
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="javascript:EditRecord('<?= $arrData[$key]['Id'] ?>', './add-photo-category.php?I=2');" data-toggle="tooltip" title="Edit Category" class="btn btn-xs btn-success"><i class="icon-pencil"></i></a>
                                                <a href="javascript:DeleteMultipleRecord('<?= $arrData[$key]['Id'] ?>','id_category','mange-photo-gallery.php?I=2','Are you sure, you really want to delete this record?','If you delete this rcord all corresponding records will be deleted?','id_photos','CatId','./DeleteMultipleRecord.php','<?php echo $arrData[$key]['CompanyLogo']?>');" data-toggle="tooltip" title="Delete Category" class="btn btn-xs btn-danger"><i class="icon-remove"></i></a>
                                            </div>
                                        </td>
                                        <td><?= $counter++ ?></td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['CatWeight'])));?></td>
                                        <td><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[$key]['CatName'])));?></td>
                                        <td><a href="manage-photo.php?id=<?=$arrData[$key]['Id']?>&I=2&CatId=<?=$arrData[$key]['Id']?>" class="btn btn-xs btn-success" data-toggle="tooltip" title="Add / Edit Photos"><i class="icon-plus"></i> Add / Edit Photos</a></td>
                                        <td>
											<?php
												$displayStatus = array("P"=>'Publish','D'=>'Draft');
												echo $displayStatus[$arrData[$key]['CatDisStatus']];
											?>
                                        </td>
                                    </tr>
                            <?php
								$i++;
			  					} // End of foreach ($arrData as $key => $value) 
								else
								{
								?>
                                	<tr class="active">
										<td align="center" valign="middle" colspan="7"><b>No Records Found</b></td>
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
                </form>
                <!-- END Page Content -->

                <!-- Footer -->                
               		<?php 
						include("./includes/footer.php");
						include("./includes/MarathiEditor.php");
					?>
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