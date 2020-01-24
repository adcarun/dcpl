<?php session_start(); 
	
	include("./phpincludes/connection.php");
	include("./phpincludes/commonfunctions.php");
	include_once("./phpincludes/class.phpmailer.php");
	//include("./phpincludes/header_inc.php");
	//echo "hiiiii";
//	exit();
	if(isset($_POST['UserName']) && $_POST['UserName']!="")
	{	
		$contents = $_POST['UserName'];
		if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $contents))
		{
			$_SESSION['Error'] = "Invalid UserName Address";
			header("Location:./forgot-password.php");
			exit();	
		}
	}
	if($_POST['spamcode'] != $_POST['spamcodehidden'])
	{
		$_SESSION['Error'] = "Invalid Spam Code";
		header("Location:./forgot-password.php");
		exit();
	}

	
	if(isset($_POST) and $_POST['UserName'] != "")
	{
			
		$_POST=filterPostArray($_POST);
		if($obj=forgotPassword("tbl_manager", "Email", $_POST['UserName']))
		{
			//sendMail($obj);
		
		
		$fp=fopen("./mailer/forgotMailer.html","r");
		$message= fread($fp,filesize("./mailer/forgotMailer.html"));
		$message=str_replace('$Username', $obj->Email,$message);
		$message=str_replace('$Password', $obj->Password,$message);
		//
		include("./class.phpmailer.php");
		//echo $message; exit();
		$mail             = new PHPMailer1();
		$body             = $message;
		$mail->IsSMTP(); // telling the class to use SMTP
		$mail->Host       = "smtp.gmail.com"; // SMTP server
		$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
												   // 1 = errors and messages
												  // 2 = messages only
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
		$mail->Host       = "smtp.gmail.com";      // sets  as the SMTP server
		$mail->Port       = 465;                   // set the SMTP port for the server
		$mail->Username   = "office@infinisolutions.in";  // username
		$mail->Password   = "officedr#123";            // password
		
		$mail->SetFrom('office@infinisolutions.in', 'Infini Solutions');
		$mail->Subject    = "Login Details :  Admin Login Panel";
		$mail->MsgHTML($body);
		
		$mail->AddAddress($obj->Email); 
		
		if(!$mail->Send()) 
		{
		 // echo "Mailer Error: " . $mail->ErrorInfo; exit;
		} 
		else 
		{
		// echo "Message sent!"; exit;
			
		}
			$_SESSION['Success'] = "Login Details are sent to Email Address";
			header("Location:./forgot-password.php");
			exit();	
			
			
		}
		else{
			$_SESSION['Error'] = "There is no account registered with this Email Address";
			header("Location:./forgot-password.php");
			exit();
        } 			
	}
	else{
		header("Location:./forgot-password.php");
	}	

	
?>