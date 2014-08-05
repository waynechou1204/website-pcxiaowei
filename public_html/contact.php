<?php 
	session_start();
	
	if (!isset($_SESSION['islogin']) || $_SESSION['islogin']!==true) {
		echo '<script language=javascript> alert("访问前请先登录"); </script>';
		echo '<script language=javascript>window.location.href="index.php"</script>'; 
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>拼车晓位 | 联系我们</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/contact.css" type='text/css'/>

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
				<div class="box">
					<div>
						<h3>联系我们</h3>
						<form id="ContactForm" action="phpmailer/sendemail.php" method="post">
							<div>
								<div class="wrapper">
									<span>您的姓名: </span> <?php echo $_SESSION['username']; ?>
								</div>
								<div class="wrapper">
									<span>您的邮箱: </span> <?php echo $_SESSION['useremail']; ?>
								</div>
								<div class="textarea_box">
									<span>您的留言: </span>
									<textarea id="message" name="textarea" cols="1" rows="1" onfocus="if(value=='请输入正文'){value=''}" onblur="if(value==''){value='请输入正文'}">请输入正文</textarea>				
								</div>
								<a href="#" id="sendbtn" class="button1" onClick="checkMessageContent();">发送</a>
								<div style="clear:both;"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!---//End-mid-grids-->
		
		<!---start-bottom-footer-grids-->
		<?php include 'footer.php'; ?>

		<!---//End-wrap-->
	</body>
</html>

