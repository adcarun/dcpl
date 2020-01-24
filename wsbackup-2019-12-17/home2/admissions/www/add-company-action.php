<?php
	include("./phpincludes/header_inc.php");
	
	foreach($_POST as $key => $value)
		$_POST[$key] = htmlspecialchars(addslashes(trim($value)));
	$_POST['RegTime']=date("Y-m-d H:i:s");
	$obj=new GenericClass("tbl_company");
	$obj->populateColumns($_POST);
	if($_POST['CName'] != "")
	{
		if($_POST['Id'] == "")
		{
			$obj->insert();
			$_SESSION['Sucess']="Company added successfully.";
		}
		else
		{
			$obj->update();
			$_SESSION['Sucess']="Company updated successfully.";
		}
	}
?>
<html>
    <body>
    <form name="frm" method="post" action="./manage-company.php?I=5">
    <?php putContext(); ?>
    </form>
    <script language="javascript">document.frm.submit();</script>
</body>
</html>