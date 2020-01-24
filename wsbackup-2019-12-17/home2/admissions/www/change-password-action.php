<?php session_start();
	include("./phpincludes/header_inc.php");
	
	if(isset($_POST['UserName']) && $_POST['UserName']!='')
	{
		$UserName = $_POST['UserName'];
		$objRecord=new GenericClass("tbl_loginmaster");
		$ArrRecord=$objRecord->getDatalimited("count(*) as rec,Password"," where Name = '".htmlspecialchars(addslashes($UserName))."' and Password = '".$_POST['OldPassword']."' ",false);
		if($ArrRecord[0]['rec']>0)
		{
			if($ArrRecord[0]['Password']==$_POST['NewPassword'])
			{
				$_SESSION['Sucess'] = "New Password is same as old password. You can use old password for login.";
				header("location:change-password.php");
				exit();	
			}
			else
			{
				$UpdateSql = "update tbl_loginmaster set Password = '".htmlspecialchars(addslashes($_POST['NewPassword']))."', PassUpdateDate = '".date('Y-m-d')."' where Name = '".htmlspecialchars(addslashes($UserName))."' ";
				$res = mysql_query($UpdateSql);
				$_SESSION['Sucess'] = "New Password has been set successfully";
				header("location:change-password.php");
				exit();
			}
		}
		else
		{
			$_SESSION['Error'] = "Invalid old password";
			header("location:change-password.php");
			exit();	
		}
	}
	else
	{
		header("location:change-password.php");
		exit();
	}	
?>