#!/usr/bin/php
<?php
	/*echo getcwd();
	exit();*/
	include("/homeb/home/enquiry/www/send-reminder/phpincludes/header_inc.php");
	
	$obj=new GenericClass("tbl_follow_up");
	$objEnq=new GenericClass("enquiry_details");
	$arrData=$obj->getDatalimited("*"," where NextUpdateDate = '".date('Y-m-d')."'",false);
	//$arrData=$obj->getDatalimited("*"," where NextUpdateDate = '2016-05-17'",false);
	if(count($arrData)>0)
	{
		$i=1;
		include("/homeb/home/enquiry/www/send-reminder/class.phpmailer.php");
		$mail = new PHPMailer1();
		foreach($arrData as $Data)
		{ 
			$arrEnq=$objEnq->getDatalimited("*"," where EnqId = ".$Data['EnqId'],false);
			
			$fp=fopen("/homeb/home/enquiry/www/send-reminder/mailer/follow-up-mailer.html","r");
			$message= fread($fp,filesize("/homeb/home/enquiry/www/send-reminder/mailer/follow-up-mailer.html"));
			$message=str_replace('$ProName', $arrEnq[0]['ProName'],$message);
			$message=str_replace('$CName', $arrEnq[0]['CName'],$message);
			$message=str_replace('$CAddress', $arrEnq[0]['CAddress'],$message);
			$message=str_replace('$CPhoneNo', $arrEnq[0]['CPhoneNo'],$message);
			$message=str_replace('$CPersonName', $arrEnq[0]['CPersonName'],$message);
			$message=str_replace('$CPersonMobile', $arrEnq[0]['CPersonMobile'],$message);
			$message=str_replace('$CPersonEmail', $arrEnq[0]['CPersonEmail'],$message);
			$message=str_replace('$Description', $arrEnq[0]['Description'],$message);
			$message=str_replace('$RegionName', $arrEnq[0]['RegionName'],$message);
			$message=str_replace('$SourceName', $arrEnq[0]['SourceName'],$message);
			$message=str_replace('$Priority', $arrEnq[0]['Priority'],$message);
			$message=str_replace('$EnqStatus', $arrEnq[0]['EnqStatus'],$message);
			$message=str_replace('$TodaysFollowUp', $Data['TodaysUpdate'],$message);
			
			//echo $message; exit();
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
			$mail->Subject    = "Messung : Today's Follow Up";
			$mail->MsgHTML($body);
			$mail->AddAddress($arrEnq[0]['AssignedToEmail']); 
			$mail->AddCC("sujata.rajkarne@messung.com"); 
			$mail->AddCC("jagadish.patil@messung.com"); 
			
			if(!$mail->Send()) 
			{	
			  //echo "Mailer Error: " . $mail->ErrorInfo; //exit;
			} 
			else 
			{
				//echo "Message sent!"; //exit;
			}
			
			$mail->ClearAddresses();
		}
		//echo "in if";
	}
	else
	{
		
	}
	exit();
?>