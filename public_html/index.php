<?php 
	session_start(); 
	
?>

<!DOCTYPE HTML>
<html>
	<head>
		
		<title>拼车晓位 | 首页</title>

		<!---768px-menu-->
		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png" />
	    <link rel="stylesheet" type="text/css" href="css/slider-style.css" />
		<link rel="stylesheet" type="text/css" href="css/index.css" />
	</head>

	<body>
		
		<?php include 'header.php'; ?>
		<!---start-content-->
		<div id="firstPageImage" class="bg" display="relative">
			<div class="slogan center">
				<h2>自驾、打的都能拼车</h2>
				<p> 来试试吧！</p>
				<div class="heightBlank"></div>
				<a href="search.php" class="slogan-link center">开始使用</a>
			</div>
		</div>
		<div class="container">
			<div class="content">
			<div class="wrap">
				<!--- start-top-grids-->
				<div class="top-grids">
					<div class="top-grid">
						<div class="product-pic">
							<img src="images/pub-search.jpg" title="pubsearch" alt="publish or search"/>
						</div>
						<span><label>1</label></span>
						<div class="border"> </div>
						<a href="search.php">发布/搜索拼车信息</a>
					</div>
					<div class="top-grid">
						<div class="product-pic">
							<img src="images/phone.jpg" title="phone" alt="contact the pcer"/>
						</div>
						<span><label>2</label></span>
						<div class="border"> </div>
						<a href="search.php">与拼友取得联系</a>
					</div>
					<div class="top-grid">
						<div class="product-pic">
							<img src="images/sharecar.jpg" title="sharecar" alt="share the car"/>
						</div>
						<span><label>3</label></span>
						<a href="search.php">按计划出发</a>
					</div>
					<div class="clear"> </div>
				</div>
				</div>

				<div class="clear"> </div>
			</div>		
		</div>
		
			

		<?php include 'footer.php'; ?>

		<!---//End-wrap-->

	<!-- scripts -->
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	
	<!-- my js -->
	<script src="js/checkFormat.js"></script>
	    
	<!---strat-slider-->
    <!-- jquery -->
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script-->
    <script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
	<!---//strat-slider-->
	<!---start-login-script-->
	<script src="js/login.js"></script>
	<!---//End-login-script-->
	<script type="text/javascript" src="js/jquery.mmenu.js"></script>
	<script type="text/javascript">
		//	The menu on the left
		$(function() {
			$('nav#menu-left').mmenu();
		});
	
		//$(window).load(function(){
			//$('.loadingdiv').fadeOut(); 
			//$('.text-slider').fadeIn();	
		//});
	</script>
	<!---//768px-menu-->	
	    
	</body>
</html>

