<?php

include"connections/conn.php";

	
	$product = $_POST["product"];
	$image = $_POST["image"];
    $description = $_POST["description"];
    $code = $_POST["code"];
    $location = $_POST["location"];
    $barcode = $_POST["barcode"];


    $update_query = "UPDATE relationProducts SET name = '$description', code = '$code', barcode = '$location', image = '$image', barcode1 = '$barcode' WHERE id = $product;";
    
    //$update_query = "UPDATE relationProducts SET name = 'h', code = 'h', barcode = 'h', image = 'h' WHERE id = 9;";

	if(mysqli_query($conn, $update_query)) {
		echo "<H3>Product Updated</H3>";
	} else {
		echo "<H3>Product Update Error</H3>".mysqli_error($conn);
	}

?>