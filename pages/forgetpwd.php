<!DOCTYPE HTML>
<html>
	<head>
		<title>拼车晓位 | 找回密码</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/forgetpwd.css" type='text/css'/>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png" />
		<script type="application/x-javascript"> 
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
		</script>

		<!-- my script -->
		<script src="js/checkFormat.js"></script>

	    <!---strat-slider-->
	    <script type="text/javascript" src="js/jquery.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="css/slider-style.css" />
		<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
		<!---//strat-slider-->
		<!---start-login-script-->
		<script src="js/login.js"></script>
		<!---//End-login-script-->
		<!---768px-menu-->
		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
		<script type="text/javascript" src="js/jquery.mmenu.js"></script>
			<script type="text/javascript">
				//	The menu on the left
				$(function() {
					$('nav#menu-left').mmenu();
				});
			</script>
		<!---//768px-menu-->
	</head>

	<body>
		<?php include 'header.php'; ?>
			
		<!--start-banner-->
		<div class="content">
			<div class="main">
				<div class="pad">
					<h3>找回密码</h3>
					<form id="ClaimpwdForm" action="phpmailer/sendemail.php" method="get">
						<div class="box">
							<div class="mail">
									<span>您的邮箱: </span> <input type="text" id="claimemail" name="claimemail">
							</div>		
							<div class="button">
								<a href="#" class="button1" onClick="checkClaimPwdEmail();">找回密码</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!---//End-mid-grids-->
		
		<!---start-bottom-footer-grids-->
		<?php include 'footer.php'; ?>

		<!---//End-wrap-->
	</body>
</html>

