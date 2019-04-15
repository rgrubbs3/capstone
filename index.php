<?php 
include 'connect.php';
?>
<html lang="en">
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="format.css">

	<title>Capture Sports</title>
	<style>
		html, body{
			height:100%;
			margin: 0;
			padding: 0;
		}
	</style>
</head>

<body>
	<!-- Top half of the webpage -->
	<div class="headerWrap">
		<h1 style="color:#FFFFFF"><b>Capture Sports</b></h1>
		<p style="background-color:green; color:#FFFFFF; padding: 10px; margin: 0;" align="center"><i>A place where sports fans are able to plan their perfect getaway</i></p>

		<nav>
			<a href="index.php">Home</a>&nbsp;
			<a href="stadiums.php">Stadiums</a>&nbsp;
			<a href="withDirections.php">Plan a Trip</a>&nbsp;
			<a href="calendar.php">Calendar</a>&nbsp;
		</nav>
	</div>


	<p style="font-size:26px;"><b>Trips of the Weekend!</b></p>

	<div class="row" align="center">
		<!-- First column will be the west coast -->
		<div class="column">
			<h2>West Coast</h2>
			<hr>
			<p style="color: #FFFFFF; font-size:20px;"><b>West coast trip of the weekend!</b></p><br>


<!--
			<?php
				$sql = "SELECT Stadium FROM capstoneDB.StadiumLoc WHERE Region='West'";
				$result = mysqli_query($conn,$sql);

				if ($result->num_rows > 0) {
   				// output data of each row
			    	while($row = $result->fetch_assoc()) {
			        //echo $result;
				echo "<br><br><br>".$row["Stadium"];
				echo "<br>".$row["img_url"];
				}

				} else {
   	 				echo "0 results";
				}
			?>
-->

<!--			<?php
                                        $sql = "SELECT Stadium,img_url FROM capstoneDB.StadiumLoc WHERE Region='West'";
                                        $result = mysqli_query($conn,$sql);

                                        if ($result->num_rows > 0) {
                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                //echo $result
                                                        echo "<br><p style='color:#FFFFFF;'>".$row["Stadium"]."</p>";
                                                        echo "<br>";
                                                        ?> <img src="<?php echo $row["img_url"];?>" height="200px" width="300px"/>
                        <?php
                                                }

                                        } else {
                                                echo "0 results";
                                        }
                        ?>
-->

			<p style="color:white;"><b><u>Teams playing:</u></b></p>
                        <p style="color:white;">Game 1: Angels vs. Mariners</p>
                        <p style="color:white;">Game 2: Padres vs. Reds</p>
                        <br><br>

			<p style="color:white;"><b><u>Time between stadiums:</u></b></p>
                        <p style="color:white;">Approximately 1 hour 30 mins travel time</p>
                        <br><br>

			<p style="color:white;"><b><u>Stadiums you will see:</u></b></p>
			<p style="color:white;">Angel Stadium</p>
			<img src="/img/angel.jpg" height="200px" width="300px"/>
			<br><br>
			<p style="color:white;">Petco Park</p>
                        <img src="/img/petco.jpg" height="200px" width="300px"/>
			<br><br><br>

			<a href="withDirections.php" style="color:red;">Find most efficient route</a>
			<br><br>
			<a href="https://seatgeek.com/los-angeles-angels-tickets?aid=10717&gid=29759218984&rid=aud-413000092778:kwd-265702731747&dt=c&ap=1t1&adId=264246561573&loc_interest=&loc_physical=9008564&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjwtMvlBRDmARIsAEoQ8zSyp3Vl224NxlVbTAAVOORKjJ4LgpKxOhimNXbWeQCfYDI92rgPq6saAhP9EALw_wcB" style="color:red;">Buy Tickets Game 1!</a>
			<br><br>
			<a href="https://seatgeek.com/san-diego-padres-tickets?aid=10717&gid=29759220904&rid=aud-413000092778:kwd-267905212311&dt=c&ap=1t1&adId=264246561543&loc_interest=&loc_physical=9008564&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjwtMvlBRDmARIsAEoQ8zRraUHghxG4MiVc3cVrjWe6TYpbvvZHaR9YiwsDTP5e72zdHbh0A3QaAp7lEALw_wcB" style="color:red;">Buy Tickets Game 2!</a>
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
			<p style="color: #FFFFFF; font-size:20px;"><b>Central trip of the weekend!</b></p><br>



<!--
			<?php
                                $sql = "SELECT Stadium FROM capstoneDB.StadiumLoc WHERE Region='Central'";
                                $result = mysqli_query($conn,$sql);
 
                                if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                //echo $result;
                                echo "<br><br><br>".$row["Stadium"];
                                }

                                } else {
                               	 	echo "0 results";
                        	}
                        ?>
-->
<!--
			<?php
                                        $sql = "SELECT Stadium,img_url FROM capstoneDB.StadiumLoc WHERE Region='Central'";
                                        $result = mysqli_query($conn,$sql);

                                        if ($result->num_rows > 0) {
                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                //echo $result
                                                        echo "<br><p style='color:#FFFFFF;'>".$row["Stadium"]."</p>";
                                                        echo "<br>";
                                                        ?> <img src="<?php echo $row["img_url"];?>" height="200px" width="300px"/>
                                <?php
                                                }

                                        } else {
                                                echo "0 results";
                                        }
                                ?>
			<br>
			<br>
			<br>
			<br>
			<br>
