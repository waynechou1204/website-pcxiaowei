<?php 
	session_start(); 
	
?>

<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
	<head>
		
		<title>拼车晓位 | 首页</title>

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<!-- weibo auth -->
		<meta property="wb:webmaster" content="9ab6704cd473f7e7" />

		<!---768px-menu-->
		<link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
				
		<link rel='stylesheet' type='text/css' href="css/style.css"/>
		<link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png" />

		<link rel="stylesheet" type="text/css" href="css/index.css" />
		
		<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=2080267226" type="text/javascript" charset="utf-8"></script>	
	</head>

	<body>
		
		<?php include 'header.php'; ?>
		<!---start-content-->
		<div id="firstPageImage" class="bg" display="relative">
			<div class="slogan center">
				<h2>一起来拼车</h2>
				<p>试试吧</p>
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

	</body>
</html>

