<?php 
/**
* 
*/
class Location
{
	public $id;
	public $name;
	public $location_type;

	function __construct($params)
	{
		$this->id = (isset($params["location_id"])) ? $params["location_id"] : "0";
		$this->name = (isset($params["name"])) ? $params["name"] : " ";
		$this->location_type = (isset($params["location_type"])) ? $params["location_type"] : "All";

		return true;
	}
}
?>