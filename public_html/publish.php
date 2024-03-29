<?php 
	session_start();
	
	if (!isset($_SESSION['islogin']) || $_SESSION['islogin']!==true) {
		echo '<script language=javascript> alert("访问前请先登录"); </script>';
		echo '<script language=javascript>window.location.href="index.php"</script>'; 
	}
?>

<?php include 'php_functions/loadSearchData.php'; ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>拼车晓位 | 发布</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/publish.css" type='text/css'/>

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
								<input type="radio" class="rad-type" name="radtype" value="pickup" checked="checked" onchange="showFormByType(1)"/>出车
								<input type="radio" class="rad-type" name="radtype" value="picked" onchange="showFormByType(2)"/>求车
							</div>
						</div>
						<div id="div-start-end" class="publish-bars">
							<div class="start_pos">
								<label class="label_start">
									出发地点:
								</label>
								<select id="select_start" name="position_start">
									<?php 
										$locations = loadlocationsWithoutAll();
										$type = "0";
										foreach ($locations as $loc) {
											if ($loc['location_type'] != $type) {
												if ($type != "0") {
													echo '</optgroup>';
												}
												echo '<optgroup label="'.$loc['location_type'].'">';
												$type = $loc['location_type'];
											} 
												
											echo '<option value ="'.$loc['location_id'].'">'.$loc['name'].'</option>';
										}
										echo '</optgroup>';
										unset($loc);
									?>
								</select>
								<!-- input type="text" class="input_pos" id="input_start" -->
							</div>
							<div class="end_pos">
								<label class="label_end">
									目的地点:
								</label>
								<select id="select_end" name="position_end">
									<?php 
										$type = "0";
										$i=0;
										foreach ($locations as $loc) {
											if ($loc['location_type'] != $type) {
												if ($type != "0") {
													echo '</optgroup>';
												}
												echo '<optgroup label="'.$loc['location_type'].'">';
												$type = $loc['location_type'];
											} 
											if ($i==1) 
											{
												echo '<option value ="'.$loc['location_id'].'" selected="selected">'.$loc['name'].'</option>';
											}
											else{
												echo '<option value ="'.$loc['location_id'].'">'.$loc['name'].'</option>';	
											}	
											$i++;
										}
										echo '</optgroup>';
										unset($locations);
										unset($loc);
									?>
								</select>
							</div>
							<span id="position-hint"> </span>
							<div style="clear:both"></div> 
						</div>
						<div class="publish-bars">
							<div class="go_date">
								<label class="label_date">
									出发日期:
								</label>
								<input class="Wdate" id="departdate" name="departdate" onclick="WdatePicker({minDate:'%y-%M-{%d}'})" realValue My97Mark="false" />
							</div>
							<div style="clear:both"></div> 
						</div>
						<div class="publish-bars">
							<div id="select-departtime">
								<label>出发时间:</label>
								<select id="select_departtime_hour" name="hour">
									<?php 
										for ($i=0; $i <24 ; $i++) { 
											echo '<option value="'.$i.'">'.$i.'</option>';
										}
									?>
								</select>
								时
								<select id="select_departtime_min" name="minite">
									<?php 
										for ($i="00"; $i <"60" ; $i=$i+10) { 
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

