<?php

	include 'setDB.php';

    $tripid = $_GET['tripid'];
	if (!isset($tripid)) {
		echo "worng";
		exit();
	}
	
	connectDB();
	
	$sql="UPDATE trip SET INTEREST_NUM=INTEREST_NUM+1 WHERE TRIP_ID=\"$tripid\" ";
	$result=mysql_query($sql) or die("Invalid query: " . mysql_error());
	

	mysql_close();

	header("Location:search.php");

?>