<?php 

$server = 'localhost';
$uname = 'root';
$pass = '062893';
$dbname = 'practice_db';

$conn = new mysqli($server,$uname,$pass,$dbname);

if($conn->connect_error) {
	die("Connection Failed : " . $conn->connect_error );
}

echo "Connected Successfully";

?>