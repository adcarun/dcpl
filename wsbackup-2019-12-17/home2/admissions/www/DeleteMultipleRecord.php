<?php
	include("./phpincludes/header_inc.php");
	
	
	mysql_query("DELETE FROM ".$_POST['table_name']." WHERE Id = ".$_POST['id']);
	if($_POST['delimgname']!="")
	{
		unlink($_POST['delimgname']);
	}
	
	$obj=new GenericClass($_POST['corr_tablename']);
	$arrRecord=$obj->getDatalimited("*"," where ".$_POST['col_name']." = ".$_POST['id'],false);
	if(count($arrRecord)>0)
	{
		$i=0;
		while($i<count($arrRecord))
		{
			unlink($arrRecord[$i]['PhotoImg']);
			$i++;
		}
		mysql_query("DELETE FROM ".$_POST['corr_tablename']." WHERE ".$_POST['col_name']." = ".$_POST['id']);
	}
	$_SESSION['DeleteSucess']="Record deleted successfully.";	
?>
<html>
    <body>
    <form name="frm" method="post" action="./<?php echo $_POST['ret_page']; ?> ">
    <?php putContext(); ?>
    </form>
    <script language="javascript">document.frm.submit();</script>
</body>
</html>