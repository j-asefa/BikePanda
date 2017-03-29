<?php

	/*
	 * Function that parses a time stamp into the format (January 1, 2000)
	 */
	function parseTimeStamp ($date){
		# array to store month names
		$months = array("null", "January", "February", "March", "April", "May", "June", "July", "August",  "September", "October", "November", "December");
		$monthsVals = array_values($months);

		# split date into separate parts
		$day = substr($date, 8, 9);

		$month = $monthsVals[intval(substr($date, 5, 6))]; 

		$year = substr($date, 0, 4);

		return ($month . " " . $day . ", " . $year);
	}

	if(strcasecmp($_SERVER['REQUEST_METHOD'], 'GET') != 0){
		die('Get request fialed');
	}
	$mysqli = new mysqli("localhost", "jamie", "3parj9Ld5Rs18", "test_db"); 

	/* check connection */
	if (mysqli_connect_errno())
	{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
	}

	# array to hold 4 date values
	$fiveDateValues = array();
	//$dateVals = array_values($fiveDateValues);

	for ($i=0; $i < 5; $i++) 
	{ 
		if ($result = $mysqli->query("SELECT tripID, DATE(time) as time FROM testDate ORDER BY userid DESC LIMIT 5 OFFSET $i"))
		{
			$row = $result->fetch_assoc();

			$trip_number = intval($row['tripID']);
			$latestdate = $row['time'];

			$finaldate = parseTimeStamp($latestdate);

			if (!in_array($finaldate, array_keys($fiveDateValues)))
			{
				$trips = array('trip1' => $trip_number);

				$fiveDateValues[$finaldate] = $trips; 
			} 
			else
			{
				//add to the same trips array
				array_push($fiveDateValues[$finaldate], $trip_number);
			}
			$result->close();
		}
		else 
		{
	    	echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	//echo $dateVals;	

	//$finalDatesArr = array('arr' => $dateVals);
	echo json_encode($fiveDateValues);

	$mysqli->close();
?>
