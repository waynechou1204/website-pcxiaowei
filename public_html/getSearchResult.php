 <?php 

	include 'setDB.php';

	$start_loc = urldecode($_GET["stloc"]);
	$end_loc = urldecode($_GET["edloc"]);
	
	$depart_date = $_GET["deptdate"];
	
	$type_takeman = $_GET["typtkm"];
	$type_bycar = $_GET["typbcar"];

	$order_indx = $_GET["order"];

	connectDB();
	
	// get current date and time
	date_default_timezone_set('PRC');
	$date = date("Y-m-d");
	$time = date("H:i");

	$date_sql = "AND depart_date>=\"$date\" AND depart_time>=\"$time\"";
	if (!empty($depart_date)) {
		$date_sql = " AND depart_date= '".$depart_date."'";
	}


	$type_sql = " ";
	if($type_takeman=="true" && $type_bycar=="false"){
		$type_sql=" AND type='pickup' ";
	}
	else if($type_takeman=="false" && $type_bycar=="true"){
		$type_sql=" AND type='picked' ";
	}

	$order_sql = " ";
	switch ($order_indx)
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

	$start_loc_sql = "WHERE 1=1";
	if ($start_loc != "全部") {
		$sql = "SELECT * from location WHERE name = '".$start_loc."'";
		$restemp = mysql_query($sql) or die("Invalid query: " . mysql_error());
		$arrtemp = mysql_fetch_array($restemp); 
		$start_loc_id = $arrtemp['location_id'];
		$start_loc_sql = " WHERE start_location='".$start_loc_id."' ";
	}
	
	$end_loc_sql = " ";
	if ($end_loc != "全部") {
		$sql = "SELECT * from location WHERE name = '".$end_loc."'";
		$restemp = mysql_query($sql) or die("Invalid query: " . mysql_error());
		$arrtemp = mysql_fetch_array($restemp);
		$end_loc_id = $arrtemp['location_id'];		
		$end_loc_sql = " AND end_location='".$end_loc_id."' ";
	}
	

	$sql="SELECT * from trip". $start_loc_sql . $end_loc_sql . $date_sql . $type_sql . $order_sql;

	$result = mysql_query($sql) or die("Invalid query: " . mysql_error());
	$nb = mysql_num_rows($result);
	

	//get search results from db
	if($nb > 0)
	{
		while($arr = mysql_fetch_array($result))
		{
			echo '<hr style="border:1px dashed gray;" />';
			if ($arr['type']=="pickup") { // blue
				echo '<div class="search-result-pickup" onMouseOver="this.className=\'search-result-mouseover\';" onMouseOut="this.className=\'search-result-pickup\';" onclick="location.href=\'trip.php?tripid='.$arr['trip_id'].'\';">';
			}
			else{ //pink
				echo '<div class="search-result-picked" onMouseOver="this.className=\'search-result-mouseover\';" onMouseOut="this.className=\'search-result-picked\';" onclick="location.href=\'trip.php?tripid='.$arr['trip_id'].'\';">';	
			}
			
			echo '	<div class="result-owner">';
			echo '		<div class="div-owner">';
			//echo '			<img class="driver-photo" alt="Driver Photo" src="../upload/photo/<{$trip['driverId']}>" onerror="javascript:this.src='../images/default_user.jpg'" width="50" height="50">';
			$sql = "SELECT * FROM client WHERE id= '".$arr['owner_id']."'";
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
			echo '		<div class="result-time">'.$arr['depart_date']."<br>".$arr['depart_time'].'</div>';
			
			date_default_timezone_set('PRC');
			$currenttime = date("Y-m-d H:i:s");
			$pubtime = $arr['pub_time'];
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
			
			if ($arr['type']=="pickup") {
			echo '		<div class="result-seats">' ."可搭乘".$arr['seat_num']."人".
							'<div class="result-reserv">'."有".$arr['interest_num']."人感兴趣".'</div>'.
						'</div>'; 
			}
			else{
				echo '	<div class="result-seats">'. 
							'<div class="result-reserv">'."有".$arr['interest_num']."人感兴趣".'</div>'.
						'</div>'; 
			}
			echo '		<div class="result-price-normal">&yen;<label>'.$arr['price_oneway'].'</label></div>';
			echo '	</div>';
			echo "</div>";
		}
	}
	else{
	
		echo "没有找到相关行程!";
	}
	mysql_close();

?>