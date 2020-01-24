<?php
	include("./phpincludes/header_inc.php");
	//print_r($_POST);
	//exit();
	foreach($_POST as $key => $value)
		$_POST[$key] = htmlspecialchars(addslashes(trim($value)));
	$_POST['RegTime']=date("Y-m-d H:i:s");
	$obj=new GenericClass("tbl_manager");
	$obj->populateColumns($_POST);
	if($_POST['Email'] != "")
	{
		if($_POST['Id'] == "")
		{
			//$obj->insert();
			$qry="insert into tbl_manager(Name,Email,ContactNumber,Password,AccessLevel,DisplayStatus,RegTime,Added_by) values('".$_POST['Name']."','".$_POST['Email']."','".$_POST['ContactNumber']."','".$_POST['Password']."','".$_POST['AccessLevel']."','".$_POST['DisplayStatus']."','".date("Y-m-d H:i:s")."','".$_SESSION['objLogin']->Id."')";
			$res=mysql_query($qry);
			
			$objEmailStatus=new GenericClass("tbl_email_notification_status");
			$ArrEmailStatus=$objEmailStatus->getDatalimited("Status"," where Id != '' ",false);
			
			$_SESSION['Sucess']="User added successfully.";
			if($ArrEmailStatus[0]['Status']=='On'){
			$fp=fopen("./mailer/UserRegistrationMailer.html","r");
			$message= fread($fp,filesize("./mailer/UserRegistrationMailer.html"));
			$message=str_replace('$Name', $_POST['Name'],$message);
			$message=str_replace('$Email', $_POST['Email'],$message);
			$message=str_replace('$MobileNumber', $_POST['ContactNumber'],$message);
			$message=str_replace('$Password', $_POST['Password'],$message);
			$message=str_replace('$AccessLevel', $_POST['AccessLevel'],$message);
			
			include("./class.phpmailer.php");
			$mail             = new PHPMailer1();
			$body             = $message;
			$mail->IsSMTP(); // telling the class to use SMTP
			$mail->Host       = "smtp.gmail.com"; // SMTP server
			$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
													   // 1 = errors and messages
													  // 2 = messages only
			$mail->SMTPAuth   = true;                  // enable SMTP authentication
			$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
			$mail->Host       = "smtp.gmail.com";      // sets  as the SMTP server
			$mail->Port       = 465;                   // set the SMTP port for the server
			$mail->Username   = "office@infinisolutions.in";  // username
			$mail->Password   = "officedr#123";            // password
			
			$mail->SetFrom('office@infinisolutions.in', 'Infini Solutions');
			$mail->Subject    = "Infini Solutions : New user registration details";
			$mail->MsgHTML($body);
			
			$mail->AddAddress($_POST['Email']); 
		//	$mail->AddCC("sujata.rajkarne@messung.com"); 
			//$mail->AddCC("jagadish.patil@messung.com");
			
			if(!$mail->Send()) 
			{
			  //echo "Mailer Error: " . $mail->ErrorInfo; exit;
			} 
			else 
			{
			 //echo "Message sent!"; exit;
			}
			}
		}
		else
		{
			//print_r($_POST);			
			//$obj->update();
			//exit();
			$sql="update tbl_manager set Email='".$_POST['Email']."', Name='".$_POST['Name']."', Password='".$_POST['Password']."', ContactNumber='".$_POST['ContactNumber']."', AccessLevel='".$_POST['AccessLevel']."', DisplayStatus='".$_POST['DisplayStatus']."', RegTime='".date("Y-m-d H:i:s")."' where Id=".$_POST['Id'];
			//exit();
			$res=mysql_query($sql);
			
			$_SESSION['Sucess']="User updated successfully.";
		}
	}
?>
<html>
    <body>
    <form name="frm" method="post" action="./manage-user.php?I=3">
    <?php putContext(); ?>
    </form>
    <script language="javascript">document.frm.submit();</script>
</body>
</html>