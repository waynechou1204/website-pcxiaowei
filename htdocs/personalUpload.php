<?php
	require '../config.php';
	//header('Content-type: text/html;charset=utf-8');
	error_reporting(E_ALL);
	ini_set('display_errors', true);
	
	$smarty = new Smarty_GuestBook();
	
	session_start();
	$userid=$_SESSION['userid'];
	
	$name = $_POST['user_name'];
	$sex = $_POST['user_gender'];
	$yob = $_POST['user_yob'];
	$type = $_POST['user_type'];
	$phone = $_POST['user_phone'];
	$email = $_POST['user_email'];
	$pwd = md5($_POST['user_pwd']);
	
	$photo = $_FILES['input_user_image'];
	
	// store photo at server
	if ($photo["error"] > 0)
	{
		echo "Error code: " . $photo["error"] . "<br />";
	}
	elseif ($photo != "none")
	{
		if (file_exists("../upload/photo/" . $userid))
	    {
	      unlink("../upload/photo/" . $userid);
	    }
	    
	    move_uploaded_file($photo["tmp_name"],"../upload/photo/" . $userid);
	}
	
	$db = mysql_connect("localhost", "xiaowei", "891204") or die("Could not connect: " . mysql_error());
	mysql_select_db("tongjicovoit",$db) or die ('Can\'t use foo : ' . mysql_error());
	mysql_query('SET NAMES UTF8');
	
	// update user
	
	
	
	//$str="UPDATE CLIENT SET NAME=\"$name\", SEX=\"$sex\", BIRTHYEAR=$yob, CLIENT_TYPE=\"$type\", EMAIL=\"$email\", TELEPHONE=\"$phone\", PWD=\"$pwd\" WHERE ID=\"$userid\"";
	//$result=mysql_query($str) or die("Invalid query: " . mysql_error());
	
	mysql_close($db);
	
	session_start();
	
	$_SESSION["username"]=$name;
	$_SESSION['usersex']=$sex;
	$_SESSION['userbirthyear']=$yob;
	$_SESSION["usertype"]=$type;
	$_SESSION["userphone"]=$phone;
	$_SESSION["userpwd"]=$pwd; // after encryption
	$_SESSION['useremail']=$email;
	
	$_SESSION['islogin']=true;
	header("Location:index.php");
?>