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

	<link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png" />

	<link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" />
	<link rel='stylesheet' type='text/css' href='css/onepage-scroll.css'>
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel='stylesheet' type='text/css' href="css/header.css" />
	<link rel="stylesheet" type="text/css" href="css/index.css" />	

	<link rel='stylesheet' type='text/css' href="css/style.css"/>		
	<!-- <link rel="stylesheet" type="text/css" href="css/footer.css" /> -->

	<script src="js/jquery.min.js"></script>	
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.onepage-scroll.min.js"></script>
	
	<script>
	  $(document).ready(function(){
      $(".main").onepage_scroll({
        sectionContainer: "section",
        responsiveFallback: 600,
        loop: false
      });
		});		
	</script>
  
</style>
</head>

<body>

	<?php include 'header.php'; ?>
	<!---start-content-->
	<div class="wrapper">
		<div class="main">
			<section class="page1">
				<div id="firstPageImage" class="bg" display="relative">
					<div class="slogan center">
						<h2>一起来拼车</h2>
						<p>试试吧</p>
						<div class="heightBlank"></div>
						<a href="search.php" class="slogan-link center">开始使用</a>
					</div>
				</div> 
			</section>
			<section class="page2">
				<div class="container">
					<div class="content">
						<div class="wrap">
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
			</section>
		</div>
	</div>
			
			
	<?php //include 'footer.php'; ?>

	
</body>
</html>

