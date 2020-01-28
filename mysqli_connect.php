<?php
	//This creates a connection to the whalesdb database
	//Set the access details as constants:
	DEFINE ('DB_USER', 'ellejen');
	DEFINE ('DB_PASSWORD', 'Jaredworkdog0518');
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_NAME', 'whales_db');
	//Make the connection:
	$dbcon = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die
		('could not connect to MySQL: ' . mysqli_connect_error() );
	//Set the encoding
	mysqli_set_charset($dbcon, 'utf8');
	?>
	
