<?php

require_once('connections/conn.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pword = mysqli_real_escape_string($conn, $_POST['pword']);

    $query = "INSERT INTO relationUsers (userName, userPword, userType) VALUES ('$email',MD5('$pword'),0)";
    
    if(mysqli_query($conn,$query)) {
        echo "Registration Complete";
    }else{
        echo "Registration Error";
    }
} else {
    echo"Error";
}

mysqli_close($conn);

?>