<?php 
	session_start();

	$name = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = md5($_POST['password']);

	$db = mysql_connect("localhost", "xiaowei", "891204") or die("Could not connect: " . mysql_error());
	mysql_select_db("tongjicovoit",$db) or die ('Can\'t use foo : ' . mysql_error());
	mysql_query('SET NAMES UTF8');
	
	// add user
	//$str="INSERT INTO CLIENT(NAME, SEX, BIRTHYEAR, CLIENT_TYPE, EMAIL, TELEPHONE, PWD) VALUES(\"$name\", \"$sex\", $yob, \"$type\", \"$email\", \"$phone\", \"$pwd\")";
	$str="INSERT INTO CLIENT(NAME, EMAIL, TELEPHONE, PWD) VALUES(\"$name\", \"$email\", \"$phone\", \"$password\")";
	$result=mysql_query($str) or die("Invalid query: " . mysql_error());
	
	// get user id
	$sql=" select * from CLIENT WHERE EMAIL='$email' ";
	$result=mysql_query($sql) or die("Invalid query: " . mysql_error());
	$row=mysql_fetch_array($result);
	
	if(mysql_num_rows($result)==1){
				
		$_SESSION["userid"]=$row['id'];
		$_SESSION["username"]=$row['name'];
		//$_SESSION['usersex']=$row['sex'];
		//$_SESSION['userbirthyear']=$row['birthyear'];
		//$_SESSION["usertype"]=$row['client_type'];
		$_SESSION['useremail']=$email;
		$_SESSION["userphone"]=$row['telephone'];
		$_SESSION["userpwd"]=$row['pwd']; // after encryption
		//$_SESSION["userphoto"]=$row['photo'];
		
		$_SESSION['islogin']=true;
	}

	mysql_close($db);

	header("Location:search.php");
?>