<!doctype html>
<html>
<head>
<title>CRUD OPERATIONS</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">					
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
		
		<?php include("header.php"); ?>
		
		<div class="container class-content">
			<p class="display-4 text-center">Welcome to Admin Section</p>
			
			<div class="list-group">
				<a href="add-new-product.php" class="list-group-item list-group-item-action list-group-item-light">Add New Product</a>
				<a href="product-detail.php" class="list-group-item list-group-item-action list-group-item-light">Display All Products</a>
			</div>
			
			<div>
				<button type="logout" ><?php echo "<a href='log-out.php'>Logout</a>" ?></button>
			</div>
			
		</div>
			
		<?php include("footer.php"); ?>

</body>