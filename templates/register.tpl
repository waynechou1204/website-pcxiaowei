<{* Smarty *}>
<html id="tongjicovoit" lang="zh-cn">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<script src="../js/checkFormat.js" type="text/javascript" language="javascript"></script>
		<!--  script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script -->
		
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/register.css" />
		
		<link rel="shortcut icon" href="../images/icon.ico" type="image/png">
		
		<title>同济拼车网</title>
	</head>
	
	<body id="tongjicovoit-registration">
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
				<div id="register-content">
					<div id="register-pad">
						<div id="register-pad-head">
							<label class="lab-register-pad-head">立即免费注册！</label>
							<div id="register-pad-already">
								已经注册过？
								<a href="../htdocs/login.php">登录</a>
							</div>
						</div>
						<div id="register-pad-form">
							<form action="../htdocs/registercheck.php" method="post" id="form-register" onsubmit="return checkForm();">
								<div id="form-name" class="form-reg">
									<input type="text" class="co-text" placeholder="姓名" title="Name" id="inp_user_name" name="user_name" value="" onblur="checkName()">
									<lable id="hint-name" class="hint">*</lable>
								</div>
								<div id="form-birth" class="form-reg">
									<select id="user_gender" name="user_gender" class="co-select" title="Sex">
            							<option value="male">男</option>
           								<option value="female">女</option>
                         			</select>
                         			<select class="co-select" id="user_yob" name="user_yob" title="Year of birth" onblur="checkBirth()">
        								<option value="0">出生年份</option>
        	        					<{foreach from=$years key=k item=value }>
        	        						<option value="<{$k}>"><{$value}></option>
        	        					<{/foreach}>	
        	        				</select>
        	        				<lable id="hint-birth" class="hint">*</lable>
        	        			</div>
        	        			<div id="form-type" class="form-reg">
        	        				<select id="user_type" name="user_type" class="co-select" title="Type">
            							<option value="student">学生</option>
           								<option value="teacher">教职工</option>
           								<option value="other">其他</option>
                         			</select>
								</div>
								<div id="form-phone" class="form-reg">
									<input type="text" class="co-text" placeholder="手机号" title="Telephone" id="inp_user_phone" name="user_phone" value="" onblur="checkPhone()">
									<lable id="hint-phone" class="hint">*</lable>
									
								</div>
								<div id="form-email" class="form-reg">
									<input type="text" class="co-text" placeholder="E-mail" title="E-mail" id="inp_user_email" name="user_email" value="" onblur="checkEmail()">
									<lable id="hint-email" class="hint">*</lable>
									
								</div>
								
								<div id="form-pwd" class="form-reg">
									<input type="password" class="co-text" placeholder="请输入新密码" title="password" id="inp_user_pwd" name="user_pwd" value="" onblur="checkPwd()">
									<lable id="hint-pwd" class="hint">*</lable>
									
								</div>
								<div id="form-pwdconfirm" class="form-reg">
									<input type="password" class="co-text" placeholder="再次确认密码" title="confirm password" id="inp_user_pwdconfirm" name="user_pwdconfirm" value="" onblur="checkPwdConf()">
									<lable id="hint-pwdconf" class="hint">*</lable>
								</div>
								
								<div id="form-law" class="form-reg">
									<input id="check-law" type="checkbox" name="check-law" value="accept" required="required"/>
									<div id="lab-form-accept">
										<label for="check-law">我已阅读并接受</label>
										<a href="/">使用协议</a>
									</div>
									
								</div>	
								<div id="form-button">
									<input type="submit" id="button-reg" value="立即注册" />
								</div>
							</form>
						</div>	
					</div>
					
					<div id="intro-and-ads">
						<h1>ads</h1>
						<h1>ads</h1>
					</div>
				</div>
			</div>
			
			<div id="footer">
				<h1>foot</h1>
				<h1>foot</h1>
				<h1>foot</h1>
				<h1>foot</h1>
				<h1>foot</h1>
				<h1>foot</h1>
			</div>
		</div>
	</body>
</html>