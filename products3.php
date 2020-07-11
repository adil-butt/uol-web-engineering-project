<!doctype html>
<html>
<head>
<title>CAR GALLERY|PRODUCTS</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">					
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	
	<div class="products-background">
		<?php include("header.php"); ?>
	</div>
	
	<div class="container distance text-center">
		
		<h1 class="display-4 mb-5 mt-5">Crossover</h1>
		
		<div class="row">
			<div class="col-md-4">
				<div class="card" style="width: 20rem;">
					<img class="card-image-top products-thumbnail" src="products images/crossover/range rover sports/1.jpg" alt="Card image cap">
					
					<div class="card-body">
						<h4 class="card-title">Range Rover Sports</h4>
						
						<a href="product details/range rover sports.php" class="btn btn-primary">Details</a>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="card" style="width: 20rem;">
					<img class="card-image-top products-thumbnail" src="products images/crossover/v8 2017/1.jpg" alt="Card image cap">
					
					<div class="card-body">
						<h4 class="card-title">Land Cruiser V8</h4>
						
						<a href="product details/v8.php" class="btn btn-primary">Details</a>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="card" style="width: 20rem;">
					<img class="card-image-top products-thumbnail" src="products images/crossover/prado/1.jpg" alt="Card image cap">
					
					<div class="card-body">
						<h4 class="card-title">Land Cruiser Prado</h4>
						
						<a href="product details/prado.php" class="btn btn-primary">Details</a>
					</div>
				</div>
			</div>
		</div>
		
		<h1 class="display-4 mb-5 mt-5">Truck</h1>
		
		<div class="row">
			<div class="col-md-4">
				<div class="card" style="width: 20rem;">
					<img class="card-image-top products-thumbnail" src="products images/truck/tundra/1.jpg" alt="Card image cap">
					
					<div class="card-body">
						<h4 class="card-title">Toyota Tundra</h4>
						
						<a href="product details/tundra.php" class="btn btn-primary">Details</a>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="card" style="width: 20rem;">
					<img class="card-image-top products-thumbnail" src="products images/truck/revo/1.jpg" alt="Card image cap">
					
					<div class="card-body">
						<h4 class="card-title">Toyota Revo</h4>
						
						<a href="product details/revo.php" class="btn btn-primary">Details</a>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="card" style="width: 20rem;">
					<img class="card-image-top products-thumbnail" src="products images/truck/vigo/1.jpg" alt="Card image cap">
					
					<div class="card-body">
						<h4 class="card-title">Toyota Vigo</h4>
						
						<a href="product details/vigo.php" class="btn btn-primary">Details</a>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	<nav class="mt-5" aria-label="pro3">
		<ul class="pagination pagination-lg">
			<li class="page-item">
				<a class="page-link" href="products2.php">Previous</a>
			</li>
			<li class="page-item"><a class="page-link" href="products.php">1</a></li>
			<li class="page-item"><a class="page-link" href="products2.php">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item disabled">
				<a class="page-link" href="products2.html" tabindex="-1">Next</a>
			</li>
		</ul>
	</nav>
	
	<?php include("footer.php"); ?>
	

</body>
</html>
