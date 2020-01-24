<?php include("./phpincludes/header_inc.php");

	$CatName = $_POST['CatName'];
	
	$obj=new GenericClass("id_category");
	$arrDataCat=$obj->getDatalimited("*"," where CatName = '".$CatName."' ",false);
	if(count($arrDataCat)>0)
	{
		echo "true";
	}
?>
