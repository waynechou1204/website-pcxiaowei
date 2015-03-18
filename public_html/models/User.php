<?php 
/**
* 
*/
class User
{
	public $id;
	public $name;
	public $sex;
	public $email;
	public $telephone;
	public $pwd;

	function __construct($params)
	{
		$this->id = (isset($params["id"])) ? $params["id"] : "0";
		$this->name = (isset($params["name"])) ? $params['name'] : " ";
		$this->sex = (isset($params["sex"])) ? $params["sex"] : "male"; // or female
		$this->email = (isset($params["email"])) ? $params["email"] : " ";
		$this->telephone = (isset($params["telephone"])) ? $params["telephone"] : "000";
		$this->pwd = (isset($params["pwd"])) ? $params["pwd"] : "000";

		return true;
	}
}

?>