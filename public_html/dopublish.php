<?php 

	include 'setDB.php';

	session_start();

	if (!isset($_SESSION['userid']) || !isset($_GET['radtype']) || !isset($_GET['position_start'])) {
		exit();
	}

	$owner = $_SESSION['userid'];

	$type = $_GET['radtype'];	
	$start = $_GET['position_start'];
	$end = $_GET['position_end'];
	$date = $_GET['departdate'];
	$time = $_GET['hour'].":".$_GET['minite'];

	date_default_timezone_set('PRC');
	$pubtime = date("Y-m-d H:i:s");

	$seats = $_GET['freeseat'];
	$prix = $_GET['price'];

	
	connectDB();
	
	// add trip
	//$str="INSERT INTO CLIENT(NAME, SEX, BIRTHYEAR, CLIENT_TYPE, EMAIL, TELEPHONE, PWD) VALUES(\"$name\", \"$sex\", $yob, \"$type\", \"$email\", \"$phone\", \"$pwd\")";
	$str="INSERT INTO trip(START_LOCATION, END_LOCATION, OWNER_ID, DEPART_DATE, DEPART_TIME, PUB_TIME, SEAT_NUM, PRICE_ONEWAY, TYPE) VALUES(\"$start\", \"$end\", \"$owner\", \"$date\", \"$time\", \"$pubtime\", \"$seats\", \"$prix\", \"$type\")";
	$result=mysql_query($str) or die("Invalid query: " . mysql_error());
	
	mysql_close($db);

	header("Location:search.php");
?>