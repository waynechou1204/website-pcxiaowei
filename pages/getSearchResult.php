<?php 

	$start_loc=$_GET["stloc"];
	$end_loc = $_GET["edloc"];
	
	$depart_date=$_GET["deptdate"];
	
	$type_takeman=$_GET["typtkm"];
	$type_bycar=$_GET["typbcar"];

	$order_indx=$_GET["order"];

	$con = mysql_connect("localhost", "xiaowei", "891204");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("tongjicovoit", $con);
	mysql_query('SET NAMES UTF8');

	$date_sql = " ";
	if (!empty($depart_date)) {
		$date_sql = " AND DEPART_DATE= '".$depart_date."'";
	}


	$type_sql = " ";
	if($type_takeman=="true" && $type_bycar=="false"){
		$type_sql=" AND TYPE='pickup' ";
	}
	else if($type_takeman=="false" && $type_bycar=="true"){
		$type_sql=" AND TYPE='picked' ";
	}


	$order_sql = " ";
	switch ($order_indx)
	{
	case 0:
		$order_sql = " ORDER BY DEPART_TIME ASC";
		break;  
	case 1:
		$order_sql = " ORDER BY DEPART_TIME DESC";
		break;
	case 2:
		$order_sql = " ORDER BY PRICE_ONEWAY ASC";
		break;
	case 3:
		$order_sql = " ORDER BY PRICE_ONEWAY DESC";
		break;
	case 4:
		$order_sql = " ORDER BY PUB_TIME ASC";
		break;
	case 5:
		$order_sql = " ORDER BY PUB_TIME ASC";
		break;
	default:
	  	break;
	}

	$sql = "SELECT * from LOCATION WHERE NAME = '".$start_loc."'";
	$restemp = mysql_query($sql) or die("Invalid query: " . mysql_error());
	$arrtemp = mysql_fetch_array($restemp); 
	$start_loc_id = $arrtemp['LOCATION_ID'];

	$sql = "SELECT * from LOCATION WHERE NAME = '".$end_loc."'";
	$restemp = mysql_query($sql) or die("Invalid query: " . mysql_error());
	$arrtemp = mysql_fetch_array($restemp);
	$end_loc_id = $arrtemp['LOCATION_ID'];		

	$sql="SELECT * from TRIP WHERE START_LOCATION= '" .$start_loc_id. "'" . " AND END_LOCATION= '" .$end_loc_id. "'" .
			 $date_sql . $type_sql . $order_sql;

	$result = mysql_query($sql) or die("Invalid query: " . mysql_error());
	$nb = mysql_num_rows($result);
	

	//get search results from db
	if($nb > 0)
	{
		while($arr = mysql_fetch_array($result))
		{
			echo '<hr style="border:1px dashed gray;" />';
			if ($arr['TYPE']=="pickup") { // blue
				echo '<div class="search-result-pickup" onMouseOver="this.className=\'search-result-mouseover\';" onMouseOut="this.className=\'search-result-pickup\';" onclick="location.href=\'trip.php?tripid='.$arr['TRIP_ID'].'\';">';
			}
			else{ //pink
				echo '<div class="search-result-picked" onMouseOver="this.className=\'search-result-mouseover\';" onMouseOut="this.className=\'search-result-picked\';" onclick="location.href=\'trip.php?tripid='.$arr['TRIP_ID'].'\';">';	
			}
			
			echo '	<div class="result-owner">';
			echo '		<div class="div-owner">';
			//echo '			<img class="driver-photo" alt="Driver Photo" src="../upload/photo/<{$trip['driverId']}>" onerror="javascript:this.src='../images/default_user.jpg'" width="50" height="50">';
			$sql = "SELECT * FROM CLIENT WHERE id= '".$arr['OWNER_ID']."'";
			$restemp = mysql_query($sql) or die("Invalid query: ".mysql_error());
			$arrtemp = mysql_fetch_array($restemp);
			$ower_name = $arrtemp['name'];
			echo 			$ower_name;
			echo '		</div>';
			echo '		<div class="div-driver">';
			//echo '			<lable class="lab-driver"><{$trip['driverName']}></lable>';
			echo '		</div>';
			echo '	</div>';
			echo '	<div class="result-detail">';
			echo '		<div class="result-loc">'.$start_loc.'  &#8594;  '.$end_loc.'</div>';
			echo '		<div class="result-time">'.$arr['DEPART_DATE']."<br />".$arr['DEPART_TIME'].'</div>';
			
			date_default_timezone_set('PRC');
			$currenttime = date("Y-m-d H:i:s");
			$pubtime = $arr['PUB_TIME'];
			$date=floor((strtotime($currenttime)-strtotime($pubtime))/86400);
			$hour=floor((strtotime($currenttime)-strtotime($pubtime))%86400/3600);
			$minute=floor((strtotime($currenttime)-strtotime($pubtime))%86400/60);
			$second=floor((strtotime($currenttime)-strtotime($pubtime))%86400%60);
			if ($date!=0) {
				$timegap = $date."天";
			}
			else if ($hour!=0) {
				$timegap = $hour."小时";
			} else if ($minute !=0){
				$timegap = $minute."分钟";
			} else {
				$timegap = $second."秒";
			}
			
			echo '		<div class="result-pubtime">'. $timegap .'前发布</div>';
			
			if ($arr['TYPE']=="pickup") {
			echo '		<div class="result-seats">' ."可搭乘".$arr['SEAT_NUM']."人".
							'<div class="result-reserv">'."有".$arr['INTEREST_NUM']."人感兴趣".'</div>'.
						'</div>'; 
			}
			else{
				echo '	<div class="result-seats">'. 
							'<div class="result-reserv">'."有".$arr['INTEREST_NUM']."人感兴趣".'</div>'.
						'</div>'; 
			}
			echo '		<div class="result-price-normal">&yen;<label>'.$arr['PRICE_ONEWAY'].'</label></div>';
			echo '	</div>';
			echo "</div>";
		}
	}

	mysql_close($con);

?>