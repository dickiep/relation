<?php

include'connections/conn.php';

    $key = $_GET['key'];
    
    $query = "SELECT binLocation, Latitude, Longitude FROM relationProductLocations WHERE binLocation = '$key'";
    $result = mysqli_query($conn,$query);
    $response = array();
    while($row=mysqli_fetch_assoc($result)) {
        array_push($response, 
        array(
            'binLocation'=>$row['binLocation'],
            'Latitude'=>$row['Latitude'],
            'Longitude'=>$row['Longitude']
        ));                    
    }
    
    echo json_encode($response);

mysqli_close($conn);

?>