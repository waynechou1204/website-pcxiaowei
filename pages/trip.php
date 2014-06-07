<?php 
	session_start();
	if (!isset($_SESSION['islogin']) || $_SESSION['islogin']!==true) {
		echo '<script language=javascript> alert("访问前请先登录"); </script>';
		echo '<script language=javascript>window.location.href="index.php"</script>'; 
	}
	if (!isset($_GET['tripid'])) {
		echo '<script language=javascript> alert("访问前请先选择行程"); </script>';
		echo '<script language=javascript>window.location.href="search.php"</script>'; 
	}
?>

<?php include 'loadSearchData.php'; ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>拼车晓位 | 行程</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/trip.css" type='text/css'/>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		
		<link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png" />
		<script type="application/x-javascript"> 
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
		</script>

		<!-- my script -->
		<script src="js/My97DatePicker/WdatePicker.js"></script>
	    <script src="http://api.map.baidu.com/api?v=2.0&ak=QcFbQZqjluY3uR9pGdNUlmWG"></script>

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
			
		<?php $trip=loadTripData($_GET['tripid']); ?>
		<!--start-banner-->
		<div class="content">
			<div class="main">
				<div class="searcher-pad">
					<div id="trip-pad-left">
						<h3>
							行程
						</h3>	
						<div class="trip-bars">
							<div id="rad-fil">类型:
								<?php 
									if ($trip['TYPE']=="picked"){
										echo '<label class="lab-tripresult-picked" style="background:#fffafa">求车</label>';
									}else{
										echo '<label class="lab-tripresult-pickup" style="background:#f0ffff">出车</label>';
									}
								?>
							</div>
						</div>
						<div id="div-start-end" class="trip-bars">
							<label>行程路线: </label>
							<label class="lab-tripresult">
								<?php 
									$start_loc=loadLocationData($trip['START_LOCATION']);
									$end_loc=loadLocationData($trip['END_LOCATION']);
									echo "<label id=\"lab-startloc\">".$start_loc['NAME']."</label>"
									    ."  &#8594;  "
									    ."<label id=\"lab-endloc\">".$end_loc['NAME']."</label>";
								?>	
							</label>		
						
							<div style="clear:both"></div> 
						</div>
						<div class="trip-bars">
							<div class="go_date">
								<label class="label_date">
									出发日期:
								</label>
								<label class="lab-tripresult">
									<?php echo $trip['DEPART_DATE']; ?>
								</label>
							</div>
							<div style="clear:both"></div> 
						</div>
						<div class="trip-bars">
							<div id="select-departtime">
								<label>出发时间:</label>
								<label class="lab-tripresult">
									<?php echo $trip['DEPART_TIME']; ?>
								</label>
							</div>
						</div>
						
						<div id="div-freeseats" class="trip-bars">
							<?php 
								if ($trip['TYPE']=="picked"){
									echo '<label>同行人数: </label>';
								}else{
									echo '<label>空余座位: </label>';
								}
							?>
							<label class="lab-tripresult">
								<?php echo $trip['SEAT_NUM']; ?>
							</label>
						</div>

						<div id="div-price" class="trip-bars">
							<label>价格: </label>
							<label class="lab-tripresult-prix">
								<?php echo $trip['PRICE_ONEWAY']; ?> 
							</label>	元/人
						</div>

						<div id="div-pubtime" class="trip-bars">
							<label>发布时间：</label>
							<?php echo $trip['PUB_TIME'];?>
						</div>
						<form action="doAddTripInterestNum.php" method="get" onsubmit="return getOwnerInfo();">
							<div id="div-submit" class="trip-bars">
								<?php 
									$owner = loadOwnerData($trip['OWNER_ID']);
									echo "<div id=\"ownername\" style=\"display:none\">".$owner['name']."</div>";
									echo "<div id=\"ownerphone\" style=\"display:none\">".$owner['telephone']."</div>";
									echo "<input name=\"tripid\" style=\"display:none\" value=\"". $trip['TRIP_ID'] ."\" /> ";
								?>
								<input type="submit" id="sub-publish" value="感兴趣" />
							</div>
						</form>
					</div>
					<div id="trip-pad-right">
						<script type="text/javascript">getBaiduMap();</script>
						<div id="baidumap"></div>
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

<script type="text/javascript">
function getBaiduMap(){
	var start = document.getElementById("lab-startloc").innerHTML;
	var end = document.getElementById("lab-endloc").innerHTML;
	// 百度地图API功能
	var map = new BMap.Map("baidumap");            // 创建Map实例
	map.centerAndZoom("上海",15);                     // 初始化地图,设置中心点坐标和地图级别。

 	var driving = new BMap.DrivingRoute(map, {renderOptions:{map: map, autoViewport: true}});
	driving.search(start, end);
    
    map.addControl(new BMap.ScaleControl());                    // 添加默认比例尺控件
	
    map.enableScrollWheelZoom();                            //启用滚轮放大缩小
}

function getOwnerInfo(){
	var name = document.getElementById("ownername").innerHTML;
	var phone = document.getElementById("ownerphone").innerHTML;
	alert("注意：请仔细确认行程的类型！\n\n发布人："+name+"\n\n联系电话: "+phone+"\n\n请尽快与发布人联系，确定行程");
	return true;
}
</script>