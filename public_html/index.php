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

	<!-- <link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" /> -->
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
  
</head>

<body>

	<?php include 'header.php'; ?>
	<!---start-content-->
	<div class="wrapper">
		<div class="main">
			<section class="page1">
				<!-- <div id="firstPageImage" class="bg" display="relative"> -->
					<div class="slogan center">
						<img src="images/pcxw_logo.png" alt="PCxiaowei" width="150px" height="150px">
						<h2>一起来拼车</h2>
						<p>试试吧</p>
						<div class="heightBlank"></div>
						<a href="search.php" class="slogan-link center">开始使用</a>
					</div>
				<!-- </div>  -->
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
			<section class="page3">
				latest trips
			</section>
			<section class="page4">
				<div class="container">
					<div class="content">
						<h1>为什么</h1>
						<h1>怎么做</h1>
						<h1>是什么</h1>

						<h3>简介</h3>
						<p>
							<b>拼车晓位</b>致力于解决城市出行问题。为市民大众，尤其是经常需要通勤的上班族、学生等人群的出行提供一个便捷的公益平台。网站鼓励大家参与其中，以共同分担出行成本，减少尾气污染，而非盈利为目的。
						</p>
						
						<h3>功能使用</h3>
						<p>
							<b>拼车晓位</b>是一个单纯的信息平台，用户在网站注册之后便可使用网站的各项功能。
						</p>
						<h4>查询与发布</h4>
						<p>用户通过设定出发时间、起止地点、价格等过滤条件，即可搜寻或发布相关的拼车信息。</p>
						<h4>确认行程</h4>
						<p>在出发前，用户之间通过自行沟通协商的方法，确定具体的出发地点、时间等事宜。</p>
						<h4>完成行程</h4>
						<p>网站目前建议用户按照网站发布的价格分摊费用，未来可能将提供在线支付、网站第三方监管、用户信用评价体系等功能，完善业务的便捷性和安全性。</p>
						
						<h3>
							责任
						</h3>
						<p>
							<b>拼车晓位网</b>是一个公益平台，宗旨是为了方便大众出行，共同分担出行成本，不鼓励黑车等非法营运情况。目前所有的出行均为用户自行协商确定，网站不承担任何责任，希望广大用户自行斟酌。日后网站方面会进一步完善业务流程，使这项业务能够更好地服务用户，让拼车更安全、方便。
						</p>
						<h3>
							程序猿君说：
						</h3>
						
						<p>有任何意见或建议请联系我，非常欢迎！ E-mail: <a href="contact.php">admin@pcxiaowei.com</a></p>
					</div>
				</div>
			</section>
		</div>
	</div>
			
			
	<?php //include 'footer.php'; ?>

	
</body>
</html>

