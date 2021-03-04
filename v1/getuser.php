<?php

include'connections/conn.php';


if (isset($_GET['key'])) {
    $key = $_GET['key'];
    
    $query = "SELECT * FROM relationUsers WHERE userName = '$key'';";
    $result = mysqli_query($conn,$query);
    $response = array();
    while($row=mysqli_fetch_assoc($result)) {
        array_push($response, 
        array(
            'id'=>$row['id'],
            'userName'=>$row['userName'],
            'userPword'=>$row['userPword'],
            'userType'=>$row['userType'])
        );     
    } 
    echo json_encode($response);
} 

mysqli_close($conn);

?>