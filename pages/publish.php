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
		<title>拼车晓位 | 发布</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/publish.css" type='text/css'/>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png" />
		<script type="application/x-javascript"> 
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
		</script>

		<!-- my script -->
		<script src="js/My97DatePicker/WdatePicker.js"></script>
	    <script src="js/jquery-ajax-gettrips.js"></script>
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

	<body onload="showFormByType(1)">
		<?php include 'header.php'; ?>
			
		<!--start-banner-->
		<div class="content">
			<div class="main">
				<div class="searcher-pad">
					<div id="search-pad-left">
						<form action="dopublish.php" method="get" onsubmit="return checkPublishForm();">
						<h3>
							发布栏
						</h3>	
						<div class="publish-bars">
							<div id="rad-fil">类型:
								<input type="radio" class="rad-type" name="radtype" checked="checked" onchange="showFormByType(1)"/>出车
								<input type="radio" class="rad-type" name="radtype" onchange="showFormByType(2)"/>求车
							</div>
						</div>
						<div class="publish-bars">
							<div class="start_pos">
								<label class="label_start">
									出发地:
								</label>
								<select id="select_start">
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
									目的地:
								</label>
								<select id="select_end">
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
							<div style="clear:both"></div> 
						</div>
						<div class="publish-bars">
							<div class="go_date">
								<label class="label_date">
									出发日期:
								</label>
								<input class="Wdate" id="departdate" onclick="WdatePicker({minDate:'%y-%M-{%d}'})" realValue My97Mark="false">
							</div>
							<div style="clear:both"></div> 
						</div>
						<div class="publish-bars">
							<div id="select-departtime">
								<label>出发时间:</label>
								<select id="select_departtime_hour">
									<?php 
										for ($i=0; $i <24 ; $i++) { 
											echo '<option value="'.$i.'">'.$i.'</option>';
										}
									?>
								</select>
								时
								<select id="select_departtime_min">
									<?php 
										for ($i=0; $i <60 ; $i=$i+5) { 
											echo '<option value="'.$i.'">'.$i.'</option>';
										}
									?>
								</select>
								分
							</div>
						</div>
						
						<div id="div-freeseats" class="publish-bars">
							<!-- done by JS -->
						</div>

						<div id="div-price" class="publish-bars">
							<!-- done by JS -->
						</div>

						<div id="div-submit" class="publish-bars">
							<input type="submit" id="sub-publish" value="发布"/>
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

