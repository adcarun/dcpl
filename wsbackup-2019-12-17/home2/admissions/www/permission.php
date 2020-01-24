<?php
//print phpinfo();
		$target_path = "./cms-upload/";
		echo "<b>".$target_path."</b>";
		echo "<br>";
		if(file_exists($target_path)) {
			echo " directory is exists"; 
		}
		else {
			echo ' directory is not exists';
		}
		echo "<br>";
		if (is_writable($target_path)) {
			echo " directory is writable"; 
		}
		else {
			echo ' directory is not writable';
		}
		
		
		 exit;
?>
