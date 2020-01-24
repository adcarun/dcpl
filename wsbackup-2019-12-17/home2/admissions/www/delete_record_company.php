<?php
	include("./phpincludes/header_inc.php");
	
	mysql_query("UPDATE ".$_POST['table_name']." SET Isdelete = 1 WHERE Id = ".$_POST['id']);
	
	
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