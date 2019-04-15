<?php
	include 'connect.php';
?>
<html lang="en">
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="format.css">

	<title>Capture Sports</title>
	<style>
		/* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      	#map {
        	height: 425px;
      	}
      /* Optional: Makes the sample page fill the window. */
     	html, body {
        	height: 100%;
        	margin: 0;
        	padding: 0;
      	}
      	#floating-panel {
        	top: 10px;
        	left: 25%;
        	z-index: 5;
        	background-color: #fff;
        	padding: 5px;
        	border: 1px solid #999;
        	text-align: center;
        	font-family: 'Roboto','sans-serif';
        	line-height: 30px;
        	padding-left: 10px;
      	}
	nav{
		margin-bottom:0;
	}
	</style>
</head>

<body>
		
	<!-- Top half of the webpage -->
	<div class="headerWrap">
		<h1 style="color:#FFFFFF"><b>Plan a Trip!</b></h1>
		<p style="background-color:green; color:#FFFFFF; padding:10px; margin:0;"><i>Find your perfect trip!</i></p>
		
	
		<!-- add padding here instead of breaks above-->
		<nav>
			<a href="index.php">Home</a>&nbsp;
			<a href="stadiums.php">Stadiums</a>&nbsp;
			<a href="plan.php">Plan a Trip</a>&nbsp;
			<a href="calendar.php">Calendar</a>&nbsp;
		</nav>
	</div>

	<div class="row" align="center">
		<!-- First column will be the west coast -->
		<style>
			/* Include the padding and border in an element's total width and height */
			* {
  				box-sizing: border-box;
			}

			/* Remove margins and padding from the list */
			ul {
 				margin: 0;
 				padding: 0;
			}

			/* Style the list items */
			ul li {
  				position: relative;
  				padding: 12px 8px 12px 40px;
  				background: #eee;
  				font-size: 18px;
			}

				/* Set all odd list items to a different color (zebra-stripes) */
			ul li:nth-child(odd) {
  				background: #f9f9f9;
			}


			/* Style the close button */
			.close {
  				position: absolute;
  				right: 0;
  				top: 0;
  				padding: 12px 16px 12px 16px;
			}

			.close:hover {
  				background-color: #f44336;
  				color: white;
			}
			/* Style the header */
			.header {
  				background-image: linear-gradient(blue,green);
  				padding: 30px 40px;
  				color: white;
  				text-align: center;
			}

			/* Clear floats after the header */
			.header:after {
  				content: "";
  				display: table;
  				clear: both;
			}
			/* Style the input */
			input {
  				margin: 0;
  				border: none;
  				border-radius: 0;
  				width: 75%;
  				padding: 10px;
  				align:center;
  				font-size: 16px;
			}

			/* Style the "Add" button */
			.addBtn {
  				padding: 10px;
  				width: 25%;
  				background: green;
  				color: #FFFFFF;
  				align: center;
  				text-align: center;
  				font-size: 16px;
  				border-radius: 0;
			}

			.addBtn:hover {
  				background-color: #000000;
  				color: green;
			}

		</style>
<!--
			<br>
			<div id="myDIV" class="header">
          			<h2>Stadiums I Want to Attend</h2>
        			<input type="list" id="myInput" placeholder="Type the team you would like to see...i.e.(Yankees...Red Sox...)"><br><br><br>
          			<span onclick="newElement()" class="addBtn">Add</span>
      			</div>

      			<ul id="myUL">
          			<li>Yankees</li>
          			<li>Red Sox</li>
      			</ul>

      			<script type="text/javascript">
        			// Create a "close" button and append it to each list item
        			var myNodelist = document.getElementsByTagName("LI");
        			var i;
        			for (i = 0; i < myNodelist.length; i++) {
          				var span = document.createElement("SPAN");
          				var txt = document.createTextNode("\u00D7");
          				span.className = "close";
          				span.appendChild(txt);
          				myNodelist[i].appendChild(span);
        			}

       				// Click on a close button to hide the current list item
        			var close = document.getElementsByClassName("close");
        			var i;
        			for (i = 0; i < close.length; i++) {
            				close[i].onclick = function() {
            				var div = this.parentElement;
            				div.style.display = "none";
      		   			}
        			}


        			// Create a new list item when clicking on the "Add" button
        			function newElement() {
        				var li = document.createElement("li");
          				var inputValue = document.getElementById("myInput").value;
          				var t = document.createTextNode(inputValue);
          				li.appendChild(t);
          				if (inputValue === '') {
            					alert("You must write something!");
          				} else {
            					document.getElementById("myUL").appendChild(li);
          				}
          				document.getElementById("myInput").value = "";
          				var span = document.createElement("SPAN");
          				var txt = document.createTextNode("\u00D7");
          				span.className = "close";
          				span.appendChild(txt);
          				li.appendChild(span);

          				for (i = 0; i < close.length; i++) {
            					close[i].onclick = function() {
              						var div = this.parentElement;
              						div.style.display = "none";
            					}
          				}
        			}
        		</script>
