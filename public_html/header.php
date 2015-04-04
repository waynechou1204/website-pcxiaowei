<!-- mmenu jquery -->
<!-- 
<div id="page">
	<div class="header">
		<a class="navicon" href="#menu-left"> </a>
	</div>

	<nav id="menu-left">
		<ul>
			<li><a href="index.php">首页</a></li>
			<li><a href="search.php">搜索</a></li>
			<li><a href="publish.php">发布</a></li>
			<li><a href="about.php">关于网站</a></li>
			<li><a href="contact.php">联系我们</a></li>
		</ul>
	</nav>
</div>
 -->
<div class="header navbar navbar-default navbar-static-top" role="navigation"><!--class+="navbar-fixed-top"-->
	<div class="container">
		
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php"><img src="images/pcxw_logo.png" alt="拼车晓位 15--61*30"></a>
		</div>

		<div>
			<ul class="nav navbar-nav">
				<li><a href="index.php">首页</a></li>
				<li><a href="search.php">搜索</a></li>
				<li><a href="publish.php">发布</a></li>
				<li><a href="about.php">关于网站</a></li>
				<li><a href="contact.php">联系我们</a></li>
			</ul>
		</div>

		<div class="sign-login-btns">
			<ul>
				<?php 
				if (isset($_SESSION['islogin']) && $_SESSION['islogin']===true) {
					?> 
					<li id="signupContainer">
						<a class="signup" id="personalButton" href="personal.php?userid=<?php echo $_SESSION['userid'];?>">
							<span><?php echo $_SESSION['username']; ?></span>
						</a>
					</li>
					<li id="loginContainer">
						<a class="login" id="logoutButton" href="logincheck.php">
							<span>退出</span>
						</a>
					</li>

					<?php    	
				} else {
					?>

					<li id="signupContainer">
						<!--a class="zzzsignup button" id="signupButton" href="#"><span>注册</span></a-->
						<button type="button" id="signupButton" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#signUpModal">注册</button>
					</li>
					<li id="loginContainer">
						<button type="button" id="loginButton" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#loginModal">登录</button>
					</li>

					<?php    
				}
				?>

			</ul>
		</div>
	</div>
</div>

<!-- Modals for signin and signup -->

<div class="modal" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="signUpModalLabel">
					注册
				</h4>
			</div>
			<div class="modal-body">
				<!--<div id="signupBox">  -->              
				<form id="signupForm" action="register.php" method="post" enctype="multipart/form-data" onsubmit="return checkForm();">
					<fieldset id="signupbody">
						<fieldset>
							<label for="signupusername">真实姓名</label><lable id="hint-name" class="hint">*</lable>
							<input type="text" name="username" id="signupusername" onblur="checkName()"/>
						</fieldset>
						<fieldset>
							<label for="signupemail">邮箱地址</label> <lable id="hint-email" class="hint">*</lable>
							<input type="text" name="email" id="signupemail" onblur="checkEmail()"/>
						</fieldset>
						<fieldset>
							<label for="signupphone">手机号</label> <lable id="hint-phone" class="hint">*</lable>
							<input type="text" name="phone" id="signupphone" placeholder="11位手机号" onblur="checkPhone()"/>
						</fieldset>
						<fieldset>
							<label for="signuppassword">请输入密码</label> <lable id="hint-pwd" class="hint">*</lable>
							<input type="password" name="password" id="signuppassword" placeholder="6-14个字母、数字或下划线" onblur="checkPwd()"/>
						</fieldset>
						<!-- <fieldset>
							<label for="signuppassword1">确认密码</label> <lable id="hint-pwdconf" class="hint">*</lable>
							<input type="password" name="password" id="signuppassword1" onblur="checkPwdConf()"/>
						</fieldset>
						<fieldset>
							<label>*您的个人信息不会向第三方透露</label>
						</fieldset> -->
						<input type="submit" id="signup" value="立即注册" />
					</fieldset>
				</form>
				<!-- Login Ends Here -->
			</div>
	    </div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>

<!-- class= fade -->
<div class="modal" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="loginModalLabel">
					登录
				</h4>
			</div>
			<div class="modal-body">
				<div class="clear"> </div>
				<!--<div id="loginBox">   -->             
				<form id="loginForm" action="search.php" class="m-login-form" method="post" enctype="multipart/form-data" onsubmit="return checkLoginForm();">
					<fieldset id="body">
						<fieldset>
							<label for="email">邮箱地址</label>
							<?php 
							if (isset($_COOKIE['useremail'])) {
								echo '<input type="text" name="email" id="email" value="'.$_COOKIE['useremail'].'"/>';
							}
							else{
								echo '<input type="text" name="email" id="email" />';
							}
							?>					                                
						</fieldset>
						<fieldset>
							<label for="password">密码</label> <lable id="hint-loginpwd" class="hint"></lable>
							<?php 
							if (isset($_COOKIE['password'])) {
								echo '<input type="password" name="password" id="password" value="'.$_COOKIE['password'].'"/>';
							}
							else{
								echo '<input type="password" name="password" id="password" />';
							}
							?>	
						</fieldset>
						<label class="remeber fs80" for="checkbox"><input type="checkbox" id="checkbox" />记住我</label>
						<input type="submit" id="login" value="登录" />
						<!-- <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
							<button type="button" class="btn btn-primary">登录</button>
						</div> -->
					</fieldset>
					<span><a href="forgetpwd.php">忘记密码？</a></span>
					<br>
				</form>
				<p class="pl13 mb20 fs80">您可以使用以下方式登陆</p>
				<wb:login-button type="3,2" onlogin="login" onlogout="logout">登录按钮</wb:login-button>
			</div>
			
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>