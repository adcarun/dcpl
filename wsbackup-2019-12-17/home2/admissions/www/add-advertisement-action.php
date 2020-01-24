<?php
	include("./phpincludes/header_inc.php");
	
	if($_FILES['AdvImage']['tmp_name'] != "")
	{
		$data = getimagesize($_FILES['AdvImage']['tmp_name']);
		$width = $data[0];
		$height = $data[1];
		if($width > 191)
		{
			$_SESSION['Error']="Advertisement Image width should be less than 190.";
			header("Location:manage-advertisement.php?I=18");
			exit;
		}
		$Path = upload_doc($_FILES['AdvImage'], "cms-upload/advertisement/");
		if($Path)
			$_POST['AdvImage'] = $Path;
			if($_POST['HdnAdvImage'] != '')
			{
				unlink($_POST['HdnAdvImage']);	
			}
			unset($_POST['HdnAdvImage']);
	}
	else
	{
		$_POST['AdvImage'] = $_POST['HdnAdvImage'];
		unset($_POST['HdnAdvImage']);
	}
	
	foreach($_POST as $key => $value)
		$_POST[$key] = htmlspecialchars(addslashes(trim($value)));
	$_POST['RegDate']=date("Y-m-d H:i:s");
	$obj=new GenericClass("id_advertisement");
	$obj->populateColumns($_POST);
	if($_POST['AdvLink'] != "")
	{
		if($_POST['Id'] == "")
		{
			$obj->insert();
			$_SESSION['Sucess']="Advertisement added successfully.";
		}
		else
		{
			$obj->update();
			$_SESSION['Sucess']="Advertisement updated successfully.";
		}
	}
?>
<html>
    <body>
    <form name="frm" method="post" action="./manage-advertisement.php?I=18">
    <?php putContext(); ?>
    </form>
    <script language="javascript">document.frm.submit();</script>
</body>
</html>