<?php
	//echo "gkjbkg";
	include("./phpincludes/header_inc.php");
	require_once("./phpincludes/commonfunctions.php");
	//require_once("./phpincludes/class.phpmailer.php");
	$LoginId=$_SESSION['objLogin']->Id;
	
	$ids=$_POST['Id'];
	$Mailer=$_POST['Mailer'];
	$assignTo=$_POST['AssignedTo'];
	
	$objEmailStatus=new GenericClass("tbl_email_notification_status");
	$ArrEmailStatus=$objEmailStatus->getDatalimited("Status"," where Id != '' ",false);
	
	//$_POST['SessionDate']=date("Y-m-d", strtotime($_POST['SessionDate']));
	//$SessionTimeSlot=$_POST['SessionTimeFrom']." To ".$_POST['SessionTimeTo'];
	
	//$DateTime = date("Y-m-d H:i:s");
	//print_r($ids);
	//exit();
	$idVal=explode(",",$ids);
	//print_r($idVal);
	//echo count($idVal);
	//exit();
	for($i=0;$i<count($idVal);$i++){
	
		
		if($ArrEmailStatus[0]['Status'] == 'On'){
				//print_r($_POST);
				
				$objEnquiry=new GenericClass("tbl_enquiry");
				$ArrEnquiry=$objEnquiry->getDatalimited("* "," where Id = ".$idVal[$i],false);
				//print_r($ArrEnquiry);
				//exit();
				//$objCourse=new GenericClass("tbl_ongoing_projects");
				//$ArrCourses=$objCourse->getDatalimited("Name"," where Id = ".$ArrEnquiry[0]['Course'],false);
				//exit();
				//$objCompany=new GenericClass("tbl_company");
				//$ArrCompany=$objCompany->getDatalimited("*"," where Id = ".$_POST['CId'],false);
				
				//$objRegion=new GenericClass("tbl_region");
				//$ArrRegion=$objRegion->getDatalimited("Title"," where Id = ".$_POST['Region'],false);
				
				//$objSource=new GenericClass("tbl_source");
			//	$ArrSource=$objSource->getDatalimited("Title"," where Id = ".$ArrEnquiry[0]['Source'],false);
				
				//$objStatus=new GenericClass("tbl_site_codes");
                //$arrStatus=$objStatus->getDatalimited("Value"," where Id = ".$ArrEnquiry[0]['Status'],false);
				
				//$objType=new GenericClass("tbl_site_codes");
                //$arrType=$objType->getDatalimited("Value"," where Id = ".$ArrEnquiry[0]['Type'],false);
				
				$fp=fopen("./mailer/EnqAssignMailer1.html","r");
				$message= fread($fp,filesize("./mailer/EnqAssignMailer1.html"));
				//$message=str_replace('$Source', $ArrSource[0]['Title'],$message);
				//$message=str_replace('$ReferredBy', $ArrEnquiry[0]['ReferredBy'],$message);
				//$message=str_replace('$Course', $ArrCourses[0]['Name'],$message);
				$message=str_replace('$EnquiryDate', $ArrEnquiry[0]['RegTime'],$message);
				
				$message=str_replace('$Name', $ArrEnquiry[0]['Name'],$message);
				//$message=str_replace('$Occupation', $ArrEnquiry[0]['Occupation'],$message);
				//$message=str_replace('$City', $ArrEnquiry[0]'City'],$message);
				//$message=str_replace('$Phone', $ArrEnquiry[0]['Phone'],$message);
				//$message=str_replace('$Whatsapp', $ArrEnquiry[0]['Whatsapp'],$message);
				//$message=str_replace('$Email', $ArrEnquiry[0]['Email'],$message);
				//$message=str_replace('$Qualification', $ArrEnquiry[0]['Qualification'],$message);
				//$message=str_replace('$PassingYear', $ArrEnquiry[0]['PassingYear'],$message);
				//$message=str_replace('$Experience', $ArrEnquiry[0]['Experience'],$message);
				//$message=str_replace('$Position', $ArrEnquiry[0]['Position'],$message);
				//$message=str_replace('$Companyname', $ArrEnquiry[0]['Companyname'],$message);
				//$message=str_replace('$Visitdate', $ArrEnquiry[0]['Visitdate'],$message);
				//$message=str_replace('$Reason', $ArrEnquiry[0]['Reason'],$message);
				//$message=str_replace('$CouselorsComments', $ArrEnquiry[0]['CouselorsComments'],$message);
				//$message=str_replace('$Furtheraction', $ArrEnquiry[0]['Furtheraction'],$message);
				//$message=str_replace('$Type', $arrType[0]['Value'],$message);
				//$message=str_replace('$Priority', $ArrEnquiry[0]['Priority'],$message);
				//$message=str_replace('$Status', $arrStatus[0]['Value'],$message);
				
			//	echo $message; exit();
		
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
				
				//$mail->SetFrom($rs['Email'], $FullName);
				$mail->SetFrom('office@infinisolutions.in', 'Infini Solutions');
				$mail->Subject    = "Infini Solutions : New enquiry has been assigned";
				$mail->MsgHTML($body);
				
				$objAssignTo=new GenericClass("tbl_manager");
				$arrAssignTo=$objAssignTo->getDatalimited("Email"," where Id = ".$assignTo,false);
				$mail->AddAddress($arrAssignTo[0]['Email']); 
				//$mail->AddCC("sujata.rajkarne@messung.com"); 
			    //$mail->AddCC("jagadish.patil@messung.com");
				
				if(!$mail->Send()) 
				{
				 // echo "Mailer Error: " . $mail->ErrorInfo; exit;
				} 
				else 
				{
				// echo "Message sent!"; exit;
				}
			 }
			
			mysql_query("update tbl_enquiry set UpdateTime = '".date('Y-m-d H:i:s')."', AssignedTo=".$assignTo." where Id = ".$idVal[$i]);
		
				
	}
	//exit();
//header("location:./manage-applicants-session.php?A=3");
?>
<html>
    <body>
    <form name="frm" method="post" action="./manage-enquiry.php?I=4">
    <?php putContext(); ?>
    </form>
    <script language="javascript">document.frm.submit();</script>
</body>
</html>