<?php
include_once 'connection.php';
$crud = new CRUD();
$data = $crud->read();

?>

<form action="save.php" method="POST">

Username:
<input type="text" name="uname" id="uname" /><br/>

Password:
<input type="text" name="pwd" id="pwd" /><br/>

Fullname:
<input type="text" name="fullname" id="fullname" /><br/>

<input type="Submit" name="Submit" value="Submit" >

</form>
<br/>

<table>
	<thead>
		<tr>
			<td>ID</td>
			<td>Username</td>
			<td>Password</td>
			<td>Fullname</td>
			<td>Update</td>
			<td>Delete</td>
		</tr>
	</thead>
	<tbody>
		<?php while($row = $data->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['user']; ?></td>
				<td><?php echo $row['password']; ?></td>
				<td><?php echo $row['fullname']; ?></td>
				<td><a href="edit.php?id=<?php echo $row['id']; ?>">Update</a></td>
				<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</td>
			</tr>
		<?php } ?>	
	</tbody>
</table>