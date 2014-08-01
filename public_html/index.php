<?php 
	session_start(); 
	
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>拼车晓位 | 首页</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

		<!-- my js -->
		<script src="js/checkFormat.js"></script>
	    
	    <!---strat-slider-->
	    <!-- jquery -->
	    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script-->
	    <script src="js/jquery.min.js"></script>

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
		
			$(window).load(function(){
				$('.loadingdiv').fadeOut(); 	
			});
		</script>
		<!---//768px-menu-->
	</head>
	<body>
		
		<?php include 'header.php'; ?>
		
		<!-- Loading image -->
		<div class="loadingdiv"></div>

		<!--start-banner-->
		<div class="text-slider">

			<div class="wrap" > 
				<!---start-da-slider-->
				<div id="da-slider" class="da-slider">
						<div class="da-slide">
							<h2>出发！</h2>
							<p> 风景总在路上</p>
							<a href="search.php" class="da-link">开始使用</a>
						</div>
						<div class="da-slide">
							<h2>一起拼车吧</h2>
							<p> 方便，环保，还能交友！</p>
							<a href="about.php" class="da-link">关于网站</a>
						</div>
						<div class="da-slide">
							<h2>程序猿君说：</h2>
							<p> 网站上线啦，快来吐槽！</p>
							<a href="contact.php" class="da-link">我有建议</a>
						</div>
						<!--nav class="da-arrows">
							<span class="da-arrows-prev"></span>
							<span class="da-arrows-next"></span>
						</nav-->
				</div>
				<script type="text/javascript" src="js/jquery.cslider.js"></script>
				<script type="text/javascript">
					$(function() {
						$('#da-slider').cslider({
							autoplay	: true,
							bgincrement	: 450,
							interval: 10000
						});
					
					});
				</script>
			</div>
		</div>

		
			<!---//End-da-slider-->
		<!--//End-banner-->
		<!---start-content-->
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
						<div class="border hide"> </div>
						<a href="search.php">与拼友取得联系</a>
					</div>
					<div class="top-grid hide">
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
			

		<?php include 'footer.php'; ?>

		<!---//End-wrap-->
	</body>
</html>

