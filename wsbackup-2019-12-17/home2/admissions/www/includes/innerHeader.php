<?php ini_set('error_reporting', 0); ?>
 <?php if($_SESSION['objLogin']=="")
	{
		?>
        	<script>
	        	window.location.href="../index.php";
			</script>
        <?php
	}
		?>
<div class="logoArea">
	<div class="logo">
        <img src="../images/logo.png" align="left" style="margin-top:20px;"/>
	</div>
	<div class="postLogo">
    
    	Welcome <b><?php echo ucwords($_SESSION['objLogin']->FirstName." ".$_SESSION['objLogin']->LastName); ?></b>&nbsp;[ <a href="mailto:<?php echo $_SESSION['objLogin']->Email; ?>" title="mailto:<?php echo $_SESSION['objLogin']->Email; ?>"><?php echo $_SESSION['objLogin']->Email; ?></a>] | 
        Last access time: <?php echo convertDBDateTime($_SESSION['objLogin']->LastAccessTime); ?>
<?php if($_SESSION['objLogin']->AccessLevel == "Admin") { ?>
 | <a href="changepassword.php" title="Change Password"><b>Change Password</b></a>
<?php } ?>
 | <a href="logout.php" title="Logout"><b>Logout</b></a>

	</div>
</div>