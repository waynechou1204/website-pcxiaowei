<{* Smarty *}>
<html id="tongjicovoit" lang="zh-cn">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../js/My97DatePicker/skin/WdatePicker.css" />
		
		<link rel="shortcut icon" href="../images/icon.ico" type="image/png">
		
		<script src="../js/My97DatePicker/WdatePicker.js" type="text/javascript"></script>
		
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  		<link rel="Stylesheet" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		
  		<script>
		  $(function() {
			var availableTags = [];
				
		    $( "#tag" ).autocomplete({source: availableTags});
		  });
	  	</script>
  		
		<title>同济拼车网</title>
	</head>
	
	<body id="tongjicovoit-home">
		<div id="page">
			<div id="header" class="clearfix">
				
				<a href=".">
						<img class="logo" src="../images/Covoitlogo.jpg" alt="Tongji Car Sharing"/>
				</a>
				
				<ul class="nav-user">
					<li class="nav-user-main">
						<a href="../htdocs/registerPersonal.php">
							<{$username}>
						</a>
					</li>
					<li class="divider">&nbsp;</li>
					<li class="nav-user-login">
						<a href="../htdocs/login.php">
							<{$loginout}>
						</a>
					</li>
				</ul>
			</div>
						
			<div id="content" class="clearfix">
				<div id="home-search-publish" class="container_1">
					<div class="searcher-pad">
						<h3>
							我要坐车
						</h3>	
						<div id="search-bars">
							<div class="start_pos">
								<label class="label_start" style="color:white;">
									出发地：
								</label>
								<select id="select_start">
									<{html_options values=$loc_ids output=$loc_names selected="1"}>
								</select>
								<!-- input type="text" class="input_pos" id="input_start" -->
							</div>
							<div class="end_pos">
								<label class="label_end" style="color:white;">
									目的地：
								</label>
								<select id="select_end">
									<{html_options values=$loc_ids output=$loc_names selected="2"}>
								</select>
							</div>
							<div class="go_date">
								<label class="label_date" style="color:white;">
									出发日期：
								</label>
								<input class="Wdate" onclick="WdatePicker({minDate:'%y-%M-{%d}'})" realValue My97Mark="false">
							</div>
							<div id="search-button">
								<button type="submit" class="button_search">
									<span>
										<span>搜索</span>
									</span>
								</button>
							</div>
						</div>
					</div>
					<div id="publisher-pad">
						<a id="publish-button" href="/inscrip-publication">
							我来开车
						</a>
					</div>
				</div>
				<div id="main-content">
					<div id="result-and-activity">
						<div id="results">
							<div id="result-by-time">
								<div class="lab-by">
									<label>最近出发的拼车</label>
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
							</div>
							<div id="result-by-price">
								<label class="lab-by">最便宜的拼车</label>
								
								<{foreach $trips_byprice as $trip}>
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
							</div>
							<div class="divclear"></div>
						</div>
						<div id="activities">
						</div>	
					</div>
					
					<div id="intro-and-ads">
						<div id="home-co2-counter" class="ads">
        						<span class="sprite-home-co2"></span>
        						<p>
            						一起来参与吧:<br>我们的 <strong>每一次</strong> 拼车可以<br>平均减少 <strong>50公斤 </strong> CO<sub>2</sub>的排放 
        						</p>
    					</div>
    					<div id="publicAd" class="ads">
							<script type="text/javascript">var yibo_id=36985;</script>
							<script type="text/javascript" src="http://yibo.iyiyun.com/yibo.js?random=5334"></script>
						</div>
						
        				
					</div>
					<div class="divclear"></div>
				</div>
			</div>
			
			<div id="footer">
				<label>foot</label>
				<label>foot</label>
				
			</div>
		</div>
	</body>
</html>