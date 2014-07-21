<?php

	include 'setDB.php';

    session_start();

	$tripid = $_POST['tripid'];

	connectDB();
	
	$sql="DELETE FROM trip WHERE TRIP_ID=\"$tripid\" ";
	$result=mysql_query($sql) or die("Invalid query: " . mysql_error());
	
	mysql_close();

	header("Location:personal.php?userid=".$_SESSION['userid']);

?>