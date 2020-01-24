<?php
	include("./phpincludes/header_inc.php");
	//include("./phpincludes/connection.php");
	//include("./phpincludes/commonfunctions.php");
	//include("./phpincludes/GenericClass.php");
	
	//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
	
	$con = $_GET['con'];
	$str = "";
	$str .= "School,";
	$str .= "Referred By,";
	$str .= "Name,";
//	$str .= "Occupation,";
	$str .= "City,";
	$str .= "Phone,";
	$str .= "Whatsapp,";
	$str .= "Email,";
	//$str .= "Qualification,";
	//$str .= "Passing Year,";
	//$str .= "Experience,";
	//$str .= "Position,";
	//$str .= "Company Name,";
	$str .= "Visit Date,";
	//$str .= "Reason,";
	$str .= "Counsellors Comments,";
	//$str .= "Training period,";
	//$str .= "Preferred slot of training,";
	//$str .= "Further Action,";
	$str .= "Type,";
	$str .= "Source,";
	$str .= "OtherSource,";
	$str .= "Priority,";
	$str .= "Enquiry Status,";
	//$str .= "Message,";
	//$str .= "Fees Discount,";
	//$str .= "Fees Paid,";
	//$str .= "Fees Balance,";
	$str .= "Assigned To,";
	$str .= "Enquiry Date,";
	//$str .= "Enquiry Time,";
	$str = substr($str, 0, strlen($str)-1)."\r\n";
	
	
	$objProduct=new GenericClass("tbl_ongoing_projects");
	//$objCompany=new GenericClass("tbl_company");
	//$objRegion=new GenericClass("tbl_region");
	$objSource=new GenericClass("tbl_source");
	$objStatus=new GenericClass("tbl_site_codes");
	$objAssignedTo=new GenericClass("tbl_manager");
	
	
	$obj=new GenericClass('tbl_enquiry');
	$arrData=$obj->getDatalimited("Course,ReferredBy,Name,Occupation,City,Phone,Whatsapp,Email,Qualification,PassingYear,Experience,Position,Companyname,Visitdate,Reason,CouselorsComments,Furtheraction,Trainingperiod,PreferredSlot,Type,Source,OtherSource,Priority,Status,AssignedTo,RegTime,EnqTime,Message,FeesDiscount,FeesPaid,FeesBalance"," $con order by RegTime desc",false);
//	exit();
	
	//print_r($arrData);
	//exit();
	foreach($arrData as $Details)
	{
		
		$ArrProducts=$objProduct->getDatalimited("Name"," where Id = ".$Details['Course'],false);
		$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($ArrProducts[0]['Name']))).",";
		$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['ReferredBy']))).",";
		$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['Name']))).",";
		//$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['Occupation']))).",";
		$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['City']))).",";
		$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['Phone']))).",";
		$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['Whatsapp']))).",";
		$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['Email']))).",";
		//$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['Qualification']))).",";
		//$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['PassingYear']))).",";
		//$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['Experience']))).",";
		//$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['Position']))).",";
		//$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['Companyname']))).",";
		$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['Visitdate']))).",";
		
		//$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes(str_replace(","," ",(str_replace("\n"," ",(str_replace("<br>"," ",$Details['Reason'])))))))).",";
		$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes(str_replace(","," ",(str_replace("\n"," ",(str_replace("<br>"," ",$Details['CouselorsComments'])))))))).",";
		//$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes(str_replace(","," ",(str_replace("\n"," ",(str_replace("<br>"," ",$Details['Trainingperiod'])))))))).",";
	//	$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes(str_replace(","," ",(str_replace("\n"," ",(str_replace("<br>"," ",$Details['PreferredSlot'])))))))).",";
		//$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes(str_replace(","," ",(str_replace("\n"," ",(str_replace("<br>"," ",$Details['Furtheraction'])))))))).",";
		if($Details['Type']!='' || $Details['Type'] != NULL){
		$arrType=$objStatus->getDatalimited("Value"," where Id = ".$Details['Type'],false);
		$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrType[0]['Value']))).",";
		}else{
			$str .= 'NA'.",";
		}
		
		$arrSource=$objSource->getDatalimited("Title"," where Id = ".$Details['Source'],false);
		$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrSource[0]['Title']))).",";
		$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['OtherSource']))).",";
		
		$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['Priority']))).",";		
		
		$arrStatus=$objStatus->getDatalimited("Value"," where Id = ".$Details['Status'],false);
		$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrStatus[0]['Value']))).",";
		
		//$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['Message']))).",";
		//$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['FeesDiscount']))).",";
		//$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['FeesPaid']))).",";
		//$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['FeesBalance']))).",";
		
		$arrAssignedTo=$objAssignedTo->getDatalimited("Name"," where Id = ".$Details['AssignedTo'],false);
		$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrAssignedTo[0]['Name']))).",";
		
		$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['RegTime']))).",";
		//$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['EnqTime']))).",";
				
		$str = substr($str, 0, strlen($str)-1);
		$str .= "\r\n";
	}

	
	
	header("Content-Type: application/Excel");
	header("Content-Disposition: attachment; filename=Enquiry.csv");
	header("Pragma: no-cache");
	header("Expires: 0");
	echo $str;
?>