<?php include("./phpincludes/header_inc.php");

	$CPersonEmail = $_REQUEST['CPersonEmail'];
	$obj=new GenericClass("tbl_enquiry");
	$arrDataCategory=$obj->getDatalimited("CPersonEmail"," where CPersonEmail = '".$CPersonEmail."' ",false);
	if(count($arrDataCategory)>0)
	{
		echo "false";
	}
	else
	{
		echo "true";
	}	
?>
