<?php /* Smarty version Smarty-3.1.14, created on 2013-09-24 17:46:50
         compiled from "../templates/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13585168655241b3ea578276-64054830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66e6ab708205027c9c504ae2cfd5769a310d78f1' => 
    array (
      0 => '../templates/main.tpl',
      1 => 1378825985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13585168655241b3ea578276-64054830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'loginout' => 0,
    'loc_ids' => 0,
    'loc_names' => 0,
    'trips_bytime' => 0,
    'trip' => 0,
    'trips_byprice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5241b3ea5ed473_25323160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5241b3ea5ed473_25323160')) {function content_5241b3ea5ed473_25323160($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/Applications/XAMPP/xamppfiles/htdocs/Smarty-3.1.14/libs/plugins/function.html_options.php';
?>
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
									<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['loc_ids']->value,'output'=>$_smarty_tpl->tpl_vars['loc_names']->value,'selected'=>"1"),$_smarty_tpl);?>

								</select>
								<!-- input type="text" class="input_pos" id="input_start" -->
							</div>
							<div class="end_pos">
								<label class="label_end" style="color:white;">
									目的地：
								</label>
								<select id="select_start">
									<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['loc_ids']->value,'output'=>$_smarty_tpl->tpl_vars['loc_names']->value,'selected'=>"2"),$_smarty_tpl);?>

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
							<div id="result-by-time">
								<div class="lab-by">
									<label>最近出发的拼车</label>
								</div>
								
								<?php  $_smarty_tpl->tpl_vars['trip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['trips_bytime']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['trip']->key => $_smarty_tpl->tpl_vars['trip']->value){
$_smarty_tpl->tpl_vars['trip']->_loop = true;
?>
								<!-- use php to repeat -->
								<hr style="border:1px dashed gray;" />
								<div class="result">
									<div class="result-driver-photo">
										<div class="div-photo">
											<img class="driver-photo" alt="Driver Photo" src="../upload/photo/<?php echo $_smarty_tpl->tpl_vars['trip']->value['driverId'];?>
" onerror="javascript:this.src='../images/default_user.jpg'" width="50" height="50">
										</div>
										<div class="div-driver">
											<lable class="lab-driver"><?php echo $_smarty_tpl->tpl_vars['trip']->value['driverName'];?>
</lable>
										</div>
									</div>
										
									
									<div class="result-locations">
										<a class="lab-loc"><?php echo $_smarty_tpl->tpl_vars['trip']->value['startName'];?>
&#8594;<?php echo $_smarty_tpl->tpl_vars['trip']->value['endName'];?>
</a>
									
										<div class="result-time"><?php echo $_smarty_tpl->tpl_vars['trip']->value['timeGo'];?>
</div>
										
										<?php if ($_smarty_tpl->tpl_vars['trip']->value['price']<=10){?>
										<div class="result-price-cheap">&yen;<label><?php echo $_smarty_tpl->tpl_vars['trip']->value['price'];?>
</label></div>
										<?php }elseif($_smarty_tpl->tpl_vars['trip']->value['price']>30){?>
										<div class="result-price-expensive">&yen;<label><?php echo $_smarty_tpl->tpl_vars['trip']->value['price'];?>
</label></div>
										<?php }else{ ?>
										<div class="result-price-normal">&yen;<label><?php echo $_smarty_tpl->tpl_vars['trip']->value['price'];?>
</label></div>
										<?php }?>
									
									</div>
								</div>		
								<?php } ?>
							</div>
							<div id="result-by-price">
								<label class="lab-by">最便宜的拼车</label>
								
								<?php  $_smarty_tpl->tpl_vars['trip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['trips_byprice']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['trip']->key => $_smarty_tpl->tpl_vars['trip']->value){
$_smarty_tpl->tpl_vars['trip']->_loop = true;
?>
								<!-- use php to repeat -->
								<hr style="border:1px dashed gray;" />
								<div class="result">
									<div class="result-driver-photo">
										<div class="div-photo">
											<img class="driver-photo" alt="Driver Photo" src="../upload/photo/<?php echo $_smarty_tpl->tpl_vars['trip']->value['driverId'];?>
" onerror="javascript:this.src='../images/default_user.jpg'" width="50" height="50">
										</div>
										<div class="div-driver">
											<lable class="lab-driver"><?php echo $_smarty_tpl->tpl_vars['trip']->value['driverName'];?>
</lable>
										</div>
									</div>
										
									
									<div class="result-locations">
										<a class="lab-loc"><?php echo $_smarty_tpl->tpl_vars['trip']->value['startName'];?>
&#8594;<?php echo $_smarty_tpl->tpl_vars['trip']->value['endName'];?>
</a>
									
										<div class="result-time"><?php echo $_smarty_tpl->tpl_vars['trip']->value['timeGo'];?>
</div>
										
										<?php if ($_smarty_tpl->tpl_vars['trip']->value['price']<=10){?>
										<div class="result-price-cheap">&yen;<label><?php echo $_smarty_tpl->tpl_vars['trip']->value['price'];?>
</label></div>
										<?php }elseif($_smarty_tpl->tpl_vars['trip']->value['price']>30){?>
										<div class="result-price-expensive">&yen;<label><?php echo $_smarty_tpl->tpl_vars['trip']->value['price'];?>
</label></div>
										<?php }else{ ?>
										<div class="result-price-normal">&yen;<label><?php echo $_smarty_tpl->tpl_vars['trip']->value['price'];?>
</label></div>
										<?php }?>
									
									</div>
								</div>	
								<?php } ?>
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
</html><?php }} ?>