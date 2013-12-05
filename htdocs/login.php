<?php
	require '../config.php';
	//header('Content-type: text/html;charset=utf-8');
	
	$smarty = new Smarty_GuestBook();
	
	session_start();
	
	//to logout
	if (isset($_SESSION['islogin']) && $_SESSION['islogin']===true) {
		//  这种方法是将原来注册的某个变量销毁
		unset($_SESSION['islogin']); 
		//  这种方法是销毁整个 Session 文件
		session_destroy();
		header("Location:index.php");
	}
	//to login
	else { 
		//$_SESSION['admin']=false;
		$smarty->assign("username",'免费注册');
		$smarty->assign("loginout",'登录');
		$smarty->display('../templates/login.tpl');
	}
	
	
	
?>