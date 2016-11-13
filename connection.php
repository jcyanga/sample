<?php 
include_once 'dbconn.php';
$dbconn = new Db_conn();
$conn = $dbconn->connect();

global $conn;

class CRUD {	

	public function create($table,$uname,$pwd,$name) {
		global $conn;

		$sql = "INSERT INTO $table (user, password, fullname) VALUES ('$uname','$pwd','$name')";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

		Header('Location: form.php');
	}

	public function read($table='userlist') {
		global $conn;

		$sql = "SELECT * FROM $table";
		$data = $conn->query($sql);
		
		return $data; 
	}

	public function edit($id) {
		global $conn;

		$sql = "SELECT * FROM userlist WHERE id = '$id'";
		$data = $conn->query($sql);

		return $data;
	}

	public function update($table,$id,$uname,$pwd,$name) {
		global $conn;

		$sql = "UPDATE $table SET user = '$uname', password = '$pwd', fullname = '$name' WHERE id = '$id'";

		if ($conn->query($sql) === TRUE) {
		    echo "Updated successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

		Header('Location: form.php');
	}

	public function delete($table,$id) {
		global $conn;

		$sql = "DELETE FROM $table WHERE id = '$id'";

		if ($conn->query($sql) === TRUE) {
		    echo "New record updated successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

		Header('Location: form.php');

	}
}

?>
