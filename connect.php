<?php
	$servername = "capstonedb.cumja1v6omzo.us-east-1.rds.amazonaws.com";
	$username = "grubbs445Capston";
	$password = "grubbs445Capstone";
	$dbname = "capstonedb";

	// Create connection
	$conn = new mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
?>