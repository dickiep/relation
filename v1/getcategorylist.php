<?php
	include"connections/conn.php";

	$stmt = $conn->prepare("SELECT * FROM relationProductCategories;");

	$stmt->execute();

	$stmt->bind_result($id,$title,$description);

	$category = array();

	while($stmt->fetch()) {
		$temp = array();
		$temp['id']=$id;
		$temp['category'] = $title;
		$temp['description']=$description;
		

		array_push($category,$temp);
	}

	echo json_encode(array('server_response'=>$category));

	mysqli_close($conn);
   
    
    ?>