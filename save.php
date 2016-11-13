<?php
include_once 'connection.php';
$crud = new CRUD();

$uname = $pwd = $name = "";

if(isset($_POST['Submit'])) {
	$table = 'userlist';
	$uname = test_data($_POST['uname']);
	$pwd = test_data($_POST['pwd']);
	$name = test_data($_POST['fullname']);

	$crud->create($table,$uname,$pwd,$name);
}

if(isset($_POST['Update'])) {
	$table = 'userlist';
	$id = $_POST['id'];
	$uname = test_data($_POST['uname']);
	$pwd = test_data($_POST['pwd']);
	$name = test_data($_POST['fullname']);

	$crud->update($table,$id,$uname,$pwd,$name);
}

if (isset($_GET['Delete'])) {
	$table = 'userlist';
	$id = $_GET['id'];

	$crud->delete($table,$id);
}

function test_data($data) {
	$data = trim($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>