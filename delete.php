<?php

	require('config.php');

	$id = $_GET['id'];	// get id which is passed
	
	$sql = "DELETE FROM `tblproducts` WHERE `productId`=$id";	// delete product if id match
 
	if (mysqli_query($connection, $sql)) {
		mysqli_close($connection);
		header('Location: delete-successful.php');	// if successfully deleted then go to delete-successful.php
		exit;
	}	else {
		echo "Error deleting record";
	}

?>