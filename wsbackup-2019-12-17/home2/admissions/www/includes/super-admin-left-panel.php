<?php //print_r($_SESSION); ?>
<nav id="primary-nav">

<ul>
	<li>
    	<?php
			if($_GET['I']=='1' || $_GET['I']=='2' || $_GET['I']=='3' || $_GET['I']=='4' || $_GET['I']=='5' || $_GET['I']=='6' || $_GET['I']=='7' || $_GET['I']=='8' || $_GET['I']=='9' || $_GET['I']=='10')
				$MainMenu1 = "activeMainMenu";
			else if($_GET['I']=='11' || $_GET['I']=='12')
				$MainMenu2 = "activeMainMenu";
			else if($_GET['I']=='13' || $_GET['I']=='14')
				$MainMenu3 = "activeMainMenu";
			else if($_GET['I']=='15')
				$MainMenu4 = "activeMainMenu";
			else if($_GET['I']=='16' || $_GET['I']=='17' || $_GET['I']=='18' || $_GET['I']=='19')
				$MainMenu5 = "activeMainMenu";
			else if($_GET['I']=='20')
				$MainMenu6 = "activeMainMenu";
				
			
		?>
    	<a href="javascript:void(0);" class="<?=$MainMenu1?>"><i class="icon-th-list"></i>Management</a>
        <ul>
        	<?php 
			
				if($_SESSION['objLogin']->AccessLevel=="Admin"){
					
			?>
           <li>
            	<a href="./manage-enquiry.php?I=4" class="<?php if($_GET['I']=='4'){ echo "active"; }?>"><i class="icon-file-text"></i>Enquiry / Reports</a>
            </li>
			<li>
            	<a href="./dashboard-campaign.php?I=18" class="<?php if($_GET['I']=='18'){ echo "active"; }?>"><i class="icon-file-text"></i>Campaign wise Dashboard</a>
            </li>
			<li>
            	<a href="./dashboard-executive.php?I=7" class="<?php if($_GET['I']=='7'){ echo "active"; }?>"><i class="icon-file-text"></i>Executive wise Dashboard</a>
            </li>
        	<li>
            	<a href="./dashboard.php?I=1" class="<?php if($_GET['I']=='1'){ echo "active"; }?>"><i class="icon-file-text"></i>School wise Dashboard</a>
            </li>
			<li>
            	<a href="./dashboard-confirmed.php?I=15" class="<?php if($_GET['I']=='15'){ echo "active"; }?>"><i class="icon-file-text"></i>Confirmed Dashboard</a>
				</li>
			<li>
            	<a href="./dashboard-confirmed-campaign.php?I=35" class="<?php if($_GET['I']=='35'){ echo "active"; }?>"><i class="icon-file-text"></i>Confirmed Dashboard (By Campaign)</a>
				</li>	
			<li>
            	<a href="./upload-enquiry.php?I=9" class="<?php if($_GET['I']=='9'){ echo "active"; }?>"><i class="icon-file-text"></i>Upload Enquiry</a>
            </li>
            <li>
            	<a href="./manage-reminder.php?I=2" class="<?php if($_GET['I']=='2'){ echo "active"; }?>"><i class="icon-file-text"></i>Set Reminder</a>
            </li>	
            <li>
            	<a href="./manage-source.php?I=17" class="<?php if($_GET['I']=='17'){ echo "active"; }?>"><i class="icon-file-text"></i>Manage Source</a>
            </li>
			
			<li>
            	<a href="./duplicate-enquirers.php?I=20" class="<?php if($_GET['I']=='20'){ echo "active"; }?>"><i class="icon-file-text"></i>Duplicate Enquiry Email</a>
            </li>
			<li>
            	<a href="./duplicate-enquirers-mobile.php?I=21" class="<?php if($_GET['I']=='21'){ echo "active"; }?>"><i class="icon-file-text"></i>Duplicate Enquiry Mobile</a>
            </li>
			
        	
            <?php } 
			else
			{
				
			?>
					
                <li>
                        <a href="./dashboard-user.php?I=11" class="<?php if($_GET['I']=='11'){ echo "active"; }?>"><i class="icon-file-text"></i>User</a>
                    </li>
                	
                    <li>
                        <a href="./manage-enquiry.php?I=4" class="<?php if($_GET['I']=='4'){ echo "active"; }?>"><i class="icon-file-text"></i>Enquiry / Reports</a>
                    </li>
					<!--<li>
            	<a href="./dashboard.php?I=1" class="<?php if($_GET['I']=='1'){ echo "active"; }?>"><i class="icon-file-text"></i>School wise Dashboard</a>
				</li>-->
				<li>
            	<a href="./dashboard-campaign.php?I=18" class="<?php if($_GET['I']=='18'){ echo "active"; }?>"><i class="icon-file-text"></i>Campaign wise Dashboard</a>
            </li>
				<li>
            	<a href="./dashboard-confirmed.php?I=15" class="<?php if($_GET['I']=='15'){ echo "active"; }?>"><i class="icon-file-text"></i>Confirmed Dashboard</a>
				</li>
				
					<li>
                        <a href="./manage-reminder.php?I=2" class="<?php if($_GET['I']=='2'){ echo "active"; }?>"><i class="icon-file-text"></i>Set Reminder</a>
                    </li>
                <?php	
			}
			?>
            <li>
            	<a href="./todays-reminder.php?I=6" class="<?php if($_GET['I']=='6'){ echo "active"; }?>"><i class="icon-file-text"></i>Today's Reminder <span style="color:#F00;"><?=$arrReminder[0]['TotalRec']?></span></a>
            </li>
            <li>
            	<a href="./todays-followup.php?I=8" class="<?php if($_GET['I']=='8'){ echo "active"; }?>"><i class="icon-file-text"></i>Today's Follow Up <span style="color:#F00;"><?=$arrFollowUp[0]['TotalRec']?></span></a>
            </li>
			<li>
            	<a href="./manage-followup.php?I=12" class="<?php if($_GET['I']=='12'){ echo "active"; }?>"><i class="icon-file-text"></i>Manage Follow Up <span style="color:#F00;"><?php
				if($_SESSION['objLogin']->AccessLevel=="Admin"){
					$resManage="select count(Id) from tbl_follow_up where Id!=0 and NextUpdateDate >= '".date('Y-m-d')."' and EnqId IN(select Id from tbl_enquiry)";
				}else if($_SESSION['objLogin']->Id!=""){
					$resManage="select count(Id) from tbl_follow_up where Id!=0 and NextUpdateDate >= '".date('Y-m-d')."' and UserId = ".$_SESSION['objLogin']->Id." and EnqId IN(select Id from tbl_enquiry)";
				}
				$resManage1=mysql_query($resManage);
				$rowManage=mysql_fetch_row($resManage1);
				echo $rowManage[0];
				//$arrFollowUp[0]['TotalRec']?></span></a>
            </li>
			<li>
            	<a href="./previous-followup.php?I=13" class="<?php if($_GET['I']=='13'){ echo "active"; }?>"><i class="icon-file-text"></i>Previous Follow Up <span style="color:#F00;"><?php
				if($_SESSION['objLogin']->AccessLevel=="Admin"){
					$resManage="select count(Id) from tbl_follow_up where Id!=0 and NextUpdateDate < '".date('Y-m-d')."' and EnqId IN(select Id from tbl_enquiry)";
				}else if($_SESSION['objLogin']->Id!=""){
					$resManage="select count(Id) from tbl_follow_up where Id!=0 and NextUpdateDate < '".date('Y-m-d')."' and UserId = ".$_SESSION['objLogin']->Id." and EnqId IN(select Id from tbl_enquiry)";
				}
				$resManage1=mysql_query($resManage);
				$rowManage=mysql_fetch_row($resManage1);
				echo $rowManage[0];
				//$arrFollowUp[0]['TotalRec']?></span></a>
            </li>
			
			<li>
            	<a href="./duplicate-enquirers.php?I=20" class="<?php if($_GET['I']=='20'){ echo "active"; }?>"><i class="icon-file-text"></i>Duplicate Enquiry Email</a>
            </li>
			<li>
            	<a href="./duplicate-enquirers-mobile.php?I=21" class="<?php if($_GET['I']=='21'){ echo "active"; }?>"><i class="icon-file-text"></i>Duplicate Enquiry Mobile</a>
            </li>
			
			<?php 
			
				if($_SESSION['objLogin']->AccessLevel=="Admin"){
					
			?>
			 <li>
            <a href="manage-user.php?I=3" class="<?php if($_GET['I']=='3'){ echo "active"; }?>"><i class="icon-file-text"></i> Add New User</a>
           </li>
		   <?php } ?>
		   <?php 
			
				/*if($_SESSION['objLogin']->AccessLevel=="Admin"){
					
			?>
			 <li>
            <a href="manage-email-notifications.php?E=1" class="<?php if($_GET['E']=='1'){ echo "active"; }?>"><i class="icon-file-text"></i> Turn on /off email notifications</a>
           </li>
		   <?php }else{ ?>
			<li>
            <a href="manage-email-notifications.php?E=1" class="<?php if($_GET['E']=='1'){ echo "active"; }?>"><i class="icon-file-text"></i> Turn on /off email notifications</a>
           </li>
		   <?php } */ ?>
        </ul>
    </li>
</ul>
</nav>