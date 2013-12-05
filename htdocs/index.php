<?php
	require '../config.php';
	//header('Content-type: text/html;charset=utf-8');
	
	$smarty = new Smarty_GuestBook();
	
	session_start();
	
	// mysql connection
	$db = mysql_connect("localhost", "xiaowei", "891204") or die("Could not connect: " . mysql_error());
	mysql_select_db("tongjicovoit",$db) or die ('Can\'t use foo : ' . mysql_error());
	mysql_query('SET NAMES UTF8');
	
	$result = mysql_query("SELECT * FROM location")  or die("Invalid query: " . mysql_error());
	$nb = mysql_num_rows($result);
	
	//get locations from db
	if($nb > 0){
		while($arr = mysql_fetch_array($result)){
			//print_r($arr);
			$loc_id[]=$arr['LOCATION_ID'];
			$loc_name[] = $arr['NAME'];
		}
		$smarty->assign("loc_ids",$loc_id);
		$smarty->assign("loc_names",$loc_name);
	}
	unset($loc_id);
	unset($loc_name);
	
	// set login session
	if (isset($_SESSION['islogin']) && ($_SESSION['islogin'])===true) {
		$smarty->assign("username",$_SESSION["username"]);
		$smarty->assign("loginout",'退出');
	}else{
		$smarty->assign("username",'免费注册');
		$smarty->assign("loginout",'登录');
	}
	
	
	////// read trips by time from DB
	
	$result = mysql_query("SELECT * FROM trip ORDER BY timego ASC LIMIT 0,3")  or die("Invalid query: " . mysql_error());
	$nb = mysql_num_rows($result);
	if($nb > 0){
		while($arr = mysql_fetch_array($result)){
			
			$trip_id=$arr['TRIP_ID'];
			
			$trip_driver_id=$arr['DRIVER_ID'];
			$result_temp = mysql_query("SELECT name FROM client WHERE id=$trip_driver_id")  or die("Invalid query: " . mysql_error());
			$arr_temp = mysql_fetch_array($result_temp);
			$trip[$trip_id]['driverName']=$arr_temp['name'];
		 
			$trip_start_id=$arr['START_LOCATION'];
			$result_temp = mysql_query("SELECT name FROM location WHERE location_id=$trip_start_id")  or die("Invalid query: " . mysql_error());
			$arr_temp = mysql_fetch_array($result_temp);
			$trip[$trip_id]['startName']=$arr_temp['name'];
			
			$trip_end_id=$arr['END_LOCATION'];
			$result_temp = mysql_query("SELECT name FROM location WHERE location_id=$trip_end_id")  or die("Invalid query: " . mysql_error());
			$arr_temp = mysql_fetch_array($result_temp);
			$trip[$trip_id]['endName']=$arr_temp['name'];
			
			$timeshort=substr($arr['TIMEGO'], 0, 16);
			$timeshort=substr($timeshort, 0, 4)."年".substr($timeshort, 5, 2)."月".substr($timeshort, 8,2)."日 ".substr($timeshort, 11);
				
			$trip[$trip_id]['timeGo']=$timeshort;
			$trip[$trip_id]['price']=$arr['PRICE_ONEWAY'];
			$trip[$trip_id]['tripId']=$trip_id;
			$trip[$trip_id]['driverId']=$trip_driver_id;	// to search the driver photo
		}
		
		$smarty->assign("trips_bytime",$trip);

	}
	unset($trip_drive_id);
	unset($trip_start_id);
	unset($trip_end_id);
	unset($trip);
	
	
	////// read trips by price from DB
	
	$result = mysql_query("SELECT * FROM trip ORDER BY price_oneway ASC LIMIT 0,3")  or die("Invalid query: " . mysql_error());
	$nb = mysql_num_rows($result);
	if($nb > 0){
		while($arr = mysql_fetch_array($result)){
				
			$trip_id=$arr['TRIP_ID'];
				
			$trip_driver_id=$arr['DRIVER_ID'];
			$result_temp = mysql_query("SELECT name FROM client WHERE id=$trip_driver_id")  or die("Invalid query: " . mysql_error());
			$arr_temp = mysql_fetch_array($result_temp);
			$trip[$trip_id]['driverName']=$arr_temp['name'];
				
			$trip_start_id=$arr['START_LOCATION'];
			$result_temp = mysql_query("SELECT name FROM location WHERE location_id=$trip_start_id")  or die("Invalid query: " . mysql_error());
			$arr_temp = mysql_fetch_array($result_temp);
			$trip[$trip_id]['startName']=$arr_temp['name'];
				
			$trip_end_id=$arr['END_LOCATION'];
			$result_temp = mysql_query("SELECT name FROM location WHERE location_id=$trip_end_id")  or die("Invalid query: " . mysql_error());
			$arr_temp = mysql_fetch_array($result_temp);
			$trip[$trip_id]['endName']=$arr_temp['name'];
				
			$timeshort=substr($arr['TIMEGO'], 0, 16);
			$timeshort=substr($timeshort, 0, 4)."年".substr($timeshort, 5, 2)."月".substr($timeshort, 8,2)."日 ".substr($timeshort, 11);
			
			$trip[$trip_id]['timeGo']=$timeshort;
			$trip[$trip_id]['price']=$arr['PRICE_ONEWAY'];
			$trip[$trip_id]['tripId']=$trip_id;
			$trip[$trip_id]['driverId']=$trip_driver_id;	// to search the driver photo
		}
	
		$smarty->assign("trips_byprice",$trip);
	
	}
	unset($trip_drive_id);
	unset($trip_start_id);
	unset($trip_end_id);
	unset($trip);
	
	mysql_close();
		
	$smarty->display ( '../templates/main.tpl' );
	
?>