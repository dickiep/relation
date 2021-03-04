<?php

include'connections/conn.php';


if (isset($_GET['userEmail'])) {
    $userEmail = $_GET['userEmail'];
    
    $query = "SELECT * FROM relationCart JOIN relationProducts ON relationProducts.id = relationCart.productID JOIN relationUsers ON relationCart.userID = relationUsers.id WHERE relationUsers.userName = '$userEmail';";
    $result = mysqli_query($conn,$query);
    $response = array();
    while($row=mysqli_fetch_assoc($result)) {
        array_push($response, 
        array(
            'id'=>$row['productID'],
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