<{* Smarty *}>
<html id="tongjicovoit" lang="zh-cn">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../js/My97DatePicker/skin/WdatePicker.css" />
		
		<link rel="shortcut icon" href="../images/icon.ico" type="image/png">
		<script src="../js/My97DatePicker/WdatePicker.js" type="text/javascript" language="javascript"></script>
		
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
				<div id="home-search-publish" class="container_1" clearfix>
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
								<select id="select_start">
									<{html_options values=$loc_ids output=$loc_names selected="2"}>
								</select>
							</div>
							<div class="go_date">
								<label class="label_date" style="color:white;">
									出发时间：
								</label>
								<INPUT class="Wdate" onclick="WdatePicker({minDate:'%y-%M-{%d}'})" realValue My97Mark="false">
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