<?php

	include 'setDB.php';

    $tripid = $_GET['tripid'];
	if (!isset($tripid)) {
		echo "worng";
		exit();
	}
	
	connectDB();
	
	$sql="UPDATE trip SET interest_num=interest_num+1 WHERE trip_id=\"$tripid\" ";
	$result=mysql_query($sql) or die("Invalid query: " . mysql_error());
	

	mysql_close();

	header("Location:search.php");

?>