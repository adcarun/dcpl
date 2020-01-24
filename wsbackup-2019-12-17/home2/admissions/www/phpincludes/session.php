<?php
	/*session_start();
	//print_r($_SESSION['expire']);
	$now = time(); // Checking the time now when home page starts.	
	if(!isset($_SESSION['objLogin']))
	{
		session_destroy();
		header("Location:./index.php");
	}else if($now > $_SESSION['expire']){
		session_destroy();
		header("Location:./index.php");
	}
	if($_SESSION['objLogin']->AccessLevel=="admin")
	{
		header("Location:./manage-rti.php");	
	}*/	
	
	session_start();
    if(!isset($_SESSION['objLogin']))
    {
        session_destroy();
        header("Location:./index.php");
    }
   
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800))
    {
        // last request was more than 30 minutes ago
        session_unset();     // unset $_SESSION variable for the run-time
        session_destroy();   // destroy session data in storage
        session_start();
        $_SESSION['SessionTimeOut'] = "Your session has expired! Please login again";
        header("Location:./index.php");
    }
    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
	
?>