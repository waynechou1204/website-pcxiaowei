<?php
include 'models/Trip.php';
include 'php_functions/setDB.php';
/**
* 
*/
class TripDao
{
	function getAllTrips(){
		connectDB();
        $sql = 'SELECT * FROM trip';
        $result=mysql_query($sql) or die("Invalid query: " . mysql_error());
        $nb = mysql_num_rows($result);
        if($nb > 0) {
            while($arr = mysql_fetch_array($result)) {
                $trip = new Trip($arr);
                $data[]=$trip;
            }
        }
        mysql_close();
        return $data;
	} 

    function getTripById($trip_id){
        connectDB();
        $sql = 'SELECT * FROM trip WHERE trip_id="' . $trip_id .'" ';
        $result=mysql_query($sql) or die("Invalid query: " . mysql_error());
        $nb = mysql_num_rows($result);
        if($nb > 0) {
            while($arr = mysql_fetch_array($result)) {
                $trip = new Trip($arr);
                $data=$trip;
            }
        }
        mysql_close();
        return $data;
    }

    function getTripsByCriteria($criteria){

        connectDB();
        
        // get current date and time
        //date_default_timezone_set('PRC');
        //$date = date("Y-m-d");
        
        //$date_sql = "AND depart_date>=\"$date\" ";
        $date_sql = " ";
        if ($criteria->depart_date != " ") {
            $date_sql = " AND depart_date= '" . $criteria->depart_date . "'";
        }
        
        $type_sql = " ";
        if($criteria->type_takeman=="true" && $criteria->type_bycar=="false"){
            $type_sql=" AND type='pickup' ";
        }
        else if($criteria->type_takeman=="false" && $criteria->type_bycar=="true"){
            $type_sql=" AND type='picked' ";
        }

        $order_sql = " ";
        switch ($criteria->order_indx)
        {
        case 0:
            $order_sql = " ORDER BY depart_date ASC, depart_time ASC";
            break;  
        case 1:
            $order_sql = " ORDER BY depart_date DESC, depart_time DESC";
            break;
        case 2:
            $order_sql = " ORDER BY price_oneway ASC";
            break;
        case 3:
            $order_sql = " ORDER BY price_oneway DESC";
            break;
        case 4:
            $order_sql = " ORDER BY pub_time ASC";
            break;
        case 5:
            $order_sql = " ORDER BY pub_time DESC";
            break;
        default:
            break;
        }

        $start_loc_sql = " WHERE 1=1";
        if ($criteria->start_location != "全部") {
            $sql = "SELECT * from location WHERE name = '" . $criteria->start_location . "'";
            $restemp = mysql_query($sql) or die("Invalid query: " . mysql_error());
            $arrtemp = mysql_fetch_array($restemp); 
            $start_loc_id = $arrtemp['location_id'];
            $start_loc_sql = " WHERE start_location=\"".$start_loc_id."\"";
        }
        
        $end_loc_sql = " ";
        if ($criteria->end_location != "全部") {
            $sql = "SELECT * from location WHERE name = '".$criteria->end_location."'";
            $restemp = mysql_query($sql) or die("Invalid query: " . mysql_error());
            $arrtemp = mysql_fetch_array($restemp);
            $end_loc_id = $arrtemp['location_id'];      
            $end_loc_sql = " AND end_location=\"".$end_loc_id."\" ";
        }
        
        $sql="SELECT * FROM trip". $start_loc_sql . $end_loc_sql . $date_sql . $type_sql . $order_sql;

        $result = mysql_query($sql) or die("Invalid query: " . mysql_error());
        $nb = mysql_num_rows($result);
        
        //get search results from db
        if($nb > 0) {
            while($arr = mysql_fetch_array($result)) {
                $trip = new Trip($arr);
                $data[]=$trip;
            }
        }
        else{
            echo "没有找到相关行程!";
        }

        mysql_close();
        return $data;
    }
}
?>