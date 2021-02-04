<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b380bfed1a02d8";$this->pass="98310a83";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_d6f6091c683c881";
		//Copiar también la información de la conexión en la función de abajo connect()
	}

	function connect(){
		//Copiar aquí también la info de la conexión
		$this->user="b380bfed1a02d8";$this->pass="98310a83";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_d6f6091c683c881";
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
