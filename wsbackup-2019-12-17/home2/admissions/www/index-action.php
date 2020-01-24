<?php
	session_start();
	include("./phpincludes/connection.php");
	include("./phpincludes/commonfunctions.php");
	$GroupId = $_POST['GroupId'];
	$_POST=filterPostArray($_POST);
	if($_POST['spamcode'] != $_POST['spamcodehidden'])
	{
		$_SESSION['SpanError'] = "Invalid Spam Code";
		header("Location:./index.php");
		exit();
	}

	if(isset($_POST['UserName']) && $_POST['UserName']!="")
	{
		if(!($obj_auth=authenticate($_POST['UserName'], $_POST['Password'], 'tbl_manager', 'Email', 'Password')))
		{
			$_SESSION['LoginError'] = "Invalid Username or Password";
			header("Location:./index.php");
			exit();	
		}
		else
		{
			$_SESSION['objLogin']=$obj_auth;
			/*$_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
            $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);*/
			
			include("./phpincludes/GenericClass.php");
			if($_SESSION['objLogin']->AccessLevel=="Admin")
			{
				header("Location:./dashboard.php?I=1");
			}
			else
			{
				header("Location:./dashboard-user.php");	
			}
		}
	}
?>