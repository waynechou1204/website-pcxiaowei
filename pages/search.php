<!DOCTYPE HTML>
<html>
	<head>
		<title>晓位 | 搜索</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/search.css" type='text/css'/>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png" />
		<script type="application/x-javascript"> 
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
		</script>

		<script src="../js/My97DatePicker/WdatePicker.js" type="text/javascript" language="javascript"></script>
	    
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
		<!---start-wrap---->
		<!------start-768px-menu---->
		<div id="page">
				<div id="header">
					<a class="navicon" href="#menu-left"> </a>
				</div>
				<nav id="menu-left">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="features.html">Features</a></li>
						<div class="clear"> </div>
					</ul>
				</nav>
		</div>
		<!------start-768px-menu---->
			<!---start-header---->
			<div class="header">
				<div class="wrap">
				<div class="header-left">
					<div class="logo">
						<a href="index.php">拼车晓位</a>
					</div>
				</div>
				<div class="header-right">
					<div class="top-nav">
					<ul>
						<li><a href="index.html">发布信息</a></li>
						<li><a href="about.html">关于网站</a></li>
						<li><a href="features.html">联系我们</a></li>
					</ul>
				</div>
				<div class="sign-ligin-btns">
					<ul>
						<li id="signupContainer"><a class="signup" id="signupButton" href="#"><span>注册</span></a>
							 <div class="clear"> </div>
				                <div id="signupBox">                
				                    <form id="signupForm" action="search.php" method="post">
				                        <fieldset id="signupbody">
				                        	<fieldset>
				                                <label for="username">真实姓名 <span>*</span></label>
				                                <input type="text" name="username" id="signupusername" />
				                            </fieldset>
				                            <fieldset>
				                                <label for="email">邮箱地址 <span>*</span></label>
				                                <input type="text" name="email" id="signupemail" />
				                            </fieldset>
				                            <fieldset>
				                                <label for="phone">手机号 <span>*</span></label>
				                                <input type="text" name="phone" id="signupphone" />
				                            </fieldset>
				                            <fieldset>
				                                <label for="password">请输入密码 <span>*</span></label>
				                                <input type="password" name="password" id="signuppassword" />
				                            </fieldset>
				                            <fieldset>
				                                <label for="password">确认密码 <span>*</span></label>
				                                <input type="password" name="password" id="signuppassword1" />
				                            </fieldset>
				                            <input type="submit" id="signup" value="立即注册" />
				                        </fieldset>
				                    </form>
				                </div>
				            <!-- Login Ends Here -->
						</li>
						<li id="loginContainer"><a class="login" id="loginButton" href="#"><span>登录</span></i></a>
							 <div class="clear"> </div>
				                <div id="loginBox">                
				                    <form id="loginForm" action="search.php" method="post">
				                        <fieldset id="body">
				                            <fieldset>
				                                <label for="email">邮箱地址</label>
				                                <input type="text" name="email" id="email" />
				                            </fieldset>
				                            <fieldset>
				                                <label for="password">密码</label>
				                                <input type="password" name="password" id="password" />
				                            </fieldset>
				                            <label class="remeber" for="checkbox"><input type="checkbox" id="checkbox" />记住我</label>
				                            <input type="submit" id="login" value="登录" />
				                        </fieldset>
				                        <span><a href="#">忘记密码？</a></span>
				                    </form>
				                </div>
				            <!-- Login Ends Here -->
						</li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
			</div>
			</div>
			<!---//End-header---->
			<!----start-banner---->
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
									<input type="checkbox" id="chk-pick" value="pick" checked="checked" />捡人
									<input type="checkbox" id="chk-gotpicked" value="picked" checked="checked" />被捡
								</div>
								<div id="rad-price">价格:
									<input type="radio" name="price" value="asc" checked="checked"/> 升序
									<input type="radio" name="price" value="des" /> 降序
								</div>
							</div>
						</div>
						<div id="search-pad-right">
								结果中没有找到满意的拼车？<a href="#">主动发布信息！</a>
						</div>
					</div>
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
				</div>
			</div>
			<!---//End-mid-grids--->
			<!---start-bottom-footer-grids---->
			<div class="footer-grids">
				<div class="wrap">
					<div class="footer-grid">
						<h3>Quick Links</h3>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">About Features</a></li>
							<li><a href="#">Login</a></li>
							<li><a href="#">Sign Up</a></li>
						</ul>
					</div>
					<div class="footer-grid">
						<h3>More</h3>
						<ul>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms and Conditions</a></li>
						</ul>
					</div>
					<div class="footer-grid">
						<h3>Connect With Us</h3>
						<ul class="social-icons">
							<li><a class="facebook" href="#"> </a></li>
							<li><a class="twitter" href="#"> </a></li>
							<li><a class="youtube" href="#"> </a></li>
						</ul>
						<p class="copy-right">Template by <a href="#">W3layouts</a></p>
					</div>
					<div class="footer-grid">
						<h3>Newsletter</h3>
						<p>Subscribe to our newsletter to keep up-to-date with all the latest news.</p>
						<!--form>
							<input type="text" class="text" value="Your Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name';}">
							<input type="text" class="text" value="Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}">
							<input type="submit" value="subscribe" />
						</form-->
					</div>
					<div class="clear"> </div>
				</div>
			</div>
			<!---//End-bottom-footer-grids---->
			</div>
			<!----//End-content--->
		<!---//End-wrap---->
	</body>
</html>

