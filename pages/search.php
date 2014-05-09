<?php 
	session_start();
	
	if (!isset($_SESSION['islogin']) || $_SESSION['islogin']!==true) {
		echo "<script language=javascript>alert ('访问前请先登录。');</script>";
		echo '<script language=javascript>window.location.href="index.php"</script>'; 
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>拼车晓位 | 搜索</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/search.css" type='text/css'/>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png" />
		<script type="application/x-javascript"> 
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
		</script>

		<script src="js/My97DatePicker/WdatePicker.js" type="text/javascript" language="javascript"></script>
	    
	    <!---strat-slider---->
	    <script type="text/javascript" src="js/jquery.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="css/slider-style.css" />
		<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
		<!---//strat-slider---->
		<!---start-login-script-->
		<script src="js/login.js"></script>
		<!---//End-login-script-->
		<!-----768px-menu---->
		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
		<script type="text/javascript" src="js/jquery.mmenu.js"></script>
			<script type="text/javascript">
				//	The menu on the left
				$(function() {
					$('nav#menu-left').mmenu();
				});
			</script>
		<!-----//768px-menu---->
	</head>

	<body>
		<?php include 'header.php'; ?>
			
		<!--start-banner-->
		<div class="content">
			<div class="main">
				<div class="searcher-pad">
					<div id="search-pad-left">
						<h3>
							搜索栏
						</h3>	
						<div class="search-bars">
							<div class="start_pos">
								<label class="label_start">
									出发地：
								</label>
								<select id="select_start">
									<{html_options values=$loc_ids output=$loc_names selected="1"}>
								</select>
								<!-- input type="text" class="input_pos" id="input_start" -->
							</div>
							<div class="end_pos">
								<label class="label_end">
									目的地：
								</label>
								<select id="select_start">
									<{html_options values=$loc_ids output=$loc_names selected="2"}>
								</select>
							</div>
						</div>
						<div class="search-bars">
							<div class="go_date">
								<label class="label_date">
									出发时间：
								</label>
								<input class="Wdate" onclick="WdatePicker({minDate:'%y-%M-{%d}'})" realValue My97Mark="false">
							</div>
						</div>
						<div class="filter-bars">
							<div id="chk-type">类型:
								<input type="checkbox" id="chk-pick" value="pick" checked="checked" />带人
								<input type="checkbox" id="chk-gotpicked" value="picked" checked="checked" />乘车
							</div>
							
							<div id="rad-departtime" class="rad-fil">出发时间:
								<input type="radio" name="rad-filter" value="asc" checked="checked"/> 最早
								<input type="radio" name="rad-filter" value="des" /> 最晚
							</div>
							<div id="rad-price" class="rad-fil">价格:
								<input type="radio" name="rad-filter" value="asc" /> 升序
								<input type="radio" name="rad-filter" value="des" /> 降序
							</div>
							<div id="rad-pubtime" class="rad-fil">发布时间:
								<input type="radio" name="rad-filter" value="asc" /> 最早
								<input type="radio" name="rad-filter" value="des" /> 最晚
							</div>
							
						</div>
					</div>
					
				</div>
				<div id="results">
					<div id="search-pad-right">
							结果中没有找到满意的拼车？<a href="#">主动发布信息！</a>
					</div>
					
					<{foreach $trips_bytime as $trip}>
					<!-- use php to repeat -->
					<hr style="border:1px dashed gray;" />
					<div class="result">
						<div class="result-driver-photo">
							<div class="div-photo">
								<img class="driver-photo" alt="Driver Photo" src="../upload/photo/<{$trip['driverId']}>" onerror="javascript:this.src='../images/default_user.jpg'" width="50" height="50">
							</div>
							<div class="div-driver">
								<lable class="lab-driver"><{$trip['driverName']}></lable>
							</div>
						</div>
						<div class="result-locations">
							<a class="lab-loc"><{$trip['startName']}>&#8594;<{$trip['endName']}></a>
						
							<div class="result-time"><{$trip['timeGo']}></div>
							
							<{if $trip['price'] lte 10}>
							<div class="result-price-cheap">&yen;<label><{$trip['price']}></label></div>
							<{elseif $trip['price'] gt 30}>
							<div class="result-price-expensive">&yen;<label><{$trip['price']}></label></div>
							<{else}>
							<div class="result-price-normal">&yen;<label><{$trip['price']}></label></div>
							<{/if}>
						
						</div>
					</div>		
					<{/foreach}>
					
					<div class="divclear"></div>
				</div>
			</div>
		</div>
		<!---//End-mid-grids-->
		
		<!---start-bottom-footer-grids-->
		<?php include 'footer.php'; ?>

		<!---//End-wrap-->
	</body>
</html>

