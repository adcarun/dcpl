<?php
	/*$db_host	= "localhost";
	$db_name	= "enq_vischools";
	$db_user 	= "root";
	$db_password    = "";
	*/
	$db_host	= "admissions.vischools.in";
	$db_name	= "adm_admivischool";
	$db_user 	= "adm_admivischool";
	$db_password    = "Admi#pune18";
	
	$link=mysql_connect($db_host,$db_user,$db_password) or die(mysql_error());
	mysql_select_db($db_name) or die(mysql_error());
?>