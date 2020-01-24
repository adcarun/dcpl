<?php
		include("./phpincludes/header_inc.php");
// print_r($_POST['course']);
 //echo $_POST['Phone'];
 //echo $_POST['Whatsapp'];
 for($i=0;$i<count($_POST['course']);$i++){
 $qrySelect="select count(*) from tbl_enquiry where Phone='".$_POST['Phone']."' AND Whatsapp='".$_POST['Whatsapp']."' AND Course='".$_POST['course'][$i]."'";
 $res=mysql_query($qrySelect);
 $row=mysql_fetch_row($res);
 echo $row[0]."-".$_POST['course'][$i]."#";
 }
 
 
 
?>