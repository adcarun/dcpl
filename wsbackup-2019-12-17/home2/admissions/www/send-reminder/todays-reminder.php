#!/usr/bin/php
<?php
	
	include("/homeb/home/enquiry/www/send-reminder/phpincludes/header_inc.php");
	
	$obj=new GenericClass("tbl_reminders");
	$objUser=new GenericClass("tbl_manager");
	$arrData=$obj->getDatalimited("*"," where ReminderDate = '".date('Y-m-d')."'",false);
	//$arrData=$obj->getDatalimited("*"," where ReminderDate = '2016-05-12'",false);
	if(count($arrData)>0)
	{
		include("/homeb/home/enquiry/www/send-reminder/class.phpmailer.php");
		$mail = new PHPMailer1();
			
		foreach($arrData as $Data)
		{
			$arrUser=$objUser->getDatalimited("Email"," where Id = ".$Data['UserId'],false);
			
			$fp=fopen("/homeb/home/enquiry/www/send-reminder/mailer/reminder-mailer.html","r");
			$message= fread($fp,filesize("/homeb/home/enquiry/www/send-reminder/mailer/reminder-mailer.html"));
			$message=str_replace('$Title', $Data['Title'],$message);
			$message=str_replace('$Description', $Data['Description'],$message);
			
			//echo $message; echo "<br>";
			
			
			$body = $message;
			$mail->IsSMTP(); // telling the class to use SMTP
			$mail->Host       = "smtp.gmail.com"; // SMTP server
			$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
													   // 1 = errors and messages
													  // 2 = messages only
			$mail->SMTPAuth   = true;                  // enable SMTP authentication
			$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
			$mail->Host       = "smtp.gmail.com";      // sets  as the SMTP server
			$mail->Port       = 465;                   // set the SMTP port for the server
			$mail->Username   = "inquiry@messungglobalconnect.com";  // username
			$mail->Password   = "Nq1r@Y4#3mg";            // password
			
			//$mail->SetFrom($rs['Email'], $FullName);
			$mail->SetFrom('inquiry@messungglobalconnect.com', 'Messung');
			$mail->Subject    = "Messung : Today's Reminder";
			$mail->MsgHTML($body);
			$mail->AddAddress($arrUser[0]['Email']); 
			$mail->AddCC("sujata.rajkarne@messung.com"); 
			$mail->AddCC("jagadish.patil@messung.com");
			
			if(!$mail->Send()) 
			{
			  //echo "Mailer Error: " . $mail->ErrorInfo; exit;
			} 
			else 
			{
			 //echo "Message sent!"; exit;
			}
			$mail->ClearAddresses();
		}
		//echo "in if";
	}
	else
	{
		
	}
?>