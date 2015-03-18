<?php
include 'models/Location.php';
include 'php_functions/setDB.php';
/**
* 
*/
class LocationDao
{
	function getAllLocations(){
		connectDB();
		$sql = 'SELECT * FROM location ORDER BY location_type, location_id ASC';
        
        $result=mysql_query($sql) or die("Invalid query: " . mysql_error());
        $nb = mysql_num_rows($result);

        if($nb > 0) {
            $i=0;
            while($arr = mysql_fetch_array($result)) {
                $location = new Location($arr);
                $locations[$i]=$location;
                $i++;
            }
        }
        mysql_close();
        return $locations;
	} 

    function getLocationById($id){
        connectDB();
        $sql = 'SELECT * FROM location WHERE location_id="' . $id .'" ';
        $result=mysql_query($sql) or die("Invalid query: " . mysql_error());
        $nb = mysql_num_rows($result);
        if($nb > 0) {
            while($arr = mysql_fetch_array($result)) {
                $obj = new Location($arr);
                $data=$obj;
            }
        }
        mysql_close();
        return $data;
    }
}
?>