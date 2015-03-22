<?php 

/**
* Model of a trip
*/
class Trip 
{
	public $id;
	public $interest_num;
	public $owner_id;
	public $ower_name;
	public $type;
		
	public $depart_date;
	public $depart_time;

	public $seat_num;
	public $publish_time;
	
	public $start_location_id;
	public $start_location_name;
	public $end_location_id;
	public $end_location_name;

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
        $this->owner_name = (isset($params['owner_name'])) ? $params['owner_name'] : "owner_name";
        $this->type = (isset($params['type'])) ? $params['type'] : "picked";

        $this->depart_date = (isset($params['depart_date'])) ? $params['depart_date'] : "0";
        $this->depart_time = (isset($params['depart_time'])) ? $params['depart_time'] : "0";

        $this->seat_num = (isset($params['seat_num'])) ? $params['seat_num'] : "4";
        $this->publish_time = (isset($params['pub_time'])) ? $params['pub_time'] : "0";

        $this->start_location_id = (isset($params["start_location"])) ? ($params["start_location"]) : "0";
        $this->start_location_name = (isset($params["start_location_name"])) ? ($params["start_location_name"]) : "start_location";
        $this->end_location_id = (isset($params["end_location"])) ? ($params["end_location"]) : "0";
        $this->end_location_name = (isset($params["end_location_name"])) ? ($params["end_location_name"]) : "end_location";
        
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

}
?>