<?php include("./phpincludes/header_inc.php");

	$Email = $_REQUEST['Email'];
	$obj=new GenericClass("tbl_manager");
	$arrDataCategory=$obj->getDatalimited("Email"," where Email = '".$Email."' ",false);
	if(count($arrDataCategory)>0)
	{
		echo "false";
	}
	else
	{
		echo "true";
	}	
?>