-->			

			<p style="color:white;"><b><u>Teams playing:</u></b></p>
                        <p style="color:white;">Game 1: Tigers vs. White Sox</p>
                        <p style="color:white;">Game 2: Indianas vs. Braves</p>
                        <br><br>

			<p style="color:white;"><b><u>Time between stadiums:</u></b></p>
                        <p style="color:white;">Approximately 2 hours 45 mins travel time</p>
                        <br><br>   

			<p style="color:white;"><b><u>Stadiums you will see:</u></b></p>
                        <p style="color:white;">Comerica Park</p>
                        <img src="/img/comerica.jpg" height="200px" width="300px"/>
                        <br><br>
                        <p style="color:white;">Progressive Field</p>
                        <img src="/img/progressive.jpg" height="200px" width="300px"/>
                        <br><br><br>


                        <a href="withDirections.php" style="color:red;">Find most efficient route</a>
                        <br><br>
                        <a href="https://seatgeek.com/detroit-tigers-tickets?aid=10717&gid=29759221744&rid=aud-413000092778:kwd-267905214951&dt=c&ap=1t1&adId=229407734093&loc_interest=&loc_physical=9008564&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjwtMvlBRDmARIsAEoQ8zQp6TnMBKrnyKqaMeSdWuf2kEivkq-e0GUsj6YrNROVqEryJCHrkh4aAoehEALw_wcB" style="color:red;">Buy Tickets Game 1!</a>
                        <br><br>
                        <a href="https://seatgeek.com/cleveland-indians-tickets?aid=10717&gid=29759220184&rid=aud-413000092778:kwd-267905210551&dt=c&ap=1t1&adId=264246561531&loc_interest=&loc_physical=9008564&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjwtMvlBRDmARIsAEoQ8zR5wF0yF4JKTJ5H5EpZr1f4J7_SF-rtc5oSaJx8hntRPbT1YQxG6VYaAoQAEALw_wcB" style="color:red;">Buy Tickets Game 2!</a>
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
			<p style="color: #FFFFFF; font-size:20px;"><b>East coast trip of the weekend!</b></p><br>

<!--
			<?php
                                $sql = "SELECT Stadium FROM capstoneDB.StadiumLoc WHERE Region='East'";
                                $result = mysqli_query($conn,$sql); 

                                if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                //echo $result;
                                echo "<br><br><br>".$row["Stadium"];
                                }

                                } else {
                                echo "0 results";
                        }

                        $conn->close();
                        ?>
-->
<!--
			<?php
                                        $sql = "SELECT Stadium,img_url FROM capstoneDB.StadiumLoc WHERE Region='East'";
                                        $result = mysqli_query($conn,$sql);

                                        if ($result->num_rows > 0) {
                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                //echo $result
                                                        echo "<br><p style='color:#FFFFFF;'>".$row["Stadium"]."</p>";
                                                        echo "<br>";
                                                        ?> <img src="<?php echo $row["img_url"];?>" height="200px" width="300px"/>
                                <?php
                                                }

                                        } else {
                                                echo "0 results";
                                        }
				$conn->close();
                                ?>

			<br>

-->


			<p style="color:white;"><b><u>Teams playing:</u></b></p>
                        <p style="color:white;">Game 1: Yankees vs. Royals</p>
                        <p style="color:white;">Game 2: Orioles vs. Twins</p>
                        <br><br>

			<p style="color:white;"><b><u>Time between stadiums:</u></b></p>
                        <p style="color:white;">Approximately 3 hours 10 mins travel time</p>
                        <br><br> 

			<p style="color:white;"><b><u>Stadiums you will see:</u></b></p>
                        <p style="color:white;">Yankees Stadium</p>
                        <img src="/img/yankee.jpeg" height="200px" width="300px"/>
                        <br><br>

                        <p style="color:white;">Camden Yards</p>
                        <img src="/img/camden.jpg" height="200px" width="300px"/>
                        <br><br><br>


                        <a href="withDirections.php" style="color:red;">Find most efficient route</a>
                        <br><br>
                        <a href="https://seatgeek.com/new-york-yankees-tickets?aid=34&pid=332581933&gid=38993587863&rid=aud-413000092698:kwd-18088689880&dt=c&ap=1t4&adId=326581432723&loc_interest=&loc_physical=9008569&n=g&mt=b&ext=&gclid=Cj0KCQjw4qvlBRDiARIsAHme6ovQTLEF4wVzz03mLqVHxM0uTQpvVswd48N5TgtzBvWnzIJBZkaRhxsaAkt0EALw_wcB" style="color:red;">Buy Tickets Game 1!</a>
                        <br><br>
                        <a href="https://seatgeek.com/baltimore-orioles-tickets?aid=10717&gid=29759220784&rid=aud-413000092778:kwd-267905212071&dt=c&ap=1t1&adId=264284581835&loc_interest=&loc_physical=9008564&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjwtMvlBRDmARIsAEoQ8zQr2LdZt6JIA4SfasJLRp2aaJr8Ox10bbcYpgMJhlpZgiks_XwXM6MaArjOEALw_wcB" style="color:red;">Buy Tickets Game 2!</a>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
		</div>
	</div>
</body>
</html>
