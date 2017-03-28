<?php

if(strcasecmp($_SERVER['REQUEST_METHOD'], 'GET') != 0){
        die('Get request failed');
}
$conn = new mysqli("localhost", "jamie", "3parj9Ld5Rs18", "test_db");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$speed = 0;
$time = "";
$speedarr = array();
$timearr = array();
$arr = array();
$trip_number = intval($_GET["tripid"]);

if($stmt = $conn->prepare("SELECT speed, time FROM bikedata WHERE trip_number = ?")) {
        $stmt->bind_param("i",$trip_number);
} else {
        die("Prepared statement failed failed: " . $conn->error_list);
}

if (!$stmt->execute()) {
    die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
}

$stmt->bind_result($speed, $time);

while($stmt->fetch()) {
	array_push($arr, ['speed' => $speed, 'time' => $time]);
	//$arr += ['speed' => $speed, 'time' => $time];
	/*$speedarr = ['speed' => $speed];	
	$timearr = ['time' => $time];
	$arr += [$speedarr, $timearr];
	echo json_encode($arr);*/
}
echo json_encode($arr);
$conn->close();
?>
