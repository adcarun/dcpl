<?php

	/*$db_host	= "localhost";
	$db_name	= "life_holidays";
	$db_user 	= "root";
	$db_password    = "";*/
	
	$db_host	= "localhost";
	$db_name	= "lifehol1_lifeproject";
	$db_user 	= "lifehol1_project";
	$db_password    = "G7#e7*H(Rdk4";
	
	$link=mysql_connect($db_host,$db_user,$db_password) or die(mysql_error());
	mysql_select_db($db_name) or die(mysql_error());
?>