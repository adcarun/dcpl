<?php
	include("./phpincludes/header_inc.php");
	
	if($_POST['delimgname1']!="")
	{
		unlink($_POST['delimgname1']);
	}
	if($_POST['delimgname2']!="")
	{
		unlink($_POST['delimgname2']);
	}
	mysql_query("DELETE FROM ".$_POST['table_name']." WHERE Id = ".$_POST['id']);
	
	$_SESSION['resp']="Record deleted successfully.";	
?>
<html>
    <body>
    <form name="frm" method="post" action="./<?php echo $_POST['ret_page']; ?> ">
    <?php putContext(); ?>
    </form>
    <script language="javascript">document.frm.submit();</script>
</body>
</html>