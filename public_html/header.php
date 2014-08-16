<div id="page">
	<div id="header">
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
	<div class="clear"> </div>
</div>

<!--start-768px-menu-->
<!---start-header-->

<div class="header">
	<div class="wrap">
		<div class="header-left">
			<div class="logo">
				<a href="index.php"><div id="pcxwlogo"></div>拼车晓位</a>
			</div>
		</div>
	
		<div class="header-right">
			<div class="top-nav">
				<ul>
					<li><a href="index.php">首页</a></li>
				    <li><a href="search.php">搜索</a></li>
				    <li><a href="publish.php">发布</a></li>
				    <li><a href="about.php">关于网站</a></li>
					<li><a href="contact.php">联系我们</a></li>
				</ul>
			</div>
			<div class="sign-ligin-btns">
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

				            <li id="signupContainer"><a class="signup" id="signupButton" href="#"><span>注册</span></a>
								<div class="clear"> </div>
			                	<div id="signupBox">                
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
		                            <fieldset>
		                                <label for="signuppassword1">确认密码</label> <lable id="hint-pwdconf" class="hint">*</lable>
		                                <input type="password" name="password" id="signuppassword1" onblur="checkPwdConf()"/>
		                            </fieldset>
		                            <input type="submit" id="signup" value="立即注册" />
		                        </fieldset>
			                    </form>
			                	</div>
				                <!-- Login Ends Here -->
							</li>
							<li id="loginContainer"><a class="login" id="loginButton" href="#"><span>登录</span></a>
								 <div class="clear"> </div>
					                <div id="loginBox">                
					                    <form id="loginForm" action="search.php" method="post" enctype="multipart/form-data" onsubmit="return checkLoginForm();">
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
					                            <label class="remeber" for="checkbox"><input type="checkbox" id="checkbox" />记住我</label>
					                            <input type="submit" id="login" value="登录" />
					                        </fieldset>
					                        <span><a href="forgetpwd.php">忘记密码？</a></span>
					                    </form>
					                </div>
					            <!-- Login Ends Here -->
							</li>

		            	<?php    
		                }
		            	?>

				</ul>
				<div class="clear"> </div>
			</div>
			<div class="clear"> </div>
		</div>
		<div class="clear"> </div>
	</div>
</div>