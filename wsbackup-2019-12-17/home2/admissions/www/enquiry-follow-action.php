<?php
	include("./phpincludes/header_inc.php");
	
	$_POST['RegTime']=date("Y-m-d H:i:s");
	if($_POST['TodaysUpdate'] != "")
	{
		if($_FILES['File']['tmp_name'] != "")
		{
			
			/*$Path = upload_doc($_FILES['File'], "cms-upload/FollowUp/");
			if($Path)
				$_POST['File'] = $Path;
				chmod($target_path, 0755);*/
				
			$destPath = '';
			$FolderPath = '';
			$destPath = '/www/cms-upload/FollowUp/';
			$FolderPath = 'cms-upload/FollowUp/';
			$myFile = $_FILES['File']; // This will make an array out of the file information that was stored.
			$file = $myFile['tmp_name'];  //Converts the array into a new string containing the path name on the server where your file is.
			$myFileName = $myFile['name']; //Retrieve file path and file name   
			$myfile_replace = str_replace('\\', '/', $myFileName);    //convert path for use with unix
			$myfile = basename($myfile_replace);    //extract file name from path
			
			$file_ext=explode(".",$myfile);
			$filename=rand().time().".".$file_ext[1]; 
			
			// connection settings
			$ftp_server = 'enquiry.infinisolutions.in';  //address of ftp server (leave out ftp://)
			$ftp_user_name = 'enqu27298'; // Username
			$ftp_user_pass = 'En9@1n4#solUn';   // Password
			$conn_id = ftp_connect($ftp_server);        // set up basic connection
			// login with username and password, or give invalid user message
			$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass) or die("You do not have access to this ftp server!");
			
			ftp_chdir($conn_id, $destPath);
			$upload = ftp_put($conn_id, $filename, $file, FTP_BINARY);  // upload the file
			if (!$upload) {  // check upload status
				echo "FTP upload of $myFileName has failed";
			}
			else
			{
				//echo "<h2>FTP upload </h2> <br />";
			}
			
			$_POST['File'] = $FolderPath.$filename;	
			
			ftp_close($conn_id); // close the FTP stream
		}
		
		/*if($_POST['Amount']=='')
		{
			$obj=new GenericClass('tbl_follow_up');
			$arrData=$obj->getDatalimited("Amount"," where EnqId = ".$_POST['Id']." and Amount!= '' order by Id desc LIMIT 0,1",false);
			$_POST['Amount']=$arrData[0]['Amount'];
		}*/
		//exit();
		$qrySelect="select AssignedTo from tbl_enquiry where Id=".$_POST['Id'];
		$resSelect=mysql_query($qrySelect);
		$rowSelect=mysql_fetch_row($resSelect);
		if($rowSelect[0]!=""){
			$uid=$rowSelect[0];
		}else{
			$uid=$_SESSION['objLogin']->Id;
		}
		
		$insertSql = "insert into tbl_follow_up (EnqId,UserId,TodaysUpdate,NextUpdateDate,File,RegTime) values ('".htmlspecialchars(addslashes(trim($_POST['Id'])))."','".$uid."','".htmlspecialchars(addslashes(trim($_POST['TodaysUpdate'])))."','".htmlspecialchars(addslashes(trim($_POST['NextUpdateDate'])))."','".htmlspecialchars(addslashes(trim($_POST['File'])))."','".$_POST['RegTime']."')";
		$res = mysql_query($insertSql);
		$_SESSION['Sucess'] = "Follow Up Details added successfully";
		
		//$updateSql = "update tbl_enquiry set Amount = '".htmlspecialchars(addslashes(trim($_POST['Amount'])))."' where Id = ".$_POST['Id'];
		//$res = mysql_query($updateSql);
		//echo "$updateSql";
//		exit();
	}
?>
<html>
    <body>
    <form name="frm" method="post" action= <?php if($_GET['I']!=8){?>"./enquiry-follow.php?I=4" <?php } else { ?>"./enquiry-follow.php?I=8"<?php } ?>>
    <input type="hidden" name="id" value="<?=$_POST['Id']?>">
    <?php putContext(); ?>
    </form>
    <script language="javascript">document.frm.submit();</script>
</body>
</html>