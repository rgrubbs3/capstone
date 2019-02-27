<!-- <?php 
//	$servername = "capstonedb.cumja1v6omzo.us-east-1.rds.amazonaws.com";
//	$username = "grubbs445Capston";
//	$password = "grubbs445Capstone";
//	$dbname = "capstonedb";

	// Create connection
//	$conn = new mysqli($servername, $username, $password);

	// Check connection
//	if ($conn->connect_error) {
//	    die("Connection failed: " . $conn->connect_error);
	} 
//	echo "Connected successfully";
?> -->
<html lang="en">
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="format.css">

	<title>Capture Sports</title>
</head>

<body>
		
	<!-- Top half of the webpage -->
	<div class="headerWrap">
		<h1><b>Capture Sports</b></h1>
		<p align="center"><i>A place where sports fans are able to plan their perfect getaway</i></p>
		
	
		<!-- add padding here instead of breaks above-->
		<nav>
			<a href="index.php">Home</a>&nbsp;
			<a href="stadiums.html">Stadiums</a>&nbsp;
			<a href="plan.html">Plan a Trip</a>&nbsp;
			<a href="misc.html">misc</a>&nbsp;
		</nav>
	</div>


	<h3>Trips of the Weekend!</h3>

	<div class="row" align="center">
		<!-- First column will be the west coast -->
		<div class="column">
			<h2>West Coast</h2>
			<hr>
			<p><b>West coast trip of the weekend!</b></p>

			<?php
				$servername = "capstonedb.cumja1v6omzo.us-east-1.rds.amazonaws.com";
				$username = "grubbs445Capston";
				$password = "grubbs445Capstone";
				$dbname = "capstonedb";

				// Create connection
				$conn = new mysqli($servername, $username, $password);

				// Check connection
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
			//	echo "Connected successfully";

				$sql = "SELECT Stadium FROM StadiumLoc";
				$result = mysqli_query($conn, $sql);

				

				
			if ($result->num_rows > 0) {
   				// output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo $result;
			    }
			} else {
   	 			echo "0 results";
			}

			$conn->close();
			?>

			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>
				
		<!-- Second column on bottom half will be central -->
		<div class="column">
			<h2>Central</h2>
			<hr>
			<p><b>Central trip of the weekend!</b></p>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>
			
		<!-- Third column on bottom half will be east coast -->
		<div class="column">
			<h2>East Coast</h2>
			<hr>
			<p><b>East coast trip of the weekend!</b></p>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>
	</div>

</body>

</html>
