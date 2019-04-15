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
                        <p style="color:white;">Game 1: Giants vs. Rockies</p>
                        <p style="color:white;">Game 2: Dodgers vs. Brewers</p>
                        <br><br>

			<p style="color:white;"><b><u>Time between stadiums:</u></b></p>
                        <p style="color:white;">Approximately 6 hours travel time</p>
                        <br><br>

			<p style="color:white;"><b><u>Stadiums you will see:</u></b></p>
			<p style="color:white;">AT&T Park</p>
			<img src="/img/at&t.jpg" height="200px" width="300px"/>
			<br><br>
			<p style="color:white;">Dodger Stadium</p>
                        <img src="/img/dodger.webp" height="200px" width="300px"/>
			<br><br><br>

			<a href="withDirections.php" style="color:red;">Find most efficient route</a>
			<br><br>
			<a href="https://www.mlb.com/giants/tickets/single-game-tickets?mlbkw=ds-g-p40334055728&&gclid=Cj0KCQjw4qvlBRDiARIsAHme6ov5GoR0sf4YXXE5pi0jKUr-WqOS8cQBXNqeJsfHj4PWcVOzacM1DTQaAilkEALw_wcB&gclsrc=aw.ds" style="color:red;">Buy Tickets Game 1!</a>
			<br><br>
			<a href="https://seatgeek.com/los-angeles-dodgers-tickets?aid=34&pid=1712632982&gid=67089260855&rid=aud-413000092698:kwd-524470429&dt=c&ap=1t3&adId=340190084801&loc_interest=&loc_physical=9008569&n=g&mt=e&ext=&gclid=Cj0KCQjw4qvlBRDiARIsAHme6ou2gnaavApHgCr_FXuXf-4Ya7DxxvOPnCoWsXUQ_xfc9GlIMjczKZkaAvjaEALw_wcB" style="color:red;">Buy Tickets Game 2!</a>
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
                        <p style="color:white;">Game 1: Royals vs. Indians</p>
                        <p style="color:white;">Game 2: Cubs vs. Angels</p>
                        <br><br>

			<p style="color:white;"><b><u>Time between stadiums:</u></b></p>
                        <p style="color:white;">Approximately 8 hours travel time</p>
                        <br><br>   

			<p style="color:white;"><b><u>Stadiums you will see:</u></b></p>
                        <p style="color:white;">Kauffman Stadium</p>
                        <img src="/img/kauffman.jpg" height="200px" width="300px"/>
                        <br><br>
                        <p style="color:white;">Wrigley Field</p>
                        <img src="/img/wrigley.jpg" height="200px" width="300px"/>
                        <br><br><br>


                        <a href="withDirections.php" style="color:red;">Find most efficient route</a>
                        <br><br>
                        <a href="https://seatgeek.com/kansas-city-royals-tickets?aid=34&pid=1713749973&gid=67366800416&rid=aud-413000092698:kwd-679118654&dt=c&ap=1t2&adId=340162105573&loc_interest=&loc_physical=9008569&n=g&mt=e&ext=&gclid=Cj0KCQjw4qvlBRDiARIsAHme6ouTenSWCLYt7EuRqe626t0yeg1EGrqhYOeuCuZiQgHdo9DqRVgWJZUaAg2_EALw_wcB" style="color:red;">Buy Tickets Game 1!</a>
                        <br><br>
                        <a href="https://seatgeek.com/chicago-cubs-tickets?aid=34&pid=332580253&gid=51503582814&rid=aud-413000092698:kwd-129436813&dt=c&ap=1t1&adId=326581430617&loc_interest=&loc_physical=9008569&n=g&mt=e&ext=&gclid=Cj0KCQjw4qvlBRDiARIsAHme6ovm3MIuvLy1cNepT6zIIZK_Vid4y0C2FxeJJQM20YLXGEDj3pVkPHoaAulUEALw_wcB" style="color:red;">Buy Tickets Game 2!</a>
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
                        <p style="color:white;">Game 1: Yankees vs. White Sox</p>
                        <p style="color:white;">Game 2: Red Sox vs. Orioles</p>
                        <br><br>

			<p style="color:white;"><b><u>Time between stadiums:</u></b></p>
                        <p style="color:white;">Approximately 3 hours 30 mins travel time</p>
                        <br><br> 

			<p style="color:white;"><b><u>Stadiums you will see:</u></b></p>
                        <p style="color:white;">Yankees Stadium</p>
                        <img src="/img/yankee.jpeg" height="200px" width="300px"/>
                        <br><br>

                        <p style="color:white;">Fenway Park</p>
                        <img src="/img/fenway.jpg" height="200px" width="300px"/>
                        <br><br><br>


                        <a href="withDirections.php" style="color:red;">Find most efficient route</a>
                        <br><br>
                        <a href="https://seatgeek.com/new-york-yankees-tickets?aid=34&pid=332581933&gid=38993587863&rid=aud-413000092698:kwd-18088689880&dt=c&ap=1t4&adId=326581432723&loc_interest=&loc_physical=9008569&n=g&mt=b&ext=&gclid=Cj0KCQjw4qvlBRDiARIsAHme6ovQTLEF4wVzz03mLqVHxM0uTQpvVswd48N5TgtzBvWnzIJBZkaRhxsaAkt0EALw_wcB" style="color:red;">Buy Tickets Game 1!</a>
                        <br><br>
                        <a href="https://seatgeek.com/boston-red-sox-tickets?aid=34&pid=819600938&gid=41709968065&rid=aud-413000092698:kwd-298609497050&dt=c&ap=1t1&adId=326561054605&loc_interest=&loc_physical=9008569&n=g&mt=b&ext=&gclid=Cj0KCQjw4qvlBRDiARIsAHme6ovo9XvUeZZDDpPSzaHyf9kvwHdUAozez1xH0p8VttaNw4-ufOXJR9gaAvWyEALw_wcB" style="color:red;">Buy Tickets Game 2!</a>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
		</div>
	</div>
</body>
</html>
