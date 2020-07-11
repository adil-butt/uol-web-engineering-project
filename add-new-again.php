<?php

	if(isset($_POST['yes'])) {
		header('Location: add-new-product.php');	// if user want to add another product then go to add-new-product.php
	}
	else if(isset($_POST['no'])){
		header('Location: crud-products.php');	// if user don't want to add another product then go to crud-products.php
	}

?>


<!doctype html>
<html>
<head>
<title>ADDED SUCCESSFULLY</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">					
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

	
	<?php include("header.php"); ?>
	
	<div class="container class-content">
		<p class="display-4 text-center">Product Successfully Added</p>
		<p class="display-4 text-center">Do You Want to Add Another Product ?</p>
		<div style="text-align: center">
			<form method="POST" action="#">
				<button type="submit" name="yes" value="yes" class="btn btn-outline-primary">Yes</button>
				<button type="submit" name="no" value="no" class="btn btn-outline-secondary">No</button>
			</form>
		</div>
	</div>
	
	<?php include("footer.php"); ?>



</body>