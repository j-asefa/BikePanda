<?php
	if(strcasecmp($_SERVER['REQUEST_METHOD'], 'GET') != 0){
		die('Get request fialed');
	}
	&mysqli = new sqli("localhost", "jamie", "3parj9Ld5Rs18", "test_db");

	


?>
