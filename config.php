<?php 
	session_start();

	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "blacktribals");

	if (!$conn) {
		die("Error connecting to database: ". mysqli_connect_error());
	}

	define ('ROOT_PATH', realpath(dirname(_FILE_)));
	DEFINE ('BASE_URL', 'http://localhost/blacktribals/')
?>