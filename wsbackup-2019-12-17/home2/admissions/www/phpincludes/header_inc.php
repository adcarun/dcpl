<?php ini_set('error_reporting', 0); ?>
<?php
	include("./phpincludes/session.php");
	include("./phpincludes/connection.php");
	include("./phpincludes/commonfunctions.php");
	include("./phpincludes/GenericClass.php");
	include("./phpincludes/sitePaths.php");
    include("./fckeditor/fckeditor.php");
	include("./phpincludes/class.phpmailer.php");

	$objReminder=new GenericClass("tbl_reminders");
	if($_SESSION['objLogin']->AccessLevel=="Admin"){
		$arrReminder=$objReminder->getDatalimited("count(*) as TotalRec"," where ReminderDate = '".date('Y-m-d')."' ",false);
	}else if($_SESSION['objLogin']->Id!=""){
		$arrReminder=$objReminder->getDatalimited("count(*) as TotalRec"," where ReminderDate = '".date('Y-m-d')."' and UserId = ".$_SESSION['objLogin']->Id,false);
	}
	
	$objFollowUp=new GenericClass("tbl_follow_up");
	if($_SESSION['objLogin']->AccessLevel=="Admin"){
		$arrFollowUp=$objFollowUp->getDatalimited("count(*) as TotalRec"," where NextUpdateDate = '".date('Y-m-d')."'" ,false);
	}else if($_SESSION['objLogin']->Id!=""){
		$arrFollowUp=$objFollowUp->getDatalimited("count(*) as TotalRec"," where NextUpdateDate = '".date('Y-m-d')."' and UserId = ".$_SESSION['objLogin']->Id,false);
	}	
?>