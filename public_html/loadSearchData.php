<?php 

include 'setDB.php';

function loadlocations(){
	connectDB();
	
	$sql='SELECT * from location ORDER BY location_type, location_id ASC';
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

function loadlocationsWithoutAll(){
	connectDB();
	
	$sql='SELECT * from location WHERE name<>"全部" ORDER BY location_type, location_id ASC';
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
	
	$sql="SELECT * FROM trip WHERE trip_id=\"$tripid\" ";
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
	
	$sql="SELECT * FROM location WHERE location_id=\"$locid\" ";
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
	
	$sql="SELECT * FROM client WHERE id=\"$ownerid\" ";
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
	
	$sql="SELECT * FROM trip WHERE owner_id=\"$userid\" ORDER BY depart_date DESC, depart_time DESC";
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
	
	$sql="SELECT * FROM location WHERE location_id=\"$locid\" ";
	$result=mysql_query($sql) or die("Invalid query: " . mysql_error());
	$nb = mysql_num_rows($result);
	
	if ($nb > 0) {
		while ($arr = mysql_fetch_array($result)) {
			
			return $arr['name'];
		}
	}
	mysql_close();
}
?>