-->
  		<hr>
		<!-- Second column on bottom half will be central -->
			<h3><b>Maps! Find your routes below!</b></h3>
<div id="floating-panel">
    <b>Start: </b>
    <select id="start">
      <option value="2000 E Gene Autry Way, Anaheim, CA 92806">Angels</option>
      <option value="24 Willie Mays Plaza, San Francisco, CA 94107">Giants</option>
      <option value="700 Clark Ave, St. Louis, MO 63102">Cardinals</option>
      <option value="333 W Camden St, Baltimore, MD 21201">Orioles</option>
      <option value="401 E Jefferson St, Phoenix, AZ 85004">Diamondbacks</option>
      <option value="123-01 Roosevelt Ave, Queens, NY 11368">Mets</option>
      <option value="1 Citizens Bank Way, Philadelphia, PA 19148">Phillies</option>
      <option value="2100 Woodward Ave, Detroit, MI 48201">Tigers</option>
      <option value="2001 Blake St, Denver, CO 80205">Rockies</option>
      <option value="1000 Vin Scully Ave, Los Angeles, CA 90012">Dodgers</option>
      <option value="4 Yawkey Way, Boston, MA 02215">Red Sox</option>
      <option value="1000 Ballpark Way, Arlington, TX 76011">Rangers</option>
      <option value="100 Joe Nuxhall Way, cincinnati, OH 45202">Reds</option>
      <option value="1 Royal Way, Kansas City, MO 64129">Royals</option>
      <option value="501 Marlins Way, Miami, FL 33125">Marlins</option>
      <option value="5001 Crawford St, Houston, TX 77002">Astros</option>
      <option value="1 Brewers Way, Milwaukee, WI 53214">Brewers</option>
      <option value="1500 S Capitol St SE, Washington, DC 20003">Nationals</option>
      <option value="7000 Coliseum Way, Oakland, CA 94621">A's</option>
      <option value="100 Park Blvd, Sandiego, CA 92101">Padres</option>
      <option value="115 Federal St, Pittsburgh, PA 15212">Pirates</option>
      <option value="2401 Ontario St, Cleveland, OH 44115">Indians</option>
      <option value="1 Blue Jays Way, Toronto, ON M5V 1J1, Canada">Blue Jays</option>
      <option value="1250 1st Ave S, Seattle, WA 98134">Mariners</option>
      <option value="755 Battery Ave SE, Atlanta, GA 30339">Braves</option>
      <option value="1 Twins Way, Minneapolis, MN 55403">Twins</option>
      <option value="1 Tropicana Dr., St. Petersburg, FL 33705">Rays</option>
      <option value="333 W 35th St, Chicago, IL 60616">White Sox</option>
      <option value="1060 W Addison St, Chicago, IL 60616">Cubs</option>
      <option value="1 E 161st St, Bronx, NY 10451">Yankees</option>
    </select>
    <b>End: </b>
    <select id="end">
      <option value="2000 E Gene Autry Way, Anaheim, CA 92806">Angels</option>
      <option value="24 Willie Mays Plaza, San Francisco, CA 94107">Giants</option>
      <option value="700 Clark Ave, St. Louis, MO 63102">Cardinals</option>
      <option value="333 W Camden St, Baltimore, MD 21201">Orioles</option>
      <option value="401 E Jefferson St, Phoenix, AZ 85004">Diamondbacks</option>
      <option value="123-01 Roosevelt Ave, Queens, NY 11368">Mets</option>
      <option value="1 Citizens Bank Way, Philadelphia, PA 19148">Phillies</option>
      <option value="2100 Woodward Ave, Detroit, MI 48201">Tigers</option>
      <option value="2001 Blake St, Denver, CO 80205">Rockies</option>
      <option value="1000 Vin Scully Ave, Los Angeles, CA 90012">Dodgers</option>
      <option value="4 Yawkey Way, Boston, MA 02215">Red Sox</option>
      <option value="1000 Ballpark Way, Arlington, TX 76011">Rangers</option>
      <option value="100 Joe Nuxhall Way, cincinnati, OH 45202">Reds</option>
      <option value="1 Royal Way, Kansas City, MO 64129">Royals</option>
      <option value="501 Marlins Way, Miami, FL 33125">Marlins</option>
      <option value="5001 Crawford St, Houston, TX 77002">Astros</option>
      <option value="1 Brewers Way, Milwaukee, WI 53214">Brewers</option>
      <option value="1500 S Capitol St SE, Washington, DC 20003">Nationals</option>
      <option value="7000 Coliseum Way, Oakland, CA 94621">A's</option>
      <option value="100 Park Blvd, Sandiego, CA 92101">Padres</option>
      <option value="115 Federal St, Pittsburgh, PA 15212">Pirates</option>
      <option value="2401 Ontario St, Cleveland, OH 44115">Indians</option>
      <option value="1 Blue Jays Way, Toronto, ON M5V 1J1, Canada">Blue Jays</option>
      <option value="1250 1st Ave S, Seattle, WA 98134">Mariners</option>
      <option value="755 Battery Ave SE, Atlanta, GA 30339">Braves</option>
      <option value="1 Twins Way, Minneapolis, MN 55403">Twins</option>
      <option value="1 Tropicana Dr., St. Petersburg, FL 33705">Rays</option>
      <option value="333 W 35th St, Chicago, IL 60616">White Sox</option>
      <option value="1060 W Addison St, Chicago, IL 60616">Cubs</option>
      <option value="1 E 161st St, Bronx, NY 10451">Yankees</option>
    </select>
    </div>
    <div id="map"></div>
    <script>
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDox0Fi44-CQJ_tmXlNhs_W-erPZbVIDdo&callback=initMap">
    </script>


			<br>
			<br>
			<br>
			<br>
		
	</div>

	<div id="myDIV" class="header">
                                <h2>Stadiums I Want to Attend</h2>
                                <input type="list" id="myInput" placeholder="Type the team you would like to see...i.e.(Yankees...Red Sox...)"><br><br><br>
                                <span onclick="newElement()" class="addBtn">Add</span>
                        </div>

                        <ul id="myUL">
                                <li>Yankees</li>
                                <li>Red Sox</li>
                        </ul>

                        <script type="text/javascript">
                                // Create a "close" button and append it to each list item
                                var myNodelist = document.getElementsByTagName("LI");
                                var i;
                                for (i = 0; i < myNodelist.length; i++) {
                                        var span = document.createElement("SPAN");
                                        var txt = document.createTextNode("\u00D7");
                                        span.className = "close";
                                        span.appendChild(txt);
                                        myNodelist[i].appendChild(span);
                                }

                                // Click on a close button to hide the current list item
                                var close = document.getElementsByClassName("close");
                                var i;
                                for (i = 0; i < close.length; i++) {
                                        close[i].onclick = function() {
                                        var div = this.parentElement;
                                        div.style.display = "none";
                                        }
                                }


                                // Create a new list item when clicking on the "Add" button
                                function newElement() {
                                        var li = document.createElement("li");
                                        var inputValue = document.getElementById("myInput").value;
                                        var t = document.createTextNode(inputValue);
                                        li.appendChild(t);
					if (inputValue === '') {
                                                alert("You must write something!");
                                        } else {
                                                document.getElementById("myUL").appendChild(li);
                                        }
                                        document.getElementById("myInput").value = "";
                                        var span = document.createElement("SPAN");
                                        var txt = document.createTextNode("\u00D7");
                                        span.className = "close";
                                        span.appendChild(txt);
                                        li.appendChild(span);

                                        for (i = 0; i < close.length; i++) {
                                                close[i].onclick = function() {
                                                        var div = this.parentElement;
                                                        div.style.display = "none";
                                                }
                                        }
                                }
                        </script>

</body>


</html>
