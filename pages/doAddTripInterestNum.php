<?php
    $tripid = $_GET['tripid'];
	if (!isset($tripid)) {
		echo "worng";
		exit();
	}
	$db = mysql_connect("localhost", "xiaowei", "891204") or die("Could not connect: " . mysql_error());
	mysql_select_db("tongjicovoit",$db) or die ('Can\'t use foo : ' . mysql_error());
	mysql_query('SET NAMES UTF8');
	
	$sql="UPDATE TRIP SET INTEREST_NUM=INTEREST_NUM+1 WHERE TRIP_ID=\"$tripid\" ";
	$result=mysql_query($sql) or die("Invalid query: " . mysql_error());
	

	mysql_close();

	header("Location:search.php");

?>