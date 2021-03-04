<?php
	include"connections/conn.php";

	$stmt = $conn->prepare("SELECT * FROM relationProductLocations;");

	$stmt->execute();

	$stmt->bind_result($id,$description);

	$location = array();

	while($stmt->fetch()) {
		$temp = array();
		$temp['binLocation']=$id;
		$temp['description']=$description;
		

		array_push($location,$temp);
	}

	echo json_encode(array('server_response'=>$location));

	mysqli_close($conn);
   
    
    ?>