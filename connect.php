<?php
	$servername = "capstonedb.cumja1v6omzo.us-east-1.rds.amazonaws.com";
	$username = "grubbs445Capston";
	$password = "grubbs445Capstone";
	$dbname = "capstoneDB";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	//if ($conn->connect_error) {
	//    die("Connection failed: " . $conn->connect_error);
	//} 
	//echo "Connected successfully";
?>
