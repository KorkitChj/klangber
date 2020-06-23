<?php

/**
* 
*/
class Database
{
	private $con;
	
	public function connect(){
		include_once("constants.php");
		$timezone = date_default_timezone_set("Asia/Bangkok");
		$this->con = new Mysqli(HOST,USER,PASS,DB);
		$this->con->set_charset("utf8");
		$this->con->query("SET time_zone = '{$timezone}'");
		if ($this->con) {
			return $this->con;
		}
		return "DATABASE_CONNECTION_FAIL";
	}
}

//$db = new Database();
//$db->connect();

?>