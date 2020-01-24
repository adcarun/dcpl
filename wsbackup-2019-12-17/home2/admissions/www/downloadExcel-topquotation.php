<?php
	include("./phpincludes/header_inc.php");
	
	$con = $_GET['con'];
	$str = "";
	$str .= "Company Name,";
	$str .= "Amount,";
	$str = substr($str, 0, strlen($str)-1)."\r\n";
	
	
	
	$objCompany=new GenericClass("tbl_company");
	
	$objfollowup=new GenericClass("tbl_follow_up");
	$companydetails=$objfollowup->getDatalimited("*"," $con group by CompanyId order by Amount desc  limit 0,10 ",false);
	$i=0;
	foreach($companydetails as $company)
	{ 
	
		$Arrcompany=$objCompany->getDatalimited("CName"," where Id = ".$company['CompanyId'],false);
		$companydetails=$objfollowup->getDatalimited("Amount"," where EnqId = ".$company['EnqId'],false);
		$str .= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Arrcompany[0]['CName']))).",";	
		
		$Arrobjfollowup=$objfollowup->getDatalimited("DISTINCT (EnqId)"," where CompanyId =".$company['CompanyId']." ",false);
										  
		 $add=0;
		 
		  foreach ($Arrobjfollowup as $enq)
		  {
			 // echo "<br>";
			$followup=$objfollowup->getDatalimited("Amount"," where EnqId = ".$enq['EnqId']. " order by Id desc LIMIT 0,1",false);
			{
				$add+=$followup[0]['Amount'];
			}
			$amt='';
		  }
		$str .= $add.",";
		$str = substr($str, 0, strlen($str)-1);
		$str .= "\r\n";
		
		$i++;
	} // End of foreach ($arrData as $key => $value) 
									


	header("Content-Type: application/Excel");
	header("Content-Disposition: attachment; filename=Top-Quotation.csv");
	header("Pragma: no-cache");
	header("Expires: 0");
	echo $str;
?>