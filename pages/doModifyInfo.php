<?php
    session_start();

    $uid = $_SESSION['userid'];

	$name = $_GET['username'];
	$email = $_GET['email'];
	$phone = $_GET['phone'];

	$db = mysql_connect("localhost", "xiaowei", "891204") or die("Could not connect: " . mysql_error());
	mysql_select_db("tongjicovoit",$db) or die ('Can\'t use foo : ' . mysql_error());
	mysql_query('SET NAMES UTF8');
	
	 if (isset($name)) {
    	$sql="UPDATE CLIENT SET NAME=\"$name\", EMAIL=\"$email\", TELEPHONE=\"$phone\" WHERE ID=\"$uid\" ";
		$_SESSION["username"]=$name;
		$_SESSION['useremail']=$email;
		$_SESSION["userphone"]=$phone;
    }


	//$_SESSION["userpwd"]=$row['pwd']; // after encryption

	$result=mysql_query($sql) or die("Invalid query: " . mysql_error());
	

	mysql_close();

	header("Location:search.php");

?>