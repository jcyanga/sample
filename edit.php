<?php
include_once 'connection.php';
$crud = new CRUD();

$id = $_GET['id'];
$data = $crud->edit($id);

while($row = $data->fetch_assoc()) {
	echo $row['user'];
}
?>

<form>

</form>

<table>

</table>