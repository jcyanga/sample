<?php
include_once 'connection.php';
$crud = new CRUD();

$id = $_GET['id'];
$data = $crud->edit($id);

$row = $data->fetch_assoc();

?>

<form action="save.php" method="POST">

<input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>" />

Username:
<input type="text" name="uname" id="uname" value="<?php echo $row['user']; ?>" /><br/>

Password:
<input type="text" name="pwd" id="pwd" value="<?php echo $row['password']; ?>" /><br/>

Fullname:
<input type="text" name="fullname" id="fullname" value="<?php echo $row['fullname']; ?>" /><br/>

<input type="Submit" name="Update" value="Update" >

</form>
<br/>

<table>

</table>