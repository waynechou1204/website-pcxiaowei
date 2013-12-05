<?php
	require '../config.php';
	//header('Content-type: text/html;charset=utf-8');
	
	$smarty = new Smarty_GuestBook();
	
	$ny_current = date("Y");
	$ny_pre = $ny_current-120;
	for($i=$ny_current;$i>$ny_pre;$i--)
	{
		$years[$i]=$i;
	}
	
	$smarty->assign("years",$years);
	
	session_start();
	
	// set login session
	if (isset($_SESSION['islogin']) && ($_SESSION['islogin'])===true) {
		// send to a personal page
		$smarty->assign("userid",$_SESSION['userid']);
		$smarty->assign("username",$_SESSION['username']);
		$smarty->assign("usersex",$_SESSION['usersex']);
		$smarty->assign("userbirthyear",$_SESSION['userbirthyear']);
		$smarty->assign("usertype",$_SESSION['usertype']);
		$smarty->assign("userphone",$_SESSION['userphone']);
		$smarty->assign("useremail",$_SESSION['useremail']);
		
		$smarty->assign("loginout",'退出');
		$smarty->display ( '../templates/personal.tpl' );
		
	}else{
		$smarty->assign("username",'免费注册');
		$smarty->assign("loginout",'登录');
	
	
		//mysql connect and get emails
		$db = mysql_connect("localhost", "xiaowei", "891204") or die("Could not connect: " . mysql_error());
		mysql_select_db("tongjicovoit",$db) or die ('Can\'t use foo : ' . mysql_error());
		mysql_query('SET NAMES UTF8');
		
		$sql="select email from client";
		$result=mysql_query($sql) or die("Invalid query: " . mysql_error());
		while($row = mysql_fetch_array($result))
		{
			$db_email[]=$row['email'];
		}
		
		$smarty->assign('db_emails',$db_email);
		
		$smarty->display ( '../templates/register.tpl' );
	}
?>