<?php /* Smarty version Smarty-3.1.14, created on 2014-01-16 15:48:19
         compiled from "../templates/personal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96666016452d7f133276672-20844509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02d79d49c529dcbb34b73e5f19241415cb29b2b1' => 
    array (
      0 => '../templates/personal.tpl',
      1 => 1378732921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96666016452d7f133276672-20844509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'loginout' => 0,
    'years' => 0,
    'k' => 0,
    'value' => 0,
    'userphone' => 0,
    'useremail' => 0,
    'userid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d7f1332b2227_45276066',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d7f1332b2227_45276066')) {function content_52d7f1332b2227_45276066($_smarty_tpl) {?>
<html id="tongjicovoit" lang="zh-cn">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<script src="../js/checkFormat.js" type="text/javascript" language="javascript"></script>
		
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/personal.css" />
		
		<link rel="shortcut icon" href="../images/icon.ico" type="image/png">
		
		<title>同济拼车网</title>
	</head>
	
	<body id="tongjicovoit-personal">
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
						
			<div id="content" class="clearfix">
				<div id="personal-content">
					<div id="personal-pad">
						<div id="personal-pad-head">
							<label class="lab-personal-pad-head">修改个人资料</label>
						</div>
						<div id="personal-pad-form">
							<form action="../htdocs/personalUpload.php" method="post" id="form-personal" enctype="multipart/form-data" onsubmit="return checkForm();">
								<div id="form-name" class="form-reg">
									<input type="text" class="co-text" placeholder="姓名" title="Name" id="inp_user_name" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" onblur="checkName()">
									<lable id="hint-name" class="hint">*</lable>
								</div>
								
								<div id="form-birth" class="form-reg">
									<select id="user_gender" name="user_gender" class="co-select" title="Sex">
            							<option value="male">男</option>
           								<option value="female">女</option>
                         			</select>
                         			<select class="co-select" id="user_yob" name="user_yob" title="Year of birth" onblur="checkBirth()">
        								<option value="0">出生年份</option>
        	        					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['years']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        	        						<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
        	        					<?php } ?>	
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
									<input type="text" class="co-text" placeholder="手机号" title="Telephone" id="inp_user_phone" name="user_phone" value="<?php echo $_smarty_tpl->tpl_vars['userphone']->value;?>
" onblur="checkPhone()">
									<lable id="hint-phone" class="hint">*</lable>
									
								</div>
								<div id="form-email" class="form-reg">
									<input type="text" class="co-text" placeholder="E-mail" title="E-mail" id="inp_user_email" name="user_email" value="<?php echo $_smarty_tpl->tpl_vars['useremail']->value;?>
" onblur="checkEmail()">
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
								
								<div id="form-photo">
									<img id="user_image" src="../upload/photo/<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" onerror="javascript:this.src='../images/default_user.jpg'" width="80" height="80" alt="User photo" />
									<label id="lab-user_image">头像预览，支持 1MB以内的 PNG / JPG / GIF 文件</label>
									<input id="button_user_image" type="file" name="input_user_image" />
								</div>	
								<script src="../js/UserImage.js" type="text/javascript" language="javascript"></script>
																
								<div id="form-button">
									<div id="form-button-submit">
										<input type="submit" id="button-reg" value="确认修改" />
									</div>
									<div id="form-button-cancel">
										<input type="button" id="button-cancel" onclick="location.href='../htdocs/index.php'" value="取消" />
									</div>
									
								</div>
							</form>
						</div>	
					</div>
					
					<div id="intro-and-ads">
						<h1>ads</h1>
						<h1>ads</h1>
					</div>
					<div class="divclear"></div>
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