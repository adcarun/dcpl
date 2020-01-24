<?php session_start();
	include("./phpincludes/connection.php");
	include("./phpincludes/commonfunctions.php");
	include("./phpincludes/GenericClass.php");
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>VI Schools | Forgot Password</title>

        <meta name="description" content="uAdmin is a Professional, Responsive and Flat Admin Template created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- The roboto font is included from Google Web Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic">

        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Related styles of various javascript plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (Browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support them) -->
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>   
		<script src="./js/jquery.validate.js"></script>
        <script src="./js/all-script.js"></script>	
        <script>
            $(document).ready(function(){
                validateData();
            });
        </script>
        <style>	
        #ForgotPass label.error {
            color:red;
        }
        </style>
    
    
    </head>

    <body class="login">
        <!-- Login Container -->
        <div id="login-container">
            <div id="login-logo">
            	<img src="img/logo.jpg" alt="logo">
            </div>
			<?php
			if(isset($_SESSION['Error']) && $_SESSION['Error']!="")
			{
				?>
                <span style="color:#db4a39;">
                   	<?php echo $_SESSION['Error']; unset($_SESSION['Error']); ?>
                </span>
                <?php
			}
			if(isset($_SESSION['Success']) && $_SESSION['Success']!="")
			{
				?>
                <span style="color:#5cb85c;">
					<?php echo $_SESSION['Success']; unset($_SESSION['Success']); ?>
                </span>
                <?php    
			}
			?>
            <!-- Login Form -->
            <form method="post" class="form-horizontal" onSubmit="return validateLogin(this);" action="./forgot-password-action.php" id="ForgotPass">
            	<b>Forgot Password</b>
                <div class="form-group">
                    <div class="input-group col-xs-12">
                        <input type="text"  id="UserName" name="UserName" placeholder="User name .." class="form-control" maxlength="50">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group col-xs-12">
                        <?php
							$rand1 = mt_rand(0, 9);
							$imagecomp = strtoupper($rand1);
							echo "<img src='./images/verification/".$imagecomp.".gif' alt='' style='border:none;'>";
							?>
							<span style="margin-top:-10px;">+</span>
							<?php
							$rand2 = mt_rand(1, 9);
							$imagecomp = strtoupper($rand2);
							echo "<img src='./images/verification/".$imagecomp.".gif' alt='' style='border:none;'>";
							$Total = trim($rand1)+trim($rand2);
						?>                      
                        <input type="hidden" name="SpamCodeHidden" id="SpamCodeHidden" value="<?php echo $Total; ?>" />
                        <?php $_SESSION['sessionSpamCode'] = $Total; ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group col-xs-12">
                        <input type="text" name="SpamCode" placeholder="Enter Addition of above Digits .." class="form-control" maxlength="5">
                    </div>
                </div>
                <div class="clearfix">
                    <div class="btn-group btn-group-sm pull-right">
                    	<button type="button" id="login-button-pass" class="btn btn-warning" data-toggle="tooltip" title="Back to Login" onClick="document.location='./index.php'"><i class="icon-arrow-left"></i></button>
                        <input name="Submit" value="Submit" type="submit" class="btn btn-success"></button>
                    </div>
                </div>
            </form>
            <!-- END Login Form -->
        </div>
        <!-- END Login Container -->

        <!-- Get Jquery library from Google but if something goes wrong get Jquery from local file - Remove 'http:' if you have SSL -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(unescape('%3Cscript src="js/vendor/jquery-1.9.1.min.js"%3E%3C/script%3E'));</script>
        
        <script src="js/vendor/bootstrap.min.js"></script>
        
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>