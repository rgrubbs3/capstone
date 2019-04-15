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


		<h3 style="font-size: 30px">Link To Buy Tickets Here</h3>

		<ul>
			<li>West</li>
			<ul>
				<li><a href="https://seatgeek.com/los-angeles-angels-tickets?aid=10717&gid=29759218984&rid=aud-413000092538:kwd-265702731747&dt=c&ap=1t1&adId=264246561594&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFoIY5JQgjFqkA7oNOAx9LLVXaFJZtg_lQGNgmIxyDDsRDxoVllILRoaArpgEALw_wcB" style="color:red;">Angels</a></li>
				<li><a href="https://seatgeek.com/san-francisco-giants-tickets?aid=10717&gid=46296379897&rid=aud-413000092698:kwd-445947701415&dt=c&ap=1t1&adId=294105855977&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFpudXIZNwi37OxN-0i5fE72G1AmxgLft_-HDOfCwLfMKl_VCA2YT4QaAhHPEALw_wcB" style="color:red;">Giants</a></li>
				<li><a href="https://seatgeek.com/arizona-diamondbacks-tickets?aid=10717&gid=29759219944&rid=aud-413000092778:kwd-267905209431&dt=c&ap=1t1&adId=229407734045&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFodzbcoUxlwq3-nLC45GnjAK_wpI6tY6rHg3KqaVHMNjW0DDnRBTG8aAvy1EALw_wcB" style="color:red;">Diamonbacks</a></li>
				<li><a href="https://seatgeek.com/colorado-rockies-tickets?aid=10717&gid=29759221504&rid=aud-413000092698:kwd-267905213951&dt=c&ap=1t1&adId=229407728126&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFqoesy8OAHs-Pp-FmFADuwihkKF71Qz9VDIWO3pKpkHD5MnU9_rHDUaAsnaEALw_wcB" style="color:red;">Rockies</a></li>
				<li><a href="https://seatgeek.com/los-angeles-dodgers-tickets?aid=10717&gid=29759220064&rid=aud-413000092778:kwd-93694180861&dt=c&ap=1t1&adId=229407727901&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFqwdHPUBuZteaCu9Xb7K8M1Ni7AMLM68D5LWHlOBH_blRjmiSJenOoaAnFPEALw_wcB" style="color:red;">Dodgers</a></li>
				<li><a href="https://seatgeek.com/texas-rangers-tickets" style="color:red;">Rangers</a></li>
                        	<li><a href="https://seatgeek.com/houston-astros-tickets?aid=10717&gid=29759219104&rid=aud-413000092538:kwd-265702731787&dt=c&ap=1t1&adId=264297398809&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFpWiLuEK2nl0it4YQbQvP9--NMHQEyn25jvmAEIZWQNFi_YYNAC93AaAr5CEALw_wcB" style="color:red;">Astros</a></li>
                        	<li><a href="https://seatgeek.com/oakland-athletics-tickets" style="color:red;">A's</a></li>
                        	<li><a href="https://seatgeek.com/san-diego-padres-tickets?aid=10717&gid=29759220904&rid=aud-413000092538:kwd-267905212311&dt=c&ap=1t1&adId=264246561543&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFp0l5ZpUxVuq3tuLCki06UJk4cEA-rd136KeWfTYhB33EIhZUBNVCMaArlCEALw_wcB" style="color:red;">Padres</a></li>
     	                	<li><a href="https://seatgeek.com/seattle-mariners-tickets?aid=10717&gid=29759220304&rid=aud-413000092538:kwd-267905211511&dt=c&ap=1t1&adId=229407727919&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFrs92cpWleFBDZKDdhnKPEN8aNTiIOvFpNIE-rbXNC58iNigdNADEIaAvk1EALw_wcB" style="color:red;">Mariners</a></li>
			</ul>
			<li>Central</li>
			<ul>
				<li><a href="https://seatgeek.com/st-louis-cardinals-tickets?aid=10717&gid=29759215984&rid=aud-413000092538:kwd-265702733467&dt=c&ap=1t1&adId=294110801758&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFoCP4i3fXSdQKK8SsYGNpgEz3aXY4ATDnZ-x3roCk2zGHvOa02DKhcaAlh9EALw_wcB" style="color:red;">Cardinals</a></li>
        	                <li><a href="https://seatgeek.com/detroit-tigers-tickets?aid=10717&gid=29759221744&rid=aud-413000092778:kwd-267905214951&dt=c&ap=1t1&adId=229407734090&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFq00TZCL5rvdEBoS84YEAj30ahFyciHLEp8EyJoAohDGQLFpiTnfIYaAmo4EALw_wcB" style="color:red;">Tigers</a></li>
        	                <li><a href="https://seatgeek.com/cincinnati-reds-tickets?aid=10717&gid=29759221384&rid=aud-413000092538:kwd-267905213711&dt=c&ap=1t1&adId=264246511638&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFpek2YQ1o2Jn3vbLM2K83amwTLYLKU-eicxmFPVXuu7dX5zr-5v0RkaAg0JEALw_wcB" style="color:red;">Reds</a></li>
        	                <li><a href="https://seatgeek.com/kansas-city-royals-tickets?aid=10717&gid=29759221624&rid=aud-413000092538:kwd-267905213991&dt=c&ap=1t1&adId=229407728138&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFpBz5viPvXl9x-6TP3msDPcRwLnvlUsCDq--7WGIAzzZ35sPTnYQkAaAnUoEALw_wcB" style="color:red;">Royals</a></li>
        	                <li><a href="https://seatgeek.com/milwaukee-brewers-tickets?aid=10717&gid=29759219704&rid=aud-413000092778:kwd-265702732707&dt=c&ap=1t1&adId=229407727880&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFrA_u-kUFhksCIiJAnznRgc6_oUtV__wIKkZXcHUCYD0H0QebxKHxYaAj5QEALw_wcB" style="color:red;">Brewers</a></li>
        	                <li><a href="https://seatgeek.com/pittsburgh-pirates-tickets?aid=10717&gid=29759221144&rid=aud-413000092538:kwd-267905212791&dt=c&ap=1t1&adId=229407734063&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFpsrP0QiRumgET_jSQitKayr1ZHcDs_GVGFTLFoQejnGuZbXrILhyAaAoRSEALw_wcB" style="color:red;">Pirates</a></li>
        	                <li><a href="https://seatgeek.com/cleveland-indians-tickets?aid=10717&gid=29759220184&rid=aud-413000092778:kwd-267905210551&dt=c&ap=1t1&adId=229407727913&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFqqz_kqLPyDKgMDbaWrVV3uJSrU73erQW7TXk-Y72IyONOczPvgX_AaAgcQEALw_wcB" style="color:red;">Indians</a></li>
        	                <li><a href="https://seatgeek.com/minnesota-twins-tickets?aid=10717&gid=29759221864&rid=aud-413000092778:kwd-267905215351&dt=c&ap=1t1&adId=229407734102&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFqrgSwJnlZH2K-t9voEbW5IWWyy6Q5w4TW-BTDaM_hzxbDRn194BYQaAo64EALw_wcB" style="color:red;">Twins</a></li>
        	                <li><a href="https://seatgeek.com/chicago-white-sox-tickets?aid=10717&gid=29759221984&rid=aud-413000092778:kwd-267905215591&dt=c&ap=1t1&adId=229407728144&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFq00-0smFlYX0giwHBR2sz2q5nr66N_shOnd0wnY5wbNgM6KWWwhwkaAsrnEALw_wcB" style="color:red;">White Sox</a></li>
        	                <li><a href="https://seatgeek.com/chicago-cubs-tickets?aid=10717&gid=29759219824&rid=aud-413000092778:kwd-267905209351&dt=c&ap=1t1&adId=229407733910&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFrjGGqUjJ1ZRhJlfMD64FZSEHjm8dkvGpIDJheSoeYTxhR8TsRkuHUaArIwEALw_wcB" style="color:red;">Cubs</a></li>
			</ul>
			<li>East</li>
			<ul>
				<li><a href="https://seatgeek.com/baltimore-orioles-tickets?aid=10717&gid=29759220784&rid=aud-413000092778:kwd-267905212071&dt=c&ap=1t1&adId=229407728072&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFqcqz0t9i4RNpKqj--LKbhPVCOZRrZLWj6hizhIxrr_9yMozMMpfAkaAhTGEALw_wcB" style="color:red;">Orioles</a></li>
        	                <li><a href="https://seatgeek.com/new-york-mets-tickets?aid=10717&gid=29759220544&rid=aud-413000092778:kwd-267905211751&dt=c&ap=1t1&adId=229407728060&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFoX2BG4knoywbT_em7E64eHXbr-1wnlq0N3pnzn_zkvs8uY613GFz8aAn2AEALw_wcB" style="color:red;">Mets</a></li>
        	                <li><a href="https://seatgeek.com/philadelphia-phillies-tickets?aid=10717&gid=29759221024&rid=aud-413000092778:kwd-267905212751&dt=c&ap=1t1&adId=229407728102&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFq09D2pNr8HcE1Aq-INjQ5_a1BvnQevuVejKse85UZjrM_nRFSPB5AaAv3PEALw_wcB" style="color:red;">Phillies</a></li>
        	                <li><a href="https://seatgeek.com/boston-red-sox-tickets?aid=10717&gid=29759221264&rid=aud-413000092778:kwd-429470421273&dt=c&ap=1t1&adId=229407728111&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFrqiWFw8CG64HFz1Y9CnRnMdcZ0MABA8IVontK-Yxx8YDWUxOBPudIaAr6OEALw_wcB" style="color:red;">Red Sox</a></li>
        	                <li><a href="https://seatgeek.com/miami-marlins-tickets?aid=10717&gid=29759220424&rid=aud-413000092778:kwd-267905211551&dt=c&ap=1t1&adId=229735625900&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFo1tbiECnJBQ_THWR7QzOBrA7pMbTOzfI8HBZusPb8s_HsdXX635dQaAicpEALw_wcB" style="color:red;">Marlins</a></li>
        	                <li><a href="https://seatgeek.com/washington-nationals-tickets?aid=10717&gid=29759220664&rid=aud-413000092778:kwd-267905211791&dt=c&ap=1t1&adId=264297399046&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFqsa5sCIoT7NvU85P-AKH8OhI5uopxDu_Xppy7K_MBFlEDdgLdqGuAaAkYHEALw_wcB" style="color:red;">Nationals</a></li>
        	                <li><a href="https://seatgeek.com/toronto-blue-jays-tickets?aid=10717&gid=29759219464&rid=aud-413000092778:kwd-265702732467&dt=c&ap=1t1&adId=264246511428&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFoB2tawumcZVbVTGeYxOV8N8TLONabOrV6qhZ5S0ASKw5tnvxnPgt0aAhmEEALw_wcB" style="color:red;">Blue Jays</a></li>
        	                <li><a href="https://seatgeek.com/atlanta-braves-tickets?aid=10717&gid=29759219584&rid=aud-413000092778:kwd-265702732547&dt=c&ap=1t1&adId=229407733895&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFqpEEym54OPqYe5V25eFDKieoLepMeMLkXX99RIWpbBF8GmVjiyGLgaAqT2EALw_wcB" style="color:red;">Braves</a></li>
        	                <li><a href="https://seatgeek.com/tampa-bay-rays-tickets?aid=10717&gid=29759219344&rid=aud-413000092778:kwd-267905213471&dt=c&ap=1t1&adId=229407733874&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFpwz9VFiny27QUgTFe6aEO6RgNxYqXxN8yRr8nAnwH-Uu5OzZtOApQaAlvzEALw_wcB" style="color:red;">Rays</a></li>
        	                <li><a href="https://seatgeek.com/new-york-yankees-tickets?aid=10717&gid=29759222104&rid=aud-413000092778:kwd-267905215831&dt=c&ap=1t1&adId=229407734114&loc_interest=&loc_physical=9008885&n=g&mt=b&ext=&xid=1&gclid=Cj0KCQjw7sDlBRC9ARIsAD-pDFoFxxQpu9OHIoF2n4F-rMF5FpfHAysnGPgTTjaIRYttNTRGmJF8k2YaAvMKEALw_wcB" style="color:red;">Yankees</a></li>
			</ul>
		</ul>

</body>


</html>
