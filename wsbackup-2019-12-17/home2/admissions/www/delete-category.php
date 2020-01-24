<?php
	include("./phpincludes/header_inc.php");
	
	if($_POST['delimgname']!="")
	{
		unlink($_POST['delimgname']);
	}
	
	mysql_query("DELETE FROM ".$_POST['table_name']." WHERE Id = ".$_POST['id']);
	
	mysql_query("delete from ".$_POST['corr_tablename']." where ".$_POST['col_name']." = ".$_POST['id']);
	
	mysql_query("delete from id_articles where CatId = ".$_POST['id']);
	
	$_SESSION['Sucess']="Record deleted successfully.";	
?>
<html>
    <body>
    <form name="frm" method="post" action="./<?php echo $_POST['ret_page']; ?> ">
    <?php putContext(); ?>
    </form>
    <script language="javascript">document.frm.submit();</script>
</body>
</html>