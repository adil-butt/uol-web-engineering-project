<?php

	if(isset($_POST['displayAll'])) {
		header('Location: product-detail.php');	// after successful updating, if user want to display all products then display again all products
	}
	else if(isset($_POST['menu'])){
		header('Location: crud-products.php');	// after successful updating, if user want to go to main menu then go to main menu
	}

?>


<!doctype html>
<html>
<head>
<title>UPDATE SUCCESSFUL</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">					
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

	
	<?php include("header.php"); ?>
	
	<div class="container class-content">
		<p class="display-4 text-center">Product Successfully Updated</p>
		<div style="text-align: center">
			<form method="POST" action="#">
				<button type="submit" name="displayAll" class="btn btn-outline-primary">Display All Products</button>
				<button type="submit" name="menu" class="btn btn-outline-secondary">Main Menu</button>
			</form>
		</div>
	</div>
	
	<?php include("footer.php"); ?>



</body>