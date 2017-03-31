<?php

$conn = new mysqli("localhost", "jamie", "3parj9Ld5Rs18", "bikepanda");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

srand(time());

// origin for random lat/long pairs
$origin_x = 49.2607;
$origin_y = -123.2461;

$i = 0;
while ($i < 50) {
	$total_distance = $i*2;
	$trip_distance = $i;
	$altitude = $i/2;
	$speed = $i;
	$latitude = $origin_x + pow($i/100,2);
	$longitude = $origin_y - pow($i/100,3);
	$trip_number = 34;
	$calories = rand(0, 900);
	$userid = 1;

	if($stmt = $conn->prepare("INSERT INTO bikedata (userid, trip_distance, trip_number, longitude, latitude, speed, altitude, total_distance, time, calories) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, FROM_UNIXTIME(UNIX_TIMESTAMP('2017-03-31 16:53:29') + FLOOR(0 + ABS((RAND() * 330)))), ?)")) {
		$stmt->bind_param("iiddddddd", $userid, $trip_distance, $trip_number, $longitude, $latitude, $speed, $altitude, $total_distance, $calories);
	} else {
		die("Prepared statement failed failed: " . $conn->error_list);
	}

	if (!$stmt->execute()) {
	    die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
	}
	$i++;
}
echo "New record created successfully";
$stmt->close();
$mysqli->close();

?>
