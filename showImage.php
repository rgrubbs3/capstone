<?php

include 'connect.php';

if(isset($_GET['id']))
{
	$id = mysql_real_escape_string($$_GET['id']);
	$query = mysql_query("SELECT Pictures FROM capstoneDB.StadiumLoc WHERE Stadium= 'Angel Stadium';
	while($row = mysql_fetch_assoc($query))
	{
		$imageData = $row["image"];
	}
	header("content-type : image/jpeg");
	echo $imageData;
}
else{
	echo "Error!";
}


?>
