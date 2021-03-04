<?php

include'connections/conn.php';


if (isset($_GET['userID'])) {
    $userID = $_GET['userID'];
    
    $query = "SELECT * FROM relationCart JOIN relationProducts ON relationProducts.id = relationCart.productID WHERE relationCart.userID = '$userID';";
    $result = mysqli_query($conn,$query);
    $response = array();
    while($row=mysqli_fetch_assoc($result)) {
        array_push($response, 
        array(
            'id'=>$row['id'],
            'title'=>$row['name'],
            'code'=>$row['code'],
            'location'=>$row['barcode'],
            'image'=>$row['image']
        ));                    
            
    
                   }
    //echo json_encode(array($response));
    echo json_encode($response);
    
    
}


mysqli_close($conn);

?>