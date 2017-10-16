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

$sql = "select * from  badminton_tbl where REGN_TIME >= DATE_SUB(NOW(),INTERVAL 6 HOUR)";

$result = $conn->query($sql);

$list = [];
if ($result->num_rows > 0) {
// output data of each row
	while($row = $result->fetch_assoc()) {
		$arr = array("name" => $row['NAME']);
		$partner = '';
		if($row['MEN_DOUBLES_ABV45'] != ''){
			$partner = $row['MEN_DOUBLES_ABV45'];
		}
		else if($row['MEN_DOUBLES_BLW45'] != ''){
			$partner = $row['MEN_DOUBLES_BLW45'];
		}
		else if($row['MIXED_DOUBLES_BLW45'] != ''){
			$partner = $row['MIXED_DOUBLES_BLW45'];
		}
		else if($row['WOMEN_DOUBLES_BLW45'] != ''){
			$partner = $row['WOMEN_DOUBLES_BLW45'];
		}
		else if($row['WOMEN_DOUBLES_ABV45'] != ''){
			$partner = $row['WOMEN_DOUBLES_ABV45'];
		}
		if($partner != ''){
			$arr = array_merge($arr, array("text" => "partnering with $partner"));
			array_push($list, $arr);
		}
		
	}
}

echo json_encode($list);

?>