<?php

include"connections/conn.php";

	$user = $_POST["user"];
	$product = $_POST["product"];
	

	$insert_query = "DELETE FROM relationCart WHERE userID = $user AND productID = $product;";

	if(mysqli_query($conn, $insert_query)) {
		echo "<H3>Product Deleted</H3>";
	} else {
		echo "<H3>Product Deletion Error</H3>".mysqli_error($conn);
	}

?>