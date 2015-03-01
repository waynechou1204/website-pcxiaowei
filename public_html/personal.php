<?php 
	session_start();
	if (!isset($_SESSION['islogin']) || $_SESSION['islogin']!==true) {
		echo '<script language=javascript> alert("访问前请先登录"); </script>';
		echo '<script language=javascript>window.location.href="index.php"</script>'; 
	}
?>

<?php include 'php_functions/loadSearchData.php'; ?>

<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<title>拼车晓位 | 我的页面</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/personal.css" type='text/css'/>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png" />
		<script type="application/x-javascript"> 
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
		</script>

		<!---strat-slider-->
	    <!--script type="text/javascript" src="js/jquery.min.js"></script-->
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

		<!-- my script -->
		<script src="js/checkFormat.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	    
	</head>

	<body>
		<?php include 'header.php'; ?>
			
		<!--start-banner-->
		<div class="content">
			<div class="main">
				<div class="personal-pad">
					<h3>
						行程
					</h3>	
					<div id="person-info-pad">
					<ul class="nav nav-tabs nav-justified" id="myTab">
					    <li class="active"><a href="#profile" data-toggle="tab">个人信息</a></li>
						<li><a href="#modifpwd" data-toggle="tab">修改密码</a></li>
						<li><a href="#mypublish" data-toggle="tab">发布的行程</a></li>
					</ul>
						      
					<div class="tab-content">
					    <div class="tab-pane active" id="profile">
					    	<form id="signupForm" action="doModifyInfo.php" method="post" enctype="multipart/form-data" onsubmit="return checkNameEmailPhone('<?php echo $_SESSION['useremail'];?>');">
	                        	<input type="hidden" name="item" value="info" />  
	                        	
	                        	<div class="inp">
		                            姓名 <lable id="hint-name" class="hint">*</lable>
		                            <input type="text" name="username" id="signupusername" value="<?php echo $_SESSION['username'];?>" onblur="checkName()"/>
		                        </div>
	                            <div class="inp">
	                                邮箱地址 <lable id="hint-email" class="hint">*</lable>
	                                <input type="text" name="email" id="signupemail" value="<?php echo $_SESSION['useremail'];?>" onblur="checkEmail('<?php echo $_SESSION['useremail'];?>')"/>
	                            </div>
	                            <div class="inp">
	                                手机号 <lable id="hint-phone" class="hint">*</lable>
	                                <input type="text" name="phone" id="signupphone" value="<?php echo $_SESSION['userphone'];?>" onblur="checkPhone()" autocomplete="off"/>
	                            </div>
	                           
	                            <input type="submit" id="modifybutton" value="修改" />
	                        	
	                    	</form>
					    </div>
					    <div class="tab-pane" id="modifpwd">
					    	<form id="signupForm" action="doModifyInfo.php" method="post" enctype="multipart/form-data" onsubmit="return checkPwd();">
	                        	<input type="hidden" name="item" value="pwd" /> 
	                        	
	                        	<div class="inp">
		                            新密码 <lable id="hint-pwd" class="hint">*</lable>
		                            <input type="password" name="password" id="signuppassword" placeholder="6-14个字母、数字或下划线" onblur="checkPwd()"/>
		                        </div>
	                            <div class="inp">
	                                确认密码 <lable id="hint-pwdconf" class="hint">*</lable>
	                               <input type="password" name="password" id="signuppassword1" onblur="checkPwdConf()"/>
	                            </div>
	                           
	                            <input type="submit" id="modifybutton" value="修改" />
	                        	
	                    	</form>
					    </div>
					    <div class="tab-pane" id="mypublish">
					    	<!-- use php to repeat -->
							<?php 
								$trips = loadUserTrips($_SESSION['userid']);
								foreach ($trips as $arr) {
									echo '<hr style="border:1px dashed gray;" />';
									
									if ($arr['type']=="pickup") { // blue
										echo '<div class="search-result-pickup" onMouseOver="this.className=\'search-result-mouseover\';" onMouseOut="this.className=\'search-result-pickup\';" onclick="location.href=\'trip.php?tripid='.$arr['trip_id'].'\';">';
									}
									else{ //pink
										echo '<div class="search-result-picked" onMouseOver="this.className=\'search-result-mouseover\';" onMouseOut="this.className=\'search-result-picked\';" onclick="location.href=\'trip.php?tripid='.$arr['trip_id'].'\';">';	
									}
									
									echo '		<div class="result-loc">'.(loadLocationName($arr['start_location'])).'  &#8594;  '.
																	 	  (loadLocationName($arr['end_location'])).
												'</div>';
									echo '		<div class="result-time">'.$arr['depart_date']."<br />".$arr['depart_time'].'</div>';
									
									date_default_timezone_set('PRC');
									$currenttime = date("Y-m-d H:i:s");
									$pubtime = $arr['pub_time'];
									$date=floor((strtotime($currenttime)-strtotime($pubtime))/86400);
									$hour=floor((strtotime($currenttime)-strtotime($pubtime))%86400/3600);
									$minute=floor((strtotime($currenttime)-strtotime($pubtime))%86400/60);
									$second=floor((strtotime($currenttime)-strtotime($pubtime))%86400%60);
									if ($date!=0) {
										$timegap = $date."天";
									}
									else if ($hour!=0) {
										$timegap = $hour."小时";
									} else if ($minute !=0){
										$timegap = $minute."分钟";
									} else {
										$timegap = $second."秒";
									}
									
									echo '		<div class="result-pubtime">'. $timegap .'前发布</div>';
									
									if ($arr['type']=="pickup") {
									echo '		<div class="result-seats">' ."可搭乘".$arr['seat_num']."人".
													'<div class="result-reserv">'."有".$arr['interest_num']."人感兴趣".'</div>'.
												'</div>'; 
									}
									else{
											echo '	<div class="result-seats">'. 
														'<div class="result-reserv">'."有".$arr['interest_num']."人感兴趣".'</div>'.
													'</div>'; 
									}
									echo '		<div class="result-price-normal"><label>&yen;'.$arr['price_oneway'].'</label></div>';
									echo '<form action="doDeleteTrip.php" method="POST" enctype="multipart/form-data" onsubmit="return confirm(\'确定删除吗？\');"> ';
										echo '<input type="hidden" name="tripid" value="'.$arr['trip_id'].'" />';
										echo '<input type="submit" id="deletebutton" value="删除" />';
									echo'</form>';
									echo "</div>";
								}
								unset($trips);

							?>
					    </div>
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