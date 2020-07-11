<!doctype html>
<html>
<head>
<title>CAR GALLERY</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">					
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

	<div class="home-background">
		<?php include("header.php"); ?>
	</div>
	
	<div class="slideshow-container">
		<figure>
			<div class="mySlides">
				<img class="slideshow-image" src="slider images/slide1.jpg">
			</div>
			
			<div class="mySlides">
				<img class="slideshow-image" src="slider images/slide2.jpg">
			</div>
			
			<div class="mySlides">
				<img class="slideshow-image" src="slider images/slide3.jpg">
			</div>
			
			<div class="mySlides">
				<img class="slideshow-image" src="slider images/slide4.jpg">
			</div>
			
			<div class="mySlides">
				<img class="slideshow-image" src="slider images/slide5.jpg">
			</div>
			
		</figure>
	</div>
	
	<div class="container">
		<h1 class="display-3">All About Cars</h1>
		<blockquote class="blockquote"> <p>If you are looking for a car, this is right place for you to choose your car. We provide information about cars and
		our goal is to provide every information that someone looking for about new cars.</p></blockquote>
	</div>
	
	<div class="container distance text-center">
		<div class="row">
			<div class="col-md-4">
				<div class="card" style="width: 20rem;">
					<img class="card-image-top products-thumbnail" src="products images/latest products/suzuki swift 2017/1.jpg" alt="Card image cap">
					
					<div class="card-body">
						<h4 class="card-title">Suzuki Swift</h4>
						<a href="product details/suzuki-swift-2017.php" class="btn btn-primary">Details</a>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="card" style="width: 20rem;">
					<img class="card-image-top products-thumbnail" src="products images/latest products/toyota corolla 2017/1.jpg" alt="Card image cap">
					
					<div class="card-body">
						<h4 class="card-title">Toyota Corolla</h4>
						
						<a href="product details/toyota corolla 2017.php" class="btn btn-primary">Details</a>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="card" style="width: 20rem;">
					<img class="card-image-top products-thumbnail" src="products images/latest products/toyota prius 2017/1.jpg" alt="Card image cap">
					
					<div class="card-body">
						<h4 class="card-title">Toyota Prius</h4>
					
						<a href="product details/prius 2017.php" class="btn btn-primary">Details</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<?php include("footer.php"); ?>

</body>
</html>
