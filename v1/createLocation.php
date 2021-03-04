<?php
	include"connections/conn.php";

	$title = $_POST["binLocation"];
	$latitude = $_POST["latitude"];
	$longitude = $_POST["longitude"];
   

	$insert_query = "INSERT INTO relationProductLocations (binLocation, Latitude, Longitude) VALUES ('$title', '$latitude','$longitude');";

	if(mysqli_query($conn, $insert_query)) {
		//echo "<H3>Location Inserted</H3>";
	} else {
		//echo "<H3>Location Insertion Error</H3>".mysqli_error($conn);
	}
?>