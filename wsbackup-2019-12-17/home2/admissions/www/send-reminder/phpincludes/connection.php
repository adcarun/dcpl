<?php
	/*$db_host	= "localhost";
	$db_name	= "messung";
	$db_user 	= "root";
	$db_password    = "";*/
	
	$db_host	= "localhost";
	$db_name	= "enquiry";
	$db_user 	= "enquiry";
	$db_password    = "En9u1Ryme5";
	
	$link=mysql_connect($db_host,$db_user,$db_password) or die(mysql_error());
	mysql_select_db($db_name) or die(mysql_error());
?>