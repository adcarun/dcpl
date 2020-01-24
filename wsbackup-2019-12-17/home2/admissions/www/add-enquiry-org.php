<?php
	
	include("./phpincludes/header_inc.php");
	$obj=new GenericClass("tbl_enquiry");
	$arrData=$obj->getData(" Id = ".$_POST['id']);
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <!--<script src="./js/checkDBDetails.js"></script>-->
    <script src="./js/jquery1.11.2.min.js"></script>   
    <script src="./js/jquery.validate.js"></script>
	<script src="./js/all-script.js"></script>	
    <script src="./js/ajax-check.js"></script>	

<?php /*?><script>
$(document).ready(function(){
    $("#hideaddcontact2").click(function(){
        $("#secondcontact").hide();
		 $("#hide").hide();
		 $("#show").show();
		
    });
    $("#showaddcontact2").click(function(){
        $("#secondcontact").show();
		 $("#show").hide();
		 $("#hide").show();
    });
	
	 $("#hideaddcontact3").click(function(){
        $("#thirddcontact").hide();
		 $("#hide").hide();
		 $("#show").show();
		
    });
    $("#showaddcontact3").click(function(){
        $("#thirdcontact").show();
		 $("#show").hide();
		 $("#hide").show();
    });
});
</script><?php */?>
							<script>
                                $(document).ready(function() {
											var max_fields      = 10; //maximum input boxes allowed
											var wrapper         = $(".input_fields_wrap"); //Fields wrapper
											var add_button      = $(".add_field_button"); //Add button ID
										   
											var x = 1; //initlal text box count
											$(add_button).click(function(e){ //on add input button click
												e.preventDefault();
												if(x < max_fields){ //max input box allowed
													x++; //text box increment
													$(wrapper).append("<div class='col-md-12 col-sm-12 formRow newrow'><div class='row borBott input_fields_wrap'><div class='form-group'><label class='control-label col-md-3' for='masked_phone'>Contact Person Name :</label><div class='col-md-4'><input type='text' name='CPersonName"+x+"' maxlength='50' value='' class='form-control'></div></div><div class='form-group'><label class='control-label col-md-3' for='masked_phone'>Contact Person Mobile :</label><div class='col-md-4'><input type='text' name='CPersonMobile"+x+"' maxlength='10' value='' class='form-control'></div></div><div class='form-group'><label class='control-label col-md-3' for='masked_phone'>Contact Person Email :</label><div class='col-md-4'><input type='text' name='CPersonEmail"+x+"' maxlength='50' value='' class='form-control'></div><a href='#' class='remove_field glyphicon glyphicon-minus'></a></div>"); //add input box
												}
											});
										   
											$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
												e.preventDefault(); $(this).parents('div.newrow').remove(); x--;
											})
								});

                                </script>
 	<script>
		$(document).ready(function(){
			validateData();
		});
		
		$(document).ready(function(){
			$("#CId").change(function(){
				var CId = $("#CId").val();
				$.ajax({
					type:"post",
					url:"get-company-details.php",
					data:{CId:CId},
					success:function(result)
					{ 
						$("#CompanyDetails").html(result);	
					}
				});
			});
		});
	</script>
  
    <style>	
	#Enquiry label.error {
		color:red;
		font-size:12px;
		font-weight:normal;
	}
	</style>
	<script>
  	$(document).ready(function() {
		jQuery.validator.addMethod("emailValidation", function(value, element) 
		{
    		return this.optional(element) || /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/i.test(value);
		}, "Please enter valid email id");	
		
		jQuery.validator.addMethod("lettersonly", function(value, element) 
		{
    		return this.optional(element) || /^[a-z\s]+$/i.test(value);
		}, "Please enter only alphabets");	
		
		jQuery.validator.addMethod("alphanumeric", function(value, element) {
    		return this.optional(element) || /^[a-zA-Z0-9 ]+$/i.test(value);
		}, "Please enter only alphanumeric characters");	
	
		jQuery.validator.addMethod("dateCompaire", function(value, element) {
			var startdatevalue = $('#TodaysDate').val();	
			return Date.parse(startdatevalue) >= Date.parse(value);
		}, "Enquiry Date should be less than Today's Date.");
		
		$("#Enquiry").validate({ 
		rules: { 
			Product:{
				required:true,
			},
			CId:{
				required:true,
			},
			CPersonName:{
				required:true,
				lettersonly: true
			},
			CPersonMobile:{
				required:true,
				number : true,
				minlength:10
			},
			CPersonEmail:{
				required:true,
				emailValidation:true,
				/*remote:{
					url:"ajax-check-cperson-email.php",
					type:"post",
					data:{
					CPersonEmail:function(){
							return $("#CPersonEmail").val();
						},
					},
				},*/
			},
			CPersonName2:{
				required:true,
				lettersonly: true
			},
			CPersonMobile2:{
				required:true,
				number : true,
				minlength:10
			},
			CPersonEmail2:{
				required:true,
				emailValidation:true,
			},
			Description:{
				required:true,
			},
			
			Region:{
				required:true,
			},
			Source:{
				required:true,
			},
			Priority:{
				required:true,
			},
			Status:{
				required:true,
			},
			AssignedTo:{
				required:true,
			},
			RegTime:{
				required:true,
				dateCompaire:true,
			},
		},
			messages: {
				CPersonName: {
					required : "This field is required",
					lettersonly : "Please enter only alphabets",
				},
				CPersonMobile:{
					number: "Please enter only digits",
					minlength: "Please enter at-least 10 digits.",
				},
				CPersonEmail:{
					remote : "Email id already exists, Please enter another id"
				},
			},
		});
	});
	function removeValidationRemote(field)
	{ 
		$('#'+field).rules('remove','remote');
	}
  </script>
        <meta charset="utf-8">

        <title>Infini Solutions | Edit Enquiry</title>

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

                <!-- Loading Indicator, Used for demostrating how loading of widgets could happen, check main.js - uiDemo() -->
                

                <!-- Header Widgets -->
                <!-- You can create the widgets you want by replicating the following. Each one exists in a <li> element -->
                <ul id="widgets" class="navbar-nav-custom pull-right">
                    <!-- Just a divider -->
                    <!-- RSS Widget -->
                    <!-- Add .dropdown-left-responsive class to align the dropdown menu left (so its visible on mobile) -->
                    
                    <!-- END RSS Widget -->

                    <!-- Twitter Widget -->
                    <!-- Add .dropdown-left-responsive class to align the dropdown menu left (so its visible on mobile) -->
                    
                    <!-- END Twitter Widget -->

                    <!-- Messages Widget -->
                    <!-- Add .dropdown-left-responsive class to align the dropdown menu left (so its visible on mobile) -->
                    
                    <!-- END Messages Widget -->

                   <!-- Notifications Widget -->
                    <!-- Add .dropdown-center-responsive class to align the dropdown menu center (so its visible on mobile) -->
                   
                    <!-- END Notifications Widget -->

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
                <div id="page-content">
                    <!-- Navigation info -->
                    <ul id="nav-info" class="clearfix">
                        <li><a href="dashboard.php?I=1"><i class="icon-home"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">Add / Edit Enquiry</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Text Inputs -->
                    <form name="frm" method="post" id="Enquiry" onReset="this.CId.focus();" action="add-enquiry-action.php" enctype="multipart/form-data" class="form-horizontal form-box">
                    	<input type="hidden" name="Id" value="<?= $_POST['id'] ?>" />
                        <h4 class="form-box-header">Add Enquiry</h4>
                        
                        <h5 class="form-box-header">Note :<br>
							<ul class="icons-ul">
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>Here administrator can Add Enquiry.</small></li>
                            	<li><i class="icon-li icon-arrow-right text-black"></i><small>All Fields are Mandatory, except Assigned To</small></li>
                        	</ul>
                        </h5>
                        <div class="form-box-content">
                            <!-- Input Sizes -->
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Product :</label>
                                <div class="col-md-4">
                                    <?php /*?><select class="select-chosen" name="CId" id="CId"><?php */?>
                                    <select class="form-control" name="Product" id="Product">
                                        <option value="">Select</option>
                                        <?php
                                            $objProduct=new GenericClass("tbl_ongoing_projects");
											$ArrProducts=$objProduct->getDatalimited("*"," order by Name asc ",false);
                                            foreach($ArrProducts as $Products)
                                            {
                                                ?>
                                                    <option value="<?=$Products['Id']?>"<?php if($arrData[0]['Product']==$Products['Id']){echo "selected"; }?>><?=$Products['Name']?></option>
                                                <?php	
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Company Name :</label>
                                <div class="col-md-4">
                                    <?php /*?><select class="select-chosen" name="CId" id="CId"><?php */?>
                                    <select class="form-control" name="CId" id="CId">
                                        <option value="">Select</option>
                                        <?php
                                            $objCompany=new GenericClass("tbl_company");
                                            $arrCompany=$objCompany->getDatalimited("Id,CName"," where CDisplayStatus = 'Active'and Isdelete != 1",false);
                                            foreach($arrCompany as $Company)
                                            {
                                                ?>
                                                    <option value="<?=$Company['Id']?>"<?php if($arrData[0]['CId']==$Company['Id']){echo "selected"; }?>><?=$Company['CName']?></option>
                                                <?php	
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div id="CompanyDetails"></div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Company Division :</label>
                                <div class="col-md-4">
                                	<input type="text" id="CDivision" name="CDivision" maxlength="50" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['CDivision'])));?>" class="form-control">
                                </div>
                            </div>
                            
                                                                                               
                           <div class="col-md-12 col-sm-12 formRow input_fields_wrap">
                            <div class="row borBott m25">
                        
              <?php /*?><div class="form-group">
               <!-- <label for="exampleInputFile">Last 2 Years Computation Sheet</label>-->
                <label class="control-label col-md-3" for="masked_phone">Contact Person Name :</label>
                 <div class="col-md-4">
                 <input type="text" id="CPersonName" name="CpersonName[]" maxlength="50">	
                 </div>
              </div>
              
              <div class="form-group">
               <label class="control-label col-md-3" for="masked_phone">Contact Person Mobile :</label>
                  <div class="col-md-4">
                 <input type="text" id="CPersonMobile"  name="CPersonMobile[]" maxlength="10"> 
               </div>
            </div>
           
            <div class="form-group">
                <label class="control-label col-md-3" for="masked_phone">Contact Person Email :</label>
                  <div class="col-md-4">
                 <input type="text" id="CPersonEmail"  name="CPersonEmail[]" maxlength="50"> <a href="#" class="add_field_button glyphicon glyphicon-plus"></a>
                 </div><!--<button class="add_field_button">Add More Fields</button>-->
            </div><?php */?>
            
            				<div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Contact Person Name :</label>
                                <div class="col-md-4">
                                	<input type="text" id="CPersonName" name="CPersonName" maxlength="50" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['CPersonName'])));?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Contact Person Mobile :</label>
                                <div class="col-md-4">
                                	<input type="text" id="CPersonMobile" name="CPersonMobile" maxlength="10" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['CPersonMobile'])));?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Contact Person Email :</label>
                                <div class="col-md-4">
                                	<input type="text" id="CPersonEmail" name="CPersonEmail" maxlength="50" value="<?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['CPersonEmail'])));?>" class="form-control"><a href="#" class="add_field_button glyphicon glyphicon-plus"></a>
                <!--<button class="add_field_button">Add More Fields</button>-->
                 				</div>
                             </div>
                      </div>
            </div>
     
                                          <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Description :</label>
                                <div class="col-md-4">
                                	<textarea name="Description" id="Description" class="form-control"><?=htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrData[0]['Description'])));?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Region :</label>
                                <div class="col-md-4">
                                	<select class="form-control" name="Region" id="Region">
                                        <option value="">Select</option>
                                        <?php
                                            $objRegion=new GenericClass("tbl_region");
                                            $arrRegion=$objRegion->getDatalimited("Id,Title"," ",false);
                                            foreach($arrRegion as $Region)
                                            {
                                                ?>
                                                    <option value="<?=$Region['Id']?>"<?php if($arrData[0]['Region']==$Region['Id']){echo "selected"; }?>><?=$Region['Title']?></option>
                                                <?php	
                                            }
                                        ?>
                                    </select>
                        	</div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Source :</label>
                                <div class="col-md-4">
                                	<select class="form-control" name="Source" id="Source">
                                        <option value="">Select</option>
                                        <?php
                                            $objSource=new GenericClass("tbl_source");
                                            $arrSource=$objSource->getDatalimited("Id,Title"," ",false);
                                            foreach($arrSource as $Source)
                                            {
                                                ?>
                                                    <option value="<?=$Source['Id']?>"<?php if($arrData[0]['Source']==$Source['Id']){echo "selected"; }?>><?=$Source['Title']?></option>
                                                <?php	
                                            }
                                        ?>
                                    </select>
                        	</div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Priority :</label>
                                <div class="col-md-4">
                                	<select class="form-control" name="Priority" id="Priority">
                                        <option value="">Select</option>
                                        <option value="High"<?php if($arrData[0]['Priority']=='High'){echo "selected"; }?>>High</option>
                                        <option value="Medium"<?php if($arrData[0]['Priority']=='Medium'){echo "selected"; }?>>Medium</option>
                                        <option value="Low"<?php if($arrData[0]['Priority']=='Low'){echo "selected"; }?>>Low</option>
                                         <option value="At PO Level"<?php if($arrData[0]['Priority']=='At PO Level'){echo "selected"; }?>>At PO Level</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Enquiry Status :</label>
                                <div class="col-md-4">
                                	<select class="form-control" name="Status" id="Status">
                                        <option value="">Select</option>
                                        <?php
                                            $objStatus=new GenericClass("tbl_site_codes");
                                            $arrStatus=$objStatus->getDatalimited("Id,Value"," where Category = 'Enquiry Status' order by Value asc ",false);
                                            foreach($arrStatus as $Status)
                                            {
                                                ?>
                                                    <option value="<?=$Status['Id']?>"<?php if($arrData[0]['Status']==$Status['Id']){echo "selected"; }?>><?=$Status['Value']?></option>
                                                <?php	
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <?php
							if($_SESSION['objLogin']->AccessLevel=="Admin"){ ?>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Assigned To :</label>
                                <div class="col-md-4">
                                	<select class="form-control" name="AssignedTo" id="AssignedTo">
                                        <option value="">Select</option>
                                        <?php
                                            $objAssignTo=new GenericClass("tbl_manager");
                                            $arrAssignTo=$objAssignTo->getDatalimited("Id,Name"," where DisplayStatus = 'Active' ",false);
                                            foreach($arrAssignTo as $AssignTo)
                                            {
                                                ?>
                                                    <option value="<?=$AssignTo['Id']?>"<?php if($arrData[0]['AssignedTo']==$AssignTo['Id']){echo "selected"; }?>><?=$AssignTo['Name']?></option>
                                                <?php	
                                            }
                                        ?>
                                    </select>
                        	</div>
                            </div>
                            <?php } ?>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="masked_phone">Enquiry Date :</label>
                                <div class="col-md-4">
                                	<div class="col-md-8">
                            			<div class="input-group date input-datepicker" data-date="<?=date('d/m/Y');?>" data-date-format="yyyy-mm-dd">
                                			<span class="input-group-addon"><i class="icon-calendar icon-fixed-width"></i></span>
                                			<input type="text" id="RegTime" name="RegTime" value="<?php if($arrData[0]['RegTime']!=''){ echo date('d-m-Y',strtotime($arrData[0]['RegTime']));}?>" class="form-control" readonly>
                            			</div>
                            		</div>
                                </div>
                                <input type="hidden" name="TodaysDate" id="TodaysDate" value="<?=date('Y-m-d');?>">
                            </div>
                            <div class="form-group form-actions">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="submit" class="btn btn-success" title="Save All Data" data-toggle="tooltip" <?php if(isset($_POST['id'])){ ?> onClick="removeValidationRemote('CPersonEmail');"  <?php } ?>><i class="icon-save"></i> Submit</button>
                                    <?php if ($_POST['id']=="") { ?>
                                    <button type="reset" class="btn btn-danger" title="Reset All Fields" data-toggle="tooltip"><i class="icon-repeat"></i> Reset</button>
                                    <?php } ?>
                                    <button type="button" class="btn btn-danger" onClick="document.location='./manage-enquiry.php?I=4'" title="Go back to Manage Enquiry" data-toggle="tooltip"><i class="icon-remove"></i> Go back to Manage Enquiry</button>
                                </div>
                            </div>
                            <!-- END Input Sizes -->
						</div>
                    </form>
                    <!-- END Text Inputs -->
				</div>
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
        
        <!-- END User Modal Settings -->

        <!-- Excanvas for canvas support on IE8 -->
        <!--[if lte IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

        <!-- Get Jquery library from Google but if something goes wrong get Jquery from local file - Remove 'http:' if you have SSL -->
        
        <?php include("./includes/userProfile.php"); ?>
        <!-- Javascript code only for this page -->
        
        
    


  
    </body>
	
        
    	
		<!--/*<script language="javascript" src="./js/common.js"></script>
        <script language="javascript" src="./js/javascriptcheck.js"></script>
        <script type="text/javascript" src="./js/EmployeeValidation.js"></script>
        <script type="text/javascript" src="./js/CheckEmployeeEmail.js"></script>*/-->
</html>