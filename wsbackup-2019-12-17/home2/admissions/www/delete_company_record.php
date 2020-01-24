<?php
	include("./phpincludes/header_inc.php");
	
	if($_POST['delimgname']!="")
	{
		unlink($_POST['delimgname']);
	}
	
	mysql_query("DELETE FROM ".$_POST['table_name']." WHERE Id = ".$_POST['id']);
	mysql_query("DELETE FROM lh_company_ac WHERE CompanyId = ".$_POST['id']);
	mysql_query("DELETE FROM lh_company_md WHERE CompanyId = ".$_POST['id']);
	
	
	$_SESSION['Sucess']="Company deleted successfully.";	
?>
<html>
    <body>
    <form name="frm" method="post" action="./<?php echo $_POST['ret_page']; ?> ">
    <?php putContext(); ?>
    </form>
    <script language="javascript">document.frm.submit();</script>
</body>
</html>