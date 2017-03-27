<?php
/*
if(isset($_POST["trip_number"], $_POST["longitude"], $_POST["latitude"], $_POST["Bike_Speed"], $_POST["altitude"], $_POST["incline"], $_POST["distance"])) {

	$distance = $incline = $altitude = $Bike_Speed = $latitude = $longitude = $trip_number = "";
	$conn = new mysqli("localhost", "jamie", "3parj9Ld5Rs18", "test_db");

	//check connection
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}

	$distance = trim($_POST["distance"]);
	$incline = trim($_POST["incline"]);
	$altitude = trim($_POST["altitude"]);
	$Bike_Speed = trim($_POST["Bike_Speed"]);
	$latitude = trim($_POST["latitude"]);
	$longitude = trim($_POST["longitude"]);
	$trip_number = trim($_POST["trip_number"]);


	if($stmt = $conn->prepare("INSERT INTO bikedata (trip_number, longitude, latitude, speed, altitude, incline, distance) VALUES (?, ?, ?, ?, ?, ?, ?)")) {
		$stmt->bind_param("sssssss", $trip_number, $longitude, $latitude, $Bike_Speed, $altitude, $incline, $distance);
	} else {
		die("Prepared statement failed failed: " . $conn->error_list);
	}

	if (!$stmt->execute()) {
	    die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
	}

	echo "New record created successfully";
	$stmt->close();	
	$mysqli->close();
} else {
	echo "post parameters not set";
}
*/


if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') != 0){
    die('Request method must be POST!');
}

$conn = new mysqli("localhost", "jamie", "3parj9Ld5Rs18", "test_db");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

//echo file_get_contents("php://input");
$content = file_get_contents("php://input");
$json_string = json_decode($content, true);

if(!is_array($json_string)){
	die('Received content contained invalid JSON!');
}

$Bike_Speed = $json_string["Bike_Speed"];
$distance = $json_string["Trip_Distance"];
$altitude = $json_string["Total_Distance"];
$trip_id = $json_string["Trip_ID"];
date_default_timezone_set('America/Vancouver');
$time = date("Y-m-d H:i:s");
//echo "bike speed = ".$Bike_Speed . " trip distance = ". $distance . " total distance = ".$altitude . " time = ".$time . " trip id = ".$trip_id;

if($stmt = $conn->prepare("INSERT INTO bikedata (speed, altitude, distance, time) VALUES (?, ?, ?, ?)")) {
	$stmt->bind_param("ssss", $Bike_Speed, $altitude, $distance, $time);
} else {
	die("Prepared statement failed failed: " . $conn->error_list);
}

if (!$stmt->execute()) {
    die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
}
echo "New record created successfully";
$stmt->close();
$mysqli->close();
?>

<!DOCTYPE html>
<html>
	<p>Value inserted: <?php echo $json_string?></p>	
</html>
