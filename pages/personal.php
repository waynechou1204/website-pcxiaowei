<?php 
	session_start();
	if (!isset($_SESSION['islogin']) || $_SESSION['islogin']!==true) {
		echo '<script language=javascript> alert("访问前请先登录"); </script>';
		echo '<script language=javascript>window.location.href="index.php"</script>'; 
	}
?>

<?php include 'loadSearchData.php'; ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>拼车晓位 | 我的页面</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/personal.css" type='text/css'/>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		
		<link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png" />
		<script type="application/x-javascript"> 
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
		</script>

		<!-- my script -->
		<script src="js/My97DatePicker/WdatePicker.js"></script>
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
				<div class="personal-pad">
					<h3>
						行程
					</h3>	
					<div id="person-info-pad">
						<ul class="tabs">
							<li>
								<input type="radio" name="tabs" id="tab1" checked />
								<label for="tab1">个人信息</label>
								<div id="tab-content-info" class="tab-content">
									<form id="signupForm" action="register.php" method="post" enctype="multipart/form-data" onsubmit="return checkForm();">
			                        	<div class="inp">
				                            姓名 <lable id="hint-name" class="hint">*</lable>
				                            <input type="text" name="username" id="signupusername" value="<?php echo $_SESSION['username'];?>" onblur="checkName()"/>
				                        </div>
			                            <div class="inp">
			                                邮箱地址 <lable id="hint-email" class="hint">*</lable>
			                                <input type="text" name="email" id="signupemail" value="<?php echo $_SESSION['useremail'];?>"onblur="checkEmail()"/>
			                            </div>
			                            <div class="inp">
			                                手机号 <lable id="hint-phone" class="hint">*</lable>
			                                <input type="text" name="phone" id="signupphone" value="<?php echo $_SESSION['userphone'];?>" onblur="checkPhone()"/>
			                            </div>
			                           
			                            <input type="submit" id="modify" value="修改" />
			                        	
			                    	</form>
								</div>
								<div class="divclear"></div>
							</li>
							<li>
								<input type="radio" name="tabs" id="tab2" />
								<label for="tab2">修改密码</label>
								<div id="tab-content1" class="tab-content">
									<p>pwd</p>
								</div>
							</li>
							<li>
								<input type="radio" name="tabs" id="tab3" />
								<label for="tab3">发布的行程</label>
								<div id="tab-content1" class="tab-content">
									<p></p>
								</div>
							</li>
							<li>
								<input type="radio" name="tabs" id="tab4" />
								<label for="tab4">XXXX</label>
								<div id="tab-content2" class="tab-content">
									<p>选项卡内容 2</p>
								</div>
								</li>
							</ul>
					</div>
					<div style="clear:both"></div> 
				</div>
			</div>
		</div>
		
		<!---//End-mid-grids-->
		
		<!---start-bottom-footer-grids-->
		<?php include 'footer.php'; ?>

		<!---//End-wrap-->
	</body>
</html>