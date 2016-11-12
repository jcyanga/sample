<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '062893');
define('DB_NAME', 'practice_db');

class Db_conn {

	private static $conn;

	public function connect() {
		$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
		
		if($conn->connect_error) {
			die("Cant connect to database," . $conn->connect_error);
		}

		return $conn;
	}
}
?>