<?php 

function loadlocations()
{

	$db = mysql_connect("localhost", "xiaowei", "891204") or die("Could not connect: " . mysql_error());
	mysql_select_db("tongjicovoit",$db) or die ('Can\'t use foo : ' . mysql_error());
	mysql_query('SET NAMES UTF8');
	
	$sql='select * from LOCATION ORDER BY LOCATION_TYPE';
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

?>