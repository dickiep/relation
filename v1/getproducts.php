<?php

include'connections/conn.php';


if (isset($_GET['key'])) {
    $key = $_GET['key'];
    
    $query = "SELECT * FROM relationProducts WHERE name LIKE '%$key%' OR barcode LIKE '%$key%' OR barcode1 = '$key';";
    $result = mysqli_query($conn,$query);
    $response = array();
    while($row=mysqli_fetch_assoc($result)) {
        array_push($response, 
        array(
            'id'=>$row['id'],
            'title'=>$row['name'],
            'code'=>$row['code'],
            'location'=>$row['barcode'],
            'image'=>$row['image'],
            'barcode'=>$row['barcode1'],
            'stock'=>$row['stock']
        ));                    
            
    
                   }
    //echo json_encode(array($response));
    echo json_encode($response);

                               
    
    
    /*
    
    $stmt = $conn->prepare("SELECT * FROM relationProducts WHERE name LIKE '%$key%';");
    $stmt->execute();

	$stmt->bind_result($id,$title,$code,$location,$image);

	$product = array();

	while($stmt->fetch()) {
		$temp = array();
		$temp['id']=$id;
		$temp['title'] = $title;
		$temp['code']=$code;
		$temp['location']=$location;
		$temp['image']=$image;

		array_push($product,$temp);
	}

	echo json_encode(array($product));
    
    */
} else {
    
    $query = "SELECT * FROM relationProducts;";
    $result = mysqli_query($conn,$query);
    $response = array();
    while($row=mysqli_fetch_assoc($result)) {
        array_push($response, array(
            'id'=>$row['id'],
            'title'=>$row['name'],
            'code'=>$row['code'],
            'location'=>$row['barcode']
            //'image'=>$row['image'])
        ));                
            
    
        }
    //echo json_encode(array($response));
      echo json_encode($response);
    
    /*
    
   	$stmt = $conn->prepare("SELECT * FROM relationProducts;");

	$stmt->execute();

	$stmt->bind_result($id,$title,$code,$location,$image);

	$product = array();

	while($stmt->fetch()) {
		$temp = array();
		$temp['id']=$id;
		$temp['title'] = $title;
		$temp['code']=$code;
		$temp['location']=$location;
		$temp['image']=$image;

		array_push($product,$temp);
	}

	echo json_encode(array($product));
    */
    
}

mysqli_close($conn);

?>