<?php 

function loadlocations()
{

	$db = mysql_connect("localhost", "xiaowei", "891204") or die("Could not connect: " . mysql_error());
	mysql_select_db("tongjicovoit",$db) or die ('Can\'t use foo : ' . mysql_error());
	mysql_query('SET NAMES UTF8');
	
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
	$db = mysql_connect("localhost", "xiaowei", "891204") or die("Could not connect: " . mysql_error());
	mysql_select_db("tongjicovoit",$db) or die ('Can\'t use foo : ' . mysql_error());
	mysql_query('SET NAMES UTF8');
	
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
	$db = mysql_connect("localhost", "xiaowei", "891204") or die("Could not connect: " . mysql_error());
	mysql_select_db("tongjicovoit",$db) or die ('Can\'t use foo : ' . mysql_error());
	mysql_query('SET NAMES UTF8');
	
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
	$db = mysql_connect("localhost", "xiaowei", "891204") or die("Could not connect: " . mysql_error());
	mysql_select_db("tongjicovoit",$db) or die ('Can\'t use foo : ' . mysql_error());
	mysql_query('SET NAMES UTF8');
	
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

?>