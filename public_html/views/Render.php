<?php
/**
* 
*/
class Render
{
	function renderTripOnSearch($trip){
		//echo '<hr style="border:1px dashed gray;" />';
		if ($trip->type == "pickup") { // blue
			echo '<div class="search-result-pickup" onMouseOver="this.className=\'search-result-mouseover\';" onMouseOut="this.className=\'search-result-pickup\';" onclick="location.href=\'trip.php?tripid='.$trip->id.'\';">';
		}
		else{ //pink
			echo '<div class="search-result-picked" onMouseOver="this.className=\'search-result-mouseover\';" onMouseOut="this.className=\'search-result-picked\';" onclick="location.href=\'trip.php?tripid='.$trip->id.'\';">';	
		}
		
		echo '	<div class="result-owner">';
		echo '		<div class="div-owner">';
		//echo '			<img class="driver-photo" alt="Driver Photo" src="../upload/photo/<{$trip['driverId']}>" onerror="javascript:this.src='../images/default_user.jpg'" width="50" height="50">';
		
		// $sql = "SELECT * FROM client WHERE id= '". $this->owner_id ."'";
		// $restemp = mysql_query($sql) or die("Invalid query: ".mysql_error());
		// $arrtemp = mysql_fetch_array($restemp);
		echo 			$trip->owner_name;
		echo '		</div>';
		echo '		<div class="div-driver">';
		//echo '			<lable class="lab-driver"><{$trip['driverName']}></lable>';
		echo '		</div>';
		echo '	</div>';
		echo '	<div class="result-detail">';		
		echo '		<div class="result-loc">'.$trip->start_location_name.'  &#8594;  '.$trip->end_location_name.'</div>';
		echo '		<div class="result-time">'.$trip->depart_date."<br>".$trip->depart_time.'</div>';
		
		date_default_timezone_set('PRC');
		$currenttime = date("Y-m-d H:i:s");
		$pubtime = $trip->publish_time;
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
		
		if ($trip->type=="pickup") {
		echo '		<div class="result-seats">' ."可搭乘".$trip->seat_num."人".
						'<div class="result-reserv">'."有".$trip->interest_num."人感兴趣".'</div>'.
					'</div>'; 
		}
		else{
			echo '	<div class="result-seats">'. 
						'<div class="result-reserv">'."有".$trip->interest_num."人感兴趣".'</div>'.
					'</div>'; 
		}
		echo '		<div class="result-price-normal">&yen;<label>'.$trip->price.'</label></div>';
		echo '	<br style="clear:both;" />';
		echo '	</div>';
		echo "</div>";
	}
}
?>