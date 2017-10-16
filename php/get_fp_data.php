<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "annual_sports";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

/*$sql = "select count(*) as cnt from  badminton_tbl where REGN_TIME >= DATE_SUB(NOW(),INTERVAL 6 HOUR)";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
	while($row = $result->fetch_assoc()) {
		$arr = array("last6hours" => $row['cnt']);
	}
} */

$sql = "select count(*) as tt_cnt from  tt_tbl";
$arr = [];

$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
	while($row = $result->fetch_assoc()) {
		$arr = array_merge($arr, array("tt" => $row['tt_cnt']));
	}
}

$sql = "select count(*) as cnt from  badminton_tbl";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
	while($row = $result->fetch_assoc()) {
		$arr = array_merge($arr, array("bad" => $row['cnt']));
	}
}

$arr = array_merge($arr, array("events"=>"20+" ));
echo json_encode($arr);

?>