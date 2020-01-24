<?php
	include("./phpincludes/header_inc.php");
	
	include("./class.phpmailer.php");
				$mail             = new PHPMailer1();
	//print_r($_POST);
	//exit();
	if($_POST['Id'] == "")
		{	
	for($i=0;$i < count($_POST['Course']);$i++){
		//$_POST['Course']=$_POST['Course'][$i];	
	//foreach($_POST as $key => $value)
	//	$_POST[$key] = htmlspecialchars(addslashes(trim($value)));
		////echo "<pre>";
		//print_r($_SESSION['objLogin']->Id);	
	
	$obj=new GenericClass("tbl_enquiry");
	//$obj->populateColumns($_POST);
	
	//if($_POST['CId'] != "")
	//{
	$objEmailStatus=new GenericClass("tbl_email_notification_status");
	$ArrEmailStatus=$objEmailStatus->getDatalimited("Status"," where Id != '' ",false);
	

	$qrySelect="select count(*) from tbl_enquiry where Phone='".$_POST['Phone']."' AND Whatsapp='".$_POST['Whatsapp']."' AND Name='".$_POST['Name']."' AND Course='".$_POST['Course'][$i]."'";
	$res=mysql_query($qrySelect);
	$row=mysql_fetch_row($res);
	if($row[0] == 0){
		
			
			
			if($_POST['AssignedTo']!='')
			{
				if($ArrEmailStatus[0]['Status'] == 'On'){
				//print_r($_POST);
				//
				$objCourse=new GenericClass("tbl_ongoing_projects");
				$ArrCourses=$objCourse->getDatalimited("Name"," where Id = ".$_POST['Course'][$i],false);
				//exit();
				//$objCompany=new GenericClass("tbl_company");
				//$ArrCompany=$objCompany->getDatalimited("*"," where Id = ".$_POST['CId'],false);
				
				//$objRegion=new GenericClass("tbl_region");
				//$ArrRegion=$objRegion->getDatalimited("Title"," where Id = ".$_POST['Region'],false);
				
				$objSource=new GenericClass("tbl_source");
				$ArrSource=$objSource->getDatalimited("Title"," where Id = ".$_POST['Source'],false);
				
				$objStatus=new GenericClass("tbl_site_codes");
                $arrStatus=$objStatus->getDatalimited("Value"," where Id = ".$_POST['Status'],false);
				
				$objType=new GenericClass("tbl_site_codes");
                $arrType=$objType->getDatalimited("Value"," where Id = ".$_POST['Type'],false);
				
				$fp=fopen("./mailer/EnqAssignMailer.html","r");
				$message= fread($fp,filesize("./mailer/EnqAssignMailer.html"));
				$message=str_replace('$Source', $ArrSource[0]['Title'],$message);
				$message=str_replace('$ReferredBy', $_POST['ReferredBy'],$message);
				$message=str_replace('$Course', $ArrCourses[0]['Name'],$message);
				$message=str_replace('$EnquiryDate', $_POST['RegTime'],$message);
				
				$message=str_replace('$Name', $_POST['Name'],$message);
			//	$message=str_replace('$Occupation', $_POST['Occupation'],$message);
				$message=str_replace('$City', $_POST['City'],$message);
				$message=str_replace('$Phone', $_POST['Phone'],$message);
				$message=str_replace('$Whatsapp', $_POST['Whatsapp'],$message);
				$message=str_replace('$Email', $_POST['Email'],$message);
				//$message=str_replace('$Qualification', $_POST['Qualification'],$message);
				//$message=str_replace('$PassingYear', $_POST['PassingYear'],$message);
				//$message=str_replace('$Experience', $_POST['Experience'],$message);
				//$message=str_replace('$Position', $_POST['Position'],$message);
				//$message=str_replace('$Companyname', $_POST['Companyname'],$message);
				$message=str_replace('$Visitdate', $_POST['Visitdate'],$message);
				//$message=str_replace('$Reason', $_POST['Reason'],$message);
				$message=str_replace('$CouselorsComments', $_POST['CouselorsComments'],$message);
				//$message=str_replace('$Furtheraction', $_POST['Furtheraction'],$message);
				/*$message=str_replace('$CPersonName2', $_POST['CPersonName2'],$message);
				$message=str_replace('$CPersonMobile2', $_POST['CPersonMobile2'],$message);
				$message=str_replace('$CPersonEmail2', $_POST['CPersonEmail2'],$message);*/
				$message=str_replace('$Type', $arrType[0]['Value'],$message);
				
			//	$message=str_replace('$Region', $ArrRegion[0]['Title'],$message);				
				$message=str_replace('$Priority', $_POST['Priority'],$message);
				$message=str_replace('$Status', $arrStatus[0]['Value'],$message);
				
				//echo $message; exit();
		
				
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
				$arrAssignTo=$objAssignTo->getDatalimited("Email"," where Id = ".$_POST['AssignedTo'],false);
				$mail->AddAddress($arrAssignTo[0]['Email']); 
				//$mail->AddAddress("aneesh@dimakhconsultants.com"); 
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
				
			}
			
			$_POST['RegTime']=date('Y-m-d', strtotime($_POST['RegTime'])).date(' h:i:s');
			$_POST['Added_by']=$_SESSION['objLogin']->Id;
			//print_r($_POST);
			//	exit();
			if($_SESSION['objLogin']->AccessLevel=="Admin")
				$_POST['AssignedTo'] = $_POST['AssignedTo'];
			else
				$_POST['AssignedTo'] = $_POST['Added_by'];
				//$_POST['AssignedTo'] = $_POST['AssignedTo'];
			
			 $insertSql="insert into tbl_enquiry(Course,ReferredBy,Name,childname,Occupation,City,Phone,Whatsapp,Email,Qualification,PassingYear,Experience,Position,Companyname,Visitdate,Reason,CouselorsComments,LocationTraining,FeesDiscount,Mode,Furtheraction,Trainingperiod,PreferredSlot,Type,Source,OtherSource,Priority,Status,AssignedTo,RegTime,Added_by,EnqTime,Message,FeesPaid,FeesBalance) values('".htmlspecialchars(addslashes(trim($_POST['Course'][$i])))."','".htmlspecialchars(addslashes(trim($_POST['ReferredBy'])))."','".htmlspecialchars(addslashes(trim($_POST['Name'])))."','".htmlspecialchars(addslashes(trim($_POST['childname'])))."','".htmlspecialchars(addslashes(trim($_POST['Occupation'])))."','".htmlspecialchars(addslashes(trim($_POST['City'])))."','".htmlspecialchars(addslashes(trim($_POST['Phone'])))."','".htmlspecialchars(addslashes(trim($_POST['Whatsapp'])))."','".htmlspecialchars(addslashes(trim($_POST['Email'])))."','".htmlspecialchars(addslashes(trim($_POST['Qualification'])))."','".htmlspecialchars(addslashes(trim($_POST['PassingYear'])))."','".htmlspecialchars(addslashes(trim($_POST['Experience'])))."','".htmlspecialchars(addslashes(trim($_POST['Position'])))."','".htmlspecialchars(addslashes(trim($_POST['Companyname'])))."','".htmlspecialchars(addslashes(trim($_POST['Visitdate'])))."','".htmlspecialchars(addslashes(trim($_POST['Reason'])))."','".htmlspecialchars(addslashes(trim($_POST['CouselorsComments'])))."','".htmlspecialchars(addslashes(trim($_POST['LocationTraining'])))."','".htmlspecialchars(addslashes(trim($_POST['FeesDiscount'])))."','".htmlspecialchars(addslashes(trim($_POST['Mode'])))."','".htmlspecialchars(addslashes(trim($_POST['Furtheraction'])))."','".htmlspecialchars(addslashes(trim($_POST['Trainingperiod'])))."','".htmlspecialchars(addslashes(trim($_POST['PreferredSlot'])))."','".htmlspecialchars(addslashes(trim($_POST['Type'])))."','".htmlspecialchars(addslashes(trim($_POST['Source'])))."','".htmlspecialchars(addslashes(trim($_POST['OtherSource'])))."','".htmlspecialchars(addslashes(trim($_POST['Priority'])))."','".htmlspecialchars(addslashes(trim($_POST['Status'])))."','".htmlspecialchars(addslashes(trim($_POST['AssignedTo'])))."','".htmlspecialchars(addslashes(trim($_POST['RegTime'])))."','".htmlspecialchars(addslashes(trim($_POST['Added_by'])))."','".htmlspecialchars(addslashes(trim($_POST['EnqTime'])))."','".htmlspecialchars(addslashes(trim($_POST['Message'])))."','".htmlspecialchars(addslashes(trim($_POST['FeesPaid'])))."','".htmlspecialchars(addslashes(trim($_POST['FeesBalance'])))."')";
			//exit();
			$res = mysql_query($insertSql);
			//$lastId=$obj->insert();
			$lastId=mysql_insert_id();
			
			$_SESSION['Sucess']="Enquiry added successfully.";
			}else{
				$_SESSION['Error']="Enquiry Already Added.";
			}
			
		  }	
		}
		else
		{
			if($_SESSION['objLogin']->AccessLevel=="Admin"){
			$UpdateSql = "update tbl_enquiry set Course = '".htmlspecialchars(addslashes(trim($_POST['Course'])))."', ReferredBy = '".htmlspecialchars(addslashes(trim($_POST['ReferredBy'])))."', Name = '".htmlspecialchars(addslashes(trim($_POST['Name'])))."', childname = '".htmlspecialchars(addslashes(trim($_POST['childname'])))."', Occupation = '".htmlspecialchars(addslashes(trim($_POST['Occupation'])))."', City = '".htmlspecialchars(addslashes(trim($_POST['City'])))."', Phone = '".htmlspecialchars(addslashes(trim($_POST['Phone'])))."', Whatsapp = '".htmlspecialchars(addslashes(trim($_POST['Whatsapp'])))."', Email = '".htmlspecialchars(addslashes(trim($_POST['Email'])))."', Qualification = '".htmlspecialchars(addslashes(trim($_POST['Qualification'])))."', PassingYear = '".htmlspecialchars(addslashes(trim($_POST['PassingYear'])))."', Experience = '".htmlspecialchars(addslashes(trim($_POST['Experience'])))."', Position = '".htmlspecialchars(addslashes(trim($_POST['Position'])))."', Companyname = '".htmlspecialchars(addslashes(trim($_POST['Companyname'])))."', Visitdate = '".htmlspecialchars(addslashes(trim($_POST['Visitdate'])))."', Reason = '".htmlspecialchars(addslashes(trim($_POST['Reason'])))."', CouselorsComments = '".htmlspecialchars(addslashes(trim($_POST['CouselorsComments'])))."', Furtheraction = '".htmlspecialchars(addslashes(trim($_POST['Furtheraction'])))."', Type = '".htmlspecialchars(addslashes(trim($_POST['Type'])))."', Source = '".htmlspecialchars(addslashes(trim($_POST['Source'])))."', OtherSource = '".htmlspecialchars(addslashes(trim($_POST['OtherSource'])))."', Priority = '".htmlspecialchars(addslashes(trim($_POST['Priority'])))."', Status = '".htmlspecialchars(addslashes(trim($_POST['Status'])))."', AssignedTo = '".htmlspecialchars(addslashes(trim($_POST['AssignedTo'])))."',RegTime = '".date('Y-m-d', strtotime($_POST['RegTime'])).date(' h:i:s')."',Message = '".htmlspecialchars(addslashes(trim($_POST['Message'])))."',FeesPaid = '".htmlspecialchars(addslashes(trim($_POST['FeesPaid'])))."',FeesBalance = '".htmlspecialchars(addslashes(trim($_POST['FeesBalance'])))."',FeesDiscount = '".htmlspecialchars(addslashes(trim($_POST['FeesDiscount'])))."' where Id = ".$_POST['Id']; 
			}
			else
			{
				$UpdateSql = "update tbl_enquiry set Course = '".htmlspecialchars(addslashes(trim($_POST['Course'])))."', ReferredBy = '".htmlspecialchars(addslashes(trim($_POST['ReferredBy'])))."', Name = '".htmlspecialchars(addslashes(trim($_POST['Name'])))."', childname = '".htmlspecialchars(addslashes(trim($_POST['childname'])))."', Occupation = '".htmlspecialchars(addslashes(trim($_POST['Occupation'])))."', City = '".htmlspecialchars(addslashes(trim($_POST['City'])))."', Phone = '".htmlspecialchars(addslashes(trim($_POST['Phone'])))."', Whatsapp = '".htmlspecialchars(addslashes(trim($_POST['Whatsapp'])))."', Email = '".htmlspecialchars(addslashes(trim($_POST['Email'])))."', Qualification = '".htmlspecialchars(addslashes(trim($_POST['Qualification'])))."', PassingYear = '".htmlspecialchars(addslashes(trim($_POST['PassingYear'])))."', Experience = '".htmlspecialchars(addslashes(trim($_POST['Experience'])))."', Position = '".htmlspecialchars(addslashes(trim($_POST['Position'])))."', Companyname = '".htmlspecialchars(addslashes(trim($_POST['Companyname'])))."', Visitdate = '".htmlspecialchars(addslashes(trim($_POST['Visitdate'])))."', Reason = '".htmlspecialchars(addslashes(trim($_POST['Reason'])))."', CouselorsComments = '".htmlspecialchars(addslashes(trim($_POST['CouselorsComments'])))."', Furtheraction = '".htmlspecialchars(addslashes(trim($_POST['Furtheraction'])))."', Type = '".htmlspecialchars(addslashes(trim($_POST['Type'])))."', Source = '".htmlspecialchars(addslashes(trim($_POST['Source'])))."', OtherSource = '".htmlspecialchars(addslashes(trim($_POST['OtherSource'])))."', Priority = '".htmlspecialchars(addslashes(trim($_POST['Priority'])))."', Status = '".htmlspecialchars(addslashes(trim($_POST['Status'])))."', AssignedTo = '".htmlspecialchars(addslashes(trim($_POST['AssignedTo'])))."',RegTime = '".date('Y-m-d', strtotime($_POST['RegTime'])).date(' h:i:s')."',Message = '".htmlspecialchars(addslashes(trim($_POST['Message'])))."',FeesPaid = '".htmlspecialchars(addslashes(trim($_POST['FeesPaid'])))."',FeesBalance = '".htmlspecialchars(addslashes(trim($_POST['FeesBalance'])))."',FeesDiscount = '".htmlspecialchars(addslashes(trim($_POST['FeesDiscount'])))."' where Id = ".$_POST['Id'];
			}
			//echo "$UpdateSql";
		//	exit;
			$rs = mysql_query($UpdateSql);
			
			
			
			if(mysql_affected_rows()>0)
			{ 
				mysql_query("update tbl_enquiry set UpdateTime = '".date('Y-m-d H:i:s')."' where Id = ".$_POST['Id']);
				if($_POST['AssignedTo']!='')
				{
					if($ArrEmailStatus[0]['Status'] == 'On'){
					$objCourse=new GenericClass("tbl_ongoing_projects");
					$ArrCourses=$objCourse->getDatalimited("Name"," where Id = ".$_POST['Course'],false);
				
					//$objCompany=new GenericClass("tbl_company");
					//$ArrCompany=$objCompany->getDatalimited("*"," where Id = ".$_POST['CId'],false);
				
					//$objRegion=new GenericClass("tbl_region");
					//$ArrRegion=$objRegion->getDatalimited("Title"," where Id = ".$_POST['Region'],false);
				
					$objSource=new GenericClass("tbl_source");
					$ArrSource=$objSource->getDatalimited("Title"," where Id = ".$_POST['Source'],false);
				
					$objStatus=new GenericClass("tbl_site_codes");
					$arrStatus=$objStatus->getDatalimited("Value"," where Id = ".$_POST['Status'],false);
				
					$objType=new GenericClass("tbl_site_codes");
					$arrType=$objType->getDatalimited("Value"," where Id = ".$_POST['Type'],false);
					
					$fp=fopen("./mailer/EnqAssignMailer.html","r");
					$message= fread($fp,filesize("./mailer/EnqAssignMailer.html"));
					$message=str_replace('$Source', $ArrSource[0]['Title'],$message);
					$message=str_replace('$ReferredBy', $_POST['ReferredBy'],$message);
					$message=str_replace('$Course', $ArrCourses[0]['Name'],$message);
					$message=str_replace('$EnquiryDate', $_POST['RegTime'],$message);
				
					$message=str_replace('$Name', $_POST['Name'],$message);
					//$message=str_replace('$Occupation', $_POST['Occupation'],$message);
					$message=str_replace('$City', $_POST['City'],$message);
					$message=str_replace('$Phone', $_POST['Phone'],$message);
					$message=str_replace('$Whatsapp', $_POST['Whatsapp'],$message);
					$message=str_replace('$Email', $_POST['Email'],$message);
					//$message=str_replace('$Qualification', $_POST['Qualification'],$message);
					//$message=str_replace('$PassingYear', $_POST['PassingYear'],$message);
					//$message=str_replace('$Experience', $_POST['Experience'],$message);
					//$message=str_replace('$Position', $_POST['Position'],$message);
					//$message=str_replace('$Companyname', $_POST['Companyname'],$message);
					$message=str_replace('$Visitdate', $_POST['Visitdate'],$message);
					//$message=str_replace('$Reason', $_POST['Reason'],$message);
					$message=str_replace('$CouselorsComments', $_POST['CouselorsComments'],$message);
					//$message=str_replace('$Furtheraction', $_POST['Furtheraction'],$message);
					/*$message=str_replace('$CPersonName2', $_POST['CPersonName2'],$message);
					$message=str_replace('$CPersonMobile2', $_POST['CPersonMobile2'],$message);
					$message=str_replace('$CPersonEmail2', $_POST['CPersonEmail2'],$message);*/
					$message=str_replace('$Type', $arrType[0]['Value'],$message);
				
				//	$message=str_replace('$Region', $ArrRegion[0]['Title'],$message);				
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
					$mail->Username   = "office@infinisolutions.in";  // username
					$mail->Password   = "officedr#123";            // password
					
					//$mail->SetFrom($rs['Email'], $FullName);
					$mail->SetFrom('office@infinisolutions.in', 'Infini Solutions');
					$mail->Subject    = "Infini Solutions : New enquiry has been assigned";
					$mail->MsgHTML($body);
					
					$objAssignTo=new GenericClass("tbl_manager");
					$arrAssignTo=$objAssignTo->getDatalimited("Email"," where Id = ".$_POST['AssignedTo'],false);
					$mail->AddAddress($arrAssignTo[0]['Email']); 
					//$mail->AddCC("sujata.rajkarne@messung.com"); 
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
				$_SESSION['Sucess']="Enquiry updated successfully.";
			}
			$lastId=$_POST['Id'];
		}
	//}
?>
<?php if(isset($_POST['cmdfollowup']) && $_POST['cmdfollowup']=='followup'){ ?>
<html>
    <body>
    <form name="frm" method="post" action="./enquiry-follow.php?I=4">
	<input type="hidden" name="id" value="<?php echo $lastId; ?>" />
    <?php putContext(); ?>
    </form>
    <script language="javascript">document.frm.submit();</script>
</body>
</html>
<?php }else{ ?>
<html>
    <body>
    <form name="frm" method="post" action="./manage-enquiry.php?I=4">	
    <?php putContext(); ?>
	<input type="hidden" name="Id" value="" />	
    </form>
    <script language="javascript">document.frm.submit();</script>
</body>
</html>
<?php } ?>