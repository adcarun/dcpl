<?php
	include("./phpincludes/header_inc.php");
	
	$con = $_GET['con'];
	$str = "";
	$str .= "Company Name,";
	$str .= "Todays Update,";
	
	$str .= "Next Update Date,";
	$str .= "Amount,";
	$str = substr($str, 0, strlen($str)-1)."\r\n";
	
	$objcompany=new GenericClass("enquiry_details");
	$objfollowup=new GenericClass("tbl_follow_up");
	
	$Arrobjfollowup=$objfollowup->getDatalimited("DISTINCT (EnqId)"," where CompanyId =".$_GET['enqid']." ",false);
	
	$CName=$objcompany->getDatalimited("CName"," where CId  = ".$_GET['enqid'] ,false);
	
		$i=0;
		foreach ($Arrobjfollowup as $followup)
		{
			
		$followup=$objfollowup->getDatalimited("Amount,TodaysUpdate,NextUpdateDate,File"," where EnqId = ".$followup['EnqId']. " order by Id desc LIMIT 0,1",false);
		
		
		
		$str .= $CName[0]['CName'].",";
		$str .= $followup[0]['TodaysUpdate'].",";
		$str .= $followup[0]['NextUpdateDate'].",";
		$str .= $followup[0]['Amount'].",";
		
		$str = substr($str, 0, strlen($str)-1);
		$str .= "\r\n";
		}
			
	header("Content-Type: application/Excel");
	header("Content-Disposition: attachment; filename=Quotations-Details.csv");
	header("Pragma: no-cache");
	header("Expires: 0");
	echo $str;
?>