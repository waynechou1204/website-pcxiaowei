<?php
	
	$useremail=$_POST['email'];
	$password=md5($_POST['pwd']); //$password = md5($posts["password"]); 加密

	$db = mysql_connect("localhost", "xiaowei", "891204") or die("Could not connect: " . mysql_error());
	mysql_select_db("tongjicovoit",$db) or die ('Can\'t use foo : ' . mysql_error());
	mysql_query('SET NAMES UTF8');
	
	$sql="select * from CLIENT WHERE EMAIL='$useremail' and PWD='$password'";
	$result=mysql_query($sql) or die("Invalid query: " . mysql_error());
	$row=mysql_fetch_array($result);
	
	if(mysql_num_rows($result)==1){
		session_start();
		
		$_SESSION["userid"]=$row['id'];
		$_SESSION["username"]=$row['name'];
		$_SESSION['usersex']=$row['sex'];
		$_SESSION['userbirthyear']=$row['birthyear'];
		$_SESSION["usertype"]=$row['client_type'];
		$_SESSION['useremail']=$useremail;
		$_SESSION["userphone"]=$row['telephone'];
		$_SESSION["userpwd"]=$row['pwd']; // after encryption
		$_SESSION["userphoto"]=$row['photo'];
		
		$_SESSION['islogin']=true;
		
		header("Location:index.php");
	}else{
		die("您输入的用户名或密码错误！！");
	}
	
	mysql_close();
?>