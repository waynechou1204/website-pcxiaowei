<?php

	include 'setDB.php';

    session_start();

    $uid = $_SESSION['userid'];

	$name = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$pwd = $_POST['password'];

	$form = $_POST['item'];

	connectDB();
	
	if ($form=="info") {
    	$sql="UPDATE client SET name=\"$name\", email=\"$email\", telephone=\"$phone\" WHERE id=\"$uid\" ";
		$_SESSION["username"]=$name;
		$_SESSION['useremail']=$email;
		$_SESSION["userphone"]=$phone;
    } 
    elseif ($form=="pwd") {
    	$md5pwd = md5($pwd);
    	$sql="UPDATE client SET pwd=\"$md5pwd\" WHERE id=\"$uid\" ";
    }


	//$_SESSION["userpwd"]=$row['pwd']; // after encryption

	$result=mysql_query($sql) or die("Invalid query: " . mysql_error());
	

	mysql_close();

	header("Location:search.php");

?>