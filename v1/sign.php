<?php

include 'connections/conn.php';

$uname = mysqli_real_escape_string($conn, $_POST['email']);
$pword = mysqli_real_escape_string($conn, $_POST['password']);

$checkuser = "select * from relationUsers where userName = '$uname' and userPword=MD5('$pword') and userType='0'";
$checkadmin = "select * from relationUsers where userName = '$uname' and userPword=MD5('$pword') and userType='1'";

$userresult = mysqli_query($conn, $checkuser) or die(mysqli_error($conn));
$adminresult = mysqli_query($conn, $checkadmin) or die(mysqli_error($conn));

if(mysqli_num_rows($userresult)>0) {
    echo "user login success";
}  else if (mysqli_num_rows($adminresult)>0){
    echo "admin login success";
} else {
    echo "login failure"; 
}

mysqli_close($conn);
