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
                <p style="background-color:green; color:#FFFFFF; padding: 10px; margin: 0;" align="center">See what games are happening this month!</p>
                <nav>
                        <a href="index.php">Home</a>&nbsp;
                        <a href="stadiums.php">Stadiums</a>&nbsp;
                        <a href="withDirections.php">Plan a Trip</a>&nbsp;
                        <a href="calendar.php">Calendar</a>&nbsp;
                </nav>
        </div>




	<iframe src="https://calendar.google.com/calendar/embed?title=MLB%20Schedule%20(All%2030%20Teams)&amp;showPrint=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23cccccc&amp;src=mlb_29_Arizona%2BDiamondbacks%23sports%40group.v.calendar.google.com&amp;color=%238C500B&amp;src=mlb_15_Atlanta%2BBraves%23sports%40group.v.calendar.google.com&amp;color=%232F6309&amp;src=mlb_1_Baltimore%2BOrioles%23sports%40group.v.calendar.google.com&amp;color=%2342104A&amp;src=mlb_2_Boston%2BRed%2BSox%23sports%40group.v.calendar.google.com&amp;color=%2323164E&amp;src=lp61m5bed0v4aq43c336s7fr2g%40group.calendar.google.com&amp;color=%232952A3&amp;src=mlb_16_Chicago%2BCubs%23sports%40group.v.calendar.google.com&amp;color=%23875509&amp;src=mlb_4_Chicago%2BWhite%2BSox%23sports%40group.v.calendar.google.com&amp;color=%23853104&amp;src=mlb_17_Cincinnati%2BReds%23sports%40group.v.calendar.google.com&amp;color=%23B1440E&amp;src=mlb_5_Cleveland%2BIndians%23sports%40group.v.calendar.google.com&amp;color=%232F6309&amp;src=mlb_27_Colorado%2BRockies%23sports%40group.v.calendar.google.com&amp;color=%23711616&amp;src=mlb_6_Detroit%2BTigers%23sports%40group.v.calendar.google.com&amp;color=%23B1365F&amp;src=mlb_18_Houston%2BAstros%23sports%40group.v.calendar.google.com&amp;color=%23865A5A&amp;src=mlb_7_Kansas%2BCity%2BRoyals%23sports%40group.v.calendar.google.com&amp;color=%235229A3&amp;src=mlb_3_Los%2BAngeles%2BAngels%23sports%40group.v.calendar.google.com&amp;color=%23865A5A&amp;src=mlb_19_Los%2BAngeles%2BDodgers%23sports%40group.v.calendar.google.com&amp;color=%23182C57&amp;src=mlb_28_Miami%2BMarlins%23sports%40group.v.calendar.google.com&amp;color=%23711616&amp;src=mlb_8_Milwaukee%2BBrewers%23sports%40group.v.calendar.google.com&amp;color=%23711616&amp;src=mlb_9_Minnesota%2BTwins%23sports%40group.v.calendar.google.com&amp;color=%23B1440E&amp;src=mlb_21_New%2BYork%2BMets%23sports%40group.v.calendar.google.com&amp;color=%23AB8B00&amp;src=mlb_10_New%2BYork%2BYankees%23sports%40group.v.calendar.google.com&amp;color=%230F4B38&amp;src=mlb_32_NL%2BAll-Stars%23sports%40group.v.calendar.google.com&amp;color=%23182C57&amp;src=mlb_11_Oakland%2BAthletics%23sports%40group.v.calendar.google.com&amp;color=%2342104A&amp;src=mlb_22_Philadelphia%2BPhillies%23sports%40group.v.calendar.google.com&amp;color=%2323164E&amp;src=mlb_23_Pittsburgh%2BPirates%23sports%40group.v.calendar.google.com&amp;color=%235229A3&amp;src=mlb_25_San%2BDiego%2BPadres%23sports%40group.v.calendar.google.com&amp;color=%2329527A&amp;src=mlb_26_San%2BFrancisco%2BGiants%23sports%40group.v.calendar.google.com&amp;color=%23853104&amp;src=mlb_12_Seattle%2BMariners%23sports%40group.v.calendar.google.com&amp;color=%235F6B02&amp;src=mlb_24_St.%2BLouis%2BCardinals%23sports%40group.v.calendar.google.com&amp;color=%23B1440E&amp;src=mlb_30_Tampa%2BBay%2BRays%23sports%40group.v.calendar.google.com&amp;color=%23711616&amp;src=mlb_13_Texas%2BRangers%23sports%40group.v.calendar.google.com&amp;color=%236B3304&amp;src=mlb_14_Toronto%2BBlue%2BJays%23sports%40group.v.calendar.google.com&amp;color=%238D6F47&amp;src=mlb_20_Washington%2BNationals%23sports%40group.v.calendar.google.com&amp;color=%23875509&amp;ctz=America%2FNew_York" style="border:solid 1px #777" width="1250" height="600" frameborder="0" scrolling="no"></iframe>


	<h3 id="target" style="font-size: 30px">Link To Buy Tickets Here</h3>



	<div id="bodywrap">
                <div class="row">
                        <!-- First column will be the west coast -->
                        <div class="column">
                                <h2>West Coast</h2>
                                <hr>
                                <p style="color: #FFFFFF"><b>Buy Tickets in the West!</b></p> 
				<ul style="list-style:none;">
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





                        </div>


		</div>
                        <!-- Second column on bottom half will be central -->
                        <div class="column">
                                <h2>Central</h2>
                                <hr>
                                <p style="color: #FFFFFF"><b>Buy Tickets in the Central Region!</b></p>
				<ul style="list-style:none;">
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



                        </div>


		<div class="column">
                                <h2>East Coast</h2>
                                <hr>
                                <p style="color: #FFFFFF"><b>Buy Tickets in the East!</b></p>
				<ul style="list-style:none;">
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

                        </div>

                </div>

        </div>

















<!--

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

-->

</body>

</html>
