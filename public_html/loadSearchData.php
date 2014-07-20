<?php 

include 'setDB.php';

function loadlocations()
{

	connectDB();
	
	$sql='SELECT * from LOCATION ORDER BY LOCATION_TYPE';
	$result=mysql_query($sql) or die("Invalid query: " . mysql_error());
	$nb = mysql_num_rows($result);
	
	//get locations from db
	if($nb > 0)
	{
		$i=0;
		while($arr = mysql_fetch_array($result))
		{
			$locations[$i]=$arr;
			$i++;
		}
			
		return $locations;
	}
	return null;

	mysql_close();
}

function loadTripData($tripid){
	connectDB();
	
	$sql="SELECT * FROM TRIP WHERE TRIP_ID=\"$tripid\" ";
	$result=mysql_query($sql) or die("Invalid query: " . mysql_error());
	$nb = mysql_num_rows($result);
	
	if ($nb > 0) {
		while ($arr = mysql_fetch_array($result)) {
			
			return $arr;
		}
	}
	mysql_close();
}

function loadLocationData($locid){
	connectDB();
	
	$sql="SELECT * FROM LOCATION WHERE LOCATION_ID=\"$locid\" ";
	$result=mysql_query($sql) or die("Invalid query: " . mysql_error());
	$nb = mysql_num_rows($result);
	
	if ($nb > 0) {
		while ($arr = mysql_fetch_array($result)) {
			
			return $arr;
		}
	}
	mysql_close();
}

function loadOwnerData($ownerid){
	connectDB();
	
	$sql="SELECT * FROM CLIENT WHERE ID=\"$ownerid\" ";
	$result=mysql_query($sql) or die("Invalid query: " . mysql_error());
	$nb = mysql_num_rows($result);
	
	if ($nb > 0) {
		while ($arr = mysql_fetch_array($result)) {
			
			return $arr;
		}
	}
	mysql_close();
}

function loadUserTrips($userid){
	connectDB();
	
	$sql="SELECT * FROM TRIP WHERE OWNER_ID=\"$userid\" ORDER BY DEPART_DATE DESC, DEPART_TIME DESC";
	$result=mysql_query($sql) or die("Invalid query: " . mysql_error());
	$nb = mysql_num_rows($result);
	
	if ($nb > 0) {
		
		$i=0;
		while ($arr = mysql_fetch_array($result)) {
		
			$trips[$i]=$arr;
			$i++;
		
		}

		return $trips;
	}
	return null;
	mysql_close();
}

function loadLocationName($locid){
	connectDB();
	
	$sql="SELECT * FROM LOCATION WHERE LOCATION_ID=\"$locid\" ";
	$result=mysql_query($sql) or die("Invalid query: " . mysql_error());
	$nb = mysql_num_rows($result);
	
	if ($nb > 0) {
		while ($arr = mysql_fetch_array($result)) {
			
			return $arr['NAME'];
		}
	}
	mysql_close();
}
?>