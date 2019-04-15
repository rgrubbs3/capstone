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
	<div class = "headerWrap">
		<h1 style="color:#FFFFFF"><b>Stadium Views</b></h1>
			<p style="background-color:green; color:#FFFFFF; padding: 10px; margin: 0;" align="center"><i>Come and see all of the stadiums here</i></p>

			<!-- add padding here instead of breaks above-->
		<nav>
			<a href="index.php">Home</a>&nbsp;
			<a href="stadiums.php">Stadiums</a>&nbsp;
			<a href="withDirections.php">Plan a Trip</a>&nbsp;
			<a href="calendar.php">Calendar</a>&nbsp;
		</nav>
	</div>
	<p style="font-size:26px;"><b>Choose by the view!</b></p>

	<div id="bodywrap">
		<div class="row">
			<!-- First column will be the west coast -->
			<div class="column">
				<h2>West Coast</h2>
				<hr>
				<p style="color: #FFFFFF"><b>Check out the west coast stadiums here</b></p>
				<?php
                                	$sql = "SELECT Stadium,img_url FROM capstoneDB.StadiumLoc WHERE Region='West'";
					$result = mysqli_query($conn,$sql);
					//$sqlStadium = "SELECT Stadium FROM capstoneDB.StadiumLoc WHERE Region='West'";
					//$stadiumResult = mysqli_query($conn,$sql);
					$myArray = array();
					//$myArray = $stadiumResult;
					$i = 0;
                                	if ($result->num_rows > 0) {
                                	// output data of each row
                                		while($row = $result->fetch_assoc()) {
                                		//echo $result
						//write the array that will hold all of the stadium names in order here
							array_push($myArray,$row['Stadium']);
						//find a way to see a difference between each button
							?><input type="button" value="<?php echo $row['Stadium']?>" onclick="addItem(this.id)" id="<?php echo $row['Stadium'] ?>"></input><br>
							<img src="<?php echo $row["img_url"];?>" height="200px" width="300px"/><br><br><br>
				<?php
                                		}

                                	} else {
                                        	echo "0 results";
                                	}
                        	?>



			</div>
			<!-- Second column on bottom half will be central -->
			<div class="column">
				<h2>Central</h2>
				<hr>
				<p style="color: #FFFFFF"><b>Check out how the central stadiums are looking</b></p>

				<?php
                                        $sql = "SELECT Stadium,img_url FROM capstoneDB.StadiumLoc WHERE Region='Central'";
                                        $result = mysqli_query($conn,$sql);
					//$myArray = array();
                                        if ($result->num_rows > 0) {
                                        // output data of each row
                                                 while($row = $result->fetch_assoc()) {
                                                 //echo $result
						 //write here the arrayList that stores each individual text through each iteration
						        array_push($myArray,$row['Stadium']);
                                                        ?><input type="button" value="<?php echo $row['Stadium']?>" onclick="addItem(this.id)" id="<?php echo $row['Stadium']?>"></input><br>
                                                        <img src="<?php echo $row["img_url"];?>" height="200px" width="300px"/><br><br><br>
                                <?php
                                                }

                                        } else {
                                                echo "0 results";
                                        }
                                ?>




			</div>
			<!-- Third column on bottom half will be east coast -->
			<div class="column">
				<h2>East Coast</h2>
				<hr>
				<p style="color: #FFFFFF"><b>Check out the east coast stadiums here</b></p>


				<?php
                                        $sql = "SELECT Stadium,img_url FROM capstoneDB.StadiumLoc WHERE Region='East'";
                                        $result = mysqli_query($conn,$sql);

                                        if ($result->num_rows > 0) {
                                        // output data of each row
                                                 while($row = $result->fetch_assoc()) {
                                                //echo $result
							array_push($myArray,$row['Stadium']);
                                                        ?><input type="button" value="<?php echo $row['Stadium']?>" onclick="addItem(this.id)" id="<?php echo $row['Stadium']?>"></input><br>
                                                        <img src="<?php echo $row["img_url"];?>" height="200px" width="300px"/><br><br><br>
                                <?php
                                                }

                                        } else {
                                                echo "0 results";
                                        }
                                ?>
			</div>

		</div>

	</div>
	<h3 style="text-size:30px; font-weight:bold;">List of stadiums you want to see:</h3>
	<ul id="list" style="text-align:center;">
	</ul>

	<h3 style="font-size:18px; color:green;"><a href="calendar.php#target">Buy Tickets to these places!</a></h3>

	<script type="text/javascript">

		function addItem(clicked_id){
//			alert(clicked_id);
			var ul = document.getElementById("list");
//    			var ul = document.getElementById("myUL");
    			var candidate = document.getElementById(clicked_id);
    			var li = document.createElement("li");
    			li.setAttribute('id',candidate.value);
    			li.appendChild(document.createTextNode(candidate.value));
    			ul.appendChild(li);
			alert("Stadium has been added to your list (bottom of page)");
		}
	</script>
</body>
</html>
