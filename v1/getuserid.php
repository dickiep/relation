<?php

include'connections/conn.php';

    $key = $_GET['key'];
    
    $query = "SELECT id, userName FROM relationUsers WHERE userName = '$key'";
    $result = mysqli_query($conn,$query);
    $response = array();
    while($row=mysqli_fetch_assoc($result)) {
        array_push($response, 
        array(
            'id'=>$row['id'],
            'userName'=>$row['userName']
        ));                    
    }
    
    echo json_encode($response);

mysqli_close($conn);

?>