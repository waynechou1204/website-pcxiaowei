<?php
	$email=$_POST["l"];
	$password=md5($_POST['p']); //$password = md5($posts["password"]); 加密

	$con = mysql_connect("localhost", "xiaowei", "891204");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("tongjicovoit", $con);
	mysql_query('SET NAMES UTF8');

	$sql="select * from CLIENT WHERE EMAIL= '" .$l. "' AND PWD= '" .$P. "'";

	$result = mysql_query($sql);
	$row=mysql_fetch_array($result);
			
	if(mysql_num_rows($result)==1){
		echo "1";
	}
	else if(mysql_num_rows($result)==0){
		echo "0";
	}

	mysql_close($con);	
?>