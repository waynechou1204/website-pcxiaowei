<?php 

/**
* Model of a trip
*/
class Trip 
{
	public $id;
	public $interest_num;
	public $owner_id;
	public $type;
		
	public $depart_date;
	public $depart_time;

	public $seat_num;
	public $publish_time;
	
	public $start_location;
	public $end_location;
	
	public $price;

	public $car_source;
	public $pass_id_1;
	public $pass_id_2;
	public $pass_id_3;
	public $pass_id_4;
	
	public $midstop_1;
	public $midstop_2;

	public $detail;


	function __construct($params)
	{
		$this->id = (isset($params["trip_id"])) ? $params["trip_id"] : "0";
		$this->interest_num = (isset($params['interest_num'])) ? $params["interest_num"] : "0";
        $this->owner_id = (isset($params['owner_id'])) ? $params['owner_id'] : "0";
        $this->type = (isset($params['type'])) ? $params['type'] : "picked";

        $this->depart_date = (isset($params['depart_date'])) ? $params['depart_date'] : "0";
        $this->depart_time = (isset($params['depart_time'])) ? $params['depart_time'] : "0";

        $this->seat_num = (isset($params['seat_num'])) ? $params['seat_num'] : "4";
        $this->publish_time = (isset($params['pub_time'])) ? $params['pub_time'] : "0";

        $this->start_location = (isset($params["start_location"])) ? ($params["start_location"]) : "0";
        $this->end_location = (isset($params["end_location"])) ? ($params["end_location"]) : "0";
        
        $this->price = (isset($params["price_oneway"])) ? ($params["price_oneway"]) : "0";

        $this->car_source = (isset($params["carSource"])) ? ($params["carSource"]) : "owner";
        $this->pass_id_1 = (isset($params['PASSENGER_ID_1'])) ? $params['PASSENGER_ID_1'] : "0";
        $this->pass_id_2 = (isset($params['PASSENGER_ID_2'])) ? $params['PASSENGER_ID_2'] : "0";
        $this->pass_id_3 = (isset($params['PASSENGER_ID_3'])) ? $params['PASSENGER_ID_3'] : "0";
        $this->pass_id_4 = (isset($params['PASSENGER_ID_4'])) ? $params['PASSENGER_ID_4'] : "0";
        
        $this->midstop_1 = (isset($params['MIDSTOP_1'])) ? $params['MIDSTOP_1'] : "0";
        $this->midstop_2 = (isset($params['MIDSTOP_2'])) ? $params['MIDSTOP_2'] : "0";
        
        $this->detail = (isset($params['detail'])) ? $params['detail'] : " ";

        return true;
	}

	function renderOnSearch(){
		//echo '<hr style="border:1px dashed gray;" />';
		if ($this->type == "pickup") { // blue
			echo '<div class="search-result-pickup" onMouseOver="this.className=\'search-result-mouseover\';" onMouseOut="this.className=\'search-result-pickup\';" onclick="location.href=\'trip.php?tripid='.$this->id.'\';">';
		}
		else{ //pink
			echo '<div class="search-result-picked" onMouseOver="this.className=\'search-result-mouseover\';" onMouseOut="this.className=\'search-result-picked\';" onclick="location.href=\'trip.php?tripid='.$this->id.'\';">';	
		}
		
		echo '	<div class="result-owner">';
		echo '		<div class="div-owner">';
		//echo '			<img class="driver-photo" alt="Driver Photo" src="../upload/photo/<{$trip['driverId']}>" onerror="javascript:this.src='../images/default_user.jpg'" width="50" height="50">';
		$sql = "SELECT * FROM client WHERE id= '". $this->owner_id ."'";
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
		
		$sql = "SELECT * FROM location WHERE location_id= '". $this->start_location ."'";
		$restemp = mysql_query($sql) or die("Invalid query: ".mysql_error());
		$arrtemp = mysql_fetch_array($restemp);
		$loc_start_name = $arrtemp['name'];

		$sql = "SELECT * FROM location WHERE location_id= '".$this->end_location."'";
		$restemp = mysql_query($sql) or die("Invalid query: ".mysql_error());
		$arrtemp = mysql_fetch_array($restemp);
		$loc_end_name = $arrtemp['name'];
		 
		echo '		<div class="result-loc">'.$loc_start_name.'  &#8594;  '.$loc_end_name.'</div>';
		echo '		<div class="result-time">'.$this->depart_date."<br>".$this->depart_time.'</div>';
		
		date_default_timezone_set('PRC');
		$currenttime = date("Y-m-d H:i:s");
		$pubtime = $this->publish_time;
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
		
		if ($this->type=="pickup") {
		echo '		<div class="result-seats">' ."可搭乘".$this->seat_num."人".
						'<div class="result-reserv">'."有".$this->interest_num."人感兴趣".'</div>'.
					'</div>'; 
		}
		else{
			echo '	<div class="result-seats">'. 
						'<div class="result-reserv">'."有".$this->interest_num."人感兴趣".'</div>'.
					'</div>'; 
		}
		echo '		<div class="result-price-normal">&yen;<label>'.$this->price.'</label></div>';
		echo '	<br style="clear:both;" />';
		echo '	</div>';
		echo "</div>";
	}
}
?>