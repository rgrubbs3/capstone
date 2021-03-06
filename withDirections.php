<!DOCTYPE html>
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
        position: absolute;
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
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      #right-panel {
        height: 100%;
        float: right;
        width: 390px;
        overflow: auto;
      }
      #map {
        margin-right: 400px;
      }
      #floating-panel {
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
      }
      @media print {
        #map {
          height: 500px;
          margin: 0;
        }
        #right-panel {
          float: none;
          width: auto;
        }
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
                        <a href="withDirections.php">Plan a Trip</a>&nbsp;
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
                        <div id="myDIV" class="header">
                                <h2>Stadiums I Want to Attend</h2>
				<select id="myInput" placeholder="Select...">
					<option value="Angel Stadium(Angels)">Angel Stadium</option>
					<option value="AT&T Park(Giants)">AT&T Park</option>
					<option value="Chase Field(Diamondbacks)">Chase Field</option>
                                        <option value="Coors Field(Rockies)">Coors Field</option>
                                        <option value="Dodger Stadium(Dodgers)">Dodger Stadium</option>
                                        <option value="Globe Life Park(Rangers)">Globe Life Park</option>
                                        <option value="Minute Maid Park(Astros)">Minute Maid Park</option>
                                        <option value="Oakland Alameda Coliseum(A's)">Oakland Alameda Coliseum</option>
                                        <option value="Petco Park(Padres)">Petco Park</option>
                                        <option value="Safeco Field(Mariners)">Safeco Field</option>
                                        <option value="Busch Stadium(Cardinals)">Busch Stadium</option>
                                        <option value="Comerica Park(Tigers)">Comerica Park</option>
                                        <option value="Great American Ball Park(Reds)">Great American Ball Park</option>
                                        <option value="Kauffman Stadium(Royals)">Kauffman Stadium</option>
                                        <option value="Miller Park(Brewers)">Miller Park</option>
                                        <option value="PNC Park(Pirates)">PNC Park</option>
                                        <option value="Progressive Field(Indians)">Progressive Field</option>
                                        <option value="Target Field(Twins)">Target Field</option>
                                        <option value="U.S. Cellular Field(White Sox)">U.S. Cellular Field</option>
                                        <option value="Wrigley Field(Cubs)">Wrigley Field</option>
                                        <option value="Camden Yards(Orioles)">Camden Yards</option>
                                        <option value="Citi Field(Mets)">Citi Field</option>
                                        <option value="Citizens Bank Park(Phillies)">Citizens Bank Park</option>
                                        <option value="Fenway Park(Red Sox)">Fenway Park</option>
                                        <option value="Marlins Park(Marlins)">Marlins Park</option>
                                        <option value="Nationals Park(Nationals)">Nationals Park</option>
                                        <option value="Rogers Centre(Blue Jays)">Rogers Centre</option>
                                        <option value="SunTrust Park(Braves)">SunTrust Park</option>
                                        <option value="Tropicana Field(Rays)">Tropicana Field</option>
                                        <option value="Yankee Stadium(Yankees)">Yankee Stadium</option>
				</select>
<!--                                <input type="list" id="myInput" placeholder="Type the team you would like to see...i.e.(Yankees...Red Sox...)"><br><br><br>
-->                                <span onclick="newElement()" class="addBtn">Add</span>
                        </div>

                        <ul id="myUL">
                                <li><a href="calendar.php#target">Buy Tickets!</a></li>
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
					//check here it could be how to get the elements of list
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








                <hr>
    <h3><b>Maps! Find your routes below!</b></h3>


    <div id="floating-panel">
      <strong>Start:</strong>
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
      <br>
      <strong>End:</strong>
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
    <div id="right-panel"></div>
    <div id="map"></div>
    <script>
      function initMap() {
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('right-panel'));

        var control = document.getElementById('floating-panel');
        control.style.display = 'block';
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var start = document.getElementById('start').value;
        var end = document.getElementById('end').value;
        directionsService.route({
          origin: start,
          destination: end,
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
  </body>
</html>
