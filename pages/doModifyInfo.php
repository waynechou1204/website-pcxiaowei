<?php
    session_start();

    $uid = $_SESSION['userid'];

	$name = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$pwd = $_POST['password'];

	$form = $_POST['item'];

	$db = mysql_connect("localhost", "xiaowei", "891204") or die("Could not connect: " . mysql_error());
	mysql_select_db("tongjicovoit",$db) or die ('Can\'t use foo : ' . mysql_error());
	mysql_query('SET NAMES UTF8');
	
	if ($form=="info") {
    	$sql="UPDATE CLIENT SET NAME=\"$name\", EMAIL=\"$email\", TELEPHONE=\"$phone\" WHERE ID=\"$uid\" ";
		$_SESSION["username"]=$name;
		$_SESSION['useremail']=$email;
		$_SESSION["userphone"]=$phone;
    } 
    elseif ($form=="pwd") {
    	$md5pwd = md5($pwd);
    	$sql="UPDATE CLIENT SET PWD=\"$md5pwd\" WHERE ID=\"$uid\" ";
    }


	//$_SESSION["userpwd"]=$row['pwd']; // after encryption

	$result=mysql_query($sql) or die("Invalid query: " . mysql_error());
	

	mysql_close();

	header("Location:search.php");

?>