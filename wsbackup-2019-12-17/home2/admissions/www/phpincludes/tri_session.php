<?php
	session_start();
	if(!isset($_SESSION['objLogin']))
	{
		session_destroy();
		header("Location:./index.php");
	}
	
?>