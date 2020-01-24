<?php
	include("./phpincludes/header_inc.php");
	
	$qry=mysql_query("select count(*) from tbl_reminders where EnquiryId=".$_POST['EnquiryId']." and ReminderDate='".$_POST['ReminderDate']."' and ReminderTime='".$_POST['ReminderTime']."'");
	$row=mysql_fetch_row($qry);
	//print_r($row);
	//exit();
	if($row[0] > 0){
		$_SESSION['Error']="Reminder Already Set For Same time & Date for Same Enquiry.";
	}else{
	foreach($_POST as $key => $value)
		$_POST[$key] = htmlspecialchars(addslashes(trim($value)));
	$_POST['RegTime']=date("Y-m-d H:i:s");
	$_POST['UserId'] = $_SESSION['objLogin']->Id;
	$obj=new GenericClass("tbl_reminders");
	$obj->populateColumns($_POST);
	if($_POST['ReminderDate']!= "")
	{
		if($_POST['Id'] == "")
		{
			$obj->insert();
			$_SESSION['Sucess']="Reminder added successfully.";
		}
		else
		{
			$obj->update();
			$_SESSION['Sucess']="Reminder updated successfully.";
		}
	}
   }	
?>
<html>
    <body>
    <form name="frm" method="post" action="./manage-reminder.php?I=2">
    <?php putContext(); ?>
    </form>
    <script language="javascript">document.frm.submit();</script>
</body>
</html>