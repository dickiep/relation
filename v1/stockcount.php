<?php

include"connections/conn.php";

	$stock = $_POST["stock"];
	$product = $_POST["product"];
	//$quantity = $_POST["quantity"];
    date_default_timezone_set("Europe/London");
    $date = date('Y-m-d H:i:s', time());

	$insert_query = "UPDATE `pdickie01`.`relationProducts` SET `stock` = '$stock', `stockUpdateTime` = '$date' WHERE `relationProducts`.`id` = $product;";



	if(mysqli_query($conn, $insert_query)) {
		echo "<H3>Stock Updated</H3>";
	} else {
		echo "<H3>Stock Update Error</H3>".mysqli_error($conn);
	}

?>