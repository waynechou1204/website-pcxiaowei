<?php 
/**
* Criteria to search trips
*/
class Criteria 
{
	public $start_location;
	public $end_location;

	public $depart_date;

	public $type_takeman;
	public $type_bycar;

	public $order_indx;

	function __construct($params)
	{
		$this->start_location = (isset($params["stloc"])) ? ($params["stloc"]) : "全部";
        $this->end_location = (isset($params["stloc"])) ? ($params["edloc"]) : "全部";
            
        $this->depart_date = (isset($params['deptdate'])) ? $params["deptdate"] : " ";
            
        $this->type_takeman = (isset($params['typtkm'])) ? $params["typtkm"] : "true";
        $this->type_bycar = (isset($params['typbcar'])) ? $params["typbcar"] : "true";

        $this->order_indx = (isset($params['order'])) ? $params["order"] : 1;
        
        return true;
	}
}
?>