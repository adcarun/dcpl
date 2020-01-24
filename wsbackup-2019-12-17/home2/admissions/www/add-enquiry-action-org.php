<?php
	include("./phpincludes/header_inc.php");
	
	
	
foreach($_POST as $key => $value)
		$_POST[$key] = htmlspecialchars(addslashes(trim($value)));
		
/*		echo "<pre>";
		print_r($_POST);
		exit();*/
	
	//$_POST['RegTime']=date("Y-m-d H:i:s");
	if($_SESSION['objLogin']->AccessLevel=="Admin")
		$_POST['AssignedTo'] = $_POST['AssignedTo'];
	else
		$_POST['AssignedTo'] = $_SESSION['objLogin']->Id;
	$obj=new GenericClass("tbl_enquiry");
	$obj->populateColumns($_POST);
	if($_POST['CId'] != "")
	{
		
		
		if($_POST['Id'] == "")
		{
			
			if($_POST['AssignedTo']!='')
			{
				$objProduct=new GenericClass("tbl_ongoing_projects");
				$ArrProducts=$objProduct->getDatalimited("Name"," where Id = ".$_POST['Product'],false);
				
				$objCompany=new GenericClass("tbl_company");
				$ArrCompany=$objCompany->getDatalimited("*"," where Id = ".$_POST['CId'],false);
				
				$objRegion=new GenericClass("tbl_region");
				$ArrRegion=$objRegion->getDatalimited("Title"," where Id = ".$_POST['Region'],false);
				
				$objSource=new GenericClass("tbl_source");
				$ArrSource=$objSource->getDatalimited("Title"," where Id = ".$_POST['Source'],false);
				
				$objStatus=new GenericClass("tbl_site_codes");
                $arrStatus=$objStatus->getDatalimited("Value"," where Id = ".$_POST['Status'],false);
				
				$fp=fopen("./mailer/EnqAssignMailer.html","r");
				$message= fread($fp,filesize("./mailer/EnqAssignMailer.html"));
				$message=str_replace('$Product', $ArrProducts[0]['Name'],$message);
				$message=str_replace('$CompanyName', $ArrCompany[0]['CName'],$message);
				$message=str_replace('$CDivision', $ArrCompany[0]['CDivision'],$message);
				$message=str_replace('$CompanyAddress', $ArrCompany[0]['CAddress'],$message);
				$message=str_replace('$CompanyPhone', $ArrCompany[0]['CPhoneNo'],$message);
				
				$message=str_replace('$CPersonName', $_POST['CPersonName'],$message);
				$message=str_replace('$CPersonMobile', $_POST['CPersonMobile'],$message);
				$message=str_replace('$CPersonEmail', $_POST['CPersonEmail'],$message);
				/*$message=str_replace('$CPersonName2', $_POST['CPersonName2'],$message);
				$message=str_replace('$CPersonMobile2', $_POST['CPersonMobile2'],$message);
				$message=str_replace('$CPersonEmail2', $_POST['CPersonEmail2'],$message);*/
				$message=str_replace('$Description', $_POST['Description'],$message);
				
				$message=str_replace('$Region', $ArrRegion[0]['Title'],$message);
				$message=str_replace('$Source', $ArrSource[0]['Title'],$message);
				$message=str_replace('$Priority', $_POST['Priority'],$message);
				$message=str_replace('$Status', $arrStatus[0]['Value'],$message);
				
				//echo $message; exit();
		
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
				$mail->Username   = "inquiry@messungglobalconnect.com";  // username
				$mail->Password   = "messung#123";            // password
				
				//$mail->SetFrom($rs['Email'], $FullName);
				$mail->SetFrom('inquiry@messungglobalconnect.com', 'Messung');
				$mail->Subject    = "Messung : New enquiry has been assigned";
				$mail->MsgHTML($body);
				
				$objAssignTo=new GenericClass("tbl_manager");
				$arrAssignTo=$objAssignTo->getDatalimited("Email"," where Id = ".$_POST['AssignedTo'],false);
				$mail->AddAddress($arrAssignTo[0]['Email']); 
				$mail->AddCC("sujata.rajkarne@messung.com"); 
			    $mail->AddCC("jagadish.patil@messung.com");
				
				if(!$mail->Send()) 
				{
				 // echo "Mailer Error: " . $mail->ErrorInfo; exit;
				} 
				else 
				{
				// echo "Message sent!"; exit;
				}
				
			}
			$obj->insert();
			$_SESSION['Sucess']="Enquiry added successfully.";
		}
		else
		{
			if($_SESSION['objLogin']->AccessLevel=="Admin"){
			$UpdateSql = "update tbl_enquiry set Product = '".htmlspecialchars(addslashes(trim($_POST['Product'])))."', CId = '".htmlspecialchars(addslashes(trim($_POST['CId'])))."', CDivision = '".htmlspecialchars(addslashes(trim($_POST['CDivision'])))."', CPersonName = '".htmlspecialchars(addslashes(trim($_POST['CPersonName'])))."', CPersonMobile = '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile'])))."', CPersonEmail = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail'])))."', CPersonName2 = '".htmlspecialchars(addslashes(trim($_POST['CPersonName2'])))."', CPersonMobile2 = '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile2'])))."', CPersonEmail2 = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail2'])))."', CPersonName3 = '".htmlspecialchars(addslashes(trim($_POST['CPersonName3'])))."', CPersonMobile3 = '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile3'])))."', CPersonEmail3 = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail3'])))."', CPersonName4 = '".htmlspecialchars(addslashes(trim($_POST['CPersonName4'])))."', CPersonMobile4 = '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile4'])))."', CPersonEmail4 = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail4'])))."', CPersonName5 = '".htmlspecialchars(addslashes(trim($_POST['CPersonName5'])))."', CPersonMobile5 = '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile5'])))."', CPersonEmail5 = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail5'])))."', CPersonName6 = '".htmlspecialchars(addslashes(trim($_POST['CPersonName6'])))."', CPersonMobile6 = '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile6'])))."', CPersonEmail6 = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail6'])))."', CPersonName7 = '".htmlspecialchars(addslashes(trim($_POST['CPersonName7'])))."', CPersonMobile7 = '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile7'])))."', CPersonEmail7 = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail7'])))."', CPersonName8 = '".htmlspecialchars(addslashes(trim($_POST['CPersonName8'])))."', CPersonMobile8 = '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile8'])))."', CPersonEmail8 = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail8'])))."', CPersonName9 = '".htmlspecialchars(addslashes(trim($_POST['CPersonName9'])))."', CPersonMobile9 = '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile9'])))."', CPersonEmail9 = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail9'])))."', CPersonName10 = '".htmlspecialchars(addslashes(trim($_POST['CPersonName10'])))."', CPersonMobile10 = '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile10'])))."', CPersonEmail10 = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail10'])))."', Description = '".htmlspecialchars(addslashes(trim($_POST['Description'])))."', Region = '".htmlspecialchars(addslashes(trim($_POST['Region'])))."', Source = '".htmlspecialchars(addslashes(trim($_POST['Source'])))."', Priority = '".htmlspecialchars(addslashes(trim($_POST['Priority'])))."', Status = '".htmlspecialchars(addslashes(trim($_POST['Status'])))."', AssignedTo = '".htmlspecialchars(addslashes(trim($_POST['AssignedTo'])))."',RegTime = '".$_POST['RegTime'].date(' h:i:s')."' where Id = ".$_POST['Id']; 
			}
			else
			{
				$UpdateSql = "update tbl_enquiry set Product = '".htmlspecialchars(addslashes(trim($_POST['Product'])))."', CId = '".htmlspecialchars(addslashes(trim($_POST['CId'])))."', CDivision = '".htmlspecialchars(addslashes(trim($_POST['CDivision'])))."', CPersonName = '".htmlspecialchars(addslashes(trim($_POST['CPersonName'])))."', CPersonMobile = '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile'])))."', CPersonEmail = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail'])))."', CPersonName2 = '".htmlspecialchars(addslashes(trim($_POST['CPersonName2'])))."', CPersonMobile2= '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile2'])))."', CPersonEmail2 = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail2'])))."', CPersonName3 = '".htmlspecialchars(addslashes(trim($_POST['CPersonName3'])))."', CPersonMobile3 = '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile3'])))."', CPersonEmail3 = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail3'])))."', CPersonName4 = '".htmlspecialchars(addslashes(trim($_POST['CPersonName4'])))."', CPersonMobile4 = '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile4'])))."', CPersonEmail4 = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail4'])))."', CPersonName5 = '".htmlspecialchars(addslashes(trim($_POST['CPersonName5'])))."', CPersonMobile5 = '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile5'])))."', CPersonEmail5 = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail5'])))."', CPersonName6 = '".htmlspecialchars(addslashes(trim($_POST['CPersonName6'])))."', CPersonMobile6 = '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile6'])))."', CPersonEmail6 = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail6'])))."', CPersonName7 = '".htmlspecialchars(addslashes(trim($_POST['CPersonName7'])))."', CPersonMobile7 = '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile7'])))."', CPersonEmail7 = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail7'])))."', CPersonName8 = '".htmlspecialchars(addslashes(trim($_POST['CPersonName8'])))."', CPersonMobile8 = '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile8'])))."', CPersonEmail8 = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail8'])))."', CPersonName9 = '".htmlspecialchars(addslashes(trim($_POST['CPersonName9'])))."', CPersonMobile9 = '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile9'])))."', CPersonEmail9 = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail9'])))."', CPersonName10 = '".htmlspecialchars(addslashes(trim($_POST['CPersonName10'])))."', CPersonMobile10 = '".htmlspecialchars(addslashes(trim($_POST['CPersonMobile10'])))."', CPersonEmail10 = '".htmlspecialchars(addslashes(trim($_POST['CPersonEmail10'])))."', Description = '".htmlspecialchars(addslashes(trim($_POST['Description'])))."', Region = '".htmlspecialchars(addslashes(trim($_POST['Region'])))."', Source = '".htmlspecialchars(addslashes(trim($_POST['Source'])))."', Priority = '".htmlspecialchars(addslashes(trim($_POST['Priority'])))."', Status = '".htmlspecialchars(addslashes(trim($_POST['Status'])))."',RegTime = '".$_POST['RegTime'].date(' h:i:s')."' where Id = ".$_POST['Id']; 	
			}
			/*echo "$UpdateSql";
			exit;*/
			$rs = mysql_query($UpdateSql);
			
			
			
			if(mysql_affected_rows()>0)
			{ 
				mysql_query("update tbl_enquiry set UpdateTime = '".date('Y-m-d H:i:s')."' where Id = ".$_POST['Id']);
				if($_POST['AssignedTo']!='')
				{
					$objProduct=new GenericClass("tbl_ongoing_projects");
					$ArrProducts=$objProduct->getDatalimited("Name"," where Id = ".$_POST['Product'],false);
					
					$objCompany=new GenericClass("tbl_company");
					$ArrCompany=$objCompany->getDatalimited("*"," where Id = ".$_POST['CId'],false);
					
					$objRegion=new GenericClass("tbl_region");
					$ArrRegion=$objRegion->getDatalimited("Title"," where Id = ".$_POST['Region'],false);
					
					$objSource=new GenericClass("tbl_source");
					$ArrSource=$objSource->getDatalimited("Title"," where Id = ".$_POST['Source'],false);
					
					$objStatus=new GenericClass("tbl_site_codes");
					$arrStatus=$objStatus->getDatalimited("Value"," where Id = ".$_POST['Status'],false);
					
					$fp=fopen("./mailer/EnqAssignMailer.html","r");
					$message= fread($fp,filesize("./mailer/EnqAssignMailer.html"));
					$message=str_replace('$Product', $ArrProducts[0]['Name'],$message);
					$message=str_replace('$CompanyName', $ArrCompany[0]['CName'],$message);
					$message=str_replace('$CDivision', $ArrCompany[0]['CDivision'],$message);
					$message=str_replace('$CompanyAddress', $ArrCompany[0]['CAddress'],$message);
					$message=str_replace('$CompanyPhone', $ArrCompany[0]['CPhoneNo'],$message);
					
					$message=str_replace('$CPersonName', $_POST['CPersonName'],$message);
					$message=str_replace('$CPersonMobile', $_POST['CPersonMobile'],$message);
					$message=str_replace('$CPersonEmail', $_POST['CPersonEmail'],$message);
					/*$message=str_replace('$CPersonName2', $_POST['CPersonName2'],$message);
					$message=str_replace('$CPersonMobile2', $_POST['CPersonMobile2'],$message);
					$message=str_replace('$CPersonEmail2', $_POST['CPersonEmail2'],$message);*/
					$message=str_replace('$Description', $_POST['Description'],$message);
					
					$message=str_replace('$Region', $ArrRegion[0]['Title'],$message);
					$message=str_replace('$Source', $ArrSource[0]['Title'],$message);
					$message=str_replace('$Priority', $_POST['Priority'],$message);
					$message=str_replace('$Status', $arrStatus[0]['Value'],$message);
					
					//echo $message; exit();
					
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
					$mail->Username   = "inquiry@messungglobalconnect.com";  // username
					$mail->Password   = "messung#123";            // password
					
					//$mail->SetFrom($rs['Email'], $FullName);
					$mail->SetFrom('inquiry@messungglobalconnect.com', 'Messung');
					$mail->Subject    = "Messung : New enquiry has been assigned";
					$mail->MsgHTML($body);
					
					$objAssignTo=new GenericClass("tbl_manager");
					$arrAssignTo=$objAssignTo->getDatalimited("Email"," where Id = ".$_POST['AssignedTo'],false);
					$mail->AddAddress($arrAssignTo[0]['Email']); 
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
				}
				$_SESSION['Sucess']="Enquiry updated successfully.";
			}
			
		}
	}
?>
<html>
    <body>
    <form name="frm" method="post" action="./manage-enquiry.php?I=4">
    <?php putContext(); ?>
    </form>
    <script language="javascript">document.frm.submit();</script>
</body>
</html>