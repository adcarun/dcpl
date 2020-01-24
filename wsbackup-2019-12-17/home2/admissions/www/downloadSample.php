<?php
	include("./phpincludes/header_inc.php");
	
	$Resume = "sampledata";
	header("Content-Type: application/Excel");
	header("Content-Disposition: attachment; filename=".$Resume.".csv");
	header("Pragma: no-cache");
	header("Expires: 0");
	
	$obj=new GenericClass('tbl_enquiry');
	$arrData=$obj->getDatalimited("Source,Course, Name, City, Phone, Whatsapp, Email,CouselorsComments, Message, Status, RegTime"," where Id != '0' order by Id desc limit 5 ",false);
	
	echo "Source,Course,Name,City,Phone,Whatsapp,Email,CouselorsComments,Message,Status,RegTime"."\r\n";
	$i=0;
	foreach($arrData as $Details)
	{
		/*if($i<1)
		{*/
			//$objProduct=new GenericClass("tbl_ongoing_projects");
			//$ArrProducts=$objProduct->getDatalimited("Name"," where Id = ".$Details['Course'],false);
			
			//$objType=new GenericClass("tbl_site_codes");
           // $arrType=$objType->getDatalimited("Value"," where Id = ".$Details['Type'],false);
			
			//$objSource=new GenericClass("tbl_source");
		//	$arrSource=$objSource->getDatalimited("Title"," where Id = ".$arrData[0]['Source'],false);
			
			
			echo $Details['Source'].",";
			echo $Details['Course'].",";
			echo $Details['Name'].",";
			echo $Details['City'].",";
			echo $Details['Phone'].",";
			echo $Details['Whatsapp'].",";
			echo $Details['Email'].",";
			echo $Details['CouselorsComments'].",";
			echo $Details['Message'].",";
			echo $Details['Status'].",";
			echo $Details['RegTime'].",\r\n";
		/*}
		else
		{
			echo " ,";
			echo $Details['CName'].",";
			echo " ".",";
			echo " ".",";
			echo " ".",";
			echo " ".",";
			echo " ".",";
			echo " ".",";
			echo " ".","."\r\n";	
		}*/
		
		//$str .= "\r\n";
	$i++;
	}
?>