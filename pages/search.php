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
		<title>拼车晓位 | 搜索</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/search.css" type='text/css'/>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png" />
		<script type="application/x-javascript"> 
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
		</script>

		<!-- my script -->
		<script src="js/My97DatePicker/WdatePicker.js"></script>
	    <script src="js/jquery-ajax-gettrips.js"></script>

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

	<body onload="gettrips()">
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
								<select id="select_start" onchange="gettrips()">
									<?php 
										$locations = loadlocations();
										$type = "0";
										foreach ($locations as $loc) {
											if ($loc['LOCATION_TYPE'] != $type) {
												if ($type != "0") {
													echo '</optgroup>';
												}
												echo '<optgroup label="'.$loc['LOCATION_TYPE'].'">';
												$type = $loc['LOCATION_TYPE'];
											} 
												
											echo '<option value ="'.$loc['LOCATION_ID'].'">'.$loc['NAME'].'</option>';
										}
										echo '</optgroup>';
										unset($loc);
									?>
								</select>
								<!-- input type="text" class="input_pos" id="input_start" -->
							</div>
							<div class="end_pos">
								<label class="label_end">
									目的地：
								</label>
								<select id="select_end" onchange="gettrips()">
									<?php 
										$type = "0";
										$i=0;
										foreach ($locations as $loc) {
											if ($loc['LOCATION_TYPE'] != $type) {
												if ($type != "0") {
													echo '</optgroup>';
												}
												echo '<optgroup label="'.$loc['LOCATION_TYPE'].'">';
												$type = $loc['LOCATION_TYPE'];
											} 
											if ($i==1) 
											{
												echo '<option value ="'.$loc['LOCATION_ID'].'"selected="selected">'.$loc['NAME'].'</option>';
											}
											else{
												echo '<option value ="'.$loc['LOCATION_ID'].'">'.$loc['NAME'].'</option>';	
											}	
											$i++;
										}
										echo '</optgroup>';
										unset($locations);
										unset($loc);
									?>
								</select>
							</div>
						</div>
						<div class="search-bars">
							<div class="go_date">
								<label class="label_date">
									出发时间：
								</label>
								<input class="Wdate" id="departdate" onchange="gettrips()" onclick="WdatePicker({minDate:'%y-%M-{%d}'})" realValue My97Mark="false">
							</div>
						</div>
						<div class="filter-bars">
							<div id="chk-type">类型:
								<input type="checkbox" id="chk-pick" value="pick" checked="checked" onclick="gettrips()"/>出车
								<input type="checkbox" id="chk-gotpicked" value="picked" checked="checked" onclick="gettrips()"/>求车
							</div>
							
							<div id="rad-departtime" class="rad-fil">出发时间:
								<input type="radio" name="rad-filter" value="asc" checked="checked" onchange="gettrips()"/> 最早
								<input type="radio" name="rad-filter" value="des" onchange="gettrips()"/> 最晚
							</div>
							<div id="rad-price" class="rad-fil">价格:
								<input type="radio" name="rad-filter" value="asc" onchange="gettrips()"/> 升序
								<input type="radio" name="rad-filter" value="des" onchange="gettrips()"/> 降序
							</div>
							<div id="rad-pubtime" class="rad-fil">发布时间:
								<input type="radio" name="rad-filter" value="asc" onchange="gettrips()"/> 最早
								<input type="radio" name="rad-filter" value="des" onchange="gettrips()"/> 最新
							</div>
							
						</div>
					</div>
					
				</div>
				<div id="results">
					<div id="result-pad-right">
							结果中没有找到满意的拼车？<a href="#">主动发布信息！</a>
							<label style="background:#f0ffff">出车</label>
							<label style="background:#fffafa">求车</label>
					</div>
					
					<!-- use php to repeat -->
					<div id="search-results">
						<!-- results of search, loaded by js -->
					</div>		
					
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

