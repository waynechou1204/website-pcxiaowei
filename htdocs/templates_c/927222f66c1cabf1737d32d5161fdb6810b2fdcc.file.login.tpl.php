<?php /* Smarty version Smarty-3.1.14, created on 2013-09-24 17:48:03
         compiled from "../templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17948727495241b4332e68b7-11623606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '927222f66c1cabf1737d32d5161fdb6810b2fdcc' => 
    array (
      0 => '../templates/login.tpl',
      1 => 1378731792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17948727495241b4332e68b7-11623606',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'loginout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5241b4333278e1_11510417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5241b4333278e1_11510417')) {function content_5241b4333278e1_11510417($_smarty_tpl) {?>
<html id="tongjicovoit" lang="zh-cn">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/login.css" />
		
		<link rel="shortcut icon" href="../images/icon.ico" type="image/png">
		
		<title>同济拼车网</title>
	</head>
	
	<body id="tongjicovoit-login">
		<div id="page">
			<div id="header" class="clearfix">
				<a href=".">
						<img class="logo" src="../images/Covoitlogo.jpg" alt="Tongji Car Sharing"/>
				</a>
				
				<ul class="nav-user">
					<li class="nav-user-main">
						<a href="../htdocs/registerPersonal.php">
							<?php echo $_smarty_tpl->tpl_vars['username']->value;?>

						</a>
					</li>
					<li class="divider">&nbsp;</li>
					<li class="nav-user-login">
						<a href="../htdocs/login.php">
							<?php echo $_smarty_tpl->tpl_vars['loginout']->value;?>

						</a>
					</li>
				</ul>
			</div>
			
			<div id="content">
				<div id="login-content">
					<div id="login-pad">
						<label class="lab-login">登录</label>
						<form action="../htdocs/logincheck.php" method="post">
						<div id="normal-login">
							<div id="login-email">
								<label id="lab-email">E-mail: </label> 
								<input type="text" name="email" id="inp-email"/>
							</div>
							<div id="login-pwd">
								<label id="lab-pwd">密码: </label>
								<input type="password" name="pwd" id="inp-pwd"/>
							</div>
							<div id="forget-pwd">
								<a href="/">忘记密码？</a>
							</div>
							
							<div id="login-go">
								<div id="login-go-remember">
									<label for="inp-go-remember">
										<input id="inp-go-remember" type="checkbox" value="rememberMe"/>
										<span>记住密码</span>
									</label>
								</div>
								
									<button type="submit" class="login-button" value="login">
										<span>确定</span>
									</button>
								
							</div>
							
						</div>
						</form>
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
</html><?php }} ?>