<?php 

$connection = new MongoDB\Driver\Manager();
// "mongodb://admin:062893@localhost:27017/practice"

echo "Connection to database successfully";

$conn = $connection->practice;

echo "Database selected";

// $log = $conn->createCollection(array(
// 				'create' => 'User',
// 				'capped' => TRUE,
// 				'size' => 10*1024,
// 				'max' => 10
// 			)
// 	);

for($i=0;$i < 100;$i++) {
	$conn->testData->insert(
			array(
					"level" => WARN,
					"msg" => "Sampple log msg $i" ,
					"ts" => new MongoDate()
				)
		);
}

echo "Successfully created collection and inserted in database.";

$msgs = $conn->testData->find();

foreach($msgs as $row) {
	echo $row['msg'].'\n';
}


// $collection = $connection->createCollection('member');

// echo "Database mydb selected";

// $mycoll = $connection->practice->member;

// $coll_user = $db->user;

// $data = array(
// 			'uname' => 'jc',
// 			'pwd' => '123456',
// 			'datetime' => '2016-11-03 12:10:00',  
// 	);

// $mycoll->insert($data);

// echo "Successfully inserted in database.";

// $cursor = $mycoll->find();

// foreach ($cursor as $row) {
// 	$row['uname'] . '<br/>';
// }




// $m = new MongoClient('mongodb://localhost', [
//     'username' => 'admin',
//     'password' => '062893',
//     'db'       => 'test'
// ]);
// echo "Connection to database successfull. <br>";

// $server = 'localhost';
// $uname = 'root';
// $pass = '062893';
// $dbname = 'practice_db';

// $conn = new mysqli($server,$uname,$pass,$dbname);

// if($conn->connect_error) {
// 	die("Connection Failed : " . $conn->connect_error );
// }

// echo "Connected Successfully";

// db.createUser({user:"admin", pwd:"062893", roles:[{role:"root", db:"admin"}]})	

// new MongoClient();  //Old Class

// new MongoDB\Driver\Manager(); // New Class

 // $m = new MongoClient();

 //   echo "Connection to database successfully";
 //   // select a database
 //   // $db = $m->test;

 //   echo "Database mydb selected";



?>