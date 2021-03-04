<?php

include'connections/conn.php';

    $key = $_GET['key'];
    
    
    $query = "SELECT binLocation FROM relationProductLocations WHERE binLocation like '$key%'";
    $result = mysqli_query($conn,$query);
    $response = array();
    while($row=mysqli_fetch_assoc($result)) {
        array_push($response, 
        array(
            'binLocation'=>$row['binLocation']
        ));                    
    }
    
    echo json_encode($response);

mysqli_close($conn);

?>