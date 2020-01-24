<?php
	include("./phpincludes/header_inc.php");
	
	
	$str=explode(".",$_FILES['CsvFile']['name']);
	$result=count($str);
	if ($_FILES['CsvFile']['name'] != '' && $str[$result-1]=="csv")
	{
		//$file_temparray	= split('\.',$_FILES['CsvFile']['name']);
		//$tmpfile = $_FILES['CsvFile']['tmp_name'];
		
		  $destPath = '';
            $FolderPath = '';
            $destPath = '/www/csvfile/';
            $FolderPath = 'csvfile/';
            $myFile = $_FILES['CsvFile']; // This will make an array out of the file information that was stored.
            $file = $myFile['tmp_name'];  //Converts the array into a new string containing the path name on the server where your file is.
            $myFileName = $myFile['name']; //Retrieve file path and file name  
         //   $myfile_replace = str_replace('\\', '/', $myFileName);    //convert path for use with unix
            $myfile = basename($myfile_replace);    //extract file name from path
           
            $file_ext=explode(".",$myfile);
            $filename='new_name.csv';
           
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
               // echo "<h2>FTP upload </h2> <br />";
            }
		
		//exit();
		
	//	move_uploaded_file($tmpfile,"csvfile/new_name.csv");

		if (($handle = fopen("csvfile/new_name.csv", "r")) !== FALSE) 
		{
			$skipline = 0;
        	while (($data = fgetcsv($handle, 10000, ",")) !== FALSE) 
			{ 
				if($skipline == 1)
				{
					$skipline ++;
				}
				
				
				$regdate = date('Y-m-d'); 
				if($skipline != 0)
				{
					/*************************    Sql for enquiry **************************************/
					
					
					
					//$objCourse=new GenericClass("tbl_ongoing_projects");
                    //$arrCourse=$objCourse->getDatalimited("Id"," where Name = '".trim($data[0])."' ",false);
					//$Course = $arrCourse[0]['Id'];
				//	print_r($data);
					//$ReferredBy = trim($data[1]);
					$Source = trim($data[0]);
					$Course = trim($data[2]);
					$Name = trim($data[3]);
					$ConsulerComments = trim($data[8]);
					$Message = trim($data[9]);
					$City = trim($data[4]);
					$Phone = trim($data[5]);
					$Whatsapp = trim($data[6]);
					$Email = trim($data[7]);
					$Status="21";
					//$RegTime = trim(date('Y-m-d H:i:s'));
					$RegTime = date("Y-m-d", strtotime(trim($data[1])));
					
					
					 $import = "INSERT INTO tbl_enquiry (Source,Course, Name, City, Phone, Whatsapp, Email,CouselorsComments, Message, Status, RegTime) VALUES ('".htmlspecialchars(addslashes(trim($Source)))."','".htmlspecialchars(addslashes(trim($Course)))."','".htmlspecialchars(addslashes(trim($Name)))."','".htmlspecialchars(addslashes(trim($City)))."','".htmlspecialchars(addslashes(trim($Phone)))."','".htmlspecialchars(addslashes(trim($Whatsapp)))."','".htmlspecialchars(addslashes(trim($Email)))."','".htmlspecialchars(addslashes(trim($ConsulerComments)))."','".htmlspecialchars(addslashes(trim($Message)))."','".htmlspecialchars(addslashes(trim($Status)))."','".htmlspecialchars(addslashes(trim($RegTime)))."')"; 
					
					$result = @mysql_query($import) or die(mysql_error());
					
				}
				$skipline ++;
			}
			
        fclose($handle); 
		}
		$_SESSION['csvsucess'] = "Enquiries uploaded successfully";
		header("Location:upload-enquiry.php?I=9");
	}
?>