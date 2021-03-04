<?php

include"connections/conn.php";

	$user = $_POST["user"];
	$product = $_POST["product"];
	$quantity = $_POST["quantity"];

	$insert_query = "INSERT INTO relationCart (userID, productID, quantity) VALUES ($user, $product, $quantity);";

	if(mysqli_query($conn, $insert_query)) {
		echo "<H3>Product Inserted</H3>";
	} else {
		echo "<H3>Product Insertion Error</H3>".mysqli_error($conn);
	}

?>