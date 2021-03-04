<?php
	include"connections/conn.php";

	$stmt = $conn->prepare("SELECT * FROM relationProducts ORDER BY barcode;");

	$stmt->execute();

	$stmt->bind_result($id,$title,$code,$location,$image,$category,$barcode,$stock,$stockUpdateTime);

	$product = array();

	while($stmt->fetch()) {
		$temp = array();
		$temp['id']=$id;
		$temp['name'] = $title;
		$temp['code']=$code;
		$temp['barcode']=$location;
		$temp['image']=$image;
        $temp['category']=$category;
        $temp['barcode1']=$barcode;
        $temp['stock']=$stock;
        $temp['stockUpdateTime']=$stockUpdateTime;
		array_push($product,$temp);
	}

	echo json_encode(array('server_response'=>$product));

	mysqli_close($conn);
   
    
    ?>