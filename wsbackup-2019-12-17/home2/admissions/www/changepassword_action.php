<?php session_start();
	include_once("./phpincludes/header_inc.php");
	
	$OldPass = $_GET['OldPass'];
	$NewPass = $_GET['NewPass'];
	$NewPassConfirm = $_GET['NewPassConfirm'];
	
	
	
	$sql = "select Password from tbl_manager where Email='".$_SESSION['objLogin']->Email."'"; 
	$res = mysql_query($sql);
	$rn = mysql_fetch_object($res);
	$OldPassword = $rn->Password; 


	if($OldPass!=$OldPassword)
	{ 
		?>
        	<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Error!</strong>Incorrect Current Password!
            </div>
        <?php	
	}
	else if(trim($NewPass)==trim($NewPassConfirm))
	{
		//echo "UPDATE tbl_manager SET Password='".htmlspecialchars(addslashes($NewPass))."',PassUpdateDate = '".date('Y-m-d')."' WHERE Name='".$_SESSION['objLogin']->Name."' ";
		//exit();
		mysql_query("UPDATE tbl_manager SET Password='".htmlspecialchars(addslashes($NewPass))."',PassUpdateDate = '".date('Y-m-d')."' WHERE Name='".$_SESSION['objLogin']->Name."' ");
		?>
        	<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> Password changed!
            </div>
        <?php
	}
	else
	{
		?>
        	<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Error!</strong>New Password and Confirm password should be same!
            </div>
        <?php
	}	
?>