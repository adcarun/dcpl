<?php include("./phpincludes/header_inc.php");

	$CName = $_REQUEST['CName'];
	$obj=new GenericClass("tbl_company");
	$arrDataCategory=$obj->getDatalimited("CName"," where CName = '".$CName."' ",false);
	if(count($arrDataCategory)>0)
	{
		echo "false";
	}
	else
	{
		echo "true";
	}	
?>
