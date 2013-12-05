<?php
	require '../config.php';
	//header('Content-type: text/html;charset=utf-8');
	error_reporting(E_ALL);
	ini_set('display_errors', true);

	$smarty = new Smarty_GuestBook(); 

	$name = $_POST['user_name'];
	$sex = $_POST['user_gender'];
	$yob = $_POST['user_yob'];
	$type = $_POST['user_type'];
	$phone = $_POST['user_phone'];
	$email = $_POST['user_email'];
	$pwd = md5($_POST['user_pwd']);
	
	$db = mysql_connect("localhost", "xiaowei", "891204") or die("Could not connect: " . mysql_error());
	mysql_select_db("tongjicovoit",$db) or die ('Can\'t use foo : ' . mysql_error());
	mysql_query('SET NAMES UTF8');
	
	// add user
	$str="INSERT INTO CLIENT(NAME, SEX, BIRTHYEAR, CLIENT_TYPE, EMAIL, TELEPHONE, PWD) VALUES(\"$name\", \"$sex\", $yob, \"$type\", \"$email\", \"$phone\", \"$pwd\")";
	$result=mysql_query($str) or die("Invalid query: " . mysql_error());
	
	// get user id
	$sql="select * from CLIENT WHERE EMAIL='$email' and PWD='$pwd'";
	$result=mysql_query($sql) or die("Invalid query: " . mysql_error());
	$row=mysql_fetch_array($result);
	
	mysql_close($db);

	session_start();
	
	$_SESSION["userid"]=$row['id'];
	$_SESSION['usersex']=$row['sex'];
	$_SESSION['userbirthyear']=$row['birthyear'];
	$_SESSION["usertype"]=$row['client_type'];
	$_SESSION["userphone"]=$row['telephone'];
	$_SESSION["userpwd"]=$pwd; // after encryption
	$_SESSION["username"]=$name;
	$_SESSION['useremail']=$email;
	
	$_SESSION['islogin']=true;
	header("Location:index.php");
?>